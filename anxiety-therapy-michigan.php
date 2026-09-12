<?php
// Page-specific variables
$page_title = 'Anxiety Therapy in Michigan | Telehealth & Dearborn';
$page_description = 'Anxiety therapy in Michigan for panic attacks, GAD, social anxiety & phobias. CBT with licensed therapists in Dearborn or telehealth. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/anxiety-therapy-michigan';

// Service + FAQPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Anxiety Therapy in Michigan',
            'serviceType' => 'Anxiety Therapy',
            'description' => 'Evidence-based anxiety therapy for panic disorder, generalized anxiety, social anxiety, phobias, health anxiety, and agoraphobia. CBT, exposure therapy, ACT, and mindfulness-based treatment via secure telehealth throughout Michigan or in-person in Dearborn.',
            'url' => 'https://www.healingtherapycenter.com/anxiety-therapy-michigan',
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
                    'name' => 'Can anxiety be cured or just managed?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'While you may always have some tendency toward anxiety, therapy teaches you skills to manage it effectively so it no longer controls your life. Many people achieve full remission of anxiety disorders with proper treatment.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do I need medication or can therapy alone help?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many people successfully treat anxiety with therapy alone. Some benefit from combining therapy with medication, especially for severe anxiety. We can discuss both options and help you make informed decisions.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How long does anxiety therapy take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most people see significant improvement in 12-16 weekly CBT sessions. Some need more time, especially for complex anxiety or multiple anxiety disorders. The skills you learn in therapy continue helping long after treatment ends.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if I\'m too anxious to attend therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'This is very common. Telehealth therapy from home can feel less intimidating than in-person sessions. We also start slowly, building safety and trust before addressing more challenging work.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does insurance cover anxiety treatment in Michigan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most Michigan insurance plans cover anxiety treatment when provided by licensed therapists. We accept Blue Cross Blue Shield, Aetna, Priority Health, McLaren, and HAP. Call (313) 654-1915 to verify your coverage.'
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
    $hero_h1 = 'Anxiety Therapy &amp; Panic Disorder Treatment in Michigan';
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Do you struggle with constant worry, panic attacks, or overwhelming fear that interferes with your daily life? Does anxiety prevent you from doing things you want to do - socializing, traveling, working, or even leaving your home? At Healing Therapy Center, our licensed anxiety specialists provide evidence-based anxiety therapy throughout Michigan via secure telehealth or in-person at our Dearborn office.</p>

                <p>Anxiety disorders are the most common mental health condition in the United States, affecting over 40 million adults. The good news? Anxiety is highly treatable. With the right therapy approach, most people experience significant improvement in their anxiety symptoms and quality of life.</p>

                <div class="callout callout--info">
                    <h3>Good News About Anxiety Treatment</h3>
                    <p>Anxiety disorders are among the most treatable mental health conditions. With evidence-based therapy like CBT and exposure therapy, 60-80% of people experience significant improvement, often within 12-16 sessions. For anxiety related to past trauma, we also offer <a href="/trauma-ptsd-treatment">EMDR therapy</a>. Learn more about our <a href="/individual-therapy">individual therapy services</a>.</p>
                </div>

                <h2>Types of Anxiety Disorders We Treat</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Generalized Anxiety Disorder (GAD)</h3>
                        <p>Chronic, excessive worry about everyday things - health, money, family, work - even when there's little reason for concern. Physical symptoms include restlessness, fatigue, difficulty concentrating, muscle tension, and sleep problems.</p>
                    </div>
                    <div class="panel">
                        <h3>Panic Disorder &amp; Panic Attacks</h3>
                        <p>Unexpected, intense episodes of fear with physical symptoms like racing heart, sweating, trembling, shortness of breath, chest pain, nausea, and fear of dying or losing control. Many people develop fear of future panic attacks (anticipatory anxiety) and avoid situations where they've occurred.</p>
                    </div>
                    <div class="panel">
                        <h3>Social Anxiety Disorder</h3>
                        <p>Intense fear of social situations where you might be judged, embarrassed, or humiliated. This goes beyond shyness - it's debilitating fear that interferes with work, school, relationships, and daily activities. Common fears include public speaking, eating in front of others, meeting new people, or being the center of attention.</p>
                    </div>
                    <div class="panel">
                        <h3>Specific Phobias</h3>
                        <p>Intense, irrational fear of specific objects or situations: flying, heights, animals, needles, blood, enclosed spaces, etc. The fear is disproportionate to actual danger and causes significant avoidance or distress.</p>
                    </div>
                    <div class="panel">
                        <h3>Health Anxiety (Illness Anxiety Disorder)</h3>
                        <p>Excessive worry about having or developing a serious illness despite medical reassurance. Constantly checking for symptoms, seeking medical tests, or avoiding medical care entirely due to fear of bad news.</p>
                    </div>
                    <div class="panel">
                        <h3>Agoraphobia</h3>
                        <p>Fear of situations where escape might be difficult or help unavailable if panic symptoms occur - public transportation, open spaces, enclosed spaces, crowds, or being outside the home alone. Can lead to severe limitations in daily activities.</p>
                    </div>
                </div>

                <h2>Evidence-Based Anxiety Treatments We Use</h2>

                <div class="callout callout--soft">
                    <h3>Cognitive Behavioral Therapy (CBT)</h3>
                    <p>CBT is the gold-standard treatment for anxiety disorders, supported by decades of research. It helps you identify and change thought patterns and behaviors that maintain anxiety. You'll learn to challenge catastrophic thinking, test feared predictions, and develop healthier coping strategies. Most people see significant improvement in 12-16 sessions.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Exposure Therapy</h3>
                    <p>A specific type of CBT where you gradually, systematically face feared situations in a safe, controlled way. By confronting fears rather than avoiding them, you learn that anxiety decreases on its own and that feared outcomes rarely occur. Highly effective for phobias, panic disorder, social anxiety, and OCD.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Acceptance &amp; Commitment Therapy (ACT)</h3>
                    <p>Instead of fighting anxiety, ACT teaches psychological flexibility - accepting anxious thoughts and feelings while taking action aligned with your values. You learn that trying to eliminate anxiety often makes it worse, while acceptance and mindful awareness reduce its power.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Mindfulness-Based Stress Reduction (MBSR)</h3>
                    <p>Mindfulness practices help you observe anxious thoughts without judgment, stay present rather than worrying about the future, and respond to anxiety with awareness rather than reactivity. Research shows mindfulness significantly reduces anxiety symptoms.</p>
                </div>

                <div class="callout callout--info">
                    <h2>Signs You Should Seek Anxiety Therapy</h2>
                    <ul>
                        <li>Worry or fear that feels excessive or uncontrollable</li>
                        <li>Physical symptoms: racing heart, sweating, trembling, stomach problems, headaches</li>
                        <li>Avoiding situations due to anxiety</li>
                        <li>Panic attacks or fear of panic attacks</li>
                        <li>Difficulty sleeping due to worry or racing thoughts</li>
                        <li>Trouble concentrating or mind going blank</li>
                        <li>Irritability, muscle tension, or fatigue</li>
                        <li>Anxiety interfering with work, relationships, or daily activities</li>
                    </ul>
                </div>

                <h2>How Anxiety Therapy Works</h2>
                <p>In your first session, we'll discuss your anxiety symptoms, triggers, history, and goals. Together we'll develop a personalized treatment plan using approaches best suited to your specific anxiety type and needs.</p>

                <p>Therapy sessions typically involve learning about your anxiety (what maintains it, why avoidance makes it worse), identifying unhelpful thought patterns, developing coping skills, and gradually facing feared situations through exposure exercises. You'll practice skills between sessions and track progress.</p>

                <p>Most people attend weekly 50-minute sessions for 12-20 weeks, though this varies based on severity and individual needs. Many notice improvement within the first few sessions.</p>

                <h2>Telehealth Anxiety Therapy Throughout Michigan</h2>
                <p>All our anxiety therapy services are available via secure, HIPAA-compliant telehealth to clients anywhere in Michigan. Research shows telehealth therapy is equally effective as in-person for treating anxiety disorders. Many clients prefer the convenience and comfort of therapy from home.</p>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Can anxiety be cured or just managed?</h3>
                        <p>While you may always have some tendency toward anxiety, therapy teaches you skills to manage it effectively so it no longer controls your life. Many people achieve full remission of anxiety disorders with proper treatment.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do I need medication or can therapy alone help?</h3>
                        <p>Many people successfully treat anxiety with therapy alone. Some benefit from combining therapy with medication, especially for severe anxiety. We can discuss both options and help you make informed decisions.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How long does anxiety therapy take?</h3>
                        <p>Most people see significant improvement in 12-16 weekly CBT sessions. Some need more time, especially for complex anxiety or multiple anxiety disorders. The skills you learn in therapy continue helping long after treatment ends.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if I'm too anxious to attend therapy?</h3>
                        <p>This is very common. Telehealth therapy from home can feel less intimidating than in-person sessions. We also start slowly, building safety and trust before addressing more challenging work.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance cover anxiety treatment in Michigan?</h3>
                        <p>Most Michigan insurance plans cover anxiety treatment when provided by licensed therapists. We accept Blue Cross Blue Shield, Aetna, Priority Health, McLaren, and HAP. Call (313) 654-1915 to verify your coverage.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Start Anxiety Therapy Today</h3>
                    <p><span style="white-space:nowrap"><strong>Call:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></span></p>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p>Telehealth available throughout Michigan. <a href="/appointment">Request an appointment online</a></p>
                </div>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
