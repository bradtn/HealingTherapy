<?php
// Page-specific variables — verbatim from production
$page_title = 'Executive Stress Therapy Michigan | C-Suite Burnout';
$page_description = 'Confidential therapy for Michigan executives, CEOs, and business leaders. Manage burnout, stress, and decision fatigue. BCBS and Aetna accepted.';
$canonical_url = 'https://www.healingtherapycenter.com/executive-stress-therapy-michigan';

require_once dirname(__DIR__) . '/includes/config.php';

// Schema for SEO — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'name' => 'Executive Stress Therapy in Michigan',
    'description' => 'Confidential therapy for Michigan executives, C-suite leaders, and business owners experiencing leadership stress, burnout, decision fatigue, and performance pressure. Telehealth available statewide.',
    'url' => 'https://www.healingtherapycenter.com/executive-stress-therapy-michigan',
    'areaServed' => ['@type' => 'State', 'name' => 'Michigan'],
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
    $hero_eyebrow = 'Specialized Care';
    $hero_h1 = 'Therapy for Michigan Executives, CEOs, and Business Leaders';
    $hero_lead = "Healing Therapy Center provides confidential, professional therapy for Michigan executives, C-suite leaders, and business owners experiencing leadership stress, burnout, and performance pressure. Our licensed therapists understand the unique challenges facing high-level decision-makers in Metro Detroit's business community.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Whether you're leading a Fortune 500 company, running a family business, or managing a high-growth startup, we provide specialized mental health support to help you perform at your best while maintaining your wellbeing. Convenient telehealth sessions ensure complete privacy and flexibility for your demanding schedule.</p>

                <div class="callout">
                    <h3>Confidential Executive Mental Health Care</h3>
                    <ul>
                        <li><strong>Complete Privacy:</strong> HIPAA-compliant telehealth ensures discretion</li>
                        <li><strong>Flexible Scheduling:</strong> Evening and weekend appointments available</li>
                        <li><strong>Insurance Accepted:</strong> Aetna, Blue Cross, Priority Health, United Healthcare</li>
                        <li><strong>Licensed Professionals:</strong> PhD psychologist and experienced therapists</li>
                    </ul>
                    <p><strong>Call <a href="tel:313-654-1915">(313) 654-1915</a></strong> for a confidential consultation.</p>
                </div>

                <h2>Executive Stress Issues We Address</h2>

                <p>Michigan business leaders face unique psychological pressures:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Leadership Stress &amp; Burnout</h3>
                        <p>Chronic stress from high-stakes decisions, organizational pressures, and constant responsibility. Learn sustainable stress management strategies without sacrificing performance.</p>
                    </div>
                    <div class="panel">
                        <h3>Decision Fatigue</h3>
                        <p>Mental exhaustion from constant decision-making. Develop strategies to maintain clarity and judgment under pressure while managing cognitive load.</p>
                    </div>
                    <div class="panel">
                        <h3>Work-Life Integration</h3>
                        <p>Balancing executive responsibilities with family, relationships, and personal wellness. Create sustainable boundaries without compromising your leadership effectiveness.</p>
                    </div>
                    <div class="panel">
                        <h3>Performance Anxiety</h3>
                        <p>Pressure to meet board expectations, shareholder demands, and growth targets. Address imposter syndrome and performance anxiety while maintaining confidence.</p>
                    </div>
                </div>

                <h2>Common Executive Mental Health Concerns</h2>

                <ul>
                    <li><strong>Chronic Stress &amp; Anxiety</strong> - Persistent worry about business outcomes, market conditions, and organizational performance</li>
                    <li><strong>Executive Burnout</strong> - Physical and emotional exhaustion despite professional success</li>
                    <li><strong>Isolation &amp; Loneliness</strong> - "Lonely at the top" syndrome, difficulty finding peers who understand executive pressures</li>
                    <li><strong>Relationship Strain</strong> - Marriage problems, family conflict due to work demands and emotional unavailability</li>
                    <li><strong>Sleep Problems</strong> - Insomnia, racing thoughts at night, inability to "turn off" work concerns</li>
                    <li><strong>Depression Despite Success</strong> - Feeling empty or unfulfilled despite achievements and financial success</li>
                    <li><strong>Perfectionism &amp; Control</strong> - Difficulty delegating, micromanaging, fear of failure</li>
                    <li><strong>Transition Stress</strong> - Mergers, acquisitions, leadership changes, succession planning pressures</li>
                </ul>

                <h2>Our Approach to Executive Mental Health</h2>

                <p>We provide evidence-based therapy tailored to high-achieving leaders:</p>

                <div class="panel">
                    <h3>Cognitive Behavioral Therapy (CBT)</h3>
                    <p>Address negative thought patterns, catastrophic thinking, and performance anxiety with practical, results-oriented strategies.</p>

                    <h3>Stress Management &amp; Resilience Building</h3>
                    <p>Develop sustainable coping strategies, improve emotional regulation, and build psychological resilience for long-term leadership effectiveness.</p>

                    <h3>Leadership Psychology</h3>
                    <p>Understand how your psychological patterns impact leadership style, team dynamics, and organizational culture.</p>

                    <h3>Work-Life Integration Coaching</h3>
                    <p>Create sustainable systems to maintain high performance while protecting personal relationships and wellbeing.</p>
                </div>

                <h2>Why Michigan Executives Choose Us</h2>

                <ul>
                    <li><strong>Complete Confidentiality:</strong> HIPAA-compliant care with maximum discretion for high-profile clients</li>
                    <li><strong>Flexible Telehealth:</strong> Attend sessions from your office, home, or while traveling - no waiting rooms</li>
                    <li><strong>Evening &amp; Weekend Availability:</strong> Scheduling that fits C-suite calendars</li>
                    <li><strong>Licensed Professionals:</strong> PhD psychologist with experience working with business leaders</li>
                    <li><strong>Insurance Accepted:</strong> Aetna, BCBS, Priority Health, United Healthcare - or self-pay for privacy</li>
                    <li><strong>Understanding of Business:</strong> We understand P&amp;L pressure, board dynamics, and leadership challenges</li>
                    <li><strong>Results-Oriented:</strong> Practical strategies you can implement immediately</li>
                </ul>

                <h2>Insurance &amp; Payment for Executives</h2>

                <p>We accept most executive health insurance plans:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Insurance Plans Accepted</h3>
                        <ul>
                            <li>Aetna (common for executives)</li>
                            <li>Blue Cross Blue Shield Michigan</li>
                            <li>Priority Health</li>
                            <li>United Healthcare</li>
                            <li>Blue Care Network</li>
                        </ul>
                    </div>
                    <div class="panel">
                        <h3>Self-Pay Option</h3>
                        <p>Many executives prefer self-pay for maximum privacy. This ensures therapy never appears on insurance claims or employer records. Call for confidential pricing information.</p>
                    </div>
                </div>

                <h2>Telehealth - Ideal for Busy Executives</h2>

                <p>Most Michigan executives prefer telehealth therapy:</p>

                <ul>
                    <li><strong>Maximum Privacy:</strong> No risk of being seen entering a therapist's office</li>
                    <li><strong>Zero Commute:</strong> Attend from your office, home, or while traveling</li>
                    <li><strong>Schedule Efficiency:</strong> Book sessions during lunch, between meetings, or after work</li>
                    <li><strong>Secure Platform:</strong> HIPAA-compliant video with enterprise-level encryption</li>
                    <li><strong>Travel-Friendly:</strong> Continue therapy when traveling for business</li>
                </ul>

                <div class="callout callout--brand">
                    <h3>Confidential Consultation for Executives</h3>
                    <p><strong>Call (313) 654-1915 for a private consultation</strong></p>
                    <p>We understand the pressures of executive leadership. Let us help you perform at your best while protecting your wellbeing.</p>
                    <p><strong>Telehealth available throughout Michigan</strong> | Insurance accepted or self-pay for privacy</p>
                </div>

                <p><a href="/appointment" class="btn btn--pill btn--primary">Request a Confidential Appointment</a></p>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/anxiety-therapy-michigan">Anxiety Therapy</a></li>
                        <li><a href="/burnout-stress-therapy-michigan">Burnout &amp; Stress Therapy</a></li>
                        <li><a href="/womens-mental-health-therapy-michigan">Therapy for Women &amp; Working Mothers</a></li>
                        <li><a href="/insurance">Insurance &amp; Payment Options</a></li>
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
