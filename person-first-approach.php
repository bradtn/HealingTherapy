<?php
// Page-specific variables
$page_title = 'Person-First Approach to Therapy | Dr. Nadia Habhab';
$page_description = 'Dr. Nadia Habhab explains why treating the person, not the diagnosis, matters in Emotion Focused Therapy and person-centered mental health care.';
$canonical_url = 'https://www.healingtherapycenter.com/person-first-approach';

// Article Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Article',
    'headline' => 'Treat the Person Not the Diagnosis: Why I believe in a Person-First Approach to Understanding Symptoms and Emotions',
    'description' => $page_description,
    'url' => $canonical_url,
    'mainEntityOfPage' => $canonical_url,
    'image' => 'https://www.healingtherapycenter.com/assets/img/blog-8.jpg',
    'datePublished' => '2026-05-20',
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
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

    <main class="main">
        <section class="news-single section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-main">
                                    <div class="news-head">
                                        <img loading="lazy" src="assets/img/blog-8.jpg" class="img-fluid" alt="person first approach therapy">
                                    </div>
                                    <h1 class="my-2">Treat the Person Not the Diagnosis: Why I believe in a Person-First Approach to Understanding Symptoms and Emotions</h1>
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
                                    <p>Emotion Focused Therapy (referred to as EFT hereafter) is a therapeutic approach that treats exactly what it claims; emotion. To put it plainly, the focus is on your emotional experience and the meaning you make of your experiences, and any unmet needs which may or may not be within the in your explicit awareness.</p>
                                    <p>Often, clients come to me with neatly packaged constellation of symptoms and experiences that they have been 'diagnosed with' by another professional or have made in a good-faith effort to understand their own suffering. While diagnosis can be a useful tool, focusing only on a diagnosis can overlook the deeply personal emotional experiences and unmet needs that may be driving distress. By understanding the individual within the context of their lived experience (e.g. culture, religion, social supports, age, and gender identity) therapy can more meaningfully address the roots of suffering rather than just its labels.</p>
                                    <p>An individual labeled 'borderline' might be struggling with years of complex, traumatic experience, and years of unmet need for validation from loved ones around their experience. Likewise, the label of "depressed" or "anxious" fails to acknowledge that an individual can access a more productive emotional experiences at any given moment.</p>
                                    <p>A person-centered approach to therapy views the therapeutic process as collaborative rather than condemning, recognizing that human experience is dynamic and evolving and not fixed by symptoms or diagnoses.</p>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="main-sidebar">
                            <div class="single-widget recent-post">
                                <h3 class="title">Recent posts</h3>
                                <!-- Single Post -->
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img loading="lazy" src="assets/img/blog-7.jpg" class="object-fit-cover" height="70" width="100"
                                            alt="is autism curable">
                                    </div>
                                    <div class="content">
                                        <h6><a href="is-autism-curable">Is Autism Curable</a></h6>
                                            <div class="comment d-flex align-items-center">
                                                <span class="text-muted" style="font-size:13px"><i
                                                        class="fa fa-calendar me-1 text-muted" style="font-size:13px"
                                                        aria-hidden="true"></i>12/09/2025</span>
                                            </div>
                                    </div>
                                </div>
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img loading="lazy" src="assets/img/blog-6.jpg" class="object-fit-cover" height="70" width="100"
                                            alt="parenting child autism">
                                    </div>
                                    <div class="content">
                                        <h6><a href="parenting-child">Parenting a Child with Autism</a></h6>
                                            <div class="comment d-flex align-items-center">
                                                <span class="text-muted" style="font-size:13px"><i
                                                        class="fa fa-calendar me-1 text-muted" style="font-size:13px"
                                                        aria-hidden="true"></i>12/02/2025</span>
                                            </div>
                                    </div>
                                </div>
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img loading="lazy" src="assets/img/blog-5.jpg" class="object-fit-cover" height="70" width="100"
                                            alt="autism signs children">
                                    </div>
                                    <div class="content">
                                        <h6><a href="autism-signs">Early Signs of Autism</a></h6>
                                            <div class="comment d-flex align-items-center">
                                                <span class="text-muted" style="font-size:13px"><i
                                                        class="fa fa-calendar me-1 text-muted" style="font-size:13px"
                                                        aria-hidden="true"></i>11/25/2025</span>
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
