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
<script src="assets/js/main.js"></script>

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
    // Wait for Clarity to load
    function initClarityEnhancements() {
        if (typeof clarity === 'undefined') {
            setTimeout(initClarityEnhancements, 100);
            return;
        }

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
            if (path.includes('all-blogs')) {
                pageType = 'blog-listing';
            } else {
                pageType = 'blog';
            }
        } else if (path.includes('therapy') || path.includes('testing') || path.includes('telehealth') ||
                   path.includes('perinatal') || path.includes('counseling') || path.includes('treatment')) {
            pageType = 'service';
        } else if (path.includes('amal') || path.includes('nadia') || path.includes('tiffany') ||
                   path.includes('malak') || path.includes('donna')) {
            pageType = 'therapist';
            if (path.includes('amal')) therapistName = 'Amal Ayad';
            else if (path.includes('nadia')) therapistName = 'Dr. Nadia Habhab';
            else if (path.includes('tiffany')) therapistName = 'Tiffany Murray';
            else if (path.includes('malak')) therapistName = 'Malak Wehbe';
            else if (path.includes('donna')) therapistName = 'Donna Majed';
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
        if (therapistName) {
            clarity('set', 'therapist', therapistName);
        }

        // Track appointment button clicks
        document.querySelectorAll('a[href*="appointment"], .cta-btn, a.btn-primary').forEach(function(btn) {
            if (btn.textContent.toLowerCase().includes('appointment') ||
                btn.href && btn.href.includes('appointment')) {
                btn.addEventListener('click', function() {
                    clarity('set', 'appointment_clicked', 'true');
                    clarity('event', 'Appointment_Button_Click');
                });
            }
        });

        // Track phone number clicks
        document.querySelectorAll('a[href^="tel:"]').forEach(function(link) {
            link.addEventListener('click', function() {
                clarity('set', 'phone_clicked', 'true');
                clarity('event', 'Phone_Call_Click');
            });
        });

        // Track email clicks
        document.querySelectorAll('a[href^="mailto:"]').forEach(function(link) {
            link.addEventListener('click', function() {
                clarity('set', 'email_clicked', 'true');
                clarity('event', 'Email_Click');
            });
        });

        // Track form submissions
        document.querySelectorAll('form').forEach(function(form) {
            form.addEventListener('submit', function() {
                var formType = 'unknown';
                if (form.id) formType = form.id;
                else if (form.className) formType = form.className.split(' ')[0];
                clarity('set', 'form_submitted', formType);
                clarity('event', 'Form_Submission');
            });
        });

        // Track blog read more clicks
        document.querySelectorAll('a.btn-primary').forEach(function(btn) {
            if (btn.textContent.toLowerCase().includes('read more')) {
                btn.addEventListener('click', function() {
                    clarity('event', 'Blog_Read_More_Click');
                });
            }
        });

        // Scroll depth tracking for blog posts
        if (pageType === 'blog') {
            var scrollMarkers = [25, 50, 75, 100];
            var scrollTriggered = {};

            window.addEventListener('scroll', function() {
                var scrollPercent = Math.round((window.scrollY / (document.documentElement.scrollHeight - window.innerHeight)) * 100);

                scrollMarkers.forEach(function(marker) {
                    if (scrollPercent >= marker && !scrollTriggered[marker]) {
                        scrollTriggered[marker] = true;
                        clarity('set', 'scroll_depth', marker + '%');
                        clarity('event', 'Scroll_' + marker + '_Percent');
                    }
                });
            });
        }

        // Track service page views
        if (pageType === 'service') {
            var serviceName = path.replace(/[^a-z]/g, ' ').trim();
            clarity('set', 'service_viewed', serviceName);
        }
    }

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initClarityEnhancements);
    } else {
        initClarityEnhancements();
    }
})();
</script>
