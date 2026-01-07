<?php
// Page-specific variables
$page_title = 'Amal Ayad, LLMSW | Therapist | Healing Therapy Center';
$page_description = 'Amal Ayad, LLMSW - Licensed therapist at Healing Therapy Center in Dearborn, MI. Specializing in individual therapy, anxiety, depression, and trauma treatment.';
$canonical_url = 'https://www.healingtherapycenter.com/amal-ayad';

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
                <h1 class="display-3 fw-bold text-white">Amal Ayad, M.A - Life Coach & Therapist</h1>
                <i class="my-3 text-white text-uppercase">Life Coach</i>
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
                                <img src="assets/img/amal.jpg" class="img-fluid rounded-circle p-3 doc-pic" alt="amal ayad"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8" data-aos="fade-up" data-aos-delay="100">
                        <h2>Background & Experience</h2>
                        <p>With over a decade of experience in the mental health field, I am dedicated to helping clients unlock their potential
                        and achieve meaningful goals. I hold a Master’s degree in Counseling Psychology from Wayne State University and have
                        worked extensively with children, adults, and families, providing compassionate care and guidance.</p>
                        <p>
                            After years as a psychologist, I discovered my passion for focusing on the "here and now," empowering clients to harness
                            their personal strengths to achieve immediate and impactful results. This realization inspired me to transition to life
                            coaching, where I specialize in helping individuals build confidence, set goals, and take actionable steps toward the
                            future they desire.</p>
                        <p>
                            My approach combines structure, encouragement, and accountability. I believe in supporting clients as they move forward,
                            offering the tools they need to overcome challenges and embrace growth. Whether you're seeking clarity, direction, or
                            motivation, I am here to guide you on your journey to a more meaningful and fulfilling life.</p>
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
                                    <h3><i class="bi bi-mortarboard text-primary me-2"></i>Education</h3>
                                    <ul class="mb-0">
                                        <li>Master's Degree in Counseling Psychology</li>
                                        <li>Wayne State University</li>
                                        <li>Certified Life Coach</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 p-4">
                                    <h3><i class="bi bi-star text-primary me-2"></i>Areas of Focus</h3>
                                    <ul class="mb-0">
                                        <li>Life Coaching & Goal Setting</li>
                                        <li>Confidence Building</li>
                                        <li>Personal Growth & Development</li>
                                        <li>Work-Life Balance</li>
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
                        <h2>Schedule a Session with Amal</h2>
                        <p class="mb-4">Ready to take the next step in your personal growth journey? Amal offers both in-person sessions at our Dearborn office and telehealth appointments for your convenience. Contact us today to schedule your consultation.</p>
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
