<?php
// Page-specific variables — verbatim from production
$page_title = 'Therapist Rochester Hills MI | Mental Health Counseling';
$page_description = 'Licensed therapists serving Rochester Hills, MI families. Individual, couples, and family therapy plus ADHD testing. Most major insurance accepted.';
$canonical_url = 'https://www.healingtherapycenter.com/therapist-rochester-hills-mi';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy and Counseling for Rochester Hills, MI Residents',
    'description' => 'Individual therapy, couples counseling, family therapy, and psychological testing for Rochester Hills, MI residents and Oakland County families, in person in Dearborn or via telehealth.',
    'url' => 'https://www.healingtherapycenter.com/therapist-rochester-hills-mi',
    'areaServed' => ['@type' => 'City', 'name' => 'Rochester Hills'],
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
    $hero_h1 = 'Licensed Therapist Serving Rochester Hills, Michigan';
    $hero_lead = "Healing Therapy Center provides professional mental health services for Rochester Hills, MI residents and Oakland County families. Our licensed therapists offer individual therapy, couples counseling, family therapy, and psychological testing with convenient access from Rochester Hills via M-59 and I-75.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Located in Dearborn (35 minutes from Rochester Hills), we serve professionals, families, and individuals throughout Metro Detroit with both in-person therapy and convenient telehealth options. We accept most major insurance plans including Blue Cross Blue Shield, Aetna, Priority Health, and United Healthcare.</p>

                <div class="callout callout--info">
                    <h3>Convenient for Rochester Hills Residents</h3>
                    <p><strong>Office Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>From Rochester Hills:</strong> 35 minutes via M-59 West to I-75 South</p>
                    <p><strong>Telehealth Option:</strong> Online therapy from your Rochester Hills home - same insurance coverage</p>
                    <ul>
                        <li>Evening and weekend appointments available</li>
                        <li>Free parking at our Dearborn office</li>
                        <li>Secure telehealth for busy professionals and families</li>
                    </ul>
                </div>

                <h2>Mental Health Services for Rochester Hills Residents</h2>

                <p>We provide comprehensive mental health care for Rochester Hills, MI individuals, couples, and families:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Treatment for anxiety, depression, stress, trauma, grief, and life transitions. We help Rochester Hills professionals manage work stress, career transitions, and work-life balance challenges.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples Therapy</h3>
                        <p>Marriage counseling, premarital counseling, and relationship therapy. Address communication issues, intimacy concerns, and relationship conflicts with evidence-based approaches.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Family counseling for parenting challenges, teen behavioral issues, and family communication. Help your Rochester Hills family improve relationships and resolve conflicts.</p>
                    </div>
                    <div class="panel">
                        <h3>ADHD &amp; Autism Testing</h3>
                        <p>Comprehensive psychological testing for children and adults. ADHD evaluations, autism assessments, and diagnostic testing covered by most insurance plans.</p>
                    </div>
                </div>

                <h2>Common Concerns We Address for Rochester Hills Clients</h2>

                <p>Rochester Hills residents often seek therapy for:</p>

                <ul>
                    <li><strong>Work Stress &amp; Burnout</strong> - Rochester Hills professionals in automotive, tech, and healthcare facing high-pressure work environments and burnout.</li>
                    <li><strong>Anxiety Disorders</strong> - Generalized anxiety, panic attacks, social anxiety, health anxiety, and OCD affecting daily functioning.</li>
                    <li><strong>Depression</strong> - Major depression, seasonal affective disorder, postpartum depression, and persistent low mood.</li>
                    <li><strong>Marriage &amp; Relationship Issues</strong> - Communication problems, intimacy issues, infidelity recovery, and premarital counseling.</li>
                    <li><strong>Parenting Challenges</strong> - Rochester Hills parents seeking help with teen behavior, academic stress, screen time issues, and parent-child conflict.</li>
                    <li><strong>ADHD in Children &amp; Adults</strong> - Comprehensive ADHD evaluations and treatment strategies for Rochester Hills families.</li>
                    <li><strong>Autism Spectrum Evaluations</strong> - Diagnostic assessments for children showing signs of autism spectrum disorder.</li>
                    <li><strong>Life Transitions</strong> - Career changes, relocation, divorce, empty nest, and retirement adjustment.</li>
                </ul>

                <h2>Insurance Accepted for Rochester Hills Residents</h2>

                <p>We accept most major insurance plans commonly used by Rochester Hills professionals and families:</p>

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

                <h2>Meet Our Therapists Serving Rochester Hills</h2>

                <p>Our team includes licensed professionals with experience serving Oakland County and Rochester Hills families:</p>

                <ul>
                    <li><strong>Dr. Nadia Habhab, PhD, LP</strong> - Licensed psychologist specializing in anxiety, depression, trauma, and comprehensive psychological testing</li>
                    <li><strong>Tiffany Murray, LMSW</strong> - Licensed therapist providing individual and couples therapy</li>
                    <li><strong>Amal Ayad, LLMSW</strong> - Limited licensed therapist specializing in life transitions and stress management</li>
                    <li><strong>Malak Wehbe, LLMSW</strong> - Limited licensed therapist working with anxiety, depression, and relationship issues</li>
                    <li><strong>Donna Majed, TLLP</strong> - Limited licensed psychologist providing therapy and testing services</li>
                </ul>

                <p><a href="/therapists">Learn more about our therapists →</a></p>

                <h2>Why Rochester Hills Families Choose Healing Therapy Center</h2>

                <ul>
                    <li><strong>Licensed Professionals:</strong> PhD psychologist and licensed therapists with extensive experience</li>
                    <li><strong>Insurance Accepted:</strong> In-network with most major plans - lower out-of-pocket costs</li>
                    <li><strong>Comprehensive Testing:</strong> ADHD and autism evaluations with thorough reports for schools and doctors</li>
                    <li><strong>Family-Focused Care:</strong> We understand the unique needs of Rochester Hills families</li>
                    <li><strong>Telehealth Available:</strong> Secure online therapy - no need to drive from Rochester Hills</li>
                    <li><strong>Evening &amp; Weekend Hours:</strong> Flexible scheduling for busy families and professionals</li>
                    <li><strong>Confidential Care:</strong> HIPAA-compliant, private therapy in a professional setting</li>
                </ul>

                <h2>Telehealth Therapy - Perfect for Rochester Hills Residents</h2>

                <p>Busy schedule or prefer therapy from home? Many Rochester Hills residents choose telehealth:</p>

                <ul>
                    <li><strong>No Commute:</strong> Attend therapy from your Rochester Hills home - saves 70 minutes of driving roundtrip</li>
                    <li><strong>Flexible Scheduling:</strong> Lunch break sessions, evening appointments, weekend availability</li>
                    <li><strong>Same Insurance Coverage:</strong> Most plans cover telehealth at the same copay as in-person visits</li>
                    <li><strong>Secure &amp; Private:</strong> HIPAA-compliant video platform ensures confidentiality</li>
                    <li><strong>Family-Friendly:</strong> Easier for parents to fit therapy into busy schedules</li>
                    <li><strong>Weather-Proof:</strong> No worries about winter driving or traffic on M-59</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule Your Appointment</h3>
                    <p><strong>Serving Rochester Hills, MI &amp; Oakland County</strong></p>
                    <p><strong>Office:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (35 min from Rochester Hills)</p>
                    <p><strong>Telehealth:</strong> Online therapy throughout Michigan</p>
                    <p>We accept Blue Cross, Aetna, Priority Health, United Healthcare, and most major insurance plans.</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/couples-therapy">Couples &amp; Marriage Counseling</a></li>
                        <li><a href="/family-therapy">Family Therapy</a></li>
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
