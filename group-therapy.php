<?php
// Page-specific variables
$page_title = 'Group Therapy in Dearborn, MI | Healing Therapy Center';
$page_description = 'Supportive group therapy in Dearborn, Michigan. Connect with others facing similar challenges. Led by licensed therapists. Anxiety, depression, grief groups.';
$canonical_url = 'https://www.healingtherapycenter.com/group-therapy';
$current_service = 'group'; // For sidebar active state

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

    <main class="main">

        <!-- Hero Section -->
        <section class="topArea group position-relative">
            <div class="overlay">
            </div>
            <div class="position-absolute text-center w-100">
                <h1 class="display-3 fw-bold text-white">Group Therapy Sessions in Dearborn, MI</h1>
                <hr class="text-white w-25 m-auto my-3">

                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>

        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mx-auto" class="content-max-width">
                        <h1>Group Therapy</h1>
                        <p>At Healing Therapy Center, our group therapy services offer a supportive and collaborative
                            environment where individuals
                            can share their experiences and learn from one another. Our experienced therapists
                            facilitate these sessions to help
                            participants gain insights, develop coping strategies, and build a sense of community.</p>
                        <h5 class="fw-bold">What is Group Therapy?</h5>
                        <p>Group therapy involves sessions with multiple participants and one or more licensed
                            therapists. This form of therapy
                            provides a unique opportunity for individuals to connect with others facing similar
                            challenges, offering mutual support
                            and understanding. Group therapy can be beneficial for a variety of issues, including
                            anxiety, depression, grief,
                            addiction, and more.</p>
                        <h5 class="fw-bold">Our Approach</h5>
                        <p>We believe in a holistic and inclusive approach to group therapy. Our therapists are skilled
                            in various therapeutic
                            techniques, including Cognitive-Behavioral Therapy (CBT), Dialectical Behavior Therapy
                            (DBT), and Mindfulness-Based
                            Stress Reduction (MBSR). This allows us to create a dynamic and effective group therapy
                            experience tailored to the needs
                            of the participants.</p>
                        <h5 class="fw-bold mt-4">Benefits of Group Therapy</h5>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-people-fill text-primary me-2"></i>Shared Experiences</h6>
                                        <p class="small mb-0">Connect with others who understand what you're going through.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-shield-check text-success me-2"></i>Supportive Environment</h6>
                                        <p class="small mb-0">Gain and provide support in a safe and confidential setting.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-lightbulb text-warning me-2"></i>Diverse Perspectives</h6>
                                        <p class="small mb-0">Learn from the experiences and insights of others.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-tools text-info me-2"></i>Skill Development</h6>
                                        <p class="small mb-0">Develop practical skills to manage your mental health and well-being.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-heart-fill text-danger me-2"></i>Sense of Community</h6>
                                        <p class="small mb-0">Build a network of support and reduce feelings of isolation.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="fw-bold">Our Therapists</h5>
                        <p>Our team of compassionate and skilled therapists brings over 20 combined years of experience
                            to Healing Therapy Center.
                            We are committed to ongoing professional development and staying current with the latest
                            research and techniques in
                            group therapy. Our goal is to provide you with the highest quality care and support.</p>
                        <h5 class="fw-bold">Getting Started</h5>
                        <p>Joining a group therapy session at Healing Therapy Center is simple. Contact us to learn
                            about our current group
                            offerings and schedule an initial consultation. During this consultation, we will discuss
                            your needs and goals to ensure
                            that group therapy is the right fit for you. We offer flexible scheduling options to
                            accommodate your busy life.</p>
                        <div class="alert alert-primary mt-4">
                            <h5>Contact Us</h5>
                            <p class="mb-0">Ready to take the first step towards healing in a supportive group setting? <strong>Call:</strong> <a href="tel:313-654-1915" class="text-dark fw-bold text-decoration-none">(313) 654-1915</a> or <a href="appointment" class="alert-link">Request an Appointment Online</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Related Services</h5>
                        <div class="card border p-3 position-sticky" class="sidebar-sticky">
                            <nav class="navbar services-menu">
                                <ul class="nav navbar-nav flex-grow-1">
                                    <li class="nav-item border-bottom border-muted">
                                        <a class="nav-link p-2" href="individual-therapy"> Individual Therapy </a>
                                    </li>
                                    <li class="nav-item border-bottom border-muted">
                                        <a class="nav-link p-2" href="couples-therapy"> Couples Therapy </a>
                                    </li>
                                    <li class="nav-item border-bottom border-muted">
                                        <a class="nav-link p-2" href="family-therapy"> Family Therapy </a>
                                    </li>
                                    <li class="nav-item border-bottom border-muted active">
                                        <a class="nav-link p-2" href="group-therapy"> Group Therapy </a>
                                    </li>
                                    <li class="nav-item border-bottom border-muted">
                                        <a class="nav-link p-2" href="psychological-testing"> Psychological Testing
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link p-2" href="telehealth-therapy"> Telehealth Therapy </a>
                                    </li>

                                </ul>
                            </nav>

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
