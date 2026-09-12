<?php
// Page-specific variables
$page_title = 'FEP Blue Autism Testing Michigan | Federal Employee ASD';
$page_description = 'Autism testing for federal employees with FEP Blue insurance in Michigan. ADOS-2 evaluations for children & adults. USPS, CBP, FBI, VA. (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/fep-blue-autism-testing-michigan';
$current_service = 'psychological-testing'; // For sidebar active state

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Autism Testing Covered by FEP Blue Insurance',
            'description' => 'Gold-standard autism evaluations for federal employees and their families in Michigan using FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance, including ADOS-2 assessment, ADI-R interview, cognitive testing, and comprehensive diagnostic reports for children and adults.',
            'url' => 'https://www.healingtherapycenter.com/fep-blue-autism-testing-michigan',
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
                    'name' => 'How long does the autism evaluation take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'The complete evaluation typically takes 8-12 hours total, spread across multiple appointments (usually 3-4 sessions). This includes clinical interviews, ADOS-2 assessment, cognitive testing, and feedback session. We schedule appointments flexibly around your work schedule.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can adults get autism evaluations, or is it just for children?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We provide autism evaluations for both children and adults. Many adults seek diagnosis later in life after recognizing autistic traits or struggling with social/work situations. Adult autism diagnosis can be validating and provide access to accommodations and support.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Will my FEP Blue insurance cover autism testing?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many FEP Blue plans provide coverage for autism diagnostic evaluations, though coverage details vary by plan. When you call us at (313) 654-1915, we\'ll verify your benefits, explain your copay/coinsurance, check if pre-authorization is needed, and let you know your out-of-pocket costs before scheduling.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if my child doesn\'t have autism? Will you still provide a diagnosis?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Our evaluation assesses for autism spectrum disorder as well as other conditions that can present similarly (ADHD, social anxiety, language disorders, intellectual disability). If autism is not present, we\'ll identify what is causing the symptoms and provide appropriate recommendations. Either way, you get clarity and a path forward.'
                    ]
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES);

