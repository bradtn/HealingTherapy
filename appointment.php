<?php
// Page-specific variables
$page_title = 'Make an Appointment | Healing Therapy Center Dearborn';
$page_description = 'Schedule your therapy appointment at Healing Therapy Center in Dearborn, MI. Online booking available. Call (313) 654-1915 for immediate assistance.';
$canonical_url = 'https://www.healingtherapycenter.com/appointment';

// ContactPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ContactPage',
    'name' => 'Make an Appointment',
    'description' => 'Schedule a therapy appointment at Healing Therapy Center in Dearborn, Michigan by phone, email, or online booking.',
    'url' => 'https://www.healingtherapycenter.com/appointment',
    'about' => [
        '@type' => 'MedicalBusiness',
        'name' => 'Healing Therapy Center',
        'telephone' => '+13136541915',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '22005 Outer Dr W',
            'addressLocality' => 'Dearborn',
            'addressRegion' => 'MI',
            'postalCode' => '48124',
            'addressCountry' => 'US'
        ],
        'url' => 'https://www.healingtherapycenter.com'
    ]
], JSON_UNESCAPED_SLASHES);

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

    <main class="main">

        <section class="topArea appointment position-relative">
            <div class="overlay">
            </div>
            <div class="position-absolute text-center w-100">
                <h1 class="display-3 fw-bold text-white text-uppercase mt-5 pt-2">Schedule Your Therapy Appointment</h1>
            </div>

        </section>

        <section id="appointment" class="appointment section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>MAKE AN APPOINTMENT</h2>
                <p>Ready to take the first step towards better mental health? Schedule an appointment with our licensed
                    professionals
                    today. We’re here to provide the support and care you need on your journey to wellness.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-md-5 ">
                        <div class="row gy-4">
                            <div class="col-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                                    data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p><a href="tel:313-654-1915">313-654-1915</a></p>
                                </div>
                            </div><!-- End Info Item -->
                    
                            <div class="col-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p><a href="mailto:info@healingtherapycenter.com">info@healingtherapycenter.com</a></p>
                                </div>
                            </div><!-- End Info Item -->
                            <div class="col-12">
                                <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up"
                                    data-aos-delay="400">
                                    <i class="fa fa-location-pin"></i>
                                    <h3>Contact Us</h3>
                                    <p><a href="https://www.google.com/maps/place/Healing+Therapy+Center/@42.2856222,-83.2362161,17z/data=!3m1!4b1!4m6!3m5!1s0x49209db55e5af6b9:0xac011e6fed0001a0!8m2!3d42.2856183!4d-83.2336412!16s%2Fg%2F11y8d4mlbr?entry=ttu&g_ep=EgoyMDI1MTAyOC4wIKXMDSoASAFQAw%3D%3D" target="_black">22005 Outer Dr W, Dearborn, MI 48124</a></p>
                                </div>
                            </div><!-- End Info Item -->
                        </div>
                    </div>
                    <div class="col-12 col-md-7">
                        <form id="appointment_form" method="post" class="php-email-form">
                            <!-- CSRF Token (hidden) -->
                            <input type="hidden" name="csrf_token" id="csrf_token" value="">

                            <!-- Honeypot field (hidden - for spam detection) -->
                            <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

                            <!-- Tracking fields (hidden) -->
                            <input type="hidden" name="landing_page" id="landing_page" value="">
                            <input type="hidden" name="referrer" id="referrer" value="">
                            <input type="hidden" name="utm_source" id="utm_source" value="">
                            <input type="hidden" name="utm_medium" id="utm_medium" value="">
                            <input type="hidden" name="utm_campaign" id="utm_campaign" value="">

                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <input type="text" name="Name" class="form-control" id="name"
                                        placeholder="Your Name" aria-label="Your full name" required>
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="Email" id="email"
                                        placeholder="Your Email" aria-label="Your email address" required>
                                </div>
                                <div class="col-md-4 form-group mt-3 mt-md-0">
                                    <input type="tel" class="form-control" name="Phone" id="phone"
                                        placeholder="Your Phone" aria-label="Your phone number" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <label for="preferredDate" class="form-label">Preferred Appointment Date</label>
                                    <input type="date" class="form-control" name="Date" id="preferredDate"
                                        min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>">
                                    <small class="text-muted">Optional - We'll contact you to confirm</small>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <label for="preferredDoctor" class="form-label">Preferred Therapist</label>
                                    <select class="form-control" name="Doctor" id="preferredDoctor" aria-label="Select your preferred therapist">
                                        <option value="No Preference">No Preference</option>
                                        <option value="Dr. Nadia Habhab">Dr. Nadia Habhab</option>
                                        <option value="Tiffany Murray">Tiffany Murray</option>
                                        <option value="Amal Ayad">Amal Ayad</option>
                                        <option value="Malak Wehbe">Malak Wehbe</option>
                                        <option value="Donna Majed">Donna Majed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="referral_source" class="form-label">How did you hear about us?</label>
                                <select class="form-control" name="ReferralSource" id="referral_source" aria-label="How did you hear about us?">
                                    <option value="">Please select...</option>
                                    <option value="Google Search">Google Search</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Friend/Family Referral">Friend/Family Referral</option>
                                    <option value="Doctor Referral">Doctor Referral</option>
                                    <option value="Insurance Provider">Insurance Provider (FEP Blue, BCBS, etc.)</option>
                                    <option value="Psychology Today">Psychology Today</option>
                                    <option value="Federal Employee Recommendation">Federal Employee Recommendation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="message" class="form-label">Message / Reason for Appointment</label>
                                <textarea class="form-control" id="message" name="Message" rows="5"
                                    placeholder="Please tell us briefly about your needs..." required></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button id="ap_btn_submit" type="submit"
                                    class="btn btn-primary rounded-pill px-4 fs-5 mt-3">Request Appointment</button>
                                <div id="ap_msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </section>

        <section id="what-to-expect" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>What to Expect</h2>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card h-100 p-4">
                            <h3><i class="bi bi-1-circle text-primary me-2"></i>Initial Consultation</h3>
                            <p>Your first session is an opportunity for you and your therapist to get to know each other. We will discuss your concerns, goals for therapy, and answer any questions you may have about the process. This helps us create a personalized treatment plan tailored to your needs.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card h-100 p-4">
                            <h3><i class="bi bi-2-circle text-primary me-2"></i>Ongoing Sessions</h3>
                            <p>Sessions typically last 50-60 minutes and are scheduled weekly or bi-weekly depending on your needs. Your therapist will work with you using evidence-based approaches to help you develop coping strategies, process emotions, and work toward your therapeutic goals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card h-100 p-4">
                            <h3><i class="bi bi-3-circle text-primary me-2"></i>Flexible Options</h3>
                            <p>We offer both in-person sessions at our Dearborn office and telehealth appointments for your convenience. Whether you prefer face-to-face interaction or the flexibility of online therapy, we are here to accommodate your schedule and comfort level.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="insurance-info" class="faq section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Insurance and Payment</h2>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                        <p class="text-center mb-4">We accept most major insurance plans to make mental health care accessible and affordable. Our team will work with you to verify your benefits and explain any out-of-pocket costs before your first appointment. We believe financial concerns should not prevent anyone from receiving the care they need.</p>
                        <p class="text-center mb-4">If you have questions about insurance coverage or payment options, please contact us at <a href="tel:313-654-1915">(313) 654-1915</a> or email <a href="mailto:info@healingtherapycenter.com">info@healingtherapycenter.com</a>. Our administrative staff is available to assist you with insurance verification and answer any billing questions.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>

    <!-- Tracking script to capture referrer and UTM parameters -->
    <script>
    (function() {
        // Capture landing page URL
        document.getElementById('landing_page').value = window.location.href;

        // Capture referrer
        if (document.referrer) {
            document.getElementById('referrer').value = document.referrer;
        }

        // Capture UTM parameters from URL
        const urlParams = new URLSearchParams(window.location.search);

        if (urlParams.has('utm_source')) {
            document.getElementById('utm_source').value = urlParams.get('utm_source');
        }

        if (urlParams.has('utm_medium')) {
            document.getElementById('utm_medium').value = urlParams.get('utm_medium');
        }

        if (urlParams.has('utm_campaign')) {
            document.getElementById('utm_campaign').value = urlParams.get('utm_campaign');
        }
    })();
    </script>
</body>
</html>
