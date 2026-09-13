<?php
// Page-specific variables
$page_title = 'Therapy for Entrepreneurs in Michigan | Founder Burnout';
$page_description = 'Confidential therapy for Michigan founders and business owners facing burnout, isolation, and decision fatigue. Telehealth statewide. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/entrepreneur-burnout-therapy-michigan';

// Service + FAQPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Therapy for Entrepreneurs in Michigan',
            'serviceType' => 'Founder Burnout Therapy',
            'description' => 'Confidential, evidence-based therapy for Michigan founders, business owners, and entrepreneurs facing burnout, isolation, decision fatigue, financial-risk stress, imposter syndrome, and difficulty switching off. Burnout recovery, CBT, ACT, boundary and values work, and stress management via secure telehealth throughout Michigan or in-person in Dearborn.',
            'url' => 'https://www.healingtherapycenter.com/entrepreneur-burnout-therapy-michigan',
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
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'I do not have time to slow down - how does therapy fit into running a company?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'That feeling is often the clearest sign burnout is building. We offer secure telehealth throughout Michigan plus early-morning, evening, and select weekend appointments, so you can attend from your office, home, or on the road. Therapy is a focused, practical hour that protects your judgment and stamina - the assets your business depends on most.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is what I say confidential? I worry about investors, my team, or partners finding out.',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Everything you share is confidential and protected under HIPAA. We do not report to investors, co-founders, your board, or your team. For an added layer of privacy, many founders choose our private-pay option so nothing is submitted to insurance and therapy never appears on any claim.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is founder burnout different from ordinary stress?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. Burnout is emotional and physical exhaustion, growing cynicism, and a sense that nothing you do is enough - and for founders it is intensified by financial risk, identity fused with the company, and having no one to hand the pressure to. It rarely resolves with a weekend off. Recovery means changing how you relate to the work, not just resting harder.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'I feel like a fraud even though the business is doing well. Is that normal?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Imposter syndrome is extremely common among founders, precisely because you are constantly operating beyond your proven experience. Outward success rarely quiets it on its own. Therapy helps you separate your worth from the company\'s metrics and build a steadier sense of confidence that does not depend on the next milestone.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does insurance cover therapy for business owners in Michigan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Most commercial Michigan plans cover therapy with licensed clinicians. We accept Blue Cross Blue Shield Michigan, Blue Care Network, Priority Health, Aetna, United Healthcare, HAP, and McLaren Health Plan, plus self-pay, HSA, and FSA. Many founders choose private pay for maximum privacy. Call (313) 654-1915 to verify your coverage.'
                    ]
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES);

