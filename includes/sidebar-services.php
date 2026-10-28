<?php
/**
 * V2 services sidebar — related-services navigation.
 * Optional: $current_service (service id from config.php) for active state.
 */
if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}
$current_service = $current_service ?? '';
?>
<aside class="side-nav" aria-label="Our services">
    <h2>Our Services</h2>
    <ul>
        <?php foreach ($services as $service): ?>
        <li>
            <a href="/<?php echo $service['url']; ?>"<?php if ($current_service === $service['id']) echo ' class="is-active" aria-current="page"'; ?>>
                <?php echo $service['name']; ?>
                <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    <?php
    // Guides relevant to each service, so every guide is linked from a service page
    $guides_by_service = [
        'individual' => ['how-to-find-the-right-therapist', 'breaking-stigma', 'burnout-stress-therapy-michigan', 'ptsd-trauma-therapy-guide'],
        'couples'    => ['how-to-find-the-right-therapist', 'breaking-stigma'],
        'family'     => ['teen-mental-health-guide', 'parenting-child', 'grief-loss-counseling-guide'],
        'group'      => ['breaking-stigma', 'grief-loss-counseling-guide'],
        'testing'    => ['autism-evaluation-michigan-insurance', 'autism-signs', 'is-autism-curable', 'adhd-testing-evaluation'],
        'telehealth' => ['how-to-find-the-right-therapist', 'teen-mental-health-guide'],
        'perinatal'  => ['coping-with-postpartum-depression', 'postpartum-depression-therapy-michigan'],
    ];
    $guide_titles = [
        'how-to-find-the-right-therapist'      => 'How to Find the Right Therapist',
        'breaking-stigma'                      => 'Breaking the Stigma of Therapy',
        'burnout-stress-therapy-michigan'      => 'Burnout &amp; Work Stress',
        'ptsd-trauma-therapy-guide'            => 'PTSD &amp; Trauma Guide',
        'teen-mental-health-guide'             => 'Teen Mental Health Guide',
        'parenting-child'                      => 'Parenting a Child with Autism',
        'grief-loss-counseling-guide'          => 'Coping with Grief &amp; Loss',
        'autism-evaluation-michigan-insurance' => 'Does Insurance Cover Autism Testing?',
        'autism-signs'                         => 'Early Signs of Autism',
        'is-autism-curable'                    => 'Is Autism Curable?',
        'adhd-testing-evaluation'              => 'ADHD Testing for Children &amp; Adults',
        'coping-with-postpartum-depression'    => 'Coping With Postpartum Depression',
        'postpartum-depression-therapy-michigan' => 'Postpartum Depression Therapy',
    ];
    $guides = $guides_by_service[$current_service] ?? $guides_by_service['individual'];
    ?>
    <h2 class="side-nav__sub">Helpful Guides</h2>
    <ul>
        <?php foreach ($guides as $slug): ?>
        <li>
            <a href="/<?php echo $slug; ?>">
                <?php echo $guide_titles[$slug]; ?>
                <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    <div class="side-nav__cta">
        <a class="btn btn--pill btn--primary" href="/appointment">Make an Appointment</a>
    </div>
</aside>
