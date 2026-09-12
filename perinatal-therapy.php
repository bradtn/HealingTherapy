<?php
// Page-specific variables — verbatim from production
$page_title = 'Perinatal Therapy & Postpartum Treatment | Michigan';
$page_description = 'Specialized perinatal therapy in Michigan. Treatment for postpartum depression, anxiety, birth trauma, pregnancy loss. Compassionate support for new mothers.';
$canonical_url = 'https://www.healingtherapycenter.com/perinatal-therapy';
$current_service = 'perinatal';

require_once __DIR__ . '/includes/config.php';

// Service Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Perinatal Therapy',
    'serviceType' => 'Perinatal and Postpartum Therapy',
    'description' => 'Specialized perinatal therapy in Michigan providing compassionate treatment for postpartum depression, anxiety, birth trauma, and pregnancy loss. Support for mothers and families through pregnancy, birth, and the adjustment to life with a newborn.',
    'url' => 'https://www.healingtherapycenter.com/perinatal-therapy',
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
    $hero_h1 = 'Compassionate Perinatal Therapy &amp; Postpartum Treatment in Michigan';
    $hero_lead = "Supporting you through pregnancy, birth, and early parenthood";
    $hero_img = 'svc-hero-individual';
    $hero_img_alt = 'A calm, supportive therapy space for expectant and new parents';
    include __DIR__ . '/includes/image-hero.php';
    ?>

    <section class="page">
        <div class="shell with-sidebar">
            <article class="prose">
                <p>The journey of bringing new life into the world can be filled with profound joy, wonder, and anticipation. Yet it can also bring unexpected challenges, deep vulnerability, and emotional complexity. Whether you're navigating pregnancy, preparing for birth, adjusting to life with a newborn, or facing challenges along the way, you deserve support that honors your unique experience.</p>

                <p>At Healing Therapy Center in Michigan, we understand that the perinatal period—from conception through the first year after birth—is a time of significant transformation. Physical changes, hormonal shifts, sleep deprivation, changing relationships, and the weight of new responsibilities can leave you feeling overwhelmed, anxious, or isolated. Our postpartum treatment programs are here to remind you that struggling doesn't mean you're failing—it means you're human.</p>

                <h2>You Deserve More Than Just Getting By</h2>
                <p>Many expectant and new parents find themselves simply trying to survive each day, telling themselves that this is just how it has to be. But parenthood shouldn't mean losing yourself. Whether you're experiencing prenatal anxiety, postpartum depression, birth trauma, difficulties with bonding, or simply feeling like you've lost your sense of self, know that there is help available and you don't have to face this alone.</p>

                <div class="callout callout--soft">
                    <h3>We Specialize In Supporting:</h3>
                    <ul class="check-list check-list--2col">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Prenatal and postpartum anxiety and depression</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Birth trauma and traumatic birth experiences</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Pregnancy loss and infant loss</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Fertility struggles and infertility</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Bonding and attachment concerns</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Postpartum adjustment challenges</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Perinatal mood and anxiety disorders</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Identity shifts in new parenthood</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Relationship changes during the perinatal period</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> NICU and medical complications</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Parenting with chronic illness or disability</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Work-life balance as a new parent</li>
                    </ul>
                </div>

                <h2>Our Approach to Perinatal Mental Health</h2>
                <p>We believe that effective perinatal support should be grounded in compassion, expertise, and respect for your individual journey. Our therapists are specially trained in perinatal mental health and understand the unique challenges that arise during this transformative time.</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Trauma-Informed Care</h3>
                        <p>We create a safe, supportive environment where you can process difficult experiences and emotions at your own pace. Your healing happens in a space of trust, confidentiality, and cultural sensitivity.</p>
                    </div>
                    <div class="panel">
                        <h3>Affirming &amp; Non-Judgmental</h3>
                        <p>Your experiences, feelings, and identities are honored here. We celebrate who you are and hold space for all of your emotions—the beautiful moments and the difficult ones.</p>
                    </div>
                    <div class="panel">
                        <h3>Personalized Support</h3>
                        <p>Every family's journey is unique. We tailor our therapeutic approach to meet your specific needs, drawing from evidence-based practices including CBT, mindfulness, and attachment-focused therapy.</p>
                    </div>
                    <div class="panel">
                        <h3>Hope-Centered</h3>
                        <p>While we acknowledge pain and struggle, we also believe in your capacity for growth, resilience, and joy. Even in the midst of challenges, there is space for hope and healing.</p>
                    </div>
                </div>

                <h2>What to Expect in Perinatal Therapy</h2>
                <p>Our perinatal therapy services provide a confidential space where you can explore your thoughts, process your emotions, and develop practical coping strategies. In our sessions together, we may work on:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Managing Anxiety &amp; Depression</h3>
                        <p>Learn evidence-based techniques to reduce symptoms and regain a sense of emotional balance during pregnancy and postpartum.</p>
                    </div>
                    <div class="panel">
                        <h3>Processing Birth Trauma</h3>
                        <p>Work through traumatic birth experiences in a safe, supportive environment using trauma-informed approaches.</p>
                    </div>
                    <div class="panel">
                        <h3>Navigating Grief &amp; Loss</h3>
                        <p>Find space to honor your grief while discovering pathways toward healing after pregnancy loss or infant loss.</p>
                    </div>
                    <div class="panel">
                        <h3>Strengthening the Parent-Infant Bond</h3>
                        <p>Address bonding difficulties and develop deeper connection with your baby through attachment-focused therapy.</p>
                    </div>
                    <div class="panel">
                        <h3>Adjusting to Your New Identity</h3>
                        <p>Explore the shifts in your sense of self and relationships as you transition into parenthood.</p>
                    </div>
                    <div class="panel">
                        <h3>Building Coping Skills</h3>
                        <p>Develop practical strategies for managing stress, overwhelm, and the demands of new parenthood.</p>
                    </div>
                </div>

                <h2>Accessible and Flexible Care</h2>
                <div class="callout callout--info">
                    <h3>We understand that accessing mental health care as a new or expectant parent can be challenging. That's why we offer:</h3>
                    <ul class="check-list check-list--2col">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> <strong>Flexible scheduling:</strong> Evening and weekend appointments available to accommodate your needs</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> <strong>Telehealth options:</strong> Virtual sessions available for when you can't leave home</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> <strong>Insurance accepted:</strong> We accept most major insurance plans including BCBS, Aetna, Priority Health</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> <strong>Compassionate support:</strong> Our team understands the unique demands of this season of life</li>
                    </ul>
                </div>

                <h2>You Don't Have to Do This Alone</h2>
                <p>The transition to parenthood is one of life's most significant changes, and it's okay to need support. Seeking help isn't a sign of weakness—it's an act of courage and self-care. Whether you're struggling with your mental health, processing a difficult experience, or simply seeking guidance during this transformative time, we're here to walk alongside you.</p>

                <p>At Healing Therapy Center, we're committed to helping expectant and new parents access the support they need to thrive—not just survive. You deserve to experience joy, connection, and vitality during this precious time in your life.</p>

                <div class="callout callout--brand">
                    <h3>Ready to Get Started?</h3>
                    <p>If you're ready to take the first step toward better mental health and emotional well-being during the perinatal period, we're here to help. Contact us today at <a href="tel:313-654-1915">313-654-1915</a> to schedule your initial consultation.</p>
                    <p>Serving expectant and new parents in Dearborn, Plymouth, Novi, Northville, Birmingham, Royal Oak, and throughout Metro Detroit.</p>
                </div>

                <div class="callout callout--soft">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/postpartum-depression-therapy-michigan">Postpartum Depression &amp; Anxiety Therapy in Michigan</a></li>
                        <li><a href="/womens-mental-health-therapy-michigan">Women's Mental Health Therapy</a></li>
                        <li><a href="/coping-with-postpartum-depression">Coping With Postpartum Depression: A Guide</a></li>
                    </ul>
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
