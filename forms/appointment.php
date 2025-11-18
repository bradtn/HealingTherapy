<?php
/**
 * Secure Appointment Form Handler
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
$rateFile = __DIR__ . '/appointment_rate_limit.txt';

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
$name = preg_replace('/[^a-zA-Z\s\-\']/', '', $name);
$name = substr($name, 0, 100);

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

// Validate and sanitize Phone
$phone = isset($_POST['Phone']) ? trim($_POST['Phone']) : '';
$phone = preg_replace('/[^0-9\-\(\)\s\+]/', '', $phone); // Allow only phone characters
$phone = substr($phone, 0, 20);

if (empty($phone) || strlen($phone) < 10) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please provide a valid phone number (at least 10 digits).']);
    exit;
}

// Validate and sanitize Preferred Date (OPTIONAL - can be empty)
$preferredDate = isset($_POST['Date']) ? trim($_POST['Date']) : '';
if (!empty($preferredDate)) {
    // Validate date format
    $dateObj = DateTime::createFromFormat('Y-m-d', $preferredDate);
    if (!$dateObj || $dateObj->format('Y-m-d') !== $preferredDate) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Please provide a valid date in YYYY-MM-DD format.']);
        exit;
    }
    // Check if date is in the future
    if ($dateObj < new DateTime()) {
        http_response_code(400);
        echo json_encode(['success' => false, 'message' => 'Preferred date must be in the future.']);
        exit;
    }
    $preferredDate = htmlspecialchars($preferredDate, ENT_QUOTES, 'UTF-8');
} else {
    $preferredDate = 'Not specified';
}

// Validate and sanitize Preferred Doctor (OPTIONAL)
$preferredDoctor = isset($_POST['Doctor']) ? trim($_POST['Doctor']) : '';
$allowedDoctors = [
    'Dr. Nadia Habhab',
    'Tiffany Murray',
    'Amal Ayad',
    'Malak Wehbe',
    'No Preference'
];

if (!empty($preferredDoctor)) {
    $preferredDoctor = htmlspecialchars($preferredDoctor, ENT_QUOTES, 'UTF-8');
    // Verify it's from the allowed list
    if (!in_array($preferredDoctor, $allowedDoctors)) {
        $preferredDoctor = 'No Preference';
    }
} else {
    $preferredDoctor = 'No Preference';
}

// Validate and sanitize Message
$message = isset($_POST['Message']) ? trim($_POST['Message']) : '';
$message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
$message = substr($message, 0, 5000);

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
    'X-Priority: 1'  // High priority for appointments
];

$emailSubject = "New Appointment Request from " . $name;

$emailBody = "NEW APPOINTMENT REQUEST - Healing Therapy Center\n\n";
$emailBody .= "==================================================\n\n";
$emailBody .= "Contact Information:\n";
$emailBody .= "Name: " . $name . "\n";
$emailBody .= "Email: " . $email . "\n";
$emailBody .= "Phone: " . $phone . "\n\n";
$emailBody .= "Appointment Preferences:\n";
$emailBody .= "Preferred Date: " . $preferredDate . "\n";
$emailBody .= "Preferred Therapist: " . $preferredDoctor . "\n\n";
$emailBody .= "Message/Reason for Appointment:\n";
$emailBody .= $message . "\n\n";
$emailBody .= "==================================================\n\n";
$emailBody .= "Submission Details:\n";
$emailBody .= "Date/Time: " . date('Y-m-d H:i:s') . "\n";
$emailBody .= "IP Address: " . $clientIP . "\n";
$emailBody .= "User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown') . "\n";
$emailBody .= "\n==================================================\n";
$emailBody .= "ACTION REQUIRED: Please contact this person within 24 hours.\n";

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
        'message' => 'Thank you for your appointment request! We will contact you within 24 hours to confirm your appointment.'
    ]);
} else {
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Failed to submit appointment request. Please call us directly at (313) 654-1915.'
    ]);
}
?>
