<?php
// Page-specific variables — verbatim from production
$page_title = 'Therapist Grosse Pointe MI | Counseling & Therapy';
$page_description = 'Discreet, licensed therapists serving Grosse Pointe, MI with individual, couples, and family therapy plus ADHD and autism testing. In person in Dearborn or telehealth. Call (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/therapist-grosse-pointe-mi';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy and Counseling for Grosse Pointe, MI Residents',
    'description' => 'Individual therapy, couples counseling, family therapy, and psychological testing for the Grosse Pointe lakeshore communities in Wayne County, in person in Dearborn or via telehealth.',
    'url' => 'https://www.healingtherapycenter.com/therapist-grosse-pointe-mi',
    'areaServed' => ['@type' => 'City', 'name' => 'Grosse Pointe'],
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
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Locations';
    $hero_h1 = 'Licensed Therapist Serving Grosse Pointe, Michigan';
    $hero_lead = "Healing Therapy Center offers discreet, professional mental health care for the Grosse Pointe communities along Lake St. Clair. Whether you prefer in-person sessions at our Dearborn office or secure telehealth from home, our licensed team provides individual therapy, couples counseling, family therapy, and psychological testing with the privacy established families expect.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>The five Grosse Pointes — Park, City, Farms, Shores, and Woods — form a close-knit lakeshore community in eastern Wayne County where discretion and continuity of care matter. Our Dearborn office is a straightforward 30 to 40 minute drive west along I-94, and every service is also available through secure HIPAA-compliant telehealth anywhere in Michigan. We are in network with major commercial plans including Blue Cross Blue Shield Michigan, Aetna, Priority Health, and United Healthcare.</p>

                <div class="callout callout--info">
                    <h3>Convenient &amp; Confidential for Grosse Pointe Residents</h3>
                    <p><strong>Office Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>From Grosse Pointe:</strong> About 30 to 40 minutes — head west on I-94 toward Dearborn, exiting near the Southfield Freeway</p>
                    <p><strong>Telehealth Option:</strong> Private online therapy from your Grosse Pointe home — the same confidential care and insurance coverage as an in-person visit</p>
                    <ul>
                        <li>Evening and weekend appointments for professionals and families</li>
                        <li>Free, low-profile parking at our Dearborn office</li>
                        <li>Secure video sessions with full HIPAA privacy protections</li>
                    </ul>
                </div>

                <h2>Mental Health Services for Grosse Pointe Residents</h2>

                <p>Our clinicians provide comprehensive, confidential care for Grosse Pointe individuals, couples, and families:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Support for anxiety, depression, stress, trauma, grief, and life transitions — delivered with the discretion that established Grosse Pointe professionals and executives value.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples Therapy</h3>
                        <p>Marriage counseling, premarital preparation, and relationship therapy for Grosse Pointe couples addressing communication, intimacy, and long-standing patterns with care and privacy.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Counseling for multigenerational households, parenting concerns, teen challenges, and family transitions — helping established Grosse Pointe families strengthen their bonds.</p>
                    </div>
                    <div class="panel">
                        <h3>ADHD &amp; Autism Testing</h3>
                        <p>Comprehensive psychological evaluations for children, teens, and adults. ADHD assessments, autism screenings, and diagnostic testing covered by most commercial plans.</p>
                    </div>
                </div>

                <h2>Common Concerns We Address for Grosse Pointe Clients</h2>

                <p>Grosse Pointe residents often reach out to us for:</p>

                <ul>
                    <li><strong>Privacy &amp; Discretion</strong> - Executives, physicians, attorneys, and well-known families who want highly confidential care away from their immediate community.</li>
                    <li><strong>Executive &amp; Professional Stress</strong> - Leadership pressure, decision fatigue, and the burden of high expectations at work and at home.</li>
                    <li><strong>Anxiety &amp; Panic</strong> - Generalized anxiety, social anxiety, and panic that interfere with sleep, focus, and daily functioning.</li>
                    <li><strong>Depression</strong> - Major depression, seasonal changes, and a persistent sense of emptiness despite outward success.</li>
                    <li><strong>Relationship &amp; Marital Concerns</strong> - Communication difficulties, infidelity recovery, and preserving long-term partnerships.</li>
                    <li><strong>Family &amp; Legacy Pressures</strong> - Navigating expectations across generations, estate and caregiving stress, and family conflict.</li>
                    <li><strong>Grief &amp; Loss</strong> - Bereavement, complicated grief, and adjusting to major life changes.</li>
                    <li><strong>ADHD &amp; Learning Concerns</strong> - Adults and students seeking evaluation, clarity, and practical support.</li>
                </ul>

                <h2>Insurance Accepted for Grosse Pointe Residents</h2>

                <p>We are in network with the commercial plans most Grosse Pointe families and professionals carry:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Major Insurance Plans</h3>
                        <ul>
                            <li>Blue Cross Blue Shield Michigan</li>
                            <li>Blue Care Network (BCN)</li>
                            <li>Priority Health</li>
                            <li>Aetna</li>
                            <li>United Healthcare</li>
                            <li>HAP (Health Alliance Plan)</li>
                            <li>McLaren Health Plan</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Payment Options</h3>
                        <ul>
                            <li>Insurance billing (we handle claims)</li>
                            <li>Self-pay options available</li>
                            <li>Payment plans if needed</li>
                            <li>HSA/FSA accepted</li>
                        </ul>
                        <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify your insurance benefits.</strong></p>
                    </div>
                </div>

                <h2>Meet Our Therapists</h2>

                <p>Grosse Pointe clients work with a discreet team of licensed clinicians offering a range of specialties:</p>

                <ul>
                    <li><strong>Dr. Nadia Habhab, PhD, LP</strong> - Licensed Psychologist specializing in anxiety, depression, trauma, and psychological testing</li>
                    <li><strong>Tiffany Murray, LMSW</strong> - Licensed Master Social Worker providing individual and couples therapy</li>
                    <li><strong>Amal Ayad, MA</strong> - Life Coach &amp; Therapist focused on life transitions and stress management</li>
                    <li><strong>Malak Wehbe, TLLP</strong> - Licensed Therapist working with anxiety and depression</li>
                    <li><strong>Donna Majed, TLLP</strong> - Licensed Therapist providing therapy and testing support</li>
                </ul>

                <p><a href="/therapists">Learn more about our therapists →</a></p>

                <h2>Why Grosse Pointe Residents Choose Healing Therapy Center</h2>

                <ul>
                    <li><strong>Discreet Care:</strong> Confidential, HIPAA-compliant therapy outside your immediate lakeshore community</li>
                    <li><strong>Licensed Professionals:</strong> A PhD psychologist and licensed therapists with deep clinical experience</li>
                    <li><strong>Insurance Accepted:</strong> In network with most major commercial plans for lower out-of-pocket costs</li>
                    <li><strong>Telehealth Available:</strong> Secure online therapy so you can meet privately from your Grosse Pointe home</li>
                    <li><strong>Evening &amp; Weekend Hours:</strong> Flexible scheduling for demanding professional and family calendars</li>
                    <li><strong>Convenient Access:</strong> A 30 to 40 minute drive west on I-94 to our Dearborn office</li>
                    <li><strong>Experienced with Established Clientele:</strong> We understand the pressures facing accomplished professionals and multigenerational families</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule Your Appointment</h3>
                    <p><strong>Serving the Grosse Pointe Lakeshore Communities</strong></p>
                    <p><strong>Office:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (30 to 40 min from Grosse Pointe)</p>
                    <p><strong>Telehealth:</strong> Secure online therapy throughout Michigan</p>
                    <p>We accept Blue Cross Blue Shield, Aetna, Priority Health, United Healthcare, and most major commercial plans.</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/couples-therapy">Couples &amp; Marriage Counseling</a></li>
                        <li><a href="/adhd-testing-evaluation">ADHD Testing &amp; Evaluation</a></li>
                        <li><a href="/insurance">Insurance Plans Accepted</a></li>
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
