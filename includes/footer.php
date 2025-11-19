<?php
/**
 * Site Footer
 * Included on all pages
 *
 * Optional parameter: $show_insurance (boolean) - Default true, set to false to hide insurance section
 */
if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}

// Default to showing insurance section unless explicitly set to false
if (!isset($show_insurance)) {
    $show_insurance = true;
}
?>
<footer id="footer" class="footer light-background">
    <div class="container footer-top">
        <div class="row gy-4">
            <!-- About Section -->
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="/" class="logo d-flex align-items-center me-auto">
                    <img src="<?php echo LOGO_PATH; ?>" alt="healing therapy logo">
                </a>
                <div>
                    <p><?php echo BUSINESS_TAGLINE; ?></p>
                </div>
            </div>

            <!-- Useful Links -->
            <div class="col-lg-2 col-md-3 footer-links">
                <p>Useful Links</p>
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>/#hero">Home</a></li>
                    <li><a href="therapists">Our Team</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/#services">Services</a></li>
                    <li><a href="suicide-hotline">Resources</a></li>
                    <li><a href="faq">FAQ</a></li>
                    <li><a href="appointment">Appointment</a></li>
                </ul>
            </div>

            <!-- Our Services -->
            <div class="col-lg-2 col-md-3 footer-links">
                <p>Our Services</p>
                <ul>
                    <?php foreach ($services as $service): ?>
                        <li><a href="<?php echo $service['url']; ?>"><?php echo $service['name']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-4 col-md-3 footer-links">
                <p>Contact</p>
                <div class="footer-contact">
                    <p>
                        <a href="<?php echo PHONE_LINK; ?>">
                            <i class="fa fa-phone me-2"></i><?php echo PHONE; ?>
                        </a>
                    </p>
                    <p>
                        <a href="<?php echo EMAIL_LINK; ?>">
                            <i class="fa fa-envelope me-2"></i><?php echo EMAIL; ?>
                        </a>
                    </p>
                    <p>
                        <a href="<?php echo GOOGLE_MAPS_URL; ?>" target="_blank" rel="noopener noreferrer">
                            <i class="fa fa-location-pin me-2"></i><?php echo ADDRESS_FULL; ?>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php if ($show_insurance): ?>
    <!-- Insurance & Payment Section -->
    <div class="container mt-4 pb-3">
        <div class="row">
            <div class="col-12 text-center">
                <h5>Insurance & Payment</h5>
                <p>
                    <?php echo $insurance_text; ?>
                </p>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <!-- Copyright -->
    <div class="container copyright text-center mt-4">
        <p>
            © <span>Copyright</span>
            <strong class="px-1 sitename"><?php echo BUSINESS_NAME; ?></strong>
            <span>All Rights Reserved</span>
        </p>
    </div>
</footer>
