<?php
// Page-specific variables
$page_title = 'Person-First Approach to Therapy | Dr. Nadia Habhab';
$page_description = 'Dr. Nadia Habhab explains why treating the person, not the diagnosis, matters in Emotion Focused Therapy and person-centered mental health care.';
$canonical_url = 'https://www.healingtherapycenter.com/person-first-approach';

// Article Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => 'Treat the Person Not the Diagnosis: Why I believe in a Person-First Approach to Understanding Symptoms and Emotions',
    'description' => $page_description,
    'url' => $canonical_url,
    'mainEntityOfPage' => $canonical_url,
    'image' => 'https://www.healingtherapycenter.com/assets/img/blog-8.jpg',
    'datePublished' => '2026-05-20',
    'author' => [
        '@type' => 'Person',
        'name' => 'Dr. Nadia Habhab'
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Healing Therapy Center',
        'url' => 'https://www.healingtherapycenter.com'
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// Include configuration
require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'From Our Blog';
    $hero_h1 = 'Treat the Person Not the Diagnosis: Why I believe in a Person-First Approach to Understanding Symptoms and Emotions';
    $hero_cta = false;
    $hero_meta = '<p class="post-meta"><span>Dr. Nadia Habhab</span><span>05/20/2026</span></p>';
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <img src="/assets/img/blog-8.jpg" alt="person first approach therapy" loading="lazy">

                <p>Emotion Focused Therapy (referred to as EFT hereafter) is a therapeutic approach that treats exactly what it claims; emotion. To put it plainly, the focus is on your emotional experience and the meaning you make of your experiences, and any unmet needs which may or may not be within the in your explicit awareness.</p>
                <p>Often, clients come to me with neatly packaged constellation of symptoms and experiences that they have been 'diagnosed with' by another professional or have made in a good-faith effort to understand their own suffering. While diagnosis can be a useful tool, focusing only on a diagnosis can overlook the deeply personal emotional experiences and unmet needs that may be driving distress. By understanding the individual within the context of their lived experience (e.g. culture, religion, social supports, age, and gender identity) therapy can more meaningfully address the roots of suffering rather than just its labels.</p>
                <p>An individual labeled 'borderline' might be struggling with years of complex, traumatic experience, and years of unmet need for validation from loved ones around their experience. Likewise, the label of "depressed" or "anxious" fails to acknowledge that an individual can access a more productive emotional experiences at any given moment.</p>
                <p>A person-centered approach to therapy views the therapeutic process as collaborative rather than condemning, recognizing that human experience is dynamic and evolving and not fixed by symptoms or diagnoses.</p>

                <p><a href="/all-blogs">&larr; All Articles &amp; Guides</a></p>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
