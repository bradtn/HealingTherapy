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

// Optional: preferred therapist (dropdown value). Sanitized; not required.
$doctor = isset($_POST['Doctor']) ? trim($_POST['Doctor']) : '';
$doctor = htmlspecialchars(strip_tags($doctor), ENT_QUOTES, 'UTF-8');
$doctor = preg_replace('/[\r\n]/', '', $doctor);
$doctor = substr($doctor, 0, 100);

// Optional: insurance (dropdown value). Sanitized; not required.
$insurance = isset($_POST['Insurance']) ? trim($_POST['Insurance']) : '';
$insurance = htmlspecialchars(strip_tags($insurance), ENT_QUOTES, 'UTF-8');
$insurance = preg_replace('/[\r\n]/', '', $insurance);
$insurance = substr($insurance, 0, 100);

// Optional: how they heard about us (dropdown value). Sanitized; not required.
$referral = isset($_POST['ReferralSource']) ? trim($_POST['ReferralSource']) : '';
$referral = htmlspecialchars(strip_tags($referral), ENT_QUOTES, 'UTF-8');
$referral = preg_replace('/[\r\n]/', '', $referral);
$referral = substr($referral, 0, 100);

// ============================================
// 5. BUILD SECURE EMAIL (branded HTML)
// ============================================

// Safe headers - prevent email injection
$safeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$headers = [
    'From: Healing Therapy Center <info@healingtherapycenter.com>',
    'Reply-To: ' . $safeEmail,
    'X-Mailer: PHP/' . phpversion(),
    'MIME-Version: 1.0',
    'Content-Type: text/html; charset=UTF-8',
    'X-Priority: 3'
];

// Descriptive subject line: who + what, plus insurance when they selected one
$emailSubject = "New message from " . $name . " — " . $subject;
if ($insurance !== '') {
    $emailSubject .= ' (' . $insurance . ')';
}
$emailSubject = substr(preg_replace('/[\r\n]/', '', $emailSubject), 0, 150);

$submittedAt = date('l, F j, Y \a\t g:i A');
$userAgent = htmlspecialchars(substr($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown', 0, 200), ENT_QUOTES, 'UTF-8');

// Reusable row renderer
$row = function ($label, $value) {
    return '<tr>'
        . '<td style="padding:10px 0;color:#82977F;font-weight:bold;font-size:13px;vertical-align:top;width:160px;border-bottom:1px solid #EEEAE2">' . $label . '</td>'
        . '<td style="padding:10px 0;color:#17394D;font-size:14px;vertical-align:top;border-bottom:1px solid #EEEAE2">' . $value . '</td>'
        . '</tr>';
};

$rows = $row('Name', $name);
$rows .= $row('Email', '<a href="mailto:' . $safeEmail . '" style="color:#245C78">' . $safeEmail . '</a>');
$rows .= $row('What they need', $subject);
if ($doctor !== '' && strtolower($doctor) !== 'no preference') {
    $rows .= $row('Preferred therapist', $doctor);
}
if ($insurance !== '') {
    $rows .= $row('Insurance', $insurance);
}
if ($referral !== '') {
    $rows .= $row('Heard about us via', $referral);
}

$emailBody = '
<div style="background:#F4F2EC;padding:24px 12px;font-family:Arial,Helvetica,sans-serif;margin:0">
  <div style="max-width:600px;margin:0 auto;background:#FFFFFF;border:1px solid #E8E4DC;border-radius:12px;overflow:hidden">
    <div style="background:#245C78;padding:22px 28px">
      <div style="color:#FFFFFF;font-size:19px;font-weight:bold;letter-spacing:.3px">Healing Therapy Center</div>
      <div style="color:#CFE0E8;font-size:13px;margin-top:3px">New website contact message</div>
    </div>
    <div style="padding:26px 28px 8px">
      <table style="width:100%;border-collapse:collapse">' . $rows . '</table>
      <div style="margin-top:22px">
        <div style="color:#82977F;font-weight:bold;font-size:13px;margin-bottom:8px;text-transform:uppercase;letter-spacing:.06em">Message</div>
        <div style="background:#FCFBF7;border-left:3px solid #82977F;border-radius:0 8px 8px 0;padding:16px 18px;color:#17394D;font-size:14px;line-height:1.65;white-space:pre-wrap">' . $message . '</div>
      </div>
      <div style="margin-top:24px;text-align:center">
        <a href="mailto:' . $safeEmail . '" style="display:inline-block;background:#245C78;color:#FFFFFF;text-decoration:none;font-size:14px;font-weight:bold;padding:12px 26px;border-radius:999px">Reply to ' . $name . '</a>
      </div>
    </div>
    <div style="padding:16px 28px;border-top:1px solid #EEEAE2;color:#9AA5AC;font-size:12px;line-height:1.5">
      Received ' . $submittedAt . '<br>
      IP ' . htmlspecialchars($clientIP, ENT_QUOTES, 'UTF-8') . ' · ' . $userAgent . '
    </div>
  </div>
</div>';

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
