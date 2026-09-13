<?php
// Page-specific variables — verbatim from production
$page_title = 'Online Therapy in Michigan | Telehealth Counseling';
$page_description = 'Online therapy & telehealth counseling anywhere in Michigan. Licensed therapists for anxiety, depression, trauma & couples via secure video. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/telehealth-therapy';
$current_service = 'telehealth';

require_once __DIR__ . '/includes/config.php';

// Service + FAQPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Online Therapy & Telehealth Counseling in Michigan',
            'serviceType' => 'Online Therapy and Telehealth Counseling',
            'description' => 'Online therapy and telehealth counseling anywhere in Michigan. Licensed therapists provide secure video sessions for anxiety, depression, trauma, PTSD, couples counseling, stress, and burnout from the comfort and privacy of your own home.',
            'url' => 'https://www.healingtherapycenter.com/telehealth-therapy',
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
                    'name' => 'Is online therapy as effective as in-person therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. A large body of research shows that online (telehealth) therapy is as effective as in-person therapy for anxiety, depression, PTSD, and many other concerns. The relationship with your therapist and the evidence-based methods are the same — only the format changes.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does insurance cover online therapy in Michigan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most major Michigan commercial plans cover telehealth therapy at the same rate as in-person visits, including Blue Cross Blue Shield of Michigan, Blue Care Network, Aetna, Priority Health, United Healthcare, HAP, and McLaren. We also offer self-pay and accept HSA/FSA. Call (313) 654-1915 to verify your coverage.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What do I need for an online therapy session?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Just a smartphone, tablet, or computer with a camera and microphone, a stable internet connection, and a private, quiet space. We send a secure link before your appointment — no special software to install.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is online therapy private and secure?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. All sessions are held on a secure, HIPAA-compliant video platform. Your privacy and confidentiality are protected exactly as they would be in our Dearborn office.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What areas of Michigan do you serve with online therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Anywhere in the state. We provide online therapy to clients across Michigan — Metro Detroit, Ann Arbor, Lansing, Grand Rapids, Flint, Traverse City, the Upper Peninsula, and rural communities where in-person care is limited.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can I do couples therapy online?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. Couples can join the same video session together or from two different locations, which makes online couples therapy convenient for busy or long-distance partners.'
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
    $hero_h1 = 'Online Therapy &amp; Telehealth Counseling in Michigan';
    $hero_img = 'svc-hero-telehealth';
    $hero_img_alt = 'A telehealth therapy session on a laptop at home';
    include __DIR__ . '/includes/image-hero.php';
    ?>

    <section class="page">
        <div class="shell with-sidebar">
            <article class="prose">
                <h2>Online Therapy Anywhere in Michigan</h2>
                <p>Looking for online therapy in Michigan? At Healing Therapy Center, our licensed therapists provide secure telehealth counseling to clients across the entire state — so you can get quality mental health care from home, at work on a lunch break, or anywhere you have a private moment and an internet connection. Online therapy (also called virtual therapy or telehealth) removes the barriers of travel time, traffic, weather, and geography that keep so many Michiganders from getting help.</p>

                <p>Whether you're in Metro Detroit, Ann Arbor, Lansing, Grand Rapids, Flint, Traverse City, the Upper Peninsula, or a rural community where in-person therapists are scarce, you can work with the same experienced, Michigan-licensed clinicians who see clients in our Dearborn office.</p>

                <div class="callout callout--info">
                    <h3>Is Online Therapy as Effective as In-Person?</h3>
                    <p>Yes. A large and growing body of research shows telehealth therapy is <strong>as effective as in-person care</strong> for anxiety, depression, PTSD, and many other conditions. The therapeutic relationship and the evidence-based methods — CBT, EMDR, and more — are exactly the same. Only the format changes. Many clients actually find they open up more easily from the comfort of their own space.</p>
                </div>

                <h2>What We Treat With Online Therapy</h2>
                <p>Our telehealth services cover the full range of care we offer in person:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Anxiety &amp; Panic</h3>
                        <p>Evidence-based <a href="/anxiety-therapy-michigan">anxiety therapy</a> for generalized anxiety, panic attacks, social anxiety, and phobias — often easier to start from home.</p>
                    </div>
                    <div class="panel">
                        <h3>Depression</h3>
                        <p><a href="/depression-counseling-michigan">Depression counseling</a> and support for low mood, loss of motivation, and seasonal depression during Michigan's long winters.</p>
                    </div>
                    <div class="panel">
                        <h3>Trauma &amp; PTSD</h3>
                        <p><a href="/trauma-ptsd-treatment">Trauma and PTSD treatment</a>, including EMDR delivered securely over video.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples &amp; Marriage</h3>
                        <p><a href="/couples-therapy">Couples counseling</a> online — partners can join together or from two different locations.</p>
                    </div>
                    <div class="panel">
                        <h3>Stress &amp; Burnout</h3>
                        <p>Support for work stress, <a href="/executive-stress-therapy-michigan">executive burnout</a>, and life transitions that fit around a demanding schedule.</p>
                    </div>
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Personalized <a href="/individual-therapy">individual therapy</a> for grief, self-esteem, and everyday mental wellness.</p>
                    </div>
                </div>

                <h2>Why Michigan Clients Choose Online Therapy</h2>
                <ul>
                    <li><strong>No commute or traffic</strong> — reclaim the time you'd spend driving across Metro Detroit.</li>
                    <li><strong>Weather-proof</strong> — never cancel because of Michigan snow, ice, or storms.</li>
                    <li><strong>Statewide access</strong> — connect with our therapists from anywhere in Michigan, including rural areas with few local providers.</li>
                    <li><strong>Busy schedules</strong> — evening and weekend sessions you can attend from home or a private office.</li>
                    <li><strong>Mobility &amp; health</strong> — ideal if travel is difficult or you're managing a chronic condition.</li>
                    <li><strong>Privacy</strong> — no waiting room; sessions happen wherever you feel most comfortable.</li>
                </ul>

                <h2>Does Insurance Cover Online Therapy in Michigan?</h2>
                <p>In most cases, yes. Michigan's major commercial insurers cover telehealth therapy at the same rate as in-person visits — including Blue Cross Blue Shield of Michigan, Blue Care Network, Aetna, Priority Health, United Healthcare, HAP, and McLaren. We also offer self-pay and accept HSA/FSA cards. <a href="/insurance">See all accepted insurance plans</a>, or call <a href="tel:313-654-1915">(313) 654-1915</a> and we'll verify your telehealth benefits before your first session.</p>

                <h2>How to Get Started</h2>
                <p>Starting online therapy is simple: <a href="/appointment">request an appointment</a> or call us, we match you with the right Michigan-licensed therapist, and we send a secure link before your session. There's no software to install — you just click to join.</p>

                <div class="callout callout--info">
                    <h3>What You'll Need</h3>
                    <p>A device with a camera and microphone (smartphone, tablet, or computer)</p>
                    <p>A stable internet connection</p>
                    <p>A private, quiet space without interruptions</p>
                </div>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Is online therapy as effective as in-person therapy?</h3>
                        <p>Yes. A large body of research shows that online (telehealth) therapy is as effective as in-person therapy for anxiety, depression, PTSD, and many other concerns. The relationship with your therapist and the evidence-based methods are the same — only the format changes.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance cover online therapy in Michigan?</h3>
                        <p>Most major Michigan commercial plans cover telehealth therapy at the same rate as in-person visits, including Blue Cross Blue Shield of Michigan, Blue Care Network, Aetna, Priority Health, United Healthcare, HAP, and McLaren. We also offer self-pay and accept HSA/FSA. Call (313) 654-1915 to verify your coverage.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What do I need for an online therapy session?</h3>
                        <p>Just a smartphone, tablet, or computer with a camera and microphone, a stable internet connection, and a private, quiet space. We send a secure link before your appointment — no special software to install.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is online therapy private and secure?</h3>
                        <p>Yes. All sessions are held on a secure, HIPAA-compliant video platform. Your privacy and confidentiality are protected exactly as they would be in our Dearborn office.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What areas of Michigan do you serve with online therapy?</h3>
                        <p>Anywhere in the state. We provide online therapy to clients across Michigan — Metro Detroit, Ann Arbor, Lansing, Grand Rapids, Flint, Traverse City, the Upper Peninsula, and rural communities where in-person care is limited.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can I do couples therapy online?</h3>
                        <p>Yes. Couples can join the same video session together or from two different locations, which makes online couples therapy convenient for busy or long-distance partners.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Start Telehealth Therapy Today</h3>
                    <p>Ready to begin online therapy?</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>
            </article>

            <?php include __DIR__ . '/includes/sidebar-services.php'; ?>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
