<?php
/**
 * CSRF Token Generator
 * Returns a JSON response with a CSRF token for form protection
 */

session_start();

// Generate new CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Return token as JSON
header('Content-Type: application/json');
echo json_encode([
    'csrf_token' => $_SESSION['csrf_token']
]);
?>
