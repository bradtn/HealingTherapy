<?php
// Page-specific variables — verbatim from production
$page_title = 'Psychological Testing in Michigan | Autism & ADHD';
$page_description = 'Psychological testing in Dearborn, MI. Autism, ADHD, learning disability evaluations for children & adults. BCBS, Aetna accepted. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/psychological-testing';
$current_service = 'testing';

require_once __DIR__ . '/includes/config.php';

// Service + FAQPage Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Psychological Testing',
            'serviceType' => 'Psychological Testing and Evaluation',
            'description' => 'Comprehensive psychological testing in Dearborn, Michigan including autism evaluations (ADOS-2, ADI-R), ADHD testing, and learning disability assessments for children and adults, with detailed reports and practical recommendations.',
            'url' => 'https://www.healingtherapycenter.com/psychological-testing',
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
                    'name' => 'Does insurance cover psychological testing in Michigan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many insurance plans do cover psychological testing when it\'s medically necessary (ordered by a physician or when evaluating a suspected mental health condition). Coverage varies by plan and diagnosis. Autism evaluations, ADHD testing, and learning disability assessments are commonly covered. We recommend calling your insurance provider to verify benefits, and our office can help explain coverage when you call (313) 654-1915.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How long does psychological testing take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'The complete process typically takes 3-4 weeks from initial consultation to feedback session. Testing itself involves 3-6 hours across 2-3 sessions, followed by 1-2 weeks for scoring, analysis, and report writing. We understand families often need results quickly for school deadlines and work to accommodate urgent timelines when possible.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What\'s the difference between psychological testing and a psychiatric evaluation?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Psychological testing involves standardized tests, questionnaires, and systematic assessment by a psychologist to evaluate cognitive, emotional, and behavioral functioning. Psychiatric evaluation (by a psychiatrist or psychiatric nurse practitioner) is typically a clinical interview focused on diagnosing mental health conditions and determining medication needs. Psychological testing is more comprehensive and provides objective data beyond clinical observation alone.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'At what age can children be tested?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We can evaluate children as young as 2-3 years old using developmentally appropriate assessment tools. Autism evaluations, developmental screenings, and early cognitive assessments are possible even for very young children. Comprehensive learning disability and ADHD evaluations are typically most accurate for children 6 and older when academic skills and attention can be more reliably assessed.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do I need a referral from a doctor?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Referrals are not required to schedule psychological testing at Healing Therapy Center—you can self-refer. However, some insurance plans require a referral for coverage, so check with your insurance provider. Pediatricians, psychiatrists, therapists, and schools commonly refer families for testing.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What should we do to prepare for testing?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Ensure your child (or you) is well-rested, has eaten, and takes any regular medications as prescribed. Bring glasses or hearing aids if used. For children, explain testing as "playing games and solving puzzles to help us understand how your brain works best." There\'s no studying or preparation needed—we want to see natural performance.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can adults get tested for autism or ADHD?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Absolutely. Adult autism and ADHD evaluations are increasingly common as awareness grows. Many adults seek testing after their children are diagnosed, when reading about conditions and recognizing themselves, or after struggling for years without understanding why. It\'s never too late for answers and support.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if my child was already tested but I have questions about the results?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'We offer second opinions on previous evaluations and can conduct re-evaluations if significant time has passed or if previous testing didn\'t answer your questions. Retesting is sometimes appropriate when previous results don\'t match observed functioning or when updated documentation is needed.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How much does psychological testing cost?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Costs vary depending on the type and complexity of evaluation. With insurance, you\'ll pay your copay/coinsurance. For self-pay clients, we provide upfront cost estimates. While comprehensive testing is an investment, it opens access to services, accommodations, and understanding that can be life-changing. Call (313) 654-1915 for specific pricing based on your needs.'
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
    $hero_eyebrow = 'Our Services';
    $hero_h1 = 'Psychological Testing &amp; Autism Evaluation in Dearborn, MI';
    $hero_img = 'svc-hero-testing';
    $hero_img_alt = 'Psychological testing and assessment materials';
    include __DIR__ . '/includes/image-hero.php';
    ?>

    <section class="page">
        <div class="shell with-sidebar">
            <article class="prose">
                <p><a href="/autism-evaluation">Autism Evaluation →</a></p>

                <h2>Psychological Testing &amp; Assessment in Dearborn, MI</h2>
                <p>Are you seeking answers about your child's development, learning challenges, or behavioral concerns? Do you need a comprehensive autism evaluation, ADHD assessment, or learning disability testing? At Healing Therapy Center in Dearborn, Michigan, our experienced psychologists provide comprehensive psychological testing and evaluation services for children, adolescents, and adults throughout Metro Detroit.</p>

                <p>Psychological testing provides clarity, answers, and direction when you're struggling to understand cognitive, emotional, or behavioral challenges. Whether you need testing for school accommodations, diagnostic clarification, treatment planning, or simply to better understand yourself or your child, our thorough evaluations deliver the insights you need to move forward with confidence.</p>

                <h2>What is Psychological Testing?</h2>
                <p>Psychological testing (also called psychological assessment or psychoeducational evaluation) is a comprehensive process where a licensed psychologist uses standardized, research-based tests and clinical observations to evaluate cognitive abilities, emotional functioning, behavioral patterns, personality characteristics, and neuropsychological functioning.</p>

                <p>Unlike a brief screening, comprehensive psychological testing typically involves 4-8 hours of assessment across multiple sessions, including clinical interviews, standardized tests, behavioral observations, and sometimes input from parents, teachers, or other professionals. The result is a detailed written report with diagnostic conclusions, functional implications, and specific recommendations.</p>

                <div class="callout callout--info">
                    <h3>Quick Navigation - Jump to Section</h3>
                    <ul>
                        <li><a href="#types-of-testing">Types of Testing We Offer</a></li>
                        <li><a href="#detailed-testing">Detailed Testing Information</a></li>
                        <li><a href="#who-needs-testing">Who Needs Testing?</a></li>
                        <li><a href="#testing-process">The Testing Process</a></li>
                        <li><a href="#benefits">Benefits of Testing</a></li>
                        <li><a href="#why-choose-us">Why Choose Us</a></li>
                        <li><a href="#faq">Frequently Asked Questions</a></li>
                        <li><a href="/appointment">Schedule an Evaluation</a></li>
                    </ul>
                </div>

                <h2 id="types-of-testing">Types of Psychological Testing We Offer</h2>
                <p>We provide specialized psychological assessments for a wide range of concerns:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Autism Evaluations</h3>
                        <p>Gold-standard ADOS-2 and ADI-R assessments for children and adults. Comprehensive evaluation of social communication, behaviors, and sensory sensitivities.</p>
                        <p><a href="/autism-evaluation">Learn more →</a></p>
                    </div>
                    <div class="panel">
                        <h3>ADHD Testing</h3>
                        <p>Comprehensive testing for attention, focus, impulse control, and executive functioning using CPT and rating scales.</p>
                        <p><a href="/adhd-testing-evaluation">Learn more →</a></p>
                    </div>
                    <div class="panel">
                        <h3>Learning Disability Testing</h3>
                        <p>Psychoeducational evaluations for dyslexia, dyscalculia, dysgraphia. IQ + academic achievement testing for IEP/504 plans.</p>
                    </div>
                    <div class="panel">
                        <h3>IQ / Cognitive Testing</h3>
                        <p>WISC-V, WAIS-IV, Stanford-Binet. For giftedness, intellectual disability, baseline functioning, cognitive profiles.</p>
                    </div>
                    <div class="panel">
                        <h3>Behavioral &amp; Emotional</h3>
                        <p>Assessment for anxiety, depression, ODD, conduct issues, mood disorders. Clinical interviews and rating scales.</p>
                    </div>
                    <div class="panel">
                        <h3>Personality &amp; Adult Testing</h3>
                        <p>MMPI-3, PAI for complex mental health, personality disorders, differential diagnosis in adults.</p>
                    </div>
                    <div class="panel">
                        <h3>Neuropsychological Assessments</h3>
                        <p>Memory, attention, executive functioning, language. For brain injuries, stroke, concussion, cognitive decline.</p>
                    </div>
                </div>

                <h2 id="detailed-testing">Detailed Testing Information</h2>

                <div class="panel">
                    <h3>Autism Spectrum Disorder (ASD) Evaluations - Full Details</h3>
                    <p>Our comprehensive autism evaluations use gold-standard assessment tools including the ADOS-2 (Autism Diagnostic Observation Schedule) and ADI-R to accurately diagnose autism spectrum disorder in children and adults. We evaluate social communication difficulties, restricted/repetitive behaviors, sensory sensitivities, and developmental history to provide thorough diagnostic clarity.</p>
                    <p><strong>Parents often seek autism evaluations when they notice:</strong></p>
                    <ul>
                        <li>Delayed speech or language development</li>
                        <li>Difficulty with social interactions or making friends</li>
                        <li>Repetitive behaviors or intense, narrow interests</li>
                        <li>Sensory sensitivities (sound, texture, light, etc.)</li>
                        <li>Difficulty with transitions or changes in routine</li>
                        <li>Unusual play patterns or lack of pretend play</li>
                        <li>Limited eye contact or difficulty reading social cues</li>
                    </ul>
                    <p>An autism diagnosis opens access to early intervention services, school support (IEPs), therapy services (ABA, speech, occupational therapy), and community resources. <strong><a href="/autism-evaluation">Learn more about our autism evaluation process →</a></strong></p>
                </div>

                <div class="panel">
                    <h3>ADHD Testing - Full Details</h3>
                    <p>ADHD evaluations assess attention, focus, impulse control, hyperactivity, and executive functioning using comprehensive testing, behavior rating scales, clinical interviews, and continuous performance tests. We evaluate for all ADHD presentations: predominantly inattentive, predominantly hyperactive-impulsive, and combined type.</p>
                    <p><strong>Common signs prompting ADHD evaluation:</strong></p>
                    <ul>
                        <li>Difficulty sustaining attention on tasks or in conversations</li>
                        <li>Easily distracted by external stimuli or internal thoughts</li>
                        <li>Frequent careless mistakes or overlooking details</li>
                        <li>Difficulty organizing tasks and managing time</li>
                        <li>Losing important items (keys, phone, homework)</li>
                        <li>Fidgeting, restlessness, or difficulty sitting still</li>
                        <li>Impulsive decision-making or interrupting others</li>
                        <li>Difficulty waiting turn or delaying gratification</li>
                    </ul>
                    <p>ADHD testing is valuable for children struggling academically, adults experiencing workplace difficulties, or anyone seeking to understand persistent attention and organization challenges. Testing results support school accommodations, workplace adjustments, and guide treatment planning (medication, therapy, coaching). <strong><a href="/adhd-testing-evaluation">Learn more about our ADHD testing process →</a></strong></p>
                </div>

                <div class="panel">
                    <h3>Learning Disability Evaluations - Full Details</h3>
                    <p>Comprehensive psychoeducational testing identifies specific learning disabilities including dyslexia (reading disorder), dyscalculia (math disorder), dysgraphia (writing disorder), and nonverbal learning disabilities. We assess cognitive abilities (IQ testing), academic achievement (reading, writing, math), and processing skills to identify the specific nature of learning challenges.</p>
                    <p><strong>Signs your child may benefit from learning disability testing:</strong></p>
                    <ul>
                        <li>Reading significantly below grade level despite instruction</li>
                        <li>Difficulty decoding words, poor spelling, slow reading speed</li>
                        <li>Struggles with math concepts or calculations</li>
                        <li>Poor handwriting or extreme difficulty with written expression</li>
                        <li>Strong verbal skills but poor reading/writing skills (or vice versa)</li>
                        <li>Homework takes significantly longer than peers</li>
                        <li>Previous interventions haven't helped despite hard work</li>
                    </ul>
                    <p>Learning disability testing is essential for securing IEP or 504 plan accommodations, understanding why bright children struggle academically, and accessing specialized interventions like reading therapy or math tutoring.</p>
                </div>

                <div class="panel">
                    <h3>IQ / Cognitive Testing - Full Details</h3>
                    <p>IQ testing measures intellectual functioning across multiple domains including verbal comprehension, visual-spatial reasoning, working memory, and processing speed. We use age-appropriate tests including the WISC-V (children), WAIS-IV (adults), and Stanford-Binet to provide comprehensive cognitive profiles.</p>
                    <p><strong>IQ testing helps identify:</strong></p>
                    <ul>
                        <li>Intellectual giftedness (for gifted program eligibility)</li>
                        <li>Intellectual disability / developmental delays</li>
                        <li>Cognitive strengths and weaknesses affecting learning</li>
                        <li>Discrepancies between ability and academic achievement</li>
                        <li>Baseline cognitive functioning before/after medical events</li>
                    </ul>
                </div>

                <div class="panel">
                    <h3>Behavioral &amp; Emotional Assessments - Full Details</h3>
                    <p>When children or adults experience persistent behavioral problems, emotional dysregulation, or mood disturbances, comprehensive assessment helps clarify underlying issues. We evaluate for <a href="/anxiety-therapy-michigan">anxiety disorders</a>, <a href="/depression-counseling-michigan">depression</a>, bipolar disorder, oppositional defiant disorder (ODD), conduct disorder, and emotional regulation difficulties.</p>
                    <p>Assessment tools include clinical interviews, behavioral rating scales, personality assessments, and emotional functioning measures. Results guide appropriate treatment recommendations and help distinguish between similar-appearing conditions.</p>
                </div>

                <div class="panel">
                    <h3>Personality &amp; Adult Testing - Full Details</h3>
                    <p>Adult psychological testing helps clarify complex mental health presentations, personality patterns, and long-standing difficulties. We use comprehensive assessment batteries including the MMPI-3, PAI, and clinical interviews to evaluate personality disorders, complex trauma, bipolar spectrum disorders, and differential diagnoses when symptoms are unclear.</p>
                </div>

                <div class="panel">
                    <h3>Neuropsychological Assessments - Full Details</h3>
                    <p>Neuropsychological testing evaluates brain-behavior relationships, assessing memory, attention, executive functioning, language, visual-spatial skills, and motor functioning. These specialized assessments are valuable after brain injuries, strokes, concussions, seizure disorders, or when cognitive decline is suspected.</p>
                </div>

                <h2 id="who-needs-testing">Who Needs Psychological Testing?</h2>

                <h3>Children &amp; Adolescents (Ages 2-17)</h3>
                <p>Parents often seek psychological testing for children when:</p>
                <ul>
                    <li>School is recommending evaluation or expressing concerns</li>
                    <li>Child is struggling academically despite effort and support</li>
                    <li>Developmental milestones (speech, social skills, motor skills) are delayed</li>
                    <li>Behavioral problems at home or school are persistent</li>
                    <li>Child seems anxious, depressed, or emotionally dysregulated</li>
                    <li>Diagnosis is unclear despite previous treatment attempts</li>
                    <li>Accommodations or special education services are needed</li>
                    <li>Gifted program eligibility needs documentation</li>
                </ul>

                <h3>Adults (Ages 18+)</h3>
                <p>Adults benefit from psychological testing when:</p>
                <ul>
                    <li>Long-standing challenges (ADHD, autism, learning disabilities) were never formally evaluated</li>
                    <li>Workplace accommodations require documentation</li>
                    <li>Diagnostic clarity is needed for treatment planning</li>
                    <li>Cognitive changes are noticed (memory, attention, processing)</li>
                    <li>Disability claims require psychological documentation</li>
                    <li>Self-understanding about persistent difficulties is desired</li>
                </ul>

                <h2 id="testing-process">The Psychological Testing Process</h2>

                <div class="step-row">
                    <div>
                        <h3>Consultation</h3>
                        <p>60 min clinical interview</p>
                    </div>
                    <div>
                        <h3>Testing</h3>
                        <p>3-6 hours across 2-3 sessions</p>
                    </div>
                    <div>
                        <h3>Collateral Info</h3>
                        <p>Teacher/provider input</p>
                    </div>
                    <div>
                        <h3>Report</h3>
                        <p>1-2 weeks, 15-25 pages</p>
                    </div>
                    <div>
                        <h3>Feedback</h3>
                        <p>60-90 min review session</p>
                    </div>
                </div>

                <div class="callout callout--info">
                    <p><strong>Timeline:</strong> Complete process takes 3-4 weeks from initial consultation to feedback session. We accommodate urgent timelines when possible for school deadlines.</p>
                </div>

                <h2 id="benefits">Benefits of Comprehensive Psychological Testing</h2>

                <h3>Diagnostic Clarity</h3>
                <p>Stop guessing. Comprehensive testing provides definitive answers about diagnoses like autism, ADHD, learning disabilities, anxiety disorders, and more. Accurate diagnosis is the foundation for effective treatment.</p>

                <h3>School Accommodations &amp; Support</h3>
                <p>Testing results are essential documentation for securing:</p>
                <ul>
                    <li><strong>IEP (Individualized Education Program):</strong> Specialized instruction for students with disabilities</li>
                    <li><strong>504 Plans:</strong> Accommodations for students with disabilities (extended time, preferential seating, etc.)</li>
                    <li><strong>College Accommodations:</strong> Support services at the university level</li>
                    <li><strong>Gifted Program Eligibility:</strong> Documentation for advanced programming</li>
                </ul>

                <h3>Personalized Treatment Planning</h3>
                <p>Results guide specific, evidence-based interventions tailored to your unique profile. Instead of trial-and-error approaches, you'll have a roadmap for what treatments, therapies, and supports are most likely to help.</p>

                <h3>Access to Services &amp; Resources</h3>
                <p>Many services require formal diagnostic documentation:</p>
                <ul>
                    <li>Early intervention programs (ages 0-3)</li>
                    <li>ABA therapy for autism</li>
                    <li>Speech-language therapy</li>
                    <li>Occupational therapy</li>
                    <li>Social skills groups</li>
                    <li>Specialized tutoring or academic interventions</li>
                    <li>Disability benefits or SSI</li>
                </ul>

                <h3>Understanding &amp; Validation</h3>
                <p>For individuals who've struggled for years without understanding why, psychological testing provides validation, self-understanding, and relief. Many adults describe autism or ADHD diagnoses as life-changing—finally having language and framework for lifelong challenges.</p>

                <h3>Advocacy</h3>
                <p>Comprehensive evaluation reports serve as powerful advocacy tools when working with schools, employers, medical providers, or insurance companies to secure appropriate supports and accommodations.</p>

                <h2 id="why-choose-us">Why Choose Healing Therapy Center for Psychological Testing?</h2>

                <h3>Experienced, Licensed Psychologists</h3>
                <p>Our evaluations are conducted by doctoral-level psychologists with specialized training in psychological assessment, child development, and neurodevelopmental disorders. We adhere to professional standards and use gold-standard, evidence-based assessment tools.</p>

                <h3>Comprehensive, Not Cookie-Cutter Evaluations</h3>
                <p>We don't use one-size-fits-all testing batteries. Each evaluation is individually tailored to address your specific questions and concerns, using the most appropriate and current assessment tools available.</p>

                <h3>Child &amp; Family-Centered Approach</h3>
                <p>We understand that testing can feel intimidating, especially for children. Our psychologists create comfortable, engaging environments where individuals feel supported and can perform their best. We work collaboratively with families throughout the process.</p>

                <h3>Timely, Thorough Reports</h3>
                <p>We provide detailed written reports within 2 weeks of completing testing—faster than many clinics while maintaining thorough, high-quality documentation.</p>

                <h3>Insurance Accepted</h3>
                <p>We accept most major insurance plans including Blue Cross Blue Shield, Aetna, Priority Health, McLaren Health Plan, and HAP. Many insurance plans cover psychological testing when medically necessary. Call (313) 654-1915 to verify your coverage and understand costs.</p>

                <h3>Convenient Dearborn Location</h3>
                <p>Our office at 835 Mason St STE D160 in Dearborn is easily accessible from I-94 and major routes throughout Metro Detroit. We serve families from Dearborn, Dearborn Heights, Allen Park, Plymouth, Livonia, Westland, Canton, and throughout Wayne and Oakland Counties.</p>

                <h2 id="faq">Frequently Asked Questions About Psychological Testing</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Does insurance cover psychological testing in Michigan?</h3>
                        <p>Many insurance plans do cover psychological testing when it's medically necessary (ordered by a physician or when evaluating a suspected mental health condition). Coverage varies by plan and diagnosis. Autism evaluations, ADHD testing, and learning disability assessments are commonly covered. We recommend calling your insurance provider to verify benefits, and our office can help explain coverage when you call (313) 654-1915.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How long does psychological testing take?</h3>
                        <p>The complete process typically takes 3-4 weeks from initial consultation to feedback session. Testing itself involves 3-6 hours across 2-3 sessions, followed by 1-2 weeks for scoring, analysis, and report writing. We understand families often need results quickly for school deadlines and work to accommodate urgent timelines when possible.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What's the difference between psychological testing and a psychiatric evaluation?</h3>
                        <p>Psychological testing involves standardized tests, questionnaires, and systematic assessment by a psychologist to evaluate cognitive, emotional, and behavioral functioning. Psychiatric evaluation (by a psychiatrist or psychiatric nurse practitioner) is typically a clinical interview focused on diagnosing mental health conditions and determining medication needs. Psychological testing is more comprehensive and provides objective data beyond clinical observation alone.</p>
                    </div>
                    <div class="faq-item">
                        <h3>At what age can children be tested?</h3>
                        <p>We can evaluate children as young as 2-3 years old using developmentally appropriate assessment tools. Autism evaluations, developmental screenings, and early cognitive assessments are possible even for very young children. Comprehensive learning disability and ADHD evaluations are typically most accurate for children 6 and older when academic skills and attention can be more reliably assessed.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do I need a referral from a doctor?</h3>
                        <p>Referrals are not required to schedule psychological testing at Healing Therapy Center—you can self-refer. However, some insurance plans require a referral for coverage, so check with your insurance provider. Pediatricians, psychiatrists, therapists, and schools commonly refer families for testing.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What should we do to prepare for testing?</h3>
                        <p>Ensure your child (or you) is well-rested, has eaten, and takes any regular medications as prescribed. Bring glasses or hearing aids if used. For children, explain testing as "playing games and solving puzzles to help us understand how your brain works best." There's no studying or preparation needed—we want to see natural performance.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can adults get tested for autism or ADHD?</h3>
                        <p>Absolutely. Adult autism and ADHD evaluations are increasingly common as awareness grows. Many adults seek testing after their children are diagnosed, when reading about conditions and recognizing themselves, or after struggling for years without understanding why. It's never too late for answers and support.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if my child was already tested but I have questions about the results?</h3>
                        <p>We offer second opinions on previous evaluations and can conduct re-evaluations if significant time has passed or if previous testing didn't answer your questions. Retesting is sometimes appropriate when previous results don't match observed functioning or when updated documentation is needed.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How much does psychological testing cost?</h3>
                        <p>Costs vary depending on the type and complexity of evaluation. With insurance, you'll pay your copay/coinsurance. For self-pay clients, we provide upfront cost estimates. While comprehensive testing is an investment, it opens access to services, accommodations, and understanding that can be life-changing. Call (313) 654-1915 for specific pricing based on your needs.</p>
                    </div>
                </div>

                <h2>Specialized Autism Evaluation Services</h2>
                <p>Autism spectrum disorder (ASD) is one of our specialty areas. We provide comprehensive autism evaluations using gold-standard diagnostic tools including:</p>
                <ul>
                    <li><strong>ADOS-2</strong> (Autism Diagnostic Observation Schedule): Standardized, semi-structured assessment observing social communication and play</li>
                    <li><strong>ADI-R</strong> (Autism Diagnostic Interview-Revised): Comprehensive parent interview about developmental history and current behaviors</li>
                    <li><strong>Cognitive testing</strong> to understand intellectual functioning and learning profile</li>
                    <li><strong>Adaptive functioning assessment</strong> to evaluate daily living skills</li>
                    <li><strong>Additional screenings</strong> for co-occurring conditions (ADHD, anxiety, etc.)</li>
                </ul>

                <p>Our autism evaluations serve children as young as 18 months through adults of all ages. <strong><a href="/autism-evaluation">Learn more about our autism evaluation process and what to expect</a></strong>.</p>

                <h2>Serving Psychological Testing Clients Throughout Metro Detroit</h2>
                <p>Our Dearborn location provides convenient access to families throughout Southeast Michigan seeking psychological testing, autism evaluations, ADHD assessments, and learning disability evaluations:</p>
                <ul>
                    <li><strong>Wayne County:</strong> Dearborn, Dearborn Heights, Allen Park, Lincoln Park, Taylor, Southgate, Plymouth, Livonia, Westland, Canton, Garden City, Romulus, Wayne, Inkster, and surrounding areas</li>
                    <li><strong>Oakland County:</strong> Novi, Northville, Farmington Hills, Southfield, Royal Oak, Birmingham, Bloomfield Hills, and nearby communities</li>
                </ul>

                <h2>Ready to Get Answers?</h2>
                <p>Whether you're seeking an autism evaluation, ADHD assessment, learning disability testing, or comprehensive psychological evaluation, Healing Therapy Center in Dearborn provides the thorough, compassionate assessment services you need.</p>

                <div class="callout callout--info">
                    <h3>Schedule Your Psychological Evaluation</h3>
                    <p><strong>Call us today:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></p>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>Hours:</strong> Monday-Friday 9:00 AM - 5:00 PM, Saturday 9:00 AM - 2:00 PM</p>
                    <p><a class="btn btn--pill btn--primary" href="/appointment">Request an Appointment</a> <a class="btn btn--pill btn--ghost" href="/autism-evaluation">Autism Evaluation Info</a></p>
                </div>

                <div class="callout">
                    <h3>Insurance Accepted</h3>
                    <p>We accept most major insurance plans including Blue Cross Blue Shield of Michigan, Aetna, Priority Health, McLaren Health Plan, and HAP. Testing available for children (ages 2+), adolescents, and adults throughout Michigan. Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify your coverage.</p>
                </div>

                <p><em>Comprehensive evaluations for autism, ADHD, learning disabilities, and more. In-person testing at our Dearborn office.</em></p>
            </article>

            <?php include __DIR__ . '/includes/sidebar-services.php'; ?>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
