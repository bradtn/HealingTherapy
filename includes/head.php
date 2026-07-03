<?php
/**
 * HTML Head Section
 * Included on all pages
 *
 * Required variables (set before including this file):
 * - $page_title: Page title
 * - $page_description: Meta description
 * - $canonical_url: Canonical URL
 *
 * Optional variables:
 * - $og_title: Open Graph title (defaults to $page_title)
 * - $og_description: Open Graph description (defaults to $page_description)
 * - $og_image: Open Graph image (defaults to site logo)
 * - $schema_json: JSON-LD structured data (optional additional schema)
 */

if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}

// Set defaults for optional variables
$og_title = $og_title ?? $page_title;
$og_description = $og_description ?? $page_description;
$og_image = $og_image ?? OG_IMAGE_DEFAULT;
?>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Page Title and Description -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">

    <!-- Google Search Console Verification -->
    <meta name="google-site-verification" content="9551257daa769288">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">

    <!-- Favicons -->
    <link href="<?php echo FAVICON_PATH; ?>" rel="icon">
    <link href="<?php echo APPLE_TOUCH_ICON_PATH; ?>" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="assets/css/main.min.css?v=<?php echo CSS_VERSION; ?>" rel="stylesheet">

    <?php if (isset($schema_json) && !empty($schema_json)): ?>
    <!-- Page-Specific Structured Data -->
    <script type="application/ld+json">
    <?php echo $schema_json; ?>
    </script>
    <?php endif; ?>

    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
</head>
