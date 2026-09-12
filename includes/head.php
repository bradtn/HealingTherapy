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
define('V2_CSS_VERSION', '2.8.4');

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

    <!-- Microsoft Clarity -->
    <script type="text/javascript">
        (function(c,l,a,r,i,t,y){
            c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
            t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
            y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
        })(window, document, "clarity", "script", "<?php echo CLARITY_PROJECT_ID; ?>");
    </script>

    <!-- Clarity Enhanced Tracking -->
    <script type="text/javascript">
    (function() {
        var scheduleTask = window.requestIdleCallback || function(cb) { setTimeout(cb, 1); };

        function initClarityEnhancements() {
            if (typeof clarity === 'undefined') return;

            var path = window.location.pathname.toLowerCase();
            var pageType = 'other';
            var therapistName = '';

            if (path === '/' || path === '/index' || path.includes('index.php') || path.includes('index.html')) {
                pageType = 'home';
            } else if (path.includes('blog') || path.includes('depression') || path.includes('anxiety') ||
                       path.includes('autism') || path.includes('trauma') || path.includes('coping') ||
                       path.includes('healing-starts') || path.includes('breaking-stigma') ||
                       path.includes('burnout') || path.includes('parenting') || path.includes('therapist')) {
                pageType = path.includes('all-blogs') ? 'blog-listing' : 'blog';
            } else if (path.includes('therapy') || path.includes('testing') || path.includes('telehealth') ||
                       path.includes('perinatal') || path.includes('counseling') || path.includes('treatment')) {
                pageType = 'service';
            } else if (path.includes('amal') || path.includes('nadia') || path.includes('tiffany') ||
                       path.includes('malak') || path.includes('donna')) {
                pageType = 'therapist';
                therapistName = path.includes('amal') ? 'Amal Ayad' :
                               path.includes('nadia') ? 'Dr. Nadia Habhab' :
                               path.includes('tiffany') ? 'Tiffany Murray' :
                               path.includes('malak') ? 'Malak Wehbe' : 'Donna Majed';
            } else if (path.includes('therapists')) {
                pageType = 'team';
            } else if (path.includes('appointment')) {
                pageType = 'appointment';
            } else if (path.includes('contact')) {
                pageType = 'contact';
            } else if (path.includes('faq')) {
                pageType = 'faq';
            } else if (path.includes('screening')) {
                pageType = 'screening-tool';
            }

            clarity('set', 'page_type', pageType);
            if (therapistName) clarity('set', 'therapist', therapistName);
            if (pageType === 'service') clarity('set', 'service_viewed', path.replace(/[^a-z]/g, ' ').trim());

            document.body.addEventListener('click', function(e) {
                var target = e.target.closest('a, button');
                if (!target) return;

                var href = target.href || '';
                var text = (target.textContent || '').toLowerCase();

                if (href.includes('appointment') || text.includes('appointment')) {
                    clarity('set', 'appointment_clicked', 'true');
                    clarity('event', 'Appointment_Button_Click');
                } else if (href.startsWith('tel:')) {
                    clarity('set', 'phone_clicked', 'true');
                    clarity('event', 'Phone_Call_Click');
                } else if (href.startsWith('mailto:')) {
                    clarity('set', 'email_clicked', 'true');
                    clarity('event', 'Email_Click');
                } else if (text.includes('read more')) {
                    clarity('event', 'Blog_Read_More_Click');
                }
            }, {passive: true});

            document.body.addEventListener('submit', function(e) {
                var form = e.target;
                if (form.tagName !== 'FORM') return;
                var formType = form.id || (form.className ? form.className.split(' ')[0] : 'unknown');
                clarity('set', 'form_submitted', formType);
                clarity('event', 'Form_Submission');
            }, {passive: true});

            if (pageType === 'blog') {
                var scrollTriggered = {};
                var ticking = false;

                window.addEventListener('scroll', function() {
                    if (ticking) return;
                    ticking = true;
                    requestAnimationFrame(function() {
                        var scrollPercent = Math.round((window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100);
                        [25, 50, 75, 100].forEach(function(marker) {
                            if (scrollPercent >= marker && !scrollTriggered[marker]) {
                                scrollTriggered[marker] = true;
                                clarity('set', 'scroll_depth', marker + '%');
                                clarity('event', 'Scroll_' + marker + '_Percent');
                            }
                        });
                        ticking = false;
                    });
                }, {passive: true});
            }
        }

        window.addEventListener('load', function() {
            scheduleTask(function() {
                if (typeof clarity !== 'undefined') {
                    initClarityEnhancements();
                } else {
                    setTimeout(function() {
                        if (typeof clarity !== 'undefined') initClarityEnhancements();
                    }, 500);
                }
            });
        });
    })();
    </script>
<?php endif; ?>
</head>
