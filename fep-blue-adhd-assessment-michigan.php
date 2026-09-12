<?php
// Page-specific variables
$page_title = 'FEP Blue ADHD Testing Michigan | Federal Employee ADHD';
$page_description = 'ADHD testing for federal employees with FEP Blue insurance in Michigan. Comprehensive evaluations for children & adults. USPS, CBP, FBI, VA. (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/fep-blue-adhd-assessment-michigan';
$current_service = 'psychological-testing'; // For sidebar active state

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'ADHD Testing Covered by FEP Blue Insurance',
            'description' => 'Comprehensive ADHD evaluations for federal employees and their families in Michigan using FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance, including clinical interviews, computerized performance testing (CPT-3, TOVA), cognitive testing, and detailed diagnostic reports.',
            'url' => 'https://www.healingtherapycenter.com/fep-blue-adhd-assessment-michigan',
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
                    'name' => 'How long does the ADHD evaluation take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'The complete ADHD evaluation typically takes 6-10 hours total, spread across 2-3 appointments. This includes clinical interview, computerized performance testing, cognitive assessment, and feedback session. We schedule appointments flexibly around your work schedule.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do you test adults for ADHD, or just children?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We provide ADHD testing for both children and adults. Many federal employees discover they have ADHD in adulthood when they struggle with demanding work tasks or recognize symptoms after their child is diagnosed. Adult ADHD is common and highly treatable.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Will my FEP Blue insurance cover ADHD testing?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many FEP Blue plans provide coverage for ADHD diagnostic testing, though coverage details vary by plan. When you call us at (313) 654-1915, we\'ll verify your benefits, explain your copay/coinsurance, check if pre-authorization is needed, and let you know your out-of-pocket costs before scheduling.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Will you prescribe ADHD medication?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Our psychologists provide diagnostic testing and therapy but do not prescribe medication. If medication is recommended, we provide a referral to a psychiatrist or your primary care doctor who can prescribe ADHD medication. Our comprehensive report includes medication recommendations to guide your prescriber.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can I use the ADHD diagnosis to get workplace accommodations?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes! Federal employees with ADHD are entitled to reasonable accommodations under the Americans with Disabilities Act (ADA). Our comprehensive report documents your diagnosis and recommends specific workplace accommodations you can present to your HR department or supervisor.'
                    ]
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES);

