<?php
// Page-specific variables
$page_title = 'Our Therapists | Healing Therapy Center Dearborn';
$page_description = 'Meet our licensed therapists in Dearborn, Michigan. Experienced mental health professionals specializing in anxiety, depression, trauma, couples therapy & more.';
$canonical_url = 'https://www.healingtherapycenter.com/therapists';

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
                <h1 class="display-3 fw-bold text-white">Meet Our Therapists</h1>
                <hr class="text-white w-25 m-auto my-3">
        
                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>
        
        </section>
        <section id="about" class="about section">

            <div class="container section-title" data-aos="fade-up">
                <h2>Our Team<br></h2>
                <p>At Healing Therapy Center, our team of dedicated therapists is committed to providing exceptional care and support to
                our clients. With over 20 combined years of experience in the field, our therapists bring a wealth of knowledge and
                expertise to every session. We believe that the hardest step is the first one but our compassionate and skilled
                professionals are here to guide you on your journey to health and happiness.</p>
            </div>
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center mb-5">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <a href="amal-ayad">
                            <div class="team-member">
                                <div class="member-img rounded-circle border border-4 border-primary" width="300" height="300">
                                    <img loading="lazy" src="assets/img/amal.jpg" class="img-fluid rounded-circle p-3 doc-pic" alt="amal ayad">
                                </div>
                                <div class="member-info mt-3">
                                    <h5>Amal Ayad,MA</h5>
                                    <span>Life Coach</span>
                                    <a href="amal-ayad" class="btn btn-primary d-block w-50 m-auto mt-3">View Bio</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <a href="dr-nadia-habhab">
                            <div class="team-member">
                                <div class="member-img rounded-circle border border-4 border-primary" width="300" height="300">
                                    <img loading="lazy" src="assets/img/nadia.jpg" class="img-fluid rounded-circle p-3 doc-pic doc-2" alt="nadia habhab">
                                </div>
                                <div class="member-info mt-3">
                                    <h5>Nadia Habhab , Ph.D , LP</h5>
                                    <span>Licensed Psychologist</span>
                                    <a href="dr-nadia-habhab" class="btn btn-primary d-block w-50 m-auto mt-3">View Bio</a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <a href="dr-tiffany-murray">
                            <div class="team-member">
                                <div class="member-img rounded-circle border border-4 border-primary p-3" width="300" height="300">
                                    <img loading="lazy" src="assets/img/tiffany.jpg" class="img-fluid rounded-circle doc-pic" alt="tiffany murray">
                                </div>
                                <div class="member-info mt-3">
                                    <h5>Tiffany Murray LMSW</h5>
                                    <span>Licensed Clinical Social Worker</span>
                                    <a href="dr-tiffany-murray" class="btn btn-primary d-block w-50 m-auto mt-3">View Bio</a>
                                </div>
                            </div>
                        </a>
                    </div>


                </div>
                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch justify-content-center text-center" data-aos="fade-up" data-aos-delay="100">
                        <a href="amal-ayad">
                            <div class="team-member">
                                <div class="member-img rounded-circle border border-4 border-primary" width="300" height="300">
                                    <img loading="lazy" src="assets/img/malak.jpg" class="img-fluid rounded-circle p-3 doc-pic" alt="malak wehbe">
                                </div>
                                <div class="member-info mt-3">
                                    <h5>Malak Wehbe, TLLP</h5>
                                    <span>Therapist</span>
                                    <a href="malak-wehbe" class="btn btn-primary d-block w-50 m-auto mt-3">View Bio</a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
