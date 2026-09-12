<?php
// Page-specific variables
$page_title = 'Federal Employee Therapist Dearborn MI | FEP Blue';
$page_description = 'Therapy for federal employees in Dearborn, MI with FEP Blue insurance. Serving USPS, CBP, FBI, and VA workers near Dearborn federal facilities.';
$canonical_url = 'https://www.healingtherapycenter.com/federal-employee-therapy-dearborn';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy for Federal Employees in Dearborn, MI',
    'description' => 'Confidential therapy for federal employees in Dearborn, MI, including USPS, CBP, FBI, and VA workers. FEP Blue insurance accepted at our Dearborn office, with telehealth available.',
    'url' => 'https://www.healingtherapycenter.com/federal-employee-therapy-dearborn',
    'areaServed' => ['@type' => 'City', 'name' => 'Dearborn'],
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
$current_service = 'individual'; // For sidebar active state

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
    $hero_h1 = 'Therapist for Federal Employees in Dearborn, Michigan';
    $hero_lead = "Are you a federal employee working in Dearborn and looking for mental health support? At Healing Therapy Center, located right here in Dearborn at 835 Mason St STE D160, we specialize in providing therapy services to federal employees who accept FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Whether you work for USPS at the Dearborn Post Office, commute to the Detroit Federal Building, work for CBP, FBI, VA, or any other federal agency, we understand the unique stressors of federal service and provide confidential, professional mental health care.</p>

                <div class="callout callout--info">
                    <h3>Conveniently Located in Dearborn</h3>
                    <p><strong>835 Mason St STE D160, Dearborn, MI 48124</strong></p>
                    <ul>
                        <li>Easy access from Michigan Ave, Ford Rd, and Telegraph Rd</li>
                        <li>Close to Dearborn Post Office and USPS facilities</li>
                        <li>15 minutes from Detroit Federal Building</li>
                        <li>Ample free parking</li>
                        <li>Telehealth available for maximum convenience</li>
                    </ul>
                </div>

                <h2>We Accept FEP Blue Insurance</h2>

                <p>Federal employees in Dearborn have excellent mental health coverage through FEP Blue. We're an in-network provider and handle all insurance billing so you can focus on your mental health.</p>

                <div class="callout">
                    <h3>FEP Blue Benefits for Dearborn Federal Employees</h3>
                    <ul>
                        <li>Individual therapy for stress, anxiety, depression, PTSD</li>
                        <li>Couples therapy for relationship challenges</li>
                        <li>Family therapy</li>
                        <li>ADHD and autism testing</li>
                        <li>Telehealth options</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage varies by plan. Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify your benefits. <a href="/fep-blue-federal-employee-therapy">Learn more about FEP Blue coverage</a>.</p>
                </div>

                <h2>Serving Federal Employees in Dearborn</h2>

                <p>We proudly serve federal employees working at these Dearborn and nearby facilities:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>USPS Employees</h3>
                        <ul>
                            <li>Dearborn Post Office (22207 Michigan Ave)</li>
                            <li>Mail carriers, clerks, supervisors</li>
                            <li>Detroit Processing &amp; Distribution Center</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Detroit Federal Building Employees</h3>
                        <ul>
                            <li>IRS, Social Security Administration</li>
                            <li>Federal courts and judiciary</li>
                            <li>All federal agencies in downtown Detroit</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>CBP &amp; Law Enforcement</h3>
                        <ul>
                            <li>CBP officers at Detroit-Windsor ports</li>
                            <li>FBI Detroit Field Office</li>
                            <li>Federal law enforcement personnel</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>VA &amp; Other Agencies</h3>
                        <ul>
                            <li>John D. Dingell VA Medical Center</li>
                            <li>Department of Defense contractors</li>
                            <li>All federal civilian employees in Metro Detroit</li>
                        </ul>
                    </div>
                </div>

                <h2>Mental Health Services for Dearborn Federal Employees</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Work Stress &amp; Burnout</h3>
                        <p>High-pressure federal work environments, understaffing, and heavy workloads can lead to chronic stress. We help you develop healthy coping strategies and restore work-life balance.</p>
                    </div>
                    <div class="panel">
                        <h3>PTSD &amp; Trauma (Law Enforcement)</h3>
                        <p>CBP officers, FBI agents, and federal law enforcement face traumatic incidents. Evidence-based EMDR and trauma-focused therapy provides relief.</p>
                    </div>
                    <div class="panel">
                        <h3>Anxiety &amp; Depression</h3>
                        <p>Job insecurity, performance pressure, and organizational changes can trigger anxiety and depression. CBT and other evidence-based approaches provide relief.</p>
                    </div>
                    <div class="panel">
                        <h3>Couples &amp; Family Therapy</h3>
                        <p>Shift work, frequent travel, and demanding schedules strain relationships. We help federal employee families improve communication and strengthen bonds.</p>
                    </div>
                </div>

                <h2>Why Dearborn Federal Employees Choose Us</h2>

                <ul>
                    <li><strong>Local &amp; Convenient:</strong> Our office is right here in Dearborn - no long commute to Detroit or the suburbs</li>
                    <li><strong>FEP Blue In-Network:</strong> We accept your federal employee insurance and handle all billing</li>
                    <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments available for shift workers</li>
                    <li><strong>Telehealth Available:</strong> Can't make it to the office? Secure online therapy from anywhere</li>
                    <li><strong>Complete Confidentiality:</strong> Your employer will never know you're in therapy - HIPAA protected</li>
                    <li><strong>Federal Work Culture Understanding:</strong> We understand security clearances, shift work, and federal workplace dynamics</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule an Appointment</h3>
                    <p><strong>Healing Therapy Center - Dearborn Office</strong></p>
                    <p>835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>Phone:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></p>
                    <p><strong>Hours:</strong> Monday-Friday 9am-7pm, Saturday 9am-2pm</p>
                    <p>We accept FEP Blue insurance for all federal employees in Dearborn and Metro Detroit. Call today to verify your benefits and schedule.</p>
                </div>

                <p style="text-align:center"><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment Online</a></p>

                <div class="callout callout--soft">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/fep-blue-federal-employee-therapy">Complete FEP Blue Coverage Guide</a></li>
                        <li><a href="/insurance">All Accepted Insurance Plans</a></li>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
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
