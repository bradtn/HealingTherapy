<?php
// Page-specific variables
$page_title = 'United Healthcare Therapy Michigan | UHC Mental Health';
$page_description = 'United Healthcare (UHC) therapy in Dearborn, Michigan. In-network counseling, couples therapy & ADHD testing via UnitedBehavioral Health. (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/united-healthcare-therapy-michigan';
$current_service = 'individual';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Therapy Covered by United Healthcare Insurance',
            'description' => 'Healing Therapy Center accepts United Healthcare (UHC) and UnitedBehavioral Health insurance for mental health services in Dearborn, Michigan, including individual therapy, couples and marriage therapy, family therapy, and psychological testing.',
            'url' => 'https://www.healingtherapycenter.com/united-healthcare-therapy-michigan',
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
                    'name' => 'Do I need a referral to see a therapist with UHC?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'United Healthcare PPO plans typically do not require a referral for mental health services. UHC HMO plans may require a referral from your primary care physician. We\'ll verify your specific plan\'s referral requirements during benefits verification.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How many therapy sessions does United Healthcare cover?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'UnitedBehavioral Health plans generally allow 20-52 outpatient therapy sessions per year, though coverage varies by employer and plan. Some plans have unlimited outpatient visits. We\'ll confirm your specific session allowance when we verify your benefits.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does UHC cover telehealth therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, most United Healthcare plans cover telehealth mental health services through UnitedBehavioral Health. Many plans cover virtual visits at the same copay rate as in-person therapy. We offer secure HIPAA-compliant video therapy throughout Michigan.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is couples therapy covered by United Healthcare?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many United Healthcare plans cover couples/marriage therapy when one or both partners have a diagnosed mental health condition being addressed. Coverage varies by plan. We\'ll verify if couples therapy is covered under your UHC benefits.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does UHC cover ADHD and autism testing?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'UnitedBehavioral Health often covers psychological testing including ADHD evaluations and autism assessments when medically necessary. Pre-authorization is typically required before scheduling testing. We\'ll help coordinate approval with UHC.'
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
                <div class="display-3 fw-bold text-white">United Healthcare Therapy Michigan</div>
                <hr class="text-white w-25 m-auto my-3">
                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mx-auto">
                            <h1>United Healthcare Mental Health Coverage at Healing Therapy Center</h1>

                            <p class="lead">Healing Therapy Center accepts United Healthcare (UHC) and UnitedBehavioral Health insurance for mental health services in Dearborn, Michigan. If you have UHC coverage through your employer, Medicare Advantage, or individual plan, we can provide therapy, counseling, and psychological testing using your benefits.</p>

                            <p>We're credentialed with UnitedBehavioral Health, the behavioral health division of United Healthcare. Our team will verify your mental health benefits, explain your copay or coinsurance, and handle all insurance claims so you can focus on your wellness.</p>

                            <div class="alert alert-success mb-4" data-aos="fade-up">
                                <h3 class="h5 mb-3"><i class="bi bi-check-circle-fill me-2"></i>We Accept United Healthcare Plans</h3>
                                <ul class="mb-2">
                                    <li><strong>UnitedHealthcare PPO</strong> - Preferred provider organization plans</li>
                                    <li><strong>UnitedHealthcare HMO</strong> - Health maintenance organization coverage</li>
                                    <li><strong>UnitedBehavioral Health</strong> - Behavioral health carve-out plans</li>
                                    <li><strong>UHC Employer Group Plans</strong> - Corporate and Fortune 500 company coverage</li>
                                    <li><strong>UHC Medicare Advantage</strong> - Medicare managed care plans (select)</li>
                                </ul>
                                <p class="small mb-0"><strong>Call <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a></strong> to verify your United Healthcare mental health benefits and schedule your appointment.</p>
                            </div>

                            <h2 class="mt-5 mb-3">Mental Health Services Covered by United Healthcare</h2>

                            <p>United Healthcare provides robust mental health coverage through UnitedBehavioral Health. We offer:</p>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary"><i class="bi bi-person me-2"></i>Individual Therapy</h3>
                                            <p class="small mb-0">Outpatient psychotherapy for anxiety, depression, trauma, stress management, and other mental health concerns. UHC plans typically provide generous outpatient visit allowances with competitive copays.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary"><i class="bi bi-heart me-2"></i>Couples & Marriage Therapy</h3>
                                            <p class="small mb-0">Relationship counseling and marriage therapy. Many United Healthcare plans cover couples therapy when addressing diagnosed mental health conditions affecting the relationship.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary"><i class="bi bi-people me-2"></i>Family Therapy</h3>
                                            <p class="small mb-0">Family counseling for communication issues, parenting challenges, and family conflict. UHC often covers family therapy when medically necessary for treatment.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h6 mb-2 text-primary"><i class="bi bi-clipboard-data me-2"></i>Psychological Testing</h3>
                                            <p class="small mb-0">ADHD evaluations, autism assessments, and diagnostic psychological testing for children and adults. United Healthcare typically covers testing with pre-authorization when medically necessary.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-light border-info mb-4" data-aos="fade-up">
                                <h3 class="h6 text-info mb-3"><i class="bi bi-info-circle me-2"></i>United Healthcare Mental Health Benefits</h3>
                                <p class="small mb-2">UnitedBehavioral Health coverage varies by employer and plan type. Common coverage features include:</p>
                                <ul class="small mb-2">
                                    <li><strong>Copays:</strong> UHC therapy copays typically range from $15-$50 per session depending on plan</li>
                                    <li><strong>Coinsurance:</strong> Some plans use coinsurance (e.g., 80/20 split) after deductible</li>
                                    <li><strong>Deductibles:</strong> Many plans require meeting annual deductible before coverage begins</li>
                                    <li><strong>Session Limits:</strong> UHC plans generally allow 20-52 outpatient visits per year; some have unlimited visits</li>
                                    <li><strong>Referrals:</strong> PPO plans typically don't require referrals; HMO plans may need PCP referral</li>
                                    <li><strong>Pre-Authorization:</strong> Outpatient therapy often doesn't require pre-auth; testing usually does</li>
                                </ul>
                                <p class="small mb-0"><strong>Important:</strong> Coverage, copays, deductibles, and authorization requirements vary by United Healthcare plan. We'll verify your specific benefits before your first appointment.</p>
                            </div>

                            <h2 class="mt-5 mb-3">How to Use Your United Healthcare Insurance</h2>

                            <div class="card border-0 shadow-sm mb-4" data-aos="fade-up">
                                <div class="card-body">
                                    <h3 class="h6 mb-3"><i class="bi bi-1-circle text-primary me-2"></i>Call to Schedule</h3>
                                    <p class="small mb-4">Contact us at <strong><a href="tel:313-654-1915">(313) 654-1915</a></strong>. Let us know you have United Healthcare or UnitedBehavioral Health insurance and provide your member ID number.</p>

                                    <h3 class="h6 mb-3"><i class="bi bi-2-circle text-primary me-2"></i>Benefits Verification</h3>
                                    <p class="small mb-4">Our billing team contacts UnitedBehavioral Health to verify your coverage, check your copay or coinsurance, confirm if you've met your deductible, and determine if referrals or pre-authorization are needed.</p>

                                    <h3 class="h6 mb-3"><i class="bi bi-3-circle text-primary me-2"></i>Attend Your Appointment</h3>
                                    <p class="small mb-4">Visit our Dearborn office or join via telehealth. Bring your UHC insurance card and photo ID. Pay only your copay or applicable coinsurance at each session.</p>

                                    <h3 class="h6 mb-3"><i class="bi bi-4-circle text-primary me-2"></i>We Handle Claims</h3>
                                    <p class="small mb-0">We submit all claims to UnitedBehavioral Health on your behalf. No paperwork required from you - just quality mental health care.</p>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">Who We Help with United Healthcare Coverage</h2>

                            <p>Our licensed therapists provide evidence-based treatment for Michigan residents with UHC insurance experiencing:</p>

                            <ul>
                                <li><strong>Work-Related Stress</strong> - Career pressure, job transitions, workplace conflict, burnout</li>
                                <li><strong>Anxiety Disorders</strong> - Generalized anxiety, panic attacks, social anxiety, OCD, phobias</li>
                                <li><strong>Depression</strong> - Major depression, persistent depression, seasonal depression, postpartum depression</li>
                                <li><strong>Trauma & PTSD</strong> - Childhood trauma, PTSD, complex trauma, traumatic grief</li>
                                <li><strong>Relationship Issues</strong> - Marriage problems, premarital counseling, communication difficulties</li>
                                <li><strong>Life Transitions</strong> - Divorce, relocation, career changes, empty nest, retirement</li>
                                <li><strong>Grief & Loss</strong> - Bereavement, anticipatory grief, complicated grief</li>
                                <li><strong>Perinatal Mental Health</strong> - Pregnancy anxiety, postpartum depression, fertility stress</li>
                                <li><strong>ADHD & Autism</strong> - Comprehensive testing and ongoing treatment for all ages</li>
                            </ul>

                            <h2 class="mt-5 mb-3">Why Choose Healing Therapy Center for UHC Mental Health Services</h2>

                            <ul>
                                <li><strong>UnitedBehavioral Health Network:</strong> Credentialed provider for lower out-of-pocket costs</li>
                                <li><strong>Licensed Professionals:</strong> PhD psychologist and licensed therapists (LMSW, LLMSW, TLLP)</li>
                                <li><strong>Benefits Verification:</strong> We check your UHC coverage before you start - no surprise bills</li>
                                <li><strong>Telehealth Available:</strong> Secure video therapy throughout Michigan, often covered same as in-person</li>
                                <li><strong>Convenient Dearborn Location:</strong> Easy access from Detroit, Livonia, Ann Arbor, Troy, Rochester Hills</li>
                                <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments for busy professionals</li>
                                <li><strong>We Handle Billing:</strong> Claims submitted directly to UnitedBehavioral Health</li>
                            </ul>

                            <h2 class="mt-5 mb-3">United Healthcare Mental Health FAQs</h2>

                            <h3 class="h6 mb-2">Do I need a referral to see a therapist with UHC?</h3>
                            <p>United Healthcare PPO plans typically do not require a referral for mental health services. UHC HMO plans may require a referral from your primary care physician. We'll verify your specific plan's referral requirements during benefits verification.</p>

                            <h3 class="h6 mb-2 mt-4">How many therapy sessions does United Healthcare cover?</h3>
                            <p>UnitedBehavioral Health plans generally allow 20-52 outpatient therapy sessions per year, though coverage varies by employer and plan. Some plans have unlimited outpatient visits. We'll confirm your specific session allowance when we verify your benefits.</p>

                            <h3 class="h6 mb-2 mt-4">Does UHC cover telehealth therapy?</h3>
                            <p>Yes, most United Healthcare plans cover telehealth mental health services through UnitedBehavioral Health. Many plans cover virtual visits at the same copay rate as in-person therapy. We offer secure HIPAA-compliant video therapy throughout Michigan.</p>

                            <h3 class="h6 mb-2 mt-4">Is couples therapy covered by United Healthcare?</h3>
                            <p>Many United Healthcare plans cover couples/marriage therapy when one or both partners have a diagnosed mental health condition being addressed. Coverage varies by plan. We'll verify if couples therapy is covered under your UHC benefits.</p>

                            <h3 class="h6 mb-2 mt-4">Does UHC cover ADHD and autism testing?</h3>
                            <p>UnitedBehavioral Health often covers psychological testing including ADHD evaluations and autism assessments when medically necessary. Pre-authorization is typically required before scheduling testing. We'll help coordinate approval with UHC.</p>

                            <div class="alert alert-primary mt-5" role="alert">
                                <h3 class="alert-heading"><i class="bi bi-telephone-fill me-2"></i>Start Using Your United Healthcare Benefits</h3>
                                <p class="mb-2"><strong>Call (313) 654-1915 to schedule your first appointment</strong></p>
                                <p class="mb-2">We'll verify your UnitedBehavioral Health coverage, explain your out-of-pocket costs, and get you scheduled with an experienced therapist.</p>
                                <p class="mb-0"><strong>Healing Therapy Center</strong> | 22005 Outer Dr W, Dearborn, MI 48124 | Telehealth available statewide</p>
                            </div>

                            <div class="text-center mt-4 mb-4">
                                <a href="appointment" class="btn btn-primary btn-lg px-5">Request an Appointment</a>
                            </div>

                            <div class="alert alert-light border-primary mt-4">
                                <p class="mb-2"><strong>Related Pages:</strong></p>
                                <ul class="mb-0">
                                    <li><a href="insurance">All Accepted Insurance Plans</a></li>
                                    <li><a href="individual-therapy">Individual Therapy Services</a></li>
                                    <li><a href="couples-therapy">Couples & Marriage Counseling</a></li>
                                    <li><a href="trauma-ptsd-treatment">Trauma & PTSD Treatment</a></li>
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
