<?php
// Page-specific variables
$page_title = 'Make an Appointment | Healing Therapy Center Dearborn';
$page_description = 'Schedule your therapy appointment at Healing Therapy Center in Dearborn, MI. Online booking available. Call (313) 654-1915 for immediate assistance.';
$canonical_url = 'https://www.healingtherapycenter.com/appointment';

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
                                    </select>
                                </div>
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

    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
