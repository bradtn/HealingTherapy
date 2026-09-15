<?php
/**
 * Mail configuration TEMPLATE.
 *
 * SETUP (do this on the server, via GoDaddy File Manager):
 *   1. Copy this file to  mail_config.php  (same /forms/ folder).
 *   2. Replace the placeholder api key with your real Resend API key
 *      (Resend dashboard -> API Keys -> Create API Key, "Sending access").
 *   3. Save. That's it — mail_config.php is gitignored, so the key stays
 *      only on the server and never gets committed.
 */
return [
    // Your Resend API key — starts with "re_"
    'resend_api_key' => 're_REPLACE_WITH_YOUR_KEY',

    // From address — the domain must be verified in Resend.
    'from' => 'Healing Therapy Center <info@healingtherapycenter.com>',

    // Where form notifications are delivered (the office inbox).
    'to' => 'info@healingtherapycenter.com',
];
