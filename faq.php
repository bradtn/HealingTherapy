<?php
// Page-specific variables — verbatim from production
$page_title = 'FAQ | Healing Therapy Center Dearborn, MI';
$page_description = 'Get answers to common questions about therapy services, scheduling, insurance, and what to expect at Healing Therapy Center in Dearborn, Michigan.';
$canonical_url = 'https://www.healingtherapycenter.com/faq';
$og_title = 'Frequently Asked Questions | Healing Therapy Center';

require_once __DIR__ . '/includes/config.php';

// FAQ Schema for rich snippets — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'What types of therapy do you offer?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We offer a range of therapy services including Individual Therapy, Couples Therapy, Family Therapy, Group Therapy, Psychological Testing, and Telehealth Therapy. Each service is tailored to meet your specific needs and goals.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'How do I schedule an appointment?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Scheduling an appointment is easy! You can contact us via phone at (313) 654-1915, email, or through our online booking system on our website. Our team will assist you in finding a convenient time for your session.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'What can I expect during my first therapy session?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'During your first session, your therapist will get to know you and understand your concerns. This initial meeting is an opportunity to discuss your goals and develop a personalized treatment plan.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Do you offer online therapy sessions?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes, we offer Telehealth Therapy sessions. You can receive the same high-quality care from our licensed therapists through secure online sessions, allowing you to access therapy from the comfort of your home.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Are your therapists licensed and experienced?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Absolutely. All our therapists are licensed mental health professionals with years of experience in various therapeutic modalities. They are dedicated to providing compassionate and effective care.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'How do I know if therapy is right for me?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Therapy can be beneficial for anyone facing mental health challenges or seeking personal growth. If you\'re unsure, we offer initial consultations to help you determine if our services are a good fit for your needs.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'What insurance do you accept?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'We accept most major insurance plans including Blue Cross Blue Shield, FEP Blue for federal employees, Aetna, Priority Health, United Healthcare, HAP, McLaren, and many others. Our administrative team can help verify your benefits and explain any out-of-pocket costs before your first appointment.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Do you accept FEP Blue insurance for federal employees?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes! We accept FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance. Coverage, copays, deductibles, session limits, and authorization requirements vary by FEP Blue plan. We handle all insurance billing directly. Contact us at (313) 654-1915 to verify your specific FEP Blue benefits and schedule an appointment.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'How long does each therapy session last?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Individual therapy sessions typically last 50-60 minutes. The frequency of sessions depends on your individual needs and treatment plan, which you and your therapist will discuss together. Many clients start with weekly sessions and adjust as they progress in their healing journey.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Do you offer psychological testing and evaluations?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes, we offer comprehensive psychological testing including autism evaluations, ADHD assessments, and other diagnostic evaluations for children and adults. Our licensed psychologist conducts thorough assessments to provide accurate diagnoses and personalized treatment recommendations.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Is therapy confidential?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Absolutely. Confidentiality is a cornerstone of the therapeutic relationship. Everything discussed in therapy remains private, with few legal exceptions such as risk of harm to yourself or others. Your therapist will explain the limits of confidentiality during your first session so you feel safe and informed.'
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Resources';
    $hero_h1 = 'Frequently Asked Questions About Therapy';
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <h2>Frequently Asked Questions</h2>
                <p>Have questions about our services or what to expect? Check out our Frequently Asked Questions section for quick answers to common inquiries. We're here to help you feel informed and confident about your journey with Healing Therapy Center.</p>

                <div class="faq-list">
                    <div class="faq-item">
                        <h3>What types of therapy do you offer?</h3>
                        <p>We offer a range of therapy services including Individual Therapy, Couples Therapy, Family Therapy, Group Therapy, Psychological Testing, and Telehealth Therapy. Each service is tailored to meet your specific needs and goals.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How do I schedule an appointment?</h3>
                        <p>Scheduling an appointment is easy! You can contact us via phone, email, or through our online booking system on our website. Our team will assist you in finding a convenient time for your session.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What can I expect during my first therapy session?</h3>
                        <p>During your first session, your therapist will get to know you and understand your concerns. This initial meeting is an opportunity to discuss your goals and develop a personalized treatment plan.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do you offer online therapy sessions?</h3>
                        <p>Yes, we offer Telehealth Therapy sessions. You can receive the same high-quality care from our licensed therapists through secure online sessions, allowing you to access therapy from the comfort of your home.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Are your therapists licensed and experienced?</h3>
                        <p>Absolutely. All our therapists are licensed mental health professionals with years of experience in various therapeutic modalities. They are dedicated to providing compassionate and effective care.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How do I know if therapy is right for me?</h3>
                        <p>Therapy can be beneficial for anyone facing mental health challenges or seeking personal growth. If you're unsure, we offer initial consultations to help you determine if our services are a good fit for your needs.</p>
                    </div>
                    <div class="faq-item">
                        <h3>What insurance do you accept?</h3>
                        <p>We accept most major insurance plans including Blue Cross Blue Shield, Aetna, and many others. Our administrative team can help verify your benefits and explain any out-of-pocket costs before your first appointment. We believe financial concerns should not prevent anyone from receiving the mental health care they need.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do you accept FEP Blue insurance for federal employees?</h3>
                        <p>Yes! We are proud to accept FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance. Federal employees working for USPS, CBP, FBI, VA, and all other federal agencies often have excellent mental health coverage through FEP Blue.</p>
                        <p>FEP Blue may cover:</p>
                        <ul>
                            <li>Individual therapy for anxiety, depression, stress, and PTSD</li>
                            <li>Couples and marriage counseling</li>
                            <li>Family therapy</li>
                            <li>Psychological testing (ADHD evaluations, autism assessments)</li>
                            <li>Telehealth therapy sessions (may be covered similarly to in-person)</li>
                        </ul>
                        <p><strong>Important:</strong> Coverage, copays, deductibles, session limits, and authorization requirements vary by FEP Blue plan. We handle all insurance billing directly. Whether you work at the Detroit Federal Building, CBP Port of Entry, USPS facilities, or any federal agency in Michigan, we can help verify your benefits and make therapy accessible.</p>
                        <p><strong>Learn more:</strong> <a href="/fep-blue-federal-employee-therapy">Complete guide to FEP Blue mental health coverage for federal employees</a> or <a href="/insurance">view all accepted insurance plans</a>.</p>
                        <p>Contact us at <a href="tel:313-654-1915">(313) 654-1915</a> to verify your specific FEP Blue benefits and schedule an appointment.</p>
                    </div>
                    <div class="faq-item">
                        <h3>How long does each therapy session last?</h3>
                        <p>Individual therapy sessions typically last 50-60 minutes. The frequency of sessions depends on your individual needs and treatment plan, which you and your therapist will discuss together. Many clients start with weekly sessions and adjust as they progress in their healing journey.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Do you offer psychological testing and evaluations?</h3>
                        <p>Yes, we offer comprehensive psychological testing including autism evaluations, ADHD assessments, and other diagnostic evaluations for children and adults. Our licensed psychologist conducts thorough assessments to provide accurate diagnoses and personalized treatment recommendations.</p>
                    </div>
                    <div class="faq-item">
                        <h3>Is therapy confidential?</h3>
                        <p>Absolutely. Confidentiality is a cornerstone of the therapeutic relationship. Everything discussed in therapy remains private, with few legal exceptions such as risk of harm to yourself or others. Your therapist will explain the limits of confidentiality during your first session so you feel safe and informed.</p>
                    </div>
                </div>

                <h2>Still Have Questions?</h2>
                <p>If you did not find the answer you were looking for, our team is here to help. Do not hesitate to reach out with any questions about our services, scheduling, or what to expect from therapy. We understand that taking the first step can feel overwhelming, and we are committed to making the process as comfortable as possible.</p>
                <p>
                    <a class="btn btn--pill btn--primary" href="/appointment">Schedule a Consultation</a>
                    <a class="btn btn--pill btn--ghost" href="tel:313-654-1915">Call&nbsp;<span style="white-space:nowrap">(313)&nbsp;654-1915</span></a>
                </p>
            </article>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
