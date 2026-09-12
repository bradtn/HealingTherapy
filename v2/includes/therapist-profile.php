<?php
/**
 * V2 reusable therapist-profile template.
 *
 * Renders the full <main> body for an individual therapist bio page:
 * split text/photo hero → trust/info strip → two-column body
 * (bio prose + Areas of Focus / Credentials / mini-CTA aside) →
 * optional extra band (e.g. blog posts) → soft ivory/sage closing CTA.
 *
 * Set these before include (all HTML is rendered as-is — escape upstream):
 *   $tp_eyebrow      (optional) small label, default 'Our Team'
 *   $tp_name         (required) H1 — name + credentials, verbatim from V1 h1
 *   $tp_role         (required) professional title shown under the H1
 *   $tp_intro        (required) 1–2 sentence hero introduction (real bio words)
 *   $tp_photo        (required) portrait src (root-absolute)
 *   $tp_photo_alt    (required) portrait alt text
 *   $tp_quick_info   (required) array of ['icon'=>key,'label'=>..,'sub'=>..(opt)]
 *                    icon keys: licensed | experience | inperson | telehealth
 *   $tp_sections     (required) ordered array of ['title'=>..,'html'=>..] prose blocks
 *                    (e.g. How I Can Help, My Approach, Background & Experience)
 *   $tp_specialties  (required) array of specialty strings → "Areas of Focus" chips
 *   $tp_credentials  (optional) array of ['title'=>..,'items'=>[strings]] aside cards
 *   $tp_first_name   (optional) used in the aside mini-CTA copy, default 'us'
 *   $tp_extra_html   (optional) full-width HTML band before the closing CTA
 *   $tp_cta_heading  (optional) closing CTA heading, default 'Ready to Take the Next Step?'
 *   $tp_cta_copy     (optional) closing CTA supporting copy
 */
if (!defined('BUSINESS_NAME')) {
    require_once dirname(__DIR__, 2) . '/includes/config.php';
}

$tp_eyebrow     = $tp_eyebrow     ?? 'Our Team';
$tp_first_name  = $tp_first_name  ?? 'us';
$tp_cta_heading = $tp_cta_heading ?? 'Ready to Take the Next Step?';
$tp_credentials = $tp_credentials ?? [];
$tp_specialties = $tp_specialties ?? [];
$tp_sections    = $tp_sections    ?? [];

// Inline icon paths (stroke style, 24×24) for the quick-info strip.
$tp_icons = [
    'licensed'   => '<path d="M12 3 5 6v5c0 4.4 3 7.6 7 9 4-1.4 7-4.6 7-9V6l-7-3Z"/><path d="m9.2 12 2 2 3.6-3.8"/>',
    'experience' => '<circle cx="12" cy="12" r="8.5"/><path d="M12 7.5V12l3 2"/>',
    'inperson'   => '<path d="M12 21s-6.5-5.2-6.5-10A6.5 6.5 0 0 1 18.5 11c0 4.8-6.5 10-6.5 10Z"/><circle cx="12" cy="11" r="2.3"/>',
    'telehealth' => '<rect x="3" y="6.5" width="12.5" height="11" rx="2"/><path d="m15.5 10.5 5-2.5v8l-5-2.5"/>',
    'care'       => '<path d="M12 20s-7-4.4-7-9.6A3.9 3.9 0 0 1 12 7a3.9 3.9 0 0 1 7 3.4C19 15.6 12 20 12 20Z"/>',
    'community'  => '<circle cx="8.4" cy="9" r="2.3"/><circle cx="15.6" cy="9" r="2.3"/><path d="M4.6 17.8a3.9 3.9 0 0 1 6.8-2.5"/><path d="M12.6 15.3a3.9 3.9 0 0 1 6.8 2.5"/>',
];
// Subtle sage leaf for the Areas of Focus chips.
$tp_leaf = '<path d="M20 5C11 5 6 9.5 6 17c0 0 0 1.4 0 2.5 5.5 0 14-3.5 14-14.5Z"/><path d="M10 15c2.5-2.6 5-3.6 8-4.6"/>';

// Icons for the optional "approach method" cards a section can carry.
$tp_method_icons = [
    'emotion'  => '<path d="M12 20s-7-4.4-7-9.6A3.9 3.9 0 0 1 12 7a3.9 3.9 0 0 1 7 3.4C19 15.6 12 20 12 20Z"/>',
    'thought'  => '<path d="M9 21v-1.6A6.5 6.5 0 1 1 15 19v2"/><path d="M9.5 21h5"/><path d="M9.5 12.5 12 10l2.5 2.5"/><path d="M12 10v6"/>',
    'shield'   => '<path d="M12 3 5 6v5c0 4.4 3 7.6 7 9 4-1.4 7-4.6 7-9V6l-7-3Z"/><path d="M12 9.4c-1.2-1.4-3.3-.5-3.3 1.2C8.7 12.2 12 14.4 12 14.4s3.3-2.2 3.3-3.8C15.3 8.9 13.2 8 12 9.4Z"/>',
    'connect'  => '<circle cx="8.4" cy="9" r="2.3"/><circle cx="15.6" cy="9" r="2.3"/><path d="M4.6 17.8a3.9 3.9 0 0 1 6.8-2.5"/><path d="M12.6 15.3a3.9 3.9 0 0 1 6.8 2.5"/>',
    'compass'  => '<circle cx="12" cy="12" r="8.5"/><path d="m15.5 8.5-2 5-5 2 2-5 5-2Z"/>',
    'growth'   => '<path d="M12 21v-9"/><path d="M12 12c0-3 2.5-5.5 6-5.5 0 3-2.5 5.5-6 5.5Z"/><path d="M12 14c0-2.6-2.2-4.8-5.3-4.8 0 2.6 2.2 4.8 5.3 4.8Z"/>',
    'care'     => '<path d="M12 20s-7-4.4-7-9.6A3.9 3.9 0 0 1 12 7a3.9 3.9 0 0 1 7 3.4C19 15.6 12 20 12 20Z"/>',
    'community' => '<circle cx="8.4" cy="9" r="2.3"/><circle cx="15.6" cy="9" r="2.3"/><path d="M4.6 17.8a3.9 3.9 0 0 1 6.8-2.5"/><path d="M12.6 15.3a3.9 3.9 0 0 1 6.8 2.5"/>',
];
?>

