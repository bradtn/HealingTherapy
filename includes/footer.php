<?php
/**
 * V2 Global Footer
 * Preserves every SEO link from the production footer, organized into columns.
 */
if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>
<footer class="site-footer">
    <div class="shell">

        <div class="site-footer__grid">
            <div class="site-footer__brand">
                <a href="/" class="site-footer__logo">
                    <img src="/assets/img/logo.webp" alt="Healing Therapy Center" width="180" height="63" loading="lazy">
                </a>
                <p class="site-footer__tagline"><?php echo BUSINESS_TAGLINE; ?></p>
                <p class="site-footer__social">
                    <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8h3V5h-3a4 4 0 0 0-4 4v2H7v3h3v7h3v-7h3l1-3h-4V9a1 1 0 0 1 1-1Z"/></svg>
                    </a>
                    <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="4.5"/><circle cx="12" cy="12" r="3.5"/><circle cx="16.8" cy="7.2" r="1" fill="currentColor" stroke="none"/></svg>
                    </a>
                </p>
            </div>

            <nav class="site-footer__col" aria-label="Quick links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/appointment">Make an Appointment</a></li>
                    <li><a href="/therapists">Our Therapists</a></li>
                    <li><a href="/all-blogs">Blog &amp; Guides</a></li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/insurance">Insurance &amp; Payment</a></li>
                    <li><a href="/suicide-hotline">Crisis Resources</a></li>
                </ul>
            </nav>

            <nav class="site-footer__col" aria-label="Services">
                <h2>Services</h2>
                <ul>
                    <?php foreach ($services as $service): ?>
                    <li><a href="/<?php echo $service['url']; ?>"><?php echo $service['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <nav class="site-footer__col" aria-label="Specialties">
                <h2>Specialties</h2>
                <ul>
                    <li><a href="/anxiety-therapy-michigan">Anxiety Therapy</a></li>
                    <li><a href="/depression-counseling-michigan">Depression Counseling</a></li>
                    <li><a href="/trauma-ptsd-treatment">Trauma &amp; PTSD Treatment</a></li>
                    <li><a href="/postpartum-depression-therapy-michigan">Postpartum Depression Therapy</a></li>
                    <li><a href="/womens-mental-health-therapy-michigan">Women's Mental Health</a></li>
                    <li><a href="/executive-stress-therapy-michigan">Executive Stress Therapy</a></li>
                    <li><a href="/physician-burnout-therapy-michigan">Physician Burnout Therapy</a></li>
                    <li><a href="/premarital-counseling-michigan">Premarital Counseling</a></li>
                    <li><a href="/fep-blue-federal-employee-therapy">FEP Blue &amp; Federal Employees</a></li>
                </ul>
            </nav>

            <nav class="site-footer__col" aria-label="Insurance and locations">
                <h2>Insurance</h2>
                <ul>
                    <li><a href="/blue-cross-blue-shield-therapy-michigan">Blue Cross Blue Shield</a></li>
                    <li><a href="/priority-health-therapy-michigan">Priority Health</a></li>
                    <li><a href="/aetna-therapy-michigan">Aetna</a></li>
                    <li><a href="/united-healthcare-therapy-michigan">United Healthcare</a></li>
                </ul>
                <h2 class="site-footer__h-gap">Areas We Serve</h2>
                <ul>
                    <li><a href="/federal-employee-therapy-dearborn">Dearborn</a></li>
                    <li><a href="/federal-employee-therapy-detroit">Detroit</a></li>
                    <li><a href="/federal-employee-therapy-livonia">Livonia</a></li>
                    <li><a href="/federal-employee-therapy-ann-arbor">Ann Arbor</a></li>
                    <li><a href="/therapist-troy-mi">Troy</a></li>
                    <li><a href="/therapist-birmingham-mi">Birmingham</a></li>
                    <li><a href="/therapist-rochester-hills-mi">Rochester Hills</a></li>
                </ul>
            </nav>

            <div class="site-footer__col site-footer__contact">
                <h2>Contact</h2>
                <ul>
                    <li>
                        <a href="<?php echo GOOGLE_MAPS_URL; ?>" target="_blank" rel="noopener noreferrer"><?php echo ADDRESS_STREET; ?><br><?php echo ADDRESS_CITY . ', ' . ADDRESS_STATE . ' ' . ADDRESS_ZIP; ?></a>
                    </li>
                    <li><a href="<?php echo PHONE_LINK; ?>"><?php echo PHONE; ?></a></li>
                    <li><a href="<?php echo EMAIL_LINK; ?>"><?php echo EMAIL; ?></a></li>
                    <li class="site-footer__plain">Mon–Fri 9am–5pm<br>Sat 9am–2pm</li>
                    <li class="site-footer__plain">Telehealth throughout Michigan</li>
                </ul>
            </div>
        </div>

        <div class="site-footer__legal">
            <p>&copy; <?php echo date('Y'); ?> <?php echo BUSINESS_NAME; ?>. All rights reserved.</p>
            <a class="specter-credit" href="https://spectersystems.ca/portfolio" target="_blank" rel="noopener noreferrer">
                <span>Designed by</span>
                <img src="/assets/img/SpecterSystemsWhite.svg" alt="Specter Systems" width="120" height="34" loading="lazy">
            </a>
        </div>
    </div>
</footer>

<button class="scroll-top" id="scroll-top" type="button" aria-label="Scroll back to top">
    <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="m6 15 6-6 6 6"/></svg>
</button>

<div class="sticky-cta" id="sticky-cta">
    <a class="btn btn--pill sticky-cta__call" href="<?php echo PHONE_LINK; ?>" aria-label="Call Healing Therapy Center">
        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a12 12 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg>
        Call
    </a>
    <a class="btn btn--pill btn--primary sticky-cta__book" href="/appointment" aria-label="Make an appointment with Healing Therapy Center">
        Make Appointment
        <svg class="ico ico--arrow" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 12h15m-6-6 6 6-6 6"/></svg>
    </a>
</div>

<script src="/assets/js/main.js" defer></script>
