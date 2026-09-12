<?php
// Page-specific variables
$page_title = 'Federal Employee Therapist Ann Arbor MI | FEP Blue';
$page_description = 'Therapy for federal employees in Ann Arbor, MI with FEP Blue insurance. Serving VA Ann Arbor and University of Michigan federal staff. Telehealth available.';
$canonical_url = 'https://www.healingtherapycenter.com/federal-employee-therapy-ann-arbor';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Therapy for Federal Employees in Ann Arbor, MI',
    'description' => 'Therapy for federal employees in Ann Arbor, MI, including VA Ann Arbor Healthcare System staff, University of Michigan federal researchers, and USPS workers. FEP Blue insurance accepted, with telehealth available.',
    'url' => 'https://www.healingtherapycenter.com/federal-employee-therapy-ann-arbor',
    'areaServed' => ['@type' => 'City', 'name' => 'Ann Arbor'],
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
    $hero_h1 = 'Therapist for Federal Employees in Ann Arbor, Michigan';
    $hero_lead = "Federal employee in Ann Arbor looking for mental health support? Healing Therapy Center provides therapy services for federal employees throughout Washtenaw County using FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Whether you work at the VA Ann Arbor Healthcare System, University of Michigan federal research labs, or commute to Detroit federal facilities, we offer both in-person therapy (40 minutes from Ann Arbor in Dearborn) and convenient telehealth services.</p>

                <div class="callout callout--info">
                    <h3>Serving Ann Arbor Federal Employees</h3>
                    <p><strong>Telehealth:</strong> Most convenient option for Ann Arbor residents</p>
                    <p><strong>In-Person:</strong> 40 minutes from Ann Arbor (Dearborn office via I-94)</p>
                    <ul>
                        <li>Secure online therapy from your Ann Arbor home</li>
                        <li>Same FEP Blue coverage as in-person visits</li>
                        <li>Evening and weekend appointments available</li>
                        <li>We accept FEP Blue insurance</li>
                    </ul>
                </div>

                <h2>Federal Employees We Serve in Ann Arbor Area</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>VA Ann Arbor Healthcare System</h3>
                        <ul>
                            <li>VA healthcare providers and nurses</li>
                            <li>VA medical center staff</li>
                            <li>VA administrative employees</li>
                            <li>Mental health clinicians at VA</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Federal Research &amp; University Staff</h3>
                        <ul>
                            <li>NIH-funded researchers at U-M</li>
                            <li>NSF grant recipients</li>
                            <li>Federal contractors in Ann Arbor</li>
                            <li>Department of Energy researchers</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>USPS Ann Arbor</h3>
                        <ul>
                            <li>Ann Arbor Post Office employees</li>
                            <li>Mail carriers in Washtenaw County</li>
                            <li>Postal supervisors and clerks</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Other Federal Employees</h3>
                        <ul>
                            <li>Federal court staff</li>
                            <li>IRS employees in Ann Arbor area</li>
                            <li>All federal civilian employees</li>
                        </ul>
                    </div>
                </div>

                <h2>We Accept FEP Blue Insurance</h2>

                <p>Federal employees in Ann Arbor have excellent mental health coverage through FEP Blue. We're an in-network provider and make using your benefits simple.</p>

                <div class="callout">
                    <h3>Mental Health Services for Ann Arbor Federal Employees</h3>
                    <ul>
                        <li>Individual therapy for burnout, stress, anxiety, depression</li>
                        <li>Couples therapy for academic and federal employee families</li>
                        <li>Trauma therapy for VA healthcare workers (secondary trauma, compassion fatigue)</li>
                        <li>ADHD and autism testing for children and adults</li>
                        <li>Telehealth therapy - perfect for Ann Arbor residents</li>
                    </ul>
                    <p><strong>Important:</strong> Coverage varies by plan. Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify your FEP Blue benefits. <a href="/fep-blue-federal-employee-therapy">Learn more</a>.</p>
                </div>

                <h2>Mental Health Challenges for Ann Arbor Federal Workers</h2>

                <p>Federal employees in Ann Arbor face unique stressors:</p>

                <ul>
                    <li><strong>VA Healthcare Workers:</strong> Compassion fatigue, secondary trauma from treating veterans, moral injury</li>
                    <li><strong>Research Staff:</strong> Grant pressure, publication stress, imposter syndrome in academic settings</li>
                    <li><strong>Work-Life Balance:</strong> High-achieving Ann Arbor culture, pressure to overwork</li>
                    <li><strong>Commute Stress:</strong> Some federal employees commute to Detroit from Ann Arbor</li>
                    <li><strong>Cost of Living:</strong> Ann Arbor housing costs on federal salary</li>
                </ul>

                <h2>Telehealth Therapy - Ideal for Ann Arbor</h2>

                <p>Telehealth is the most convenient option for Ann Arbor federal employees:</p>

                <ul>
                    <li><strong>No 40-minute drive:</strong> Attend therapy from your Ann Arbor home</li>
                    <li><strong>Lunch break sessions:</strong> Schedule therapy during your work day</li>
                    <li><strong>FEP Blue coverage:</strong> Same insurance coverage as in-person visits</li>
                    <li><strong>Secure &amp; private:</strong> HIPAA-compliant video platform</li>
                    <li><strong>Flexible scheduling:</strong> Evening and weekend appointments</li>
                </ul>

                <p>Many Ann Arbor federal employees prefer telehealth because it fits better into their busy schedules and eliminates the commute time.</p>

                <h2>Why Ann Arbor Federal Employees Choose Us</h2>

                <ul>
                    <li><strong>Telehealth Convenience:</strong> No need to drive to Dearborn - therapy from your home</li>
                    <li><strong>FEP Blue In-Network:</strong> We accept your federal employee insurance</li>
                    <li><strong>Experience with Federal Culture:</strong> We understand VA healthcare stress, research pressure, federal job demands</li>
                    <li><strong>Confidential &amp; Professional:</strong> HIPAA-compliant, your employer never knows</li>
                    <li><strong>Flexible Scheduling:</strong> Appointments that fit around your Ann Arbor work schedule</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Schedule an Appointment</h3>
                    <p><strong>Serving Ann Arbor Federal Employees</strong></p>
                    <p><strong>Phone:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></p>
                    <p><strong>Telehealth:</strong> Secure online therapy from your Ann Arbor home</p>
                    <p><strong>In-Person:</strong> 835 Mason St STE D160, Dearborn, MI 48124 (40 min via I-94)</p>
                    <p>We accept FEP Blue for all federal employees in Ann Arbor and Washtenaw County.</p>
                </div>

                <p style="text-align:center"><a href="/appointment" class="btn btn--pill btn--primary">Request an Appointment</a></p>

                <div class="callout callout--soft">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/fep-blue-federal-employee-therapy">Complete FEP Blue Coverage Guide</a></li>
                        <li><a href="/insurance">Insurance &amp; Payment Options</a></li>
                        <li><a href="/trauma-ptsd-treatment">Trauma &amp; PTSD Treatment</a></li>
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
