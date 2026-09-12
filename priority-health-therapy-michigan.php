<?php
// Page-specific variables — verbatim from production
$page_title = 'Priority Health Therapy Michigan | Coverage Accepted';
$page_description = 'Priority Health in-network therapy in Dearborn, Michigan. Individual counseling, couples therapy & ADHD testing with HMO and PPO plans. (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/priority-health-therapy-michigan';
$current_service = 'individual';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Therapy Covered by Priority Health Insurance',
            'description' => 'Healing Therapy Center is an in-network provider for Priority Health insurance in Dearborn, Michigan, offering individual therapy, couples and marriage counseling, family therapy, and psychological testing for HMO, PPO, and employer-sponsored plans.',
            'url' => 'https://www.healingtherapycenter.com/priority-health-therapy-michigan',
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
                    'name' => 'Do I need a referral for therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'If you have a Priority Health HMO plan, you typically need a referral from your primary care physician for mental health services. Priority Health PPO plans usually do not require referrals. We\'ll confirm your specific plan\'s requirements when we verify your benefits.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How many therapy sessions are covered?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Priority Health Michigan plans generally allow 20-50 outpatient therapy visits per year, though this varies by employer group and plan type. Some plans have no session limits. We\'ll check your specific visit allowance during benefits verification.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is telehealth therapy covered?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, most Priority Health plans cover telehealth mental health services. Many plans reimburse telehealth at the same copay rate as in-person visits. We offer secure video therapy throughout Michigan for your convenience.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does Priority Health cover ADHD and autism testing?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Priority Health often covers psychological testing including ADHD evaluations and autism assessments when medically necessary. Pre-authorization is typically required. We\'ll help you obtain any necessary approvals before scheduling testing.'
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
    $hero_h1 = 'Priority Health Mental Health Coverage at Healing Therapy Center';
    $hero_lead = "Healing Therapy Center accepts Priority Health insurance for mental health services in Dearborn, Michigan. If you have Priority Health HMO, PPO, or employer-sponsored coverage, we can provide therapy, counseling, and psychological testing using your benefits.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>We're an in-network provider for Priority Health, which means you'll receive care at the lowest out-of-pocket cost. Our team will verify your mental health benefits, explain your copay, and handle all insurance billing so you can focus on your mental wellness.</p>

                <div class="callout">
                    <h3>We Accept Priority Health Plans</h3>
                    <ul>
                        <li><strong>Priority Health HMO</strong> - In-network behavioral health provider</li>
                        <li><strong>Priority Health PPO</strong> - Preferred provider network access</li>
                        <li><strong>Priority Health Employer Plans</strong> - Group health insurance coverage</li>
                        <li><strong>Priority Health Medicare Advantage</strong> - Medicare managed care plans</li>
                    </ul>
                    <p><strong>Call us at <a href="tel:313-654-1915">(313) 654-1915</a></strong> to verify your Priority Health benefits and schedule your first appointment.</p>
                </div>

                <h2>Mental Health Services Covered by Priority Health</h2>

                <p>Priority Health Michigan offers comprehensive mental health coverage for qualifying services. We provide:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Outpatient therapy for anxiety, depression, trauma, stress management, and other mental health concerns. Priority Health plans often provide generous session allowances with competitive copays.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples &amp; Marriage Counseling</h3>
                        <p>Relationship therapy and marriage counseling. Many Priority Health plans cover couples therapy when addressing diagnosed mental health conditions affecting the relationship.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Family counseling to address communication issues, parenting challenges, and family conflict. Priority Health often covers family therapy when medically necessary.</p>
                    </div>
                    <div class="panel">
                        <h3>Psychological Testing</h3>
                        <p>ADHD evaluations, autism assessments, and diagnostic testing for children and adults. Priority Health typically covers psychological testing with pre-authorization when medically necessary.</p>
                    </div>
                </div>

                <div class="callout callout--info">
                    <h3>Priority Health Coverage Details</h3>
                    <p>Priority Health mental health benefits vary by plan type and employer. Common coverage features include:</p>
                    <ul>
                        <li><strong>Copays:</strong> Most Priority Health plans have therapy copays ranging from $20-$50 per session</li>
                        <li><strong>Deductibles:</strong> Some plans require meeting an annual deductible before coverage begins</li>
                        <li><strong>Referrals:</strong> HMO plans may require a referral from your primary care doctor; PPO plans typically do not</li>
                        <li><strong>Pre-Authorization:</strong> Outpatient therapy often requires no pre-auth; testing and intensive services may require approval</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage, copays, deductibles, and authorization requirements vary by Priority Health plan. We'll verify your specific benefits before your first appointment.</p>
                </div>

                <h2>How to Use Your Priority Health Insurance</h2>

                <p>We make it easy to use your Priority Health benefits for mental health care:</p>

                <div class="panel">
                    <h3>Contact Us</h3>
                    <p>Call <strong><a href="tel:313-654-1915">(313) 654-1915</a></strong> to schedule. Let us know you have Priority Health insurance and provide your member ID number.</p>

                    <h3>Benefits Verification</h3>
                    <p>We'll contact Priority Health to verify your behavioral health coverage, check if you need a referral (for HMO plans), confirm your copay amount, and explain your out-of-pocket costs.</p>

                    <h3>Attend Your Appointment</h3>
                    <p>Come to our Dearborn office or join via secure telehealth. Bring your Priority Health insurance card and ID. Pay only your copay or coinsurance at each visit.</p>

                    <h3>We Handle Billing</h3>
                    <p>We submit all claims to Priority Health on your behalf. No paperwork, no hassle - just quality mental health care.</p>
                </div>

                <h2>Who We Help with Priority Health Coverage</h2>

                <p>Our licensed therapists provide treatment for Michigan residents with Priority Health insurance experiencing:</p>

                <ul>
                    <li><strong>Work Stress &amp; Burnout</strong> - Professional stress, career transitions, work-life balance challenges</li>
                    <li><strong>Anxiety Disorders</strong> - Generalized anxiety, panic attacks, social anxiety, health anxiety</li>
                    <li><strong>Depression</strong> - Major depression, persistent sadness, postpartum depression, seasonal affective disorder</li>
                    <li><strong>Trauma &amp; PTSD</strong> - Childhood trauma, complex trauma, post-traumatic stress disorder</li>
                    <li><strong>Relationship Issues</strong> - Marriage problems, communication difficulties, premarital counseling</li>
                    <li><strong>Life Transitions</strong> - Grief, divorce, job loss, empty nest, retirement adjustment</li>
                    <li><strong>Parenting Challenges</strong> - Parent-child conflict, behavioral issues, co-parenting difficulties</li>
                    <li><strong>ADHD &amp; Learning Differences</strong> - Testing and treatment for children and adults</li>
                </ul>

                <h2>Why Choose Us for Priority Health Mental Health Services</h2>

                <ul>
                    <li><strong>In-Network Provider:</strong> Lower costs for you as a Priority Health member</li>
                    <li><strong>Licensed Professionals:</strong> PhD psychologist and licensed therapists (LMSW, LLMSW)</li>
                    <li><strong>We Verify Benefits:</strong> No surprise bills - we check your coverage before you start</li>
                    <li><strong>Telehealth Available:</strong> Online therapy throughout Michigan, often covered the same as in-person</li>
                    <li><strong>Convenient Dearborn Location:</strong> Easy access from Detroit, Livonia, Ann Arbor, and surrounding areas</li>
                    <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments available</li>
                    <li><strong>Billing Handled for You:</strong> We submit claims directly to Priority Health</li>
                </ul>

                <h2>Priority Health Mental Health Coverage FAQs</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Do I need a referral for therapy?</h3>
                        <p>If you have a Priority Health HMO plan, you typically need a referral from your primary care physician for mental health services. Priority Health PPO plans usually do not require referrals. We'll confirm your specific plan's requirements when we verify your benefits.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How many therapy sessions are covered?</h3>
                        <p>Priority Health Michigan plans generally allow 20-50 outpatient therapy visits per year, though this varies by employer group and plan type. Some plans have no session limits. We'll check your specific visit allowance during benefits verification.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is telehealth therapy covered?</h3>
                        <p>Yes, most Priority Health plans cover telehealth mental health services. Many plans reimburse telehealth at the same copay rate as in-person visits. We offer secure video therapy throughout Michigan for your convenience.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does Priority Health cover ADHD and autism testing?</h3>
                        <p>Priority Health often covers psychological testing including ADHD evaluations and autism assessments when medically necessary. Pre-authorization is typically required. We'll help you obtain any necessary approvals before scheduling testing.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Start Using Your Priority Health Benefits Today</h3>
                    <p><strong>Call (313) 654-1915 to schedule your first appointment</strong></p>
                    <p>We'll verify your Priority Health mental health coverage, explain your copay, and get you scheduled with an experienced therapist.</p>
                    <p><strong>Healing Therapy Center</strong> | 835 Mason St STE D160, Dearborn, MI 48124 | Telehealth available</p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/insurance">All Accepted Insurance Plans</a></li>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/couples-therapy">Couples &amp; Marriage Counseling</a></li>
                        <li><a href="/anxiety-therapy-michigan">Anxiety Therapy in Michigan</a></li>
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
