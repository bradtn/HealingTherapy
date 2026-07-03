<?php
// Page-specific variables
$page_title = 'Federal Employee Therapist Detroit MI | FEP Blue';
$page_description = 'Therapy for federal employees in Detroit, MI with FEP Blue insurance. Serving the Detroit Federal Building, IRS, SSA, FBI, and CBP. Telehealth available.';
$canonical_url = 'https://www.healingtherapycenter.com/federal-employee-therapy-detroit';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy for Federal Employees in Detroit, MI',
    'description' => 'Therapy for federal employees in Detroit, MI, including workers at the Patrick V. McNamara Federal Building, CBP, FBI, and USPS. FEP Blue insurance accepted, in person in Dearborn or via telehealth.',
    'url' => 'https://www.healingtherapycenter.com/federal-employee-therapy-detroit',
    'areaServed' => ['@type' => 'City', 'name' => 'Detroit'],
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
$current_service = 'individual';

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

    <main class="main">
        <section class="topArea individual position-relative">
            <div class="overlay"></div>
            <div class="position-absolute text-center w-100">
                <div class="display-3 fw-bold text-white">Therapy for Federal Employees in Detroit</div>
                <hr class="text-white w-25 m-auto my-3">
                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mx-auto">
                            <h1>Therapist for Federal Employees in Detroit, Michigan</h1>

                            <p class="lead">Working for a federal agency in Detroit and need mental health support? Healing Therapy Center provides therapy services for federal employees throughout Detroit using FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance. We offer both in-person therapy at our nearby Dearborn office and convenient telehealth services.</p>

                            <p>Whether you work at the Patrick V. McNamara Federal Building, Detroit-Windsor Border Crossing, FBI Detroit Field Office, or any federal agency in Detroit, we understand the unique challenges of federal service and provide confidential, professional mental health care.</p>

                            <div class="alert alert-info mb-4" data-aos="fade-up">
                                <h3 class="h5 mb-3"><i class="bi bi-geo-alt-fill me-2"></i>Serving Detroit Federal Employees</h3>
                                <p class="mb-2"><strong>In-Person:</strong> Just 15 minutes from downtown Detroit in Dearborn</p>
                                <p class="mb-2"><strong>Telehealth:</strong> Secure online therapy from anywhere in Detroit</p>
                                <ul class="mb-0">
                                    <li>Easy access from I-96, I-94, and Lodge Freeway</li>
                                    <li>Close to Detroit Federal Building and federal facilities</li>
                                    <li>Evening and weekend appointments available</li>
                                    <li>We accept FEP Blue insurance</li>
                                </ul>
                            </div>

                            <h2 class="mt-5 mb-3">Federal Facilities We Serve in Detroit</h2>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary">Patrick V. McNamara Federal Building</h3>
                                            <ul class="small mb-0">
                                                <li>IRS Detroit offices</li>
                                                <li>Social Security Administration</li>
                                                <li>Federal court employees</li>
                                                <li>Department of Labor</li>
                                                <li>All federal agencies in the building</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary">CBP & Border Security</h3>
                                            <ul class="small mb-0">
                                                <li>Detroit-Windsor Tunnel</li>
                                                <li>Ambassador Bridge CBP</li>
                                                <li>Detroit Metropolitan Airport CBP</li>
                                                <li>Border patrol agents and officers</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary">Law Enforcement & FBI</h3>
                                            <ul class="small mb-0">
                                                <li>FBI Detroit Field Office</li>
                                                <li>Federal marshals</li>
                                                <li>DEA Detroit Division</li>
                                                <li>ATF agents</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary">USPS & Other Federal Agencies</h3>
                                            <ul class="small mb-0">
                                                <li>Detroit USPS Processing Center</li>
                                                <li>Postal carriers and supervisors</li>
                                                <li>VA medical center employees</li>
                                                <li>All federal civilian employees</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">We Accept FEP Blue Insurance</h2>

                            <p>Detroit federal employees have excellent mental health coverage through FEP Blue. We're an in-network provider and make using your benefits simple.</p>

                            <div class="alert alert-success mb-4" data-aos="fade-up">
                                <h3 class="h6 mb-3"><i class="bi bi-check-circle-fill me-2"></i>Services Covered for Federal Employees</h3>
                                <ul class="small mb-0">
                                    <li>Individual therapy for work stress, anxiety, depression, PTSD</li>
                                    <li>Couples therapy for federal employee families</li>
                                    <li>Trauma therapy for law enforcement (EMDR, CPT)</li>
                                    <li>ADHD and autism diagnostic testing</li>
                                    <li>Telehealth therapy sessions</li>
                                </ul>
                                <p class="small mt-2 mb-0"><strong>Important:</strong> Coverage varies by FEP Blue plan. Call <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a> to verify benefits. <a href="fep-blue-federal-employee-therapy" class="alert-link">Learn more</a>.</p>
                            </div>

                            <h2 class="mt-5 mb-3">Mental Health Challenges for Detroit Federal Workers</h2>

                            <p>Federal employees in Detroit face unique stressors:</p>

                            <ul>
                                <li><strong>High-stress federal work:</strong> IRS tax season, federal court deadlines, CBP border security pressures</li>
                                <li><strong>Public safety risks:</strong> Law enforcement officers face traumatic incidents and PTSD</li>
                                <li><strong>Commute stress:</strong> Long commutes from suburbs into downtown Detroit</li>
                                <li><strong>Job insecurity:</strong> Government shutdowns, budget cuts, reorganizations</li>
                                <li><strong>Work-life balance:</strong> Shift work for CBP and USPS, overtime demands</li>
                            </ul>

                            <h2 class="mt-5 mb-3">Telehealth Therapy for Detroit Federal Employees</h2>

                            <p>Many Detroit federal employees prefer telehealth therapy for convenience:</p>

                            <ul>
                                <li>No commute after a long workday</li>
                                <li>Attend sessions during lunch break from your office</li>
                                <li>Perfect for federal employees working from home</li>
                                <li>Same FEP Blue coverage as in-person visits</li>
                                <li>Secure, HIPAA-compliant video sessions</li>
                            </ul>

                            <div class="alert alert-primary mt-5" role="alert">
                                <h3 class="alert-heading"><i class="bi bi-telephone-fill me-2"></i>Schedule an Appointment</h3>
                                <p class="mb-2"><strong>Serving Detroit Federal Employees</strong></p>
                                <p class="mb-2"><strong>Phone:</strong> <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a></p>
                                <p class="mb-2"><strong>Office Location:</strong> 22005 Outer Dr W, Dearborn, MI 48124 (15 min from downtown Detroit)</p>
                                <p class="mb-0">In-person and telehealth appointments available. We accept FEP Blue for all Detroit federal employees.</p>
                            </div>

                            <div class="text-center mt-4 mb-4">
                                <a href="appointment" class="btn btn-primary btn-lg px-5">Request an Appointment</a>
                            </div>

                            <div class="alert alert-light border-primary mt-4">
                                <p class="mb-2"><strong>Related Pages:</strong></p>
                                <ul class="mb-0">
                                    <li><a href="fep-blue-federal-employee-therapy">FEP Blue Coverage Guide</a></li>
                                    <li><a href="insurance">Insurance & Payment Options</a></li>
                                    <li><a href="trauma-ptsd-treatment">PTSD Treatment for Law Enforcement</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php include 'includes/components/sidebar-services.php'; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
