<?php
// Page-specific variables — verbatim from production
$page_title = 'Family Therapy in Dearborn, MI | Insurance Accepted';
$page_description = 'Family therapy in Dearborn, MI. Improve communication, resolve conflicts, strengthen bonds. BCBS, Aetna, Priority Health accepted. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/family-therapy';
$current_service = 'family';

require_once __DIR__ . '/includes/config.php';

// Service + FAQPage Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'Family Therapy',
            'serviceType' => 'Family Therapy',
            'description' => 'Family therapy in Dearborn, Michigan to improve communication, resolve conflicts, and strengthen family bonds. Serving families throughout Wayne and Oakland Counties with in-person and telehealth sessions.',
            'url' => 'https://www.healingtherapycenter.com/family-therapy',
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
                    'name' => 'Does everyone in the family have to attend?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Not necessarily. While having all relevant family members attend is often ideal, therapy can still be effective if one member can\'t or won\'t participate. Your therapist will work with whoever is willing to attend and can create change within the family system even when everyone isn\'t present.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if my child refuses to go to therapy?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'This is common, especially with teenagers. Start by attending with the willing family members—seeing positive changes may encourage the reluctant member to join later. Your therapist can also provide strategies for engaging resistant family members. Sometimes starting with individual parent sessions or parent-child sessions (instead of full family) is less threatening.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Will the therapist take sides or blame someone?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Ethical family therapists remain neutral and view problems as relational patterns rather than any individual\'s fault. The goal is understanding how the family system operates, not assigning blame. Everyone contributes to family patterns, and everyone can contribute to change.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How long does family therapy take?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'This varies greatly depending on the issues being addressed. Some families see improvement in 8-12 sessions for focused problems, while families dealing with complex trauma, severe behavioral issues, or long-standing patterns may benefit from 6+ months of work. Your therapist will regularly assess progress and adjust as needed.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What age do children need to be to participate?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Children as young as 3-4 can participate in family therapy when therapists use developmentally appropriate, play-based techniques. Older children and teenagers can engage in verbal processing. Your therapist will adapt methods to each family member\'s developmental level.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can family therapy help if parents are divorcing?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Absolutely. Family therapy helps divorcing parents establish healthy co-parenting relationships, support children through the transition, and minimize the negative impact of divorce on children. Even after divorce, you\'re still a family—just a different structure.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does insurance cover family therapy in Michigan?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Many insurance plans do cover family therapy, especially when there\'s a diagnosable mental health condition. Coverage varies by plan and sometimes depends on who is listed as the "identified patient." Our office can help verify your benefits when you call (313) 654-1915.'
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
    $hero_h1 = 'Family Therapy &amp; Family Counseling in Dearborn, MI';
    $hero_img = 'svc-hero-family';
    $hero_img_alt = 'A family together in a warm, comfortable setting';
    include __DIR__ . '/includes/image-hero.php';
    ?>

    <section class="page">
        <div class="shell with-sidebar">
            <article class="prose">
                <h2>Family Therapy &amp; Family Counseling in Dearborn, MI</h2>
                <p>Is your family struggling with constant conflict, communication breakdowns, or behavioral challenges? Are you navigating difficult life transitions like divorce, blended family dynamics, or a teenager's mental health crisis? At Healing Therapy Center in Dearborn, Michigan, our family therapy services help families throughout Metro Detroit improve communication, resolve conflicts, and rebuild healthy, supportive relationships.</p>

                <p>Family therapy recognizes that families function as interconnected systems—when one member struggles, the entire family is affected. Our experienced family therapists work with families of all types and structures to create positive change, strengthen bonds, and develop healthier ways of relating to one another.</p>

                <h2>What is Family Therapy?</h2>
                <p>Family therapy (also called family counseling or family systems therapy) is a form of psychotherapy that involves multiple family members working together with a trained therapist to improve family dynamics, resolve conflicts, and address mental health or behavioral issues affecting the family system.</p>

                <p>Unlike individual therapy, which focuses on one person's thoughts and behaviors, family therapy views problems through a relational lens—examining how family members interact, communicate, and influence each other. Sessions typically include parents, children, siblings, and sometimes extended family members, depending on the specific issues being addressed.</p>

                <h2>Common Family Issues We Address</h2>
                <p>Our family therapists help families work through:</p>

                <div class="grid-2">
                    <div class="panel">
                        <h3>Parent-Teen Conflict</h3>
                        <p>Defiance, withdrawal, risky behaviors. Improve communication, set boundaries, maintain connection during adolescence.</p>
                    </div>
                    <div class="panel">
                        <h3>Divorce &amp; Co-Parenting</h3>
                        <p>Adjust to divorce, support children, establish healthy co-parenting relationships.</p>
                    </div>
                    <div class="panel">
                        <h3>Blended Families</h3>
                        <p>Merge different cultures and styles. Address stepparent relationships, loyalty conflicts, discipline disagreements.</p>
                    </div>
                    <div class="panel">
                        <h3>Sibling Rivalry</h3>
                        <p>Intense fighting affecting home environment. Develop conflict resolution skills, fair mediation.</p>
                    </div>
                    <div class="panel">
                        <h3>Mental Health Issues</h3>
                        <p>One member's depression, anxiety, ADHD, autism impacts whole family. Education and support systems.</p>
                    </div>
                    <div class="panel">
                        <h3>Substance Abuse</h3>
                        <p>Addiction affects entire family. Establish boundaries, rebuild trust, support recovery.</p>
                    </div>
                    <div class="panel">
                        <h3>Grief &amp; Loss</h3>
                        <p>Death, illness, significant loss. Process grief together, support each other through mourning.</p>
                    </div>
                    <div class="panel">
                        <h3>Life Transitions</h3>
                        <p>Relocation, job loss, new baby, college. Navigate changes together, adjust to new roles.</p>
                    </div>
                    <div class="panel">
                        <h3>Communication Breakdown</h3>
                        <p>Yelling, shutting down, arguing. Learn effective communication and conflict resolution.</p>
                    </div>
                    <div class="panel">
                        <h3>Multigenerational Conflict</h3>
                        <p>Conflicts with grandparents, in-laws. Establish boundaries, improve cross-generation communication.</p>
                    </div>
                </div>

                <h2>Evidence-Based Family Therapy Approaches</h2>
                <p>Our therapists select methods based on each family's unique needs:</p>

                <div class="callout callout--soft">
                    <h3>Structural Family Therapy</h3>
                    <p>Examines family organization, hierarchies, boundaries. Effective for behavioral problems and unclear boundaries.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Systemic Family Therapy</h3>
                    <p>Views problems as interaction patterns, not individual pathology. Helps families develop healthier relating patterns.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Emotionally Focused Family Therapy (EFFT)</h3>
                    <p>Based on attachment theory. Helps families develop more secure, responsive relationships.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Narrative Therapy</h3>
                    <p>Helps families "re-author" problematic stories. Develops empowering, solution-focused narratives.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Solution-Focused Brief Therapy</h3>
                    <p>Emphasizes strengths and desired futures. Goal-oriented approach for practical solutions.</p>
                </div>

                <h2>Who Attends Family Therapy Sessions?</h2>
                <p>This depends on the specific issues and treatment goals. Common configurations include:</p>
                <ul>
                    <li><strong>Nuclear Family Sessions:</strong> Parents and children (most common)</li>
                    <li><strong>Parental Subsystem:</strong> Just parents, to address parenting strategies or marital issues affecting children</li>
                    <li><strong>Parent-Child Dyad:</strong> One parent with one child to address specific relationship issues</li>
                    <li><strong>Sibling Subsystem:</strong> Siblings without parents to address sibling relationships</li>
                    <li><strong>Extended Family:</strong> Including grandparents, stepparents, or other significant family members when relevant</li>
                </ul>

                <p>Your family therapist will recommend the most effective session format based on your family's needs and may vary who attends across different sessions.</p>

                <h2>What to Expect in Therapy</h2>

                <div class="step-row">
                    <div>
                        <h3>Assessment</h3>
                        <p>60-90 min family evaluation</p>
                    </div>
                    <div>
                        <h3>Safety &amp; Rules</h3>
                        <p>Respectful communication</p>
                    </div>
                    <div>
                        <h3>Sessions</h3>
                        <p>Weekly, 50-60 minutes</p>
                    </div>
                    <div>
                        <h3>Participation</h3>
                        <p>All members engage</p>
                    </div>
                </div>

                <h2>Does Family Therapy Work?</h2>
                <p>Research demonstrates that family therapy is highly effective for a wide range of issues:</p>
                <ul>
                    <li><strong>Adolescent behavioral problems:</strong> Family therapy is more effective than individual therapy alone for teen substance abuse, delinquency, and behavioral disorders</li>
                    <li><strong>Eating disorders:</strong> Family-based treatment is the most effective approach for adolescent anorexia and bulimia</li>
                    <li><strong>Childhood mental health:</strong> Family involvement significantly improves treatment outcomes for childhood anxiety, depression, and ADHD</li>
                    <li><strong>Relationship improvement:</strong> 65-75% of families report significant improvement in family functioning after family therapy</li>
                    <li><strong>Treatment adherence:</strong> Family therapy increases compliance with medical and psychiatric treatment for chronic illnesses</li>
                </ul>

                <h2>Family Therapy vs. Individual Therapy: Which is Right?</h2>
                <p>Sometimes families wonder whether their child (or another family member) needs individual therapy, family therapy, or both. Here's guidance:</p>

                <p><strong>Consider Family Therapy When:</strong></p>
                <ul>
                    <li>Problems involve family relationships or communication</li>
                    <li>One member's issue is affecting the entire family</li>
                    <li>Behavioral problems seem related to family dynamics</li>
                    <li>Major family changes (divorce, blended family, loss) are occurring</li>
                    <li>Family conflict is ongoing and unresolved</li>
                </ul>

                <p><strong>Consider Individual Therapy When:</strong></p>
                <ul>
                    <li>One person has a specific mental health diagnosis needing individual treatment</li>
                    <li>Personal trauma or issues exist outside family context</li>
                    <li>An individual needs a private space to work through personal issues</li>
                </ul>

                <p><strong>Many families benefit from BOTH</strong> <a href="/individual-therapy">individual therapy</a> and family therapy, with family members attending their own sessions while also participating in family sessions.</p>

                <h2>Why Choose Healing Therapy Center for Family Therapy in Dearborn?</h2>

                <h3>Specialized Family Therapy Training</h3>
                <p>Our therapists have advanced training in family systems approaches and understand the unique dynamics of working with multiple family members simultaneously—not all therapists are trained in family therapy modalities.</p>

                <h3>Experience with Diverse Family Structures</h3>
                <p>We work with all types of families: nuclear families, single-parent families, blended/stepfamilies, adoptive families, foster families, grandparents raising grandchildren, LGBTQ+ families, and extended family systems. We honor your unique family structure and cultural background.</p>

                <h3>Child &amp; Adolescent Expertise</h3>
                <p>Our therapists are skilled at engaging children and teenagers in therapy, using age-appropriate techniques to ensure younger family members feel comfortable participating and being heard.</p>

                <h3>Flexible Scheduling</h3>
                <p>We understand that scheduling therapy for multiple family members is challenging. We offer evening and Saturday appointments to accommodate school and work schedules.</p>

                <h3>Insurance Accepted</h3>
                <p>We accept most major insurance plans including Blue Cross Blue Shield, Aetna, Priority Health, McLaren Health Plan, and HAP. Many plans cover family therapy—call (313) 654-1915 to verify your coverage.</p>

                <h3>Convenient Dearborn Location</h3>
                <p>Our office is located at 835 Mason St STE D160 in Dearborn, easily accessible from I-94 and major routes throughout Metro Detroit. We serve families from Dearborn, Dearborn Heights, Allen Park, Plymouth, Livonia, Westland, Canton, and throughout Wayne and Oakland Counties.</p>

                <h2>Frequently Asked Questions About Family Therapy</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Does everyone in the family have to attend?</h3>
                        <p>Not necessarily. While having all relevant family members attend is often ideal, therapy can still be effective if one member can't or won't participate. Your therapist will work with whoever is willing to attend and can create change within the family system even when everyone isn't present.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What if my child refuses to go to therapy?</h3>
                        <p>This is common, especially with teenagers. Start by attending with the willing family members—seeing positive changes may encourage the reluctant member to join later. Your therapist can also provide strategies for engaging resistant family members. Sometimes starting with individual parent sessions or parent-child sessions (instead of full family) is less threatening.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Will the therapist take sides or blame someone?</h3>
                        <p>Ethical family therapists remain neutral and view problems as relational patterns rather than any individual's fault. The goal is understanding how the family system operates, not assigning blame. Everyone contributes to family patterns, and everyone can contribute to change.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How long does family therapy take?</h3>
                        <p>This varies greatly depending on the issues being addressed. Some families see improvement in 8-12 sessions for focused problems, while families dealing with complex trauma, severe behavioral issues, or long-standing patterns may benefit from 6+ months of work. Your therapist will regularly assess progress and adjust as needed.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What age do children need to be to participate?</h3>
                        <p>Children as young as 3-4 can participate in family therapy when therapists use developmentally appropriate, play-based techniques. Older children and teenagers can engage in verbal processing. Your therapist will adapt methods to each family member's developmental level.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can family therapy help if parents are divorcing?</h3>
                        <p>Absolutely. Family therapy helps divorcing parents establish healthy co-parenting relationships, support children through the transition, and minimize the negative impact of divorce on children. Even after divorce, you're still a family—just a different structure.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance cover family therapy in Michigan?</h3>
                        <p>Many insurance plans do cover family therapy, especially when there's a diagnosable mental health condition. Coverage varies by plan and sometimes depends on who is listed as the "identified patient." Our office can help verify your benefits when you call (313) 654-1915.</p>
                    </div>
                </div>

                <h2>Serving Family Therapy Clients Throughout Metro Detroit</h2>
                <p>Our Dearborn location provides convenient access to families throughout Southeast Michigan, including:</p>
                <ul>
                    <li><strong>Wayne County:</strong> Dearborn, Dearborn Heights, Allen Park, Lincoln Park, Taylor, Southgate, Plymouth, Livonia, Westland, Canton, Garden City, Romulus, and surrounding areas</li>
                    <li><strong>Oakland County:</strong> Novi, Northville, Farmington Hills, Southfield, Royal Oak, Birmingham, and nearby communities</li>
                </ul>

                <h2>Ready to Strengthen Your Family?</h2>
                <p>Every family faces challenges. The difference is whether you face them alone or with professional support. Our family therapists at Healing Therapy Center in Dearborn are here to help your family communicate better, resolve conflicts, and build healthier, happier relationships.</p>

                <div class="callout callout--info">
                    <h3>Take the First Step Toward a Healthier Family</h3>
                    <p><strong>Call us today:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></p>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p><strong>Hours:</strong> Monday-Friday 9:00 AM - 5:00 PM, Saturday 9:00 AM - 2:00 PM</p>
                    <p><a class="btn btn--pill btn--primary" href="/appointment">Request an Appointment Online</a></p>
                </div>

                <div class="callout">
                    <h3>Insurance Accepted</h3>
                    <p>We accept most major insurance plans including Blue Cross Blue Shield of Michigan, Aetna, Priority Health, McLaren Health Plan, and HAP. Both in-person (Dearborn office) and telehealth appointments available throughout Michigan. Call <a href="tel:313-654-1915">(313) 654-1915</a> to verify your coverage.</p>
                </div>

                <p><em>Evening and weekend appointments available. We work with all family structures and configurations.</em></p>
            </article>

            <?php include __DIR__ . '/includes/sidebar-services.php'; ?>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
