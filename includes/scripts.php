<?php
/**
 * JavaScript Files and Analytics
 * Included at the end of body tag on all pages
 */
if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>
<!-- Scroll to Top Button -->
<a href="#top" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i>
</a>

<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/contact.js"></script>
<script src="assets/vendor/php-email-form/appointment.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.min.js"></script>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GA_TRACKING_ID; ?>"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', '<?php echo GA_TRACKING_ID; ?>');
</script>

<!-- Microsoft Clarity -->
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "uubyusuesp");
</script>

<!-- Clarity Enhanced Tracking -->
<script type="text/javascript">
(function() {
    // Use requestIdleCallback for non-critical tracking setup
    var scheduleTask = window.requestIdleCallback || function(cb) { setTimeout(cb, 1); };

    function initClarityEnhancements() {
        if (typeof clarity === 'undefined') return;

        var path = window.location.pathname.toLowerCase();
        var pageType = 'other';
        var therapistName = '';

        // Detect page type
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

        // Set Clarity tags
        clarity('set', 'page_type', pageType);
        if (therapistName) clarity('set', 'therapist', therapistName);
        if (pageType === 'service') clarity('set', 'service_viewed', path.replace(/[^a-z]/g, ' ').trim());

        // Use event delegation for click tracking (single listener instead of many)
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

        // Track form submissions with delegation
        document.body.addEventListener('submit', function(e) {
            var form = e.target;
            if (form.tagName !== 'FORM') return;
            var formType = form.id || (form.className ? form.className.split(' ')[0] : 'unknown');
            clarity('set', 'form_submitted', formType);
            clarity('event', 'Form_Submission');
        }, {passive: true});

        // Throttled scroll depth tracking for blog posts only
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

    // Wait for Clarity to load, then run when idle
    window.addEventListener('load', function() {
        scheduleTask(function() {
            if (typeof clarity !== 'undefined') {
                initClarityEnhancements();
            } else {
                // Clarity not loaded yet, try once more after a delay
                setTimeout(function() {
                    if (typeof clarity !== 'undefined') initClarityEnhancements();
                }, 500);
            }
        });
    });
})();
</script>