// Include configuration
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
    $hero_h1 = 'ADHD Testing &amp; Assessment for Federal Employees in Michigan';
    $hero_lead = "Are you a federal employee struggling with focus, organization, or time management? Does your child have trouble sitting still, completing homework, or following through on tasks? Comprehensive ADHD testing can provide answers, validation, and open the door to effective treatment and accommodations.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>At Healing Therapy Center in Dearborn, Michigan, we provide thorough ADHD evaluations for federal employees and their families using FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance. Whether you work for USPS, CBP, FBI, VA, or any federal agency, your FEP Blue benefits may cover ADHD diagnostic testing.</p>

                <div class="callout">
                    <h3>We Accept FEP Blue Insurance</h3>
                    <p><strong>Federal employees can use their FEP Blue benefits for ADHD testing</strong></p>
                    <ul>
                        <li>Comprehensive ADHD evaluations for children, teens, and adults</li>
                        <li>Gold-standard testing (CPT-3, TOVA, clinical interviews, rating scales)</li>
                        <li>Differential diagnosis (ADHD vs. anxiety, depression, learning disabilities)</li>
                        <li>Detailed reports for school IEPs, workplace accommodations, and medication management</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage, copays, deductibles, and authorization requirements vary by FEP Blue plan. Call us at <a href="tel:313-654-1915">(313) 654-1915</a> to verify your specific benefits.</p>
                </div>

                <h2>Signs You or Your Child May Have ADHD</h2>

                <p>ADHD (Attention-Deficit/Hyperactivity Disorder) affects both children and adults. Many federal employees don't realize they have ADHD until they struggle with demanding work tasks or recognize symptoms in their children.</p>

                <h3>ADHD Symptoms in Children:</h3>
                <div class="grid-2">
                    <div class="panel">
                        <h4>Inattention</h4>
                        <ul>
                            <li>Difficulty focusing on homework or tasks</li>
                            <li>Easily distracted, loses things often</li>
                            <li>Forgetful, doesn't follow through on instructions</li>
                            <li>Daydreams frequently</li>
                            <li>Makes careless mistakes</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h4>Hyperactivity/Impulsivity</h4>
                        <ul>
                            <li>Can't sit still, constantly fidgeting</li>
                            <li>Talks excessively, interrupts others</li>
                            <li>Acts without thinking</li>
                            <li>Difficulty waiting their turn</li>
                            <li>Always "on the go"</li>
                        </ul>
                    </div>
                </div>

                <h3>ADHD Symptoms in Adults (Federal Employees):</h3>
                <ul>
                    <li><strong>Workplace challenges:</strong> Missing deadlines, difficulty with paperwork, chronic lateness, trouble prioritizing</li>
                    <li><strong>Disorganization:</strong> Messy workspace, difficulty keeping track of assignments, losing important documents</li>
                    <li><strong>Time management issues:</strong> Underestimating how long tasks take, chronic procrastination</li>
                    <li><strong>Difficulty focusing:</strong> Struggling in meetings, easily distracted by office noise, reading emails multiple times</li>
                    <li><strong>Impulsivity:</strong> Interrupting colleagues, making hasty decisions, struggling with anger management</li>
                    <li><strong>Restlessness:</strong> Difficulty sitting through long meetings, need to move constantly</li>
                    <li><strong>Relationship problems:</strong> Forgetting important dates, not listening when partner talks, starting many projects but finishing few</li>
                </ul>

                <p>Many intelligent, capable federal employees have undiagnosed ADHD. They've developed coping mechanisms but still struggle more than they should. A formal diagnosis can lead to medication, therapy, and workplace accommodations that make a huge difference.</p>

                <h2>Our Comprehensive ADHD Evaluation Process</h2>

                <p>We use multiple assessment methods to provide accurate ADHD diagnoses and rule out other conditions:</p>

                <div class="panel">
                    <h3>What's Included in the ADHD Assessment</h3>
                    <ol>
                        <li><strong>Clinical Interview (60-90 minutes):</strong> Comprehensive discussion of symptoms, developmental history, family history, current functioning at work/school, and impact on daily life.</li>
                        <li><strong>Computerized Performance Test (45-60 minutes):</strong> CPT-3 or TOVA - measures attention, impulsivity, and response time. Gold-standard objective measure of ADHD symptoms.</li>
                        <li><strong>Behavioral Rating Scales:</strong> Standardized questionnaires completed by you, spouse/partner, parents (for children), or teachers. Conners rating scales, Brown ADD scales, or BAARS-IV.</li>
                        <li><strong>Cognitive Testing (2-3 hours):</strong> IQ testing to assess overall intelligence, working memory, processing speed, and rule out learning disabilities that can mimic ADHD.</li>
                        <li><strong>Differential Diagnosis:</strong> Assessment to rule out anxiety, depression, bipolar disorder, sleep disorders, or other conditions that cause attention problems.</li>
                        <li><strong>Comprehensive Report &amp; Feedback (45-60 minutes):</strong> Detailed written report with diagnosis, test scores, medication recommendations if appropriate, therapy suggestions, and accommodations for work/school. Feedback session to review findings and answer questions.</li>
                    </ol>
                </div>

                <p>The complete evaluation takes 6-10 hours across 2-3 appointments. We schedule flexibly around federal employee work schedules, including evenings and weekends.</p>

                <h2>Treatment &amp; Support After ADHD Diagnosis</h2>

                <p>ADHD is highly treatable. After diagnosis, we help you access the right combination of treatment and support:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Medication Management</h3>
                        <ul>
                            <li>Stimulant medications (Adderall, Ritalin, Vyvanse)</li>
                            <li>Non-stimulant options (Strattera, Intuniv)</li>
                            <li>Referral to psychiatrist for medication evaluation</li>
                            <li>80% of people with ADHD respond well to medication</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>ADHD Therapy &amp; Coaching</h3>
                        <ul>
                            <li>CBT for ADHD - proven strategies for organization, time management</li>
                            <li>Executive function coaching</li>
                            <li>Skill-building for work/school success</li>
                            <li>Treatment for co-occurring anxiety/depression</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Workplace Accommodations (Federal Employees)</h3>
                        <ul>
                            <li>Reasonable accommodations under ADA</li>
                            <li>Extended deadlines for complex tasks</li>
                            <li>Quiet workspace or noise-canceling headphones</li>
                            <li>Written instructions instead of verbal</li>
                            <li>Flexible break schedules</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>School Accommodations (Children)</h3>
                        <ul>
                            <li>504 Plan or IEP eligibility</li>
                            <li>Extended time on tests</li>
                            <li>Preferential seating (front of class)</li>
                            <li>Modified homework assignments</li>
                            <li>Behavioral support plans</li>
                        </ul>
                    </div>
                </div>

                <h2>FEP Blue Coverage for ADHD Testing</h2>

                <p>As a federal employee, your FEP Blue insurance often provides coverage for ADHD diagnostic evaluations:</p>

                <div class="callout callout--info">
                    <h3>Insurance Coverage Details</h3>
                    <p><strong>What May Be Covered:</strong></p>
                    <ul>
                        <li>Diagnostic psychological testing for ADHD</li>
                        <li>Computerized performance testing (CPT-3, TOVA)</li>
                        <li>Cognitive and IQ testing</li>
                        <li>Clinical interviews and behavioral rating scales</li>
                        <li>Comprehensive diagnostic report with recommendations</li>
                    </ul>
                    <p><strong>Important to Know:</strong></p>
                    <ul>
                        <li>Coverage, copays, coinsurance, and deductibles vary by FEP Blue plan</li>
                        <li>Some plans may require pre-authorization for psychological testing</li>
                        <li>We'll verify your benefits before scheduling and explain your out-of-pocket costs</li>
                        <li>We handle all insurance billing and claims submission</li>
                    </ul>
                </div>

                <p><strong>Call us at <a href="tel:313-654-1915">(313) 654-1915</a></strong> and we'll verify your specific FEP Blue benefits for ADHD testing before you schedule.</p>

                <h2>Why Federal Employees Choose Us for ADHD Testing</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Comprehensive Assessment</h3>
                        <p>We don't just rely on questionnaires. Gold-standard computerized testing plus clinical expertise ensures accurate diagnosis.</p>
                    </div>
                    <div class="panel">
                        <h3>Flexible Scheduling</h3>
                        <p>Evening and weekend appointments available to accommodate federal employee work schedules and shift work.</p>
                    </div>
                    <div class="panel">
                        <h3>Actionable Reports</h3>
                        <p>Detailed reports suitable for HR accommodations, school IEPs, psychiatrists, and disability services.</p>
                    </div>
                    <div class="panel">
                        <h3>FEP Blue In-Network</h3>
                        <p>We accept FEP Blue insurance and verify benefits before scheduling. No surprise bills.</p>
                    </div>
                </div>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>How long does the ADHD evaluation take?</h3>
                        <p>The complete ADHD evaluation typically takes 6-10 hours total, spread across 2-3 appointments. This includes clinical interview, computerized performance testing, cognitive assessment, and feedback session. We schedule appointments flexibly around your work schedule.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do you test adults for ADHD, or just children?</h3>
                        <p>We provide ADHD testing for both children and adults. Many federal employees discover they have ADHD in adulthood when they struggle with demanding work tasks or recognize symptoms after their child is diagnosed. Adult ADHD is common and highly treatable.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Will my FEP Blue insurance cover ADHD testing?</h3>
                        <p>Many FEP Blue plans provide coverage for ADHD diagnostic testing, though coverage details vary by plan. When you call us at (313) 654-1915, we'll verify your benefits, explain your copay/coinsurance, check if pre-authorization is needed, and let you know your out-of-pocket costs before scheduling.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Will you prescribe ADHD medication?</h3>
                        <p>Our psychologists provide diagnostic testing and therapy but do not prescribe medication. If medication is recommended, we provide a referral to a psychiatrist or your primary care doctor who can prescribe ADHD medication. Our comprehensive report includes medication recommendations to guide your prescriber.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can I use the ADHD diagnosis to get workplace accommodations?</h3>
                        <p>Yes! Federal employees with ADHD are entitled to reasonable accommodations under the Americans with Disabilities Act (ADA). Our comprehensive report documents your diagnosis and recommends specific workplace accommodations you can present to your HR department or supervisor.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Ready to Schedule an ADHD Evaluation?</h3>
                    <p>We provide comprehensive ADHD testing for federal employees and their families throughout Michigan.</p>
                    <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a></strong> to verify your FEP Blue benefits and schedule your assessment.</p>
                    <p>Located in Dearborn, convenient to Detroit Federal Building, CBP, USPS, and all Metro Detroit federal facilities. Serving USPS, CBP, FBI, VA, and all federal employees in Michigan.</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <p style="text-align:center"><a href="/appointment" class="btn btn--pill btn--primary">Request Assessment Online</a></p>

                <div class="callout callout--soft">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/fep-blue-federal-employee-therapy">FEP Blue Mental Health Services for Federal Employees</a></li>
                        <li><a href="/fep-blue-autism-testing-michigan">Autism Testing with FEP Blue Insurance</a></li>
                        <li><a href="/insurance">Insurance &amp; Payment Options</a></li>
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
