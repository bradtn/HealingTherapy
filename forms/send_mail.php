<?php
/**
 * Shared email sender — Healing Therapy Center
 *
 * Sends transactional email via the Resend HTTP API (https://resend.com) so form
 * notifications deliver reliably instead of being dropped by GoDaddy's mail().
 *
 * Credentials are read from mail_config.php (in this same folder), which is
 * gitignored and lives ONLY on the server — the API key never goes into git.
 * Copy mail_config.sample.php to mail_config.php and fill in the real values.
 *
 * ht_send_email() returns true on success, false on any failure (and logs the
 * reason via error_log so it shows up in the server error log).
 */

/**
 * @param string      $subject  Email subject line
 * @param string      $htmlBody Full HTML body
 * @param string|null $replyTo  Visitor's email address for Reply-To (optional)
 * @return bool
 */
function ht_send_email($subject, $htmlBody, $replyTo = null) {
    $configFile = __DIR__ . '/mail_config.php';
    if (!file_exists($configFile)) {
        error_log('ht_send_email: mail_config.php not found — copy mail_config.sample.php and add your Resend API key.');
        return false;
    }

    $config = require $configFile;
    $apiKey = $config['resend_api_key'] ?? '';
    $from   = $config['from'] ?? '';
    $to     = $config['to'] ?? '';

    if ($apiKey === '' || strpos($apiKey, 're_') !== 0 || $from === '' || $to === '') {
        error_log('ht_send_email: mail_config.php is missing a valid resend_api_key / from / to.');
        return false;
    }

    $payload = [
        'from'    => $from,
        'to'      => [$to],
        'subject' => $subject,
        'html'    => $htmlBody,
    ];
    if ($replyTo) {
        $payload['reply_to'] = $replyTo;
    }
    $json = json_encode($payload);

    // Preferred path: cURL (available on virtually all GoDaddy shared hosting).
    if (function_exists('curl_init')) {
        $ch = curl_init('https://api.resend.com/emails');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_HTTPHEADER     => [
                'Authorization: Bearer ' . $apiKey,
                'Content-Type: application/json',
            ],
            CURLOPT_POSTFIELDS => $json,
            CURLOPT_TIMEOUT    => 15,
        ]);
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlErr  = curl_error($ch);
        curl_close($ch);

        if ($response === false || $httpCode < 200 || $httpCode >= 300) {
            error_log('ht_send_email: Resend API error (cURL) HTTP ' . $httpCode . ' ' . $curlErr . ' ' . (is_string($response) ? $response : ''));
            return false;
        }
        return true;
    }

    // Fallback: stream context POST (if cURL is somehow disabled).
    $context = stream_context_create([
        'http' => [
            'method'        => 'POST',
            'header'        => "Authorization: Bearer " . $apiKey . "\r\n" .
                               "Content-Type: application/json\r\n",
            'content'       => $json,
            'timeout'       => 15,
            'ignore_errors' => true,
        ],
    ]);
    $response = @file_get_contents('https://api.resend.com/emails', false, $context);
    $ok = false;
    if (isset($http_response_header[0]) && preg_match('/\s(\d{3})\s/', $http_response_header[0], $m)) {
        $ok = ($m[1] >= 200 && $m[1] < 300);
    }
    if (!$ok) {
        error_log('ht_send_email: Resend API error (stream) ' . (isset($http_response_header[0]) ? $http_response_header[0] : 'no response') . ' ' . (is_string($response) ? $response : ''));
    }
    return $ok;
}
