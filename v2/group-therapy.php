<?php
// Page-specific variables — verbatim from production
$page_title = 'Group Therapy in Dearborn, MI | Healing Therapy Center';
$page_description = 'Supportive group therapy in Dearborn, Michigan. Connect with others facing similar challenges. Led by licensed therapists. Anxiety, depression, grief groups.';
$canonical_url = 'https://www.healingtherapycenter.com/group-therapy';
$current_service = 'group';

require_once dirname(__DIR__) . '/includes/config.php';

// Service Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Group Therapy',
    'serviceType' => 'Group Therapy',
    'description' => 'Group therapy sessions in Dearborn, Michigan offering a supportive, collaborative environment where participants share experiences, gain insights, develop coping strategies, and build community, facilitated by experienced licensed therapists.',
    'url' => 'https://www.healingtherapycenter.com/group-therapy',
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
    $hero_h1 = 'Group Therapy Sessions in Dearborn, MI';
    $hero_img = 'svc-hero-group';
    $hero_img_alt = 'A supportive group therapy circle';
    include __DIR__ . '/includes/image-hero.php';
    ?>

    <section class="page">
        <div class="shell with-sidebar">
            <article class="prose">
                <h2>Group Therapy</h2>
                <p>At Healing Therapy Center, our group therapy services offer a supportive and collaborative environment where individuals can share their experiences and learn from one another. Our experienced therapists facilitate these sessions to help participants gain insights, develop coping strategies, and build a sense of community.</p>

                <h3>What is Group Therapy?</h3>
                <p>Group therapy involves sessions with multiple participants and one or more licensed therapists. This form of therapy provides a unique opportunity for individuals to connect with others facing similar challenges, offering mutual support and understanding. Group therapy can be beneficial for a variety of issues, including anxiety, depression, grief, addiction, and more.</p>

                <h3>Our Approach</h3>
                <p>We believe in a holistic and inclusive approach to group therapy. Our therapists are skilled in various therapeutic techniques, including Cognitive-Behavioral Therapy (CBT), Dialectical Behavior Therapy (DBT), and Mindfulness-Based Stress Reduction (MBSR). This allows us to create a dynamic and effective group therapy experience tailored to the needs of the participants.</p>

                <h3>Benefits of Group Therapy</h3>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Shared Experiences</h3>
                        <p>Connect with others who understand what you're going through.</p>
                    </div>
                    <div class="panel">
                        <h3>Supportive Environment</h3>
                        <p>Gain and provide support in a safe and confidential setting.</p>
                    </div>
                    <div class="panel">
                        <h3>Diverse Perspectives</h3>
                        <p>Learn from the experiences and insights of others.</p>
                    </div>
                    <div class="panel">
                        <h3>Skill Development</h3>
                        <p>Develop practical skills to manage your mental health and well-being.</p>
                    </div>
                    <div class="panel">
                        <h3>Sense of Community</h3>
                        <p>Build a network of support and reduce feelings of isolation.</p>
                    </div>
                </div>

                <h3>Our Therapists</h3>
                <p>Our team of compassionate and skilled therapists brings over 20 combined years of experience to Healing Therapy Center. We are committed to ongoing professional development and staying current with the latest research and techniques in group therapy. Our goal is to provide you with the highest quality care and support.</p>

                <h3>Getting Started</h3>
                <p>Joining a group therapy session at Healing Therapy Center is simple. Contact us to learn about our current group offerings and schedule an initial consultation. During this consultation, we will discuss your needs and goals to ensure that group therapy is the right fit for you. We offer flexible scheduling options to accommodate your busy life.</p>

                <div class="callout callout--brand">
                    <h3>Contact Us</h3>
                    <p>Ready to take the first step towards healing in a supportive group setting? <strong>Call:</strong> <a href="tel:313-654-1915">(313) 654-1915</a> or <a href="/appointment">Request an Appointment Online</a></p>
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
