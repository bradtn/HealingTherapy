<?php
// Page-specific variables — verbatim from production
$page_title = 'Premarital Counseling Michigan | Marriage Prep Therapy';
$page_description = 'Premarital counseling for engaged couples in Dearborn and across Michigan. Build communication and conflict skills before marriage. Insurance accepted.';
$canonical_url = 'https://www.healingtherapycenter.com/premarital-counseling-michigan';

require_once dirname(__DIR__) . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Premarital Counseling in Michigan',
    'description' => 'Premarital counseling for engaged couples in Michigan covering communication, conflict resolution, finances, family expectations, intimacy, and life goals. Gottman Method and EFT techniques, in person in Dearborn or via telehealth.',
    'url' => 'https://www.healingtherapycenter.com/premarital-counseling-michigan',
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
$current_service = 'couples';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Specialized Care';
    $hero_h1 = 'Premarital Counseling for Michigan Engaged Couples';
    $hero_lead = "Healing Therapy Center provides professional premarital counseling for engaged couples in Metro Detroit. Our licensed therapists help you build a strong foundation for marriage by addressing communication, finances, conflict resolution, and expectations before you walk down the aisle.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Whether you're planning a wedding in Dearborn, Detroit, Troy, Birmingham, or anywhere in Michigan, our evidence-based premarital counseling program helps couples start their marriage with clarity, confidence, and essential relationship skills. We accept most major insurance plans for couples therapy when addressing mental health concerns.</p>

                <div class="callout">
                    <h3>Invest in Your Marriage Before It Begins</h3>
                    <ul>
                        <li><strong>Evidence-Based Approach:</strong> Proven methods to strengthen relationships</li>
                        <li><strong>Licensed Therapists:</strong> Experienced in premarital and couples counseling</li>
                        <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments available</li>
                        <li><strong>Insurance May Cover:</strong> When addressing anxiety, stress, or mental health concerns</li>
                        <li><strong>Telehealth Available:</strong> Online sessions for busy couples</li>
                    </ul>
                    <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a></strong> to schedule premarital counseling.</p>
                </div>

                <h2>What We Cover in Premarital Counseling</h2>

                <p>Our comprehensive premarital counseling program addresses key areas that predict marital success:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Communication Skills</h3>
                        <p>Learn effective communication techniques, active listening, and how to express needs without criticism or defensiveness.</p>
                    </div>
                    <div class="panel">
                        <h3>Conflict Resolution</h3>
                        <p>Develop healthy ways to handle disagreements, manage conflict productively, and repair after arguments.</p>
                    </div>
                    <div class="panel">
                        <h3>Financial Planning</h3>
                        <p>Discuss money values, spending habits, debt, savings goals, and how to make financial decisions as a team.</p>
                    </div>
                    <div class="panel">
                        <h3>Family &amp; In-Laws</h3>
                        <p>Navigate family expectations, holiday traditions, boundaries with in-laws, and blending family cultures.</p>
                    </div>
                    <div class="panel">
                        <h3>Intimacy &amp; Connection</h3>
                        <p>Discuss sexual expectations, emotional intimacy, maintaining romance, and keeping your connection strong.</p>
                    </div>
                    <div class="panel">
                        <h3>Life Goals &amp; Values</h3>
                        <p>Align on major life decisions: children, careers, where to live, religion, and long-term goals.</p>
                    </div>
                </div>

                <h2>Why Premarital Counseling Matters</h2>

                <p>Research shows that couples who complete premarital counseling have:</p>

                <ul>
                    <li><strong>30% Higher Marital Satisfaction</strong> - Couples report greater happiness and satisfaction in marriage</li>
                    <li><strong>Reduced Divorce Risk</strong> - Premarital counseling reduces divorce risk by up to 30%</li>
                    <li><strong>Better Communication</strong> - Learn skills that last a lifetime, not just during the honeymoon phase</li>
                    <li><strong>Fewer Surprises</strong> - Discuss difficult topics before they become problems</li>
                    <li><strong>Stronger Foundation</strong> - Build a marriage based on realistic expectations and shared values</li>
                </ul>

                <h2>Who Should Consider Premarital Counseling</h2>

                <p>Premarital counseling is valuable for all engaged couples, especially if you:</p>

                <ul>
                    <li><strong>Are Recently Engaged</strong> - Start your marriage preparation early with a strong foundation</li>
                    <li><strong>Have Different Backgrounds</strong> - Navigate cultural, religious, or family differences</li>
                    <li><strong>Disagree on Major Issues</strong> - Work through differences about money, children, careers, or values</li>
                    <li><strong>Come from Divorced Families</strong> - Learn healthy relationship patterns if you didn't see them modeled</li>
                    <li><strong>Are Blending Families</strong> - Navigate stepparenting and co-parenting challenges</li>
                    <li><strong>Feel Anxious About Marriage</strong> - Address fears and concerns before the wedding</li>
                    <li><strong>Want to Prevent Problems</strong> - Be proactive rather than reactive about your relationship</li>
                </ul>

                <h2>Our Premarital Counseling Format</h2>

                <div class="panel">
                    <h3>Flexible Programs</h3>
                    <p>Choose 4-8 sessions based on your needs and wedding timeline. We customize the program to your relationship.</p>

                    <h3>Assessment Tools</h3>
                    <p>Complete relationship assessments to identify strengths and areas for growth.</p>

                    <h3>Evidence-Based Methods</h3>
                    <p>We use proven approaches including Gottman Method and Emotionally Focused Therapy (EFT) techniques.</p>

                    <h3>Take-Home Skills</h3>
                    <p>Learn practical tools you'll use throughout your marriage, not just during counseling.</p>
                </div>

                <h2>Insurance &amp; Payment for Premarital Counseling</h2>

                <p>Insurance coverage for premarital counseling varies by plan:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>When Insurance May Cover</h3>
                        <p>Many insurance plans cover couples therapy when one or both partners have a diagnosed mental health condition (anxiety, depression, stress). We'll verify your benefits and help maximize coverage.</p>
                    </div>
                    <div class="panel">
                        <h3>Self-Pay Options</h3>
                        <p>If insurance doesn't cover premarital counseling, we offer competitive self-pay rates. Think of it as an investment in your marriage - much less than the cost of a wedding dress or venue.</p>
                    </div>
                </div>

                <p>We accept Blue Cross Blue Shield, Aetna, Priority Health, United Healthcare, HAP, and other major Michigan insurance plans. Call to verify your specific coverage.</p>

                <h2>Why Michigan Couples Choose Us</h2>

                <ul>
                    <li><strong>Licensed Professionals:</strong> PhD psychologist and licensed therapists with couples therapy expertise</li>
                    <li><strong>Evidence-Based Methods:</strong> We use proven approaches, not generic advice</li>
                    <li><strong>Judgment-Free Space:</strong> All couples and backgrounds welcome</li>
                    <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments for busy couples</li>
                    <li><strong>Telehealth Available:</strong> Online sessions if you prefer remote counseling</li>
                    <li><strong>Convenient Dearborn Location:</strong> Easy access from Detroit, Livonia, Troy, Birmingham, Ann Arbor</li>
                    <li><strong>Results-Oriented:</strong> Practical skills you'll use for a lifetime</li>
                </ul>

                <h2>Telehealth Premarital Counseling</h2>

                <p>Many engaged couples prefer telehealth for premarital counseling:</p>

                <ul>
                    <li><strong>Convenient:</strong> Attend from your home - no driving to appointments</li>
                    <li><strong>Comfortable Setting:</strong> Have important conversations in a familiar, private space</li>
                    <li><strong>Fits Busy Schedules:</strong> Easier to schedule around work and wedding planning</li>
                    <li><strong>Same Quality Care:</strong> Telehealth couples therapy is just as effective as in-person</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Start Your Marriage Strong</h3>
                    <p><strong>Call (313) 654-1915 to schedule premarital counseling</strong></p>
                    <p>Invest in your future together with professional premarital counseling.</p>
                    <p><strong>Healing Therapy Center</strong> | Dearborn, MI | Telehealth throughout Michigan</p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/couples-therapy">Couples &amp; Marriage Therapy</a></li>
                        <li><a href="/individual-therapy">Individual Therapy</a></li>
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
