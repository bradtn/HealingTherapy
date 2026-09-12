<?php
// Page-specific variables
$page_title = 'Federal Employee Therapist Detroit MI | FEP Blue';
$page_description = 'Therapy for federal employees in Detroit, MI with FEP Blue insurance. Serving the Detroit Federal Building, IRS, SSA, FBI, and CBP. Telehealth available.';
$canonical_url = 'https://www.healingtherapycenter.com/federal-employee-therapy-detroit';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy for Federal Employees in Detroit, MI',
    'description' => 'Therapy for federal employees in Detroit, MI, including workers at the Patrick V. McNamara Federal Building, CBP, FBI, and USPS. FEP Blue insurance accepted, in person in Dearborn or via telehealth.',
    'url' => 'https://www.healingtherapycenter.com/federal-employee-therapy-detroit',
    'areaServed' => ['@type' => 'City', 'name' => 'Detroit'],
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
require_once dirname(__DIR__) . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Locations';
    $hero_h1 = 'Therapist for Federal Employees in Detroit, Michigan';
    $hero_lead = "Working for a federal agency in Detroit and need mental health support? Healing Therapy Center provides therapy services for federal employees throughout Detroit using FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance. We offer both in-person therapy at our nearby Dearborn office and convenient telehealth services.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Whether you work at the Patrick V. McNamara Federal Building, Detroit-Windsor Border Crossing, FBI Detroit Field Office, or any federal agency in Detroit, we understand the unique challenges of federal service and provide confidential, professional mental health care.</p>

                <div class="callout callout--info">
                    <h3>Serving Detroit Federal Employees</h3>
                    <p><strong>In-Person:</strong> Just 15 minutes from downtown Detroit in Dearborn</p>
                    <p><strong>Telehealth:</strong> Secure online therapy from anywhere in Detroit</p>
                    <ul>
                        <li>Easy access from I-96, I-94, and Lodge Freeway</li>
                        <li>Close to Detroit Federal Building and federal facilities</li>
                        <li>Evening and weekend appointments available</li>
                        <li>We accept FEP Blue insurance</li>
                    </ul>
                </div>

                <h2>Federal Facilities We Serve in Detroit</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Patrick V. McNamara Federal Building</h3>
                        <ul>
                            <li>IRS Detroit offices</li>
                            <li>Social Security Administration</li>
                            <li>Federal court employees</li>
                            <li>Department of Labor</li>
                            <li>All federal agencies in the building</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>CBP &amp; Border Security</h3>
                        <ul>
                            <li>Detroit-Windsor Tunnel</li>
                            <li>Ambassador Bridge CBP</li>
                            <li>Detroit Metropolitan Airport CBP</li>
                            <li>Border patrol agents and officers</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Law Enforcement &amp; FBI</h3>
                        <ul>
                            <li>FBI Detroit Field Office</li>
                            <li>Federal marshals</li>
                            <li>DEA Detroit Division</li>
                            <li>ATF agents</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>USPS &amp; Other Federal Agencies</h3>
                        <ul>
                            <li>Detroit USPS Processing Center</li>
                            <li>Postal carriers and supervisors</li>
                            <li>VA medical center employees</li>
                            <li>All federal civilian employees</li>
                        </ul>
                    </div>
                </div>

                <h2>We Accept FEP Blue Insurance</h2>

                <p>Detroit federal employees have excellent mental health coverage through FEP Blue. We're an in-network provider and make using your benefits simple.</p>

                <div class="callout">
                    <h3>Services Covered for Federal Employees</h3>
                    <ul>
                        <li>Individual therapy for work stress, anxiety, depression, PTSD</li>
                        <li>Couples therapy for federal employee families</li>
                        <li>Trauma therapy for law enforcement (EMDR, CPT)</li>
                        <li>ADHD and autism diagnostic testing</li>
                        <li>Telehealth therapy sessions</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage varies by FEP Blue plan. Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify benefits. <a href="/fep-blue-federal-employee-therapy">Learn more</a>.</p>
                </div>

                <h2>Mental Health Challenges for Detroit Federal Workers</h2>

                <p>Federal employees in Detroit face unique stressors:</p>

                <ul>
                    <li><strong>High-stress federal work:</strong> IRS tax season, federal court deadlines, CBP border security pressures</li>
                    <li><strong>Public safety risks:</strong> Law enforcement officers face traumatic incidents and PTSD</li>
                    <li><strong>Commute stress:</strong> Long commutes from suburbs into downtown Detroit</li>
                    <li><strong>Job insecurity:</strong> Government shutdowns, budget cuts, reorganizations</li>
                    <li><strong>Work-life balance:</strong> Shift work for CBP and USPS, overtime demands</li>
                </ul>

                <h2>Telehealth Therapy for Detroit Federal Employees</h2>

                <p>Many Detroit federal employees prefer telehealth therapy for convenience:</p>

                <ul>
                    <li>No commute after a long workday</li>
                    <li>Attend sessions during lunch break from your office</li>
                    <li>Perfect for federal employees working from home</li>
                    <li>Same FEP Blue coverage as in-person visits</li>
                    <li>Secure, HIPAA-compliant video sessions</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule an Appointment</h3>
                    <p><strong>Serving Detroit Federal Employees</strong></p>
                    <p><strong>Phone:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></p>
                    <p><strong>Office Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (15 min from downtown Detroit)</p>
                    <p>In-person and telehealth appointments available. We accept FEP Blue for all Detroit federal employees.</p>
                </div>

                <p style="text-align:center"><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout callout--soft">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/fep-blue-federal-employee-therapy">FEP Blue Coverage Guide</a></li>
                        <li><a href="/insurance">Insurance &amp; Payment Options</a></li>
                        <li><a href="/trauma-ptsd-treatment">PTSD Treatment for Law Enforcement</a></li>
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
