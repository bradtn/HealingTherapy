<?php
// Page-specific variables
$page_title = 'Aetna Therapy Michigan | Mental Health Coverage Accepted';
$page_description = 'Aetna in-network therapy in Dearborn, Michigan. Counseling, couples therapy & ADHD testing with Aetna PPO, HMO & employer plans. Call (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/aetna-therapy-michigan';
$current_service = 'individual';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Therapy Covered by Aetna Insurance',
            'description' => 'Healing Therapy Center accepts Aetna insurance for mental health and behavioral health services in Dearborn, Michigan, including individual therapy, couples therapy, family therapy, and psychological testing.',
            'url' => 'https://www.healingtherapycenter.com/aetna-therapy-michigan',
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
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'Do I need a referral to see a therapist?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most Aetna PPO plans do not require a referral for mental health services. Aetna HMO plans may require a referral from your primary care physician. We\'ll verify your specific plan\'s requirements during benefits verification.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How many therapy sessions does Aetna cover per year?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Aetna plans typically allow 20-52 outpatient therapy sessions per year, though coverage varies by employer and plan type. Some plans have unlimited outpatient visits. We\'ll confirm your specific session limit when we verify benefits.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does Aetna cover telehealth therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, most Aetna plans cover telehealth mental health services. Many plans reimburse virtual visits at the same copay as in-person therapy. We offer secure HIPAA-compliant video therapy throughout Michigan.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is couples therapy covered by Aetna?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many Aetna plans cover couples/marriage therapy when one or both partners have a diagnosed mental health condition being treated. Coverage varies by plan. We\'ll verify if couples therapy is covered under your specific Aetna benefits.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does Aetna cover ADHD and autism testing?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Aetna often covers psychological testing including ADHD evaluations and autism assessments when medically necessary for diagnosis and treatment planning. Pre-authorization is typically required. We\'ll help coordinate approval with Aetna before scheduling testing.'
                    ]
                ]
            ]
        ]
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
        <section class="topArea individual position-relative">
            <div class="overlay"></div>
            <div class="position-absolute text-center w-100">
                <div class="display-3 fw-bold text-white">Aetna Therapy Michigan</div>
                <hr class="text-white w-25 m-auto my-3">
                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mx-auto">
                            <h1>Aetna Mental Health Coverage at Healing Therapy Center</h1>

                            <p class="lead">Healing Therapy Center accepts Aetna insurance for mental health and behavioral health services in Dearborn, Michigan. If you have Aetna coverage through your employer or individual plan, we can provide therapy, counseling, and psychological testing using your benefits.</p>

                            <p>We work with Aetna's behavioral health network to provide quality mental health care at competitive copay rates. Our team will verify your Aetna benefits, handle all insurance claims, and ensure you understand your out-of-pocket costs before starting treatment.</p>

                            <div class="alert alert-success mb-4" data-aos="fade-up">
                                <h3 class="h5 mb-3"><i class="bi bi-check-circle-fill me-2"></i>We Accept Aetna Insurance Plans</h3>
                                <ul class="mb-2">
                                    <li><strong>Aetna PPO</strong> - Preferred provider organization plans</li>
                                    <li><strong>Aetna HMO</strong> - Health maintenance organization coverage</li>
                                    <li><strong>Aetna Employer Group Plans</strong> - Corporate and group health insurance</li>
                                    <li><strong>Aetna Better Health (Medicaid)</strong> - Select Medicaid managed care plans</li>
                                </ul>
                                <p class="small mb-0"><strong>Call <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a></strong> to verify your Aetna mental health benefits and schedule an appointment.</p>
                            </div>

                            <h2 class="mt-5 mb-3">Mental Health Services Covered by Aetna</h2>

                            <p>Aetna provides comprehensive mental health coverage for medically necessary services. We offer:</p>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary"><i class="bi bi-person me-2"></i>Individual Therapy</h3>
                                            <p class="small mb-0">Outpatient psychotherapy for anxiety, depression, trauma, stress, grief, and other mental health concerns. Aetna plans typically cover weekly or bi-weekly therapy sessions with licensed professionals.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary"><i class="bi bi-heart me-2"></i>Couples Therapy</h3>
                                            <p class="small mb-0">Marriage counseling and relationship therapy. Many Aetna plans cover couples therapy when treating a diagnosed mental health condition affecting one or both partners.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary"><i class="bi bi-people me-2"></i>Family Therapy</h3>
                                            <p class="small mb-0">Family counseling to address communication issues, parenting challenges, and family dynamics. Aetna often covers family therapy when medically necessary.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary"><i class="bi bi-clipboard-data me-2"></i>Psychological Testing</h3>
                                            <p class="small mb-0">ADHD evaluations, autism assessments, and diagnostic psychological testing. Aetna typically covers testing with pre-authorization when medically necessary for treatment planning.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-light border-info mb-4" data-aos="fade-up">
                                <h3 class="h6 text-info mb-3"><i class="bi bi-info-circle me-2"></i>Aetna Mental Health Benefits</h3>
                                <p class="small mb-2">Aetna behavioral health coverage varies by employer group and plan type. Common coverage features include:</p>
                                <ul class="small mb-2">
                                    <li><strong>Copays:</strong> Aetna therapy copays typically range from $20-$60 per session depending on plan type</li>
                                    <li><strong>Coinsurance:</strong> Some plans use coinsurance (e.g., you pay 20%, Aetna pays 80%) after deductible is met</li>
                                    <li><strong>Deductibles:</strong> Many plans require meeting an annual deductible before coverage begins</li>
                                    <li><strong>Session Limits:</strong> Aetna plans generally allow 20-52 outpatient therapy visits per year</li>
                                    <li><strong>Pre-Authorization:</strong> Outpatient therapy often doesn't require pre-auth; testing may need approval</li>
                                </ul>
                                <p class="small mb-0"><strong>Important:</strong> Coverage, copays, deductibles, and authorization requirements vary significantly by Aetna plan. We'll verify your specific benefits before scheduling.</p>
                            </div>

                            <h2 class="mt-5 mb-3">How to Use Your Aetna Insurance for Therapy</h2>

                            <div class="card border-0 shadow-sm mb-4" data-aos="fade-up">
                                <div class="card-body">
                                    <h3 class="h6 mb-3"><i class="bi bi-1-circle text-primary me-2"></i>Schedule Your Appointment</h3>
                                    <p class="small mb-4">Call us at <strong><a href="tel:313-654-1915">(313) 654-1915</a></strong>. Let us know you have Aetna insurance and provide your member ID and group number (if employer-sponsored plan).</p>

                                    <h3 class="h6 mb-3"><i class="bi bi-2-circle text-primary me-2"></i>We Verify Your Coverage</h3>
                                    <p class="small mb-4">Our billing team contacts Aetna Behavioral Health to verify your mental health benefits, confirm your copay or coinsurance amount, check if you've met your deductible, and ensure no pre-authorization is needed.</p>

                                    <h3 class="h6 mb-3"><i class="bi bi-3-circle text-primary me-2"></i>Attend Your First Session</h3>
                                    <p class="small mb-4">Come to our Dearborn office or join via telehealth video. Bring your Aetna insurance card and valid photo ID. You'll pay only your copay or applicable coinsurance at time of service.</p>

                                    <h3 class="h6 mb-3"><i class="bi bi-4-circle text-primary me-2"></i>We Handle Claims</h3>
                                    <p class="small mb-0">We submit all claims to Aetna on your behalf. No paperwork required from you. We'll bill Aetna directly and keep you informed of any coverage updates.</p>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">Who We Help with Aetna Coverage</h2>

                            <p>Our licensed therapists provide evidence-based treatment for Michigan professionals and families with Aetna insurance experiencing:</p>

                            <ul>
                                <li><strong>Executive Stress & Burnout</strong> - High-pressure work environments, leadership challenges, work-life balance</li>
                                <li><strong>Anxiety Disorders</strong> - Generalized anxiety, panic disorder, social anxiety, health anxiety, OCD</li>
                                <li><strong>Depression</strong> - Major depressive disorder, persistent depression, postpartum depression</li>
                                <li><strong>Trauma & PTSD</strong> - Childhood trauma, complex trauma, PTSD, traumatic grief</li>
                                <li><strong>Relationship Issues</strong> - Marriage problems, premarital counseling, communication difficulties, infidelity</li>
                                <li><strong>Life Transitions</strong> - Career changes, relocation, divorce, empty nest, retirement</li>
                                <li><strong>Grief & Loss</strong> - Death of loved one, anticipatory grief, complicated grief</li>
                                <li><strong>ADHD & Autism</strong> - Diagnostic assessments and ongoing treatment for children and adults</li>
                            </ul>

                            <h2 class="mt-5 mb-3">Why Choose Healing Therapy Center for Aetna Mental Health Services</h2>

                            <ul>
                                <li><strong>Aetna Network Provider:</strong> We work with Aetna's behavioral health network for lower costs</li>
                                <li><strong>Experienced Clinicians:</strong> Licensed PhD psychologist and therapists (LMSW, LLMSW, TLLP)</li>
                                <li><strong>Benefits Verification:</strong> We check your coverage before your first visit - no surprise bills</li>
                                <li><strong>Telehealth Services:</strong> Secure video therapy throughout Michigan, often covered by Aetna</li>
                                <li><strong>Convenient Location:</strong> Dearborn office with easy access from Detroit, Livonia, Ann Arbor, Troy</li>
                                <li><strong>Flexible Hours:</strong> Evening and weekend appointments to fit your work schedule</li>
                                <li><strong>We Handle Billing:</strong> Claims submitted directly to Aetna - no paperwork for you</li>
                            </ul>

                            <h2 class="mt-5 mb-3">Aetna Mental Health Coverage Questions</h2>

                            <h3 class="h6 mb-2">Do I need a referral to see a therapist?</h3>
                            <p>Most Aetna PPO plans do not require a referral for mental health services. Aetna HMO plans may require a referral from your primary care physician. We'll verify your specific plan's requirements during benefits verification.</p>

                            <h3 class="h6 mb-2 mt-4">How many therapy sessions does Aetna cover per year?</h3>
                            <p>Aetna plans typically allow 20-52 outpatient therapy sessions per year, though coverage varies by employer and plan type. Some plans have unlimited outpatient visits. We'll confirm your specific session limit when we verify benefits.</p>

                            <h3 class="h6 mb-2 mt-4">Does Aetna cover telehealth therapy?</h3>
                            <p>Yes, most Aetna plans cover telehealth mental health services. Many plans reimburse virtual visits at the same copay as in-person therapy. We offer secure HIPAA-compliant video therapy throughout Michigan.</p>

                            <h3 class="h6 mb-2 mt-4">Is couples therapy covered by Aetna?</h3>
                            <p>Many Aetna plans cover couples/marriage therapy when one or both partners have a diagnosed mental health condition being treated. Coverage varies by plan. We'll verify if couples therapy is covered under your specific Aetna benefits.</p>

                            <h3 class="h6 mb-2 mt-4">Does Aetna cover ADHD and autism testing?</h3>
                            <p>Aetna often covers psychological testing including ADHD evaluations and autism assessments when medically necessary for diagnosis and treatment planning. Pre-authorization is typically required. We'll help coordinate approval with Aetna before scheduling testing.</p>

                            <div class="alert alert-primary mt-5" role="alert">
                                <h3 class="alert-heading"><i class="bi bi-telephone-fill me-2"></i>Ready to Use Your Aetna Benefits?</h3>
                                <p class="mb-2"><strong>Call (313) 654-1915 to get started</strong></p>
                                <p class="mb-2">We'll verify your Aetna mental health coverage, explain your out-of-pocket costs, and schedule you with an experienced therapist.</p>
                                <p class="mb-0"><strong>Healing Therapy Center</strong> | 22005 Outer Dr W, Dearborn, MI 48124 | Telehealth throughout Michigan</p>
                            </div>

                            <div class="text-center mt-4 mb-4">
                                <a href="appointment" class="btn btn-primary btn-lg px-5">Request an Appointment</a>
                            </div>

                            <div class="alert alert-light border-primary mt-4">
                                <p class="mb-2"><strong>Related Pages:</strong></p>
                                <ul class="mb-0">
                                    <li><a href="insurance">Insurance & Payment Options</a></li>
                                    <li><a href="individual-therapy">Individual Therapy</a></li>
                                    <li><a href="couples-therapy">Couples & Marriage Counseling</a></li>
                                    <li><a href="adhd-testing-evaluation">ADHD Testing & Evaluation</a></li>
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
