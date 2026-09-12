<?php
/**
 * V2 HTML Head
 * Same contract as /includes/head.php:
 *   required: $page_title, $page_description, $canonical_url
 *   optional: $og_title, $og_description, $og_image, $schema_json
 *
 * V2_PREVIEW (false in production) is retained so the design can still be
 * staged noindexed in a subfolder if needed; live pages index normally and
 * canonicalize to their production URL.
 */

if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}

if (!defined('V2_PREVIEW')) {
    define('V2_PREVIEW', false);
}
define('V2_CSS_VERSION', '2.8.2');

$og_title = $og_title ?? $page_title;
$og_description = $og_description ?? $page_description;
$og_image = $og_image ?? OG_IMAGE_DEFAULT;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
<?php if (V2_PREVIEW): ?>
    <meta name="robots" content="noindex, nofollow">
<?php endif; ?>

    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="9551257daa769288">

    <!-- Open Graph -->
    <meta property="og:site_name" content="<?php echo BUSINESS_NAME; ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($og_image); ?>">

    <!-- Favicons -->
    <link href="/<?php echo FAVICON_PATH; ?>" rel="icon">
    <link href="/<?php echo APPLE_TOUCH_ICON_PATH; ?>" rel="apple-touch-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- V2 stylesheet (single file, no vendor frameworks).
         Preview serves the readable source; production serves the minified build.
         Regenerate main.min.css from main.css before promoting:
         cleancss -O2 -o main.min.css main.css -->
    <link href="/assets/css/<?php echo V2_PREVIEW ? 'main.css' : 'main.min.css'; ?>?v=<?php echo V2_CSS_VERSION; ?>" rel="stylesheet">

<?php if (isset($schema_json) && !empty($schema_json)): ?>
    <script type="application/ld+json">
    <?php echo $schema_json; ?>
    </script>
<?php endif; ?>

    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

<?php if (!V2_PREVIEW): ?>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GA_TRACKING_ID; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo GA_TRACKING_ID; ?>');
    </script>
<?php endif; ?>
</head>
