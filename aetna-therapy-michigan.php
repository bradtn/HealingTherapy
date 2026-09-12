<?php
// Page-specific variables — verbatim from production
$page_title = 'Aetna Therapy Michigan | Mental Health Coverage Accepted';
$page_description = 'Aetna in-network therapy in Dearborn, Michigan. Counseling, couples therapy & ADHD testing with Aetna PPO, HMO & employer plans. Call (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/aetna-therapy-michigan';
$current_service = 'individual';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
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
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Insurance';
    $hero_h1 = 'Aetna Mental Health Coverage at Healing Therapy Center';
    $hero_lead = "Healing Therapy Center accepts Aetna insurance for mental health and behavioral health services in Dearborn, Michigan. If you have Aetna coverage through your employer or individual plan, we can provide therapy, counseling, and psychological testing using your benefits.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>We work with Aetna's behavioral health network to provide quality mental health care at competitive copay rates. Our team will verify your Aetna benefits, handle all insurance claims, and ensure you understand your out-of-pocket costs before starting treatment.</p>

                <div class="callout">
                    <h3>We Accept Aetna Insurance Plans</h3>
                    <ul>
                        <li><strong>Aetna PPO</strong> - Preferred provider organization plans</li>
                        <li><strong>Aetna HMO</strong> - Health maintenance organization coverage</li>
                        <li><strong>Aetna Employer Group Plans</strong> - Corporate and group health insurance</li>
                        <li><strong>Aetna Better Health (Medicaid)</strong> - Select Medicaid managed care plans</li>
                    </ul>
                    <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a></strong> to verify your Aetna mental health benefits and schedule an appointment.</p>
                </div>

                <h2>Mental Health Services Covered by Aetna</h2>

                <p>Aetna provides comprehensive mental health coverage for medically necessary services. We offer:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Outpatient psychotherapy for anxiety, depression, trauma, stress, grief, and other mental health concerns. Aetna plans typically cover weekly or bi-weekly therapy sessions with licensed professionals.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples Therapy</h3>
                        <p>Marriage counseling and relationship therapy. Many Aetna plans cover couples therapy when treating a diagnosed mental health condition affecting one or both partners.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Family counseling to address communication issues, parenting challenges, and family dynamics. Aetna often covers family therapy when medically necessary.</p>
                    </div>
                    <div class="panel">
                        <h3>Psychological Testing</h3>
                        <p>ADHD evaluations, autism assessments, and diagnostic psychological testing. Aetna typically covers testing with pre-authorization when medically necessary for treatment planning.</p>
                    </div>
                </div>

                <div class="callout callout--info">
                    <h3>Aetna Mental Health Benefits</h3>
                    <p>Aetna behavioral health coverage varies by employer group and plan type. Common coverage features include:</p>
                    <ul>
                        <li><strong>Copays:</strong> Aetna therapy copays typically range from $20-$60 per session depending on plan type</li>
                        <li><strong>Coinsurance:</strong> Some plans use coinsurance (e.g., you pay 20%, Aetna pays 80%) after deductible is met</li>
                        <li><strong>Deductibles:</strong> Many plans require meeting an annual deductible before coverage begins</li>
                        <li><strong>Session Limits:</strong> Aetna plans generally allow 20-52 outpatient therapy visits per year</li>
                        <li><strong>Pre-Authorization:</strong> Outpatient therapy often doesn't require pre-auth; testing may need approval</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage, copays, deductibles, and authorization requirements vary significantly by Aetna plan. We'll verify your specific benefits before scheduling.</p>
                </div>

                <h2>How to Use Your Aetna Insurance for Therapy</h2>

                <div class="panel">
                    <h3>Schedule Your Appointment</h3>
                    <p>Call us at <strong><a href="tel:313-654-1915">(313) 654-1915</a></strong>. Let us know you have Aetna insurance and provide your member ID and group number (if employer-sponsored plan).</p>

                    <h3>We Verify Your Coverage</h3>
                    <p>Our billing team contacts Aetna Behavioral Health to verify your mental health benefits, confirm your copay or coinsurance amount, check if you've met your deductible, and ensure no pre-authorization is needed.</p>

                    <h3>Attend Your First Session</h3>
                    <p>Come to our Dearborn office or join via telehealth video. Bring your Aetna insurance card and valid photo ID. You'll pay only your copay or applicable coinsurance at time of service.</p>

                    <h3>We Handle Claims</h3>
                    <p>We submit all claims to Aetna on your behalf. No paperwork required from you. We'll bill Aetna directly and keep you informed of any coverage updates.</p>
                </div>

                <h2>Who We Help with Aetna Coverage</h2>

                <p>Our licensed therapists provide evidence-based treatment for Michigan professionals and families with Aetna insurance experiencing:</p>

                <ul>
                    <li><strong>Executive Stress &amp; Burnout</strong> - High-pressure work environments, leadership challenges, work-life balance</li>
                    <li><strong>Anxiety Disorders</strong> - Generalized anxiety, panic disorder, social anxiety, health anxiety, OCD</li>
                    <li><strong>Depression</strong> - Major depressive disorder, persistent depression, postpartum depression</li>
                    <li><strong>Trauma &amp; PTSD</strong> - Childhood trauma, complex trauma, PTSD, traumatic grief</li>
                    <li><strong>Relationship Issues</strong> - Marriage problems, premarital counseling, communication difficulties, infidelity</li>
                    <li><strong>Life Transitions</strong> - Career changes, relocation, divorce, empty nest, retirement</li>
                    <li><strong>Grief &amp; Loss</strong> - Death of loved one, anticipatory grief, complicated grief</li>
                    <li><strong>ADHD &amp; Autism</strong> - Diagnostic assessments and ongoing treatment for children and adults</li>
                </ul>

                <h2>Why Choose Healing Therapy Center for Aetna Mental Health Services</h2>

                <ul>
                    <li><strong>Aetna Network Provider:</strong> We work with Aetna's behavioral health network for lower costs</li>
                    <li><strong>Experienced Clinicians:</strong> Licensed PhD psychologist and therapists (LMSW, LLMSW, TLLP)</li>
                    <li><strong>Benefits Verification:</strong> We check your coverage before your first visit - no surprise bills</li>
                    <li><strong>Telehealth Services:</strong> Secure video therapy throughout Michigan, often covered by Aetna</li>
                    <li><strong>Convenient Location:</strong> Dearborn office with easy access from Detroit, Livonia, Ann Arbor, Troy</li>
                    <li><strong>Flexible Hours:</strong> Evening and weekend appointments to fit your work schedule</li>
                    <li><strong>We Handle Billing:</strong> Claims submitted directly to Aetna - no paperwork for you</li>
                </ul>

                <h2>Aetna Mental Health Coverage Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Do I need a referral to see a therapist?</h3>
                        <p>Most Aetna PPO plans do not require a referral for mental health services. Aetna HMO plans may require a referral from your primary care physician. We'll verify your specific plan's requirements during benefits verification.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How many therapy sessions does Aetna cover per year?</h3>
                        <p>Aetna plans typically allow 20-52 outpatient therapy sessions per year, though coverage varies by employer and plan type. Some plans have unlimited outpatient visits. We'll confirm your specific session limit when we verify benefits.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does Aetna cover telehealth therapy?</h3>
                        <p>Yes, most Aetna plans cover telehealth mental health services. Many plans reimburse virtual visits at the same copay as in-person therapy. We offer secure HIPAA-compliant video therapy throughout Michigan.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is couples therapy covered by Aetna?</h3>
                        <p>Many Aetna plans cover couples/marriage therapy when one or both partners have a diagnosed mental health condition being treated. Coverage varies by plan. We'll verify if couples therapy is covered under your specific Aetna benefits.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does Aetna cover ADHD and autism testing?</h3>
                        <p>Aetna often covers psychological testing including ADHD evaluations and autism assessments when medically necessary for diagnosis and treatment planning. Pre-authorization is typically required. We'll help coordinate approval with Aetna before scheduling testing.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Ready to Use Your Aetna Benefits?</h3>
                    <p>We'll verify your Aetna mental health coverage, explain your out-of-pocket costs, and schedule you with an experienced therapist.</p>
                    <p><strong>Healing Therapy Center</strong> | 835 Mason St STE D160, Dearborn, MI 48124 | Telehealth throughout Michigan</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/insurance">Insurance &amp; Payment Options</a></li>
                        <li><a href="/individual-therapy">Individual Therapy</a></li>
                        <li><a href="/couples-therapy">Couples &amp; Marriage Counseling</a></li>
                        <li><a href="/adhd-testing-evaluation">ADHD Testing &amp; Evaluation</a></li>
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
