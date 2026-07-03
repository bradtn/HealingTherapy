<?php
// Page-specific variables
$page_title = 'Telehealth Therapy in Michigan | Online Counseling';
$page_description = 'Secure telehealth therapy throughout Michigan. Licensed therapists for anxiety, depression, trauma, couples counseling via video. Same quality care from home.';
$canonical_url = 'https://www.healingtherapycenter.com/telehealth-therapy';
$current_service = 'telehealth'; // For sidebar active state

// Service Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Telehealth Therapy',
    'serviceType' => 'Telehealth Therapy and Online Counseling',
    'description' => 'Secure telehealth therapy and online counseling throughout Michigan. Licensed therapists provide professional support for anxiety, depression, trauma, and couples counseling via video from the comfort of your own home.',
    'url' => 'https://www.healingtherapycenter.com/telehealth-therapy',
    'areaServed' => ['@type' => 'State', 'name' => 'Michigan'],
    'provider' => [
        '@type' => 'MedicalBusiness',
        'name' => 'Healing Therapy Center',
        'telephone' => '+13136541915',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '22005 Outer Dr W',
            'addressLocality' => 'Dearborn',
            'addressRegion' => 'MI',
            'postalCode' => '48124',
            'addressCountry' => 'US'
        ],
        'url' => 'https://www.healingtherapycenter.com'
    ]
], JSON_UNESCAPED_SLASHES);

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
        <section class="topArea telehealth position-relative">
            <div class="overlay">
            </div>
            <div class="position-absolute text-center w-100">
                <h1 class="display-3 fw-bold text-white">Telehealth Therapy Services in Michigan</h1>
                <hr class="text-white w-25 m-auto my-3">

                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>

        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mx-auto" class="content-max-width">
                        <h2 class="fw-bold">Telehealth Therapy & Online Counseling</h2>
                        <p>At Healing Therapy Center, we understand that accessing mental health care can sometimes be
                            challenging due to busy
                            schedules, geographical limitations, or other barriers. That's why we offer telehealth
                            therapy and online counseling services, providing you
                            with the flexibility to receive professional support from the comfort of your own home.</p>
                        <h3 class="fw-bold">What is Telehealth Therapy?</h3>
                        <p>Telehealth therapy, also known as online therapy or virtual therapy, involves conducting
                            therapy sessions via secure
                            video conferencing platforms. This allows you to connect with your therapist in real-time,
                            just as you would in an
                            in-person session, but with the added convenience of being able to do so from any location.
                        </p>
                        <h3 class="fw-bold">Our Approach</h3>
                        <p>We believe in maintaining the same high standards of care in our telehealth therapy services
                            as we do in our in-person
                            sessions. Our therapists are trained to deliver effective and compassionate care through
                            virtual platforms, ensuring
                            that you receive the support you need, no matter where you are.</p>
                        <h3 class="fw-bold mt-4">Benefits of Telehealth Therapy</h3>

                        <div class="row g-3 mb-4">
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="0">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-house-fill text-primary me-2"></i>Convenience</h6>
                                        <p class="small mb-0">Access therapy from the comfort of your home or any private location.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-calendar-check text-success me-2"></i>Flexibility</h6>
                                        <p class="small mb-0">Schedule sessions at times that work best for you, including evenings and weekends.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-globe text-info me-2"></i>Accessibility</h6>
                                        <p class="small mb-0">Receive care even if you live in remote areas or have mobility issues.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-arrow-repeat text-warning me-2"></i>Continuity of Care</h6>
                                        <p class="small mb-0">Maintain regular therapy sessions even when traveling or during unforeseen circumstances.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body">
                                        <h6 class="mb-2"><i class="bi bi-lock-fill text-danger me-2"></i>Privacy & Security</h6>
                                        <p class="small mb-0">Enjoy a confidential and secure HIPAA-compliant environment for your therapy sessions.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h3 class="fw-bold">Our Therapists</h3>
                        <p>Our team of compassionate and skilled therapists brings over 20 combined years of experience
                            to Healing Therapy Center.
                            We are committed to ongoing professional development and staying current with the latest
                            research and techniques in
                            telehealth therapy. Our goal is to provide you with the highest quality care and support,
                            regardless of your location.</p>
                        <h3 class="fw-bold">Getting Started</h3>
                        <p>Starting telehealth therapy at Healing Therapy Center is simple. Contact us to schedule an
                            initial consultation, where
                            we will discuss your needs and goals and match you with a therapist who is best suited to
                            support you. We use secure,
                            HIPAA-compliant video conferencing platforms to ensure your privacy and confidentiality.</p>
                        <div class="alert alert-info mt-4">
                            <h5><i class="bi bi-laptop me-2"></i>Technical Requirements</h5>
                            <p class="mb-1"><i class="bi bi-check-circle me-2"></i>A device with camera and microphone (smartphone, tablet, or computer)</p>
                            <p class="mb-1"><i class="bi bi-check-circle me-2"></i>A stable internet connection</p>
                            <p class="mb-0"><i class="bi bi-check-circle me-2"></i>A private, quiet space without interruptions</p>
                        </div>
                        <div class="alert alert-primary mt-4">
                            <h5>Start Telehealth Therapy Today</h5>
                            <p class="mb-0">Ready to begin online therapy? <strong>Call:</strong> <a href="tel:313-654-1915" class="text-dark fw-bold text-decoration-none">(313) 654-1915</a> or <a href="appointment" class="alert-link">Request an Appointment Online</a></p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Related Services</h5>
                        <div class="card border p-3 position-sticky" class="sidebar-sticky">
                            <nav class="navbar services-menu">
                                <ul class="nav navbar-nav flex-grow-1">
                                    <li class="nav-item border-bottom border-muted active">
                                        <a class="nav-link p-2" href="individual-therapy"> Individual Therapy </a>
                                    </li>
                                    <li class="nav-item border-bottom border-muted">
                                        <a class="nav-link p-2" href="couples-therapy"> Couples Therapy </a>
                                    </li>
                                    <li class="nav-item border-bottom border-muted">
                                        <a class="nav-link p-2" href="family-therapy"> Family Therapy </a>
                                    </li>
                                    <li class="nav-item border-bottom border-muted">
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
