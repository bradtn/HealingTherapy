<?php
// Page-specific variables — verbatim from production
$page_title = 'Malak Wehbe, MA, TLLP | Therapist | Healing Therapy Center';
$page_description = 'Malak Wehbe, MA, TLLP - Therapist at Healing Therapy Center in Dearborn, MI. Specialized in child therapy, trauma, anxiety, and culturally sensitive care.';
$canonical_url = 'https://www.healingtherapycenter.com/malak-wehbe';
$og_image = 'https://www.healingtherapycenter.com/assets/img/malak.jpg';

require_once dirname(__DIR__) . '/includes/config.php';

// Person Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    'name' => 'Malak Wehbe',
    'jobTitle' => 'Temporary Limited Licensed Psychologist (TLLP)',
    'url' => 'https://www.healingtherapycenter.com/malak-wehbe',
    'image' => 'https://www.healingtherapycenter.com/assets/img/malak.jpg',
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
        'Child & Adolescent Therapy',
        'ADHD & Autism Support',
        'Anxiety & Depression',
        'Trauma & Family Conflict',
        'Culturally Responsive Care',
        'Cognitive Behavioral Therapy (CBT)',
        'Play Therapy',
        'Art-Based Techniques'
    ]
], JSON_UNESCAPED_SLASHES);

// ── Therapist-profile template data ─────────────────────────────────
$tp_name  = 'Malak Wehbe';
$tp_creds = 'MA, TLLP';
$tp_role  = 'Licensed Therapist';
$tp_intro = "I help children who are struggling at home or school, as well as teens and adults navigating life's challenges.";

$tp_photo      = '/assets/img/malak.jpg';
$tp_photo_alt  = 'Malak Wehbe, MA, TLLP';
$tp_first_name = 'Malak';

$tp_quick_info = [
    ['icon' => 'licensed',   'label' => 'MA, TLLP'],
    ['icon' => 'community',  'label' => 'Child, Teen &amp; Family Care'],
    ['icon' => 'inperson',   'label' => 'In-Person Care', 'sub' => 'Dearborn, Michigan'],
    ['icon' => 'telehealth', 'label' => 'Telehealth',     'sub' => 'Across Michigan'],
];

$tp_sections = [
    [
        'title' => 'How I Can Help',
        'html'  => <<<'HTML'
<p>Hi, I'm so glad you landed on my page! My name is Malak Wehbe, MA, TLLP, and I am a therapist trained from the Michigan School of Psychology .</p>
<p>I understand how overwhelming it can feel as a parent when your child is experiencing symptoms of ADHD, autism, anxiety, depression, trauma, or family conflict. That's why I create a safe, supportive, and welcoming space where individuals and families can process emotions, build resilience, and grow.</p>
HTML,
    ],
    [
        'title' => 'My Approach',
        'html'  => <<<'HTML'
<p>In therapy, I draw from evidence-based approaches such as Cognitive Behavioral Therapy (CBT), play therapy, and art-based techniques to meet each client where they are. My goal is to help children and families feel understood, supported, and equipped with tools for lasting change.</p>
HTML,
        'cards' => [
            ['icon' => 'thought',   'title' => 'Cognitive Behavioral Therapy (CBT)', 'text' => 'Evidence-based tools to shift unhelpful patterns.'],
            ['icon' => 'community', 'title' => 'Play Therapy', 'text' => 'Helping children express and process through play.'],
            ['icon' => 'growth',    'title' => 'Art-Based Techniques', 'text' => 'Creative, expressive approaches to healing.'],
            ['icon' => 'care',      'title' => 'Culturally Responsive Care', 'text' => 'Rooted in the Arab American and Muslim communities.'],
        ],
    ],
    [
        'title' => 'Background &amp; Experience',
        'html'  => <<<'HTML'
<p>Before becoming a therapist, I worked for three years as a case manager at ACCESS in Dearborn, supporting families with complex mental health needs. Those experiences shaped my dedication to providing culturally responsive care, particularly within the Arab American and Muslim communities.</p>
<p>If you're looking for a child or family therapist in Dearborn, or seeking support for yourself, I'd be honored to walk alongside you on your journey toward healing.</p>
HTML,
    ],
];

$tp_specialties = [
    'Child &amp; Adolescent Therapy',
    'ADHD &amp; Autism Support',
    'Anxiety &amp; Depression',
    'Trauma &amp; Family Conflict',
    'Culturally Responsive Care',
];

$tp_credentials = [
    [
        'title' => 'Credentials &amp; Training',
        'items' => [
            'MA in Psychology',
            'Michigan School of Psychology',
            'TLLP - Temporary Limited Licensed Psychologist',
            'Trained in Play Therapy &amp; Art-Based Techniques',
        ],
    ],
];

$tp_cta_copy = 'If you are seeking compassionate, culturally responsive therapy for your child, teen, or family, Malak is here to help. She offers a safe, welcoming space for healing and growth. Contact us today to schedule your consultation.';
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