// Include configuration
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
    $hero_h1 = 'Autism Testing &amp; Evaluation for Federal Employees in Michigan';
    $hero_lead = "If you're a federal employee in Michigan and suspect autism spectrum disorder (ASD) in yourself or your child, comprehensive testing can provide clarity, validation, and a path forward. At Healing Therapy Center in Dearborn, we provide gold-standard autism evaluations for federal employees and their families using FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Whether you work for USPS, CBP, FBI, VA, or any federal agency in Michigan, your FEP Blue insurance may cover autism diagnostic evaluations. Early and accurate diagnosis is crucial for accessing appropriate support, therapies, accommodations, and understanding yourself or your child better.</p>

                <div class="callout">
                    <h3>We Accept FEP Blue Insurance</h3>
                    <p><strong>Federal employees can use their FEP Blue benefits for autism testing</strong></p>
                    <ul>
                        <li>Comprehensive autism evaluations (ADOS-2, ADI-R, cognitive testing)</li>
                        <li>Assessments for children, teens, and adults</li>
                        <li>Detailed diagnostic reports for school IEPs and workplace accommodations</li>
                        <li>FEP Blue insurance may cover psychological testing services</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage, copays, deductibles, and authorization requirements vary by FEP Blue plan. Call us at <a href="tel:313-654-1915">(313) 654-1915</a> to verify your specific benefits.</p>
                </div>

                <h2>Who Should Consider Autism Testing?</h2>

                <p>Autism spectrum disorder presents differently in children and adults. Many federal employees seek evaluations for:</p>

                <h3>For Children of Federal Employees:</h3>
                <ul>
                    <li><strong>Delayed speech or language skills:</strong> Not speaking by age 2 or regression in language</li>
                    <li><strong>Social challenges:</strong> Difficulty making eye contact, understanding social cues, or making friends</li>
                    <li><strong>Repetitive behaviors:</strong> Hand flapping, rocking, lining up toys, strict routines</li>
                    <li><strong>Sensory sensitivities:</strong> Overwhelmed by lights, sounds, textures, or smells</li>
                    <li><strong>Intense focused interests:</strong> Obsessive interest in specific topics</li>
                    <li><strong>School struggles:</strong> Academic challenges despite normal intelligence, difficulty with transitions</li>
                </ul>

                <h3>For Adult Federal Employees:</h3>
                <ul>
                    <li><strong>Social exhaustion:</strong> Finding workplace socializing draining, masking behaviors to fit in</li>
                    <li><strong>Communication differences:</strong> Taking things literally, missing sarcasm or office politics</li>
                    <li><strong>Need for routine:</strong> Struggling with unexpected changes to schedules or procedures</li>
                    <li><strong>Sensory overload:</strong> Difficulty with open office environments, fluorescent lighting, background noise</li>
                    <li><strong>Special interests:</strong> Deep expertise in narrow areas, difficulty with small talk</li>
                    <li><strong>Executive function challenges:</strong> Organization, time management, multitasking difficulties despite high intelligence</li>
                </ul>

                <p>Many adults discover they're autistic later in life after years of feeling "different" or struggling in social/work situations. A formal diagnosis can be validating and open doors to workplace accommodations and appropriate support.</p>

                <h2>Our Autism Evaluation Process</h2>

                <p>We use gold-standard assessment tools to provide comprehensive, accurate autism diagnoses:</p>

                <div class="panel">
                    <h3>What's Included in the Evaluation</h3>
                    <ol>
                        <li><strong>Initial Consultation (60-90 minutes):</strong> Clinical interview with parent/caregiver (for children) or with the adult seeking evaluation. Developmental history, current concerns, family history.</li>
                        <li><strong>ADOS-2 Assessment (90-120 minutes):</strong> The Autism Diagnostic Observation Schedule, Second Edition - the gold standard for autism diagnosis. Structured play and social interaction tasks designed to elicit autism-related behaviors.</li>
                        <li><strong>ADI-R Interview (2-3 hours):</strong> Autism Diagnostic Interview-Revised - comprehensive structured interview about developmental history and current functioning.</li>
                        <li><strong>Cognitive Testing (2-3 hours):</strong> IQ testing to understand cognitive strengths and challenges, learning profile, and rule out intellectual disability.</li>
                        <li><strong>Behavioral Rating Scales:</strong> Questionnaires completed by parents, teachers (for children), or self-report (for adults) to gather comprehensive information.</li>
                        <li><strong>Comprehensive Report &amp; Feedback (60 minutes):</strong> Detailed written report with diagnosis, scores, recommendations for therapy, school accommodations (IEP/504), and workplace accommodations. Feedback session to explain findings and answer questions.</li>
                    </ol>
                </div>

                <p>The entire evaluation process typically takes 8-12 hours across multiple appointments. We schedule appointments flexibly to accommodate federal employee schedules, including evenings and weekends.</p>

                <h2>What Happens After Diagnosis?</h2>

                <p>A formal autism diagnosis opens the door to crucial support and accommodations:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>For Children - School Support</h3>
                        <ul>
                            <li>IEP (Individualized Education Program) eligibility</li>
                            <li>504 Plan accommodations</li>
                            <li>Speech therapy, occupational therapy, ABA therapy</li>
                            <li>Special education services</li>
                            <li>Social skills groups</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>For Adults - Workplace Accommodations</h3>
                        <ul>
                            <li>Reasonable accommodations under ADA</li>
                            <li>Flexible schedules, remote work options</li>
                            <li>Quiet workspace or noise-canceling headphones</li>
                            <li>Written communication instead of verbal</li>
                            <li>Extended deadlines for complex tasks</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Therapy &amp; Support</h3>
                        <ul>
                            <li>Social skills training</li>
                            <li>CBT for anxiety/depression</li>
                            <li>Executive function coaching</li>
                            <li>Parent training and support groups</li>
                            <li>Couples/family therapy</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Self-Understanding</h3>
                        <ul>
                            <li>Validation of lifelong experiences</li>
                            <li>Connection to autistic community</li>
                            <li>Understanding strengths and challenges</li>
                            <li>Reducing shame and self-blame</li>
                            <li>Better self-advocacy</li>
                        </ul>
                    </div>
                </div>

                <h2>FEP Blue Coverage for Autism Testing</h2>

                <p>As a federal employee, your FEP Blue insurance often provides coverage for autism diagnostic evaluations. Here's what you need to know:</p>

                <div class="callout callout--info">
                    <h3>Insurance Coverage Details</h3>
                    <p><strong>What May Be Covered:</strong></p>
                    <ul>
                        <li>Diagnostic psychological testing for autism spectrum disorder</li>
                        <li>ADOS-2 assessment and ADI-R interview</li>
                        <li>Cognitive and IQ testing</li>
                        <li>Clinical interviews and behavioral observations</li>
                        <li>Comprehensive diagnostic report</li>
                    </ul>
                    <p><strong>Important to Know:</strong></p>
                    <ul>
                        <li>Coverage, copays, coinsurance, and deductibles vary by FEP Blue plan</li>
                        <li>Some plans may require pre-authorization for psychological testing</li>
                        <li>We'll verify your benefits before scheduling and explain your out-of-pocket costs</li>
                        <li>We handle all insurance billing and claims submission</li>
                    </ul>
                </div>

                <p><strong>Call us at <a href="tel:313-654-1915">(313) 654-1915</a></strong> and we'll verify your specific FEP Blue benefits for autism testing before you schedule.</p>

                <h2>Why Choose Healing Therapy Center?</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Gold-Standard Assessment</h3>
                        <p>We use the ADOS-2 and ADI-R - the most comprehensive and respected autism diagnostic tools available.</p>
                    </div>
                    <div class="panel">
                        <h3>Experience with Federal Families</h3>
                        <p>We understand the unique schedules and needs of federal employee families. Flexible scheduling including evenings and weekends.</p>
                    </div>
                    <div class="panel">
                        <h3>Comprehensive Reports</h3>
                        <p>Detailed diagnostic reports suitable for schools, IEP meetings, workplace accommodations, and disability services.</p>
                    </div>
                    <div class="panel">
                        <h3>FEP Blue In-Network</h3>
                        <p>We accept FEP Blue insurance and verify benefits before scheduling. No surprise bills.</p>
                    </div>
                </div>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>How long does the autism evaluation take?</h3>
                        <p>The complete evaluation typically takes 8-12 hours total, spread across multiple appointments (usually 3-4 sessions). This includes clinical interviews, ADOS-2 assessment, cognitive testing, and feedback session. We schedule appointments flexibly around your work schedule.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can adults get autism evaluations, or is it just for children?</h3>
                        <p>We provide autism evaluations for both children and adults. Many adults seek diagnosis later in life after recognizing autistic traits or struggling with social/work situations. Adult autism diagnosis can be validating and provide access to accommodations and support.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Will my FEP Blue insurance cover autism testing?</h3>
                        <p>Many FEP Blue plans provide coverage for autism diagnostic evaluations, though coverage details vary by plan. When you call us at (313) 654-1915, we'll verify your benefits, explain your copay/coinsurance, check if pre-authorization is needed, and let you know your out-of-pocket costs before scheduling.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if my child doesn't have autism? Will you still provide a diagnosis?</h3>
                        <p>Our evaluation assesses for autism spectrum disorder as well as other conditions that can present similarly (ADHD, social anxiety, language disorders, intellectual disability). If autism is not present, we'll identify what is causing the symptoms and provide appropriate recommendations. Either way, you get clarity and a path forward.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Ready to Schedule an Autism Evaluation?</h3>
                    <p>We provide comprehensive, gold-standard autism testing for federal employees and their families throughout Michigan.</p>
                    <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a></strong> to verify your FEP Blue benefits and schedule your evaluation.</p>
                    <p>Located in Dearborn, convenient to Detroit Federal Building, CBP, USPS, and all Metro Detroit federal facilities. Serving USPS, CBP, FBI, VA, and all federal employees in Michigan.</p>
                </div>

                <p style="text-align:center"><a href="/appointment" class="btn btn--pill btn--primary">Request Evaluation Online</a></p>

                <div class="callout callout--soft">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/fep-blue-federal-employee-therapy">FEP Blue Mental Health Services for Federal Employees</a></li>
                        <li><a href="/fep-blue-adhd-assessment-michigan">ADHD Testing with FEP Blue Insurance</a></li>
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
