<?php
/**
 * V2 inner-page hero.
 * Set before include:
 *   $hero_h1      (required) — the page's semantic H1, verbatim from V1
 *   $hero_eyebrow (optional) — small label, e.g. 'Our Services'
 *   $hero_lead    (optional) — lead paragraph HTML (verbatim from V1 where one exists)
 *   $hero_cta     (optional) — false to suppress the appointment button (default shown)
 *   $hero_center  (optional) — true for centered variant
 *   $hero_meta    (optional) — HTML rendered under the H1 (e.g. blog author/date row)
 */
if (!defined('BUSINESS_NAME')) {
    require_once dirname(__DIR__, 2) . '/includes/config.php';
}
$hero_cta = $hero_cta ?? true;
?>
<section class="page-hero<?php if (!empty($hero_center)) echo ' page-hero--center'; ?>">
    <div class="shell">
        <?php if (!empty($hero_eyebrow)): ?>
        <p class="eyebrow<?php if (!empty($hero_center)) echo ' eyebrow--center'; ?>"><?php echo $hero_eyebrow; ?></p>
        <?php endif; ?>
        <h1><?php echo $hero_h1; ?></h1>
        <?php if (!empty($hero_meta)) echo $hero_meta; ?>
        <?php if (!empty($hero_lead)): ?>
        <p class="page-hero__lead"><?php echo $hero_lead; ?></p>
        <?php endif; ?>
        <?php if ($hero_cta): ?>
        <a class="btn btn--pill btn--primary" href="/appointment">
            Make an Appointment
            <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
        </a>
        <?php endif; ?>
    </div>
</section>
