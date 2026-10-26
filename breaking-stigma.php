<?php
// Page-specific variables
$page_title = 'Mental Health Stigma: Why Seeking Therapy Takes Strength';
$page_description = 'Why stigma stops people seeking therapy, the myths behind it, how to talk to family about it, and what therapy is really like. From our Dearborn, MI therapists.';
$canonical_url = 'https://www.healingtherapycenter.com/breaking-stigma';

// Article + FAQPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Article',
            'headline' => 'Breaking the Stigma Around Seeking Mental Health Treatment',
            'description' => $page_description,
            'url' => $canonical_url,
            'mainEntityOfPage' => $canonical_url,
            'image' => 'https://www.healingtherapycenter.com/assets/img/blog-4.jpg',
            'datePublished' => '2025-11-18',
            'dateModified' => '2026-10-26',
            'author' => [
                '@type' => 'Person',
                'name' => 'Amal Ayad'
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Healing Therapy Center',
                'url' => 'https://www.healingtherapycenter.com'
            ]
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'Is what I say in therapy confidential?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Therapists are required by law and professional ethics to keep what you share private. There are a few limited exceptions, such as when someone is at serious risk of harm or a child or vulnerable adult is being abused, and your therapist will explain them at your first session.']
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do I need a mental health diagnosis to see a therapist?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'No. People come to therapy for stress, relationships, life changes and personal growth as well as for conditions like anxiety or depression. If you use insurance, your plan will usually need a diagnosis code to pay for sessions; paying privately is an alternative.']
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What happens at a first therapy session?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'The first session is mostly a conversation. Your therapist will ask what brings you in, a little about your background and what you hope will change, explain how they work, and answer your questions. You decide how much to share.']
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Can I start therapy online if I am not ready to come in person?',
                    'acceptedAnswer' => ['@type' => 'Answer', 'text' => 'Yes. Healing Therapy Center offers secure telehealth sessions anywhere in Michigan, which many people find a more private and comfortable way to begin.']
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

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
    $hero_h1 = 'Breaking the Stigma Around Seeking Mental Health Treatment';
    $hero_cta = false;
    $hero_meta = '<p class="post-meta"><span>Amal Ayad</span><span>11/18/2025</span><span>Updated 10/26/2026</span></p>';
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <img src="/assets/img/blog-4.jpg" alt="Two people talking openly about mental health" loading="lazy">

                <p>Tens of millions of adults in the United States get help for their mental health every year, through therapy, counselling or medication. Even so, many people still wait months or years before reaching out, and stigma is one of the biggest reasons. Worry about what others will think, or about what it says about us, keeps a lot of people from support that could help.</p>
                <p>This article looks at what stigma is, the common myths about therapy, practical ways to move past them, and what to expect if you decide to take the first step.</p>

                <h2>What Is Mental Health Stigma?</h2>
                <p>Stigma is when someone is seen in a negative way because of a characteristic that others view as a weakness or a flaw. With mental health, it shows up in a few forms:</p>
                <ul>
                    <li><b>Public stigma:</b> negative attitudes in the wider community, such as jokes, labels, or assuming someone who struggles must be &ldquo;unstable.&rdquo;</li>
                    <li><b>Self-stigma:</b> when we absorb those attitudes and turn them on ourselves: &ldquo;I should be able to handle this,&rdquo; or &ldquo;needing help means I have failed.&rdquo;</li>
                    <li><b>Quiet discrimination:</b> being treated differently, left out, or passed over once someone knows you are struggling.</li>
                </ul>
                <p>Stigma can also be shaped by family expectations, culture, faith community or profession. In some families, personal struggles are kept private. In some jobs, such as healthcare, law or first response, people fear that asking for help will be seen as weakness. These concerns are real, and a good therapist will take them seriously.</p>

                <h2>Common Misconceptions About Therapy</h2>

                <h3>&ldquo;Therapy is only for people with serious mental health problems.&rdquo;</h3>
                <p>Therapy helps people from all walks of life: those managing anxiety or depression, and also those dealing with stress, relationship strain, grief, a big life change, or simply wanting to understand themselves better. Starting therapy also does not mean you will be in it forever; many people come for a set number of sessions focused on a specific goal.</p>

                <h3>&ldquo;Going to therapy means I am weak.&rdquo;</h3>
                <p>It takes courage to admit something is hard and to do something about it. We would not call someone weak for seeing a doctor about a physical injury, and caring for your mental health is no different.</p>

                <h3>&ldquo;Therapists just listen. They don&rsquo;t really help.&rdquo;</h3>
                <p>Listening is part of it, but licensed therapists are trained to use structured, evidence-based approaches that help people build insight and skills. Some of the methods therapists use include:</p>
                <ul>
                    <li><b>Cognitive Behavioral Therapy (CBT):</b> helps you notice and change unhelpful patterns of thinking and behaviour, using practical strategies you can use between sessions.</li>
                    <li><b>Dialectical Behavior Therapy (DBT):</b> a skills-based approach for managing intense emotions and handling relationships.</li>
                    <li><b>Acceptance and Commitment Therapy (ACT):</b> helps you make room for difficult thoughts and feelings rather than fighting them, and take steps toward what matters to you.</li>
                    <li><b>Exposure therapy:</b> gradually and safely facing feared situations so that avoidance loses its hold.</li>
                    <li><b>Interpersonal Psychotherapy (IPT):</b> a time-limited approach that focuses on relationships and how they affect mood.</li>
                    <li><b>Motivational Interviewing (MI):</b> a collaborative way of strengthening your own motivation to make changes you care about.</li>
                </ul>

                <h3>&ldquo;Talking about my problems won&rsquo;t change anything.&rdquo;</h3>
                <p>Talking on its own may not fix everything, but therapy is more than venting. It gives structure, new perspectives and concrete strategies, and it gives you someone outside your situation who is focused entirely on helping you move forward.</p>

                <h2>How to Move Past the Stigma</h2>

                <h3>Learn the facts</h3>
                <p>Mental health conditions are common and treatable. Learning how therapy actually works, and sharing what you learn, helps break down myths for you and the people around you.</p>

                <h3>Talk about it, at your own pace</h3>
                <p>Every honest conversation about mental health makes the next one easier, for you and for others. You do not have to tell everyone. Starting with one trusted person is enough.</p>

                <h3>Reframe therapy as self-care</h3>
                <p>Think of therapy as an investment in your wellbeing, the same way you might invest in your physical health with exercise or regular check-ups.</p>

                <h3>Start in a way that feels comfortable</h3>
                <p>If walking into an office feels like too big a step, <a href="/telehealth-therapy">telehealth therapy</a> lets you start from home. You can also call and ask questions before you book anything. Our guide on <a href="/how-to-find-the-right-therapist">how to find the right therapist</a> covers what to ask.</p>

                <h3>Find supportive people</h3>
                <p>Support groups, trusted friends, a faith leader or your family doctor can all help you feel less alone and more confident about reaching out.</p>

                <h2>Talking to Family About Therapy</h2>
                <p>If you are worried about how your family will react, it can help to:</p>
                <ul>
                    <li>Explain what you hope to get out of it, for example sleeping better, worrying less, or getting along better at home.</li>
                    <li>Describe therapy as learning skills, not as a label.</li>
                    <li>Remember that you decide what to share, and that sessions are confidential.</li>
                    <li>Look for a therapist who understands your background. Several of <a href="/therapists">our therapists</a> focus on culturally responsive care, including <a href="/dr-nadia-habhab">Dr. Nadia Habhab</a> and <a href="/malak-wehbe">Malak Wehbe</a>. Dr. Habhab also writes about <a href="/person-first-approach">treating the person, not the diagnosis</a>.</li>
                </ul>
                <p>If your family is open to it, <a href="/family-therapy">family therapy</a> can be a way to work through these conversations together.</p>

                <h2>What Therapy at Healing Therapy Center Looks Like</h2>
                <p>Our licensed therapists offer a private, non-judgmental space to work on what matters to you, whether that is anxiety, depression, stress, relationships, life transitions or past trauma. Most people start with <a href="/individual-therapy">individual therapy</a>; we also offer couples, family and group sessions. You can meet with us in person at our Dearborn office or online anywhere in Michigan. Professionals worried about stigma at work may find our pages on <a href="/first-responder-therapy-michigan">therapy for first responders</a> and <a href="/physician-burnout-therapy-michigan">physician burnout</a> helpful.</p>

                <h2>Frequently Asked Questions</h2>
                <div class="faq-list">
                    <div class="faq-item">
                        <h3>Is what I say in therapy confidential?</h3>
                        <p>Yes. Therapists are required by law and professional ethics to keep what you share private. There are a few limited exceptions, such as when someone is at serious risk of harm or a child or vulnerable adult is being abused, and your therapist will explain them at your first session.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do I need a mental health diagnosis to see a therapist?</h3>
                        <p>No. People come to therapy for stress, relationships, life changes and personal growth as well as for conditions like anxiety or depression. If you use insurance, your plan will usually need a diagnosis code to pay for sessions; <a href="/private-pay-out-of-network-therapy">paying privately</a> is an alternative.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What happens at a first therapy session?</h3>
                        <p>The first session is mostly a conversation. Your therapist will ask what brings you in, a little about your background and what you hope will change, explain how they work, and answer your questions. You decide how much to share.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can I start therapy online if I am not ready to come in person?</h3>
                        <p>Yes. We offer secure telehealth sessions anywhere in Michigan, which many people find a more private and comfortable way to begin.</p>
                    </div>
                </div>

                <h2>Taking the First Step</h2>
                <p>Reaching out is a strong, practical step toward feeling better. If you are ready, <a href="/appointment">request an appointment</a> or call us at <a href="tel:313-654-1915">(313) 654-1915</a> with any questions. If you are in crisis right now, call or text <strong>988</strong> or see our <a href="/suicide-hotline">crisis resources</a>.</p>

                <p><a href="/all-blogs">&larr; All Articles &amp; Guides</a></p>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
