<?php
// Page-specific variables — verbatim from production
$page_title = 'Couples Therapy & Marriage Counseling | Dearborn, MI';
$page_description = 'Couples therapy & marriage counseling in Dearborn, MI. Help with communication, relationship anxiety & codependency. LGBTQ affirming. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/couples-therapy';
$current_service = 'couples';

require_once __DIR__ . '/includes/config.php';

// Service + FAQPage Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Couples Therapy',
            'serviceType' => 'Couples Therapy and Marriage Counseling',
            'description' => 'Couples therapy and marriage counseling in Dearborn, Michigan. Evidence-based help with communication, attachment styles, relationship anxiety, codependency, and rebuilding trust, offered in person and via telehealth throughout Michigan.',
            'url' => 'https://www.healingtherapycenter.com/couples-therapy',
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
                    'name' => 'Does insurance cover couples therapy in Michigan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many insurance plans do cover couples therapy, especially when one partner has a diagnosable mental health condition (such as anxiety or depression) that affects the relationship. Coverage varies by plan. We recommend calling your insurance provider to verify benefits, and our office can help you understand your coverage when you call (313) 654-1915.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if my partner doesn\'t want to go to couples therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'It\'s common for one partner to be more hesitant about therapy initially. If your partner is resistant, consider individual therapy first to work on your own communication and relationship patterns—this often creates positive changes that can motivate a hesitant partner to participate. You can also suggest a "trial" of just a few sessions to see if it\'s helpful. Many initially reluctant partners become engaged once they experience therapy in a safe, non-judgmental environment.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Will the therapist take sides or tell us to break up?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Ethical couples therapists remain neutral and work for the relationship system, not for either individual partner. We don\'t tell couples to stay together or break up—that decision is always yours. Our role is to help you communicate more effectively, understand each other better, and make informed decisions about your relationship from a place of clarity rather than reactivity.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How long does couples therapy take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'This varies significantly based on the severity of issues, how long problems have existed, and both partners\' commitment to change. Some couples see improvement in 8-12 sessions for focused issues, while couples dealing with infidelity, severe communication breakdown, or long-standing patterns may benefit from 20+ sessions. Your therapist will work with you to set goals and assess progress regularly.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can couples therapy help if we\'re already considering divorce?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes. Couples therapy can help even when divorce seems likely. Sometimes therapy helps couples reconnect and rebuild their relationship. Other times, it helps couples gain clarity about the decision to separate and provides tools for a healthier, less contentious divorce and co-parenting relationship. Either outcome is valuable—what matters is that you make the decision from a place of clarity and effort rather than regret.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if we\'ve tried couples therapy before and it didn\'t work?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Not all therapists are equally skilled in couples work, and the fit between couple and therapist matters greatly. If previous therapy wasn\'t helpful, consider whether the therapist was specifically trained in couples therapy, whether both partners were equally committed, and whether you gave the process enough time. A different therapist with specialized training and a different approach may lead to very different results.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Is couples therapy just venting to a therapist, or will we learn actual skills?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'While processing emotions is part of couples therapy, evidence-based approaches teach concrete, practical skills you can use immediately: active listening techniques, conflict de-escalation strategies, emotional regulation tools, and ways to rebuild intimacy and friendship. You\'ll practice these skills in session and apply them at home between sessions.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How much does couples therapy cost in Dearborn?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Our couples therapy rates are competitive with the Metro Detroit area. Session costs vary depending on whether you use insurance (copay/coinsurance rates) or self-pay. Many couples find that investing in their relationship through therapy is far less expensive—financially and emotionally—than separation or divorce. Call us at (313) 654-1915 for specific pricing and to verify your insurance coverage.'
                    ]
                ]
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
    $hero_h1 = 'Couples Therapy &amp; Marriage Counseling in Dearborn, MI';
    $hero_img = 'svc-hero-couples';
    $hero_img_alt = 'A couple in a supportive therapy session';
    include __DIR__ . '/includes/image-hero.php';
    ?>

    <section class="page">
        <div class="shell with-sidebar">
            <article class="prose">
                <h2>Restore Connection &amp; Rebuild Your Relationship</h2>
                <p>Does your relationship feel stuck in the same argument patterns? Are you and your partner struggling to communicate without conflict? Do you feel distant, disconnected, or unsure if your relationship can improve? At Healing Therapy Center in Dearborn, Michigan, our couples therapy and marriage counseling services help partners throughout Metro Detroit rebuild connection, resolve conflicts, and create the loving relationship they both deserve.</p>

                <p>Whether you're navigating a major life transition, recovering from infidelity, dealing with intimacy issues, or simply want to strengthen your bond before problems escalate, our experienced relationship therapists provide compassionate, evidence-based support to help your relationship thrive.</p>

                <h2>What is Couples Therapy?</h2>
                <p>Couples therapy (also called marriage counseling or relationship therapy) is a specialized form of psychotherapy where both partners meet with a trained therapist to improve their relationship. Unlike individual therapy, couples therapy focuses on the relationship itself—the patterns, communication styles, and emotional dynamics between partners.</p>

                <p>During couples therapy sessions at our Dearborn office, you and your partner will work together with a licensed therapist to identify problem areas, develop healthier communication skills, and rebuild emotional intimacy. Our therapists create a safe, non-judgmental space where both partners feel heard and supported.</p>

                <h2>Common Relationship Issues We Help With</h2>
                <p>Every couple faces challenges. Our Dearborn couples therapists have extensive experience helping partners work through:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Communication Breakdown</h3>
                        <p>Conversations ending in arguments? Partner not listening? We teach active listening, "I" statements, and emotional validation to help you truly hear each other.</p>
                    </div>
                    <div class="panel">
                        <h3>Constant Conflict &amp; Arguments</h3>
                        <p>Stuck in repetitive argument cycles? We help break destructive patterns and address underlying emotional needs driving the conflict.</p>
                    </div>
                    <div class="panel">
                        <h3>Infidelity &amp; Trust Issues</h3>
                        <p>Recovering from betrayal? We provide specialized support to process pain, rebuild trust, and decide together on the relationship's future.</p>
                    </div>
                    <div class="panel">
                        <h3>Intimacy &amp; Sexual Problems</h3>
                        <p>Sexual intimacy challenges are common. We provide a safe environment to address desire discrepancies and rebuild intimate connection.</p>
                    </div>
                    <div class="panel">
                        <h3>Parenting Disagreements</h3>
                        <p>Disagreeing on discipline or parenting styles? We help couples align on goals and present a united front while respecting differences.</p>
                    </div>
                    <div class="panel">
                        <h3>Life Transitions &amp; Changes</h3>
                        <p>Marriage, new baby, job loss, retirement—major changes strain relationships. We help partners navigate transitions together.</p>
                    </div>
                    <div class="panel">
                        <h3>Emotional Disconnection</h3>
                        <p>Feel like roommates? We help partners reconnect emotionally and rebuild the friendship and romance lost to busy schedules.</p>
                    </div>
                    <div class="panel">
                        <h3>Financial Stress &amp; Money Conflicts</h3>
                        <p>Money disagreements create stress. We help develop healthy financial communication and aligned money management strategies.</p>
                    </div>
                    <div class="panel">
                        <h3>Attachment Styles &amp; Relationship Anxiety</h3>
                        <p>Anxious attachment or avoidant attachment patterns affecting your relationship? We help partners understand attachment styles and build secure bonds.</p>
                    </div>
                    <div class="panel">
                        <h3>Unhealthy Relationship Patterns</h3>
                        <p>Recognizing gaslighting signs, love bombing, codependency, or narcissistic personality traits? We help establish healthy boundaries in relationships.</p>
                    </div>
                </div>

                <h2>Evidence-Based Couples Therapy Approaches</h2>
                <p>Our marriage counselors are trained in multiple therapeutic approaches and tailor treatment to each couple's unique needs:</p>

                <div class="callout callout--soft">
                    <h3>Emotionally Focused Therapy (EFT)</h3>
                    <p><strong>70% success rate.</strong> Identifies and transforms negative emotional patterns. Particularly effective for emotional disconnection, recurring conflicts, and trust issues.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>The Gottman Method</h3>
                    <p><strong>40+ years of research.</strong> Builds friendship, manages conflict constructively. Avoids the "Four Horsemen": criticism, contempt, defensiveness, stonewalling.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Cognitive Behavioral Therapy (CBT)</h3>
                    <p>Identifies damaging thought patterns and behaviors, replacing them with healthier alternatives. Practical tools for positive interactions.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Imago Relationship Therapy</h3>
                    <p>Explores how childhood experiences shape current dynamics. Develops empathy and heals old wounds within the safety of your relationship.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Solution-Focused Brief Therapy</h3>
                    <p>For specific, concrete issues. Emphasizes strengths and resources. Goal-oriented work on targeted problems.</p>
                </div>

                <h2>When Should You Seek Couples Therapy?</h2>

                <div class="panel">
                    <p>Many couples wait <strong>6 years</strong> before seeking help. Early intervention leads to better outcomes.</p>
                    <p><strong>Consider couples therapy if:</strong></p>
                    <ul>
                        <li>Arguing about same issues repeatedly</li>
                        <li>Communication has broken down</li>
                        <li>Feeling emotionally distant</li>
                        <li>Considering separation/divorce</li>
                        <li>Infidelity or betrayal occurred</li>
                        <li>Intimacy has decreased significantly</li>
                        <li>Life changes creating stress</li>
                        <li>Want to strengthen relationship (premarital)</li>
                        <li>Trauma/mental health affecting relationship</li>
                        <li>Feel like roommates, not partners</li>
                        <li>Partner suggested therapy</li>
                    </ul>
                </div>

                <div class="callout">
                    <p><strong>You don't have to be in crisis to benefit.</strong> Many couples use therapy as "relationship maintenance" to strengthen their bond before problems escalate.</p>
                </div>

                <h2>What to Expect in Therapy</h2>

                <div class="step-row">
                    <div>
                        <h3>First Session</h3>
                        <p>60-90 min assessment</p>
                    </div>
                    <div>
                        <h3>Ongoing Sessions</h3>
                        <p>Weekly/biweekly, 50-60 min</p>
                    </div>
                    <div>
                        <h3>Both Commit</h3>
                        <p>Active participation needed</p>
                    </div>
                    <div>
                        <h3>Timeline</h3>
                        <p>8-20 sessions typical</p>
                    </div>
                </div>

                <h2>Does Couples Therapy Work?</h2>

                <div class="panel">
                    <h3>Research-Proven Success Rates</h3>
                    <ul class="check-list check-list--2col">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> <strong>70%</strong> report significant improvement (AAMFT)</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> <strong>70-75%</strong> recover with EFT</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Gottman Method shows significant quality gains</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Early intervention = better outcomes</li>
                    </ul>
                    <p><em>Note: Therapy doesn't "save" every relationship—sometimes it provides clarity for healthy separation.</em></p>
                </div>

                <h2>Premarital Counseling</h2>

                <div class="callout callout--brand">
                    <h3>Start Your Marriage Strong</h3>
                    <p>Why wait for problems? Build a foundation before marriage:</p>
                    <ul class="check-list check-list--2col">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Discuss expectations &amp; lifestyle</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Learn communication skills</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Address potential conflicts early</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Explore values (money, parenting)</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Build emotional connection</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Understand family backgrounds</li>
                    </ul>
                    <p><strong>30% higher success rate</strong> with premarital counseling</p>
                </div>

                <h2>Why Choose Healing Therapy Center?</h2>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Specialized Training</h3>
                        <p>Advanced training in EFT, Gottman Method, Imago—not all therapists specialize in couples work.</p>
                    </div>
                    <div class="panel">
                        <h3>Culturally Sensitive</h3>
                        <p>All backgrounds welcome: cultural, religious, racial, LGBTQ+ partnerships honored.</p>
                    </div>
                    <div class="panel">
                        <h3>Flexible Scheduling</h3>
                        <p>Evening and Saturday appointments available for busy couples.</p>
                    </div>
                    <div class="panel">
                        <h3>In-Person &amp; Telehealth</h3>
                        <p>Comfortable Dearborn office or secure video sessions from home.</p>
                    </div>
                    <div class="panel">
                        <h3>Insurance Accepted</h3>
                        <p>Blue Cross Blue Shield, Aetna, Priority Health, McLaren, HAP.</p>
                    </div>
                    <div class="panel">
                        <h3>Convenient Location</h3>
                        <p>Dearborn office near I-94. Serving Wayne &amp; Oakland Counties.</p>
                    </div>
                </div>

                <h2>Frequently Asked Questions About Couples Therapy</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Does insurance cover couples therapy in Michigan?</h3>
                        <p>Many insurance plans do cover couples therapy, especially when one partner has a diagnosable mental health condition (such as anxiety or depression) that affects the relationship. Coverage varies by plan. We recommend calling your insurance provider to verify benefits, and our office can help you understand your coverage when you call (313) 654-1915.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if my partner doesn't want to go to couples therapy?</h3>
                        <p>It's common for one partner to be more hesitant about therapy initially. If your partner is resistant, consider <a href="/individual-therapy">individual therapy</a> first to work on your own communication and relationship patterns—this often creates positive changes that can motivate a hesitant partner to participate. You can also suggest a "trial" of just a few sessions to see if it's helpful. Many initially reluctant partners become engaged once they experience therapy in a safe, non-judgmental environment.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Will the therapist take sides or tell us to break up?</h3>
                        <p>Ethical couples therapists remain neutral and work for the relationship system, not for either individual partner. We don't tell couples to stay together or break up—that decision is always yours. Our role is to help you communicate more effectively, understand each other better, and make informed decisions about your relationship from a place of clarity rather than reactivity.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How long does couples therapy take?</h3>
                        <p>This varies significantly based on the severity of issues, how long problems have existed, and both partners' commitment to change. Some couples see improvement in 8-12 sessions for focused issues, while couples dealing with infidelity, severe communication breakdown, or long-standing patterns may benefit from 20+ sessions. Your therapist will work with you to set goals and assess progress regularly.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can couples therapy help if we're already considering divorce?</h3>
                        <p>Yes. Couples therapy can help even when divorce seems likely. Sometimes therapy helps couples reconnect and rebuild their relationship. Other times, it helps couples gain clarity about the decision to separate and provides tools for a healthier, less contentious divorce and co-parenting relationship. Either outcome is valuable—what matters is that you make the decision from a place of clarity and effort rather than regret.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if we've tried couples therapy before and it didn't work?</h3>
                        <p>Not all therapists are equally skilled in couples work, and the fit between couple and therapist matters greatly. If previous therapy wasn't helpful, consider whether the therapist was specifically trained in couples therapy, whether both partners were equally committed, and whether you gave the process enough time. A different therapist with specialized training and a different approach may lead to very different results.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is couples therapy just venting to a therapist, or will we learn actual skills?</h3>
                        <p>While processing emotions is part of couples therapy, evidence-based approaches teach concrete, practical skills you can use immediately: active listening techniques, conflict de-escalation strategies, emotional regulation tools, and ways to rebuild intimacy and friendship. You'll practice these skills in session and apply them at home between sessions.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How much does couples therapy cost in Dearborn?</h3>
                        <p>Our couples therapy rates are competitive with the Metro Detroit area. Session costs vary depending on whether you use insurance (copay/coinsurance rates) or self-pay. Many couples find that investing in their relationship through therapy is far less expensive—financially and emotionally—than separation or divorce. Call us at (313) 654-1915 for specific pricing and to verify your insurance coverage.</p>
                    </div>
                </div>

                <div class="callout callout--info">
                    <h3>Serving Metro Detroit</h3>
                    <p><strong>Wayne County:</strong> Dearborn, Dearborn Heights, Allen Park, Plymouth, Livonia, Westland, Canton • <strong>Oakland County:</strong> Novi, Farmington Hills, Southfield, Royal Oak • <strong>Telehealth:</strong> Anywhere in Michigan</p>
                </div>

                <h2>Ready to Strengthen Your Relationship?</h2>
                <p>You don't have to navigate relationship challenges alone. Whether you're facing a crisis or simply want to build a stronger partnership, our experienced couples therapists at Healing Therapy Center in Dearborn are here to help.</p>

                <div class="callout callout--info">
                    <h3>Take the First Step Toward a Healthier Relationship</h3>
                    <p><strong>Call us today:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></p>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>Hours:</strong> Monday-Friday 9:00 AM - 5:00 PM, Saturday 9:00 AM - 2:00 PM</p>
                    <p><a class="btn btn--pill btn--primary" href="/appointment">Request an Appointment Online</a></p>
                </div>

                <div class="callout">
                    <h3>Insurance Accepted</h3>
                    <p>We accept most major insurance plans including Blue Cross Blue Shield of Michigan (<a href="/fep-blue-federal-employee-therapy">FEP Blue for federal employees</a>), Aetna, Priority Health, McLaren Health Plan, and HAP. <a href="/insurance">View all accepted insurance plans</a>. Both in-person (Dearborn office) and telehealth appointments available throughout Michigan. Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify your coverage.</p>
                </div>

                <p><em>Evening and weekend appointments available. Both in-person and telehealth sessions offered.</em></p>
            </article>

            <?php include __DIR__ . '/includes/sidebar-services.php'; ?>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
