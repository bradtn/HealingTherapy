<?php
/**
 * V2 image hero — full-bleed background band (V1 "topArea" style, modernized).
 * Set before include:
 *   $hero_h1      (required) — page H1 verbatim
 *   $hero_img     (required) — image basename, e.g. 'svc-hero-individual'
 *                              (expects -800/-1400 in .avif and .webp)
 *   $hero_img_alt (required) — alt text for the background image
 *   $hero_eyebrow (optional) — small label
 *   $hero_lead    (optional) — lead paragraph HTML
 *   $hero_cta     (optional) — true to show the Make an Appointment button
 */
if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}
$hero_cta = $hero_cta ?? false;
?>
<section class="img-hero" aria-labelledby="ih-title">
    <div class="img-hero__bg">
        <picture>
            <source type="image/avif" srcset="/assets/img/<?php echo $hero_img; ?>-800.avif 800w, /assets/img/<?php echo $hero_img; ?>-1400.avif 1400w" sizes="100vw">
            <img src="/assets/img/<?php echo $hero_img; ?>-1400.webp"
                 srcset="/assets/img/<?php echo $hero_img; ?>-800.webp 800w, /assets/img/<?php echo $hero_img; ?>-1400.webp 1400w"
                 sizes="100vw" loading="eager" fetchpriority="high"
                 alt="<?php echo htmlspecialchars($hero_img_alt); ?>">
        </picture>
    </div>
    <div class="img-hero__inner">
        <?php if (!empty($hero_eyebrow)): ?>
        <p class="eyebrow"><?php echo $hero_eyebrow; ?></p>
        <?php endif; ?>
        <h1 id="ih-title"><?php echo $hero_h1; ?></h1>
        <?php if (!empty($hero_lead)): ?>
        <p class="img-hero__lead"><?php echo $hero_lead; ?></p>
        <?php endif; ?>
        <?php if ($hero_cta): ?>
        <a class="btn btn--pill btn--primary" href="/appointment">
            Make an Appointment
            <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
        </a>
        <?php endif; ?>
    </div>
</section>
