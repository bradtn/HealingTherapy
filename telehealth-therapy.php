<?php
// Page-specific variables — verbatim from production
$page_title = 'Telehealth Therapy in Michigan | Online Counseling';
$page_description = 'Secure telehealth therapy throughout Michigan. Licensed therapists for anxiety, depression, trauma, couples counseling via video. Same quality care from home.';
$canonical_url = 'https://www.healingtherapycenter.com/telehealth-therapy';
$current_service = 'telehealth';

require_once __DIR__ . '/includes/config.php';

// Service Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Telehealth Therapy',
    'serviceType' => 'Telehealth Therapy and Online Counseling',
    'description' => 'Secure telehealth therapy and online counseling throughout Michigan. Licensed therapists provide professional support for anxiety, depression, trauma, and couples counseling via video from the comfort of your own home.',
    'url' => 'https://www.healingtherapycenter.com/telehealth-therapy',
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
    $hero_h1 = 'Telehealth Therapy Services in Michigan';
    $hero_img = 'svc-hero-telehealth';
    $hero_img_alt = 'A telehealth therapy session on a laptop at home';
    include __DIR__ . '/includes/image-hero.php';
    ?>

    <section class="page">
        <div class="shell with-sidebar">
            <article class="prose">
                <h2>Telehealth Therapy &amp; Online Counseling</h2>
                <p>At Healing Therapy Center, we understand that accessing mental health care can sometimes be challenging due to busy schedules, geographical limitations, or other barriers. That's why we offer telehealth therapy and online counseling services, providing you with the flexibility to receive professional support from the comfort of your own home.</p>

                <h3>What is Telehealth Therapy?</h3>
                <p>Telehealth therapy, also known as online therapy or virtual therapy, involves conducting therapy sessions via secure video conferencing platforms. This allows you to connect with your therapist in real-time, just as you would in an in-person session, but with the added convenience of being able to do so from any location.</p>

                <h3>Our Approach</h3>
                <p>We believe in maintaining the same high standards of care in our telehealth therapy services as we do in our in-person sessions. Our therapists are trained to deliver effective and compassionate care through virtual platforms, ensuring that you receive the support you need, no matter where you are.</p>

                <h3>Benefits of Telehealth Therapy</h3>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Convenience</h3>
                        <p>Access therapy from the comfort of your home or any private location.</p>
                    </div>
                    <div class="panel">
                        <h3>Flexibility</h3>
                        <p>Schedule sessions at times that work best for you, including evenings and weekends.</p>
                    </div>
                    <div class="panel">
                        <h3>Accessibility</h3>
                        <p>Receive care even if you live in remote areas or have mobility issues.</p>
                    </div>
                    <div class="panel">
                        <h3>Continuity of Care</h3>
                        <p>Maintain regular therapy sessions even when traveling or during unforeseen circumstances.</p>
                    </div>
                    <div class="panel">
                        <h3>Privacy &amp; Security</h3>
                        <p>Enjoy a confidential and secure HIPAA-compliant environment for your therapy sessions.</p>
                    </div>
                </div>

                <h3>Our Therapists</h3>
                <p>Our team of compassionate and skilled therapists brings over 20 combined years of experience to Healing Therapy Center. We are committed to ongoing professional development and staying current with the latest research and techniques in telehealth therapy. Our goal is to provide you with the highest quality care and support, regardless of your location.</p>

                <h3>Getting Started</h3>
                <p>Starting telehealth therapy at Healing Therapy Center is simple. Contact us to schedule an initial consultation, where we will discuss your needs and goals and match you with a therapist who is best suited to support you. We use secure, HIPAA-compliant video conferencing platforms to ensure your privacy and confidentiality.</p>

                <div class="callout callout--info">
                    <h3>Technical Requirements</h3>
                    <p>A device with camera and microphone (smartphone, tablet, or computer)</p>
                    <p>A stable internet connection</p>
                    <p>A private, quiet space without interruptions</p>
                </div>

                <div class="callout callout--brand">
                    <h3>Start Telehealth Therapy Today</h3>
                    <p>Ready to begin online therapy?</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
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
