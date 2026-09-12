<?php
// Page-specific variables — verbatim from production
$page_title = 'Amal Ayad, MA | Life Coach | Healing Therapy Center';
$page_description = 'Amal Ayad, MA - Life Coach at Healing Therapy Center in Dearborn, MI. Specializing in life coaching, goal setting, confidence building, and personal growth.';
$canonical_url = 'https://www.healingtherapycenter.com/amal-ayad';
$og_image = 'https://www.healingtherapycenter.com/assets/img/amal.jpg';

require_once dirname(__DIR__) . '/includes/config.php';

// Person Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    'name' => 'Amal Ayad',
    'jobTitle' => 'Life Coach',
    'url' => 'https://www.healingtherapycenter.com/amal-ayad',
    'image' => 'https://www.healingtherapycenter.com/assets/img/amal.jpg',
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
        'Life Coaching',
        'Goal Setting',
        'Confidence Building',
        'Personal Growth & Development',
        'Work-Life Balance'
    ]
], JSON_UNESCAPED_SLASHES);

// ── Therapist-profile template data ─────────────────────────────────
$tp_name  = 'Amal Ayad';
$tp_creds = 'MA';
$tp_role  = 'Life Coach &amp; Therapist';
$tp_intro = 'With over a decade of experience in the mental health field, I am dedicated to helping clients unlock their potential and achieve meaningful goals.';

$tp_photo      = '/assets/img/amal.jpg';
$tp_photo_alt  = 'Amal Ayad, MA';
$tp_first_name = 'Amal';

$tp_quick_info = [
    ['icon' => 'licensed',   'label' => 'Certified Life Coach'],
    ['icon' => 'experience', 'label' => '10+ Years Experience'],
    ['icon' => 'inperson',   'label' => 'In-Person Care', 'sub' => 'Dearborn, Michigan'],
    ['icon' => 'telehealth', 'label' => 'Telehealth',     'sub' => 'Across Michigan'],
];

$tp_sections = [
    [
        'title' => 'How I Can Help',
        'html'  => <<<'HTML'
<p>After years as a psychologist, I discovered my passion for focusing on the "here and now," empowering clients to harness their personal strengths to achieve immediate and impactful results. This realization inspired me to transition to life coaching, where I specialize in helping individuals build confidence, set goals, and take actionable steps toward the future they desire.</p>
HTML,
    ],
    [
        'title' => 'My Approach',
        'html'  => <<<'HTML'
<p>My approach combines structure, encouragement, and accountability. I believe in supporting clients as they move forward, offering the tools they need to overcome challenges and embrace growth. Whether you're seeking clarity, direction, or motivation, I am here to guide you on your journey to a more meaningful and fulfilling life.</p>
HTML,
        'cards' => [
            ['icon' => 'compass', 'title' => 'Structure', 'text' => 'A clear, structured path toward your goals.'],
            ['icon' => 'care',    'title' => 'Encouragement', 'text' => 'Supportive guidance as you move forward.'],
            ['icon' => 'connect', 'title' => 'Accountability', 'text' => 'A partner to help you follow through and take action.'],
            ['icon' => 'growth',  'title' => 'Growth', 'text' => 'The tools to overcome challenges and embrace growth.'],
        ],
    ],
    [
        'title' => 'Background &amp; Experience',
        'html'  => <<<'HTML'
<p>I hold a Master’s degree in Counseling Psychology from Wayne State University and have worked extensively with children, adults, and families, providing compassionate care and guidance.</p>
HTML,
    ],
];

$tp_specialties = [
    'Life Coaching &amp; Goal Setting',
    'Confidence Building',
    'Personal Growth &amp; Development',
    'Work-Life Balance',
];

$tp_credentials = [
    [
        'title' => 'Credentials &amp; Training',
        'items' => [
            "Master’s Degree in Counseling Psychology",
            'Wayne State University',
            'Certified Life Coach',
        ],
    ],
];

$tp_cta_copy = 'Ready to take the next step in your personal growth journey? Amal offers both in-person sessions at our Dearborn office and telehealth appointments for your convenience. Contact us today to schedule your consultation.';
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
