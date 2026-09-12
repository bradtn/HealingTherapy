<?php
// Page-specific variables — verbatim from production
$page_title = 'Physician Burnout Therapy Michigan | Doctor Mental Health';
$page_description = 'Confidential therapy for Michigan physicians and healthcare providers facing burnout, compassion fatigue, and moral injury. Insurance accepted.';
$canonical_url = 'https://www.healingtherapycenter.com/physician-burnout-therapy-michigan';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Physician Burnout Therapy in Michigan',
    'description' => 'Confidential mental health support for Michigan physicians, nurses, and healthcare providers experiencing burnout, compassion fatigue, moral injury, and secondary traumatic stress. Telehealth available statewide.',
    'url' => 'https://www.healingtherapycenter.com/physician-burnout-therapy-michigan',
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
], JSON_UNESCAPED_SLASHES);
$current_service = 'individual';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Specialized Care';
    $hero_h1 = 'Therapy for Michigan Physicians, Doctors, and Healthcare Providers';
    $hero_lead = "Healing Therapy Center provides confidential mental health support for Michigan physicians, doctors, nurses, and healthcare providers experiencing burnout, compassion fatigue, and work-related stress. Our licensed therapists understand the unique challenges facing healthcare professionals in Metro Detroit's medical community.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Whether you're practicing at Henry Ford Health, Beaumont, Corewell Health, University of Michigan Health, or in private practice, we provide specialized therapy to help you manage the emotional toll of healthcare work while maintaining your clinical excellence. Convenient telehealth sessions ensure complete privacy and fit your demanding schedule.</p>

                <div class="callout">
                    <h3>Confidential Support for Healthcare Professionals</h3>
                    <ul>
                        <li><strong>Complete Privacy:</strong> HIPAA-compliant care, separate from your employer</li>
                        <li><strong>Flexible Scheduling:</strong> Sessions before/after shifts, weekends available</li>
                        <li><strong>Insurance Accepted:</strong> Aetna, Blue Cross, Priority Health, United Healthcare</li>
                        <li><strong>Licensed Professionals:</strong> PhD psychologist who understands healthcare culture</li>
                    </ul>
                    <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a></strong> for a confidential consultation.</p>
                </div>

                <h2>Physician Burnout &amp; Healthcare Worker Mental Health Issues</h2>

                <p>Michigan healthcare providers face unique psychological challenges:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Physician Burnout</h3>
                        <p>Emotional exhaustion, depersonalization, and reduced sense of accomplishment despite long hours. Address the three dimensions of burnout before it impacts patient care.</p>
                    </div>
                    <div class="panel">
                        <h3>Compassion Fatigue</h3>
                        <p>Emotional depletion from constant exposure to patient suffering. Restore your capacity for empathy while protecting your emotional wellbeing.</p>
                    </div>
                    <div class="panel">
                        <h3>Moral Injury</h3>
                        <p>Psychological distress from healthcare system constraints that prevent optimal patient care. Process the grief of being unable to practice medicine as you were trained.</p>
                    </div>
                    <div class="panel">
                        <h3>Secondary Traumatic Stress</h3>
                        <p>Trauma symptoms from repeated exposure to patient trauma, death, and suffering. Learn to process vicarious trauma without leaving medicine.</p>
                    </div>
                </div>

                <h2>Common Mental Health Concerns for Healthcare Professionals</h2>

                <ul>
                    <li><strong>Chronic Work Stress</strong> - Long shifts, EMR burden, administrative demands, insurance battles</li>
                    <li><strong>Anxiety &amp; Depression</strong> - Higher rates among physicians than general population</li>
                    <li><strong>Sleep Problems</strong> - Shift work disorder, insomnia, difficulty decompressing after call</li>
                    <li><strong>Substance Use Concerns</strong> - Self-medication with alcohol or other substances to manage stress</li>
                    <li><strong>Relationship Strain</strong> - Marriage problems, family conflict due to work demands and emotional exhaustion</li>
                    <li><strong>Suicidal Ideation</strong> - Physicians have higher suicide rates; we provide crisis support and ongoing care</li>
                    <li><strong>Medical Error Trauma</strong> - Processing guilt, shame, and fear after adverse patient outcomes</li>
                    <li><strong>Perfectionism &amp; Imposter Syndrome</strong> - Fear of making mistakes, feeling inadequate despite credentials</li>
                </ul>

                <h2>Our Approach to Physician Mental Health</h2>

                <p>We provide evidence-based therapy tailored to healthcare professionals:</p>

                <div class="panel">
                    <h3>Burnout Recovery &amp; Prevention</h3>
                    <p>Systematic approach to restoring energy, rebuilding empathy, and creating sustainable work practices.</p>

                    <h3>Trauma Processing for Secondary Trauma</h3>
                    <p>Evidence-based trauma therapy for vicarious trauma and witnessing patient suffering.</p>

                    <h3>Stress Management &amp; Self-Care</h3>
                    <p>Practical strategies that fit into physicians' schedules - not "bubble baths and yoga."</p>

                    <h3>Work-Life Integration</h3>
                    <p>Create boundaries to protect family time and personal wellness without leaving medicine.</p>
                </div>

                <h2>Why Michigan Healthcare Professionals Choose Us</h2>

                <ul>
                    <li><strong>Understanding of Medical Culture:</strong> We know what "q4h call" and "death by EMR" mean</li>
                    <li><strong>Complete Confidentiality:</strong> Therapy is separate from your employer and medical board</li>
                    <li><strong>Flexible Telehealth:</strong> Attend from home before/after shifts - no waiting rooms</li>
                    <li><strong>Shift-Worker Friendly:</strong> Evening, early morning, and weekend appointments available</li>
                    <li><strong>Licensed PhD Psychologist:</strong> Doctoral-level care for healthcare providers</li>
                    <li><strong>Insurance Accepted:</strong> Most physician health plans accepted (Aetna, BCBS, Priority Health, UHC)</li>
                    <li><strong>Crisis Support Available:</strong> We provide support for suicidal ideation and acute distress</li>
                </ul>

                <h2>Who We Serve</h2>

                <p>We provide therapy for Michigan healthcare professionals including:</p>

                <ul>
                    <li><strong>Physicians (MD/DO)</strong> - All specialties: primary care, emergency medicine, surgery, hospitalists, psychiatry</li>
                    <li><strong>Advanced Practice Providers</strong> - Nurse practitioners, physician assistants</li>
                    <li><strong>Registered Nurses</strong> - ICU, ER, med-surg, home health, operating room nurses</li>
                    <li><strong>Residents &amp; Fellows</strong> - Training program stress, imposter syndrome, work-hour concerns</li>
                    <li><strong>Healthcare Administrators</strong> - Medical directors, chief medical officers, hospital administrators</li>
                </ul>

                <h2>Insurance &amp; Payment for Healthcare Professionals</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Insurance Plans Accepted</h3>
                        <ul>
                            <li>Aetna (common for physicians)</li>
                            <li>Blue Cross Blue Shield Michigan</li>
                            <li>Priority Health</li>
                            <li>United Healthcare</li>
                            <li>Blue Care Network</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Self-Pay Option</h3>
                        <p>Some physicians prefer self-pay for maximum privacy, ensuring therapy never appears on insurance claims. Call for confidential pricing.</p>
                    </div>
                </div>

                <h2>Telehealth - Perfect for Physicians</h2>

                <p>Most healthcare professionals prefer telehealth therapy:</p>

                <ul>
                    <li><strong>No Commute:</strong> Attend from home before/after shifts or between clinic sessions</li>
                    <li><strong>Maximum Privacy:</strong> No risk of running into patients or colleagues in a waiting room</li>
                    <li><strong>Shift-Flexible:</strong> Schedule sessions around your unpredictable call schedule</li>
                    <li><strong>Secure Platform:</strong> HIPAA-compliant video ensures confidentiality</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Confidential Support for Healthcare Providers</h3>
                    <p><strong>Call (313) 654-1915 for a confidential consultation</strong></p>
                    <p>You take care of patients. Let us take care of you.</p>
                    <p><strong>Telehealth available throughout Michigan</strong> | Insurance accepted or self-pay for privacy</p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request a Confidential Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/burnout-stress-therapy-michigan">Burnout &amp; Stress Therapy</a></li>
                        <li><a href="/trauma-ptsd-treatment">Trauma &amp; PTSD Treatment</a></li>
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