require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Specialized Care';
    $hero_h1 = 'Therapy for Entrepreneurs &amp; Founders in Michigan';
    $hero_lead = "Confidential, evidence-based therapy for Michigan founders and business owners facing burnout, isolation, and the relentless pressure of building something. Our licensed therapists understand what it is like to carry the whole company - with secure telehealth statewide, flexible scheduling, and a private-pay option for founders who value discretion.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Building a company asks more of you than almost anything else. You carry the payroll, the vision, the setbacks, and the wins - often without anyone to fully share the weight. From the outside it can look like momentum; from the inside it can feel like exhaustion, isolation, and a mind that never truly clocks out. At Healing Therapy Center, we provide confidential therapy for Michigan entrepreneurs and business owners via secure HIPAA-compliant telehealth statewide or in-person at our Dearborn office.</p>

                <p>You have built systems for your product, your finances, and your team. Your own resilience deserves the same intention. Working with a therapist is not a sign the venture is failing - it is how many founders protect the clarity, energy, and relationships the business is built on.</p>

                <div class="callout callout--info">
                    <h3>Discreet, Practical Support for Founders</h3>
                    <p>Everything you share is confidential and protected under HIPAA - we do not report to investors, co-founders, or your team. For an added layer of privacy, many founders use our <a href="/private-pay-out-of-network-therapy">private-pay, out-of-network option</a> so nothing is submitted to insurance. See also our <a href="/executive-stress-therapy-michigan">executive stress therapy</a> and <a href="/anxiety-therapy-michigan">anxiety therapy</a> services.</p>
                </div>

                <h2>The Weight Founders Carry</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Isolation &amp; Loneliness at the Top</h3>
                        <p>You cannot fully unload on your team, and even co-founders or your spouse may not grasp the full picture. That gap leaves many founders carrying doubts and fears entirely alone, convinced they have to project confidence at all times.</p>
                    </div>
                    <div class="panel">
                        <h3>Decision Fatigue</h3>
                        <p>Every day brings a stream of choices with no clear playbook and real consequences attached. Over time the constant deciding drains mental energy, dulls judgment, and makes even small calls feel heavy.</p>
                    </div>
                    <div class="panel">
                        <h3>Identity Fused with the Business</h3>
                        <p>When the company becomes who you are, its ups and downs become your self-worth. A rough quarter can feel like a personal failure, and there is little sense of self left to fall back on when things get hard.</p>
                    </div>
                    <div class="panel">
                        <h3>Financial-Risk Stress</h3>
                        <p>Personal guarantees, uneven cash flow, payroll to make, and savings on the line create a background hum of anxiety. That financial pressure follows you home and into the hours when you are supposed to be off.</p>
                    </div>
                    <div class="panel">
                        <h3>Imposter Syndrome</h3>
                        <p>Constantly operating beyond your proven experience breeds a nagging fear of being found out - one that outward success rarely silences. Many founders quietly attribute their wins to luck rather than their own capability.</p>
                    </div>
                    <div class="panel">
                        <h3>Difficulty Switching Off</h3>
                        <p>The work is always there, and stepping away can feel irresponsible, so real rest becomes rare. Sleep, presence, and relationships suffer, and the exhaustion compounds week after week.</p>
                    </div>
                </div>

                <h2>Concerns We Commonly Help Founders Address</h2>

                <ul>
                    <li><strong>Burnout</strong> - emotional and physical exhaustion, cynicism, and running on empty despite outward success</li>
                    <li><strong>Chronic stress &amp; anxiety</strong> - persistent worry about cash flow, growth, and outcomes you cannot fully control</li>
                    <li><strong>Isolation &amp; loneliness</strong> - carrying the pressure with no one who truly shares it</li>
                    <li><strong>Imposter syndrome &amp; self-doubt</strong> - fear of being exposed even when things are going well</li>
                    <li><strong>Decision fatigue &amp; overwhelm</strong> - mental exhaustion from constant high-stakes choices</li>
                    <li><strong>Difficulty switching off</strong> - inability to rest, disconnect, or be present outside of work</li>
                    <li><strong>Relationship &amp; family strain</strong> - the toll the business takes on partners, children, and friendships</li>
                    <li><strong>Depression despite success</strong> - feeling empty or unfulfilled even as the company grows</li>
                </ul>

                <h2>Evidence-Based Approaches We Use</h2>

                <div class="callout callout--soft">
                    <h3>Burnout Recovery</h3>
                    <p>We treat burnout as a real, addressable condition rather than a character flaw. Together we map what is depleting you, rebuild recovery and rest into your week, and change the patterns - not just the workload - that drove you to empty, so the gains actually hold.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Cognitive Behavioral Therapy (CBT)</h3>
                    <p>CBT is structured and practical - a good fit for how founders think. We target the catastrophic thinking, all-or-nothing standards, and worry loops that fuel anxiety and imposter syndrome, and build strategies you can apply in real time.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Acceptance &amp; Commitment Therapy (ACT)</h3>
                    <p>ACT helps you loosen the fusion between your identity and the company, clarify what you actually value, and act on it even amid uncertainty. It creates room for a self - and a life - that exists beyond the next milestone.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Boundary &amp; Values Work</h3>
                    <p>We help you define where the business ends and your life begins - protecting time, relationships, and rest without guilt. Grounding decisions in your values, rather than reflexive urgency, makes both your leadership and your wellbeing more sustainable.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Stress Management</h3>
                    <p>You will build durable tools for emotional regulation, sleep, and pressure management so you can run a demanding company over the long haul. Learn more about our <a href="/individual-therapy">individual therapy services</a>.</p>
                </div>

                <div class="callout callout--info">
                    <h2>Signs It May Be Time to Talk to Someone</h2>
                    <ul>
                        <li>Exhaustion that a weekend or vacation no longer fixes</li>
                        <li>Dreading work you used to love, or feeling numb about the company's wins</li>
                        <li>Trouble sleeping, or a mind that will not stop running the business at night</li>
                        <li>Irritability or short temper with your team, co-founders, or family</li>
                        <li>Feeling isolated, like no one understands the pressure you carry</li>
                        <li>Anxiety about money, growth, or being found out that will not quiet down</li>
                        <li>Difficulty being present at home even when you are physically there</li>
                        <li>A sense that success has not brought the satisfaction you expected</li>
                    </ul>
                </div>

                <h2>Confidentiality &amp; Discretion for Business Owners</h2>
                <p>Discretion matters when your reputation and your company are intertwined. Everything you share is confidential and protected under HIPAA. We do not report to investors, co-founders, your board, or your team. For founders who want maximum privacy, our <a href="/private-pay-out-of-network-therapy">private-pay option</a> keeps therapy off insurance claims entirely, so it never appears on any record tied to the business.</p>

                <h2>Telehealth &amp; Flexible Scheduling</h2>
                <p>All of our services for entrepreneurs are available via secure, HIPAA-compliant telehealth to clients anywhere in Michigan, with early-morning, evening, and select weekend appointments. Attend from your office, from home, or while traveling for work - no waiting room and no visible commute. Research shows telehealth is as effective as in-person care for anxiety, depression, and stress-related concerns.</p>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>I do not have time to slow down - how does therapy fit into running a company?</h3>
                        <p>That feeling is often the clearest sign burnout is building. We offer secure telehealth throughout Michigan plus early-morning, evening, and select weekend appointments, so you can attend from your office, home, or on the road. Therapy is a focused, practical hour that protects your judgment and stamina - the assets your business depends on most.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is what I say confidential? I worry about investors, my team, or partners finding out.</h3>
                        <p>Everything you share is confidential and protected under HIPAA. We do not report to investors, co-founders, your board, or your team. For an added layer of privacy, many founders choose our private-pay option so nothing is submitted to insurance and therapy never appears on any claim.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is founder burnout different from ordinary stress?</h3>
                        <p>Yes. Burnout is emotional and physical exhaustion, growing cynicism, and a sense that nothing you do is enough - and for founders it is intensified by financial risk, identity fused with the company, and having no one to hand the pressure to. It rarely resolves with a weekend off. Recovery means changing how you relate to the work, not just resting harder.</p>
                    </div>
                    <div class="faq-item">
                        <h3>I feel like a fraud even though the business is doing well. Is that normal?</h3>
                        <p>Imposter syndrome is extremely common among founders, precisely because you are constantly operating beyond your proven experience. Outward success rarely quiets it on its own. Therapy helps you separate your worth from the company's metrics and build a steadier sense of confidence that does not depend on the next milestone.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance cover therapy for business owners in Michigan?</h3>
                        <p>Most commercial Michigan plans cover therapy with licensed clinicians. We accept Blue Cross Blue Shield Michigan, Blue Care Network, Priority Health, Aetna, United Healthcare, HAP, and McLaren Health Plan, plus self-pay, HSA, and FSA. Many founders choose private pay for maximum privacy. Call (313) 654-1915 to verify your coverage.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Confidential Therapy for Michigan Founders</h3>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p>Secure telehealth throughout Michigan | Insurance accepted or private pay for privacy. <a href="/appointment">Request an appointment online</a></p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/executive-stress-therapy-michigan">Executive Stress Therapy</a></li>
                        <li><a href="/anxiety-therapy-michigan">Anxiety Therapy</a></li>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/private-pay-out-of-network-therapy">Private-Pay, Out-of-Network Therapy</a></li>
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
