<?php
// Page-specific variables
$page_title = 'Private-Pay & Out-of-Network Therapy in Michigan';
$page_description = 'Private-pay & out-of-network therapy in Michigan for complete confidentiality and freedom - no diagnosis on your insurance record. Superbill & HSA/FSA. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/private-pay-out-of-network-therapy';

// Service + FAQPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Private-Pay & Out-of-Network Therapy in Michigan',
            'serviceType' => 'Private-Pay Psychotherapy',
            'description' => 'Confidential private-pay and out-of-network therapy in Michigan for clients who value complete discretion and freedom from insurance restrictions. No mental-health diagnosis on your insurance record, no session limits, and no utilization review. Superbills available for possible out-of-network reimbursement; HSA/FSA accepted. Secure telehealth statewide or in-person in Dearborn.',
            'url' => 'https://www.healingtherapycenter.com/private-pay-out-of-network-therapy',
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
                    'name' => 'Why would I choose to pay privately instead of using insurance?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Clients choose private pay for privacy and freedom. When you don\'t bill insurance, there is no mental-health diagnosis attached to your insurance record, no payer setting limits on how often or how long you\'re seen, and no utilization review or treatment reports sent to a third party. You keep complete control over your care and your confidentiality.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does insurance require a mental-health diagnosis to be on file?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. To reimburse for therapy, insurers require a formal mental-health diagnosis, and that diagnosis becomes part of your permanent insurance record. Many professionals and executives prefer private pay specifically so that no diagnosis is ever reported to an insurer.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What are out-of-network benefits and can I still get reimbursed?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many PPO plans include out-of-network benefits that reimburse a portion of what you pay for therapy. We can provide a superbill - an itemized receipt - that you submit to your insurer for possible partial reimbursement. Reimbursement depends on your specific plan, so we recommend confirming your out-of-network mental-health benefits directly with your insurer.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can I use my HSA or FSA to pay for private-pay therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. We accept payment from health savings accounts (HSA) and flexible spending accounts (FSA), which lets you pay for your therapy with pre-tax dollars while keeping your care private.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can I see any therapist I want if I pay privately?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. Paying privately frees you from network restrictions, so you can choose the therapist who is the best fit for you rather than whoever your plan lists as in-network. You and your therapist also decide together on session frequency and length without a payer\'s limits.'
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
    $hero_eyebrow = 'Your Care, Your Terms';
    $hero_h1 = 'Confidential Private-Pay Therapy for Michigan Professionals';
    $hero_lead = "For clients who value complete discretion and freedom, private-pay therapy keeps your care entirely between you and your therapist - no mental-health diagnosis on an insurance record, no session limits, and no reports to a payer. Available by secure telehealth throughout Michigan or in person in Dearborn.";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Some of the most thoughtful clients we work with could easily use insurance - and choose not to. For professionals, executives, physicians, attorneys, public figures, and anyone who simply values discretion, private-pay therapy is a deliberate decision to keep their mental health care completely confidential and fully within their control. At Healing Therapy Center, we offer private-pay and out-of-network therapy throughout Michigan via secure telehealth or in person at our Dearborn office.</p>

                <p>This isn't about cutting corners. It's about protecting your privacy, removing the constraints that insurers place on care, and working with the therapist you actually want - on the schedule that fits your life.</p>

                <div class="callout callout--info">
                    <h3>Why Clients Choose to Pay Privately</h3>
                    <p>The moment therapy is billed to insurance, a formal mental-health diagnosis is required and becomes part of your permanent insurance record. Private pay removes that entirely: no diagnosis reported, no payer deciding how you're treated, and no third party reviewing your care. If you're comparing options, see our <a href="/insurance">insurance page</a> or explore <a href="/individual-therapy">individual therapy</a> to find the right fit.</p>
                </div>

                <h2>The Advantages of Private-Pay Therapy</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Complete Confidentiality</h3>
                        <p>Nothing is submitted to an insurer, so there is no mental-health diagnosis attached to your insurance record. Your care stays private - a priority for professionals whose records matter and for anyone who values discretion.</p>
                    </div>
                    <div class="panel">
                        <h3>No Insurance-Imposed Limits</h3>
                        <p>Insurers often cap how frequently and how long you can be seen. Paying privately means you and your therapist decide together on session frequency and length, based on your needs - not a payer's rules.</p>
                    </div>
                    <div class="panel">
                        <h3>Freedom to Choose Your Therapist</h3>
                        <p>Without network restrictions, you're free to work with the therapist who is genuinely the best fit for you and your goals - not whoever happens to be listed as in-network on a given plan.</p>
                    </div>
                    <div class="panel">
                        <h3>No Utilization Review</h3>
                        <p>With insurance, a reviewer can require treatment reports and second-guess your care. Private pay means no utilization review and no clinical details reported to a payer - the work stays between you and your therapist.</p>
                    </div>
                </div>

                <h2>Privacy That Matters for Professionals</h2>

                <p>For executives, business owners, clinicians, and other professionals, a mental-health diagnosis on an insurance record can feel like a genuine risk - something you'd rather never exist in a payer's files. Private pay resolves that concern completely. There is no claim, no diagnostic code, and no paper trail with an insurer. Many clients pursuing <a href="/executive-stress-therapy-michigan">executive stress therapy</a> choose private pay for exactly this reason: they want a confidential, high-caliber space to do the work without any of it touching their insurance history.</p>

                <div class="callout callout--soft">
                    <h3>Out-of-Network Benefits &amp; Superbills</h3>
                    <p>Choosing private pay doesn't necessarily mean giving up all reimbursement. Many PPO plans include out-of-network mental-health benefits that reimburse a portion of what you pay. On request, we provide a superbill - an itemized receipt of your sessions - that you can submit to your insurer for possible partial reimbursement. Because out-of-network benefits vary, we recommend confirming yours directly with your plan.</p>
                </div>

                <div class="callout callout--soft">
                    <h3>HSA &amp; FSA Accepted</h3>
                    <p>We accept payment from health savings accounts (HSA) and flexible spending accounts (FSA), so you can put pre-tax dollars toward your therapy while keeping your care entirely private.</p>
                </div>

                <h2>Why Choose Private-Pay Therapy at Healing Therapy Center</h2>

                <ul>
                    <li><strong>Total Confidentiality:</strong> No claims, no diagnostic codes, and no treatment reports sent to any insurer</li>
                    <li><strong>Care on Your Terms:</strong> You and your therapist set the frequency and length of sessions - no payer limits</li>
                    <li><strong>Your Choice of Therapist:</strong> No network restrictions dictating who you can work with</li>
                    <li><strong>Discreet by Design:</strong> Secure <a href="/telehealth-therapy">telehealth</a> throughout Michigan or a private, professional Dearborn office</li>
                    <li><strong>Flexible Payment:</strong> Superbills for possible out-of-network reimbursement, plus HSA/FSA accepted</li>
                    <li><strong>Experienced with Professionals:</strong> We understand the discretion executives and high-profile clients require</li>
                </ul>

                <h2>Confidential Telehealth Throughout Michigan</h2>

                <p>All of our private-pay services are available via secure, HIPAA-compliant telehealth to clients anywhere in Michigan. For busy professionals who value both privacy and convenience, telehealth offers a discreet way to attend therapy from a home office or private space - with the same confidentiality and quality of care as an in-person visit. When you'd prefer to be seen in person, our Dearborn office provides a quiet, professional setting.</p>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Why would I choose to pay privately instead of using insurance?</h3>
                        <p>Clients choose private pay for privacy and freedom. When you don't bill insurance, there is no mental-health diagnosis attached to your insurance record, no payer setting limits on how often or how long you're seen, and no utilization review or treatment reports sent to a third party. You keep complete control over your care and your confidentiality.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance require a mental-health diagnosis to be on file?</h3>
                        <p>Yes. To reimburse for therapy, insurers require a formal mental-health diagnosis, and that diagnosis becomes part of your permanent insurance record. Many professionals and executives prefer private pay specifically so that no diagnosis is ever reported to an insurer.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What are out-of-network benefits and can I still get reimbursed?</h3>
                        <p>Many PPO plans include out-of-network benefits that reimburse a portion of what you pay for therapy. We can provide a superbill - an itemized receipt - that you submit to your insurer for possible partial reimbursement. Reimbursement depends on your specific plan, so we recommend confirming your out-of-network mental-health benefits directly with your insurer.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can I use my HSA or FSA to pay for private-pay therapy?</h3>
                        <p>Yes. We accept payment from health savings accounts (HSA) and flexible spending accounts (FSA), which lets you pay for your therapy with pre-tax dollars while keeping your care private.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can I see any therapist I want if I pay privately?</h3>
                        <p>Yes. Paying privately frees you from network restrictions, so you can choose the therapist who is the best fit for you rather than whoever your plan lists as in-network. You and your therapist also decide together on session frequency and length without a payer's limits.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Discreet, Private Therapy on Your Terms</h3>
                    <p>Complete confidentiality by telehealth statewide or in person in Dearborn.</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <div class="callout">
                    <p><strong>Related Pages:</strong></p>
                    <ul>
                        <li><a href="/insurance">Insurance Plans Accepted</a></li>
                        <li><a href="/individual-therapy">Individual Therapy Services</a></li>
                        <li><a href="/telehealth-therapy">Telehealth Therapy in Michigan</a></li>
                        <li><a href="/executive-stress-therapy-michigan">Executive Stress Therapy</a></li>
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
