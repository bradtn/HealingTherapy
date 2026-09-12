<?php
// Page-specific variables
$page_title = 'Trauma & PTSD Therapy Michigan | HTC Dearborn';
$page_description = 'Specialized trauma and PTSD therapy in Michigan. EMDR, trauma-focused CBT, somatic therapy. Expert treatment for childhood trauma, PTSD, complex trauma.';
$canonical_url = 'https://www.healingtherapycenter.com/trauma-ptsd-treatment';

// FAQPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'How long does trauma therapy take?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'This varies based on trauma type, complexity, and individual factors. Single-incident trauma (car accident) may improve in 6-12 sessions. Complex or childhood trauma often requires longer-term work. Healing happens at your pace.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'What is EMDR and does it really work?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'EMDR uses bilateral stimulation while you focus on trauma memories, helping your brain reprocess them. It sounds unusual but is backed by extensive research showing effectiveness equal to or better than other trauma therapies, often with faster results.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Can old trauma (from childhood) still be treated?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Absolutely. It\'s never too late to heal childhood trauma. Many people successfully process decades-old trauma in adulthood and experience profound relief.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Is telehealth effective for trauma therapy?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes. Research shows telehealth trauma therapy, including EMDR, is effective. It also provides safety and privacy some trauma survivors prefer.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Does insurance cover PTSD treatment in Michigan?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Most Michigan insurance plans cover PTSD and trauma treatment. We accept Blue Cross Blue Shield, Aetna, Priority Health, McLaren, and HAP. Call (313) 654-1915 to verify coverage.'
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
    $hero_eyebrow = 'Specialized Care';
    $hero_h1 = 'Trauma Therapy &amp; PTSD Treatment in Michigan';
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Are you haunted by traumatic memories, flashbacks, or nightmares? Do you avoid people, places, or activities that remind you of past trauma? At Healing Therapy Center, our trauma-specialized therapists provide compassionate, evidence-based trauma therapy and PTSD treatment throughout Michigan via secure telehealth or in-person at our Dearborn office.</p>

                <p>Trauma affects how your brain and body process fear, safety, and relationships. But healing is possible. With specialized trauma therapy, you can process traumatic experiences, reduce symptoms, and reclaim your life.</p>

                <div class="callout callout--soft">
                    <h3>You Don't Have to Carry Trauma Alone</h3>
                    <p>Trauma therapy provides a safe, supportive space to process painful experiences at your own pace. Healing is possible - and you don't have to relive trauma to heal from it. Specialized approaches like EMDR help your brain reprocess traumatic memories so they no longer control your life.</p>
                </div>

                <h2>Types of Trauma We Treat</h2>
                <div class="grid-2">
                    <div class="panel">
                        <h3>PTSD (Post-Traumatic Stress Disorder)</h3>
                        <p>Develops after experiencing or witnessing traumatic events: accidents, assault, combat, natural disasters, sudden loss. Symptoms include intrusive memories, flashbacks, nightmares, avoidance, negative thoughts, hypervigilance, and exaggerated startle response. We offer specialized <a href="/ptsd-therapy-federal-law-enforcement">PTSD treatment for federal law enforcement</a> and first responders.</p>
                    </div>
                    <div class="panel">
                        <h3>Complex PTSD (C-PTSD)</h3>
                        <p>Results from prolonged, repeated trauma (childhood abuse, domestic violence, captivity). In addition to PTSD symptoms, C-PTSD involves difficulty regulating emotions, negative self-concept, and relationship problems.</p>
                    </div>
                    <div class="panel">
                        <h3>Childhood Trauma &amp; ACEs</h3>
                        <p>Trauma experienced during childhood - abuse, neglect, household dysfunction - profoundly affects adult mental health, relationships, and physical health. Healing childhood trauma is possible at any age.</p>
                    </div>
                    <div class="panel">
                        <h3>Sexual Assault &amp; Abuse</h3>
                        <p>Sexual trauma creates unique challenges including shame, self-blame, trust issues, and intimacy difficulties. Specialized trauma therapy provides safe space for healing.</p>
                    </div>
                    <div class="panel">
                        <h3>Domestic Violence</h3>
                        <p>Physical, emotional, or sexual abuse by intimate partners causes complex trauma. Therapy addresses both trauma symptoms and relationship patterns.</p>
                    </div>
                    <div class="panel">
                        <h3>Accident or Injury Trauma</h3>
                        <p>Car accidents, workplace injuries, medical trauma can cause PTSD. Treatment helps process the event and reduce fear responses.</p>
                    </div>
                    <div class="panel">
                        <h3>Grief &amp; Loss Trauma</h3>
                        <p>Sudden, violent, or traumatic loss (suicide, homicide, accidents) creates complicated grief requiring trauma-informed treatment.</p>
                    </div>
                </div>

                <h2>Signs You May Need Trauma Therapy</h2>
                <div class="callout callout--soft">
                    <ul class="check-list check-list--2col">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Intrusive memories, flashbacks, or nightmares about traumatic events</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Avoiding people, places, activities, or conversations related to trauma</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Negative thoughts about yourself, others, or the world</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Persistent feelings of fear, horror, anger, guilt, or shame</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Feeling emotionally numb or disconnected</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Hypervigilance - constantly scanning for danger</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Easily startled or always "on edge"</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Difficulty trusting others or maintaining relationships</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Difficulty sleeping or concentrating</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Self-destructive behavior or substance use</li>
                    </ul>
                </div>

                <h2>Evidence-Based Trauma Treatments</h2>

                <div class="callout callout--soft">
                    <h3>EMDR (Eye Movement Desensitization &amp; Reprocessing)</h3>
                    <p>EMDR is one of the most effective trauma treatments, helping your brain reprocess traumatic memories so they're less distressing. During EMDR, you briefly focus on traumatic memories while engaging in bilateral stimulation (eye movements, tapping, or sounds). This helps your brain process the trauma and reduce its emotional charge. Many people experience significant relief in 6-12 sessions. Research shows EMDR is as effective as trauma-focused CBT with faster results for some.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Trauma-Focused CBT</h3>
                    <p>Specialized CBT helping you process trauma memories, challenge unhelpful trauma-related beliefs, and develop coping skills. Includes gradual exposure to trauma reminders in safe, controlled ways to reduce avoidance and fear.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Prolonged Exposure Therapy</h3>
                    <p>Helps you safely confront trauma-related memories, feelings, and situations you've been avoiding. By repeatedly revisiting trauma memories in a safe therapeutic environment, they become less overwhelming.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Somatic Experiencing</h3>
                    <p>Trauma is stored in the body, not just the mind. Somatic approaches help release trauma held in your nervous system through body awareness and gentle physical techniques.</p>
                </div>
                <div class="callout callout--soft">
                    <h3>Internal Family Systems (IFS)</h3>
                    <p>Views trauma through the lens of "parts" - protective parts that helped you survive trauma and wounded parts carrying trauma pain. IFS helps these parts heal and integrate.</p>
                </div>

                <h2>How Trauma Therapy Works</h2>
                <p>Trauma therapy is gentle and proceeds at your pace. You're always in control.</p>

                <div class="step-row">
                    <div>
                        <h4>Safety &amp; Stabilization</h4>
                        <p>We build coping skills, establish safety, and strengthen your ability to manage difficult emotions before processing trauma.</p>
                    </div>
                    <div>
                        <h4>Processing Trauma</h4>
                        <p>Using EMDR, exposure therapy, or other methods, we carefully process traumatic memories. You won't be re-traumatized - therapy helps you process trauma so it no longer controls you.</p>
                    </div>
                    <div>
                        <h4>Integration &amp; Moving Forward</h4>
                        <p>As trauma symptoms decrease, we focus on rebuilding your life, improving relationships, and creating meaning from your experience.</p>
                    </div>
                </div>

                <h2>Do I Have to Talk About the Trauma in Detail?</h2>
                <p>Not necessarily. EMDR and some other trauma therapies don't require detailed verbal recounting of trauma. You focus on the memory internally while the therapist guides the processing. For other approaches, you gradually share details at your own pace. You're never forced to discuss anything before you're ready.</p>

                <h2>Telehealth Trauma Therapy Throughout Michigan</h2>
                <p>We provide trauma therapy via secure telehealth to clients throughout Michigan. Research shows telehealth EMDR and trauma therapy are effective. Many trauma survivors prefer therapy from the safety and privacy of home.</p>

                <h2>Frequently Asked Questions</h2>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>How long does trauma therapy take?</h3>
                        <p>This varies based on trauma type, complexity, and individual factors. Single-incident trauma (car accident) may improve in 6-12 sessions. Complex or childhood trauma often requires longer-term work. Healing happens at your pace.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What is EMDR and does it really work?</h3>
                        <p>EMDR uses bilateral stimulation while you focus on trauma memories, helping your brain reprocess them. It sounds unusual but is backed by extensive research showing effectiveness equal to or better than other trauma therapies, often with faster results.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Can old trauma (from childhood) still be treated?</h3>
                        <p>Absolutely. It's never too late to heal childhood trauma. Many people successfully process decades-old trauma in adulthood and experience profound relief.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is telehealth effective for trauma therapy?</h3>
                        <p>Yes. Research shows telehealth trauma therapy, including EMDR, is effective. It also provides safety and privacy some trauma survivors prefer.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Does insurance cover PTSD treatment in Michigan?</h3>
                        <p>Most Michigan insurance plans cover PTSD and trauma treatment. We accept Blue Cross Blue Shield (including <a href="/fep-blue-federal-employee-therapy">FEP Blue for federal employees</a>), Aetna, Priority Health, McLaren, and HAP. <a href="/insurance">View all accepted insurance plans</a>. Call (313) 654-1915 to verify coverage.</p>
                    </div>
                </div>

                <div class="callout callout--brand">
                    <h3>Begin Trauma Healing Today</h3>
                    <p><span style="white-space:nowrap"><strong>Call:</strong> <a href="tel:313-654-1915">(313) 654-1915</a></span></p>
                    <p><strong>Location:</strong> 835 Mason St STE D160, Dearborn, MI 48124</p>
                    <p>Telehealth available throughout Michigan. <a href="/appointment">Request an appointment online</a></p>
                </div>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
