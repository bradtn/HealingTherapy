<?php
// Page-specific variables
$page_title = 'Crisis Resources & Suicide Hotline | Healing Therapy Center';
$page_description = '24/7 crisis resources and suicide prevention hotlines. Immediate help available. National Suicide Prevention Lifeline: 988. You are not alone.';
$canonical_url = 'https://www.healingtherapycenter.com/suicide-hotline';

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
        <h1 class="display-3 fw-bold text-white">Crisis Resources & Suicide Prevention Hotline</h1>
        <hr class="text-white w-25 m-auto my-3">

        <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
    </div>

</section>

        <section id="resources" class="faq section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Resources</h2>
            </div>
            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="card border-muted position-relative p-3 text-center">
                            <h3>Suicide</h3>
                            <p>Support and assistance 24/7 for anyone feeling depressed, overwhelmed or suicidal.</p>
                            <h6 class="text-center">Call or Text:<a href="tel:988">988</a></h6>
                            <a href="https://988lifeline.org/">National Suicide Prevention Lifeline (1.800.273.TALK
                                )</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 h-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="card border-muted position-relative p-3 text-center">
                            <h3>Domestic Violence</h3>
                            <a href="https://www.thehotline.org/">National Domestic Violence Hotline
                                (1.800.799.SAFE)</a>
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
