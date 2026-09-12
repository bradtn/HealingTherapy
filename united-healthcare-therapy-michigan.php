<?php
// Page-specific variables — verbatim from production
$page_title = 'United Healthcare Therapy Michigan | UHC Mental Health';
$page_description = 'United Healthcare (UHC) therapy in Dearborn, Michigan. In-network counseling, couples therapy & ADHD testing via UnitedBehavioral Health. (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/united-healthcare-therapy-michigan';
$current_service = 'individual';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
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
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Insurance';
    $hero_h1 = 'United Healthcare Mental Health Coverage at Healing Therapy Center';
    $hero_lead = "Healing Therapy Center accepts United Healthcare (UHC) and UnitedBehavioral Health insurance for mental health services in Dearborn, Michigan. If you have UHC coverage through your employer, Medicare Advantage, or individual plan, we can provide therapy, counseling, and psychological testing using your benefits.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>We're credentialed with UnitedBehavioral Health, the behavioral health division of United Healthcare. Our team will verify your mental health benefits, explain your copay or coinsurance, and handle all insurance claims so you can focus on your wellness.</p>

                <div class="callout">
                    <h3>We Accept United Healthcare Plans</h3>
                    <ul>
                        <li><strong>UnitedHealthcare PPO</strong> - Preferred provider organization plans</li>
                        <li><strong>UnitedHealthcare HMO</strong> - Health maintenance organization coverage</li>
                        <li><strong>UnitedBehavioral Health</strong> - Behavioral health carve-out plans</li>
                        <li><strong>UHC Employer Group Plans</strong> - Corporate and Fortune 500 company coverage</li>
                        <li><strong>UHC Medicare Advantage</strong> - Medicare managed care plans (select)</li>
                    </ul>
                    <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a></strong> to verify your United Healthcare mental health benefits and schedule your appointment.</p>
                </div>

                <h2>Mental Health Services Covered by United Healthcare</h2>

                <p>United Healthcare provides robust mental health coverage through UnitedBehavioral Health. We offer:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Outpatient psychotherapy for anxiety, depression, trauma, stress management, and other mental health concerns. UHC plans typically provide generous outpatient visit allowances with competitive copays.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples &amp; Marriage Therapy</h3>
                        <p>Relationship counseling and marriage therapy. Many United Healthcare plans cover couples therapy when addressing diagnosed mental health conditions affecting the relationship.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Family counseling for communication issues, parenting challenges, and family conflict. UHC often covers family therapy when medically necessary for treatment.</p>
                    </div>
                    <div class="panel">
                        <h3>Psychological Testing</h3>
                        <p>ADHD evaluations, autism assessments, and diagnostic psychological testing for children and adults. United Healthcare typically covers testing with pre-authorization when medically necessary.</p>
                    </div>
                </div>

                <div class="callout callout--info">
                    <h3>United Healthcare Mental Health Benefits</h3>
                    <p>UnitedBehavioral Health coverage varies by employer and plan type. Common coverage features include:</p>
                    <ul>
                        <li><strong>Copays:</strong> UHC therapy copays typically range from $15-$50 per session depending on plan</li>
                        <li><strong>Coinsurance:</strong> Some plans use coinsurance (e.g., 80/20 split) after deductible</li>
                        <li><strong>Deductibles:</strong> Many plans require meeting annual deductible before coverage begins</li>
                        <li><strong>Session Limits:</strong> UHC plans generally allow 20-52 outpatient visits per year; some have unlimited visits</li>
                        <li><strong>Referrals:</strong> PPO plans typically don't require referrals; HMO plans may need PCP referral</li>
                        <li><strong>Pre-Authorization:</strong> Outpatient therapy often doesn't require pre-auth; testing usually does</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage, copays, deductibles, and authorization requirements vary by United Healthcare plan. We'll verify your specific benefits before your first appointment.</p>
                </div>

                <h2>How to Use Your United Healthcare Insurance</h2>

                <div class="panel">
                    <h3>Call to Schedule</h3>
                    <p>Contact us at <strong><a href="tel:313-654-1915">(313) 654-1915</a></strong>. Let us know you have United Healthcare or UnitedBehavioral Health insurance and provide your member ID number.</p>

                    <h3>Benefits Verification</h3>
                    <p>Our billing team contacts UnitedBehavioral Health to verify your coverage, check your copay or coinsurance, confirm if you've met your deductible, and determine if referrals or pre-authorization are needed.</p>

                    <h3>Attend Your Appointment</h3>
                    <p>Visit our Dearborn office or join via telehealth. Bring your UHC insurance card and photo ID. Pay only your copay or applicable coinsurance at each session.</p>

                    <h3>We Handle Claims</h3>
                    <p>We submit all claims to UnitedBehavioral Health on your behalf. No paperwork required from you - just quality mental health care.</p>
                </div>

                <h2>Who We Help with United Healthcare Coverage</h2>

                <p>Our licensed therapists provide evidence-based treatment for Michigan residents with UHC insurance experiencing:</p>

                <ul>
                    <li><strong>Work-Related Stress</strong> - Career pressure, job transitions, workplace conflict, burnout</li>
                    <li><strong>Anxiety Disorders</strong> - Generalized anxiety, panic attacks, social anxiety, OCD, phobias</li>
                    <li><strong>Depression</strong> - Major depression, persistent depression, seasonal depression, postpartum depression</li>
                    <li><strong>Trauma &amp; PTSD</strong> - Childhood trauma, PTSD, complex trauma, traumatic grief</li>
                    <li><strong>Relationship Issues</strong> - Marriage problems, premarital counseling, communication difficulties</li>
                    <li><strong>Life Transitions</strong> - Divorce, relocation, career changes, empty nest, retirement</li>
                    <li><strong>Grief &amp; Loss</strong> - Bereavement, anticipatory grief, complicated grief</li>
                    <li><strong>Perinatal Mental Health</strong> - Pregnancy anxiety, postpartum depression, fertility stress</li>
                    <li><strong>ADHD &amp; Autism</strong> - Comprehensive testing and ongoing treatment for all ages</li>
                </ul>

                <h2>Why Choose Healing Therapy Center for UHC Mental Health Services</h2>

                <ul>
                    <li><strong>UnitedBehavioral Health Network:</strong> Credentialed provider for lower out-of-pocket costs</li>
                    <li><strong>Licensed Professionals:</strong> PhD psychologist and licensed therapists (LMSW, LLMSW, TLLP)</li>
                    <li><strong>Benefits Verification:</strong> We check your UHC coverage before you start - no surprise bills</li>
                    <li><strong>Telehealth Available:</strong> Secure video therapy throughout Michigan, often covered same as in-person</li>
                    <li><strong>Convenient Dearborn Location:</strong> Easy access from Detroit, Livonia, Ann Arbor, Troy, Rochester Hills</li>
                    <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments for busy professionals</li>
                    <li><strong>We Handle Billing:</strong> Claims submitted directly to UnitedBehavioral Health</li>
                </ul>

                <h2>United Healthcare Mental Health FAQs</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Do I need a referral to see a therapist with UHC?</h3>
                        <p>United Healthcare PPO plans typically do not require a referral for mental health services. UHC HMO plans may require a referral from your primary care physician. We'll verify your specific plan's referral requirements during benefits verification.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How many therapy sessions does United Healthcare cover?</h3>
                        <p>UnitedBehavioral Health plans generally allow 20-52 outpatient therapy sessions per year, though coverage varies by employer and plan. Some plans have unlimited outpatient visits. We'll confirm your specific session allowance when we verify your benefits.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does UHC cover telehealth therapy?</h3>
                        <p>Yes, most United Healthcare plans cover telehealth mental health services through UnitedBehavioral Health. Many plans cover virtual visits at the same copay rate as in-person therapy. We offer secure HIPAA-compliant video therapy throughout Michigan.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is couples therapy covered by United Healthcare?</h3>
                        <p>Many United Healthcare plans cover couples/marriage therapy when one or both partners have a diagnosed mental health condition being addressed. Coverage varies by plan. We'll verify if couples therapy is covered under your UHC benefits.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does UHC cover ADHD and autism testing?</h3>
                        <p>UnitedBehavioral Health often covers psychological testing including ADHD evaluations and autism assessments when medically necessary. Pre-authorization is typically required before scheduling testing. We'll help coordinate approval with UHC.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Start Using Your United Healthcare Benefits</h3>
                    <p>We'll verify your UnitedBehavioral Health coverage, explain your out-of-pocket costs, and get you scheduled with an experienced therapist.</p>
                    <p><strong>Healing Therapy Center</strong> | 835 Mason St STE D160, Dearborn, MI 48124 | Telehealth available statewide</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/insurance">All Accepted Insurance Plans</a></li>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/couples-therapy">Couples &amp; Marriage Counseling</a></li>
                        <li><a href="/trauma-ptsd-treatment">Trauma &amp; PTSD Treatment</a></li>
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
