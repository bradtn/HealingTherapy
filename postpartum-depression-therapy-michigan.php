<?php
// Page-specific variables
$page_title = 'Postpartum Depression Therapy Michigan | PPD & Anxiety';
$page_description = 'Postpartum depression and anxiety therapy in Michigan. Therapists trained in perinatal mental health. Telehealth statewide. BCBS, Aetna accepted.';
$canonical_url = 'https://www.healingtherapycenter.com/postpartum-depression-therapy-michigan';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Postpartum Depression Therapy in Michigan',
    'description' => 'Specialized therapy for postpartum depression, postpartum anxiety, and perinatal mood disorders in Michigan. In-person care in Dearborn and secure telehealth statewide for new and expectant mothers.',
    'url' => 'https://www.healingtherapycenter.com/postpartum-depression-therapy-michigan',
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
$current_service = 'perinatal';

require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Specialized Care';
    $hero_h1 = 'Postpartum Depression &amp; Anxiety Treatment for Michigan Moms';
    $hero_lead = "If motherhood doesn't feel the way you expected it to, you are not alone and you are not failing. Healing Therapy Center provides specialized treatment for postpartum depression, postpartum anxiety, and other perinatal mood disorders — in person at our Dearborn office or by secure telehealth anywhere in Michigan.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>About 1 in 7 mothers experiences postpartum depression, and postpartum anxiety is at least as common. These are treatable medical conditions, not character flaws. Our clinicians <a href="/donna-majed">Donna Majed, TLLP</a> and <a href="/dr-tiffany-murray">Tiffany Murray, LMSW</a> are trained in perinatal mood and anxiety disorders and work with new moms every week.</p>

                <div class="callout">
                    <h3>Specialized Care for New Mothers</h3>
                    <ul>
                        <li><strong>Perinatal-Trained Therapists:</strong> Clinicians with specific training in postpartum mood and anxiety disorders</li>
                        <li><strong>Telehealth From Home:</strong> Attend sessions during naptime — no babysitter or commute needed</li>
                        <li><strong>Insurance Accepted:</strong> Blue Cross Blue Shield, Aetna, Priority Health, United Healthcare</li>
                        <li><strong>Fast, Judgment-Free Help:</strong> Evening and Saturday appointments available</li>
                    </ul>
                    <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a></strong> — you don't have to wait until it gets worse.</p>
                </div>

                <h2>Postpartum Conditions We Treat</h2>

                <p>Perinatal mental health struggles show up in different ways:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Postpartum Depression (PPD)</h3>
                        <p>Persistent sadness, numbness, guilt, hopelessness, or difficulty bonding with your baby that lasts beyond the first two weeks. PPD can begin any time in the first year after birth.</p>
                    </div>
                    <div class="panel">
                        <h3>Postpartum Anxiety &amp; OCD</h3>
                        <p>Constant worry, racing thoughts, inability to sleep even when the baby sleeps, and scary intrusive thoughts. Intrusive thoughts are common, treatable, and do not mean you are a danger to your baby.</p>
                    </div>
                    <div class="panel">
                        <h3>Birth Trauma &amp; PTSD</h3>
                        <p>Flashbacks, nightmares, or intense distress after a difficult delivery, emergency intervention, or NICU stay. Trauma-focused therapy helps you process what happened.</p>
                    </div>
                    <div class="panel">
                        <h3>Postpartum Rage &amp; Overwhelm</h3>
                        <p>Irritability, anger outbursts, and resentment that feel out of character. Rage is a common but rarely discussed symptom of perinatal mood disorders.</p>
                    </div>
                </div>

                <h2>More Than the Baby Blues: When to Seek Help</h2>

                <p>The "baby blues" affect most new mothers and fade within about two weeks. It may be time to talk to a therapist if you notice:</p>

                <ul>
                    <li><strong>Sadness or emptiness</strong> that persists past the first two weeks</li>
                    <li><strong>Difficulty bonding</strong> with your baby, or feeling detached and going through the motions</li>
                    <li><strong>Constant worry</strong> about the baby's health or safety that you can't switch off</li>
                    <li><strong>Guilt and shame</strong> — feeling like a bad mother or that your family would be better off without you</li>
                    <li><strong>Sleep problems</strong> beyond the baby's schedule — unable to sleep when you have the chance</li>
                    <li><strong>Loss of interest</strong> in things you used to enjoy, or withdrawing from people</li>
                    <li><strong>Scary intrusive thoughts</strong> about harm coming to the baby</li>
                    <li><strong>Physical symptoms</strong> — appetite changes, exhaustion beyond normal new-parent tiredness</li>
                </ul>

                <div class="callout callout--brand">
                    <p><strong>If you are in crisis or having thoughts of harming yourself or your baby, get help now:</strong> call or text the <strong>988 Suicide &amp; Crisis Lifeline</strong>, or call the free, 24/7 <strong>National Maternal Mental Health Hotline at 1-833-852-6262 (1-833-TLC-MAMA)</strong>.</p>
                </div>

                <h2>How We Treat Postpartum Depression &amp; Anxiety</h2>

                <p>We use evidence-based approaches proven effective for perinatal mood and anxiety disorders:</p>

                <div class="panel">
                    <h3>Cognitive Behavioral Therapy (CBT)</h3>
                    <p>A first-line treatment for PPD and postpartum anxiety. Identify and change the thought patterns fueling guilt, worry, and hopelessness — with practical tools you can use between sessions.</p>

                    <h3>Trauma-Focused Therapy</h3>
                    <p>For birth trauma and pregnancy loss, we use trauma-informed approaches including EMDR to help you process difficult experiences safely.</p>

                    <h3>Support for Identity &amp; Relationship Changes</h3>
                    <p>Motherhood changes your identity, your body, and your relationships. Therapy provides space to process matrescence, partner conflict, and the loss of your pre-baby self.</p>

                    <h3>Coordination With Your Care Team</h3>
                    <p>With your consent, we can coordinate with your OB-GYN, midwife, or primary care provider to make sure your care is connected.</p>
                </div>

                <h2>Why Michigan Moms Choose Healing Therapy Center</h2>

                <ul>
                    <li><strong>Perinatal Specialization:</strong> Therapists specifically trained in perinatal mood and anxiety disorders — not general therapists learning as they go</li>
                    <li><strong>Telehealth That Works for New Moms:</strong> Sessions from your couch, during naps, baby on your lap — completely normal here</li>
                    <li><strong>Evening &amp; Saturday Appointments:</strong> Scheduling that works around feedings and childcare</li>
                    <li><strong>Judgment-Free Care:</strong> Whatever you're feeling or thinking, our therapists have heard it and know how to help</li>
                    <li><strong>Partners Welcome:</strong> Postpartum depression affects the whole family — partners can be part of the process</li>
                    <li><strong>In-Person Option:</strong> Our Dearborn office at 835 Mason St STE D160 welcomes babies at appointments</li>
                </ul>

                <h2>Insurance &amp; Payment</h2>

                <p>Postpartum therapy is covered by most insurance plans:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Insurance Plans Accepted</h3>
                        <ul>
                            <li>Blue Cross Blue Shield Michigan</li>
                            <li>Aetna</li>
                            <li>Priority Health</li>
                            <li>United Healthcare</li>
                            <li>Blue Care Network</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Not Sure About Coverage?</h3>
                        <p>Call us at (313) 654-1915 and we'll verify your benefits before your first appointment, so there are no surprises. Self-pay options are also available.</p>
                    </div>
                </div>

                <h2>Telehealth Postpartum Therapy Across Michigan</h2>

                <p>Getting out of the house with a newborn is hard — so most of our postpartum clients choose telehealth:</p>

                <ul>
                    <li><strong>No Childcare Needed:</strong> Your baby is welcome on screen — feeding, fussing, and all</li>
                    <li><strong>Statewide Access:</strong> Specialist perinatal care whether you're in Detroit, Grand Rapids, Ann Arbor, or the U.P.</li>
                    <li><strong>Flexible Timing:</strong> Book around nap schedules, feedings, and your partner's availability</li>
                    <li><strong>Private &amp; Secure:</strong> HIPAA-compliant video sessions</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>You Deserve to Feel Like Yourself Again</h3>
                    <p>Postpartum depression and anxiety are highly treatable. Most moms start feeling better within weeks of beginning therapy.</p>
                    <p><strong>Telehealth available throughout Michigan</strong> | In-person care in Dearborn | Insurance accepted</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/perinatal-therapy">Perinatal Therapy Services</a></li>
                        <li><a href="/womens-mental-health-therapy-michigan">Women's Mental Health Therapy</a></li>
                        <li><a href="/coping-with-postpartum-depression">Coping With Postpartum Depression: A Guide</a></li>
                        <li><a href="/depression-counseling-michigan">Depression Counseling</a></li>
                        <li><a href="/anxiety-therapy-michigan">Anxiety Therapy</a></li>
                        <li><a href="/insurance">Insurance &amp; Payment Options</a></li>
                    </ul>
                </div>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
