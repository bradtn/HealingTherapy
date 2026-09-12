<?php
// Page-specific variables
$page_title = 'Crisis Resources & Suicide Hotline | Healing Therapy Center';
$page_description = '24/7 crisis resources and suicide prevention hotlines. Immediate help available. National Suicide Prevention Lifeline: 988. You are not alone.';
$canonical_url = 'https://www.healingtherapycenter.com/suicide-hotline';

// WebPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'WebPage',
    'name' => 'Crisis Resources & Suicide Prevention Hotline',
    'description' => '24/7 crisis resources and suicide prevention hotlines, including the 988 Suicide & Crisis Lifeline, Crisis Text Line, and domestic violence support.',
    'url' => 'https://www.healingtherapycenter.com/suicide-hotline'
], JSON_UNESCAPED_SLASHES);

require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Resources';
    $hero_h1 = 'Crisis Resources &amp; Suicide Prevention Hotline';
    $hero_cta = false;
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <h2>Resources</h2>

                <div class="callout callout--brand">
                    <h3>Suicide Prevention Lifeline</h3>
                    <p>Support and assistance 24/7 for anyone feeling depressed, overwhelmed or suicidal.</p>
                    <p><strong>Call or Text: <a href="tel:988">988</a></strong></p>
                    <p><a href="https://988lifeline.org/">National Suicide Prevention Lifeline (1.800.273.TALK)</a></p>
                </div>

                <div class="callout callout--brand">
                    <h3>Domestic Violence</h3>
                    <p>Confidential support for victims of domestic violence and their loved ones.</p>
                    <p><strong>Call: <a href="tel:1-800-799-7233">1-800-799-SAFE</a></strong></p>
                    <p><a href="https://www.thehotline.org/">National Domestic Violence Hotline</a></p>
                </div>

                <div class="callout callout--brand">
                    <h3>Crisis Text Line</h3>
                    <p>Free, 24/7 support via text message for those in crisis.</p>
                    <p><strong>Text HOME to <a href="sms:741741">741741</a></strong></p>
                    <p><a href="https://www.crisistextline.org/">Crisis Text Line</a></p>
                </div>

                <div class="callout callout--brand">
                    <h3>SAMHSA National Helpline</h3>
                    <p>Free, confidential help for substance use disorders and mental health.</p>
                    <p><strong>Call: <a href="tel:1-800-662-4357">1-800-662-HELP</a></strong></p>
                    <p><a href="https://www.samhsa.gov/find-help/helplines/national-helpline">SAMHSA Helpline</a></p>
                </div>

                <div class="callout callout--brand">
                    <h3>Veterans Crisis Line</h3>
                    <p>Confidential support for Veterans and their loved ones, 24/7.</p>
                    <p><strong>Call: <a href="tel:988">988</a> (Press 1)</strong></p>
                    <p><a href="https://www.veteranscrisisline.net/">Veterans Crisis Line</a></p>
                </div>

                <div class="callout callout--brand">
                    <h3>Trevor Project (LGBTQ+)</h3>
                    <p>Crisis intervention and suicide prevention for LGBTQ+ young people.</p>
                    <p><strong>Call: <a href="tel:1-866-488-7386">1-866-488-7386</a></strong></p>
                    <p><a href="https://www.thetrevorproject.org/">The Trevor Project</a></p>
                </div>

                <h2>Recognizing Warning Signs</h2>

                <h3>Behavioral Changes to Watch For</h3>
                <p>If you or someone you know is experiencing thoughts of suicide, it is important to recognize the warning signs early. Common behavioral changes include withdrawing from friends and family, giving away personal possessions, increased use of alcohol or drugs, and sudden mood swings from depression to calmness.</p>
                <p>Other signs include talking about feeling hopeless or having no reason to live, expressing feelings of being trapped or in unbearable pain, and searching for ways to end their life. Changes in sleep patterns, appetite, or energy levels can also indicate someone is struggling.</p>

                <h3>How to Help Someone in Crisis</h3>
                <p>If you believe someone is at immediate risk of suicide, do not leave them alone. Remove any firearms, medications, or other means of self-harm from the area. Call 988 or take them to an emergency room. Listen without judgment and let them know you care.</p>
                <p>Asking someone directly about suicidal thoughts does not put the idea in their head. Being direct shows you take their feelings seriously and gives them permission to share what they are going through. Encourage professional help and offer to assist them in making an appointment.</p>

                <h2>When to Seek Professional Help</h2>
                <p>Mental health challenges are common and treatable. At Healing Therapy Center, our licensed therapists provide compassionate, confidential support for individuals experiencing depression, anxiety, trauma, and suicidal thoughts. You do not have to face these challenges alone.</p>
                <p>If you are experiencing persistent feelings of sadness, hopelessness, or thoughts of self-harm, reaching out for professional support is an important step. Therapy provides a safe space to process difficult emotions, develop coping strategies, and work toward healing and recovery.</p>
                <p>
                    <a class="btn btn--pill btn--primary" href="/appointment">Schedule a Consultation</a>
                </p>
                <p>Call us: <a href="tel:313-654-1915">(313) 654-1915</a></p>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
