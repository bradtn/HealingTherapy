<?php
/**
 * V2 Homepage — redesign of /index.php
 * SEO contract preserved: same title, description, canonical, and
 * MedicalBusiness JSON-LD as production. Every internal link from the
 * production homepage is retained.
 */

$page_title = 'Healing Therapy Center | Therapists in Dearborn, MI';
$page_description = 'Therapy in Dearborn, MI and online across Michigan. Individual, couples & trauma therapy, EMDR, autism & ADHD testing. BCBS, Aetna accepted. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/';

require_once __DIR__ . '/includes/config.php';

// Identical structured data to production index.php
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'MedicalBusiness',
    'name' => 'Healing Therapy Center',
    'description' => 'Mental health therapy center in Michigan offering individual therapy, couples counseling, trauma therapy, EMDR, autism and ADHD testing',
    'url' => 'https://www.healingtherapycenter.com',
    'telephone' => '+13136541915',
    'email' => 'info@healingtherapycenter.com',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => '835 Mason St STE D160',
        'addressLocality' => 'Dearborn',
        'addressRegion' => 'MI',
        'postalCode' => '48124',
        'addressCountry' => 'US'
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => '42.3075635',
        'longitude' => '-83.2460474'
    ],
    'areaServed' => [
        ['@type' => 'City', 'name' => 'Dearborn'],
        ['@type' => 'City', 'name' => 'Detroit'],
        ['@type' => 'City', 'name' => 'Ann Arbor'],
        ['@type' => 'City', 'name' => 'Troy'],
        ['@type' => 'City', 'name' => 'Livonia'],
        ['@type' => 'State', 'name' => 'Michigan']
    ],
    'medicalSpecialty' => 'Psychiatry',
    'knowsAbout' => ['Mental Health', 'Psychology', 'Psychotherapy', 'EMDR', 'Autism Evaluation', 'ADHD Testing'],
    'availableService' => [
        ['@type' => 'MedicalTherapy', 'name' => 'Individual Therapy', 'description' => 'Individual counseling for anxiety, depression, trauma, and PTSD'],
        ['@type' => 'MedicalTherapy', 'name' => 'EMDR Therapy', 'description' => 'Eye Movement Desensitization and Reprocessing for trauma treatment'],
        ['@type' => 'MedicalTherapy', 'name' => 'Couples Therapy', 'description' => 'Marriage and relationship counseling'],
        ['@type' => 'MedicalTest', 'name' => 'Autism Evaluation', 'description' => 'Comprehensive autism testing for children and adults'],
        ['@type' => 'MedicalTest', 'name' => 'ADHD Testing', 'description' => 'ADHD evaluation and diagnosis for all ages']
    ],
    'paymentAccepted' => 'Cash, Check, Credit Card, Insurance, FEP Blue, BCBS Federal Employee Program, Blue Cross Blue Shield',
    'openingHoursSpecification' => [
        ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], 'opens' => '09:00', 'closes' => '17:00'],
        ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Saturday', 'opens' => '09:00', 'closes' => '14:00']
    ],
    'priceRange' => '$$',
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Therapy Services',
        'itemListElement' => [
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Telehealth Therapy', 'description' => 'Online therapy available throughout Michigan']],
            ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'FEP Blue Mental Health Services', 'description' => 'Therapy services for federal employees with FEP Blue insurance coverage']]
        ]
    ],
    'audience' => ['@type' => 'PeopleAudience', 'audienceType' => 'Patients seeking mental health services']
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <!-- ============ Hero ============ -->
    <section class="hero" aria-labelledby="hero-title">
        <div class="shell">
            <div class="hero__inner">
                <div class="hero__content">
                    <p class="eyebrow">A Safe Space for a Brighter Tomorrow</p>
                    <h1 id="hero-title">Compassionate <span class="u-nowrap">Healing&nbsp;Therapy</span><br class="br-m"> for&nbsp;a <span class="accent-italic">Healthier, Happier&nbsp;You</span></h1>
                    <p class="hero__copy">Support for individuals, couples, and families at<br class="br-m"> every stage of life.</p>
                    <div class="hero__actions">
                        <a class="btn btn--pill btn--primary" href="/appointment">
                            Make an Appointment
                            <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                        </a>
                        <a class="btn btn--pill btn--ghost hero__secondary" href="#services">
                            Explore Our Services
                            <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                        </a>
                        <a class="btn btn--pill hero__call" href="tel:313-654-1915" aria-label="Call or text Healing Therapy Center at 313-654-1915">
                            <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a12 12 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg>
                            Call or Text&nbsp;<strong>313-654-1915</strong>
                        </a>
                    </div>
                </div>
                <div class="hero__media">
                    <picture>
                        <source type="image/avif"
                                srcset="/assets/img/home-hero-760.avif 760w, /assets/img/home-hero-1200.avif 1200w, /assets/img/home-hero-1536.avif 1536w"
                                sizes="100vw">
                        <img src="/assets/img/home-hero-1200.webp"
                             srcset="/assets/img/home-hero-760.webp 760w, /assets/img/home-hero-1200.webp 1200w, /assets/img/home-hero-1536.webp 1536w"
                             sizes="100vw"
                             width="1536" height="1024"
                             alt="A woman relaxing with a warm cup of tea in soft natural light at home"
                             fetchpriority="high">
                    </picture>
                </div>
            </div>
        </div>

        <div class="trust">
            <div class="shell">
                <ul class="trust__row" role="list" style="list-style:none">
                    <li class="trust__item">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7-5.6-7-11a7 7 0 0 1 14 0c0 5.4-7 11-7 11Z"/><circle cx="12" cy="10" r="2.6"/></svg>
                        <span><strong>In-Person Care</strong> Dearborn, Michigan</span>
                    </li>
                    <li class="trust__item">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="14" height="12" rx="2"/><path d="m17 10 4-2.5v9L17 14"/></svg>
                        <span><strong>Michigan-Wide</strong> Telehealth</span>
                    </li>
                    <li class="trust__item">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 5 6v5c0 4.5 3 8.2 7 10 4-1.8 7-5.5 7-10V6l-7-3Z"/><path d="m9 12 2 2 4-4"/></svg>
                        <span><strong>Insurance</strong> Accepted</span>
                    </li>
                    <li class="trust__item">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="8.5" r="3"/><path d="M3.5 19a5.5 5.5 0 0 1 11 0"/><circle cx="17" cy="9.5" r="2.4"/><path d="M15.5 19a4.8 4.8 0 0 1 5-4.5"/></svg>
                        <span><strong>Individual, Couples,</strong> Family &amp; Group Therapy</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- ============ Services ============ -->
    <section class="section" id="services" aria-labelledby="services-title">
        <div class="shell">
            <div class="section__head section-title section-title--center reveal">
                <p class="eyebrow eyebrow--center">Our Services</p>
                <h2 id="services-title">Support for Every Chapter</h2>
                <p>Healing Therapy Center supports individuals, couples, and families through life's challenges with compassionate, evidence-based care and personalized guidance. Our licensed professionals offer a comprehensive range of mental health services tailored to your unique needs, ensuring you receive the support you need to heal and thrive.</p>
            </div>

            <ul class="svc-grid" role="list">
                <li class="svc-card reveal">
                    <span class="svc-card__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="3.5"/><path d="M5 20a7 7 0 0 1 14 0"/></svg></span>
                    <h3><a href="/individual-therapy">Individual Therapy</a></h3>
                    <p class="svc-card__desc"><span class="svc-card__desc-full">One-on-one counseling for anxiety, depression, trauma, grief, self-esteem, and life transitions.</span><span class="svc-card__desc-brief">Support for anxiety, depression, trauma &amp; life transitions.</span></p>
                    <span class="link-more">Learn more <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                </li>
                <li class="svc-card reveal" data-delay="1">
                    <span class="svc-card__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20s-7-4.4-7-9.5A4 4 0 0 1 12 8a4 4 0 0 1 7 2.5C19 15.6 12 20 12 20Z"/></svg></span>
                    <h3><a href="/couples-therapy">Couples Therapy</a></h3>
                    <p class="svc-card__desc"><span class="svc-card__desc-full">Marriage and relationship counseling for communication, conflict, and rebuilding intimacy.</span><span class="svc-card__desc-brief">Build stronger connections and healthier relationships.</span></p>
                    <span class="link-more">Learn more <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                </li>
                <li class="svc-card reveal" data-delay="2">
                    <span class="svc-card__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m4 11 8-6 8 6"/><path d="M6 9.5V19h12V9.5"/><path d="M10 19v-5h4v5"/></svg></span>
                    <h3><a href="/family-therapy">Family Therapy</a></h3>
                    <p class="svc-card__desc"><span class="svc-card__desc-full">Support for families navigating parent–teen issues, blended families, and challenges together.</span><span class="svc-card__desc-brief">Support for healthier, more connected family relationships.</span></p>
                    <span class="link-more">Learn more <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                </li>
                <li class="svc-card reveal">
                    <span class="svc-card__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="8" cy="9" r="2.6"/><circle cx="16" cy="9" r="2.6"/><path d="M2.8 19a5.2 5.2 0 0 1 10.4 0M10.8 19a5.2 5.2 0 0 1 10.4 0"/></svg></span>
                    <h3><a href="/group-therapy">Group Therapy</a></h3>
                    <p class="svc-card__desc"><span class="svc-card__desc-full">Therapeutic support in a warm community setting, guided by our licensed clinicians.</span><span class="svc-card__desc-brief">Connect, learn and grow in a supportive environment.</span></p>
                    <span class="link-more">Learn more <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                </li>
                <li class="svc-card reveal" data-delay="1">
                    <span class="svc-card__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4.5V3h6v1.5"/><path d="M9 10h6M9 14h6M9 17h3.5"/></svg></span>
                    <h3><a href="/psychological-testing">Psychological Testing</a></h3>
                    <p class="svc-card__desc"><span class="svc-card__desc-full">Comprehensive <a href="/autism-evaluation">autism evaluations</a> and <a href="/adhd-testing-evaluation">ADHD testing</a> for children, teens, and adults.</span><span class="svc-card__desc-brief">Comprehensive evaluations for clarity and next steps.</span></p>
                    <span class="link-more">Learn more <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                </li>
                <li class="svc-card reveal" data-delay="2">
                    <span class="svc-card__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21c-4 0-7-3-7-7 0-5 7-11 7-11s7 6 7 11c0 4-3 7-7 7Z"/><path d="M12 21v-8"/><path d="m12 13 2.5-2.5M12 16l-2.5-2.5"/></svg></span>
                    <h3><a href="/perinatal-therapy">Specialized Support</a></h3>
                    <p class="svc-card__desc"><span class="svc-card__desc-full"><a href="/anxiety-therapy-michigan">Anxiety</a>, <a href="/depression-counseling-michigan">depression</a>, <a href="/trauma-ptsd-treatment">trauma</a>, <a href="/perinatal-therapy">perinatal mental health</a>, and life transitions.</span><span class="svc-card__desc-brief">Focused care for life's unique challenges.</span></p>
                    <span class="link-more">Learn more <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                </li>
            </ul>

            <div class="section__foot reveal">
                <a class="btn btn--pill btn--ghost" href="/telehealth-therapy">
                    Telehealth Available Statewide
                    <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </a>
                <a class="btn btn--pill btn--primary" href="/autism-screening-tool" style="margin-left:.6rem">
                    Take Our Free Autism Screening Tool
                    <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ Why Choose HTC ============ -->
    <section class="section section--white why" aria-labelledby="why-title">
        <div class="shell">
            <div class="why__grid">
                <div class="reveal">
                    <p class="eyebrow">Why Choose Healing Therapy Center</p>
                    <h2 id="why-title">More Than Therapy —<br>A Place to <span class="accent-italic">Belong</span></h2>
                    <p>We're not a large online platform — we're your neighbors in Dearborn, committed to personalized, consistent care. You build a real relationship with your therapist: no random assignments, no rotating providers, no feeling like a subscription. You're a valued member of our healing community.</p>
                    <ul class="why__checks" role="list">
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Compassionate, personalized care</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> In-person appointments in Dearborn</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Telehealth across Michigan</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Experienced, diverse team of licensed Michigan therapists</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Evidence-based approaches, including EMDR</li>
                        <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Culturally responsive, inclusive care</li>
                    </ul>
                    <a class="btn btn--pill btn--primary" href="/therapists">
                        Meet Our Therapists
                        <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                    </a>
                </div>
                <div class="why__media reveal" data-delay="1">
                    <img src="/assets/img/practice-warm-1100.webp" width="1100" height="825" loading="lazy"
                         alt="A therapist and client in a comfortable, sunlit session at Healing Therapy Center">
                    <blockquote class="why__quote">
                        <p>Healing is a process that takes time — and you don't have to take the journey alone.</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Conditions we treat (SEO link hub — copy preserved) ============ -->
    <section class="section cond" aria-labelledby="cond-title">
        <div class="shell">
            <div class="section__head section-title section-title--center reveal">
                <p class="eyebrow eyebrow--center">How We Can Help</p>
                <h2 id="cond-title">Mental Health Conditions We Treat Throughout Michigan</h2>
                <p>Our licensed therapists provide specialized treatment for a wide range of mental health conditions via secure telehealth throughout Michigan or in-person at our Dearborn office. Every mental health journey is unique, and we tailor our evidence-based approaches to meet your specific needs.</p>
            </div>
            <div class="cond-groups reveal">
                <h3 class="cond-group__label">Therapy &amp; Mental Health</h3>
                <ul class="cond-grid cond-grid--4" role="list">
                <li class="cond-tile">
                    <span class="cond-tile__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M13 3 5 13.5h5L9.5 21l8-10.5h-5L13 3Z"/></svg></span>
                    <p><strong><a href="/anxiety-therapy-michigan" aria-label="Learn more about anxiety therapy in Michigan">Anxiety Disorders</a></strong> Generalized anxiety, panic attacks, social anxiety, phobias</p>
                    <svg class="ico cond-tile__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </li>
                <li class="cond-tile">
                    <span class="cond-tile__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M7 15a4.5 4.5 0 1 1 .8-8.9A5.5 5.5 0 0 1 18.6 8 3.75 3.75 0 0 1 17 15H7Z"/><path d="M8.5 18.2v.01M12 19.5v.01M15.5 18.2v.01"/></svg></span>
                    <p><strong><a href="/depression-counseling-michigan" aria-label="Learn more about depression counseling in Michigan">Depression</a></strong> Major depression, persistent depressive disorder, postpartum depression</p>
                    <svg class="ico cond-tile__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </li>
                <li class="cond-tile">
                    <span class="cond-tile__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 5 6v5c0 4.5 3 8.2 7 10 4-1.8 7-5.5 7-10V6l-7-3Z"/><path d="M12 8.5v4M12 15.5v.01"/></svg></span>
                    <p><strong><a href="/trauma-ptsd-treatment" aria-label="Learn more about trauma and PTSD treatment">Trauma &amp; PTSD</a></strong> Childhood trauma, complex PTSD, assault, accidents. Specialized <a href="/ptsd-therapy-federal-law-enforcement">PTSD treatment for federal law enforcement</a> and first responders</p>
                    <svg class="ico cond-tile__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </li>
                <li class="cond-tile">
                    <span class="cond-tile__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20s-7-4.4-7-9.5A4 4 0 0 1 12 8a4 4 0 0 1 7 2.5C19 15.6 12 20 12 20Z"/><circle cx="12" cy="5" r="1.6"/></svg></span>
                    <p><strong><a href="/postpartum-depression-therapy-michigan" aria-label="Learn more about postpartum depression therapy in Michigan">Postpartum Depression</a></strong> <a href="/perinatal-therapy">Perinatal therapy</a> for pregnancy and postpartum</p>
                    <svg class="ico cond-tile__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </li>
                </ul>

                <h3 class="cond-group__label">Testing &amp; Evaluation</h3>
                <ul class="cond-grid cond-grid--2" role="list">
                <li class="cond-tile">
                    <span class="cond-tile__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="4" width="14" height="17" rx="2"/><path d="M9 4.5V3h6v1.5"/><path d="m9 12 2 2 4-4.5"/></svg></span>
                    <p><strong><a href="/adhd-testing-evaluation" aria-label="Learn more about ADHD testing and evaluation">ADHD Testing</a></strong> Children, adolescents, and adults — comprehensive evaluation</p>
                    <svg class="ico cond-tile__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </li>
                <li class="cond-tile">
                    <span class="cond-tile__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M10 4a2 2 0 1 1 4 0v1h3a2 2 0 0 1 2 2v3h-1a2 2 0 1 0 0 4h1v3a2 2 0 0 1-2 2h-3v-1a2 2 0 1 0-4 0v1H7a2 2 0 0 1-2-2v-3H4a2 2 0 1 1 0-4h1V7a2 2 0 0 1 2-2h3V4Z"/></svg></span>
                    <p><strong><a href="/autism-evaluation" aria-label="Learn more about autism evaluation">Autism Evaluation</a></strong> Gold-standard diagnostic assessments for all ages. Learn about <a href="/autism-signs">early signs of autism</a></p>
                    <svg class="ico cond-tile__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </li>
                </ul>

                <h3 class="cond-group__label">Relationships &amp; Individual Support</h3>
                <ul class="cond-grid cond-grid--3" role="list">
                <li class="cond-tile">
                    <span class="cond-tile__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 20s-7-4.4-7-9.5A4 4 0 0 1 12 8a4 4 0 0 1 7 2.5C19 15.6 12 20 12 20Z"/></svg></span>
                    <p><strong><a href="/couples-therapy" aria-label="Learn more about couples and marriage counseling">Couples &amp; Marriage Counseling</a></strong> Communication, conflict, intimacy challenges</p>
                    <svg class="ico cond-tile__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </li>
                <li class="cond-tile">
                    <span class="cond-tile__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m4 11 8-6 8 6"/><path d="M6 9.5V19h12V9.5"/><path d="M10 19v-5h4v5"/></svg></span>
                    <p><strong><a href="/family-therapy" aria-label="Learn more about family therapy">Family Therapy</a></strong> Parent-teen issues, sibling rivalry, blended families</p>
                    <svg class="ico cond-tile__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </li>
                <li class="cond-tile">
                    <span class="cond-tile__ico"><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="3.5"/><path d="M5 20a7 7 0 0 1 14 0"/></svg></span>
                    <p><strong><a href="/individual-therapy" aria-label="Learn more about individual therapy">Individual Therapy</a></strong> Stress, grief, self-esteem, life transitions. Specialized support for <a href="/shift-work-federal-employee-therapy">shift workers and federal employees</a></p>
                    <svg class="ico cond-tile__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </li>
                </ul>
            </div>
            <div class="cond__note reveal">
                <p class="cond__note-lead">Not sure where to start?</p>
                <p>Our team can help you find the right support — we're here to discuss your needs and determine the best path forward. <a href="tel:313-654-1915"><strong>Call us at (313) 654-1915</strong></a></p>
            </div>
        </div>
    </section>

    <!-- ============ Team preview ============ -->
    <section class="section section--tint team" aria-labelledby="team-title">
        <div class="shell">
            <div class="team__head section-title reveal">
                <p class="eyebrow">Our Team</p>
                <h2 id="team-title">Meet Our Therapists</h2>
                <p>Licensed Michigan mental health professionals who know that healing is a process that takes time.</p>
            </div>

            <ul class="team-strip reveal" role="list">
                <?php
                // Lead clinician first (PhD, LP), then the clinical team
                $team_order = ['nadia-habhab', 'tiffany-murray', 'amal-ayad', 'malak-wehbe', 'donna-majed'];
                foreach ($team_order as $tid):
                    $m = get_team_member_by_id($tid);
                    if (!$m) continue;
                    $role = $m['role'] ?? 'Therapist';
                ?>
                <li>
                    <a class="team-item" href="/<?php echo $m['url']; ?>" aria-label="View profile for <?php echo htmlspecialchars($m['name']); ?>">
                        <span class="team-item__img">
                            <img src="/<?php echo $m['image']; ?>" alt="<?php echo htmlspecialchars($m['alt']); ?>" width="112" height="112" loading="lazy">
                        </span>
                        <span class="team-item__name"><?php echo $m['name']; ?><span class="team-item__creds">, <?php echo $m['credentials']; ?></span></span>
                        <span class="team-item__role"><?php echo $role; ?>
                            <svg class="ico team-item__arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                        </span>
                    </a>
                </li>
                <?php endforeach; ?>
                <li class="team-strip__more">
                    <a class="team-item team-item--cta" href="/therapists" aria-label="Meet the full team">
                        <span class="team-item__img team-item__img--cta">
                            <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                        </span>
                        <span class="team-item__name">Meet the Full Team</span>
                        <span class="team-item__role">All our therapists</span>
                    </a>
                </li>
            </ul>

            <div class="team__cta reveal">
                <a class="btn btn--pill btn--ghost" href="/therapists">
                    Meet the Full Team
                    <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ Insurance ============ -->
    <section class="section section--ivory" id="insurance" aria-labelledby="ins-title">
        <div class="shell">
            <div class="section__head section-title section-title--center reveal">
                <p class="eyebrow eyebrow--center">Insurance Plans</p>
                <h2 id="ins-title">Care That Works With Your Coverage</h2>
                <p>We accept most major insurance plans including <strong>Blue Cross Blue Shield (including <a href="/fep-blue-federal-employee-therapy">FEP Blue for federal employees</a>)</strong>, Priority Health, Aetna, McLaren Health Plan, HAP, Blue Care Network, United Healthcare, and Michigan Medicaid.</p>
            </div>

            <ul class="ins__logos reveal" role="list">
                <li><img src="/assets/img/in-5.png" width="150" height="100" loading="lazy" alt="Blue Care Network of Michigan logo"></li>
                <li><img src="/assets/img/in-1.png" width="150" height="100" loading="lazy" alt="Priority Health logo"></li>
                <li><img src="/assets/img/in-2.png" width="150" height="100" loading="lazy" alt="Blue Cross Blue Shield logo"></li>
                <li><img src="/assets/img/in-3.png" width="150" height="100" loading="lazy" alt="Aetna logo"></li>
                <li><img src="/assets/img/in-4.png" width="150" height="100" loading="lazy" alt="United Healthcare logo"></li>
                <li><img src="/assets/img/in-6.png" width="150" height="100" loading="lazy" alt="HAP logo"></li>
            </ul>

            <div class="ins__fep reveal">
                <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3 5 6v5c0 4.5 3 8.2 7 10 4-1.8 7-5.5 7-10V6l-7-3Z"/><path d="m9 12 2 2 4-4"/></svg>
                <p><strong>Federal Employees:</strong> We accept <strong>FEP Blue</strong> (Blue Cross Blue Shield Federal Employee Program) insurance. If you work for USPS, CBP, FBI, VA, or any federal agency in Michigan, your mental health services may be covered. Coverage, copays, session limits, and authorization requirements vary by plan. <a href="/fep-blue-federal-employee-therapy"><strong>Learn more about FEP Blue coverage →</strong></a></p>
            </div>

            <div class="section__foot reveal" style="margin-top:1.5rem">
                <a class="btn btn--pill btn--primary" href="tel:313-654-1915">
                    Verify Your Insurance — <span style="white-space:nowrap">(313)&nbsp;654-1915</span>
                </a>
                <p class="ins__note" style="margin-top:1rem">Coverage varies by plan. <a href="/insurance">View all accepted insurance plans and payment options</a>, or contact us to verify benefits.</p>
            </div>
        </div>
    </section>

    <!-- ============ Specialty band ============ -->
    <section class="section spec" aria-labelledby="spec-title">
        <div class="shell">
            <div class="section__head section-title section-title--center reveal">
                <p class="eyebrow eyebrow--light eyebrow--center">Specialized Programs</p>
                <h2 id="spec-title">Focused Support, Backed by Specialist Training</h2>
                <p>Dedicated programs for professionals, women, couples, and federal employees — beyond our core therapy services.</p>
            </div>
            <ul class="spec__list reveal" role="list">
                <li><a href="/womens-mental-health-therapy-michigan">Women's Mental Health</a></li>
                <li><a href="/executive-stress-therapy-michigan">Executive Stress Therapy</a></li>
                <li><a href="/physician-burnout-therapy-michigan">Physician Burnout</a></li>
                <li><a href="/burnout-stress-therapy-michigan">Burnout &amp; Stress</a></li>
                <li><a href="/premarital-counseling-michigan">Premarital Counseling</a></li>
                <li><a href="/fep-blue-federal-employee-therapy">Federal Employees &amp; FEP Blue</a></li>
            </ul>
        </div>
    </section>

    <!-- ============ Telehealth (copy preserved) ============ -->
    <section class="section tele" aria-labelledby="tele-title">
        <div class="shell">
            <div class="section__head section-title reveal">
                <p class="eyebrow">Telehealth</p>
                <h2 id="tele-title">Telehealth Therapy Across <span class="accent-italic">Michigan</span></h2>
            </div>
            <div class="tele__grid">
                <div class="reveal">
                    <p>While our office is conveniently located in Dearborn, we provide <strong>secure telehealth therapy services to clients anywhere in Michigan</strong>. Whether you're in Detroit, Grand Rapids, Ann Arbor, Lansing, Kalamazoo, Traverse City, or rural Michigan, you can access our licensed therapists from the comfort and privacy of your home.</p>
                    <p>Our HIPAA-compliant telehealth platform is easy to use and provides the same quality, evidence-based care as in-person sessions. Many clients prefer telehealth for its convenience, flexibility, and privacy — no commute, no waiting room, and therapy on your schedule.</p>
                    <p><strong>Serving Michigan residents in:</strong> Wayne County, Oakland County, Macomb County, Washtenaw County, Kent County, Genesee County, Ingham County, and all 83 Michigan counties. Both individual therapy and family/couples therapy available via telehealth.</p>
                    <a class="btn btn--pill btn--primary" href="/telehealth-therapy">
                        Explore Telehealth
                        <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                    </a>
                </div>
                <div class="tele__benefits reveal" data-delay="1">
                    <h3><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="14" height="12" rx="2"/><path d="m17 10 4-2.5v9L17 14"/></svg> Telehealth Benefits</h3>
                    <ul role="list">
                        <li><svg class="ico ico--check" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Access therapy from anywhere in Michigan</li>
                        <li><svg class="ico ico--check" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> No commute — save time and gas</li>
                        <li><svg class="ico ico--check" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Flexible scheduling including evenings and weekends</li>
                        <li><svg class="ico ico--check" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Same quality care as in-person sessions</li>
                        <li><svg class="ico ico--check" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Private and confidential HIPAA-compliant platform</li>
                        <li><svg class="ico ico--check" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> Perfect for busy schedules, parents, rural residents</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Latest posts (existing articles) ============ -->
    <section class="section section--tint" id="blog" aria-labelledby="blog-title">
        <div class="shell">
            <div class="section__head section-title section-title--center reveal">
                <p class="eyebrow eyebrow--center">From Our Blog</p>
                <h2 id="blog-title">Latest Articles &amp; Guides</h2>
            </div>
            <ul class="post-grid" role="list">
                <li class="post-card reveal">
                    <img src="/assets/img/blog-6.jpg" width="416" height="260" loading="lazy" alt="Parenting a child with autism">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Amal Ayad</span><span>12/02/2025</span></p>
                        <h3><a href="/parenting-child">Parenting a Child with Autism</a></h3>
                        <p>Raising a child with autism spectrum disorder (ASD) comes with unique joys and challenges.</p>
                        <span class="link-more">Read article <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card reveal" data-delay="1">
                    <img src="/assets/img/blog-7.jpg" width="416" height="260" loading="lazy" alt="Is autism curable — understanding ASD">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Amal Ayad</span><span>12/09/2025</span></p>
                        <h3><a href="/is-autism-curable">Is Autism Curable</a></h3>
                        <p>Autism Spectrum Disorder (ASD) is a complex neurodevelopmental condition that affects communication.</p>
                        <span class="link-more">Read article <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
                <li class="post-card reveal" data-delay="2">
                    <img src="/assets/img/blog3.jpg" width="416" height="260" loading="lazy" alt="Coping with postpartum depression">
                    <div class="post-card__body">
                        <p class="post-card__meta"><span>Healing Therapy Center</span></p>
                        <h3><a href="/coping-with-postpartum-depression">Coping With Postpartum Depression</a></h3>
                        <p>Symptoms, treatment options, and when to seek help — expert guidance from licensed therapists.</p>
                        <span class="link-more">Read article <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg></span>
                    </div>
                </li>
            </ul>
            <div class="section__foot reveal">
                <a class="btn btn--pill btn--ghost" href="/all-blogs">
                    View All Articles
                    <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </a>
                <a class="btn btn--pill btn--ghost" href="/faq" style="margin-left:.6rem">
                    Therapy FAQs
                    <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- ============ Location & directions (local SEO copy preserved) ============ -->
    <section class="section section--white loc" id="location" aria-labelledby="loc-title">
        <div class="shell">
            <div class="loc__grid">
                <div class="loc__map reveal">
                    <iframe src="https://maps.google.com/maps?q=835%20Mason%20St%20STE%20D160%2C%20Dearborn%2C%20MI%2048124&output=embed"
                            title="Map to Healing Therapy Center, 835 Mason St STE D160, Dearborn, MI 48124"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
                </div>
                <div class="loc__body reveal" data-delay="1">
                    <p class="eyebrow">Visit Us</p>
                    <h2 id="loc-title">Trusted Healing Therapy Services Near Me in Dearborn, MI</h2>
                    <p><a href="<?php echo GOOGLE_MAPS_URL; ?>" target="_blank" rel="noopener noreferrer">Healing Therapy Center</a> is located at 835 Mason St STE D160, <a href="https://cityofdearborn.org/" target="_blank" rel="noopener noreferrer">Dearborn, MI</a> 48124, in the Dearborn Atrium Office Center in downtown West Dearborn.</p>
                    <p>To reach our center by bus, start at <a href="https://moovitapp.com/index/en/public_transit-Michigan_Oakwood_Blvd-Detroit_MI-stop_43027411-745" target="_blank" rel="noopener noreferrer">Michigan Ave &amp; Oakwood Blvd</a> and board a westbound bus along Michigan Ave, such as SMART Bus Route 200 toward Westland Mall. Travel approximately 1 mile before getting off at Michigan Ave &amp; Mason St. From there, walk a short distance south on Mason St — the Healing Therapy Center is inside the Dearborn Atrium Office Center at 835 Mason St, Suite D160.</p>
                    <p>To reach us by car, take Michigan Ave (US-12) westbound into downtown West Dearborn and turn left onto Mason St. Our center is a short distance down on Mason St, inside the Dearborn Atrium Office Center (Suite D160), with public parking available nearby.</p>
                    <p class="loc__hours">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>
                        <span class="loc__hours-text"><span class="loc__hours-range">Monday–Friday 9:00 am – 5:00 pm</span><span class="loc__hours-sep">&nbsp;·&nbsp;</span><span class="loc__hours-range">Saturday 9:00 am – 2:00 pm</span></span>
                    </p>
                    <p style="margin-top:1rem">For more information, call us at <a href="tel:313-654-1915"><strong style="white-space:nowrap">(313)&nbsp;654-1915</strong></a>.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ Final CTA ============ -->
    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
