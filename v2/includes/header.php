<?php
/**
 * V2 Global Header
 * Two-level desktop header: slim utility bar + main navigation.
 * All links point at existing production URLs (flat, extensionless).
 */
if (!defined('BUSINESS_NAME')) {
    require_once dirname(__DIR__, 2) . '/includes/config.php';
}
?>
<a class="skip-link" href="#main">Skip to main content</a>

<header class="site-header" id="site-header">

    <div class="utility-bar">
        <div class="shell utility-bar__inner">
            <p class="utility-bar__contact">
                <a href="<?php echo PHONE_LINK; ?>">
                    <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a12 12 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg>
                    Call or Text <strong><?php echo PHONE; ?></strong>
                </a>
                <span class="utility-bar__sep" aria-hidden="true"></span>
                <a class="utility-bar__email" href="<?php echo EMAIL_LINK; ?>"><?php echo EMAIL; ?></a>
            </p>
            <p class="utility-bar__meta">
                <span>In-Person in Dearborn</span>
                <span class="utility-bar__sep" aria-hidden="true"></span>
                <span>Telehealth Throughout Michigan</span>
                <span class="utility-bar__social">
                    <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Healing Therapy Center on Facebook">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V5h-3a4 4 0 0 0-4 4v2H7v3h3v7h3v-7h3l1-3h-4V9a1 1 0 0 1 1-1Z"/></svg>
                    </a>
                    <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Healing Therapy Center on Instagram">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="4.5"/><circle cx="12" cy="12" r="3.5"/><circle cx="16.8" cy="7.2" r="1" fill="currentColor" stroke="none"/></svg>
                    </a>
                </span>
            </p>
        </div>
    </div>

    <div class="masthead">
        <div class="shell masthead__inner">
            <a href="/" class="masthead__logo">
                <img src="/v2/assets/img/logo.webp" alt="Healing Therapy Center — home" width="160" height="56">
            </a>

            <nav class="nav" id="primary-nav" aria-label="Primary">
                <ul class="nav__list">
                    <li><a class="nav__link" href="/">Home</a></li>
                    <li class="nav__item--drop">
                        <button class="nav__link nav__toggle" type="button" aria-expanded="false" aria-controls="menu-services">
                            Services
                            <svg class="ico ico--chev" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
                        </button>
                        <ul class="nav__drop" id="menu-services">
                            <?php foreach ($services as $service): ?>
                            <li><a href="/<?php echo $service['url']; ?>"><?php echo $service['name']; ?></a></li>
                            <?php endforeach; ?>
                            <li class="nav__drop-rule" role="presentation"></li>
                            <li><a href="/psychological-testing">ADHD &amp; Autism Testing</a></li>
                        </ul>
                    </li>
                    <li class="nav__item--drop">
                        <button class="nav__link nav__toggle" type="button" aria-expanded="false" aria-controls="menu-team">
                            Our Team
                            <svg class="ico ico--chev" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
                        </button>
                        <ul class="nav__drop" id="menu-team">
                            <li><a href="/therapists">Meet Our Therapists</a></li>
                            <li class="nav__drop-rule" role="presentation"></li>
                            <?php foreach ($team_members as $member): ?>
                            <li><a href="/<?php echo $member['url']; ?>"><?php echo $member['name']; ?>, <?php echo $member['credentials']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                    <li class="nav__item--drop">
                        <button class="nav__link nav__toggle" type="button" aria-expanded="false" aria-controls="menu-resources">
                            Resources
                            <svg class="ico ico--chev" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
                        </button>
                        <ul class="nav__drop" id="menu-resources">
                            <li><a href="/all-blogs">Blog &amp; Guides</a></li>
                            <li><a href="/faq">Therapy FAQ</a></li>
                            <li><a href="/insurance">Insurance &amp; Payment</a></li>
                            <li><a href="/autism-screening-tool">Free Autism Screening Tool</a></li>
                            <li><a href="/suicide-hotline">Crisis Resources</a></li>
                        </ul>
                    </li>
                    <li><a class="nav__link" href="/contact">Contact</a></li>
                </ul>
                <a class="btn btn--pill nav__cta" href="/appointment">
                    Make an Appointment
                    <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
                </a>
                <p class="nav__meta">
                    <a href="<?php echo PHONE_LINK; ?>"><?php echo PHONE; ?></a>
                    <span>In-Person in Dearborn · Telehealth Throughout Michigan</span>
                </p>
            </nav>

            <button class="nav-burger" id="nav-burger" type="button" aria-expanded="false" aria-controls="primary-nav" aria-label="Open menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
