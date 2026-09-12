<?php
// Page-specific variables — verbatim from production
$page_title = 'Individual Therapy in Dearborn, MI | Insurance Accepted';
$page_description = 'Individual therapy in Dearborn, MI for anxiety, depression, trauma, PTSD & grief. EMDR, CBT, LGBTQ affirming care. Insurance accepted. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/individual-therapy';
$current_service = 'individual';

require_once __DIR__ . '/includes/config.php';

// Service + FAQPage Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Individual Therapy',
            'serviceType' => 'Individual Therapy',
            'description' => 'One-on-one therapy in Dearborn, Michigan for anxiety, depression, trauma, PTSD, and grief. Evidence-based approaches including EMDR, CBT, and trauma-informed care, offered in person and via secure telehealth throughout Michigan.',
            'url' => 'https://www.healingtherapycenter.com/individual-therapy',
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
                ['@type' => 'Question', 'name' => 'How long does individual therapy take?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'There\'s no set timeline for therapy—it depends on your goals, the complexity of your concerns, and how quickly you progress. Some people achieve their goals in 8-12 sessions (short-term therapy), while others benefit from longer-term support over several months or years. Many clients start with weekly sessions and gradually reduce frequency as they improve. Your therapist will regularly discuss progress and help you determine when you\'ve met your goals.']],
                ['@type' => 'Question', 'name' => 'Does insurance cover individual therapy in Michigan?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Most major insurance plans in Michigan cover individual therapy for mental health conditions. Coverage varies by plan, but typically includes a certain number of sessions per year with copays ranging from $10-$50 per session. We recommend calling your insurance provider or our office at (313) 654-1915 to verify your specific coverage, copay amounts, and deductible information before your first appointment.']],
                ['@type' => 'Question', 'name' => 'What if I don\'t feel comfortable with my therapist?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The therapeutic relationship is the most important factor in successful therapy outcomes. It\'s completely normal and okay if you don\'t feel a good connection with your first therapist. We encourage you to discuss any concerns with your therapist first, as sometimes comfort builds over time. However, if after 2-3 sessions you still don\'t feel it\'s a good fit, we\'re happy to help you find a different therapist on our team whose style might be a better match for you. Your comfort and progress are our priorities.']],
                ['@type' => 'Question', 'name' => 'How much does individual therapy cost without insurance?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Our self-pay rates for individual therapy sessions range from $100-$175 per 50-minute session, depending on the therapist\'s experience level and credentials. We offer a sliding scale fee structure for clients experiencing financial hardship, with rates as low as $75 per session based on income. We also provide superbills for clients with out-of-network insurance benefits who want to submit for reimbursement.']],
                ['@type' => 'Question', 'name' => 'Can I do therapy online or do I have to come to your Dearborn office?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'We offer both in-person therapy at our Dearborn location and secure telehealth (online video) therapy for Michigan residents. Research shows that telehealth therapy is equally effective as in-person therapy for most mental health concerns. Many of our clients appreciate the convenience of attending sessions from home, eliminating drive time and parking concerns. You can also switch between in-person and telehealth sessions based on your schedule and preferences.']],
                ['@type' => 'Question', 'name' => 'How do I know if I need therapy?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Consider therapy if you\'re experiencing persistent feelings of sadness, anxiety, or hopelessness; struggling to manage daily responsibilities; using unhealthy coping mechanisms like substance use or self-harm; experiencing relationship conflicts or breakups; feeling stuck or unfulfilled in life; having intrusive thoughts or difficulty concentrating; or simply wanting professional support during a challenging time. You don\'t need to be in crisis to benefit from therapy—many people seek counseling for personal growth or to work through life transitions.']],
                ['@type' => 'Question', 'name' => 'What\'s the difference between a therapist, psychologist, and psychiatrist?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'These terms can be confusing! A therapist (or counselor) is a licensed mental health professional who provides talk therapy and can include Licensed Professional Counselors (LPC), Licensed Clinical Social Workers (LCSW), or Licensed Marriage and Family Therapists (LMFT). A psychologist has a doctoral degree (Ph.D. or Psy.D.) in psychology, provides therapy, and can conduct psychological testing. A psychiatrist is a medical doctor (M.D. or D.O.) who specializes in mental health and can prescribe medication, though they typically don\'t provide regular talk therapy. Our team includes various types of licensed therapists to meet your needs.']],
                ['@type' => 'Question', 'name' => 'Will my therapist tell me what to do?', 'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Good therapy is collaborative, not directive. While your therapist won\'t tell you exactly what to do (since only you know what\'s best for your life), they will help you explore your options, understand patterns in your thinking and behavior, challenge unhelpful beliefs, and develop skills to make decisions that align with your values and goals. Think of your therapist as a guide and partner in your journey, not someone who hands you a prescription for how to live.']]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES);
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Our Services';
    $hero_h1 = 'Individual Therapy &amp; Counseling in Dearborn, Michigan';
    $hero_lead = "Are you struggling with anxiety that keeps you awake at night? Feeling overwhelmed by depression that makes everyday tasks feel impossible? Dealing with trauma or stress that won't let you move forward? You're not alone, and compassionate support is available right here in Dearborn, Michigan.";
    $hero_img = 'svc-hero-individual';
    $hero_img_alt = 'A calm individual therapy session in a warm, welcoming space';
    include __DIR__ . '/includes/image-hero.php';
    ?>

    <section class="page">
        <div class="shell with-sidebar">
            <article class="prose">
                <p>At Healing Therapy Center in Dearborn, our licensed individual therapists provide evidence-based counseling for adults and teens throughout Metro Detroit. Whether you're in Dearborn, Dearborn Heights, Allen Park, Plymouth, Livonia, or surrounding communities, our experienced team is here to support your mental health journey with personalized, compassionate care.</p>

                <h2>What is Individual Therapy?</h2>

                <div class="panel">
                    <p>Individual therapy is a collaborative process between you and a licensed mental health professional. In confidential one-on-one sessions, you'll work together to:</p>
                    <ul class="check-list check-list--2col">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Understand root causes of struggles</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Develop healthy coping strategies</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Process traumatic experiences safely</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Set meaningful personal goals</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Build resilience and self-awareness</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Create lasting positive changes</li>
                    </ul>
                </div>

                <div class="callout callout--info">
                    <p><strong>Why therapy over talking to friends?</strong> Professional therapy provides evidence-based techniques, objective perspectives, and a confidential space without judgment.</p>
                </div>

                <h2>Mental Health Conditions We Treat</h2>
                <p>Our individual therapy services help clients throughout Metro Detroit:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Anxiety &amp; Panic</h3>
                        <p>Constant worry, racing thoughts, panic attacks. We use CBT to help you understand triggers and face fears.</p>
                        <p><a href="/anxiety-therapy-michigan">Learn more →</a></p>
                    </div>
                    <div class="panel">
                        <h3>Depression &amp; Mood</h3>
                        <p>Persistent sadness, low energy, loss of joy. Compassionate support for all types of depression.</p>
                        <p><a href="/depression-counseling-michigan">Learn more →</a></p>
                    </div>
                    <div class="panel">
                        <h3>Trauma &amp; PTSD</h3>
                        <p>Flashbacks, nightmares, feeling unsafe. Trauma-focused therapy for healing.</p>
                        <p><a href="/trauma-ptsd-treatment">Learn more →</a></p>
                    </div>
                    <div class="panel">
                        <h3>Grief &amp; Loss</h3>
                        <p>Navigate complex feelings of loss, honor memories, and find ways to move forward.</p>
                    </div>
                    <div class="panel">
                        <h3>Stress &amp; Burnout</h3>
                        <p>Set boundaries, develop work-life balance, and build resilience for life's challenges. Specialized support for <a href="/shift-work-federal-employee-therapy">shift workers</a> and <a href="/federal-employee-stress-management-therapy">federal employees</a>.</p>
                    </div>
                    <div class="panel">
                        <h3>Life Transitions</h3>
                        <p>Support through divorce, career changes, relocation, parenthood, retirement, and more.</p>
                    </div>
                    <div class="panel">
                        <h3>Self-Esteem</h3>
                        <p>Challenge self-critical thoughts, develop self-compassion, build authentic confidence.</p>
                    </div>
                    <div class="panel">
                        <h3>Relationship Issues</h3>
                        <p>Improve communication, set boundaries, process trauma. Also see <a href="/couples-therapy">couples therapy</a>.</p>
                    </div>
                </div>

                <h2>Evidence-Based Therapy Approaches</h2>
                <p>Our therapists are trained in multiple modalities to customize treatment to your needs:</p>

                <div class="callout callout--soft">
                    <h3>Cognitive Behavioral Therapy (CBT)</h3>
                    <p>Most researched approach for anxiety, depression, PTSD, OCD. Structured, goal-oriented, produces quick results. Creates lasting changes in thought patterns.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Dialectical Behavior Therapy (DBT)</h3>
                    <p>For emotion regulation, self-harm, intense reactions. Teaches mindfulness, distress tolerance, emotion regulation, and interpersonal skills.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Mindfulness-Based Therapy</h3>
                    <p>Observe thoughts without judgment. Stay present. Respond thoughtfully vs. react automatically. Helpful for anxiety, depression, pain, stress.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>EMDR (Eye Movement Desensitization &amp; Reprocessing)</h3>
                    <p>Highly effective for trauma and PTSD. Uses bilateral stimulation to help your brain reprocess traumatic memories. Many clients experience significant relief in 6-12 sessions. Evidence-based treatment for trauma, anxiety, and disturbing memories.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Psychodynamic Therapy</h3>
                    <p>Explores how past experiences influence current patterns. Understand unconscious dynamics, gain insight, work through unresolved conflicts.</p>
                </div>

                <h2>What to Expect in Therapy</h2>

                <div class="step-row">
                    <div>
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="3.5"/><path d="M5 20a7 7 0 0 1 14 0"/></svg>
                        <h3>First Session</h3>
                        <p>Discuss goals, history, treatment plan</p>
                    </div>
                    <div>
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="5" width="16" height="15" rx="2"/><path d="M8 3v4M16 3v4M4 10h16"/></svg>
                        <h3>Sessions</h3>
                        <p>50-60 min, typically weekly</p>
                    </div>
                    <div>
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 18 10 12l3.5 3.5L20 9"/><path d="M15 9h5v5"/></svg>
                        <h3>Duration</h3>
                        <p>8-12 sessions or longer-term</p>
                    </div>
                    <div>
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="10" width="14" height="10" rx="2"/><path d="M8 10V7a4 4 0 0 1 8 0v3"/></svg>
                        <h3>Confidential</h3>
                        <p>Strictly protected by law</p>
                    </div>
                </div>

                <h2>Who Can Benefit from Therapy?</h2>

                <div class="callout">
                    <h3>Therapy helps with:</h3>
                    <ul class="check-list check-list--2col">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Managing mental health conditions</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Navigating life transitions</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Improving relationships</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Processing past trauma</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Developing coping skills</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Personal growth &amp; self-discovery</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Making important decisions</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Breaking destructive patterns</li>
                    </ul>
                    <p><strong>You don't need a crisis or diagnosis.</strong> Many seek therapy for growth and support during challenging times.</p>
                </div>

                <h2>Why Choose Healing Therapy Center?</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Licensed &amp; Experienced</h3>
                        <p>20+ combined years experience. Fully licensed in Michigan. Ongoing continuing education.</p>
                    </div>
                    <div class="panel">
                        <h3>Personalized Treatment</h3>
                        <p>No one-size-fits-all. Tailored to your needs, culture, and goals. Collaborative approach.</p>
                    </div>
                    <div class="panel">
                        <h3>Convenient Location</h3>
                        <p>Dearborn office near I-94. Free parking. Accessible facilities.</p>
                    </div>
                    <div class="panel">
                        <h3>Flexible Scheduling</h3>
                        <p>Evening and weekend appointments. Work with your schedule.</p>
                    </div>
                    <div class="panel">
                        <h3>Telehealth Available</h3>
                        <p>Secure online sessions for Michigan residents. Equally effective, more convenient.</p>
                    </div>
                    <div class="panel">
                        <h3>Insurance Accepted</h3>
                        <p>Blue Cross Blue Shield (including <a href="/fep-blue-federal-employee-therapy">FEP Blue for federal employees</a>), Aetna, Priority Health, McLaren, HAP. <a href="/insurance">View all accepted insurance plans</a>. Sliding scale available.</p>
                    </div>
                </div>

                <h2>Frequently Asked Questions About Individual Therapy</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>How long does individual therapy take?</h3>
                        <p>There's no set timeline for therapy—it depends on your goals, the complexity of your concerns, and how quickly you progress. Some people achieve their goals in 8-12 sessions (short-term therapy), while others benefit from longer-term support over several months or years. Many clients start with weekly sessions and gradually reduce frequency as they improve. Your therapist will regularly discuss progress and help you determine when you've met your goals.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance cover individual therapy in Michigan?</h3>
                        <p>Most major insurance plans in Michigan cover individual therapy for mental health conditions. Coverage varies by plan, but typically includes a certain number of sessions per year with copays ranging from $10-$50 per session. We recommend calling your insurance provider or our office at (313) 654-1915 to verify your specific coverage, copay amounts, and deductible information before your first appointment.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if I don't feel comfortable with my therapist?</h3>
                        <p>The therapeutic relationship is the most important factor in successful therapy outcomes. It's completely normal and okay if you don't feel a good connection with your first therapist. We encourage you to discuss any concerns with your therapist first, as sometimes comfort builds over time. However, if after 2-3 sessions you still don't feel it's a good fit, we're happy to help you find a different therapist on our team whose style might be a better match for you. Your comfort and progress are our priorities.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How much does individual therapy cost without insurance?</h3>
                        <p>Our self-pay rates for individual therapy sessions range from $100-$175 per 50-minute session, depending on the therapist's experience level and credentials. We offer a sliding scale fee structure for clients experiencing financial hardship, with rates as low as $75 per session based on income. We also provide superbills for clients with out-of-network insurance benefits who want to submit for reimbursement.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can I do therapy online or do I have to come to your Dearborn office?</h3>
                        <p>We offer both in-person therapy at our Dearborn location and secure telehealth (online video) therapy for Michigan residents. Research shows that telehealth therapy is equally effective as in-person therapy for most mental health concerns. Many of our clients appreciate the convenience of attending sessions from home, eliminating drive time and parking concerns. You can also switch between in-person and telehealth sessions based on your schedule and preferences.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How do I know if I need therapy?</h3>
                        <p>Consider therapy if you're experiencing persistent feelings of sadness, anxiety, or hopelessness; struggling to manage daily responsibilities; using unhealthy coping mechanisms like substance use or self-harm; experiencing relationship conflicts or breakups; feeling stuck or unfulfilled in life; having intrusive thoughts or difficulty concentrating; or simply wanting professional support during a challenging time. You don't need to be in crisis to benefit from therapy—many people seek counseling for personal growth or to work through life transitions.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What's the difference between a therapist, psychologist, and psychiatrist?</h3>
                        <p>These terms can be confusing! A therapist (or counselor) is a licensed mental health professional who provides talk therapy and can include Licensed Professional Counselors (LPC), Licensed Clinical Social Workers (LCSW), or Licensed Marriage and Family Therapists (LMFT). A psychologist has a doctoral degree (Ph.D. or Psy.D.) in psychology, provides therapy, and can conduct psychological testing. A psychiatrist is a medical doctor (M.D. or D.O.) who specializes in mental health and can prescribe medication, though they typically don't provide regular talk therapy. Our team includes various types of licensed therapists to meet your needs.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Will my therapist tell me what to do?</h3>
                        <p>Good therapy is collaborative, not directive. While your therapist won't tell you exactly what to do (since only you know what's best for your life), they will help you explore your options, understand patterns in your thinking and behavior, challenge unhelpful beliefs, and develop skills to make decisions that align with your values and goals. Think of your therapist as a guide and partner in your journey, not someone who hands you a prescription for how to live.</p>
                    </div>
                </div>

                <div class="callout callout--info">
                    <h3>Serving Metro Detroit &amp; Federal Employees</h3>
                    <p><strong>Wayne County:</strong> Dearborn, Dearborn Heights, Allen Park, Lincoln Park, Taylor, Plymouth, Livonia, Westland, Canton, Inkster, Romulus, Wayne, Garden City • <strong>Oakland County:</strong> Novi, Northville, Farmington Hills, Southfield, Royal Oak, Birmingham, Troy, Bloomfield Hills • <strong>Washtenaw:</strong> Ann Arbor, Ypsilanti • <strong>Telehealth:</strong> Anywhere in Michigan • <strong>Federal Employees:</strong> We accept FEP Blue insurance and are conveniently located near Detroit Federal Building, CBP Port of Entry, and USPS facilities. <a href="/fep-blue-federal-employee-therapy">Learn more</a></p>
                </div>

                <h2>Ready to Start Individual Therapy in Dearborn?</h2>
                <p>Taking the first step toward better mental health takes courage, and we're here to make it as easy as possible. Our compassionate individual therapists in Dearborn are accepting new clients for both in-person and online therapy sessions.</p>

                <p><strong>Call us today at <a href="tel:313-654-1915">(313) 654-1915</a></strong> to schedule your initial consultation, or <strong><a href="/appointment">request an appointment online</a></strong>. We typically have availability within 1-2 weeks and offer convenient evening and weekend appointment times.</p>

                <p>Don't wait to get the support you deserve. Whether you're dealing with anxiety, depression, trauma, life transitions, or simply want to better understand yourself and create positive change, individual therapy can help. Your healing journey starts here at Healing Therapy Center in Dearborn, Michigan.</p>

                <div class="callout callout--brand">
                    <h3>Contact Our Dearborn Office Today</h3>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>Hours:</strong> Monday-Friday 9am-7pm, Saturday 9am-2pm</p>
                    <p class="callout__actions">
                        <a href="tel:313-654-1915" class="btn btn--pill btn--primary">Call (313) 654-1915</a>
                        <a href="/appointment" class="btn btn--pill btn--ghost-light">Request an Appointment →</a>
                    </p>
                </div>

                <div class="callout">
                    <h3>Insurance Accepted</h3>
                    <p>We accept most major insurance plans including Blue Cross Blue Shield of Michigan, Aetna, Priority Health, McLaren Health Plan, and HAP. Both in-person (Dearborn office) and telehealth appointments available throughout Michigan. Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify your coverage.</p>
                </div>
            </article>

            <?php include __DIR__ . '/includes/sidebar-services.php'; ?>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
