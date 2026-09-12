<?php
// Page-specific variables
$page_title = 'Federal Employee Therapist Livonia MI | FEP Blue';
$page_description = 'Therapy for federal employees in Livonia, MI with FEP Blue insurance. Serving USPS, VA, and federal workers in western Wayne County. Telehealth available.';
$canonical_url = 'https://www.healingtherapycenter.com/federal-employee-therapy-livonia';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy for Federal Employees in Livonia, MI',
    'description' => 'Therapy for federal employees in Livonia, MI, including USPS, VA, and federal workers throughout western Wayne County. FEP Blue insurance accepted, in person in Dearborn or via telehealth.',
    'url' => 'https://www.healingtherapycenter.com/federal-employee-therapy-livonia',
    'areaServed' => ['@type' => 'City', 'name' => 'Livonia'],
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

// Include configuration
require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Locations';
    $hero_h1 = 'Therapist for Federal Employees in Livonia, Michigan';
    $hero_lead = "Are you a federal employee living or working in Livonia and looking for mental health support? Healing Therapy Center provides therapy services for federal employees throughout western Wayne County using FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Our Dearborn office is just 10-15 minutes from Livonia via I-96 or Plymouth Road, making us convenient for Livonia residents who work for USPS, VA, or commute to federal facilities in Detroit. We also offer telehealth therapy for maximum convenience.</p>

                <div class="callout callout--info">
                    <h3>Serving Livonia Federal Employees</h3>
                    <p><strong>In-Person:</strong> 10-15 minutes from Livonia (Dearborn office)</p>
                    <p><strong>Telehealth:</strong> Secure online therapy from your Livonia home</p>
                    <ul>
                        <li>Easy access via I-96, Plymouth Rd, or Middlebelt</li>
                        <li>Evening and weekend appointments for busy schedules</li>
                        <li>We accept FEP Blue insurance</li>
                        <li>Free parking at our office</li>
                    </ul>
                </div>

                <h2>Federal Employees We Serve in Livonia Area</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>USPS Employees</h3>
                        <ul>
                            <li>Livonia Post Office employees</li>
                            <li>Mail carriers in western Wayne County</li>
                            <li>Postal clerks and supervisors</li>
                            <li>USPS workers commuting to Detroit</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>VA &amp; Healthcare Workers</h3>
                        <ul>
                            <li>John D. Dingell VA Medical Center employees</li>
                            <li>VA healthcare providers</li>
                            <li>VA administrative staff</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Federal Employees in Detroit</h3>
                        <ul>
                            <li>Livonia residents working at Detroit Federal Building</li>
                            <li>IRS, SSA, federal courts</li>
                            <li>CBP, FBI, and law enforcement</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Federal Contractors</h3>
                        <ul>
                            <li>Department of Defense contractors</li>
                            <li>Federal IT contractors in Livonia area</li>
                            <li>Government support staff</li>
                        </ul>
                    </div>
                </div>

                <h2>We Accept FEP Blue Insurance</h2>

                <p>Federal employees living in Livonia have excellent mental health coverage through FEP Blue. We make using your benefits simple and straightforward.</p>

                <div class="callout">
                    <h3>Mental Health Services for Livonia Federal Employees</h3>
                    <ul>
                        <li>Individual therapy for stress, anxiety, depression</li>
                        <li>Couples therapy for federal employee families</li>
                        <li>Family therapy for parenting and relationship challenges</li>
                        <li>ADHD testing for children and adults</li>
                        <li>Telehealth therapy from your Livonia home</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage varies by plan. Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify your FEP Blue benefits. <a href="/fep-blue-federal-employee-therapy">Learn more</a>.</p>
                </div>

                <h2>Why Livonia Federal Employees Choose Us</h2>

                <ul>
                    <li><strong>Convenient Location:</strong> Just 10-15 minutes from Livonia, easy access from I-96</li>
                    <li><strong>Telehealth Available:</strong> No need to leave your Livonia home - secure online therapy</li>
                    <li><strong>FEP Blue In-Network:</strong> We accept your federal employee insurance and handle all billing</li>
                    <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments for busy federal employees</li>
                    <li><strong>Family-Friendly:</strong> We serve federal employee spouses and children too</li>
                    <li><strong>Confidential Care:</strong> Your employer never knows - HIPAA protected</li>
                </ul>

                <h2>Telehealth Therapy - Perfect for Livonia Residents</h2>

                <p>Many Livonia federal employees prefer telehealth therapy:</p>

                <ul>
                    <li>Attend sessions from your living room</li>
                    <li>No commute after a long workday</li>
                    <li>Perfect for busy parents balancing work and family</li>
                    <li>Same FEP Blue coverage as in-person visits</li>
                    <li>Secure, HIPAA-compliant video sessions</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule an Appointment</h3>
                    <p><strong>Serving Livonia Federal Employees</strong></p>
                    <p><strong>Office:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (10-15 min from Livonia)</p>
                    <p>In-person and telehealth available. We accept FEP Blue for all federal employees in Livonia and western Wayne County.</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <p style="text-align:center"><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout callout--soft">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/fep-blue-federal-employee-therapy">Complete FEP Blue Coverage Guide</a></li>
                        <li><a href="/insurance">Insurance &amp; Payment Options</a></li>
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
