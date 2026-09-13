<?php
// Page-specific variables — verbatim from production
$page_title = 'Therapist Northville MI | Counseling & Therapy';
$page_description = 'Licensed therapists serving Northville, MI with individual, couples, and family therapy plus ADHD and autism testing. In person in Dearborn or telehealth. Call (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/therapist-northville-mi';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy and Counseling for Northville, MI Residents',
    'description' => 'Individual therapy, couples counseling, family therapy, and psychological testing for Northville, MI residents and families on the Wayne and Oakland county border, in person in Dearborn or via telehealth.',
    'url' => 'https://www.healingtherapycenter.com/therapist-northville-mi',
    'areaServed' => ['@type' => 'City', 'name' => 'Northville'],
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
    $hero_h1 = 'Licensed Therapist Serving Northville, Michigan';
    $hero_lead = "Healing Therapy Center supports Northville, MI families and professionals with warm, evidence-based mental health care. Choose in-person sessions at our Dearborn office or secure telehealth from anywhere in Michigan — including individual therapy, couples counseling, family therapy, and psychological testing.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Northville sits right on the Wayne and Oakland county line, and its historic downtown and professional households deserve care that fits busy lives. Our Dearborn practice is an easy 25 to 30 minute drive from Northville, and every service we offer in person is also available through secure HIPAA-compliant telehealth throughout Michigan. We work with commercial insurance plans including Blue Cross Blue Shield Michigan, Priority Health, Aetna, and United Healthcare.</p>

                <div class="callout callout--info">
                    <h3>Convenient for Northville Residents</h3>
                    <p><strong>Office Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>From Northville:</strong> Roughly 25 to 30 minutes — take I-275 South to I-96/M-14, then follow the Southfield Freeway toward Dearborn</p>
                    <p><strong>Telehealth Option:</strong> Private online therapy from your Northville home, office, or Cabbagetown-area studio — same insurance coverage as in-person visits</p>
                    <ul>
                        <li>Evening and weekend appointments for working professionals</li>
                        <li>Free on-site parking at our Dearborn office</li>
                        <li>Secure video sessions that fit around school pickups and commutes</li>
                    </ul>
                </div>

                <h2>Mental Health Services for Northville Residents</h2>

                <p>Our clinicians provide comprehensive care for Northville individuals, couples, and families:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Support for anxiety, depression, burnout, trauma, grief, and major life changes. We help Northville professionals balance demanding careers with family life and personal wellbeing.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples Therapy</h3>
                        <p>Marriage counseling, premarital work, and relationship therapy for Northville couples navigating communication, connection, and rebuilding trust with proven, structured approaches.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Counseling for parenting questions, teen concerns, blended-family dynamics, and household transitions — helping Northville families communicate and reconnect.</p>
                    </div>
                    <div class="panel">
                        <h3>ADHD &amp; Autism Testing</h3>
                        <p>Thorough psychological evaluations for children, teens, and adults. ADHD assessments, autism screenings, and diagnostic testing covered by most commercial plans.</p>
                    </div>
                </div>

                <h2>Common Concerns We Address for Northville Clients</h2>

                <p>Northville residents often reach out to us for:</p>

                <ul>
                    <li><strong>High-Achiever Burnout</strong> - Professionals and small-business owners in Northville's downtown corridor managing overwork, perfectionism, and chronic stress.</li>
                    <li><strong>Anxiety &amp; Overwhelm</strong> - Generalized anxiety, social anxiety, and panic that get in the way of daily life and sleep.</li>
                    <li><strong>Depression &amp; Low Mood</strong> - Major depression, seasonal changes, and persistent feelings of emptiness or fatigue.</li>
                    <li><strong>Parenting &amp; Academic Pressure</strong> - Northville families supporting high-performing students through school stress, expectations, and anxiety.</li>
                    <li><strong>Relationship Strain</strong> - Communication breakdowns, drifting apart, infidelity recovery, and premarital preparation.</li>
                    <li><strong>Life Transitions</strong> - Career shifts, relocation to or from the Northville area, divorce, and the empty-nest adjustment.</li>
                    <li><strong>Grief &amp; Loss</strong> - Processing the loss of a loved one, a marriage, or a chapter of life.</li>
                    <li><strong>ADHD &amp; Attention Concerns</strong> - Adults and children seeking clarity, evaluation, and practical strategies.</li>
                </ul>

                <h2>Insurance Accepted for Northville Residents</h2>

                <p>We are in network with the commercial plans most Northville families and professionals carry:</p>

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

                <p>Northville clients work with a team of licensed clinicians offering a range of specialties:</p>

                <ul>
                    <li><strong>Dr. Nadia Habhab, PhD, LP</strong> - Licensed Psychologist specializing in anxiety, depression, trauma, and psychological testing</li>
                    <li><strong>Tiffany Murray, LMSW</strong> - Licensed Master Social Worker providing individual and couples therapy</li>
                    <li><strong>Amal Ayad, MA</strong> - Life Coach &amp; Therapist focused on life transitions and stress management</li>
                    <li><strong>Malak Wehbe, TLLP</strong> - Licensed Therapist working with anxiety and depression</li>
                    <li><strong>Donna Majed, TLLP</strong> - Licensed Therapist providing therapy and testing support</li>
                </ul>

                <p><a href="/therapists">Learn more about our therapists →</a></p>

                <h2>Why Northville Residents Choose Healing Therapy Center</h2>

                <ul>
                    <li><strong>Licensed Professionals:</strong> A PhD psychologist and licensed therapists with broad clinical experience</li>
                    <li><strong>Insurance Accepted:</strong> In network with most major commercial plans for lower out-of-pocket costs</li>
                    <li><strong>Telehealth Available:</strong> Secure online therapy so there is no need to leave Northville</li>
                    <li><strong>Evening &amp; Weekend Hours:</strong> Flexible scheduling built around demanding professional and family calendars</li>
                    <li><strong>Convenient Access:</strong> A straightforward 25 to 30 minute drive via I-275 and M-14 to our Dearborn office</li>
                    <li><strong>Discreet, Professional Setting:</strong> Private, HIPAA-compliant care in a comfortable, confidential environment</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule Your Appointment</h3>
                    <p><strong>Serving Northville, MI &amp; the Wayne/Oakland County Border</strong></p>
                    <p><strong>Office:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (25 to 30 min from Northville)</p>
                    <p><strong>Telehealth:</strong> Secure online therapy throughout Michigan</p>
                    <p>We accept Blue Cross Blue Shield, Priority Health, Aetna, United Healthcare, and most major commercial plans.</p>
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
