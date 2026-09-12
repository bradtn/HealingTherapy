<?php
// Page-specific variables
$page_title = 'Mental Health Blog | Healing Therapy Center';
$page_description = 'Mental health blog from Healing Therapy Center. Expert advice on anxiety, depression, relationships, parenting, trauma recovery, and wellness tips.';
$canonical_url = 'https://www.healingtherapycenter.com/all-blogs';

// CollectionPage Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'CollectionPage',
    'name' => 'Mental Health Blog',
    'description' => 'Mental health articles from the licensed therapists at Healing Therapy Center, covering anxiety, depression, relationships, parenting, trauma recovery, autism, and wellness.',
    'url' => 'https://www.healingtherapycenter.com/all-blogs'
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
    $hero_eyebrow = 'Resources';
    $hero_h1 = 'Mental Health Blog';
    $hero_cta = false;
    $hero_lead = "Expert insights and practical guidance from our licensed therapists to support your mental health journey";
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <article class="prose">
                <p>Welcome to the Healing Therapy Center blog, where our team of licensed mental health professionals shares valuable insights, practical strategies, and evidence-based information to support your mental health journey. Whether you are navigating anxiety, depression, relationship challenges, or exploring resources for autism and child development, our articles provide guidance you can trust.</p>
                <p>We believe that knowledge is an important part of healing. Our blog covers a wide range of topics including understanding mental health conditions, coping strategies for everyday challenges, parenting support, and tips for finding the right therapeutic approach for your needs. Browse our articles below and discover resources that can help you and your loved ones thrive.</p>

                <h2>Articles &amp; Resources</h2>
            </article>

            <ul class="post-grid" role="list">
                <li class="post-card">
                    <img src="/assets/img/blog-6.jpg" width="416" height="260" loading="lazy" alt="FEP Blue mental health benefits">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/16/2026</span></p>
                        <h3><a href="/fep-blue-mental-health-benefits-guide">FEP Blue Mental Health Benefits Guide for Federal Employees</a></h3>
                        <p>Complete guide to FEP Blue mental health coverage for federal employees in Michigan. Learn about co-pays, covered services, and how to maximize your benefits..</p>
                        <span class="link-more">Read Benefits Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-5.jpg" width="416" height="260" loading="lazy" alt="federal employee stress">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/16/2026</span></p>
                        <h3><a href="/federal-employee-stress-management-therapy">Managing Stress as a Federal Employee</a></h3>
                        <p>Unique stressors federal employees face and when to seek therapy. USPS, CBP, FBI, VA employees - learn how therapy can help..</p>
                        <span class="link-more">Read Stress Management Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-7.jpg" width="416" height="260" loading="lazy" alt="PTSD law enforcement">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/16/2026</span></p>
                        <h3><a href="/ptsd-therapy-federal-law-enforcement">PTSD Treatment for Federal Law Enforcement</a></h3>
                        <p>EMDR and trauma-focused therapy for CBP officers, FBI agents, and federal first responders. Confidential, effective PTSD treatment..</p>
                        <span class="link-more">Read PTSD Treatment Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-6.jpg" width="416" height="260" loading="lazy" alt="shift work therapy">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/16/2026</span></p>
                        <h3><a href="/shift-work-federal-employee-therapy">Work-Life Balance for Federal Shift Workers</a></h3>
                        <p>Therapy solutions for USPS, CBP, and federal shift workers. Sleep issues, relationship strain, mental health support..</p>
                        <span class="link-more">Read Shift Work Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-8.jpg" width="416" height="260" loading="lazy" alt="person first approach therapy">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Dr. Nadia Habhab</span><span>05/20/2026</span></p>
                        <h3><a href="/person-first-approach">Treat the Person Not the Diagnosis</a></h3>
                        <p>Why I believe in a Person-First Approach to Understanding Symptoms and Emotions through Emotion Focused Therapy..</p>
                        <span class="link-more">Read About Person-First Therapy <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-7.jpg" width="416" height="260" loading="lazy" alt="autism curable">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Amal Ayad</span><span>12/09/2025</span></p>
                        <h3><a href="/is-autism-curable">Is Autism Curable</a></h3>
                        <p>Autism Spectrum Disorder (ASD) is a complex neurodevelopmental condition that affects communication..</p>
                        <span class="link-more">Explore Autism Treatment Facts <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-6.jpg" width="416" height="260" loading="lazy" alt="parenting child">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Amal Ayad</span><span>12/02/2025</span></p>
                        <h3><a href="/parenting-child">Parenting a Child with Autism</a></h3>
                        <p>Raising a child with autism spectrum disorder (ASD) comes with unique joys and challenges..</p>
                        <span class="link-more">Explore Autism Parenting Tips <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-5.jpg" width="416" height="260" loading="lazy" alt="autism signs">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Amal Ayad</span><span>11/25/2025</span></p>
                        <h3><a href="/autism-signs">Early Signs of Autism in children</a></h3>
                        <p>Navigating the early years of your child’s life is filled with joy and challenges. As a parent, you want to ensure that your child..</p>
                        <span class="link-more">Learn About Early Autism Signs <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-4.jpg" width="416" height="260" loading="lazy" alt="breaking stigma">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Amal Ayad</span><span>11/18/2025</span></p>
                        <h3><a href="/breaking-stigma">Breaking the Stigma</a></h3>
                        <p>In order to be able to break stigma around mental health treatment it is important to understand what stigma is ..</p>
                        <span class="link-more">Learn About Mental Health Stigma <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog3.jpg" width="416" height="260" loading="lazy" alt="coping postpartum">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Amal Ayad</span><span>11/11/2025</span></p>
                        <h3><a href="/coping-with-postpartum-depression">Coping with Depression</a></h3>
                        <p>Becoming a mother is one of life’s most beautiful and transformative experiences. However, it also comes..</p>
                        <span class="link-more">Explore Postpartum Depression Tips <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog2.jpg" width="416" height="260" loading="lazy" alt="fint right therapist">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Amal Ayad</span><span>11/04/2025</span></p>
                        <h3><a href="/how-to-find-the-right-therapist">How to Find the Right Therapist</a></h3>
                        <p>Finding the right therapist is a crucial step toward improving your mental health and overall well-being..</p>
                        <span class="link-more">Read Therapist Selection Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-9.jpg" width="416" height="260" loading="lazy" alt="ADHD guide">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/17/2026</span></p>
                        <h3><a href="/adhd-guide-adults-children">ADHD in Adults &amp; Children: Complete Guide</a></h3>
                        <p>Comprehensive guide to ADHD symptoms, testing, and treatment for adults and children in Michigan..</p>
                        <span class="link-more">Read ADHD Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog2.jpg" width="416" height="260" loading="lazy" alt="anxiety guide">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/17/2026</span></p>
                        <h3><a href="/anxiety-therapy-guide">Understanding Anxiety: Complete Treatment Guide</a></h3>
                        <p>Learn about anxiety signs, types, and effective treatment options in Dearborn and throughout Michigan..</p>
                        <span class="link-more">Read Anxiety Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog3.jpg" width="416" height="260" loading="lazy" alt="grief counseling">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/17/2026</span></p>
                        <h3><a href="/grief-loss-counseling-guide">Grief &amp; Loss Counseling Guide</a></h3>
                        <p>Coping with loss and finding healing through professional grief counseling support..</p>
                        <span class="link-more">Read Grief Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-4.jpg" width="416" height="260" loading="lazy" alt="PTSD trauma therapy">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/17/2026</span></p>
                        <h3><a href="/ptsd-trauma-therapy-guide">PTSD &amp; Trauma Therapy Guide</a></h3>
                        <p>Understanding PTSD and trauma healing through evidence-based therapy approaches..</p>
                        <span class="link-more">Read PTSD Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-5.jpg" width="416" height="260" loading="lazy" alt="teen mental health">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/17/2026</span></p>
                        <h3><a href="/teen-mental-health-guide">Teen Mental Health: Parent's Guide</a></h3>
                        <p>Warning signs and how parents can support their teenager's mental health..</p>
                        <span class="link-more">Read Teen Health Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog-6.jpg" width="416" height="260" loading="lazy" alt="autism evaluation insurance">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span><span>06/17/2026</span></p>
                        <h3><a href="/autism-evaluation-michigan-insurance">Autism Evaluation: Insurance Coverage Guide</a></h3>
                        <p>Complete guide to autism evaluation insurance coverage in Michigan - BCBS, Aetna, Priority Health..</p>
                        <span class="link-more">Read Insurance Guide <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card">
                    <img src="/assets/img/blog1.jpg" width="416" height="260" loading="lazy" alt="understanding depression">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Amal Ayad</span><span>10/28/2025</span></p>
                        <h3><a href="/understanding-depression">Understanding Depression</a></h3>
                        <p>Have you ever felt sad, slowed down, and had difficulty concentrating? Maybe you thought could this be depression? Sometime..</p>
                        <span class="link-more">Read More <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
