<?php
// Page-specific variables
$page_title = 'Healing Therapy Center | Therapists in Dearborn, MI';
$page_description = 'Therapy in Dearborn, MI and online across Michigan. Individual, couples & trauma therapy, EMDR, autism & ADHD testing. BCBS, Aetna accepted. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/';

// LocalBusiness Schema for SEO
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
        'streetAddress' => '22005 Outer Dr W',
        'addressLocality' => 'Dearborn',
        'addressRegion' => 'MI',
        'postalCode' => '48124',
        'addressCountry' => 'US'
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => '42.2856222',
        'longitude' => '-83.2336412'
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
    'knowsAbout' => [
        'Mental Health',
        'Psychology',
        'Psychotherapy',
        'EMDR',
        'Autism Evaluation',
        'ADHD Testing'
    ],
    'availableService' => [
        [
            '@type' => 'MedicalTherapy',
            'name' => 'Individual Therapy',
            'description' => 'Individual counseling for anxiety, depression, trauma, and PTSD'
        ],
        [
            '@type' => 'MedicalTherapy',
            'name' => 'EMDR Therapy',
            'description' => 'Eye Movement Desensitization and Reprocessing for trauma treatment'
        ],
        [
            '@type' => 'MedicalTherapy',
            'name' => 'Couples Therapy',
            'description' => 'Marriage and relationship counseling'
        ],
        [
            '@type' => 'MedicalTest',
            'name' => 'Autism Evaluation',
            'description' => 'Comprehensive autism testing for children and adults'
        ],
        [
            '@type' => 'MedicalTest',
            'name' => 'ADHD Testing',
            'description' => 'ADHD evaluation and diagnosis for all ages'
        ]
    ],
    'paymentAccepted' => 'Cash, Check, Credit Card, Insurance, FEP Blue, BCBS Federal Employee Program, Blue Cross Blue Shield',
    'openingHoursSpecification' => [
        [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opens' => '09:00',
            'closes' => '17:00'
        ],
        [
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Saturday',
            'opens' => '09:00',
            'closes' => '14:00'
        ]
    ],
    'priceRange' => '$$',
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'Therapy Services',
        'itemListElement' => [
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'Telehealth Therapy',
                    'description' => 'Online therapy available throughout Michigan'
                ]
            ],
            [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => 'FEP Blue Mental Health Services',
                    'description' => 'Therapy services for federal employees with FEP Blue insurance coverage'
                ]
            ]
        ]
    ],
    'audience' => [
        '@type' => 'PeopleAudience',
        'audienceType' => 'Patients seeking mental health services'
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

  <main class="main">

    <section id="hero" class="hero position-relative">
      <div class="overlay">
      </div>
      <div class="position-absolute text-center hero-inner" style="top:12%">
        <a class="cta-btn btn btn-light mb-4 w-50 m-auto d-block d-md-none" href="appointment">Make an
          Appointment</a>
        <h1 class="text-white display-1">Compassionate Healing <br> Therapy to Support Your <br> Mental Health</h1>
        <p class="text-white col-12 col-md-8 m-auto my-3">Healing Therapy Center is here to support you through life’s
          challenges with compassionate care and personalized
          guidance. Your mental health is our priority. Schedule your appointment today and take the first step toward
          healing and
          growth</p>
        <a href="appointment" class="btn-get-started">Start Your Journey Today</a>
        <div>
          <ul class="text-white text-start mx-auto my-4 hero-ul" style="width: 20%;list-style-type: none;">
            <li class="mb-2"><i class="fa fa-check-circle me-2"></i> Online Therapy Available</li>
            <li><i class="fa fa-check-circle me-2"></i> Insurance Accepted</li>
          </ul>
        </div>
      </div>

    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="container rounded">
            <h2 class="text-center">Insurance We Accept - Including FEP Blue for Federal Employees</h2>
            <div class="alert alert-info text-center mx-auto mb-4" style="max-width: 900px;">
              <p class="mb-0"><i class="bi bi-shield-check me-2"></i><strong>Federal Employees:</strong> We accept <strong>FEP Blue</strong> (Blue Cross Blue Shield Federal Employee Program) insurance. If you work for USPS, CBP, FBI, VA, or any federal agency in Michigan, your mental health services may be covered. Coverage, copays, session limits, and authorization requirements vary by plan. <a href="fep-blue-federal-employee-therapy" class="alert-link"><strong>Learn more about FEP Blue coverage →</strong></a></p>
            </div>
            <div class="slider">
              <div class="logos">
                <img loading="lazy" src="assets/img/in-5.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="Blue Care Network of Michigan logo">
                <img loading="lazy" src="assets/img/in-1.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="Priority Health logo">
                <img loading="lazy" src="assets/img/in-2.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="Blue Cross Blue Shield logo">
                <img loading="lazy" src="assets/img/in-3.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="Aetna logo">
                <img loading="lazy" src="assets/img/in-4.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="United Healthcare logo">
                <img loading="lazy" src="assets/img/in-6.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="HAP logo">
              </div>
              <div class="logos">
                <img loading="lazy" src="assets/img/in-5.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="Blue Care Network of Michigan logo">
                <img loading="lazy" src="assets/img/in-1.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="Priority Health logo">
                <img loading="lazy" src="assets/img/in-2.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="Blue Cross Blue Shield logo">
                <img loading="lazy" src="assets/img/in-3.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="Aetna logo">
                <img loading="lazy" src="assets/img/in-4.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="United Healthcare logo">
                <img loading="lazy" src="assets/img/in-6.png" width="150" height="100" class="img-fluid object-fit-cover mx-3" alt="HAP logo">
              </div>
            </div>
            <p class="text-center mt-4 mb-0">We accept most major insurance plans including <strong>Blue Cross Blue Shield (including <a href="fep-blue-federal-employee-therapy">FEP Blue for federal employees</a>)</strong>, Priority Health, Aetna, McLaren Health Plan, HAP, Blue Care Network, United Healthcare, and Michigan Medicaid. <a href="insurance"><strong>View all accepted insurance plans and payment options</strong></a>. Call <a href="tel:313-654-1915"><strong>(313) 654-1915</strong></a> to verify your coverage.</p>
          </div>
        </div>

      </div>
    </section>


    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Our Comprehensive Healing Therapy Services Tailored for You</h2>
        <p>At Healing Therapy Center, we offer a comprehensive range of mental health services designed to support your
          journey
          towards wellness. Our licensed professionals provide personalized care, ensuring that you receive the support
          you need
          to heal and thrive.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-3 col-md-4 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <a href="individual-therapy">
              <div class="team-member">
                <div class="member-img rounded-circle border border-4 border-primary">
                  <img loading="lazy" src="assets/img/individual.webp" class="img-fluid rounded-circle p-1 doc-pic"
                    style="object-position: center;" alt="Individual therapy">
                </div>
                <div class="member-info mt-3">
                  <h3>Individual Therapy</h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <a href="couples-therapy">
              <div class="team-member">
                <div class="member-img rounded-circle border border-4 border-primary">
                  <img loading="lazy" src="assets/img/couple.webp" class="img-fluid rounded-circle p-1 doc-pic"
                    style="object-position: center;" alt="Couple therapy">
                </div>
                <div class="member-info mt-3">
                  <h3>Couples Therapy</h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <a href="family-therapy">
              <div class="team-member">
                <div class="member-img rounded-circle border border-4 border-primary">
                  <img loading="lazy" src="assets/img/family.webp" class="img-fluid rounded-circle p-1 doc-pic"
                    style="object-position: center;" alt="family therapy">
                </div>
                <div class="member-info mt-3">
                  <h3>Family Therapy</h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <a href="group-therapy">
              <div class="team-member">
                <div class="member-img rounded-circle border border-4 border-primary">
                  <img loading="lazy" src="assets/img/group.webp" class="img-fluid rounded-circle p-1 doc-pic"
                    style="object-position: center;" alt="Group therapy">
                </div>
                <div class="member-info mt-3">
                  <h3>Group Therapy</h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <a href="psychological-testing">
              <div class="team-member">
                <div class="member-img rounded-circle border border-4 border-primary">
                  <img loading="lazy" src="assets/img/psychological_test.webp" class="img-fluid rounded-circle p-1 doc-pic"
                    style="object-position: center;" alt="psychological testing">
                </div>
                <div class="member-info mt-3">
                  <h3>Psychological Testing</h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <a href="telehealth-therapy">
              <div class="team-member">
                <div class="member-img rounded-circle border border-4 border-primary">
                  <img loading="lazy" src="assets/img/telehealth.webp" class="img-fluid rounded-circle p-1 doc-pic"
                    style="object-position: center;" alt="telehealth therapy">
                </div>
                <div class="member-info mt-3">
                  <h3>Telehealth Therapy</h3>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 col-sm-6 text-center" data-aos="fade-up" data-aos-delay="100">
            <a href="perinatal-therapy">
              <div class="team-member">
                <div class="member-img rounded-circle border border-4 border-primary">
                  <img loading="lazy" src="assets/img/perinatal.jpg?v=2" class="img-fluid rounded-circle p-1 doc-pic"
                    style="object-position: center;" alt="perinatal therapy">
                </div>
                <div class="member-info mt-3">
                  <h3>Perinatal Therapy</h3>
                </div>
              </div>
            </a>
          </div>

        </div>
        <div class="row">
            <a class="cta-btn btn btn-primary col-3 px-2 mx-auto mt-5" href="autism-screening-tool"> Take Our Free Autism Screening Tool
</a>
        </div>
      </div>

    </section><!-- /Services Section -->

    <!-- Why Choose Local Section -->
    <section class="section bg-light">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center mb-4">
          <h2>Why Choose a Local Michigan Practice?</h2>
          <p>We're not a large online platform—we're your neighbors in Dearborn, committed to personalized, consistent care.</p>
        </div>

        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="0">
              <div class="card h-100 border-0 shadow-sm text-center">
                <div class="card-body">
                  <div class="mb-3" style="font-size: 2.5rem; color: var(--accent-color);">
                    <i class="bi bi-person-check-fill"></i>
                  </div>
                  <h3 class="card-title h5"><a href="therapists" class="text-decoration-none">Meet Our Therapists</a></h3>
                  <p class="card-text small text-muted">Build a real relationship with your therapist—no random assignments or rotating providers like online platforms.</p>
                </div>
              </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <a href="appointment" class="text-decoration-none">
              <div class="card h-100 border-0 shadow-sm text-center">
                <div class="card-body">
                  <div class="mb-3" style="font-size: 2.5rem; color: var(--accent-color);">
                    <i class="bi bi-house-heart-fill"></i>
                  </div>
                  <h3 class="card-title h5">In-Person or Telehealth</h3>
                  <p class="card-text small text-muted">Choose face-to-face sessions at our Dearborn office or secure telehealth—whatever works best for you.</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3" style="font-size: 2.5rem; color: var(--accent-color);">
                  <i class="bi bi-shield-check"></i>
                </div>
                <h3 class="card-title h5">Insurance Accepted</h3>
                <p class="card-text small text-muted">We accept Blue Cross Blue Shield, Aetna, Priority Health, McLaren, HAP, and most major insurance plans.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card h-100 border-0 shadow-sm text-center">
              <div class="card-body">
                <div class="mb-3" style="font-size: 2.5rem; color: var(--accent-color);">
                  <i class="bi bi-geo-alt-fill"></i>
                </div>
                <h3 class="card-title h5">Part of Your Community</h3>
                <p class="card-text small text-muted">We understand Michigan—from Dearborn to Detroit, Ann Arbor to Novi. Local care that gets your unique experience.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-10 mx-auto">
            <div class="alert alert-primary text-center" role="alert">
              <h3 class="mb-2 h5"><i class="bi bi-heart-fill me-2"></i>Small Practice, Big Impact</h3>
              <p class="mb-0">Unlike large online therapy companies, we prioritize quality over quantity. You're not just a subscription—you're a valued member of our healing community.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Why Choose Local Section -->

    <!-- Mental Health Conditions Section -->
    <section class="section">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Mental Health Conditions We Treat Throughout Michigan</h2>
          <p>At Healing Therapy Center, our licensed therapists provide specialized treatment for a wide range of mental health conditions via secure telehealth throughout Michigan or in-person at our Dearborn office. We understand that every individual's mental health journey is unique, and we tailor our evidence-based approaches to meet your specific needs.</p>
        </div>
        <div class="row mt-4">
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i><strong><a href="anxiety-therapy-michigan" class="text-primary text-decoration-underline">Anxiety Disorders</a>:</strong> Generalized anxiety, panic attacks, social anxiety, phobias</li>
              <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i><strong><a href="depression-counseling-michigan" class="text-primary text-decoration-underline">Depression</a>:</strong> Major depression, persistent depressive disorder, postpartum depression</li>
              <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i><strong><a href="trauma-ptsd-treatment" class="text-primary text-decoration-underline">Trauma & PTSD</a>:</strong> Childhood trauma, complex PTSD, assault, accidents. Specialized <a href="ptsd-therapy-federal-law-enforcement" class="text-primary">PTSD treatment for federal law enforcement</a> and first responders</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i><strong><a href="adhd-testing-evaluation" class="text-primary text-decoration-underline">ADHD Testing</a>:</strong> Children, adolescents, and adults - comprehensive evaluation</li>
              <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i><strong><a href="autism-evaluation" class="text-primary text-decoration-underline">Autism Evaluation</a>:</strong> Gold-standard diagnostic assessments for all ages. Learn about <a href="autism-signs" class="text-primary">early signs of autism</a></li>
              <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i><strong><a href="perinatal-therapy" class="text-primary text-decoration-underline">Postpartum Depression</a>:</strong> Perinatal therapy for pregnancy and postpartum</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-unstyled">
              <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i><strong><a href="couples-therapy" class="text-primary text-decoration-underline">Couples & Marriage Counseling</a>:</strong> Communication, conflict, intimacy challenges</li>
              <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i><strong><a href="family-therapy" class="text-primary text-decoration-underline">Family Therapy</a>:</strong> Parent-teen issues, sibling rivalry, blended families</li>
              <li class="mb-3"><i class="bi bi-check-circle-fill text-primary me-2"></i><strong><a href="individual-therapy" class="text-primary text-decoration-underline">Individual Therapy</a>:</strong> Stress, grief, self-esteem, life transitions. Specialized support for <a href="shift-work-federal-employee-therapy" class="text-primary">shift workers and federal employees</a></li>
            </ul>
          </div>
        </div>
        <div class="text-center mt-4">
          <p class="lead">Not sure if we can help with your specific concern? <a href="tel:313-654-1915" class="text-primary"><strong>Call us at (313) 654-1915</strong></a> - we're here to discuss your needs and determine the best path forward.</p>
        </div>
      </div>
    </section>

    <!-- Telehealth Michigan Section -->
    <section class="section light-background">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Telehealth Therapy Services Throughout Michigan</h2>
        </div>
        <div class="row align-items-center">
          <div class="col-lg-6">
            <p>While our office is conveniently located in Dearborn, we provide <strong>secure telehealth therapy services to clients anywhere in Michigan</strong>. Whether you're in Detroit, Grand Rapids, Ann Arbor, Lansing, Kalamazoo, Traverse City, or rural Michigan, you can access our licensed therapists from the comfort and privacy of your home.</p>
            <p>Our HIPAA-compliant telehealth platform is easy to use and provides the same quality, evidence-based care as in-person sessions. Many clients prefer telehealth for its convenience, flexibility, and privacy - no commute, no waiting room, and therapy on your schedule.</p>
            <p class="mb-0"><strong>Serving Michigan residents in:</strong> Wayne County, Oakland County, Macomb County, Washtenaw County, Kent County, Genesee County, Ingham County, and all 83 Michigan counties. Both individual therapy and family/couples therapy available via telehealth.</p>
          </div>
          <div class="col-lg-6">
            <div class="alert alert-info">
              <h3 class="alert-heading h5"><i class="bi bi-laptop me-2"></i>Telehealth Benefits</h3>
              <ul class="mb-0">
                <li>Access therapy from anywhere in Michigan</li>
                <li>No commute - save time and gas</li>
                <li>Flexible scheduling including evenings and weekends</li>
                <li>Same quality care as in-person sessions</li>
                <li>Private and confidential HIPAA-compliant platform</li>
                <li>Perfect for busy schedules, parents, rural residents</li>
              </ul>
            </div>
            <div class="text-center mt-3">
              <a href="telehealth-therapy" class="btn btn-primary">Learn More About Telehealth</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="section">
      <div class="container" data-aos="fade-up">
        <div class="section-title text-center">
          <h2>Why Families Throughout Michigan Choose Healing Therapy Center</h2>
          <p>We're committed to providing accessible, high-quality mental health care that meets you where you are - whether that's in our Dearborn office or via telehealth from your home.</p>
        </div>
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body text-center">
                <i class="bi bi-shield-check text-primary" style="font-size: 3rem;"></i>
                <h3 class="card-title mt-3 h5">Licensed Michigan Therapists</h3>
                <p class="card-text">All our therapists are fully licensed to practice in Michigan with extensive training in evidence-based treatments.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body text-center">
                <i class="bi bi-camera-video text-primary" style="font-size: 3rem;"></i>
                <h3 class="card-title mt-3 h5">Telehealth & In-Person Options</h3>
                <p class="card-text">Choose what works best for you - secure online therapy from anywhere in Michigan or in-person sessions at our Dearborn office.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body text-center">
                <i class="bi bi-credit-card text-primary" style="font-size: 3rem;"></i>
                <h3 class="card-title mt-3 h5">Major Insurance Plans</h3>
                <p class="card-text">We work with most major Michigan insurance plans including Blue Cross Blue Shield (FEP Blue for federal employees), Aetna, Priority Health, McLaren, and HAP.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body text-center">
                <i class="bi bi-clipboard-data text-primary" style="font-size: 3rem;"></i>
                <h3 class="card-title mt-3 h5">Specialized Expertise</h3>
                <p class="card-text">Comprehensive autism evaluations, ADHD testing, perinatal therapy, couples counseling, and family therapy.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body text-center">
                <i class="bi bi-clock text-primary" style="font-size: 3rem;"></i>
                <h3 class="card-title mt-3 h5">Flexible Scheduling</h3>
                <p class="card-text">Evening and weekend appointments available to accommodate busy work schedules and family obligations.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 shadow-sm">
              <div class="card-body text-center">
                <i class="bi bi-heart text-primary" style="font-size: 3rem;"></i>
                <h3 class="card-title mt-3 h5">Culturally Sensitive Care</h3>
                <p class="card-text">We honor diverse backgrounds, identities, and experiences - providing compassionate, inclusive mental health support.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="resources" class="faq section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>GET STARTED WITH HEALING THERAPY CENTER</h2>
      </div>
      <div class="container">

        <div class="row justify-content-center">

          <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="card border-muted position-relative text-center h-100">
              <a href="therapists">
                <div class="doc-bg position-relative gs-container">
                  <span class="display-3 text-uppercase">Meet Our Therapists</span>
                </div>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 h-100" data-aos="fade-up" data-aos-delay="600">
            <div class="card border-muted position-relative text-center h-100">
              <a href="faq">
                <div class="doc-bg position-relative gs-container">
                  <span class="display-3 text-uppercase">Therapy FAQ'S</span>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>

    </section>
    <section id="blog" class="">
      <div class="container section-title" data-aos="fade-up">
        <h3>LATEST POSTS</h3>
      </div>
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-12 col-md-6 col-lg-4 g-3">
              <div class="card">
                <img loading="lazy" src="assets/img/blog-6.jpg" class="card-img-top" alt="parenting child autism">
                <div class="card-body">
                  <h4 class="card-title h5"><a href="parenting-child" class="text-black">Parenting a Child with Autism</a></h4>
                  <div class="row">
                    <div class="col-12">
                      <div class="hstack my-2">
                        <div class="me-3">
                          <i class="fa fa-user me-1 text-primary"></i>
                          <span class="fs-6">Amal Ayad</span>
                        </div>
                        <div>
                          <i class="fa fa-calendar me-1 text-primary"></i>
                          <span class="fs-6">12/02/2025</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="card-text">Raising a child with autism spectrum disorder (ASD) comes with unique joys and challenges..</p>
                  <a href="parenting-child" class="btn btn-primary mt-3">Read More</a>
                </div>
              </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 g-3">
              <div class="card">
                <img loading="lazy" src="assets/img/blog-7.jpg" class="card-img-top" alt="autism curable">
                <div class="card-body">
                  <h4 class="card-title h5"><a href="is-autism-curable" class="text-black">Is Autism Curable</a></h4>
                  <div class="row">
                    <div class="col-12">
                      <div class="hstack my-2">
                        <div class="me-3">
                          <i class="fa fa-user me-1 text-primary"></i>
                          <span class="fs-6">Amal Ayad</span>
                        </div>
                        <div>
                          <i class="fa fa-calendar me-1 text-primary"></i>
                          <span class="fs-6">12/09/2025</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <p class="card-text">Autism Spectrum Disorder (ASD) is a complex neurodevelopmental condition that affects
                    communication..</p>
                  <a href="is-autism-curable" class="btn btn-primary mt-3">Read More</a>
                </div>
              </div>
          </div>
        </div>
        <div class="text-center mt-5">
          <a href="all-blogs" class="btn btn-primary px-5">View All</a>
        </div>

    </section><!-- /Faq Section -->

    <section class="map section">
      <div class="container">
        <div class="section-title">
          <h3 class="text-center">Trusted Healing Therapy Services Near Me in Dearborn, MI</h3>
        </div>
        <div class="row">
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2951.6676062093616!2d-83.2336412!3d42.285618299999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x49209db55e5af6b9%3A0xac011e6fed0001a0!2sHealing%20Therapy%20Center!5e0!3m2!1sen!2s!4v1761917102636!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <div class="col-12 col-lg-6">
            <div class="p-3">
              <p><a href="https://www.google.com/maps/place/Healing+Therapy+Center/@42.2856183,-83.2336412,17z/data=!3m1!4b1!4m6!3m5!1s0x49209db55e5af6b9:0xac011e6fed0001a0!8m2!3d42.2856183!4d-83.2336412!16s%2Fg%2F11y8d4mlbr?entry=ttu&g_ep=EgoyMDI1MTAyOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">
                   Healing Therapy Center</a> is
                located at 22005 Outer Dr W, <a href="https://cityofdearborn.org/" target="_blank" rel="noopener noreferrer">Dearborn, MI</a> 48124
              </p>


              <p>To get reach our center from Downtown Dearborn, MI by bus, start at <a
                  href=" https://moovitapp.com/index/en/public_transit-Michigan_Oakwood_Blvd-Detroit_MI-stop_43027411-745"
                  target="_blank" rel="noopener noreferrer">Michigan Ave & Oakwood Blvd</a> and board the westbound
                bus toward Summit & Outer Drive. Travel approximately 2 miles before getting off at Michigan Ave &
                Military St. From
                there, walk for a short distance south on Military St, then turn right onto Claremont St, where the
                Healing Therapy
                Center will be on the left.</p>

              <p>Alternatively, you can take SMART Bus Route 200 from Michigan Ave & Oakwood Blvd and head west toward
                Westland Mall.
                After traveling about 1.8 miles, get off at Monroe St & Mason St, then walk for a short distance south
                on Monroe St
                before turning left onto Claremont St, where we will be on the right.</p>

              <p>To reach us from Downtown Dearborn, MI by car, drive approximately 2.2 miles. Take Michigan Ave (US-12)
                westbound and
                continue for about 1.8 miles. Turn left onto Monroe St and drive for a short distance south, then turn
                left onto
                Claremont St, where our center will be on the right.</p>

              <p>We are available Monday to Friday from 9:00 am to 5:00 pm and Saturday from 9:00 am to 2:00 pm.</p>

              <p>For more information, call us at <a href="tel:313 654-1915">(313) 654-1915.</a></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <p class="mb-3 fs-4">Contact</h2>
        <p>Ready to take the next step towards better health? Contact us today to schedule a consultation
          and learn more about how Healing Therapy Center can help you achieve a higher quality of life.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6">
            <div class="row gy-4 h-100">
              <div class="col-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center h-100" data-aos="fade-up"
                  data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <p>Call Us</p>
                  <p><a href="tel:313-654-1915">313-654-1915</a></p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-12">
                <div class="info-item d-flex flex-column justify-content-center align-items-center h-100" data-aos="fade-up"
                  data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <p>Email Us</p>
                  <p><a href="mailto:info@healingtherapycenter.com">info@healingtherapycenter.com</a></p>
                </div>
              </div><!-- End Info Item -->

            </div>
          </div>

          <div class="col-lg-6">
            <form id="contact_form" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="500">
              <!-- CSRF Token (hidden) -->
              <input type="hidden" name="csrf_token" id="contact_csrf_token" value="">

              <!-- Honeypot field (hidden - for spam detection) -->
              <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" id="name" name="Name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" id="email" class="form-control" name="Email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" id="subject" class="form-control" name="Subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" id="message" name="Message" rows="4" placeholder="Message"
                    required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <button id="btn_submit" type="submit" class="btn btn-primary rounded-pill px-4 fs-5">Send
                    Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
