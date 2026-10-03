<?php
// Error page — .htaccess serves it for ErrorDocument 404/403/500 (and router.php for 404s).
// Not indexable and no canonical. Apache passes the original error status in REDIRECT_STATUS
// under mod_php, CGI and FastCGI alike; keep it (a 403 or 500 must not turn into a 404).
// A direct request for /404 has no error status, so it gets a real 404 rather than a soft 404.
$ht_error_status = (int) ($_SERVER['REDIRECT_STATUS'] ?? 0);
http_response_code($ht_error_status >= 400 ? $ht_error_status : 404);

$page_title = 'Page Not Found | Healing Therapy Center';
$page_description = 'The page you were looking for could not be found. Browse our therapy services, meet our therapists, or request an appointment.';
$canonical_url = '';
$meta_robots = 'noindex, follow';

require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Page Not Found';
    $hero_h1 = 'We couldn&rsquo;t find that page';
    $hero_lead = 'The link may be out of date, or the page may have moved. These pages are a good place to start.';
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <div class="prose">
                <h2>Therapy services</h2>
                <ul>
                    <?php foreach ($services as $service): ?>
                    <li><a href="/<?php echo $service['url']; ?>"><?php echo htmlspecialchars($service['name']); ?></a></li>
                    <?php endforeach; ?>
                </ul>

                <h2>Getting started</h2>
                <ul>
                    <li><a href="/therapists">Meet our therapists</a></li>
                    <li><a href="/insurance">Insurance &amp; payment options</a></li>
                    <li><a href="/faq">Frequently asked questions</a></li>
                    <li><a href="/contact">Contact us</a></li>
                    <li><a href="/">Back to the homepage</a></li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
