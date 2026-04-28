<?php
// Page-specific variables
$page_title = 'Dr. Nadia Habhab, PhD, LP | Psychologist in Dearborn';
$page_description = 'Dr. Nadia Habhab, PhD, LP - Licensed psychologist at Healing Therapy Center in Dearborn, MI. Psychological testing, therapy for adults and children.';
$canonical_url = 'https://www.healingtherapycenter.com/dr-nadia-habhab';

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
            <div class="overlay">
            </div>
            <div class="position-absolute text-center w-100">
                <h1 class="display-3 fw-bold text-white">Dr. Nadia Habhab, PhD, LP - Licensed Psychologist</h1>
                <i class="my-3 text-white text-uppercase">Licensed Psychologist</i>
                <hr class="text-white w-25 m-auto my-3">

                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>

        </section>
        <section id="about" class="about section">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center align-items-center">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center text-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img rounded-circle border border-4 border-primary" style="width: 300px; height: 300px; max-width: 100%;">
                                <img src="assets/img/nadia.jpg" class="img-fluid rounded-circle p-3 doc-pic" alt="nadia habhab"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8"
                        data-aos="fade-up" data-aos-delay="100">
                        <h2>Background & Experience</h2>
                        <p>Struggling with anxiety, depression or the lasting effects of trauma? You may find yourself feeling on edge, overthinking, or reliving painful experiences. As a PhD-licensed psychologist with over 12 years of experience, I help adults understand and regulate their emotions, heal from trauma, and find relief from anxiety and depression. My approach is evidence-based, emotion focused therapy, which will help you change your overwhelming, negative emotions into more positive and adaptive emotions.</p>
                        <p>I draw from attachment-based and emotion-focused approaches to help you make sense of your experiences and create meaningful change. I'm trained in both Emotion-Focused Therapy (EFT), Cognitive Behavioral Therapy (CBT), Trauma Informed approaches, and I tailor each session to you and your experiences. I hold certification in emotion focused individual therapy (EFIT), CBT, and experience in providing trauma informed care. I am trained in the Gottman method and have experience with trauma survivors, first responders and complex PTSD.</p>
                        <p>I work with clients experiencing challenges related to anxiety and complex trauma. In our initial sessions, we will explore sources of conflict, identify triggers, and develop strategies for emotional regulation and removing emotional blocks. At the same time, we will focus on building emotional tolerance and resilience to foster long-term well-being.</p>
                    </div>
                </div>
            </div>

        </section>

        <section id="credentials" class="faq section light-background">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <h2 class="text-center mb-4">Credentials & Specializations</h2>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="card h-100 p-4">
                                    <h3><i class="bi bi-mortarboard text-primary me-2"></i>Education & Licensure</h3>
                                    <ul class="mb-0">
                                        <li>PhD in Psychology</li>
                                        <li>Licensed Psychologist (LP)</li>
                                        <li>10+ Years Clinical Experience</li>
                                        <li>Certified in Evidence-Based Attachment Therapies</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 p-4">
                                    <h3><i class="bi bi-star text-primary me-2"></i>Areas of Expertise</h3>
                                    <ul class="mb-0">
                                        <li>Mood Disorders</li>
                                        <li>Complex Trauma</li>
                                        <li>Cross Cultural Care</li>
                                        <li>Psychological Testing</li>
                                        <li>Autism Evaluations</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="schedule-cta" class="about section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>Schedule a Session with Dr. Habhab</h2>
                        <p class="mb-4">Whether you need psychological testing, autism evaluation, or therapy services, Dr. Habhab provides compassionate, evidence-based care for children, adolescents, and adults. Contact us today to schedule your consultation.</p>
                        <a href="appointment" class="btn btn-primary btn-lg">Book an Appointment</a>
                        <p class="mt-3">Or call: <a href="tel:313-654-1915">(313) 654-1915</a></p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
