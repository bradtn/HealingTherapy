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
                <h1 class="display-3 fw-bold text-white">Nadia Habhab, Ph.D., LP</h1>
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
                            <div class="member-img rounded-circle border border-4 border-primary" style="width: 350px; height: 350px;">
                                <img src="assets/img/nadia.jpg" class="img-fluid rounded-circle p-3" alt="nadia habhab"
                                    style="object-fit: cover; object-position: top; aspect-ratio: 1;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8"
                        data-aos="fade-up" data-aos-delay="100">
                        <p>As a PhD licensed psychologist with 10+ years in mental health, I believe in a client centered approach which fosters
                        resilience and personal growth. In addition to training and certification in evidence based attachment therapies and
                        cognitive behavioral therapies, I have extensive knowledge, training and experience in the field of child and adolescent
                        development and family systems. This includes specialized experience in Autism-Focused evaluations and diagnosis</p>
                        <p>
                        My therapeutic approach is grounded in attachment theory, family systems and humanistic psychology which allows me to
                        create a supportive and personalized treatment plan that is tailored to your needs. Whether you are seeking support to
                        manage relationships, navigate a diagnosis or foster support, I am committed to offering a safe, non-judgmental space
                        where you can explore your experiences and work towards healing.</p>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
