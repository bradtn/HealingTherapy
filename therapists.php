<?php
// Page-specific variables — verbatim from production
$page_title = 'Licensed Therapists in Dearborn, MI | BCBS, Aetna Accepted';
$page_description = 'Meet our licensed therapists in Dearborn, MI. Experts in anxiety, depression, trauma, ADHD & couples therapy. BCBS, Aetna accepted. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/therapists';

require_once __DIR__ . '/includes/config.php';

// CollectionPage Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => 'Licensed Therapists in Dearborn, MI',
    'description' => 'Meet the licensed therapists at Healing Therapy Center in Dearborn, Michigan, specializing in anxiety, depression, trauma, ADHD, and couples therapy.',
    'url' => 'https://www.healingtherapycenter.com/therapists',
    'about' => [
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
], JSON_UNESCAPED_SLASHES);

// Page-specific display data: professional titles (from the V1 team page) and
// specialty areas (from each therapist's own bio page). Names, credentials,
// URLs and photos come from config.php $team_members (single source of truth).
$team_display = [
    'nadia-habhab'   => ['title' => 'Licensed Psychologist',            'specialties' => ['Complex Trauma & Mood Disorders', 'Anxiety & Depression', 'Psychological Testing']],
    'tiffany-murray' => ['title' => 'Licensed Clinical Social Worker',   'specialties' => ['Perinatal & Postpartum Mental Health', 'Grief & Loss', 'Trauma-Focused Therapy']],
    'amal-ayad'      => ['title' => 'Owner',                             'specialties' => ['Life Coaching & Goal Setting', 'Confidence Building', 'Work-Life Balance']],
    'malak-wehbe'    => ['title' => 'Therapist',                         'specialties' => ['Child & Adolescent Therapy', 'ADHD & Autism Support', 'Anxiety & Trauma']],
    'donna-majed'    => ['title' => 'Therapist',                         'specialties' => ["Women's Mental Health", 'Anxiety & OCD', 'Postpartum & Trauma']],
];
$team_order = ['amal-ayad', 'tiffany-murray', 'nadia-habhab', 'malak-wehbe', 'donna-majed'];
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <!-- ============ Full-bleed editorial hero ============ -->
    <section class="team-hero" aria-labelledby="team-h1">
        <div class="team-hero__bg">
            <picture>
                <source type="image/avif" srcset="/assets/img/team-hero-800.avif 800w, /assets/img/team-hero-1100.avif 1100w, /assets/img/team-hero-1600.avif 1600w" sizes="100vw">
                <img src="/assets/img/team-hero-1600.webp"
                     srcset="/assets/img/team-hero-800.webp 800w, /assets/img/team-hero-1100.webp 1100w, /assets/img/team-hero-1600.webp 1600w"
                     sizes="100vw" width="1600" height="1067" loading="eager" fetchpriority="high"
                     alt="A bright, calming space at Healing Therapy Center with a comfortable chair, plants, and warm natural light">
            </picture>
        </div>
        <div class="shell team-hero__inner">
            <div class="team-hero__content">
                <p class="eyebrow">Our Team</p>
                <h1 id="team-h1">Compassionate People.<br><span class="accent-italic">Meaningful Change.</span></h1>
                <p class="team-hero__lead">Our licensed therapists in Dearborn bring warmth, deep expertise, and evidence-based care to every session — with over 20 combined years of experience and most major insurance plans accepted.</p>
                <a class="btn btn--pill btn--primary" href="/appointment">
                    Make an Appointment
                    <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ Values / trust strip ============ -->
    <section class="section section--white">
        <div class="shell">
            <div class="team-values reveal">
                <div class="value">
                    <span class="value__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 5 6v5c0 4.5 3 8.2 7 10 4-1.8 7-5.5 7-10V6l-7-3Z"/><path d="m9 12 2 2 4-4"/></svg></span>
                    <div>
                        <h3>Evidence-Based Care</h3>
                        <p>Proven approaches for real, lasting change.</p>
                    </div>
                </div>
                <div class="value">
                    <span class="value__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="8.5" r="3"/><path d="M3.5 19a5.5 5.5 0 0 1 11 0"/><circle cx="17" cy="9.5" r="2.4"/><path d="M15.5 19a4.8 4.8 0 0 1 5-4.5"/></svg></span>
                    <div>
                        <h3>A Collaborative Approach</h3>
                        <p>We work with you, not just for you.</p>
                    </div>
                </div>
                <div class="value">
                    <span class="value__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4.5"/><path d="M12 2v2.5M12 19.5V22M2 12h2.5M19.5 12H22M4.9 4.9l1.8 1.8M17.3 17.3l1.8 1.8M19.1 4.9l-1.8 1.8M6.7 17.3l-1.8 1.8"/></svg></span>
                    <div>
                        <h3>A More Hopeful Tomorrow</h3>
                        <p>Compassionate support at every step.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Therapist directory ============ -->
    <section class="section" id="about" aria-labelledby="team-dir">
        <div class="shell">
            <div class="section__head section-title section-title--center reveal">
                <p class="eyebrow eyebrow--center">Meet Our Therapists</p>
                <h2 id="team-dir">Experienced. Compassionate. Here for You.</h2>
                <p>At Healing Therapy Center, our team of dedicated licensed therapists in Dearborn, MI is committed to providing exceptional care. We believe the hardest step is the first one — and our skilled, compassionate professionals are here to guide you on your journey to health and happiness.</p>
            </div>

            <ul class="tgrid reveal">
                <?php foreach ($team_order as $tid):
                    $m = get_team_member_by_id($tid);
                    if (!$m) continue;
                    $d = $team_display[$tid];
                ?>
                <li class="tcard">
                    <img class="tcard__photo" src="/<?php echo $m['image']; ?>" alt="<?php echo htmlspecialchars($m['alt']); ?>" width="320" height="400" loading="lazy">
                    <div class="tcard__body">
                        <h3 class="tcard__name"><a href="/<?php echo $m['url']; ?>"><?php echo $m['name']; ?>, <?php echo $m['credentials']; ?></a></h3>
                        <p class="tcard__title"><?php echo htmlspecialchars($d['title']); ?></p>
                        <ul class="tcard__specs">
                            <?php foreach ($d['specialties'] as $spec): ?>
                            <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg><?php echo htmlspecialchars($spec); ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <span class="link-more tcard__link">View Bio <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </section>

    <!-- ============ Therapeutic approach (SEO content preserved) ============ -->
    <section class="section section--tint" id="our-approach">
        <div class="shell">
            <div class="section__head section-title reveal">
                <p class="eyebrow">Our Approach</p>
                <h2>Our Therapeutic Approach</h2>
            </div>
            <div class="grid-2">
                <div class="panel">
                    <h3>Evidence-Based Treatment</h3>
                    <p>Our therapists utilize evidence-based therapeutic approaches tailored to each client's unique needs. We draw from cognitive behavioral therapy, dialectical behavior therapy, and other proven modalities to help you achieve your mental health goals. Our team stays current with the latest research and best practices in the field.</p>
                </div>
                <div class="panel">
                    <h3>Culturally Sensitive &amp; Multicultural Therapy</h3>
                    <p>We understand that cultural background plays an important role in mental health treatment. Our diverse team specializes in multicultural therapy, bringing cultural awareness and sensitivity to every therapeutic relationship and creating a safe, welcoming environment for clients from all backgrounds. We are committed to providing inclusive care that respects your values and experiences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Areas of specialization (SEO content preserved) ============ -->
    <section class="section" id="specializations">
        <div class="shell">
            <div class="section__head section-title section-title--center reveal">
                <p class="eyebrow eyebrow--center">What We Treat</p>
                <h2>Areas of Specialization</h2>
            </div>
            <div class="grid-4">
                <div class="panel">
                    <h3>Anxiety &amp; Depression</h3>
                    <p>Effective treatment for anxiety disorders, depression, and mood-related concerns.</p>
                </div>
                <div class="panel">
                    <h3>Trauma &amp; PTSD</h3>
                    <p>Specialized trauma-informed care to help you heal from past experiences.</p>
                </div>
                <div class="panel">
                    <h3>Relationships</h3>
                    <p>Couples and family therapy to improve communication and strengthen bonds.</p>
                </div>
                <div class="panel">
                    <h3>ADHD &amp; Testing</h3>
                    <p>Comprehensive psychological testing and ADHD evaluations for children and adults.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Final CTA ============ -->
    <?php
    $cta_heading = 'A Team That Cares';
    $cta_copy = "Taking the first step toward better mental health can feel overwhelming — but you don't have to do it alone. Our team is here to help you find support and the right therapist for your needs.";
    include __DIR__ . '/includes/cta.php';
    ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
