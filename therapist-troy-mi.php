<?php
// Page-specific variables — verbatim from production
$page_title = 'Therapist Troy MI | Mental Health Counseling & Therapy';
$page_description = 'Licensed therapists serving Troy, MI with individual, couples, and family therapy plus ADHD testing. BCBS, Aetna, and Priority Health accepted.';
$canonical_url = 'https://www.healingtherapycenter.com/therapist-troy-mi';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy and Counseling for Troy, MI Residents',
    'description' => 'Individual therapy, couples counseling, family therapy, and psychological testing for Troy, MI residents and Oakland County families, in person in Dearborn or via telehealth.',
    'url' => 'https://www.healingtherapycenter.com/therapist-troy-mi',
    'areaServed' => ['@type' => 'City', 'name' => 'Troy'],
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
    $hero_h1 = 'Licensed Therapist Serving Troy, Michigan';
    $hero_lead = "Healing Therapy Center provides professional mental health services for Troy, MI residents and Oakland County families. Our licensed therapists offer individual therapy, couples counseling, family therapy, and psychological testing with convenient access from Troy via I-75.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Located in Dearborn (25 minutes from Troy), we serve professionals, families, and individuals throughout Metro Detroit with both in-person therapy and telehealth options. We accept most major insurance plans including Blue Cross Blue Shield, Aetna, Priority Health, and United Healthcare.</p>

                <div class="callout callout--info">
                    <h3>Convenient for Troy Residents</h3>
                    <p><strong>Office Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>From Troy:</strong> 25 minutes via I-75 South to I-94 West</p>
                    <p><strong>Telehealth Option:</strong> Online therapy from your Troy home - same insurance coverage</p>
                    <ul>
                        <li>Evening and weekend appointments available</li>
                        <li>Free parking at our Dearborn office</li>
                        <li>Secure telehealth for busy professionals</li>
                    </ul>
                </div>

                <h2>Mental Health Services for Troy Residents</h2>

                <p>We provide comprehensive mental health care for Troy, MI individuals and families:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Treatment for anxiety, depression, stress, trauma, grief, and life transitions. We help Troy professionals manage work stress, career transitions, and work-life balance challenges.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples Therapy</h3>
                        <p>Marriage counseling, premarital counseling, and relationship therapy. Address communication issues, intimacy concerns, and relationship conflicts with evidence-based approaches.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Family counseling for parenting challenges, teen issues, and family dynamics. Help your Troy family improve communication and resolve conflicts.</p>
                    </div>
                    <div class="panel">
                        <h3>ADHD &amp; Autism Testing</h3>
                        <p>Comprehensive psychological testing for children and adults. ADHD evaluations, autism assessments, and diagnostic testing covered by most insurance plans.</p>
                    </div>
                </div>

                <h2>Common Concerns We Address for Troy Clients</h2>

                <p>Troy residents often seek therapy for:</p>

                <ul>
                    <li><strong>Work Stress &amp; Career Pressure</strong> - Troy's automotive and tech professionals face high-pressure environments. We help with stress management, burnout prevention, and work-life balance.</li>
                    <li><strong>Executive &amp; Leadership Stress</strong> - Managers and executives dealing with leadership challenges, decision fatigue, and organizational pressures.</li>
                    <li><strong>Anxiety &amp; Panic Attacks</strong> - Generalized anxiety, social anxiety, panic disorder, and health anxiety affecting daily functioning.</li>
                    <li><strong>Depression</strong> - Major depression, seasonal depression, postpartum depression, and persistent low mood.</li>
                    <li><strong>Relationship Issues</strong> - Marriage problems, communication breakdowns, infidelity recovery, and premarital concerns.</li>
                    <li><strong>Parenting Challenges</strong> - Troy parents seeking help with teen behavior, school stress, and parent-child conflict.</li>
                    <li><strong>Life Transitions</strong> - Job changes, relocation, divorce, empty nest, and retirement adjustment.</li>
                    <li><strong>ADHD in Adults &amp; Children</strong> - Troy families seeking comprehensive ADHD evaluations and treatment strategies.</li>
                </ul>

                <h2>Insurance Accepted for Troy Residents</h2>

                <p>We accept most major insurance plans commonly used by Troy professionals and families:</p>

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

                <h2>Meet Our Troy-Area Therapists</h2>

                <p>Our team includes licensed professionals with experience serving Oakland County and Troy residents:</p>

                <ul>
                    <li><strong>Dr. Nadia Habhab, PhD, LP</strong> - Licensed psychologist specializing in anxiety, depression, trauma, and psychological testing</li>
                    <li><strong>Tiffany Murray, LMSW</strong> - Licensed therapist providing individual and couples therapy</li>
                    <li><strong>Amal Ayad, LLMSW</strong> - Limited licensed therapist specializing in life transitions and stress management</li>
                    <li><strong>Malak Wehbe, LLMSW</strong> - Limited licensed therapist working with anxiety and depression</li>
                    <li><strong>Donna Majed, TLLP</strong> - Limited licensed psychologist providing therapy and testing services</li>
                </ul>

                <p><a href="/therapists">Learn more about our therapists →</a></p>

                <h2>Why Troy Residents Choose Healing Therapy Center</h2>

                <ul>
                    <li><strong>Licensed Professionals:</strong> PhD psychologist and licensed therapists with extensive experience</li>
                    <li><strong>Insurance Accepted:</strong> In-network with most major plans - lower out-of-pocket costs</li>
                    <li><strong>Telehealth Available:</strong> Secure online therapy - no need to drive from Troy</li>
                    <li><strong>Evening &amp; Weekend Hours:</strong> Flexible scheduling for busy Troy professionals and families</li>
                    <li><strong>Convenient Access:</strong> Easy 25-minute drive from Troy via I-75 to our Dearborn office</li>
                    <li><strong>Experienced with Professionals:</strong> We understand the unique pressures facing Troy's automotive, tech, and business professionals</li>
                    <li><strong>Confidential Care:</strong> HIPAA-compliant, private therapy in a professional setting</li>
                </ul>

                <h2>Telehealth Therapy - Perfect for Troy Professionals</h2>

                <p>Busy schedule? Many Troy residents prefer telehealth therapy:</p>

                <ul>
                    <li><strong>No Commute:</strong> Attend therapy from your Troy home or office</li>
                    <li><strong>Lunch Break Sessions:</strong> Schedule therapy during your workday without driving</li>
                    <li><strong>Same Insurance Coverage:</strong> Most plans cover telehealth at the same copay as in-person visits</li>
                    <li><strong>Secure &amp; Private:</strong> HIPAA-compliant video platform ensures confidentiality</li>
                    <li><strong>Evening Appointments:</strong> After-work sessions from the comfort of home</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule Your Appointment</h3>
                    <p><strong>Serving Troy, MI &amp; Oakland County</strong></p>
                    <p><strong>Phone:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></p>
                    <p><strong>Office:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (25 min from Troy)</p>
                    <p><strong>Telehealth:</strong> Online therapy throughout Michigan</p>
                    <p>We accept Blue Cross, Aetna, Priority Health, United Healthcare, and most major insurance plans.</p>
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
