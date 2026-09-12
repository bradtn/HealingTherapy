<?php
// Page-specific variables — verbatim from production
$page_title = 'Therapist Birmingham MI | Counseling & Mental Health';
$page_description = 'Therapy and counseling for Birmingham, MI professionals. Individual, couples, and executive stress therapy. BCBS, Aetna, and Priority Health accepted.';
$canonical_url = 'https://www.healingtherapycenter.com/therapist-birmingham-mi';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy and Counseling for Birmingham, MI Residents',
    'description' => 'Individual therapy, couples counseling, and executive stress management for Birmingham, MI residents and Oakland County professionals, in person in Dearborn or via telehealth.',
    'url' => 'https://www.healingtherapycenter.com/therapist-birmingham-mi',
    'areaServed' => ['@type' => 'City', 'name' => 'Birmingham'],
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
    $hero_h1 = 'Licensed Therapist Serving Birmingham, Michigan';
    $hero_lead = "Healing Therapy Center provides professional mental health services for Birmingham, MI residents and Oakland County professionals. Our licensed therapists offer individual therapy, couples counseling, and executive stress management with convenient access from Birmingham via Woodward Avenue and I-696.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Located in Dearborn (30 minutes from downtown Birmingham), we serve high-achieving professionals, families, and individuals throughout Metro Detroit. We also offer convenient telehealth therapy - perfect for busy Birmingham residents who prefer online sessions from home or office.</p>

                <div class="callout callout--info">
                    <h3>Convenient for Birmingham Residents</h3>
                    <p><strong>Office Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>From Birmingham:</strong> 30 minutes via Woodward to I-696 West to Telegraph South</p>
                    <p><strong>Telehealth Option:</strong> Online therapy from your Birmingham home - same insurance coverage</p>
                    <ul>
                        <li>Evening appointments for professionals</li>
                        <li>Weekend availability</li>
                        <li>Secure telehealth - no commute needed</li>
                    </ul>
                </div>

                <h2>Mental Health Services for Birmingham Residents</h2>

                <p>We provide comprehensive therapy and counseling for Birmingham, MI individuals, couples, and families:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Treatment for anxiety, depression, stress, trauma, and life transitions. We help Birmingham professionals manage executive stress, career pressure, and work-life balance challenges.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples Therapy</h3>
                        <p>Marriage counseling, premarital counseling, and relationship therapy. Address communication issues, intimacy concerns, and relationship conflicts with evidence-based approaches.</p>
                    </div>
                    <div class="panel">
                        <h3>Executive Stress Management</h3>
                        <p>Specialized therapy for Birmingham executives and business professionals dealing with leadership stress, decision fatigue, and organizational pressures.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Family counseling for parenting challenges, teen issues, and family dynamics. Help your Birmingham family improve communication and resolve conflicts.</p>
                    </div>
                </div>

                <h2>Common Concerns We Address for Birmingham Clients</h2>

                <p>Birmingham residents often seek therapy for:</p>

                <ul>
                    <li><strong>Executive &amp; Leadership Stress</strong> - Birmingham's business leaders face unique pressures. We provide specialized therapy for C-suite executives, entrepreneurs, and high-level managers.</li>
                    <li><strong>Professional Burnout</strong> - Lawyers, physicians, executives, and business owners experiencing chronic stress and burnout.</li>
                    <li><strong>Anxiety &amp; Performance Pressure</strong> - High-achievers dealing with anxiety, perfectionism, and performance-related stress.</li>
                    <li><strong>Marriage &amp; Relationship Issues</strong> - Couples therapy for communication problems, intimacy issues, and relationship conflict.</li>
                    <li><strong>Depression</strong> - Major depression, persistent low mood, and loss of motivation despite professional success.</li>
                    <li><strong>Life Transitions</strong> - Career changes, retirement, divorce, empty nest, and major life decisions.</li>
                    <li><strong>Premarital Counseling</strong> - Birmingham couples preparing for marriage seeking relationship strengthening.</li>
                    <li><strong>Parenting High-Achieving Children</strong> - Birmingham parents navigating academic pressure and teen mental health concerns.</li>
                </ul>

                <h2>Insurance Accepted for Birmingham Residents</h2>

                <p>We accept most major insurance plans common among Birmingham professionals:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Insurance Plans We Accept</h3>
                        <ul>
                            <li>Blue Cross Blue Shield Michigan</li>
                            <li>Blue Care Network (BCN)</li>
                            <li>Priority Health</li>
                            <li>Aetna (common for executives)</li>
                            <li>United Healthcare</li>
                            <li>HAP (Health Alliance Plan)</li>
                            <li>McLaren Health Plan</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Payment Options</h3>
                        <ul>
                            <li>Insurance billing - we handle claims</li>
                            <li>Self-pay for privacy/preference</li>
                            <li>HSA/FSA accounts accepted</li>
                            <li>Payment plans available if needed</li>
                        </ul>
                        <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify benefits.</strong></p>
                    </div>
                </div>

                <h2>Our Therapists Serving Birmingham</h2>

                <p>Our team includes licensed professionals experienced in working with Birmingham's professional community:</p>

                <ul>
                    <li><strong>Dr. Nadia Habhab, PhD, LP</strong> - Licensed psychologist specializing in anxiety, depression, trauma, and executive stress</li>
                    <li><strong>Tiffany Murray, LMSW</strong> - Licensed therapist providing individual and couples therapy for professionals</li>
                    <li><strong>Amal Ayad, LLMSW</strong> - Limited licensed therapist specializing in life transitions and stress management</li>
                    <li><strong>Malak Wehbe, LLMSW</strong> - Limited licensed therapist working with anxiety and depression</li>
                    <li><strong>Donna Majed, TLLP</strong> - Limited licensed psychologist providing therapy services</li>
                </ul>

                <p><a href="/therapists">Learn more about our therapists →</a></p>

                <h2>Why Birmingham Professionals Choose Us</h2>

                <ul>
                    <li><strong>Licensed Professionals:</strong> PhD psychologist and licensed therapists with extensive experience</li>
                    <li><strong>Executive-Focused Care:</strong> We understand the unique pressures facing Birmingham's business and professional community</li>
                    <li><strong>Confidential Therapy:</strong> HIPAA-compliant care with discretion for high-profile clients</li>
                    <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments for busy professionals</li>
                    <li><strong>Telehealth Excellence:</strong> Secure online therapy - attend from your Birmingham office or home</li>
                    <li><strong>Insurance Accepted:</strong> In-network with most major plans for lower out-of-pocket costs</li>
                    <li><strong>Experienced with High-Achievers:</strong> We work regularly with executives, entrepreneurs, and professionals</li>
                </ul>

                <h2>Telehealth Therapy - Ideal for Birmingham Professionals</h2>

                <p>Many Birmingham residents prefer telehealth therapy for its convenience:</p>

                <ul>
                    <li><strong>No Traffic or Parking:</strong> Attend therapy from your Birmingham home, office, or even while traveling</li>
                    <li><strong>Lunch Break Sessions:</strong> Schedule therapy during your workday without leaving your office</li>
                    <li><strong>Maximum Privacy:</strong> No risk of being seen entering a therapist's office</li>
                    <li><strong>Same Insurance Coverage:</strong> Most plans cover telehealth at the same copay as in-person visits</li>
                    <li><strong>Secure Platform:</strong> HIPAA-compliant video ensures confidentiality</li>
                    <li><strong>Evening Availability:</strong> After-work sessions from the comfort of home</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule Your Appointment</h3>
                    <p><strong>Serving Birmingham, MI &amp; Oakland County</strong></p>
                    <p><strong>Phone:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></p>
                    <p><strong>Office:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (30 min from Birmingham)</p>
                    <p><strong>Telehealth:</strong> Online therapy throughout Michigan</p>
                    <p>We accept Blue Cross, Aetna, Priority Health, United Healthcare, and most major insurance plans.</p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/couples-therapy">Couples &amp; Marriage Counseling</a></li>
                        <li><a href="/anxiety-therapy-michigan">Anxiety Therapy</a></li>
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