<!-- ── Hero: text / photo split ───────────────────────────── -->
<section class="tp-hero">
    <div class="shell tp-hero__grid">
        <div class="tp-hero__text">
            <?php if (!empty($tp_eyebrow)): ?>
            <p class="eyebrow"><?php echo $tp_eyebrow; ?></p>
            <?php endif; ?>
            <h1 class="tp-hero__title"><?php
                // Credentials wrap to the next line as a unit before the name ever splits.
                if (!empty($tp_creds)) {
                    echo '<span class="tp-hero__name">' . $tp_name . ',</span> <span class="tp-hero__creds">' . $tp_creds . '</span>';
                } else {
                    echo $tp_name;
                }
            ?></h1>
            <p class="tp-hero__role"><?php echo $tp_role; ?></p>
            <p class="tp-hero__intro"><?php echo $tp_intro; ?></p>
            <a class="btn btn--pill btn--primary" href="/appointment">
                Make an Appointment
                <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
            </a>
        </div>
        <div class="tp-hero__photo">
            <img src="<?php echo $tp_photo; ?>" alt="<?php echo htmlspecialchars($tp_photo_alt); ?>" width="640" height="800">
        </div>
    </div>
</section>

<!-- ── Quick trust / info strip ───────────────────────────── -->
<?php if (!empty($tp_quick_info)): ?>
<section class="tp-quickinfo">
    <div class="shell tp-quickinfo__grid">
        <?php foreach ($tp_quick_info as $qi): ?>
        <div class="tp-quickinfo__item">
            <span class="tp-quickinfo__icon" aria-hidden="true">
                <svg class="ico" viewBox="0 0 24 24"><?php echo $tp_icons[$qi['icon']] ?? ''; ?></svg>
            </span>
            <span class="tp-quickinfo__text">
                <span class="tp-quickinfo__label"><?php echo $qi['label']; ?></span>
                <?php if (!empty($qi['sub'])): ?><span class="tp-quickinfo__sub"><?php echo $qi['sub']; ?></span><?php endif; ?>
            </span>
        </div>
        <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<!-- ── Body: bio prose + aside ────────────────────────────── -->
<section class="tp-body">
    <div class="shell tp-body__grid">
        <div class="tp-main prose">
            <?php foreach ($tp_sections as $sec): ?>
            <h2><?php echo $sec['title']; ?></h2>
            <?php echo $sec['html']; ?>
            <?php if (!empty($sec['cards'])): ?>
            <div class="tp-approach-grid">
                <?php foreach ($sec['cards'] as $card): ?>
                <div class="tp-approach-card">
                    <span class="tp-approach-card__icon" aria-hidden="true">
                        <svg class="ico" viewBox="0 0 24 24"><?php echo $tp_method_icons[$card['icon']] ?? ''; ?></svg>
                    </span>
                    <h3><?php echo $card['title']; ?></h3>
                    <?php if (!empty($card['text'])): ?><p><?php echo $card['text']; ?></p><?php endif; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>

        <aside class="tp-aside">
            <?php if (!empty($tp_specialties)): ?>
            <div class="tp-aside-card">
                <h2>Areas of Focus</h2>
                <ul class="tp-focus__list">
                    <?php foreach ($tp_specialties as $spec): ?>
                    <li class="tp-focus__item">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><?php echo $tp_leaf; ?></svg>
                        <span><?php echo $spec; ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <?php foreach ($tp_credentials as $cred): ?>
            <div class="tp-aside-card">
                <h2><?php echo $cred['title']; ?></h2>
                <ul class="check-list">
                    <?php foreach ($cred['items'] as $item): ?>
                    <li><svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m5 12.5 4.5 4.5L19 7.5"/></svg> <?php echo $item; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endforeach; ?>

            <div class="tp-aside-cta">
                <h2>Work with <?php echo $tp_first_name; ?></h2>
                <p>In-person in Dearborn &amp; telehealth across Michigan.</p>
                <a class="btn btn--pill btn--primary" href="/appointment">Make an Appointment</a>
                <p class="tp-aside-cta__phone">Or call <a href="<?php echo PHONE_LINK; ?>"><?php echo PHONE; ?></a></p>
            </div>
        </aside>
    </div>
</section>

<?php if (!empty($tp_extra_html)): ?>
<!-- ── Optional extra band (e.g. blog posts) ──────────────── -->
<section class="tp-extra">
    <div class="shell">
        <?php echo $tp_extra_html; ?>
    </div>
</section>
<?php endif; ?>

<!-- ── Closing CTA (soft ivory / sage) ────────────────────── -->
<section class="tp-final" id="contact">
    <div class="shell">
        <h2><?php echo htmlspecialchars($tp_cta_heading); ?></h2>
        <?php if (!empty($tp_cta_copy)): ?>
        <p><?php echo $tp_cta_copy; ?></p>
        <?php endif; ?>
        <a class="btn btn--pill btn--primary" href="/appointment">
            Make an Appointment
            <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
        </a>
        <p class="tp-final__phone">Or call <a href="<?php echo PHONE_LINK; ?>"><?php echo PHONE; ?></a></p>
    </div>
</section>
