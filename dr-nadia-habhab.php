<?php
// Page-specific variables — verbatim from production
$page_title = 'Dr. Nadia Habhab, PhD, LP | Psychologist in Dearborn';
$page_description = 'Dr. Nadia Habhab, PhD, LP - Licensed psychologist at Healing Therapy Center in Dearborn, MI. Psychological testing, therapy for adults and children.';
$canonical_url = 'https://www.healingtherapycenter.com/dr-nadia-habhab';
$og_image = 'https://www.healingtherapycenter.com/assets/img/nadia.jpg';

require_once __DIR__ . '/includes/config.php';

// Person Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Person',
    'name' => 'Dr. Nadia Habhab',
    'jobTitle' => 'Licensed Psychologist (PhD, LP)',
    'url' => 'https://www.healingtherapycenter.com/dr-nadia-habhab',
    'image' => 'https://www.healingtherapycenter.com/assets/img/nadia.jpg',
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
        'Mood Disorders',
        'Complex Trauma',
        'Anxiety & Depression',
        'Cross Cultural Care',
        'Psychological Testing',
        'Autism Evaluations',
        'Emotion-Focused Therapy (EFT)',
        'Cognitive Behavioral Therapy (CBT)',
        'Trauma-Informed Care'
    ]
], JSON_UNESCAPED_SLASHES);

// ── Therapist-profile template data ─────────────────────────────────
$tp_name  = 'Dr. Nadia Habhab';
$tp_creds = 'PhD, LP';
$tp_role  = 'Licensed Psychologist';
$tp_intro = 'Struggling with anxiety, depression or the lasting effects of trauma? You may find yourself feeling on edge, overthinking, or reliving painful experiences.';

$tp_photo     = '/assets/img/nadia.jpg';
$tp_photo_alt = 'Dr. Nadia Habhab, PhD, LP';
$tp_first_name = 'Dr. Habhab';

$tp_quick_info = [
    ['icon' => 'licensed',   'label' => 'Licensed Psychologist'],
    ['icon' => 'experience', 'label' => '12+ Years Experience'],
    ['icon' => 'inperson',   'label' => 'In-Person Care', 'sub' => 'Dearborn, Michigan'],
    ['icon' => 'telehealth', 'label' => 'Telehealth',     'sub' => 'Across Michigan'],
];

$tp_sections = [
    [
        'title' => 'How I Can Help',
        'html'  => '<p>As a PhD-licensed psychologist with over 12 years of experience, I help adults understand and regulate their emotions, heal from trauma, and find relief from anxiety and depression. My approach is evidence-based, emotion focused therapy, which will help you change your overwhelming, negative emotions into more positive and adaptive emotions.</p>',
    ],
    [
        'title' => 'My Approach',
        'html'  => '<p>I draw from attachment-based and emotion-focused approaches to help you make sense of your experiences and create meaningful change. I\'m trained in both Emotion-Focused Therapy (EFT), Cognitive Behavioral Therapy (CBT), Trauma Informed approaches, and I tailor each session to you and your experiences. I hold certification in emotion focused individual therapy (EFIT), CBT, and experience in providing trauma informed care. I am trained in the Gottman method and have experience with trauma survivors, first responders and complex PTSD.</p>
                    <p>I work with clients experiencing challenges related to anxiety and complex trauma. In our initial sessions, we will explore sources of conflict, identify triggers, and develop strategies for emotional regulation and removing emotional blocks. At the same time, we will focus on building emotional tolerance and resilience to foster long-term well-being.</p>',
        'cards' => [
            ['icon' => 'emotion', 'title' => 'Emotion-Focused Therapy (EFT)', 'text' => 'Changing overwhelming, negative emotions into more positive and adaptive ones.'],
            ['icon' => 'thought', 'title' => 'Cognitive Behavioral Therapy (CBT)', 'text' => 'Practical tools to shift the thought patterns behind anxiety and depression.'],
            ['icon' => 'shield',  'title' => 'Trauma-Informed Care', 'text' => 'A safe, paced approach for healing from complex trauma and PTSD.'],
            ['icon' => 'connect', 'title' => 'The Gottman Method', 'text' => 'Research-based work to strengthen connection and communication.'],
        ],
    ],
];

$tp_specialties = [
    'Mood Disorders',
    'Complex Trauma',
    'Anxiety &amp; Depression',
    'Cross Cultural Care',
    'Psychological Testing',
    'Autism Evaluations',
];

$tp_credentials = [
    [
        'title' => 'Credentials &amp; Training',
        'items' => [
            'PhD in Psychology',
            'Licensed Psychologist (LP)',
            '12+ Years Clinical Experience',
            'Certified in Evidence-Based Attachment Therapies',
        ],
    ],
];

$tp_extra_html = <<<HTML
<h2>Recent Blog Posts by Dr. Habhab</h2>
<div class="panel">
    <img loading="lazy" src="/assets/img/blog-8.jpg" alt="person first approach therapy">
    <div class="tp-extra__body">
        <h3><a href="/person-first-approach">Treat the Person Not the Diagnosis</a></h3>
        <p class="post-meta"><span>Dr. Nadia Habhab</span> <span>05/20/2026</span></p>
        <p>Why I believe in a Person-First Approach to Understanding Symptoms and Emotions through Emotion Focused Therapy.</p>
        <p><a class="btn btn--pill btn--primary" href="/person-first-approach">Read About Person-First Therapy</a></p>
    </div>
</div>
HTML;

$tp_cta_copy = 'Whether you need psychological testing, autism evaluation, or therapy services, Dr. Habhab provides compassionate, evidence-based care for children, adolescents, and adults. Contact us today to schedule your consultation.';
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
