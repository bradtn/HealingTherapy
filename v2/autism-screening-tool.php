<?php
// Page-specific variables — verbatim from production
$page_title = 'Free Autism Screening Tool | M-CHAT-R Assessment';
$page_description = 'Free online autism screening tool (M-CHAT-R) for children 16-30 months. Quick assessment to determine if autism evaluation is needed. Call (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/autism-screening-tool';

require_once dirname(__DIR__) . '/includes/config.php';

// Service + FAQPage Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Autism Screening Tool',
            'serviceType' => 'Autism Screening (M-CHAT-R)',
            'description' => 'Free online autism screening tool (M-CHAT-R) for children 16-30 months. A quick, research-validated questionnaire that helps parents determine whether a comprehensive autism evaluation is recommended.',
            'url' => 'https://www.healingtherapycenter.com/autism-screening-tool',
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
                ['@type' => 'Question', 'name' => 'What are the early signs of autism in toddlers?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Early signs of autism in toddlers include limited eye contact, not responding to their name by 12 months, not pointing to show interest by 14 months, lack of pretend play by 18 months, and repetitive behaviors. Our screening tool can help identify these signs.']],
                ['@type' => 'Question', 'name' => 'At what age should my child be screened for autism?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The American Academy of Pediatrics recommends autism screening at 18 and 24 months. However, if you have concerns at any age, don\'t wait. Early intervention is key to better outcomes.']],
                ['@type' => 'Question', 'name' => 'Does insurance cover autism therapy?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Most major insurance plans cover autism therapy services like ABA, speech, and occupational therapy. Our billing team will verify your coverage and help maximize your benefits.']],
                ['@type' => 'Question', 'name' => 'How many hours of ABA therapy does my child need?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The number of ABA therapy hours varies based on individual needs, typically ranging from 10-40 hours per week. Our BCBA will assess your child and recommend an appropriate treatment plan.']],
                ['@type' => 'Question', 'name' => 'What\'s the difference between speech therapy and ABA for communication?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Speech therapy focuses on language development, articulation, and communication skills. ABA addresses the behavioral aspects of communication and teaches functional communication. Many children benefit from both therapies working together.']]
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
    $hero_eyebrow = 'Free Screening';
    $hero_h1 = 'Free Autism Spectrum Disorder (ASD) Screening Questionnaire';
    $hero_lead = "<strong>Early detection makes a difference.</strong> This free screening questionnaire uses the M-CHAT-R (Modified Checklist for Autism in Toddlers, Revised) to help identify potential signs of autism spectrum disorder in children. The M-CHAT-R assessment is designed for children ages 16-30 months. <em>Note: This questionnaire is a screening tool only — professional evaluation is recommended for diagnosis.</em>";
    $hero_cta = false;
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <!-- Screening questionnaire -->
    <section class="page" id="mchat" aria-label="Autism Screening Tool">
        <div class="shell">
            <div class="mchat">
                <div class="mchat__bar">
                    <div class="mchat__track">
                        <div class="mchat__fill" id="mchat-progress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" aria-label="Screening progress"></div>
                    </div>
                    <span class="mchat__count" id="mchat-progress-label">0 of 20 answered</span>
                </div>

                <ol class="mchat__list" id="mchat-questions"></ol>

                <div class="mchat__submit">
                    <button type="button" class="btn btn--pill btn--primary" id="mchat-submit" disabled>
                        View Results &amp; Recommendations
                        <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                    </button>
                </div>

                <div class="mchat-result" id="mchat-result" role="region" aria-label="Screening results" hidden></div>

                <div class="mchat__submit">
                    <button type="button" class="btn btn--pill btn--ghost" id="mchat-reset" hidden>Retake the screening</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="section section--white" id="services" aria-label="Therapy Services">
        <div class="shell">
            <div class="section__head section-title reveal">
                <p class="eyebrow">Our Services</p>
                <h2>Comprehensive ASD Therapy Services in Dearborn, MI</h2>
            </div>
            <div class="grid-3">
                <div class="panel">
                    <h3>Applied Behavior Analysis (ABA) Therapy</h3>
                    <p>Evidence-based therapy focusing on improving specific behaviors, communication, and social skills through positive reinforcement.</p>
                    <ul class="check-list">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> 1:1 intensive therapy</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Home &amp; center-based options</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> BCBA supervised</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Insurance accepted</li>
                    </ul>
                    <p><a href="https://www.autismspeaks.org/applied-behavior-analysis" target="_blank" rel="noopener noreferrer">Learn More About ABA →</a></p>
                </div>
                <div class="panel">
                    <h3>Speech &amp; Language Therapy</h3>
                    <p>Comprehensive speech therapy addressing verbal and non-verbal communication, articulation, and social communication skills.</p>
                    <ul class="check-list">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> AAC device training</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Social communication groups</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Feeding therapy</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Teletherapy available</li>
                    </ul>
                    <p><a href="https://my.clevelandclinic.org/health/treatments/22366-speech-therapy" target="_blank" rel="noopener noreferrer">Learn More About Speech →</a></p>
                </div>
                <div class="panel">
                    <h3>Occupational Therapy (OT)</h3>
                    <p>Helping children develop fine motor skills, sensory processing, and daily living skills for increased independence.</p>
                    <ul class="check-list">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Sensory integration</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Fine motor development</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Self-care skills</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> School readiness</li>
                    </ul>
                    <p><a href="https://www.aota.org/about/what-is-ot" target="_blank" rel="noopener noreferrer">Learn More About OT →</a></p>
                </div>
            </div>
            <div class="spec__list" style="margin-top:1.5rem">
                <li style="list-style:none"><a href="/#hero">Insurance Accepted</a></li>
                <li style="list-style:none"><a href="/therapists">Licensed Therapists</a></li>
                <li style="list-style:none"><a href="/autism-evaluation">Evidence-Based</a></li>
            </div>
        </div>
    </section>

    <!-- Location -->
    <section class="section" id="locations" aria-label="Therapy Center Location">
        <div class="shell">
            <div class="section__head section-title reveal">
                <p class="eyebrow">Visit Us</p>
                <h2>Autism Therapy Center in Dearborn, MI</h2>
                <p>Conveniently located to serve Dearborn and surrounding communities.</p>
            </div>
            <div class="grid-2">
                <div class="panel">
                    <h3>Healing Therapy Center — Dearborn</h3>
                    <p>835 Mason St STE D160<br>Dearborn, MI 48124</p>
                    <p><a href="tel:313-654-1915">313-654-1915</a></p>
                    <p>Services: ABA, Speech, OT, Social Groups</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Serving Families Throughout Southeast Michigan</h3>
                    <p>We proudly serve families in <strong>Dearborn</strong>, Detroit, Livonia, Westland, Taylor, Lincoln Park, and surrounding communities. Our therapists understand the unique needs of our local community and work with area schools, pediatricians, and support organizations.</p>
                    <h3>Why Choose Local Therapy?</h3>
                    <ul class="check-list">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Familiar with local school districts and IEP processes</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Connected with community resources and support groups</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Convenient Dearborn location with easy parking</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Home-based services available in your neighborhood</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section section--white" id="faq" aria-label="Frequently Asked Questions">
        <div class="shell">
            <div class="section__head section-title reveal">
                <p class="eyebrow">Questions</p>
                <h2>Frequently Asked Questions About Autism Spectrum Disorder (ASD)</h2>
            </div>
            <div class="faq-list" style="max-width:760px">
                <div class="faq-item">
                    <h3>What are the early signs of autism in toddlers?</h3>
                    <p>Early signs of autism in toddlers include limited eye contact, not responding to their name by 12 months, not pointing to show interest by 14 months, lack of pretend play by 18 months, and repetitive behaviors. Our screening tool can help identify these signs.</p>
                </div>
                <div class="faq-item">
                    <h3>At what age should my child be screened for autism?</h3>
                    <p>The American Academy of Pediatrics recommends autism screening at 18 and 24 months. However, if you have concerns at any age, don't wait. Early intervention is key to better outcomes.</p>
                </div>
                <div class="faq-item">
                    <h3>Does insurance cover autism therapy?</h3>
                    <p>Most major insurance plans cover autism therapy services like ABA, speech, and occupational therapy. Our billing team will verify your coverage and help maximize your benefits.</p>
                </div>
                <div class="faq-item">
                    <h3>How many hours of ABA therapy does my child need?</h3>
                    <p>The number of ABA therapy hours varies based on individual needs, typically ranging from 10-40 hours per week. Our BCBA will assess your child and recommend an appropriate treatment plan.</p>
                </div>
                <div class="faq-item">
                    <h3>What's the difference between speech therapy and ABA for communication?</h3>
                    <p>Speech therapy focuses on language development, articulation, and communication skills. ABA addresses the behavioral aspects of communication and teaches functional communication. Many children benefit from both therapies working together.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources -->
    <section class="section" id="resources" aria-label="Autism Resources">
        <div class="shell">
            <div class="section__head section-title reveal">
                <p class="eyebrow">Resources</p>
                <h2>Comprehensive Autism Resources &amp; Information</h2>
            </div>
            <div class="grid-3">
                <div class="panel">
                    <h3>Early Signs &amp; Red Flags</h3>
                    <p>Recognize autism symptoms by age: lack of eye contact, delayed speech, repetitive behaviors, sensory sensitivities.</p>
                    <p><a href="/autism-signs">Read Complete Guide →</a></p>
                </div>
                <div class="panel">
                    <h3>Evidence-Based Therapies</h3>
                    <p>Compare ABA, DIR/Floortime, TEACCH, and other proven autism interventions. Find what works for your child.</p>
                    <p><a href="/is-autism-curable">Explore Therapies →</a></p>
                </div>
                <div class="panel">
                    <h3>IEP &amp; School Support</h3>
                    <p>Navigate special education: IEP vs 504 plans, advocacy tips, classroom accommodations, and your rights.</p>
                    <p><a href="/#contact">School Resources →</a></p>
                </div>
                <div class="panel">
                    <h3>Family &amp; Sibling Support</h3>
                    <p>Resources for parents, siblings, and caregivers. Support groups, respite care, and family therapy options.</p>
                    <p><a href="/parenting-child">Family Resources →</a></p>
                </div>
                <div class="panel">
                    <h3>Sensory Processing Help</h3>
                    <p>Sensory diets, calming strategies, weighted blankets, noise reduction, and creating sensory-friendly spaces.</p>
                    <p><a href="/parenting-child">Sensory Tools →</a></p>
                </div>
                <div class="panel">
                    <h3>Social Skills Development</h3>
                    <p>Social stories, peer interaction strategies, friendship skills, and social groups for different ages.</p>
                    <p><a href="/autism-signs">Social Resources →</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Milestones -->
    <section class="section section--white" id="milestones" aria-label="Developmental Milestones">
        <div class="shell">
            <div class="section__head section-title reveal">
                <p class="eyebrow">Track Progress</p>
                <h2>Developmental Milestones Tracker by Age</h2>
                <p>Track your child's progress and identify areas that may need support. <strong>Remember: Every child develops at their own pace.</strong></p>
            </div>
            <div class="milestones">
                <div class="milestone-group">
                    <h3>6-12 Months: Early Social Communication</h3>
                    <label class="milestone-check"><input type="checkbox"><span>Responds to name when called</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Makes eye contact during interactions</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Smiles socially at familiar people</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Babbles with consonant sounds (ba, da, ga)</span></label>
                </div>
                <div class="milestone-group">
                    <h3>12-24 Months: Communication &amp; Play</h3>
                    <label class="milestone-check"><input type="checkbox"><span>Points to show interest or request</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Says first words (mama, dada, + others)</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Shows toys to share interest</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Follows simple one-step directions</span></label>
                </div>
                <div class="milestone-group">
                    <h3>2-3 Years: Language &amp; Social Skills</h3>
                    <label class="milestone-check"><input type="checkbox"><span>Uses 2-4 word phrases</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Engages in pretend play</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Shows interest in other children</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Names familiar objects and people</span></label>
                </div>
                <div class="milestone-group">
                    <h3>3-4 Years: Complex Communication</h3>
                    <label class="milestone-check"><input type="checkbox"><span>Tells simple stories</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Plays cooperatively with peers</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Understands "mine" and "theirs"</span></label>
                    <label class="milestone-check"><input type="checkbox"><span>Shows a range of emotions</span></label>
                </div>
            </div>
            <div class="callout callout--info">
                <p><strong>Concerned about missed milestones?</strong> Our developmental specialists can provide comprehensive evaluation and early intervention services. <a href="tel:313-654-1915">Call (313) 654-1915</a> or <a href="/appointment">schedule online</a>.</p>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
<script src="/v2/assets/js/screening.js" defer></script>
</body>
</html>
