<?php
/**
 * Router for PHP Development Server
 * Handles clean URLs without .php extension
 */

$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Remove leading slash
$path = ltrim($request_uri, '/');

// Check if it's a static file first (CSS, JS, images, fonts, etc.)
if (preg_match('/\.(css|js|jpg|jpeg|png|gif|webp|svg|ico|woff|woff2|ttf|eot|pdf|xml|txt)$/i', $path)) {
    // Let the built-in server handle static files
    return false;
}

// If empty, serve index.php
if (empty($path) || $path === '/') {
    require 'index.php';
    return true;
}

// Remove .php if it exists
$path = preg_replace('/\.php$/', '', $path);

// Check if the .php file exists
$php_file = $path . '.php';

if (file_exists($php_file)) {
    require $php_file;
    return true;
}

// 404 - file not found
http_response_code(404);
if (file_exists('404.php')) {
    require '404.php';
} else {
    echo "404 - Page Not Found";
}
return true;
