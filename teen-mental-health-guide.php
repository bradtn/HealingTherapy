<?php
// Page-specific variables
$page_title = 'Teen Mental Health: Warning Signs & How Parents Can Help';
$page_description = 'Teen mental health warning signs, normal moodiness vs. something more, how parents can help, and when to seek therapy. Dearborn, MI and telehealth.';
$canonical_url = 'https://www.healingtherapycenter.com/teen-mental-health-guide';

// Article Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => 'Recognizing Mental Health Warning Signs in Teenagers: A Parent\'s Guide',
    'description' => $page_description,
    'url' => $canonical_url,
    'mainEntityOfPage' => $canonical_url,
    'image' => 'https://www.healingtherapycenter.com/assets/img/teen-mental-health.jpg',
    'datePublished' => '2025-12-27',
    'dateModified' => '2026-10-26',
    'author' => [
        '@type' => 'Person',
        'name' => 'Dr. Nadia Habhab'
    ],
    'publisher' => [
        '@type' => 'Organization',
        'name' => 'Healing Therapy Center',
        'url' => 'https://www.healingtherapycenter.com'
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

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
    $hero_eyebrow = 'From Our Blog';
    $hero_h1 = 'Recognizing Mental Health Warning Signs in Teenagers: A Parent\'s Guide';
    $hero_cta = false;
    $hero_meta = '<p class="post-meta"><span>Dr. Nadia Habhab</span><span>12/27/2025</span><span>Updated 10/26/2026</span></p>';
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <img src="/assets/img/teen-mental-health.jpg" alt="teen mental health therapy michigan" loading="lazy">

                <p>The teenage years are a time of tremendous change—physical, emotional, and social. While some mood swings and challenges are normal parts of adolescent development, it can be difficult for parents to know when their teen is struggling with something more serious.</p>

                <p>At <a href="/">Healing Therapy Center</a>, we work with many families navigating the complexities of teen mental health. Understanding the warning signs and knowing how to respond can make all the difference in your teenager's wellbeing.</p>

                <h2>The Teen Mental Health Crisis</h2>
                <p>Teen mental health challenges have been rising steadily, with rates accelerating in recent years. According to the CDC, more than 1 in 3 high school students experienced persistent feelings of sadness or hopelessness. Factors contributing to this crisis include:</p>
                <p>&middot; Increased academic pressure</p>
                <p>&middot; Social media and online pressures</p>
                <p>&middot; Reduced in-person social connections</p>
                <p>&middot; Uncertainty about the future</p>
                <p>&middot; Family stressors</p>
                <p>&middot; Identity and developmental challenges</p>

                <h2>Common Mental Health Challenges in Teens</h2>
                <h3>Depression</h3>
                <p>Teen depression may look different from adult depression. Watch for persistent irritability, withdrawal from friends and activities, declining grades, changes in sleep or appetite, and expressions of hopelessness. Read more about <a href="/depression-counseling-michigan">depression counseling</a>.</p>

                <h3>Anxiety</h3>
                <p>Anxiety disorders are among the most common mental health issues in teens. This can include generalized anxiety, social anxiety, panic attacks, or specific phobias. Anxiety may show up as avoidance of school, social situations, or activities they once enjoyed. See how we approach <a href="/anxiety-therapy-michigan">anxiety therapy</a>.</p>

                <h3>ADHD</h3>
                <p>While often diagnosed in childhood, some teens aren't identified until the increased demands of middle or high school reveal their struggles with attention, organization, and impulse control. An <a href="/adhd-testing-evaluation">ADHD evaluation</a> can help sort out whether ADHD, anxiety, a learning difference or something else is behind the struggles.</p>

                <h3>Eating Disorders</h3>
                <p>Teens are particularly vulnerable to eating disorders, which can include anorexia, bulimia, binge eating, or other disordered eating patterns. These conditions are serious medical and mental health concerns requiring specialized treatment, so start with your teen&rsquo;s doctor if you are worried.</p>

                <h3>Self-Harm and Suicidal Thoughts</h3>
                <p>Some teens cope with emotional pain through self-harm or may experience suicidal thoughts. These are serious warning signs that require immediate professional attention.</p>
                <div class="callout callout--brand">
                    <h3>If your teen may be in danger</h3>
                    <p>If your teen talks about wanting to die, has a plan, or has hurt themselves seriously, do not leave them alone. Call <strong>911</strong> or go to the nearest emergency room.</p>
                    <p><strong>988 Suicide &amp; Crisis Lifeline:</strong> call or text <strong>988</strong> (teens can use it too)</p>
                    <p><strong>Crisis Text Line:</strong> text HOME to <strong>741741</strong></p>
                    <p>More options are on our <a href="/suicide-hotline">crisis resources page</a>.</p>
                </div>

                <h2>Warning Signs Every Parent Should Know</h2>
                <p>While every teen is different, the following changes may indicate your teenager is struggling:</p>

                <p><b>Behavioral Changes:</b></p>
                <p>&middot; Withdrawal from friends and family</p>
                <p>&middot; Dropping activities they used to enjoy</p>
                <p>&middot; Declining academic performance</p>
                <p>&middot; Changes in sleep patterns (too much or too little)</p>
                <p>&middot; Changes in eating habits</p>
                <p>&middot; Increased secrecy or lying</p>
                <p>&middot; Risk-taking behavior</p>

                <p><b>Emotional Changes:</b></p>
                <p>&middot; Persistent sadness or hopelessness</p>
                <p>&middot; Increased irritability or anger</p>
                <p>&middot; Excessive worry or fear</p>
                <p>&middot; Emotional outbursts disproportionate to situations</p>
                <p>&middot; Expressing feelings of worthlessness</p>
                <p>&middot; Talking about death or suicide</p>

                <p><b>Physical Signs:</b></p>
                <p>&middot; Frequent headaches or stomachaches</p>
                <p>&middot; Unexplained weight changes</p>
                <p>&middot; Fatigue or low energy</p>
                <p>&middot; Neglecting personal hygiene</p>
                <p>&middot; Signs of self-harm (cuts, burns, unexplained injuries)</p>

                <h2>How Parents Can Help</h2>
                <p><b>1. Create Open Communication</b></p>
                <p>Let your teen know you're available to listen without judgment. Choose low-pressure moments for conversations (like during car rides). Ask open-ended questions and really listen to the answers. Avoid minimizing their feelings or jumping to problem-solving mode.</p>

                <p><b>2. Stay Connected</b></p>
                <p>Maintain family routines and rituals. Show interest in their world—their friends, music, interests. Spend quality time together, even if it's just watching their favorite show. Connection is protective against mental health struggles.</p>

                <p><b>3. Model Healthy Coping</b></p>
                <p>Teens learn from watching adults. Talk about how you manage stress. Demonstrate healthy habits like exercise, adequate sleep, and limiting screen time. Show them it's okay to ask for help when needed.</p>

                <p><b>4. Set Reasonable Expectations</b></p>
                <p>Balance high expectations with emotional support. Focus on effort rather than just outcomes. Help them manage their schedule to avoid burnout. Recognize that their mental health matters more than perfect grades or achievements.</p>

                <p><b>5. Monitor Social Media Use</b></p>
                <p>Have ongoing conversations about online life. Set boundaries around screen time and device use. Know what platforms they're using. Watch for signs of cyberbullying or negative online experiences.</p>

                <p><b>6. Know When to Seek Help</b></p>
                <p>Don't wait until things are severe. If you notice persistent changes lasting more than two weeks, declining functioning at school or home, or any signs of self-harm or suicidal thoughts, seek professional help promptly.</p>

                <h2>The Benefits of Teen Therapy</h2>
                <p>Therapy provides teens with:</p>
                <p>&middot; A safe, confidential space to express themselves</p>
                <p>&middot; Tools to manage difficult emotions</p>
                <p>&middot; Strategies for handling stress and pressure</p>
                <p>&middot; Support navigating relationships and identity</p>
                <p>&middot; A neutral adult perspective outside the family</p>
                <p>&middot; Early intervention that can prevent more serious problems</p>

                <h2>Frequently Asked Questions</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <h3>How do I know if it is normal teen moodiness or something more?</h3>
                        <p>Ups and downs are part of adolescence. Pay closer attention when changes last more than two weeks, show up in several areas at once (sleep, friends, school, appetite), or get in the way of daily life. Any talk of self-harm or suicide should always be taken seriously.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Will the therapist tell me what my teen says in sessions?</h3>
                        <p>Most therapists agree on privacy ground rules with the teen and parents at the start. Parents usually hear about overall progress and are always told about safety concerns, while the details of what a teen shares stay private. That privacy is often what helps teens open up.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How do I bring up therapy with my teen?</h3>
                        <p>Choose a calm moment, describe what you have noticed without blame, and present therapy as support rather than punishment. Giving your teen some say, such as choosing between in-person and telehealth sessions, can make them more willing to try.</p>
                    </div>
                </div>

                <h2>Supporting Your Teen's Mental Health Journey</h2>
                <p>At <a href="/">Healing Therapy Center</a>, our therapists specialize in working with adolescents and their families. We offer both <a href="/individual-therapy">individual therapy</a> for teens and <a href="/family-therapy">family therapy</a> to help improve communication and strengthen relationships.</p>

                <p>We provide in-person sessions at our Dearborn, Michigan office and <a href="/telehealth-therapy">telehealth therapy</a> throughout Michigan—which many teens actually prefer for its convenience and privacy. <a href="/malak-wehbe">Malak Wehbe, MA, TLLP</a> focuses on child and adolescent therapy, including anxiety, depression, ADHD and family conflict, and <a href="/dr-nadia-habhab">Dr. Nadia Habhab, PhD, LP</a> provides <a href="/psychological-testing">psychological testing</a> when a clearer diagnosis is needed.</p>

                <p>We accept most major insurance plans including Blue Cross Blue Shield, Aetna, Priority Health, McLaren, and HAP. <a href="/appointment">Schedule an appointment today</a> or call us at <a href="tel:313-654-1915">(313) 654-1915</a>. Your teenager's mental health matters.</p>

                <p><a href="/all-blogs">&larr; All Articles &amp; Guides</a></p>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
