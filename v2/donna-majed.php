<?php
// Page-specific variables — verbatim from production
$page_title = 'Donna Majed, TLLP | Therapist | Healing Therapy Center';
$page_description = 'Donna Majed, TLLP - Therapist in Dearborn, MI. Specializing in women\'s mental health, anxiety, OCD, depression, postpartum, and trauma.';
$canonical_url = 'https://www.healingtherapycenter.com/donna-majed';
$og_image = 'https://www.healingtherapycenter.com/assets/img/donna.jpg';

require_once dirname(__DIR__) . '/includes/config.php';

// Person Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    'name' => 'Donna Majed',
    'jobTitle' => 'Temporary Limited Licensed Psychologist (TLLP)',
    'url' => 'https://www.healingtherapycenter.com/donna-majed',
    'image' => 'https://www.healingtherapycenter.com/assets/img/donna.jpg',
    'worksFor' => [
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
    ],
    'knowsAbout' => [
        "Women's Mental Health",
        'Anxiety',
        'OCD',
        'Depression',
        'Postpartum & Perinatal Mental Health',
        'Trauma & Domestic Violence Recovery',
        'Marriage & Relationship Stress',
        'Cognitive Behavioral Therapy (CBT)',
        'Dialectical Behavior Therapy (DBT)'
    ]
], JSON_UNESCAPED_SLASHES);

// ── Therapist-profile template data ─────────────────────────────────
$tp_name  = 'Donna Majed';
$tp_creds = 'TLLP';
$tp_role  = 'Licensed Therapist';
$tp_intro = 'There comes a moment when the pressure to hold everything together becomes too heavy, when your smile masks exhaustion, and strength feels more like survival than ease. In those moments, you don&rsquo;t have to carry it all alone anymore.';

$tp_photo      = '/assets/img/donna.jpg';
$tp_photo_alt  = 'Donna Majed TLLP therapist';
$tp_first_name = 'Donna';

$tp_quick_info = [
    ['icon' => 'licensed',   'label' => 'MA, TLLP'],
    ['icon' => 'community',  'label' => 'Individual &amp; Group Therapy'],
    ['icon' => 'inperson',   'label' => 'In-Person Care', 'sub' => 'Dearborn, Michigan'],
    ['icon' => 'telehealth', 'label' => 'Telehealth',     'sub' => 'Across Michigan'],
];

$tp_sections = [
    [
        'title' => 'How I Can Help',
        'html'  => <<<'HTML'
<p>I specialize in supporting girls and women through the many stages and transitions of life. My areas of focus include anxiety, OCD, depression, postpartum and perinatal mental health, trauma, marriage and relationship stress, and domestic violence recovery. I offer both individual and group therapy, creating spaces where you can feel seen, supported, and strengthened; whether one-on-one or alongside other women walking similar paths.</p>
<div class="callout callout--soft"><p>Therapy is not about becoming someone new; it&rsquo;s about coming home to yourself! You are not broken; you are emerging, growing, and evolving. Every chapter of your story matters, and I would be honored to walk beside you as you write the next one.</p></div>
HTML,
    ],
    [
        'title' => 'My Approach',
        'html'  => <<<'HTML'
<p>Therapy is not about fixing you; it&rsquo;s about gently reconnecting with the parts of yourself that may have been quieted, stretched thin, or forgotten along the way. I believe healing happens through a collaborative and compassionate process rooted in genuine connection, curiosity, and empowerment. Together, we will explore your story, deepen your self-understanding, and build meaningful tools that support clarity, confidence, and emotional steadiness in your life.</p>
<p>In therapy, I draw from evidence-based approaches including Cognitive Behavioral Therapy (CBT), Dialectical Behavior Therapy (DBT), Psychodynamic Therapy, and Humanistic (Person-Centered) Therapy. My work is tailored to honor your unique experiences, needs, and strengths, meeting you where YOU are with warmth and intention!</p>
HTML,
        'cards' => [
            ['icon' => 'thought', 'title' => 'Cognitive Behavioral Therapy (CBT)', 'text' => 'Practical tools to shift unhelpful thoughts and patterns.'],
            ['icon' => 'compass', 'title' => 'Dialectical Behavior Therapy (DBT)', 'text' => 'Skills for emotional balance and steadiness.'],
            ['icon' => 'growth',  'title' => 'Psychodynamic Therapy', 'text' => 'Understanding how your story shapes the present.'],
            ['icon' => 'care',    'title' => 'Humanistic (Person-Centered)', 'text' => 'Warm, tailored care that honors who you are.'],
        ],
    ],
];

$tp_specialties = [
    "Women's Mental Health",
    'Anxiety &amp; OCD',
    'Depression',
    'Postpartum &amp; Perinatal Mental Health',
    'Trauma &amp; Domestic Violence Recovery',
    'Marriage &amp; Relationship Stress',
];

$tp_credentials = [
    [
        'title' => 'Credentials &amp; Training',
        'items' => [
            'TLLP - Temporary Limited Licensed Psychologist',
            'Trained in CBT, DBT &amp; Psychodynamic Therapy',
            'Humanistic (Person-Centered) Therapy',
            'Trauma-Informed Care',
        ],
    ],
];

$tp_cta_copy = 'If you are a woman navigating life\'s challenges and seeking compassionate, empowering support, Donna is here to walk alongside you. She offers both individual and group therapy in a safe, supportive environment. Contact us today to schedule your consultation.';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">
<?php include __DIR__ . '/includes/therapist-profile.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
