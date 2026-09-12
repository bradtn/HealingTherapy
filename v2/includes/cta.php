<?php
/**
 * V2 Final CTA banner — reusable.
 * Optional overrides before include:
 *   $cta_heading, $cta_copy
 */
if (!defined('BUSINESS_NAME')) {
    require_once dirname(__DIR__, 2) . '/includes/config.php';
}
$cta_heading = $cta_heading ?? "We're Here for You";
$cta_copy = $cta_copy ?? 'Your mental health matters. Reach out today to schedule an appointment or learn more about our services.';
?>
<section class="cta-band" id="contact">
    <div class="cta-band__texture" aria-hidden="true"></div>
    <div class="shell cta-band__inner reveal">
        <p class="eyebrow eyebrow--light">Take the first step</p>
        <h2 class="cta-band__title"><?php echo htmlspecialchars($cta_heading); ?></h2>
        <p class="cta-band__copy"><?php echo htmlspecialchars($cta_copy); ?></p>
        <div class="cta-band__actions">
            <a class="btn btn--pill btn--cream" href="/appointment">
                Make an Appointment
                <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
            </a>
            <a class="btn btn--pill btn--ghost-light" href="<?php echo PHONE_LINK; ?>">
                Call <?php echo PHONE; ?>
            </a>
        </div>
        <p class="cta-band__meta">
            <a href="<?php echo EMAIL_LINK; ?>"><?php echo EMAIL; ?></a>
            <span aria-hidden="true">·</span>
            <span>Mon–Fri 9am–5pm, Sat 9am–2pm</span>
            <span aria-hidden="true">·</span>
            <span>In-person in Dearborn &amp; telehealth statewide</span>
        </p>
    </div>
</section>
