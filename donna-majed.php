<?php
// Page-specific variables
$page_title = 'Donna Majed, TLLP | Therapist | Healing Therapy Center';
$page_description = 'Donna Majed, TLLP - Therapist in Dearborn, MI. Specializing in women\'s mental health, anxiety, OCD, depression, postpartum, and trauma.';
$canonical_url = 'https://www.healingtherapycenter.com/donna-majed';

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
                <h1 class="display-3 fw-bold text-white">Donna Majed, TLLP - Licensed Therapist</h1>
                <i class="my-3 text-white text-uppercase">Therapist</i>
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
                                <img src="assets/img/donna.jpg" class="img-fluid rounded-circle p-3 doc-pic" alt="Donna Majed TLLP therapist"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8" data-aos="fade-up" data-aos-delay="100">
                        <h2>Background & Experience</h2>
                        <p>There comes a moment when the pressure to hold everything together becomes too heavy, when your smile masks exhaustion, and strength feels more like survival than ease. In those moments, you don&rsquo;t have to carry it all alone anymore.</p>
                        <p>Therapy is not about fixing you; it&rsquo;s about gently reconnecting with the parts of yourself that may have been quieted, stretched thin, or forgotten along the way. I believe healing happens through a collaborative and compassionate process rooted in genuine connection, curiosity, and empowerment. Together, we will explore your story, deepen your self-understanding, and build meaningful tools that support clarity, confidence, and emotional steadiness in your life.</p>
                        <p>I specialize in supporting girls and women through the many stages and transitions of life. My areas of focus include anxiety, OCD, depression, postpartum and perinatal mental health, trauma, marriage and relationship stress, and domestic violence recovery. I offer both individual and group therapy, creating spaces where you can feel seen, supported, and strengthened; whether one-on-one or alongside other women walking similar paths.</p>
                        <p>In therapy, I draw from evidence-based approaches including Cognitive Behavioral Therapy (CBT), Dialectical Behavior Therapy (DBT), Psychodynamic Therapy, and Humanistic (Person-Centered) Therapy. My work is tailored to honor your unique experiences, needs, and strengths, meeting you where YOU are with warmth and intention!</p>
                        <p>Therapy is not about becoming someone new; it&rsquo;s about coming home to yourself! You are not broken; you are emerging, growing, and evolving. Every chapter of your story matters, and I would be honored to walk beside you as you write the next one.</p>
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
                                    <h3><i class="bi bi-mortarboard text-primary me-2"></i>Education & Training</h3>
                                    <ul class="mb-0">
                                        <li>TLLP - Temporary Limited Licensed Psychologist</li>
                                        <li>Trained in CBT, DBT, Psychodynamic Therapy</li>
                                        <li>Humanistic (Person-Centered) Therapy</li>
                                        <li>Trauma-Informed Care</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card h-100 p-4">
                                    <h3><i class="bi bi-star text-primary me-2"></i>Areas of Expertise</h3>
                                    <ul class="mb-0">
                                        <li>Women's Mental Health</li>
                                        <li>Anxiety & OCD</li>
                                        <li>Depression</li>
                                        <li>Postpartum & Perinatal Mental Health</li>
                                        <li>Trauma & Domestic Violence Recovery</li>
                                        <li>Marriage & Relationship Stress</li>
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
                        <h2>Schedule a Session with Donna</h2>
                        <p class="mb-4">If you are a woman navigating life's challenges and seeking compassionate, empowering support, Donna is here to walk alongside you. She offers both individual and group therapy in a safe, supportive environment. Contact us today to schedule your consultation.</p>
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
