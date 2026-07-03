<?php
// Page-specific variables
$page_title = 'Federal Employee Therapist Dearborn MI | FEP Blue';
$page_description = 'Therapy for federal employees in Dearborn, MI with FEP Blue insurance. Serving USPS, CBP, FBI, and VA workers near Dearborn federal facilities.';
$canonical_url = 'https://www.healingtherapycenter.com/federal-employee-therapy-dearborn';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy for Federal Employees in Dearborn, MI',
    'description' => 'Confidential therapy for federal employees in Dearborn, MI, including USPS, CBP, FBI, and VA workers. FEP Blue insurance accepted at our Dearborn office, with telehealth available.',
    'url' => 'https://www.healingtherapycenter.com/federal-employee-therapy-dearborn',
    'areaServed' => ['@type' => 'City', 'name' => 'Dearborn'],
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
$current_service = 'individual'; // For sidebar active state

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
        <section class="topArea individual position-relative">
            <div class="overlay"></div>
            <div class="position-absolute text-center w-100">
                <div class="display-3 fw-bold text-white">Therapy for Federal Employees in Dearborn</div>
                <hr class="text-white w-25 m-auto my-3">
                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mx-auto">
                            <h1>Therapist for Federal Employees in Dearborn, Michigan</h1>

                            <p class="lead">Are you a federal employee working in Dearborn and looking for mental health support? At Healing Therapy Center, located right here in Dearborn at 22005 Outer Dr W, we specialize in providing therapy services to federal employees who accept FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance.</p>

                            <p>Whether you work for USPS at the Dearborn Post Office, commute to the Detroit Federal Building, work for CBP, FBI, VA, or any other federal agency, we understand the unique stressors of federal service and provide confidential, professional mental health care.</p>

                            <div class="alert alert-info mb-4" data-aos="fade-up">
                                <h3 class="h5 mb-3"><i class="bi bi-geo-alt-fill me-2"></i>Conveniently Located in Dearborn</h3>
                                <p class="mb-2"><strong>22005 Outer Dr W, Dearborn, MI 48124</strong></p>
                                <ul class="mb-0">
                                    <li>Easy access from Michigan Ave, Ford Rd, and Telegraph Rd</li>
                                    <li>Close to Dearborn Post Office and USPS facilities</li>
                                    <li>15 minutes from Detroit Federal Building</li>
                                    <li>Ample free parking</li>
                                    <li>Telehealth available for maximum convenience</li>
                                </ul>
                            </div>

                            <h2 class="mt-5 mb-3">We Accept FEP Blue Insurance</h2>

                            <p>Federal employees in Dearborn have excellent mental health coverage through FEP Blue. We're an in-network provider and handle all insurance billing so you can focus on your mental health.</p>

                            <div class="alert alert-success mb-4" data-aos="fade-up">
                                <h3 class="h6 mb-3"><i class="bi bi-check-circle-fill me-2"></i>FEP Blue Benefits for Dearborn Federal Employees</h3>
                                <ul class="small mb-0">
                                    <li>Individual therapy for stress, anxiety, depression, PTSD</li>
                                    <li>Couples therapy for relationship challenges</li>
                                    <li>Family therapy</li>
                                    <li>ADHD and autism testing</li>
                                    <li>Telehealth options</li>
                                </ul>
                                <p class="small mt-2 mb-0"><strong>Important:</strong> Coverage varies by plan. Call <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a> to verify your benefits. <a href="fep-blue-federal-employee-therapy" class="alert-link">Learn more about FEP Blue coverage</a>.</p>
                            </div>

                            <h2 class="mt-5 mb-3">Serving Federal Employees in Dearborn</h2>

                            <p>We proudly serve federal employees working at these Dearborn and nearby facilities:</p>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary">USPS Employees</h3>
                                            <ul class="small mb-0">
                                                <li>Dearborn Post Office (22207 Michigan Ave)</li>
                                                <li>Mail carriers, clerks, supervisors</li>
                                                <li>Detroit Processing & Distribution Center</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary">Detroit Federal Building Employees</h3>
                                            <ul class="small mb-0">
                                                <li>IRS, Social Security Administration</li>
                                                <li>Federal courts and judiciary</li>
                                                <li>All federal agencies in downtown Detroit</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary">CBP & Law Enforcement</h3>
                                            <ul class="small mb-0">
                                                <li>CBP officers at Detroit-Windsor ports</li>
                                                <li>FBI Detroit Field Office</li>
                                                <li>Federal law enforcement personnel</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary">VA & Other Agencies</h3>
                                            <ul class="small mb-0">
                                                <li>John D. Dingell VA Medical Center</li>
                                                <li>Department of Defense contractors</li>
                                                <li>All federal civilian employees in Metro Detroit</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">Mental Health Services for Dearborn Federal Employees</h2>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 bg-light">
                                        <div class="card-body">
                                            <h3 class="h6 text-primary mb-2">Work Stress & Burnout</h3>
                                            <p class="small mb-0">High-pressure federal work environments, understaffing, and heavy workloads can lead to chronic stress. We help you develop healthy coping strategies and restore work-life balance.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 bg-light">
                                        <div class="card-body">
                                            <h3 class="h6 text-primary mb-2">PTSD & Trauma (Law Enforcement)</h3>
                                            <p class="small mb-0">CBP officers, FBI agents, and federal law enforcement face traumatic incidents. Evidence-based EMDR and trauma-focused therapy provides relief.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 bg-light">
                                        <div class="card-body">
                                            <h3 class="h6 text-primary mb-2">Anxiety & Depression</h3>
                                            <p class="small mb-0">Job insecurity, performance pressure, and organizational changes can trigger anxiety and depression. CBT and other evidence-based approaches provide relief.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 bg-light">
                                        <div class="card-body">
                                            <h3 class="h6 text-primary mb-2">Couples & Family Therapy</h3>
                                            <p class="small mb-0">Shift work, frequent travel, and demanding schedules strain relationships. We help federal employee families improve communication and strengthen bonds.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">Why Dearborn Federal Employees Choose Us</h2>

                            <ul>
                                <li><strong>Local & Convenient:</strong> Our office is right here in Dearborn - no long commute to Detroit or the suburbs</li>
                                <li><strong>FEP Blue In-Network:</strong> We accept your federal employee insurance and handle all billing</li>
                                <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments available for shift workers</li>
                                <li><strong>Telehealth Available:</strong> Can't make it to the office? Secure online therapy from anywhere</li>
                                <li><strong>Complete Confidentiality:</strong> Your employer will never know you're in therapy - HIPAA protected</li>
                                <li><strong>Federal Work Culture Understanding:</strong> We understand security clearances, shift work, and federal workplace dynamics</li>
                            </ul>

                            <div class="alert alert-primary mt-5" role="alert">
                                <h3 class="alert-heading"><i class="bi bi-telephone-fill me-2"></i>Schedule an Appointment</h3>
                                <p class="mb-2"><strong>Healing Therapy Center - Dearborn Office</strong></p>
                                <p class="mb-2">22005 Outer Dr W, Dearborn, MI 48124</p>
                                <p class="mb-2"><strong>Phone:</strong> <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a></p>
                                <p class="mb-2"><strong>Hours:</strong> Monday-Friday 9am-7pm, Saturday 9am-2pm</p>
                                <p class="mb-0">We accept FEP Blue insurance for all federal employees in Dearborn and Metro Detroit. Call today to verify your benefits and schedule.</p>
                            </div>

                            <div class="text-center mt-4 mb-4">
                                <a href="appointment" class="btn btn-primary btn-lg px-5">Request an Appointment Online</a>
                            </div>

                            <div class="alert alert-light border-primary mt-4">
                                <p class="mb-2"><strong>Related Pages:</strong></p>
                                <ul class="mb-0">
                                    <li><a href="fep-blue-federal-employee-therapy">Complete FEP Blue Coverage Guide</a></li>
                                    <li><a href="insurance">All Accepted Insurance Plans</a></li>
                                    <li><a href="individual-therapy">Individual Therapy Services</a></li>
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
