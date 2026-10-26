<?php
// Page-specific variables
$page_title = 'Kalee LaPointe, TLLP | Therapist | Healing Therapy Center';
$page_description = 'Kalee LaPointe, TLLP - Therapist in Dearborn, MI, for individuals and couples. Anxiety, depression, ADHD and autism support, life transitions and relationships.';
$canonical_url = 'https://www.healingtherapycenter.com/kalee-lapointe';
$og_image = 'https://www.healingtherapycenter.com/assets/img/kalee.jpg';

require_once __DIR__ . '/includes/config.php';

// Person Schema
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    'name' => 'Kalee LaPointe',
    'jobTitle' => 'Temporary Limited Licensed Psychologist (TLLP)',
    'url' => 'https://www.healingtherapycenter.com/kalee-lapointe',
    'image' => 'https://www.healingtherapycenter.com/assets/img/kalee.jpg',
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
        'Anxiety',
        'Depression',
        'Self-Esteem',
        'Life Transitions',
        'ADHD & Autism Support',
        'Marriage & Relationship Stress',
        'Chronic Health Issues',
        'Acceptance and Commitment Therapy (ACT)',
        'Cognitive Behavioral Therapy (CBT)',
        'Gottman Method',
        'Trauma-Informed Care'
    ]
], JSON_UNESCAPED_SLASHES);

// ── Therapist-profile template data ─────────────────────────────────
$tp_name  = 'Kalee LaPointe';
$tp_creds = 'TLLP';
$tp_role  = 'Licensed Therapist';
$tp_intro = 'Life can often feel overwhelming; you don&rsquo;t have to walk through it alone.';

$tp_photo      = '/assets/img/kalee.jpg';
$tp_photo_alt  = 'Kalee LaPointe TLLP therapist';
$tp_first_name = 'Kalee';

$tp_quick_info = [
    ['icon' => 'licensed',   'label' => 'MA, TLLP'],
    ['icon' => 'community',  'label' => 'Individual &amp; Couples Therapy'],
    ['icon' => 'inperson',   'label' => 'In-Person Care', 'sub' => 'Dearborn, Michigan'],
    ['icon' => 'telehealth', 'label' => 'Telehealth',     'sub' => 'Across Michigan'],
];

$tp_sections = [
    [
        'title' => 'How I Can Help',
        'html'  => <<<'HTML'
<p>Hi, my name is Kalee, and I&rsquo;m so glad you&rsquo;re here!</p>
<p>I specialize in supporting individuals as well as couples through life&rsquo;s complex chapters, creating a safe and welcoming space where you feel seen and valued just as you are.</p>
HTML,
    ],
    [
        'title' => 'My Approach',
        'html'  => <<<'HTML'
<p>I view the therapy room as a collaborative space centered on genuine connection, curiosity, and warmth. I find the human brain and our unique ways of adapting to life&rsquo;s experiences endlessly fascinating, and I would be honored to hold space for the unique story you bring to the room.</p>
<p>My work is deeply rooted in humanistic, person-centered principles and trauma-informed care. I primarily utilize Acceptance and Commitment Therapy (ACT) combined with Cognitive Behavioral Therapy (CBT) and Gottman Method techniques for relationship work. I bridge evidence-based care with heartfelt empathy. Together, we will focus on what truly matters to you, helping you clarify your values and cultivate the healthiest, most authentic version of yourself.</p>
HTML,
        'cards' => [
            ['icon' => 'compass', 'title' => 'Acceptance &amp; Commitment Therapy (ACT)', 'text' => 'Clarifying your values and moving toward what truly matters.'],
            ['icon' => 'thought', 'title' => 'Cognitive Behavioral Therapy (CBT)', 'text' => 'Practical tools to shift unhelpful thoughts and patterns.'],
            ['icon' => 'connect', 'title' => 'Gottman Method Techniques', 'text' => 'Relationship work that strengthens connection between partners.'],
            ['icon' => 'care',    'title' => 'Person-Centered &amp; Trauma-Informed', 'text' => 'Warm, collaborative care that meets you where you are.'],
        ],
    ],
];

$tp_specialties = [
    'Anxiety &amp; Depression',
    'Self-Esteem &amp; Life Transitions',
    'ADHD &amp; Autism Support',
    'Marriage &amp; Relationship Stress',
    'Chronic Health Issues',
];

$tp_specialty_links = [
    'Anxiety &amp; Depression'          => '/anxiety-therapy-michigan',
    'Marriage &amp; Relationship Stress' => '/couples-therapy',
    'ADHD &amp; Autism Support'          => '/adhd-testing-evaluation',
];

$tp_credentials = [
    [
        'title' => 'Credentials &amp; Training',
        'items' => [
            'MA in Clinical Psychology (ABA Concentration)',
            'TLLP - Temporary Limited Licensed Psychologist',
            'Trained in ACT, CBT &amp; Gottman Method Techniques',
            'Trauma-Informed Care',
        ],
    ],
];

$tp_cta_copy = 'Whether you are navigating life\'s challenges on your own or as a couple, Kalee is here to walk alongside you. She offers individual and couples therapy in a safe, welcoming space. Contact us today to schedule your consultation.';
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
