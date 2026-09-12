<?php
// Page-specific variables
$page_title = 'Insurance & Payment Options | Healing Therapy Dearborn';
$page_description = 'Healing Therapy Center in Dearborn accepts BCBS, FEP Blue, Priority Health, Aetna, United Healthcare, HAP & Michigan Medicaid for therapy. (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/insurance';
$current_service = ''; // For sidebar active state

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Insurance & Payment Options',
            'description' => 'Healing Therapy Center accepts most major Michigan insurance plans for mental health services, including Blue Cross Blue Shield (FEP Blue), Blue Care Network, Priority Health, Aetna, United Healthcare, HAP, McLaren, and Michigan Medicaid, plus self-pay and payment plan options.',
            'url' => 'https://www.healingtherapycenter.com/insurance',
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
                    'name' => 'Do you accept my insurance?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We accept most major Michigan insurance plans including Blue Cross Blue Shield (FEP Blue for federal employees), Priority Health, Aetna, United Healthcare, HAP, McLaren, Blue Care Network, and Michigan Medicaid. If your plan isn\'t listed, call us at (313) 654-1915 - we may still be able to bill your insurance or provide out-of-network benefits information.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How much will therapy cost me?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Your out-of-pocket cost depends on your specific insurance plan and may include copays, coinsurance, or deductibles. When you call to schedule, we\'ll verify your benefits and tell you your exact cost before your first appointment. There are no surprise bills.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if I don\'t want to use insurance?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'You can choose to pay out-of-pocket (self-pay) instead of using insurance. Some people prefer this for complete privacy or if they haven\'t met their deductible yet. We offer competitive self-pay rates. Call (313) 654-1915 for pricing information.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do I need a referral from my doctor?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most insurance plans do not require a referral for mental health services, but some HMO plans do. We\'ll check your specific plan\'s requirements when we verify your benefits. In many cases, you can call us directly and schedule without seeing your primary care doctor first.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is telehealth covered the same as in-person therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many insurance plans cover telehealth mental health services at the same rate as in-person visits. However, coverage varies by plan. We\'ll verify your telehealth benefits when we check your insurance.'
                    ]
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES);

