<?php
// Page-specific variables
$page_title = 'Tiffany Murray, LLMSW | Therapist | Healing Therapy Center';
$page_description = 'Tiffany Murray, LLMSW - Licensed therapist at Healing Therapy Center in Dearborn, MI. Individual therapy, couples counseling, anxiety and depression treatment.';
$canonical_url = 'https://www.healingtherapycenter.com/dr-tiffany-murray';

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
                <h1 class="display-3 fw-bold text-white">Tiffany Murray, LLMSW - Licensed Therapist</h1>
                <hr class="text-white w-25 m-auto my-3">

                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>

        </section>
        <section id="about" class="about section">
            <div class="container-fluid">

                <div class="row gy-4 justify-content-center">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch justify-content-center text-center"
                        data-aos="fade-up" data-aos-delay="100">
                        <div class="team-member">
                            <div class="member-img rounded-circle border border-4 border-primary" style="width: 350px; height: 350px;">
                                <img src="assets/img/tiffany.jpg" class="img-fluid rounded-circle p-3" alt="tiffany murray" style="object-fit: cover; object-position: top; aspect-ratio: 1;">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8" data-aos="fade-up" data-aos-delay="100">
                        <p>Tiffany is a fully licensed master level clinical social worker certified and specially
                            trained in perinatal mood and
                            anxiety disorders. After adapting to her own transition through pregnancy and early
                            motherhood and working through her
                            own post-partum anxiety and depression. Tiffany found the experience of coping with her
                            transition to be a challenge
                            that sparked the motivation to work with others experiencing the same.</p>
                        <p>
                            Tiffany has additional experience working with those who are struggling to cope with grief
                            and loss and the unique
                            dynamic that a loss can present, whether it’s a loss of a sense of self through major
                            transitions in life such as
                            divorce, marriage, pregnancy, parenthood, career development or the loss of a friend or
                            loved one. Tiffany also has
                            experience working with new parents and adult individuals who are navigating the challenges
                            of high functioning
                            neurodiversity, <b>ADD</b> and <b>ADHD</b>.</p>
                        <p>
                            Tiffany has experience in applying an eclectic and humanistic approach to treatment, with
                            theoretical interventions from
                            psychoanalysis, CBT, ACT, Emotion focused therapy and DBT as well as adapting a
                            strength-based model with culturally
                            competent and trauma informed practices.</p>
                        <p>
                            Tiffany supports a collaborative approach with clients to strengthen the interpersonal
                            connection and communication
                            challenges that they may experience during these life changes.</p>
                        <p>
                            Tiffany also has experience working as a clinical hospice social worker and within a
                            part-time teaching role at Wayne
                            State University School of Social Work.
                            <ul>
                                <li><b>Credentials-12 years</b> of practice</li>
                                <li>Graduated from Wayne State University School of Social Work <b>2012</b></li>
                                <li>Postpartum Support <b>International-certification 2015</b></li>
                                <li>Postpartum Support <b>International Advanced Psychotherapy Certification-2020</b></li>
                            </ul>
                        </p>
                    </div>


                </div>
                <div class="row mt-5">
                    <div class="col-lg-4 col-md-6">
                        <div class="accordion" id="doc_accordian">
                            <div class="accordion-item">
                                <h2 class="accordion-header fw-bold" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Specialties
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Master Clinical Social Worker
                                    </div>
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
