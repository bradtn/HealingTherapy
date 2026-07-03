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

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

    <main class="main">
        <section class="topArea blog-intro position-relative">
            <div class="overlay"></div>
            <div class="position-absolute text-center w-100">
                <h1 class="display-3 fw-bold text-white">Mental Health Blog</h1>
                <hr class="text-white w-25 m-auto my-3">
                <p class="text-white fs-5 mx-auto" style="max-width: 800px;">Expert insights and practical guidance from our licensed therapists to support your mental health journey</p>
            </div>
        </section>

        <section class="about section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <p class="text-center mb-4">Welcome to the Healing Therapy Center blog, where our team of licensed mental health professionals shares valuable insights, practical strategies, and evidence-based information to support your mental health journey. Whether you are navigating anxiety, depression, relationship challenges, or exploring resources for autism and child development, our articles provide guidance you can trust.</p>
                        <p class="text-center mb-0">We believe that knowledge is an important part of healing. Our blog covers a wide range of topics including understanding mental health conditions, coping strategies for everyday challenges, parenting support, and tips for finding the right therapeutic approach for your needs. Browse our articles below and discover resources that can help you and your loved ones thrive.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="news-single section light-background">
            <div class="container">
                <h2 class="mb-4 text-center">Articles & Resources</h2>
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="row g-4">
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-6.jpg" class="card-img-top" alt="FEP Blue mental health benefits">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="fep-blue-mental-health-benefits-guide" class="text-black">FEP Blue Mental Health Benefits Guide for Federal Employees</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/16/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Complete guide to FEP Blue mental health coverage for federal employees in Michigan. Learn about co-pays, covered services, and how to maximize your benefits..</p>
                                        <a href="fep-blue-mental-health-benefits-guide" class="btn btn-primary mt-3">Read Benefits Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-5.jpg" class="card-img-top" alt="federal employee stress">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="federal-employee-stress-management-therapy" class="text-black">Managing Stress as a Federal Employee</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/16/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Unique stressors federal employees face and when to seek therapy. USPS, CBP, FBI, VA employees - learn how therapy can help..</p>
                                        <a href="federal-employee-stress-management-therapy" class="btn btn-primary mt-3">Read Stress Management Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-7.jpg" class="card-img-top" alt="PTSD law enforcement">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="ptsd-therapy-federal-law-enforcement" class="text-black">PTSD Treatment for Federal Law Enforcement</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/16/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">EMDR and trauma-focused therapy for CBP officers, FBI agents, and federal first responders. Confidential, effective PTSD treatment..</p>
                                        <a href="ptsd-therapy-federal-law-enforcement" class="btn btn-primary mt-3">Read PTSD Treatment Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-6.jpg" class="card-img-top" alt="shift work therapy">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="shift-work-federal-employee-therapy" class="text-black">Work-Life Balance for Federal Shift Workers</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/16/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Therapy solutions for USPS, CBP, and federal shift workers. Sleep issues, relationship strain, mental health support..</p>
                                        <a href="shift-work-federal-employee-therapy" class="btn btn-primary mt-3">Read Shift Work Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-8.jpg" class="card-img-top" alt="person first approach therapy">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="person-first-approach" class="text-black">Treat the Person Not the Diagnosis</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Dr. Nadia Habhab</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">05/20/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Why I believe in a Person-First Approach to Understanding Symptoms and Emotions through Emotion Focused Therapy..</p>
                                        <a href="person-first-approach" class="btn btn-primary mt-3">Read About Person-First Therapy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-7.jpg" class="card-img-top" alt="autism curable">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="is-autism-curable" class="text-black">Is Autism Curable</a></h4>
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
                                            <p class="card-text">Autism Spectrum Disorder (ASD) is a complex neurodevelopmental condition that affects communication..</p>
                                        <a href="is-autism-curable" class="btn btn-primary mt-3">Explore Autism Treatment Facts</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-6.jpg" class="card-img-top" alt="parenting child">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="parenting-child" class="text-black">Parenting a Child with Autism</a></h4>
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
                                        <a href="parenting-child" class="btn btn-primary mt-3">Explore Autism Parenting Tips</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-5.jpg" class="card-img-top" alt="autism signs">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="autism-signs" class="text-black">Early Signs of Autism in children</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Amal Ayad</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">11/25/2025</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Navigating the early years of your child’s life is filled with joy and challenges.
                                                As a parent, you want to ensure that
                                                your child..</p>
                                        <a href="autism-signs" class="btn btn-primary mt-3">Learn About Early Autism Signs</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-4.jpg" class="card-img-top" alt="breaking stigma">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="breaking-stigma" class="text-black">Breaking the Stigma</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Amal Ayad</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">11/18/2025</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">In order to be able to break stigma around mental
                                                health treatment it is important
                                                to understand what stigma is ..</p>
                                        <a href="breaking-stigma" class="btn btn-primary mt-3">Learn About Mental Health Stigma</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog3.jpg" class="card-img-top" alt="coping postpartum">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="coping-with-postpartum-depression" class="text-black">Coping with Depression</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Amal Ayad</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">11/11/2025</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Becoming a mother is one of life’s most beautiful and
                                                transformative experiences.
                                                However, it also comes..</p>
                                        <a href="coping-with-postpartum-depression" class="btn btn-primary mt-3">Explore Postpartum Depression Tips</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog2.jpg" class="card-img-top" alt="fint right therapist">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="how-to-find-the-right-therapist" class="text-black">How to Find the Right Therapist</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Amal Ayad</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">11/04/2025</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Finding the right therapist is a crucial step toward
                                                improving your mental health
                                                and overall well-being..</p>
                                        <a href="how-to-find-the-right-therapist" class="btn btn-primary mt-3">Read Therapist Selection Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-9.jpg" class="card-img-top" alt="ADHD guide">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="adhd-guide-adults-children" class="text-black">ADHD in Adults & Children: Complete Guide</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/17/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Comprehensive guide to ADHD symptoms, testing, and treatment for adults and children in Michigan..</p>
                                        <a href="adhd-guide-adults-children" class="btn btn-primary mt-3">Read ADHD Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog2.jpg" class="card-img-top" alt="anxiety guide">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="anxiety-therapy-guide" class="text-black">Understanding Anxiety: Complete Treatment Guide</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/17/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Learn about anxiety signs, types, and effective treatment options in Dearborn and throughout Michigan..</p>
                                        <a href="anxiety-therapy-guide" class="btn btn-primary mt-3">Read Anxiety Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog3.jpg" class="card-img-top" alt="grief counseling">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="grief-loss-counseling-guide" class="text-black">Grief & Loss Counseling Guide</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/17/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Coping with loss and finding healing through professional grief counseling support..</p>
                                        <a href="grief-loss-counseling-guide" class="btn btn-primary mt-3">Read Grief Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-4.jpg" class="card-img-top" alt="PTSD trauma therapy">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="ptsd-trauma-therapy-guide" class="text-black">PTSD & Trauma Therapy Guide</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/17/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Understanding PTSD and trauma healing through evidence-based therapy approaches..</p>
                                        <a href="ptsd-trauma-therapy-guide" class="btn btn-primary mt-3">Read PTSD Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-5.jpg" class="card-img-top" alt="teen mental health">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="teen-mental-health-guide" class="text-black">Teen Mental Health: Parent's Guide</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/17/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Warning signs and how parents can support their teenager's mental health..</p>
                                        <a href="teen-mental-health-guide" class="btn btn-primary mt-3">Read Teen Health Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog-6.jpg" class="card-img-top" alt="autism evaluation insurance">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="autism-evaluation-michigan-insurance" class="text-black">Autism Evaluation: Insurance Coverage Guide</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Healing Therapy Center</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">06/17/2026</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Complete guide to autism evaluation insurance coverage in Michigan - BCBS, Aetna, Priority Health..</p>
                                        <a href="autism-evaluation-michigan-insurance" class="btn btn-primary mt-3">Read Insurance Guide</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col col-md-6">
                                <div class="card">
                                    <img src="assets/img/blog1.jpg" class="card-img-top" alt="understanding depression">
                                    <div class="card-body">
                                        <h4 class="card-title"><a href="understanding-depression" class="text-black">Understanding Depression</a></h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="hstack my-2">
                                                        <div class="me-3">
                                                            <i class="fa fa-user me-1 text-primary"></i>
                                                            <span class="fs-6">Amal Ayad</span>
                                                        </div>
                                                        <div>
                                                            <i class="fa fa-calendar me-1 text-primary"></i>
                                                            <span class="fs-6">10/28/2025</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="card-text">Have you ever felt sad, slowed down, and had difficulty
                                                concentrating? Maybe you
                                                thought could this be depression?
                                                Sometime..</p>
                                        <a href="understanding-depression" class="btn btn-primary mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="main-sidebar">
                            <div class="single-widget recent-post">
                                <h3 class="title">Recent posts</h3>
                                <!-- Federal Employee Blog Posts -->
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img src="assets/img/blog-6.jpg" class="object-fit-cover" height="70" width="100"
                                            alt="FEP Blue benefits">
                                    </div>
                                    <div class="content">
                                        <h5><a href="fep-blue-mental-health-benefits-guide">FEP Blue Benefits Guide</a></h5>
                                            <div class="comment d-flex align-items-center">
                                                <span class="text-muted" style="font-size:13px"><i
                                                        class="fa fa-calendar me-1 text-muted" style="font-size:13px"
                                                        aria-hidden="true"></i>06/16/2026</span>
                                            </div>
                                    </div>
                                </div>
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img src="assets/img/blog-5.jpg" class="object-fit-cover" height="70" width="100"
                                            alt="federal employee stress">
                                    </div>
                                    <div class="content">
                                        <h5><a href="federal-employee-stress-management-therapy">Federal Employee Stress Management</a></h5>
                                            <div class="comment d-flex align-items-center">
                                                <span class="text-muted" style="font-size:13px"><i
                                                        class="fa fa-calendar me-1 text-muted" style="font-size:13px"
                                                        aria-hidden="true"></i>06/16/2026</span>
                                            </div>
                                    </div>
                                </div>
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img src="assets/img/blog-7.jpg" class="object-fit-cover" height="70" width="100"
                                            alt="PTSD law enforcement">
                                    </div>
                                    <div class="content">
                                        <h5><a href="ptsd-therapy-federal-law-enforcement">PTSD for Law Enforcement</a></h5>
                                            <div class="comment d-flex align-items-center">
                                                <span class="text-muted" style="font-size:13px"><i
                                                        class="fa fa-calendar me-1 text-muted" style="font-size:13px"
                                                        aria-hidden="true"></i>06/16/2026</span>
                                            </div>
                                    </div>
                                </div>
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img src="assets/img/blog-6.jpg" class="object-fit-cover" height="70" width="100"
                                            alt="shift work therapy">
                                    </div>
                                    <div class="content">
                                        <h5><a href="shift-work-federal-employee-therapy">Shift Worker Balance</a></h5>
                                            <div class="comment d-flex align-items-center">
                                                <span class="text-muted" style="font-size:13px"><i
                                                        class="fa fa-calendar me-1 text-muted" style="font-size:13px"
                                                        aria-hidden="true"></i>06/16/2026</span>
                                            </div>
                                    </div>
                                </div>
                                <!-- Previous Posts -->
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img src="assets/img/blog-8.jpg" class="object-fit-cover" height="70" width="100"
                                            alt="person first approach therapy">
                                    </div>
                                    <div class="content">
                                        <h5><a href="person-first-approach">Treat the Person Not the Diagnosis</a></h5>
                                            <div class="comment d-flex align-items-center">
                                                <span class="text-muted" style="font-size:13px"><i
                                                        class="fa fa-calendar me-1 text-muted" style="font-size:13px"
                                                        aria-hidden="true"></i>05/20/2026</span>
                                            </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
