<?php
// Page-specific variables — verbatim from production
$page_title = 'Tiffany Murray, LMSW | Therapist | Healing Therapy Center';
$page_description = 'Tiffany Murray, LMSW - Licensed therapist at Healing Therapy Center in Dearborn, MI. Individual therapy, couples counseling, anxiety and depression treatment.';
$canonical_url = 'https://www.healingtherapycenter.com/dr-tiffany-murray';
$og_image = 'https://www.healingtherapycenter.com/assets/img/tiffany.jpg';

require_once __DIR__ . '/includes/config.php';

// Person Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    'name' => 'Tiffany Murray',
    'jobTitle' => 'Licensed Master Social Worker (LMSW)',
    'url' => 'https://www.healingtherapycenter.com/dr-tiffany-murray',
    'image' => 'https://www.healingtherapycenter.com/assets/img/tiffany.jpg',
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
        'Perinatal Mood & Anxiety Disorders',
        'Postpartum Depression & Anxiety',
        'Grief & Loss Counseling',
        'Life Transitions',
        'ADHD & Neurodiversity',
        'Cognitive Behavioral Therapy (CBT)',
        'Dialectical Behavior Therapy (DBT)',
        'Acceptance and Commitment Therapy (ACT)',
        'Emotion-Focused Therapy'
    ]
], JSON_UNESCAPED_SLASHES);

// ── Therapist-profile template data ─────────────────────────────────
$tp_name  = 'Tiffany Murray';
$tp_creds = 'LMSW';
$tp_role  = 'Licensed Master Social Worker';
$tp_intro = 'Tiffany is a fully licensed master level clinical social worker certified and specially trained in perinatal mood and anxiety disorders.';

$tp_photo      = '/assets/img/tiffany.jpg';
$tp_photo_alt  = 'Tiffany Murray, LMSW';
$tp_first_name = 'Tiffany';

$tp_quick_info = [
    ['icon' => 'licensed',   'label' => 'Licensed Master Social Worker'],
    ['icon' => 'experience', 'label' => '12+ Years Experience'],
    ['icon' => 'inperson',   'label' => 'In-Person Care', 'sub' => 'Dearborn, Michigan'],
    ['icon' => 'telehealth', 'label' => 'Telehealth',     'sub' => 'Across Michigan'],
];

$tp_sections = [
    [
        'title' => 'How I Can Help',
        'html'  => <<<'HTML'
<p>After adapting to her own transition through pregnancy and early motherhood and working through her own post-partum anxiety and depression. Tiffany found the experience of coping with her transition to be a challenge that sparked the motivation to work with others experiencing the same.</p>
<p>Tiffany has additional experience working with those who are struggling to cope with grief and loss and the unique dynamic that a loss can present, whether it's a loss of a sense of self through major transitions in life such as divorce, marriage, pregnancy, parenthood, career development or the loss of a friend or loved one. Tiffany also has experience working with new parents and adult individuals who are navigating the challenges of high functioning neurodiversity, <b>ADD</b> and <b>ADHD</b>.</p>
HTML,
    ],
    [
        'title' => 'My Approach',
        'html'  => <<<'HTML'
<p>Tiffany has experience in applying an eclectic and humanistic approach to treatment, with theoretical interventions from psychoanalysis, CBT, ACT, Emotion focused therapy and DBT as well as adapting a strength-based model with culturally competent and trauma informed practices.</p>
<p>Tiffany supports a collaborative approach with clients to strengthen the interpersonal connection and communication challenges that they may experience during these life changes.</p>
HTML,
        'cards' => [
            ['icon' => 'compass', 'title' => 'Eclectic &amp; Humanistic', 'text' => 'Interventions from psychoanalysis, CBT, ACT, EFT and DBT.'],
            ['icon' => 'growth',  'title' => 'Strength-Based', 'text' => 'Building on your existing strengths and resilience.'],
            ['icon' => 'shield',  'title' => 'Trauma-Informed', 'text' => 'Culturally competent, trauma informed practices.'],
            ['icon' => 'connect', 'title' => 'Collaborative', 'text' => 'Strengthening interpersonal connection and communication.'],
        ],
    ],
    [
        'title' => 'Background &amp; Experience',
        'html'  => <<<'HTML'
<p>Tiffany also has experience working as a clinical hospice social worker and within a part-time teaching role at Wayne State University School of Social Work.</p>
HTML,
    ],
];

$tp_specialties = [
    'Perinatal Mood &amp; Anxiety Disorders',
    'Postpartum Depression &amp; Anxiety',
    'Grief &amp; Loss Counseling',
    'Life Transitions',
    'ADHD &amp; Neurodiversity',
];

$tp_credentials = [
    [
        'title' => 'Credentials &amp; Training',
        'items' => [
            'LMSW - Licensed Master Social Worker',
            'Wayne State University School of Social Work (2012)',
            'PSI Certified in Perinatal Mental Health (2015)',
            'PSI Advanced Psychotherapy Certification (2020)',
            '12+ Years Clinical Experience',
        ],
    ],
];

$tp_cta_copy = 'Whether you are navigating the challenges of new parenthood, coping with grief, or seeking support for life transitions, Tiffany provides compassionate, trauma-informed care. Contact us today to schedule your consultation.';
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
