<?php
// Page-specific variables — verbatim from production
$page_title = 'Therapist Bloomfield Hills MI | Counseling & Therapy';
$page_description = 'Discreet, licensed therapists serving Bloomfield Hills, MI with individual, couples, and family therapy plus testing. Call (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/therapist-bloomfield-hills-mi';

require_once __DIR__ . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy and Counseling for Bloomfield Hills, MI Residents',
    'description' => 'Confidential individual therapy, couples counseling, family therapy, and psychological testing for Bloomfield Hills, MI residents and Oakland County professionals, in person in Dearborn or via secure telehealth.',
    'url' => 'https://www.healingtherapycenter.com/therapist-bloomfield-hills-mi',
    'areaServed' => ['@type' => 'City', 'name' => 'Bloomfield Hills'],
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
    $hero_h1 = 'Licensed Therapist Serving Bloomfield Hills, Michigan';
    $hero_lead = "Healing Therapy Center offers discreet, professional mental health care for Bloomfield Hills residents and Oakland County executives. Our licensed clinicians provide individual therapy, couples counseling, family therapy, and psychological testing, available in person in Dearborn or through secure telehealth from the privacy of your home along the Woodward corridor.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>For many Bloomfield Hills residents, confidentiality is not a preference but a requirement. Executives, physicians, attorneys, and their families value therapy that is genuinely private and free from the small-town familiarity of a local practice. From our Dearborn office &mdash; roughly a 30&ndash;35 minute drive via the Lodge Freeway (M-10) and the Southfield Freeway (M-39) &mdash; we provide that discretion alongside evidence-based care, and our secure telehealth option lets you attend sessions without ever leaving home or the office.</p>

                <div class="callout callout--info">
                    <h3>Convenient &amp; Discreet for Bloomfield Hills Residents</h3>
                    <p><strong>Office Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>From Bloomfield Hills:</strong> About 30&ndash;35 minutes via M-10 (Lodge Fwy) to the Southfield Freeway (M-39) South &mdash; a straightforward route down from the Woodward Ave and Cranbrook area</p>
                    <p><strong>Telehealth Option:</strong> Fully private online therapy from your Bloomfield Hills home or office &mdash; same insurance coverage</p>
                    <ul>
                        <li>Early morning, evening, and weekend appointments for demanding schedules</li>
                        <li>Free, unhurried parking at our Dearborn office &mdash; no valet or downtown congestion</li>
                        <li>Secure, confidential telehealth for high-visibility professionals</li>
                    </ul>
                </div>

                <h2>Mental Health Services for Bloomfield Hills Residents</h2>

                <p>We provide comprehensive, discreet mental health care for Bloomfield Hills individuals and families:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Individual Therapy</h3>
                        <p>Treatment for anxiety, depression, burnout, trauma, grief, and life transitions. We understand the pressures of executive life &mdash; performance expectations, isolation at the top, and the quiet toll of maintaining a public image.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples Therapy</h3>
                        <p>Marriage counseling, premarital counseling, and relationship therapy for busy, high-achieving couples. Rebuild communication, intimacy, and connection when demanding careers strain a relationship.</p>
                    </div>
                    <div class="panel">
                        <h3>Family Therapy</h3>
                        <p>Family counseling for parenting challenges, teen pressures, and family dynamics. Support for Bloomfield Hills families navigating high-achievement expectations and Cranbrook-area academic stress.</p>
                    </div>
                    <div class="panel">
                        <h3>ADHD &amp; Autism Testing</h3>
                        <p>Comprehensive psychological testing for children and adults. ADHD evaluations, autism assessments, and diagnostic testing conducted with the confidentiality professional families expect.</p>
                    </div>
                </div>

                <h2>Common Concerns We Address for Bloomfield Hills Clients</h2>

                <p>Bloomfield Hills residents often seek therapy for:</p>

                <ul>
                    <li><strong>Executive Stress &amp; High-Stakes Pressure</strong> - Physicians, attorneys, and business leaders carry decision fatigue, performance anxiety, and the burden of always being &ldquo;on.&rdquo; We help you decompress privately.</li>
                    <li><strong>Burnout &amp; Perfectionism</strong> - When success masks exhaustion, we address the perfectionism, overwork, and identity strain common among high achievers.</li>
                    <li><strong>Anxiety &amp; Panic</strong> - Generalized anxiety, social anxiety, and panic that can surface even in outwardly successful lives.</li>
                    <li><strong>Depression</strong> - Major depression, high-functioning depression, and the persistent low mood that affluence does not resolve.</li>
                    <li><strong>Relationship &amp; Marriage Strain</strong> - Communication breakdowns, disconnection, and infidelity recovery in demanding two-career households.</li>
                    <li><strong>Parenting &amp; Teen Pressure</strong> - Supporting families where children face intense academic and social expectations in the Cranbrook and Woodward corridor.</li>
                    <li><strong>Life Transitions</strong> - Career changes, succession and retirement, divorce, and empty-nest adjustment.</li>
                    <li><strong>Confidential Care for Public Figures</strong> - Discreet support for those whose privacy matters as much as their progress.</li>
                </ul>

                <h2>Insurance Accepted for Bloomfield Hills Residents</h2>

                <p>We accept most major commercial insurance plans used by Bloomfield Hills professionals and families:</p>

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

                <p>Our team includes licensed professionals experienced in serving Oakland County and Bloomfield Hills residents:</p>

                <ul>
                    <li><strong>Dr. Nadia Habhab, PhD, LP</strong> - Licensed Psychologist specializing in anxiety, depression, trauma, and psychological testing</li>
                    <li><strong>Tiffany Murray, LMSW</strong> - Licensed Master Social Worker providing individual and couples therapy</li>
                    <li><strong>Amal Ayad, MA</strong> - Life Coach &amp; Therapist specializing in life transitions and stress management</li>
                    <li><strong>Malak Wehbe, TLLP</strong> - Licensed Therapist working with anxiety and depression</li>
                    <li><strong>Donna Majed, TLLP</strong> - Licensed Therapist providing therapy and testing services</li>
                </ul>

                <p><a href="/therapists">Learn more about our therapists &rarr;</a></p>

                <h2>Why Bloomfield Hills Residents Choose Healing Therapy Center</h2>

                <ul>
                    <li><strong>Genuine Confidentiality:</strong> Care outside your immediate community, away from familiar faces &mdash; privacy that professional and public figures rely on</li>
                    <li><strong>Licensed Professionals:</strong> A PhD psychologist and licensed therapists with extensive clinical experience</li>
                    <li><strong>Insurance Accepted:</strong> In-network with most major commercial plans &mdash; lower out-of-pocket costs</li>
                    <li><strong>Telehealth Available:</strong> Secure online therapy &mdash; attend from your Bloomfield Hills home or office</li>
                    <li><strong>Flexible Hours:</strong> Early, evening, and weekend appointments built around demanding calendars</li>
                    <li><strong>Convenient Access:</strong> A straightforward 30&ndash;35 minute drive via M-10 and M-39 to our Dearborn office</li>
                    <li><strong>Experienced with High Achievers:</strong> We understand executive pressure, perfectionism, and the isolation that can accompany success</li>
                </ul>

                <h2>Telehealth Therapy - Built for Bloomfield Hills Schedules</h2>

                <p>When privacy and time are at a premium, many Bloomfield Hills residents prefer telehealth therapy:</p>

                <ul>
                    <li><strong>Total Privacy:</strong> No waiting room, no chance of running into an acquaintance &mdash; sessions from wherever you feel secure</li>
                    <li><strong>No Commute:</strong> Skip the drive down Woodward and the freeways entirely</li>
                    <li><strong>Between-Meeting Sessions:</strong> Schedule therapy around a packed professional calendar</li>
                    <li><strong>Same Insurance Coverage:</strong> Most plans cover telehealth at the same copay as in-person visits</li>
                    <li><strong>Secure &amp; HIPAA-Compliant:</strong> An encrypted video platform ensures your confidentiality</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule Your Appointment</h3>
                    <p><strong>Serving Bloomfield Hills, MI &amp; Oakland County</strong></p>
                    <p><strong>Office:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (about 30&ndash;35 min from Bloomfield Hills)</p>
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
