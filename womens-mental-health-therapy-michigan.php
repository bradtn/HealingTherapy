<?php
// Page-specific variables
$page_title = 'Therapy for Women in Michigan | Women\'s Mental Health';
$page_description = 'Women\'s mental health therapy in Michigan for anxiety, depression, postpartum, life transitions, and burnout. In Dearborn or telehealth statewide.';
$canonical_url = 'https://www.healingtherapycenter.com/womens-mental-health-therapy-michigan';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => "Women's Mental Health Therapy in Michigan",
    'description' => "Therapy for women in Michigan addressing anxiety, depression, postpartum mental health, burnout, life transitions, and the pressures facing working mothers and professional women. In-person in Dearborn and telehealth statewide.",
    'url' => 'https://www.healingtherapycenter.com/womens-mental-health-therapy-michigan',
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
$current_service = 'individual';

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
    $hero_h1 = 'Mental Health Care for Women at Every Stage of Life';
    $hero_lead = "Healing Therapy Center provides therapy designed around the realities of women's lives — the invisible workload, the career pressure, the hormonal transitions, the expectation to hold everything together. Our clinicians specialize in women's mental health, with in-person care in Dearborn and telehealth throughout Michigan.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Women are nearly twice as likely as men to experience anxiety and depression, yet many put off getting help because everyone else's needs come first. Whether you're a new mom, a professional carrying a demanding career, a caregiver stretched thin, or simply not feeling like yourself, therapy gives you one hour that is entirely yours.</p>

                <div class="callout">
                    <h3>Care Designed for Women</h3>
                    <ul>
                        <li><strong>Women's Mental Health Specialists:</strong> <a href="/donna-majed">Donna Majed, TLLP</a> specializes in women's mental health; <a href="/dr-tiffany-murray">Tiffany Murray, LMSW</a> is trained in perinatal mood and anxiety disorders</li>
                        <li><strong>Flexible Scheduling:</strong> Evening and Saturday appointments around work and family</li>
                        <li><strong>Insurance Accepted:</strong> Blue Cross Blue Shield, Aetna, Priority Health, United Healthcare</li>
                        <li><strong>Telehealth Statewide:</strong> Private sessions from home, anywhere in Michigan</li>
                    </ul>
                    <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a></strong> to schedule your first appointment.</p>
                </div>

                <h2>What We Help Women With</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Anxiety &amp; Overwhelm</h3>
                        <p>Racing thoughts, constant worry, perfectionism, and the mental load of managing everyone's schedules, needs, and emotions. Learn to quiet the noise without dropping the ball.</p>
                    </div>
                    <div class="panel">
                        <h3>Depression &amp; Mood Changes</h3>
                        <p>Persistent sadness, numbness, irritability, or exhaustion — including mood changes tied to hormonal transitions like the postpartum period and perimenopause.</p>
                    </div>
                    <div class="panel">
                        <h3>Motherhood &amp; Postpartum</h3>
                        <p>Postpartum depression and anxiety, birth trauma, fertility struggles, pregnancy loss, and the identity shift of becoming a mother. See our dedicated <a href="/postpartum-depression-therapy-michigan">postpartum depression therapy</a> page.</p>
                    </div>
                    <div class="panel">
                        <h3>Life Transitions &amp; Identity</h3>
                        <p>Divorce, empty nest, career changes, caregiving for aging parents, and seasons where you no longer recognize yourself. Rediscover who you are beyond your roles.</p>
                    </div>
                </div>

                <h2>Common Concerns We See</h2>

                <ul>
                    <li><strong>Perfectionism &amp; People-Pleasing</strong> - Chronic self-criticism, difficulty saying no, and measuring your worth by what you do for others</li>
                    <li><strong>Burnout &amp; the Mental Load</strong> - Exhaustion from carrying the invisible work of home, family, and career simultaneously</li>
                    <li><strong>Caregiver Strain</strong> - The "sandwich generation" squeeze of raising children while caring for aging parents</li>
                    <li><strong>Relationship Concerns</strong> - Feeling unseen or unsupported by a partner, resentment, communication breakdown</li>
                    <li><strong>Body Image &amp; Self-Esteem</strong> - A critical inner voice about your body, appearance, or worth</li>
                    <li><strong>Grief &amp; Loss</strong> - Including losses that often go unacknowledged, like miscarriage and infertility</li>
                    <li><strong>Trauma</strong> - Past experiences that still shape how safe you feel today, treated with trauma-informed care including EMDR</li>
                    <li><strong>Sleep Problems</strong> - Lying awake replaying the day or planning tomorrow while everyone else sleeps</li>
                </ul>

                <h2>For Working Mothers &amp; Professional Women</h2>

                <p>Many of our clients are women carrying demanding careers alongside everything else — physicians, attorneys, business owners, and executives. The pressure to excel at work while remaining the default parent at home is a distinct kind of stress, and it deserves care that understands both halves.</p>

                <p>We help professional women manage imposter syndrome, workplace stress, guilt about working (or guilt about not working more), and the feeling that succeeding at everything means enjoying none of it. Women in leadership roles may also find our <a href="/executive-stress-therapy-michigan">executive stress therapy</a> services relevant — completely confidential, with telehealth that fits a full calendar.</p>

                <h2>Our Approach to Women's Mental Health</h2>

                <div class="panel">
                    <h3>Cognitive Behavioral Therapy (CBT)</h3>
                    <p>Challenge the inner critic, perfectionism, and anxious thought spirals with practical, evidence-based tools.</p>

                    <h3>Trauma-Informed Care &amp; EMDR</h3>
                    <p>Process past experiences — including birth trauma and relationship trauma — at a pace that feels safe.</p>

                    <h3>Perinatal Mental Health</h3>
                    <p>Specialized treatment for postpartum depression, postpartum anxiety, and mood changes during pregnancy from clinicians trained in perinatal mood and anxiety disorders.</p>

                    <h3>Boundary &amp; Identity Work</h3>
                    <p>Learn to set boundaries without guilt, ask for support, and reconnect with the person underneath all the roles you play.</p>
                </div>

                <h2>Why Michigan Women Choose Us</h2>

                <ul>
                    <li><strong>Specialized Clinical Team:</strong> Therapists whose listed specialties include women's mental health and perinatal care — see <a href="/therapists">our therapists</a></li>
                    <li><strong>You Pick the Format:</strong> In-person at our Dearborn office (835 Mason St STE D160) or telehealth from anywhere in Michigan</li>
                    <li><strong>Scheduling That Respects Your Load:</strong> Evening and Saturday appointments</li>
                    <li><strong>Insurance Accepted:</strong> BCBS, Aetna, Priority Health, United Healthcare, Blue Care Network</li>
                    <li><strong>Whole-Person Care:</strong> We treat you, not just a diagnosis — including how hormones, relationships, and workload interact with mood</li>
                </ul>

                <h2>Insurance &amp; Payment</h2>

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
                        <h3>Benefits Check Before You Start</h3>
                        <p>Call (313) 654-1915 and we'll verify your coverage before your first session. Self-pay options are available if you prefer not to use insurance.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Take One Hour Back for Yourself</h3>
                    <p>You spend your days taking care of everyone else. Therapy is where someone takes care of you.</p>
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
                        <li><a href="/postpartum-depression-therapy-michigan">Postpartum Depression Therapy</a></li>
                        <li><a href="/perinatal-therapy">Perinatal Therapy Services</a></li>
                        <li><a href="/anxiety-therapy-michigan">Anxiety Therapy</a></li>
                        <li><a href="/depression-counseling-michigan">Depression Counseling</a></li>
                        <li><a href="/executive-stress-therapy-michigan">Executive Stress Therapy</a></li>
                        <li><a href="/couples-therapy">Couples Therapy</a></li>
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
