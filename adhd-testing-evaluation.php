<?php
// Page-specific variables
$page_title = 'ADHD Testing & Evaluation in Michigan | Children & Adults';
$page_description = 'ADHD testing in Michigan for children & adults. Professional evaluation & diagnosis in Dearborn plus telehealth statewide. Call (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/adhd-testing-evaluation';

// Service + FAQPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'ADHD Testing & Evaluation',
            'serviceType' => 'ADHD Testing and Evaluation',
            'description' => 'Professional ADHD testing and evaluation in Dearborn, Michigan for children (age 6+) and adults, including clinical interview, rating scales, cognitive testing, and continuous performance testing, with clear diagnosis and treatment recommendations.',
            'url' => 'https://www.healingtherapycenter.com/adhd-testing-evaluation',
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
                    'name' => 'How long does ADHD testing take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'The complete process takes 3-4 weeks: initial consultation, 2-3 testing sessions (3-5 hours total), 1-2 weeks for scoring and report writing, then feedback session. We work to accommodate urgent timelines when possible.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do I need a referral from my doctor?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'You can self-refer for ADHD testing. However, some insurance plans require referrals for coverage - check with your insurer.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does insurance cover ADHD evaluation in Michigan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most Michigan insurance plans cover ADHD testing when medically necessary. We accept Blue Cross Blue Shield, Aetna, Priority Health, McLaren, and HAP. Call (313) 654-1915 to verify coverage.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can ADHD testing be done via telehealth?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Some components (clinical interview, rating scales) can be done via telehealth. Cognitive testing and CPT require in-person evaluation at our Dearborn office.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'At what age can children be tested?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We can evaluate children as young as 6 years old. ADHD symptoms must be present before age 12 for diagnosis, but reliable testing is typically done age 6+.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if it\'s not ADHD - what else could it be?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Anxiety, depression, learning disabilities, sleep disorders, trauma, and other conditions can mimic ADHD. Our comprehensive evaluation identifies what\'s really going on so you get appropriate treatment.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How much does ADHD testing cost?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Cost varies by evaluation complexity. With insurance, you pay your copay/coinsurance. For self-pay, we provide upfront estimates. Call (313) 654-1915 for pricing.'
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
    $hero_eyebrow = 'Specialized Care';
    $hero_h1 = 'Professional ADHD Testing &amp; Comprehensive Evaluation Services';
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Do you or your child struggle with focus, organization, impulsivity, or hyperactivity that interferes with school, work, or relationships? Are you wondering if it's ADHD or something else? At Healing Therapy Center, our licensed psychologists provide comprehensive ADHD testing and evaluation for children, adolescents, and adults throughout Michigan.</p>

                <p>An accurate ADHD diagnosis is the first step toward effective treatment, school accommodations, workplace support, and understanding challenges you've faced for years. Our thorough evaluations provide clarity, answers, and a roadmap forward.</p>

                <div class="callout callout--soft">
                    <h2>Quick Navigation</h2>
                    <ul>
                        <li><a href="#children-vs-adults">Children vs. Adults</a></li>
                        <li><a href="#signs-testing">Signs You Need Testing</a></li>
                        <li><a href="#evaluation-process">Evaluation Process</a></li>
                        <li><a href="#why-testing-matters">Why Testing Matters</a></li>
                        <li><a href="#after-diagnosis">After Diagnosis</a></li>
                        <li><a href="#adult-testing">Adult ADHD Testing</a></li>
                        <li><a href="#faq">FAQ</a></li>
                    </ul>
                </div>

                <h2 id="children-vs-adults">ADHD in Children vs. Adults</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>ADHD in Children</h3>
                        <ul>
                            <li>Struggle academically despite normal or high intelligence</li>
                            <li>Difficulty following instructions</li>
                            <li>Lose things frequently</li>
                            <li>Appear not to listen</li>
                            <li>Fidget constantly</li>
                            <li>Interrupt others</li>
                            <li>Trouble waiting their turn</li>
                        </ul>
                        <p><em>Teachers may describe them as "not working to potential" or "needs to focus better."</em></p>
                    </div>
                    <div class="panel">
                        <h3>ADHD in Adults</h3>
                        <p>Adult ADHD often looks different than childhood ADHD. Hyperactivity decreases but attention and organization problems persist.</p>
                        <ul>
                            <li>Chronic lateness and missed deadlines</li>
                            <li>Difficulty prioritizing</li>
                            <li>Forgetfulness</li>
                            <li>Losing important items</li>
                            <li>Relationship problems due to seeming "irresponsible"</li>
                            <li>Job difficulties</li>
                            <li>Using excessive caffeine or stimulants to focus</li>
                        </ul>
                    </div>
                </div>

                <div class="callout callout--info">
                    <p><strong>Did you know?</strong> Many adults seek evaluation after their child is diagnosed with ADHD and recognize similar patterns in themselves.</p>
                </div>

                <h2 id="signs-testing">Signs You/Your Child May Need ADHD Testing</h2>

                <div class="callout callout--soft">
                    <h3>Inattentive Type Symptoms</h3>
                    <ul>
                        <li>Difficulty sustaining attention on tasks or conversations</li>
                        <li>Easily distracted by external stimuli or internal thoughts</li>
                        <li>Frequent careless mistakes or overlooking details</li>
                        <li>Difficulty organizing tasks and managing time</li>
                        <li>Avoiding tasks requiring sustained mental effort</li>
                        <li>Losing important items (keys, phone, homework, bills)</li>
                        <li>Forgetfulness in daily activities</li>
                    </ul>
                </div>

                <div class="callout callout--soft">
                    <h3>Hyperactive-Impulsive Type Symptoms</h3>
                    <ul>
                        <li>Fidgeting, tapping, or difficulty sitting still</li>
                        <li>Feeling restless or "driven by a motor"</li>
                        <li>Difficulty engaging in quiet activities</li>
                        <li>Talking excessively or interrupting others</li>
                        <li>Difficulty waiting turn</li>
                        <li>Impulsive decisions without considering consequences</li>
                        <li>Acting without thinking</li>
                    </ul>
                </div>

                <p>Combined type ADHD involves both inattentive and hyperactive-impulsive symptoms.</p>

                <h2 id="evaluation-process">Our Comprehensive ADHD Evaluation Process</h2>

                <h3>Step 1 &mdash; Clinical Interview (60-90 minutes)</h3>
                <p>We gather detailed developmental history, current symptoms, academic/work functioning, family history, medical history, and previous evaluations. For children, parents attend separately to discuss concerns openly.</p>

                <h3>Step 2 &mdash; Behavior Rating Scales</h3>
                <p>We use standardized questionnaires completed by the individual being evaluated, parents (for children), and teachers or partners (when appropriate). Common scales include Conners Rating Scales, ADHD-RS, and Brown ADD Scales. These provide objective data about ADHD symptoms across different settings.</p>

                <h3>Step 3 &mdash; Continuous Performance Test (CPT)</h3>
                <p>Computerized test measuring attention, impulsivity, and reaction time. Provides objective data about attention functioning compared to age norms.</p>

                <h3>Step 4 &mdash; Cognitive Testing (When Needed)</h3>
                <p>IQ testing or specific cognitive assessments may be included to understand learning strengths/weaknesses and rule out learning disabilities that can mimic ADHD.</p>

                <h3>Step 5 &mdash; Differential Diagnosis</h3>
                <p>We rule out other conditions that can look like ADHD: anxiety, depression, learning disabilities, sleep disorders, trauma, or other medical conditions. Accurate diagnosis is crucial for effective treatment.</p>

                <h3>Step 6 &mdash; Comprehensive Report &amp; Feedback</h3>
                <p>You'll receive a detailed written report (15-20 pages) with test results, diagnostic conclusions, functional impact, and specific recommendations for treatment, school/work accommodations, and support services. We schedule a feedback session to review findings and answer questions.</p>

                <h2 id="why-testing-matters">Why Professional ADHD Testing Matters</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Accurate Diagnosis vs. Online Screening</h3>
                        <p>Online screeners and brief questionnaires can suggest ADHD but can't diagnose it. Many conditions mimic ADHD. Comprehensive evaluation by a licensed psychologist ensures accurate diagnosis.</p>
                    </div>
                    <div class="panel">
                        <h3>Access to Treatment</h3>
                        <p>Formal ADHD diagnosis opens access to medication (if appropriate), ADHD coaching, therapy, and specialized interventions proven to help.</p>
                    </div>
                    <div class="panel">
                        <h3>School Accommodations (IEP or 504 Plan)</h3>
                        <p>Schools require formal psychological evaluation to provide accommodations like extended time on tests, preferential seating, reduced homework, note-taking support, or special education services.</p>
                    </div>
                    <div class="panel">
                        <h3>Workplace Accommodations (ADA)</h3>
                        <p>Adults with ADHD may qualify for workplace accommodations under the Americans with Disabilities Act - flexible schedule, written instructions, quiet workspace, task organization support.</p>
                    </div>
                    <div class="panel">
                        <h3>Self-Understanding &amp; Validation</h3>
                        <p>Many people describe ADHD diagnosis as life-changing - finally having explanation and language for lifelong struggles. It's not laziness or lack of intelligence; it's how your brain is wired.</p>
                    </div>
                </div>

                <h2 id="after-diagnosis">What Happens After ADHD Diagnosis?</h2>

                <div class="grid-3">
                    <div class="panel">
                        <h3>Medication Options</h3>
                        <p><strong>Stimulant medications</strong> (Adderall, Ritalin, Vyvanse) are highly effective for 70-80% of people with ADHD.</p>
                        <p><strong>Non-stimulant options</strong> (Strattera, Wellbutrin, Intuniv) are available for those who can't tolerate stimulants. Medication consultation with a psychiatrist or psychiatric nurse practitioner determines if medication is appropriate.</p>
                    </div>
                    <div class="panel">
                        <h3>ADHD Therapy &amp; Coaching</h3>
                        <p><strong>Therapy</strong> teaches organization skills, time management, emotional regulation, and strategies to manage ADHD symptoms.</p>
                        <p><strong>ADHD coaching</strong> provides practical support for implementing systems and strategies.</p>
                    </div>
                    <div class="panel">
                        <h3>Accommodations &amp; Support</h3>
                        <p>Our evaluation report includes specific accommodation recommendations for school or work. We can attend IEP/504 meetings if needed.</p>
                    </div>
                </div>

                <h2 id="adult-testing">Adult ADHD Testing - Never Too Late</h2>

                <div class="callout callout--soft">
                    <p>Adult ADHD evaluation is increasingly common as awareness grows. Many adults seek testing after:</p>
                    <ul class="check-list check-list--2col">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Their child is diagnosed and they recognize similar patterns</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Reading about ADHD and recognizing themselves</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Struggling with work performance despite effort</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Relationship problems related to disorganization or forgetfulness</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Years of feeling "not living up to potential"</li>
                    </ul>
                    <p><strong>It's never too late</strong> for answers, treatment, and relief.</p>
                </div>

                <h2 id="faq">Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>How long does ADHD testing take?</h3>
                        <p>The complete process takes 3-4 weeks: initial consultation, 2-3 testing sessions (3-5 hours total), 1-2 weeks for scoring and report writing, then feedback session. We work to accommodate urgent timelines when possible.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do I need a referral from my doctor?</h3>
                        <p>You can self-refer for ADHD testing. However, some insurance plans require referrals for coverage - check with your insurer.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance cover ADHD evaluation in Michigan?</h3>
                        <p>Most Michigan insurance plans cover ADHD testing when medically necessary. We accept Blue Cross Blue Shield, Aetna, Priority Health, McLaren, and HAP. Call (313) 654-1915 to verify coverage.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can ADHD testing be done via telehealth?</h3>
                        <p>Some components (clinical interview, rating scales) can be done via telehealth. Cognitive testing and CPT require in-person evaluation at our Dearborn office.</p>
                    </div>
                    <div class="faq-item">
                        <h3>At what age can children be tested?</h3>
                        <p>We can evaluate children as young as 6 years old. ADHD symptoms must be present before age 12 for diagnosis, but reliable testing is typically done age 6+.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if it's not ADHD - what else could it be?</h3>
                        <p>Anxiety, depression, learning disabilities, sleep disorders, trauma, and other conditions can mimic ADHD. Our comprehensive evaluation identifies what's really going on so you get appropriate treatment.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How much does ADHD testing cost?</h3>
                        <p>Cost varies by evaluation complexity. With insurance, you pay your copay/coinsurance. For self-pay, we provide upfront estimates. Call (313) 654-1915 for pricing.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Schedule ADHD Evaluation</h3>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p>Testing for children, teens, and adults. <a href="/appointment">Request an appointment online</a> or <a href="/psychological-testing">learn more about our testing services</a></p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
