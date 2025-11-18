<?php
/**
 * Secure Contact Form Handler
 * Healing Therapy Center
 *
 * Security Features:
 * - Input validation and sanitization
 * - CSRF token protection
 * - Rate limiting (5 submissions per hour per IP)
 * - Email header injection prevention
 * - XSS protection
 * - Honeypot spam detection
 */

// Disable error display in production
ini_set('display_errors', 0);
error_reporting(E_ALL);

// Start session for CSRF token
session_start();

// Configuration
$EmailTo = "info@healingtherapycenter.com";
$maxSubmissionsPerHour = 5;
$rateFile = __DIR__ . '/rate_limit.txt';

// Set JSON response header
header('Content-Type: application/json');

// ============================================
// 1. CSRF TOKEN VALIDATION
// ============================================
if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Security validation failed. Please refresh the page and try again.']);
    exit;
}

// ============================================
// 2. RATE LIMITING (Prevent Spam)
// ============================================
$clientIP = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
$currentHour = date('Y-m-d-H');
$rateKey = $clientIP . '|' . $currentHour;

// Read existing rate limit data
$rateLimitData = [];
if (file_exists($rateFile)) {
    $rateLimitData = json_decode(file_get_contents($rateFile), true) ?? [];
}

// Clean old entries (older than 2 hours)
$twoHoursAgo = date('Y-m-d-H', strtotime('-2 hours'));
foreach ($rateLimitData as $key => $count) {
    list($ip, $hour) = explode('|', $key);
    if ($hour < $twoHoursAgo) {
        unset($rateLimitData[$key]);
    }
}

// Check rate limit
$submissionCount = $rateLimitData[$rateKey] ?? 0;
if ($submissionCount >= $maxSubmissionsPerHour) {
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Too many requests. Please try again later.']);
    exit;
}

// ============================================
// 3. HONEYPOT CHECK (Bot Detection)
// ============================================
if (!empty($_POST['website'])) {
    // Bot detected - honeypot field was filled
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Spam detected.']);
    exit;
}

// ============================================
// 4. INPUT VALIDATION & SANITIZATION
// ============================================

// Validate and sanitize Name
$name = isset($_POST['Name']) ? trim($_POST['Name']) : '';
$name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$name = preg_replace('/[^a-zA-Z\s\-\']/', '', $name); // Allow only letters, spaces, hyphens, apostrophes
$name = substr($name, 0, 100); // Limit length

if (empty($name) || strlen($name) < 2) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide a valid name (at least 2 characters).']);
    exit;
}

// Validate Email
$email = isset($_POST['Email']) ? trim($_POST['Email']) : '';
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!$email) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide a valid email address.']);
    exit;
}

// Validate and sanitize Subject
$subject = isset($_POST['Subject']) ? trim($_POST['Subject']) : '';
$subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$subject = preg_replace('/[\r\n]/', '', $subject); // Remove line breaks (prevent header injection)
$subject = substr($subject, 0, 200); // Limit length

if (empty($subject) || strlen($subject) < 3) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide a subject (at least 3 characters).']);
    exit;
}

// Validate and sanitize Message
$message = isset($_POST['Message']) ? trim($_POST['Message']) : '';
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
$message = substr($message, 0, 5000); // Limit length to 5000 chars

if (empty($message) || strlen($message) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide a message (at least 10 characters).']);
    exit;
}

// ============================================
// 5. BUILD SECURE EMAIL
// ============================================

// Safe headers - prevent email injection
$safeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$headers = [
    'From: Healing Therapy Center <info@healingtherapycenter.com>',
    'Reply-To: ' . $safeEmail,
    'X-Mailer: PHP/' . phpversion(),
    'Content-Type: text/plain; charset=UTF-8',
    'X-Priority: 3'
];

$emailSubject = "Contact Form: " . $subject;

$emailBody = "New contact form submission from Healing Therapy Center website\n\n";
$emailBody .= "==================================================\n\n";
$emailBody .= "Name: " . $name . "\n";
$emailBody .= "Email: " . $email . "\n";
$emailBody .= "Subject: " . $subject . "\n\n";
$emailBody .= "Message:\n";
$emailBody .= $message . "\n\n";
$emailBody .= "==================================================\n\n";
$emailBody .= "Submission Details:\n";
$emailBody .= "Date/Time: " . date('Y-m-d H:i:s') . "\n";
$emailBody .= "IP Address: " . $clientIP . "\n";
$emailBody .= "User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "\n";

// ============================================
// 6. SEND EMAIL
// ============================================
$success = mail($EmailTo, $emailSubject, $emailBody, implode("\r\n", $headers));

// ============================================
// 7. UPDATE RATE LIMIT & RESPOND
// ============================================
if ($success) {
    // Increment rate limit counter
    $rateLimitData[$rateKey] = $submissionCount + 1;
    file_put_contents($rateFile, json_encode($rateLimitData));

    // Generate new CSRF token for next submission
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

    echo json_encode([
        'success' => true,
        'message' => 'Thank you for contacting us! We will get back to you shortly.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Failed to send message. Please try again or call us at (313) 654-1915.'
    ]);
}
?>
