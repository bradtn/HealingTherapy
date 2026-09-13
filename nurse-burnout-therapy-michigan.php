<?php
// Page-specific variables
$page_title = 'Nurse Burnout Therapy in Michigan | Compassion Fatigue';
$page_description = 'Confidential therapy for Michigan nurses & healthcare staff facing burnout, compassion fatigue & moral injury. CBT, ACT & shift-friendly telehealth. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/nurse-burnout-therapy-michigan';

// Service + FAQPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Nurse Burnout Therapy in Michigan',
            'serviceType' => 'Nurse Burnout & Compassion Fatigue Therapy',
            'description' => 'Confidential therapy for Michigan nurses and clinical staff experiencing burnout, compassion fatigue, moral injury, emotional exhaustion, and workplace trauma. Burnout recovery, CBT, ACT, self-compassion, and stress management via secure telehealth throughout Michigan or in-person in Dearborn.',
            'url' => 'https://www.healingtherapycenter.com/nurse-burnout-therapy-michigan',
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
                    'name' => 'What\'s the difference between burnout and compassion fatigue?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Burnout is emotional exhaustion and cynicism that builds from chronic workplace stress, understaffing, and overload. Compassion fatigue is the specific depletion that comes from absorbing patients\' pain and suffering shift after shift. Many nurses experience both at once, and therapy addresses each directly.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Will my employer or nursing board know I\'m in therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'No. Your therapy is confidential and HIPAA-protected, completely separate from your employer, manager, and the Michigan Board of Nursing. Nothing is shared without your written consent. Some nurses choose self-pay for maximum privacy so therapy never appears on an insurance claim.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can I fit therapy around 12-hour shifts and nights?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. We offer early morning, evening, and weekend telehealth appointments built around 12-hour shifts, night rotations, and self-scheduling. You can attend secure sessions from home anywhere in Michigan - no commute and no using precious days off in a waiting room.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is moral injury the same as burnout?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'No. Moral injury is the distress of being unable to provide the care you know patients need because of staffing, system, or policy constraints - it\'s a wound to your values, not just fatigue. We help you process the guilt, anger, and grief of moral distress rather than just managing exhaustion.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does insurance cover therapy for nurses in Michigan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most Michigan commercial plans cover therapy with licensed therapists. We accept Blue Cross Blue Shield Michigan, Blue Care Network, Priority Health, Aetna, United Healthcare, HAP, and McLaren Health Plan, plus self-pay, HSA, and FSA. Call (313) 654-1915 to verify your coverage.'
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
    $hero_h1 = 'Nurse Burnout &amp; Compassion Fatigue Therapy in Michigan';
    $hero_lead = "Confidential therapy for Michigan nurses and clinical staff running on empty. Our licensed therapists understand burnout, compassion fatigue, moral injury, and the toll of short-staffed floors - and we build treatment around your shifts.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>You went into nursing to help people. Now you're running from room to room short-staffed, skipping lunch and bathroom breaks, and going home too wired to sleep and too drained to feel anything. If you're dreading every shift, crying in your car, or wondering whether you can keep doing this, you are not failing - you are burned out. At Healing Therapy Center, we provide confidential therapy for Michigan nurses and healthcare workers via secure telehealth statewide or in-person at our Dearborn office.</p>

                <p>Nurses carry an enormous emotional load, and the past several years have pushed many past their limit. Burnout, compassion fatigue, and moral distress are not personal weaknesses - they're predictable injuries from an overloaded system. They're also treatable. With the right support, most nurses recover their energy, their compassion, and their sense of self.</p>

                <div class="callout callout--info">
                    <h3>Care That Understands the Floor</h3>
                    <p>Your sessions are HIPAA-protected and completely separate from your employer, manager, and the nursing board - nothing is reported. We offer shift-friendly early morning, evening, and weekend appointments. Physicians and providers can also see our <a href="/physician-burnout-therapy-michigan">physician burnout therapy</a>, and we support all clinical staff through <a href="/individual-therapy">individual therapy</a>.</p>
                </div>

                <h2>What Nurses Bring Into Therapy</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Burnout &amp; Emotional Exhaustion</h3>
                        <p>The bone-deep depletion of chronic overload - dreading shifts, feeling cynical or detached, and having nothing left for anyone including yourself. Burnout has three faces: exhaustion, cynicism, and a shrinking sense of accomplishment. We address all three before they cost you the career.</p>
                    </div>
                    <div class="panel">
                        <h3>Compassion Fatigue</h3>
                        <p>You absorb patient suffering shift after shift until your capacity for empathy runs dry. Compassion fatigue can leave you feeling numb toward patients, guilty for feeling numb, and unable to switch caring back on at home. We help you restore that capacity without leaving nursing.</p>
                    </div>
                    <div class="panel">
                        <h3>Moral Injury &amp; Moral Distress</h3>
                        <p>Knowing exactly what your patients need and being unable to provide it because of staffing, time, or system constraints. Moral injury is a wound to your values - the anger, guilt, and grief of compromised care - and it needs more than a resilience webinar to heal.</p>
                    </div>
                    <div class="panel">
                        <h3>Shift Work &amp; Sleep Problems</h3>
                        <p>Twelve-hour shifts, night rotations, and flipping between days and nights wreck your sleep and your body. Poor sleep worsens mood, anxiety, and burnout. We treat shift-work sleep disruption, insomnia, and the exhaustion that never fully lifts on days off.</p>
                    </div>
                    <div class="panel">
                        <h3>Workplace Trauma</h3>
                        <p>Codes, deaths, patient violence, verbal abuse, and traumatic outcomes leave a mark. Repeated exposure can produce intrusive memories, hypervigilance, and secondary traumatic stress. We provide trauma-focused care for what you carry from the unit.</p>
                    </div>
                    <div class="panel">
                        <h3>Guilt &amp; Difficulty Detaching</h3>
                        <p>Replaying charting, second-guessing decisions, and feeling guilty for resting, calling off, or having needs of your own. You bring the floor home and can't put it down. We help you set boundaries and let go of the guilt that keeps you tethered to work.</p>
                    </div>
                </div>

                <h2>Evidence-Based Treatments We Use</h2>

                <div class="callout callout--soft">
                    <h3>Burnout Recovery &amp; Prevention</h3>
                    <p>A structured approach to restoring energy, rebuilding your sense of purpose, and creating sustainable work habits. We help you recognize your early warning signs, protect your recovery time, and make changes that stick - so you're not right back here in six months.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Cognitive Behavioral Therapy (CBT)</h3>
                    <p>CBT targets the thought patterns that fuel burnout - perfectionism, over-responsibility, and the belief that you should be able to do it all. You'll learn to challenge guilt-driven thinking, interrupt rumination about work, and respond to stress with skills instead of self-blame.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Acceptance &amp; Commitment Therapy (ACT)</h3>
                    <p>ACT helps you make peace with what you can't control on a broken shift while reconnecting to the values that brought you into nursing. Instead of fighting exhaustion or numbness, you build psychological flexibility and take meaningful action even in a hard system.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Self-Compassion &amp; Stress Management</h3>
                    <p>Nurses give endless compassion to patients and almost none to themselves. We teach self-compassion practices that quiet the inner critic, plus practical, realistic stress-management and nervous-system tools that fit a 12-hour shift - not "just do yoga."</p>
                </div>

                <div class="callout callout--info">
                    <h2>Signs It's Time to Reach Out</h2>
                    <ul>
                        <li>Dreading shifts, crying before or after work, or counting down to your next day off</li>
                        <li>Feeling emotionally numb, cynical, or detached from patients</li>
                        <li>Exhaustion that sleep and days off no longer fix</li>
                        <li>Guilt about calling off, resting, or setting any boundary</li>
                        <li>Trouble sleeping, or your mind racing about work at night</li>
                        <li>Anger, irritability, or a shorter fuse with family and coworkers</li>
                        <li>Intrusive memories of a code, death, or traumatic shift</li>
                        <li>Wondering if you should leave nursing altogether</li>
                    </ul>
                </div>

                <h2>The Pressure of Understaffing</h2>
                <p>Short staffing isn't a personal failing you can willpower your way through. When you're stretched across too many patients with too little support, the impossible math falls on your shoulders - and so does the guilt when something slips. Therapy won't fix your unit's ratios, but it can help you carry that pressure without letting it destroy your health, your relationships, or your sense of who you are.</p>

                <h2>Learning to Detach Without Feeling Guilty</h2>
                <p>Many nurses can't leave work at work. You replay charting, worry about patients on your drive home, and feel selfish for resting. That inability to detach keeps your stress hormones elevated around the clock and accelerates burnout. We help you build real psychological boundaries so time off actually restores you - and so caring for patients doesn't require sacrificing yourself.</p>

                <h2>Shift-Friendly Telehealth Throughout Michigan</h2>
                <p>All of our therapy for nurses is available via secure, HIPAA-compliant telehealth to clients anywhere in Michigan. Attend from home before or after a shift, on a day off, or between rotations - no commute, no waiting room, and no risk of running into a coworker or patient. We offer early morning, evening, and weekend appointments designed around 12-hour shifts and night schedules.</p>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>What's the difference between burnout and compassion fatigue?</h3>
                        <p>Burnout is emotional exhaustion and cynicism that builds from chronic workplace stress, understaffing, and overload. Compassion fatigue is the specific depletion that comes from absorbing patients' pain and suffering shift after shift. Many nurses experience both at once, and therapy addresses each directly.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Will my employer or nursing board know I'm in therapy?</h3>
                        <p>No. Your therapy is confidential and HIPAA-protected, completely separate from your employer, manager, and the Michigan Board of Nursing. Nothing is shared without your written consent. Some nurses choose self-pay for maximum privacy so therapy never appears on an insurance claim.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can I fit therapy around 12-hour shifts and nights?</h3>
                        <p>Yes. We offer early morning, evening, and weekend telehealth appointments built around 12-hour shifts, night rotations, and self-scheduling. You can attend secure sessions from home anywhere in Michigan - no commute and no using precious days off in a waiting room.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is moral injury the same as burnout?</h3>
                        <p>No. Moral injury is the distress of being unable to provide the care you know patients need because of staffing, system, or policy constraints - it's a wound to your values, not just fatigue. We help you process the guilt, anger, and grief of moral distress rather than just managing exhaustion.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance cover therapy for nurses in Michigan?</h3>
                        <p>Most Michigan commercial plans cover therapy with licensed therapists. We accept Blue Cross Blue Shield Michigan, Blue Care Network, Priority Health, Aetna, United Healthcare, HAP, and McLaren Health Plan, plus self-pay, HSA, and FSA. Call (313) 654-1915 to verify your coverage.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Confidential Support for Michigan Nurses</h3>
                    <p>You take care of everyone else. Let us take care of you.</p>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p>Shift-friendly telehealth available throughout Michigan. <a href="/appointment">Request an appointment online</a></p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/physician-burnout-therapy-michigan">Physician Burnout Therapy</a></li>
                        <li><a href="/trauma-ptsd-treatment">Trauma &amp; PTSD Treatment</a></li>
                        <li><a href="/anxiety-therapy-michigan">Anxiety Therapy in Michigan</a></li>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
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
