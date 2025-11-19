<?php
// Page-specific variables
$page_title = 'Frequently Asked Questions | Healing Therapy Center Dearborn';
$page_description = 'Get answers to common questions about therapy services, scheduling, insurance, and what to expect at Healing Therapy Center in Dearborn, Michigan.';
$canonical_url = 'https://www.healingtherapycenter.com/faq';
$og_title = 'Frequently Asked Questions | Healing Therapy Center';

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

    <main class="main">
        <section class="topArea position-relative">
            <div class="overlay"></div>
            <div class="position-absolute text-center w-100">
                <h1 class="display-3 fw-bold text-white">Therapy FAQ's</h1>
                <hr class="text-white w-25 m-auto my-3">
                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>
        </section>

        <section id="faq" class="faq section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Have questions about our services or what to expect? Check out our Frequently Asked Questions section for quick answers to common inquiries. We're here to help you feel informed and confident about your journey with Healing Therapy Center.</p>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
                        <div class="faq-container">

                            <div class="faq-item">
                                <h3>What types of therapy do you offer?</h3>
                                <div class="faq-content">
                                    <p>We offer a range of therapy services including Individual Therapy, Couples Therapy, Family Therapy, Group Therapy, Psychological Testing, and Telehealth Therapy. Each service is tailored to meet your specific needs and goals.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3>How do I schedule an appointment?</h3>
                                <div class="faq-content">
                                    <p>Scheduling an appointment is easy! You can contact us via phone, email, or through our online booking system on our website. Our team will assist you in finding a convenient time for your session.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3>What can I expect during my first therapy session?</h3>
                                <div class="faq-content">
                                    <p>During your first session, your therapist will get to know you and understand your concerns. This initial meeting is an opportunity to discuss your goals and develop a personalized treatment plan.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3>Do you offer online therapy sessions?</h3>
                                <div class="faq-content">
                                    <p>Yes, we offer Telehealth Therapy sessions. You can receive the same high-quality care from our licensed therapists through secure online sessions, allowing you to access therapy from the comfort of your home.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3>Are your therapists licensed and experienced?</h3>
                                <div class="faq-content">
                                    <p>Absolutely. All our therapists are licensed mental health professionals with years of experience in various therapeutic modalities. They are dedicated to providing compassionate and effective care.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                            <div class="faq-item">
                                <h3>How do I know if therapy is right for me?</h3>
                                <div class="faq-content">
                                    <p>Therapy can be beneficial for anyone facing mental health challenges or seeking personal growth. If you're unsure, we offer initial consultations to help you determine if our services are a good fit for your needs.</p>
                                </div>
                                <i class="faq-toggle bi bi-chevron-right"></i>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
