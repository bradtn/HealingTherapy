<?php
// Page-specific variables
$page_title = 'Malak Wehbe, LLMSW | Therapist | Healing Therapy Center';
$page_description = 'Malak Wehbe, LLMSW - Licensed therapist at Healing Therapy Center in Dearborn, MI. Specialized in trauma, anxiety, and culturally sensitive therapy.';
$canonical_url = 'https://www.healingtherapycenter.com/malak-wehbe';

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
                <h1 class="display-3 fw-bold text-white">Malak Wehbe, TLLP - Licensed Therapist</h1>
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
                            <div class="member-img rounded-circle border border-4 border-primary" style="width: 350px; height: 350px;">
                                <img src="assets/img/malak.jpg" class="img-fluid rounded-circle p-3" alt="malak wehbe"
                                    style="object-fit: cover; object-position: center; aspect-ratio: 1;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8"
                        data-aos="fade-up" data-aos-delay="100">
                        <p>Hi, I’m so glad you landed on my page! My name is Malak Wehbe, MA, TLLP, and I am a therapist trained from the Michigan School of Psychology .</p>
                        <p>
                        I help children who are struggling at home or school, as well as teens and adults navigating life’s challenges. I understand how overwhelming it can feel as a parent when your child is experiencing symptoms of ADHD, autism, anxiety, depression, trauma, or family conflict. That’s why I create a safe, supportive, and welcoming space where individuals and families can process emotions, build resilience, and grow.</p>
                        <p>Before becoming a therapist, I worked for three years as a case manager at ACCESS in Dearborn, supporting families with complex mental health needs. Those experiences shaped my dedication to providing culturally responsive care, particularly within the Arab American and Muslim communities.</p>

                        <p>In therapy, I draw from evidence-based approaches such as Cognitive Behavioral Therapy (CBT), play therapy, and art-based techniques to meet each client where they are. My goal is to help children and families feel understood, supported, and equipped with tools for lasting change.</p>

                        <p>If you’re looking for a child or family therapist in Dearborn, or seeking support for yourself, I’d be honored to walk alongside you on your journey toward healing.</p>
                                            </div>
                </div>
            </div>

        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
