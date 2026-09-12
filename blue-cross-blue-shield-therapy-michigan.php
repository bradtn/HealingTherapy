<?php
// Page-specific variables — verbatim from production
$page_title = 'BCBS Therapy Michigan | Blue Cross Mental Health';
$page_description = 'BCBS Michigan in-network therapy in Dearborn. Individual & couples counseling, ADHD testing & trauma treatment with Blue Cross Blue Shield. (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/blue-cross-blue-shield-therapy-michigan';
$current_service = 'individual';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Therapy Covered by Blue Cross Blue Shield Michigan',
            'description' => 'Healing Therapy Center is an in-network provider for Blue Cross Blue Shield of Michigan (BCBS) and Blue Care Network (BCN), offering individual therapy, couples counseling, family therapy, ADHD testing, autism evaluations, and trauma treatment in Dearborn, Michigan.',
            'url' => 'https://www.healingtherapycenter.com/blue-cross-blue-shield-therapy-michigan',
            'areaServed' => ['@type' => 'State', 'name' => 'Michigan'],
            'provider' => [
                '@type' => 'MedicalBusiness',
                'name' => 'Healing Therapy Center',
                'telephone' => '+13136541915',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '835 Mason St STE D160',
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
                    'name' => 'Do I need a referral from my doctor?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most BCBS PPO plans do not require a referral for mental health services. BCBS HMO and Blue Care Network plans may require a referral from your primary care physician. We\'ll check your specific plan\'s requirements when we verify your benefits.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How many therapy sessions does BCBS cover?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Blue Cross Blue Shield Michigan plans typically allow 20-52 outpatient therapy visits per year, though this varies by plan. Some plans have no session limits. We\'ll verify your specific visit allowance when we check your coverage.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does BCBS cover couples therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many BCBS Michigan plans cover couples/marriage therapy when one or both partners have a diagnosed mental health condition being treated. Coverage varies by plan. We\'ll verify if couples therapy is covered under your specific BCBS benefits.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is telehealth covered the same as in-person?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most BCBS Michigan plans cover telehealth mental health services at the same copay rate as in-person visits. This makes online therapy a convenient option if you prefer to meet from home or have scheduling conflicts.'
                    ]
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES);
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Insurance';
    $hero_h1 = 'Blue Cross Blue Shield Michigan Mental Health Coverage at Healing Therapy Center';
    $hero_lead = "Healing Therapy Center is an in-network provider for Blue Cross Blue Shield of Michigan (BCBS) and Blue Care Network (BCN) insurance plans. If you have BCBS coverage, we can help you access quality mental health care in Dearborn, Michigan with minimal out-of-pocket costs.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>We accept most BCBS Michigan plans including PPO, HMO, and Blue Care Network for individual therapy, couples counseling, family therapy, ADHD testing, autism evaluations, and trauma treatment services.</p>

                <div class="callout">
                    <h3>We Accept Blue Cross Blue Shield Michigan</h3>
                    <ul>
                        <li><strong>BCBS PPO Plans</strong> - Preferred provider network access</li>
                        <li><strong>BCBS HMO Plans</strong> - In-network behavioral health services</li>
                        <li><strong>Blue Care Network (BCN)</strong> - HMO mental health coverage</li>
                        <li><strong>BCBS Community Blue</strong> - Medicaid plans (select counties)</li>
                    </ul>
                    <p><strong>Call us at <a href="tel:313-654-1915">(313) 654-1915</a></strong> to verify your specific BCBS plan benefits and copay before your first appointment.</p>
                </div>

                <h2>Mental Health Services Covered by BCBS Michigan</h2>

                <p>Most Blue Cross Blue Shield Michigan plans provide comprehensive mental health coverage. While specific benefits vary by plan, BCBS typically covers:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Treatment for anxiety, depression, trauma, stress, grief, and other mental health concerns. BCBS plans often cover weekly or bi-weekly sessions with competitive copays.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples &amp; Family Therapy</h3>
                        <p>Marriage counseling, premarital counseling, and family therapy. Many BCBS plans cover couples therapy when treating a diagnosed mental health condition.</p>
                    </div>
                    <div class="panel">
                        <h3>Psychological Testing</h3>
                        <p>ADHD evaluations, autism assessments, and diagnostic testing. BCBS Michigan often covers psychological testing when medically necessary with pre-authorization.</p>
                    </div>
                    <div class="panel">
                        <h3>Telehealth Therapy</h3>
                        <p>Online therapy sessions via secure video. Most BCBS plans cover telehealth at the same rate as in-person visits, making therapy more convenient for busy schedules.</p>
                    </div>
                </div>

                <div class="callout callout--info">
                    <h3>Important Coverage Information</h3>
                    <p>Blue Cross Blue Shield Michigan coverage details vary by plan type and employer. Typical coverage includes:</p>
                    <ul>
                        <li><strong>Copays:</strong> Many BCBS plans have copays ranging from $15-$40 per therapy session</li>
                        <li><strong>Deductibles:</strong> Some plans require meeting a deductible before coverage begins</li>
                        <li><strong>Session Limits:</strong> BCBS plans typically allow generous outpatient therapy visit limits (often 20-52 sessions per year)</li>
                        <li><strong>Pre-Authorization:</strong> Most outpatient therapy does not require pre-auth; psychological testing may require approval</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage, copays, deductibles, session limits, and authorization requirements vary by BCBS plan. We'll verify your specific benefits when you call to schedule.</p>
                </div>

                <h2>How to Use Your BCBS Insurance at Healing Therapy Center</h2>

                <p>Using your Blue Cross Blue Shield Michigan insurance for therapy is simple:</p>

                <div class="panel">
                    <h3>Step 1: Call to Schedule</h3>
                    <p>Contact us at <strong><a href="tel:313-654-1915">(313) 654-1915</a></strong> to schedule your first appointment. Let us know you have Blue Cross Blue Shield Michigan insurance and provide your member ID and group number.</p>

                    <h3>Step 2: We Verify Your Benefits</h3>
                    <p>Our team will contact BCBS to verify your mental health benefits, check your copay amount, confirm if you've met your deductible, and explain your out-of-pocket costs before your first session.</p>

                    <h3>Step 3: Attend Your First Session</h3>
                    <p>Come to your appointment at our Dearborn office (or join via telehealth). Bring your BCBS insurance card and a valid ID. You'll only pay your copay or coinsurance at time of service.</p>

                    <h3>Step 4: We Handle All Billing</h3>
                    <p>We submit claims directly to Blue Cross Blue Shield Michigan. You don't need to file paperwork or wait for reimbursement. We handle all the insurance billing for you.</p>
                </div>

                <h2>Who We Help with BCBS Michigan Insurance</h2>

                <p>We provide therapy services for Michigan residents with Blue Cross Blue Shield coverage experiencing:</p>

                <ul>
                    <li><strong>Anxiety &amp; Stress</strong> - Work stress, generalized anxiety, panic attacks, social anxiety</li>
                    <li><strong>Depression</strong> - Major depression, seasonal depression, postpartum depression</li>
                    <li><strong>Trauma &amp; PTSD</strong> - Past trauma, childhood trauma, PTSD, complex trauma</li>
                    <li><strong>Relationship Issues</strong> - Marriage problems, communication issues, infidelity, separation</li>
                    <li><strong>Life Transitions</strong> - Job loss, divorce, grief, major life changes</li>
                    <li><strong>Burnout</strong> - Professional burnout, compassion fatigue, work-life balance struggles</li>
                    <li><strong>ADHD &amp; Autism</strong> - Diagnostic testing and treatment for children and adults</li>
                    <li><strong>Perinatal Mental Health</strong> - Pregnancy anxiety, postpartum depression, fertility struggles</li>
                </ul>

                <h2>Why Choose Healing Therapy Center for BCBS Coverage</h2>

                <ul>
                    <li><strong>In-Network Provider:</strong> We're in-network with BCBS Michigan, which means lower out-of-pocket costs for you</li>
                    <li><strong>We Handle All Billing:</strong> No paperwork, no claim submissions - we bill BCBS directly</li>
                    <li><strong>Benefits Verification:</strong> We check your coverage before your first appointment so there are no surprises</li>
                    <li><strong>Experienced Therapists:</strong> Licensed professionals (PhD, LMSW, LLMSW) who accept BCBS insurance</li>
                    <li><strong>Convenient Location:</strong> Easy access from Dearborn, Detroit, Livonia, Ann Arbor, and Metro Detroit</li>
                    <li><strong>Telehealth Available:</strong> Online therapy throughout Michigan - covered by most BCBS plans</li>
                    <li><strong>Evening &amp; Weekend Hours:</strong> Flexible scheduling to fit your work schedule</li>
                </ul>

                <h2>Common Questions About BCBS Mental Health Coverage</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Do I need a referral from my doctor?</h3>
                        <p>Most BCBS PPO plans do not require a referral for mental health services. BCBS HMO and Blue Care Network plans may require a referral from your primary care physician. We'll check your specific plan's requirements when we verify your benefits.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How many therapy sessions does BCBS cover?</h3>
                        <p>Blue Cross Blue Shield Michigan plans typically allow 20-52 outpatient therapy visits per year, though this varies by plan. Some plans have no session limits. We'll verify your specific visit allowance when we check your coverage.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does BCBS cover couples therapy?</h3>
                        <p>Many BCBS Michigan plans cover couples/marriage therapy when one or both partners have a diagnosed mental health condition being treated. Coverage varies by plan. We'll verify if couples therapy is covered under your specific BCBS benefits.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is telehealth covered the same as in-person?</h3>
                        <p>Most BCBS Michigan plans cover telehealth mental health services at the same copay rate as in-person visits. This makes online therapy a convenient option if you prefer to meet from home or have scheduling conflicts.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Ready to Use Your BCBS Insurance?</h3>
                    <p><strong>Call us at <a href="tel:313-654-1915">(313) 654-1915</a></strong></p>
                    <p>We'll verify your Blue Cross Blue Shield Michigan benefits, explain your copay, and schedule your first appointment.</p>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124 | <strong>Telehealth available throughout Michigan</strong></p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/insurance">All Insurance Plans We Accept</a></li>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/couples-therapy">Couples Therapy</a></li>
                        <li><a href="/adhd-testing-evaluation">ADHD Testing with BCBS Coverage</a></li>
                    </ul>
                </div>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
