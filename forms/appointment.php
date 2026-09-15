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
    'Donna Majed',
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

// Optional: how they heard about us
$referral = isset($_POST['ReferralSource']) ? trim($_POST['ReferralSource']) : '';
$referral = htmlspecialchars(strip_tags($referral), ENT_QUOTES, 'UTF-8');
$referral = preg_replace('/[\r\n]/', '', $referral);
$referral = substr($referral, 0, 100);

// Optional: insurance (dropdown value). Sanitized; not required.
$insurance = isset($_POST['Insurance']) ? trim($_POST['Insurance']) : '';
$insurance = htmlspecialchars(strip_tags($insurance), ENT_QUOTES, 'UTF-8');
$insurance = preg_replace('/[\r\n]/', '', $insurance);
$insurance = substr($insurance, 0, 100);

// ============================================
// 5. BUILD SECURE EMAIL (branded HTML — matches contact form)
// ============================================

$safeEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
$headers = [
    'From: Healing Therapy Center <info@healingtherapycenter.com>',
    'Reply-To: ' . $safeEmail,
    'X-Mailer: PHP/' . phpversion(),
    'MIME-Version: 1.0',
    'Content-Type: text/html; charset=UTF-8',
    'X-Priority: 3'  // Normal priority — matches contact form for consistent deliverability
];

// Keep the subject simple to match the contact form (which delivers reliably).
// The insurance / therapist / date details are all shown in the email body below.
$emailSubject = "New appointment request from " . $name;
$emailSubject = substr(preg_replace('/[\r\n]/', '', $emailSubject), 0, 150);

$submittedAt = date('l, F j, Y \a\t g:i A');
$userAgent = htmlspecialchars(substr($_SERVER['HTTP_USER_AGENT'] ?? 'Unknown', 0, 200), ENT_QUOTES, 'UTF-8');

$row = function ($label, $value) {
    return '<tr>'
        . '<td style="padding:10px 0;color:#82977F;font-weight:bold;font-size:13px;vertical-align:top;width:170px;border-bottom:1px solid #EEEAE2">' . $label . '</td>'
        . '<td style="padding:10px 0;color:#17394D;font-size:14px;vertical-align:top;border-bottom:1px solid #EEEAE2">' . $value . '</td>'
        . '</tr>';
};

$rows = $row('Name', $name);
$rows .= $row('Email', '<a href="mailto:' . $safeEmail . '" style="color:#245C78">' . $safeEmail . '</a>');
$rows .= $row('Phone', $phone);
$rows .= $row('Preferred date', $preferredDate);
$rows .= $row('Preferred therapist', $preferredDoctor);
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
      <div style="color:#CFE0E8;font-size:13px;margin-top:3px">New appointment request</div>
    </div>
    <div style="padding:26px 28px 8px">
      <table style="width:100%;border-collapse:collapse">' . $rows . '</table>
      <div style="margin-top:22px">
        <div style="color:#82977F;font-weight:bold;font-size:13px;margin-bottom:8px;text-transform:uppercase;letter-spacing:.06em">Message / Reason for appointment</div>
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

// ---------------------------------------------------------------------------
// TEMP DIAGNOSTIC (remove once appointment delivery is confirmed).
// Fire a plain-text CONTROL email identical in style to mailtest.php (which
// delivers). If the control arrives but the real appointment email does not,
// the appointment email's HTML/subject is being filtered. If NEITHER arrives,
// the problem is not the content. Both results are also written to a log file.
// ---------------------------------------------------------------------------
$controlHeaders = [
    'From: Healing Therapy Center <info@healingtherapycenter.com>',
    'Reply-To: info@healingtherapycenter.com',
    'X-Mailer: PHP/' . phpversion(),
    'MIME-Version: 1.0',
    'Content-Type: text/plain; charset=UTF-8',
];
$controlSubject = 'Appointment CONTROL test ' . date('H:i:s');
$controlBody = "Plain-text control email sent from appointment.php at " . date('c') . ".\n"
    . "If you receive THIS but not the styled appointment email, the appointment email content is being filtered.\n";
$controlOk = mail($EmailTo, $controlSubject, $controlBody, implode("\r\n", $controlHeaders));

@file_put_contents(
    __DIR__ . '/appointment_debug.log',
    date('c') . ' | main_mail()=' . var_export($success, true)
        . ' | control_mail()=' . var_export($controlOk, true)
        . ' | to=' . $EmailTo
        . ' | subject=' . $emailSubject . "\n",
    FILE_APPEND
);

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