require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Resources';
    $hero_h1 = 'Insurance &amp; Payment Options at Healing Therapy Center';
    $hero_lead = "We accept most major insurance plans to make mental health care affordable and accessible for Michigan residents. Our team will verify your benefits, explain your coverage, and help you understand your out-of-pocket costs before your first appointment.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">

                <div class="callout">
                    <h3>We Make Insurance Simple</h3>
                    <p><strong>Call us at <a href="tel:313-654-1915">(313) 654-1915</a> and we will:</strong></p>
                    <ul>
                        <li>Verify your insurance benefits before your first appointment</li>
                        <li>Explain your copay, deductible, or coinsurance</li>
                        <li>Check if pre-authorization is required for your plan</li>
                        <li>Handle all insurance billing and claims submission</li>
                        <li>Work with you on payment plans if needed</li>
                    </ul>
                </div>

                <h2>Insurance Plans We Accept</h2>

                <p>Healing Therapy Center is in-network or can bill the following insurance plans for mental health services. Coverage details vary by plan - we recommend calling us to verify your specific benefits.</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>FEP Blue - Federal Employees</h3>
                        <p><strong>Blue Cross Blue Shield Federal Employee Program</strong></p>
                        <p>If you work for USPS, CBP, FBI, VA, or any federal agency in Michigan, we accept your FEP Blue insurance. Many FEP Blue plans offer competitive mental health coverage.</p>
                        <p><a class="btn btn--pill btn--primary" href="/fep-blue-federal-employee-therapy">Learn More About FEP Blue Coverage →</a></p>
                    </div>
                    <div class="panel">
                        <h3>Blue Cross Blue Shield of Michigan</h3>
                        <p>We accept BCBS of Michigan plans for individual therapy, couples therapy, family therapy, and psychological testing services. Coverage varies by plan type.</p>
                        <p><a class="btn btn--pill btn--ghost" href="/blue-cross-blue-shield-therapy-michigan">Blue Cross Blue Shield therapy coverage in Michigan →</a></p>
                    </div>
                    <div class="panel">
                        <h3>Blue Care Network of Michigan</h3>
                        <p>BCN HMO plans are accepted. We can verify your specific mental health benefits and copay requirements before scheduling.</p>
                    </div>
                    <div class="panel">
                        <h3>Priority Health</h3>
                        <p>Priority Health plans including HMO and PPO options are accepted. We'll verify your behavioral health coverage and out-of-pocket costs.</p>
                        <p><a class="btn btn--pill btn--ghost" href="/priority-health-therapy-michigan">Priority Health therapy coverage in Michigan →</a></p>
                    </div>
                    <div class="panel">
                        <h3>Aetna</h3>
                        <p>We accept Aetna insurance plans for mental health and substance abuse services. Coverage details vary by specific plan.</p>
                        <p><a class="btn btn--pill btn--ghost" href="/aetna-therapy-michigan">Aetna therapy coverage in Michigan →</a></p>
                    </div>
                    <div class="panel">
                        <h3>United Healthcare</h3>
                        <p>UnitedHealthcare and UnitedBehavioral Health plans are accepted. We can check your mental health benefits before your first visit.</p>
                        <p><a class="btn btn--pill btn--ghost" href="/united-healthcare-therapy-michigan">United Healthcare therapy coverage in Michigan →</a></p>
                    </div>
                    <div class="panel">
                        <h3>HAP (Health Alliance Plan)</h3>
                        <p>Health Alliance Plan members can use their benefits for our mental health services. We'll verify your specific coverage.</p>
                    </div>
                    <div class="panel">
                        <h3>McLaren Health Plan</h3>
                        <p>McLaren insurance plans are accepted. Coverage for therapy and psychological testing varies by plan - call to verify.</p>
                    </div>
                    <div class="panel">
                        <h3>Michigan Medicaid</h3>
                        <p>We accept Michigan Medicaid for qualifying mental health services. Coverage depends on your specific Medicaid plan.</p>
                    </div>
                    <div class="panel">
                        <h3>Other Major Plans</h3>
                        <p>We work with most major Michigan insurance plans. If your insurance is not listed, call us at (313) 654-1915 to check if we can bill your plan.</p>
                    </div>
                </div>

                <h2>Understanding Your Mental Health Benefits</h2>

                <p>Mental health insurance coverage can be confusing. Here's what you need to know about the most common terms and how your benefits work:</p>

                <div class="panel">
                    <h3>Common Insurance Terms Explained</h3>
                    <p><strong>Copay:</strong> A fixed amount you pay per session (e.g., $20 per visit). Your insurance covers the rest.</p>
                    <p><strong>Deductible:</strong> The amount you must pay out-of-pocket before insurance starts covering services.</p>
                    <p><strong>Coinsurance:</strong> The percentage you pay after meeting your deductible (e.g., you pay 20%, insurance pays 80%).</p>
                    <p><strong>In-Network:</strong> Providers who contract with your insurance for lower rates. Lower out-of-pocket costs for you.</p>
                    <p><strong>Pre-Authorization:</strong> Approval required from insurance before starting certain services.</p>
                    <p><strong>Session Limits:</strong> Some plans limit the number of therapy sessions per year. Many plans offer generous allowances.</p>
                </div>

                <h2>What Mental Health Services Are Typically Covered?</h2>

                <p>Most insurance plans provide coverage for a range of mental health services. Specific coverage varies by plan:</p>

                <div class="callout callout--info">
                    <h3>Services That May Be Covered:</h3>
                    <ul class="check-list check-list--2col">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Individual therapy</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Couples/marriage counseling</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Family therapy</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Group therapy</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Telehealth/online therapy</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Psychological testing (ADHD, autism)</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Psychiatric medication management</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Crisis intervention</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage details including copays, deductibles, session limits, and authorization requirements vary significantly by insurance plan. Call us to verify what your specific plan covers.</p>
                </div>

                <h2>How to Verify Your Insurance Benefits</h2>

                <p>Before your first appointment, we recommend verifying your mental health coverage. Here's how:</p>

                <h3>Option 1: We'll Verify For You (Easiest)</h3>
                <p>When you call to schedule your first appointment at <a href="tel:313-654-1915"><strong>(313) 654-1915</strong></a>, provide us with:</p>
                <ul>
                    <li>Your insurance card information (member ID, group number)</li>
                    <li>Your date of birth</li>
                    <li>The name of the person seeking therapy</li>
                </ul>
                <p>We'll contact your insurance company, verify your mental health benefits, and explain your out-of-pocket costs before you come in.</p>

                <h3>Option 2: Call Your Insurance Directly</h3>
                <p>Call the phone number on the back of your insurance card and ask:</p>
                <ul>
                    <li>"What are my outpatient mental health benefits?"</li>
                    <li>"What is my copay/coinsurance for therapy sessions?" (CPT codes 90834, 90837)</li>
                    <li>"Do I need to meet a deductible first?"</li>
                    <li>"Is pre-authorization required for outpatient therapy?"</li>
                    <li>"Are there session limits per year?"</li>
                    <li>"Is telehealth covered the same as in-person visits?"</li>
                </ul>

                <h2>Payment Options</h2>

                <div class="grid-3">
                    <div class="panel">
                        <h3>Insurance Billing</h3>
                        <p>We bill your insurance directly. You pay only your copay, coinsurance, or deductible at time of service.</p>
                    </div>
                    <div class="panel">
                        <h3>Self-Pay</h3>
                        <p>Choose not to use insurance for privacy or preference. We offer competitive self-pay rates. Call for pricing.</p>
                    </div>
                    <div class="panel">
                        <h3>Payment Plans</h3>
                        <p>If you're facing financial hardship, talk to us about payment plan options. We want to make therapy accessible.</p>
                    </div>
                </div>

                <p>We accept cash, check, and all major credit cards (Visa, Mastercard, American Express, Discover). Payment is due at time of service.</p>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Do you accept my insurance?</h3>
                        <p>We accept most major Michigan insurance plans including Blue Cross Blue Shield (FEP Blue for federal employees), Priority Health, Aetna, United Healthcare, HAP, McLaren, Blue Care Network, and Michigan Medicaid. If your plan isn't listed, call us at (313) 654-1915 - we may still be able to bill your insurance or provide out-of-network benefits information.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How much will therapy cost me?</h3>
                        <p>Your out-of-pocket cost depends on your specific insurance plan and may include copays, coinsurance, or deductibles. When you call to schedule, we'll verify your benefits and tell you your exact cost before your first appointment. There are no surprise bills.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if I don't want to use insurance?</h3>
                        <p>You can choose to pay out-of-pocket (self-pay) instead of using insurance. Some people prefer this for complete privacy or if they haven't met their deductible yet. We offer competitive self-pay rates. Call (313) 654-1915 for pricing information.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do I need a referral from my doctor?</h3>
                        <p>Most insurance plans do not require a referral for mental health services, but some HMO plans do. We'll check your specific plan's requirements when we verify your benefits. In many cases, you can call us directly and schedule without seeing your primary care doctor first.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is telehealth covered the same as in-person therapy?</h3>
                        <p>Many insurance plans cover telehealth mental health services at the same rate as in-person visits. However, coverage varies by plan. We'll verify your telehealth benefits when we check your insurance.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Questions About Your Coverage?</h3>
                    <p>Our team is here to help you understand your insurance benefits and make therapy affordable.</p>
                    <p>We'll verify your insurance, explain your costs, and get you scheduled with the right therapist for your needs.</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <p>
                    <a class="btn btn--pill btn--primary" href="/appointment">Request an Appointment</a>
                </p>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
