<?php
// Page-specific variables — verbatim from production
$page_title = 'Therapist Novi MI | Counseling & Therapy';
$page_description = 'Licensed therapists serving Novi, MI with individual, couples, and family therapy plus testing. Telehealth statewide. Call (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/therapist-novi-mi';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy and Counseling for Novi, MI Residents',
    'description' => 'Individual therapy, couples counseling, family therapy, and psychological testing for Novi, MI residents and Oakland County families, in person in Dearborn or via secure telehealth.',
    'url' => 'https://www.healingtherapycenter.com/therapist-novi-mi',
    'areaServed' => ['@type' => 'City', 'name' => 'Novi'],
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
    $hero_h1 = 'Licensed Therapist Serving Novi, Michigan';
    $hero_lead = "Healing Therapy Center provides professional mental health services for Novi, MI residents and the growing families of western Oakland County. Our licensed therapists offer individual therapy, couples counseling, family therapy, and psychological testing, available in person in Dearborn or through secure telehealth right from your Novi home &mdash; with an easy drive down the I-96 corridor when you prefer to visit in person.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Novi has grown into one of Metro Detroit's most dynamic communities &mdash; home to tech and retail employers, dual-career families, and the constant motion of life around Twelve Oaks Mall and the I-96 corridor. That pace can take a toll. From our Dearborn office, an easy 30&ndash;35 minute drive via I-96 East to the Southfield Freeway (M-39) South, we help Novi residents slow down, reset, and get the support they need &mdash; and our secure telehealth option makes therapy simple to fit into a busy week without any commute at all.</p>

                <div class="callout callout--info">
                    <h3>Convenient for Novi Residents</h3>
                    <p><strong>Office Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>From Novi:</strong> About 30&ndash;35 minutes via I-96 East to the Southfield Freeway (M-39) South &mdash; a direct route in from the Twelve Oaks and Novi Rd area</p>
                    <p><strong>Telehealth Option:</strong> Online therapy from your Novi home &mdash; same insurance coverage</p>
                    <ul>
                        <li>Evening and weekend appointments for busy, growing families</li>
                        <li>Free, easy parking at our Dearborn office</li>
                        <li>Secure telehealth for commuters and dual-career households</li>
                    </ul>
                </div>

                <h2>Mental Health Services for Novi Residents</h2>

                <p>We provide comprehensive mental health care for Novi, MI individuals and families:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Treatment for anxiety, depression, stress, trauma, grief, and life transitions. We help Novi's tech, retail, and corporate professionals manage workload, commute fatigue, and work-life balance.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples Therapy</h3>
                        <p>Marriage counseling, premarital counseling, and relationship therapy. Strengthen communication and connection when two demanding schedules and a growing household leave little time for each other.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Family counseling for parenting challenges, teen issues, and family dynamics. Support for Novi families adjusting to fast neighborhood growth, new schools, and blended households.</p>
                    </div>
                    <div class="panel">
                        <h3>ADHD &amp; Autism Testing</h3>
                        <p>Comprehensive psychological testing for children and adults. ADHD evaluations, autism assessments, and diagnostic testing covered by most insurance plans.</p>
                    </div>
                </div>

                <h2>Common Concerns We Address for Novi Clients</h2>

                <p>Novi residents often seek therapy for:</p>

                <ul>
                    <li><strong>Work &amp; Commute Stress</strong> - Long days at Novi's tech and retail employers, plus corridor traffic, add up. We help with stress management, burnout prevention, and balance.</li>
                    <li><strong>Dual-Career Household Pressure</strong> - Couples juggling two careers, childcare, and a fast-moving calendar struggling to stay connected.</li>
                    <li><strong>Anxiety &amp; Panic Attacks</strong> - Generalized anxiety, social anxiety, panic disorder, and health anxiety affecting daily functioning.</li>
                    <li><strong>Depression</strong> - Major depression, seasonal depression, postpartum depression, and persistent low mood.</li>
                    <li><strong>Relationship Issues</strong> - Marriage problems, communication breakdowns, infidelity recovery, and premarital concerns.</li>
                    <li><strong>Parenting &amp; Teen Challenges</strong> - Novi parents navigating school transitions, teen behavior, and academic pressure in a fast-growing district.</li>
                    <li><strong>Life Transitions</strong> - Relocation to a new subdivision, job changes, divorce, and adjusting to a rapidly changing community.</li>
                    <li><strong>ADHD in Adults &amp; Children</strong> - Novi families seeking comprehensive ADHD evaluations and practical treatment strategies.</li>
                </ul>

                <h2>Insurance Accepted for Novi Residents</h2>

                <p>We accept most major commercial insurance plans commonly used by Novi professionals and families:</p>

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

                <p>Our team includes licensed professionals experienced in serving Oakland County and Novi residents:</p>

                <ul>
                    <li><strong>Dr. Nadia Habhab, PhD, LP</strong> - Licensed Psychologist specializing in anxiety, depression, trauma, and psychological testing</li>
                    <li><strong>Tiffany Murray, LMSW</strong> - Licensed Master Social Worker providing individual and couples therapy</li>
                    <li><strong>Amal Ayad, MA</strong> - Life Coach &amp; Therapist specializing in life transitions and stress management</li>
                    <li><strong>Malak Wehbe, TLLP</strong> - Licensed Therapist working with anxiety and depression</li>
                    <li><strong>Donna Majed, TLLP</strong> - Licensed Therapist providing therapy and testing services</li>
                </ul>

                <p><a href="/therapists">Learn more about our therapists &rarr;</a></p>

                <h2>Why Novi Residents Choose Healing Therapy Center</h2>

                <ul>
                    <li><strong>Licensed Professionals:</strong> A PhD psychologist and licensed therapists with extensive experience</li>
                    <li><strong>Insurance Accepted:</strong> In-network with most major commercial plans &mdash; lower out-of-pocket costs</li>
                    <li><strong>Telehealth Available:</strong> Secure online therapy &mdash; no need to drive in from Novi</li>
                    <li><strong>Evening &amp; Weekend Hours:</strong> Flexible scheduling for busy Novi professionals and families</li>
                    <li><strong>Convenient Access:</strong> An easy 30&ndash;35 minute drive via I-96 and M-39 to our Dearborn office</li>
                    <li><strong>Experienced with Families:</strong> We understand the pressures on Novi's growing, dual-career households</li>
                    <li><strong>Confidential Care:</strong> HIPAA-compliant, private therapy in a professional setting</li>
                </ul>

                <h2>Telehealth Therapy - Perfect for Busy Novi Families</h2>

                <p>Between work, the commute, and the kids' schedules, many Novi residents prefer telehealth therapy:</p>

                <ul>
                    <li><strong>No Commute:</strong> Attend therapy from your Novi home or office &mdash; skip the I-96 drive</li>
                    <li><strong>Lunch Break Sessions:</strong> Schedule therapy during your workday without leaving your desk</li>
                    <li><strong>Same Insurance Coverage:</strong> Most plans cover telehealth at the same copay as in-person visits</li>
                    <li><strong>Secure &amp; Private:</strong> HIPAA-compliant video platform ensures confidentiality</li>
                    <li><strong>Evening Appointments:</strong> After-work sessions from the comfort of home</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule Your Appointment</h3>
                    <p><strong>Serving Novi, MI &amp; Oakland County</strong></p>
                    <p><strong>Office:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (about 30&ndash;35 min from Novi)</p>
                    <p><strong>Telehealth:</strong> Secure online therapy throughout Michigan</p>
                    <p>We accept Blue Cross, Aetna, Priority Health, United Healthcare, and most major insurance plans.</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment &rarr;</a>
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
