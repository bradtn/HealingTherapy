<?php
// Page-specific variables
$page_title = 'Autism Evaluation in Dearborn, MI | Children';
$page_description = 'Autism evaluation for children in Dearborn, MI. ADOS-2 assessment by expert psychologists. BCBS, Aetna accepted. Call (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/autism-evaluation';

// Service + FAQPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Autism Evaluation',
            'serviceType' => 'Autism Diagnostic Evaluation',
            'description' => 'Comprehensive autism evaluations for children in Dearborn, Michigan using gold-standard assessments including the ADOS-2 and ADI-R, with detailed reports that support school accommodations (IEP/504) and access to therapy services.',
            'url' => 'https://www.healingtherapycenter.com/autism-evaluation',
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
                    'name' => 'How long does an autism evaluation take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'The complete evaluation process typically takes 4-6 weeks from initial consultation to feedback session. Testing sessions usually last 2-4 hours depending on the individual\'s age and needs.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does insurance cover autism evaluations in Michigan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most Michigan insurance plans cover autism evaluations when medically necessary. We accept Blue Cross Blue Shield, Aetna, Priority Health, McLaren, and HAP. Contact us at (313) 654-1915 to verify your specific coverage.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What tests are used in autism evaluation?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We use gold-standard assessments including the ADOS-2 (Autism Diagnostic Observation Schedule) and ADI-R (Autism Diagnostic Interview-Revised), along with standardized cognitive testing, behavioral questionnaires, and developmental history.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if my child doesn\'t have autism? Will we still get a diagnosis?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'If autism isn\'t present, our comprehensive evaluation often identifies other conditions that may explain the symptoms, such as ADHD, anxiety, sensory processing issues, or language disorders. You\'ll receive a detailed report with findings and recommendations regardless of the diagnosis.'
                    ]
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES);

require_once dirname(__DIR__) . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Specialized Care';
    $hero_h1 = 'Autism Evaluation for Children';
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <h2>Autism Evaluations in Michigan</h2>
                <p>Searching for an autism evaluation in Michigan? Receiving an autism diagnosis can be life-changing for individuals and their families. Our goal at Healing Therapy Center is to offer clear, compassionate guidance throughout the entire process. Serving families across Metro Detroit, Ann Arbor, and throughout Michigan via telehealth, our autism evaluations provide a comprehensive view of social, emotional, communication, and behavioral functioning.</p>

                <h2>Who Might Need an Autism Evaluation?</h2>
                <div class="grid-2">
                    <div class="panel">
                        <h3>Social &amp; Communication Struggles</h3>
                        <p>Children or adolescents having difficulty with social interactions, making eye contact, understanding social cues, or expressing themselves verbally.</p>
                    </div>
                    <div class="panel">
                        <h3>Repetitive Behaviors &amp; Sensory Issues</h3>
                        <p>Children showing repetitive behaviors (hand-flapping, rocking), sensory sensitivities (to sounds, textures, lights), or highly fixated interests.</p>
                    </div>
                    <div class="panel">
                        <h3>Rigid Routines &amp; Change Resistance</h3>
                        <p>Individuals who need strict routines, become distressed by changes, or have difficulty adapting to new situations.</p>
                    </div>
                </div>
                <div class="callout callout--soft">
                    <p><strong>Our Approach:</strong> Our autism evaluation process is guided by best practices in psychological assessment. We use a combination of standardized testing, behavioral observations, and input from caregivers, teachers, and the client themselves. Our approach ensures a complete and accurate understanding of the individual's strengths and challenges. We also provide <a href="/adhd-testing-evaluation">ADHD testing</a> and <a href="/psychological-testing">comprehensive psychological testing</a>.</p>
                </div>

                <h2>What Does the Autism Evaluation Process Look Like?</h2>
                <div class="step-row">
                    <div>
                        <h4>Initial Consultation</h4>
                        <p>We meet with the client (and parents/caregivers) to discuss concerns and determine if an evaluation is appropriate.</p>
                    </div>
                    <div>
                        <h4>Data Collection</h4>
                        <p>We gather information from teachers, parents, and medical providers to create a full picture of development, social skills, and behavior.</p>
                    </div>
                    <div>
                        <h4>Testing (ADOS-2 &amp; ADI-R)</h4>
                        <p>Using gold-standard tools, we assess social interaction, communication, play, and behavior.</p>
                    </div>
                    <div>
                        <h4>Comprehensive Report</h4>
                        <p>Detailed report with results, diagnosis (if applicable), and recommendations for school accommodations, therapy, or support services.</p>
                    </div>
                    <div>
                        <h4>Feedback Session</h4>
                        <p>We meet with the client and caregivers to discuss results, provide clarity, and answer questions.</p>
                    </div>
                </div>

                <h2>Why Choose Healing Therapy Center?</h2>
                <div class="grid-2">
                    <div class="panel">
                        <h3>Licensed Psychologists</h3>
                        <p>Our evaluations are conducted by licensed psychologists with specialized training in autism spectrum disorders and developmental assessments.</p>
                    </div>
                    <div class="panel">
                        <h3>Family-Centered Care</h3>
                        <p>We involve families throughout the process, ensuring you understand results and have actionable steps for supporting your child.</p>
                    </div>
                    <div class="panel">
                        <h3>Insurance Accepted</h3>
                        <p>We accept most major insurance plans including Blue Cross Blue Shield and Aetna. Our team helps verify your benefits before your appointment.</p>
                    </div>
                    <div class="panel">
                        <h3>Convenient Location</h3>
                        <p>Located in Dearborn, Michigan, our office is easily accessible for families throughout Metro Detroit and surrounding areas.</p>
                    </div>
                </div>

                <h2>After the Evaluation</h2>
                <p>Receiving an autism diagnosis opens doors to understanding and support. Our detailed evaluation report can be used to access school accommodations through an IEP or 504 plan, qualify for therapy services such as ABA, speech therapy, or occupational therapy, and connect with community resources and support groups. We work with families to ensure you leave our office with a clear understanding of the diagnosis and practical next steps for moving forward.</p>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>How long does an autism evaluation take?</h3>
                        <p>The complete evaluation process typically takes 4-6 weeks from initial consultation to feedback session. Testing sessions usually last 2-4 hours depending on the individual's age and needs.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance cover autism evaluations in Michigan?</h3>
                        <p>Most Michigan insurance plans cover autism evaluations when medically necessary. We accept Blue Cross Blue Shield, Aetna, Priority Health, McLaren, and HAP. Contact us at (313) 654-1915 to verify your specific coverage.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What tests are used in autism evaluation?</h3>
                        <p>We use gold-standard assessments including the ADOS-2 (Autism Diagnostic Observation Schedule) and ADI-R (Autism Diagnostic Interview-Revised), along with standardized cognitive testing, behavioral questionnaires, and developmental history.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if my child doesn't have autism? Will we still get a diagnosis?</h3>
                        <p>If autism isn't present, our comprehensive evaluation often identifies other conditions that may explain the symptoms, such as ADHD, anxiety, sensory processing issues, or language disorders. You'll receive a detailed report with findings and recommendations regardless of the diagnosis.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Request an Evaluation Today</h3>
                    <p>Start your journey toward understanding and support. Our comprehensive autism evaluations can unlock new possibilities for growth, learning, and well-being.</p>
                    <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment →</a></p>
                </div>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
