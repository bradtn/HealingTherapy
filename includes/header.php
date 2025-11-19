<?php
/**
 * Site Header - Navigation
 * Included on all pages
 */
if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/config.php';
}
?>
<header id="header" class="header sticky-top">
    <div class="topbar d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-end">
            <div class="d-flex align-items-center">
                <i class="bi bi-phone me-1"></i>Call us now
                <a href="<?php echo PHONE_LINK; ?>" class="btn btn-link text-white"><?php echo PHONE; ?></a>
                <div class="social-links d-flex">
                    <a href="<?php echo FACEBOOK_URL; ?>">
                        <i class="bi bi-facebook text-white mx-3"></i>
                    </a>
                    <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer">
                        <i class="bi bi-instagram text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="branding d-flex align-items-center">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-end">
            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="<?php echo LOGO_PATH; ?>" alt="healing therapy logo">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="<?php echo SITE_URL; ?>/#hero">Home</a></li>

                    <!-- Our Team Dropdown -->
                    <li class="dropdown">
                        <a href="therapists" class="active">
                            <span>Our Team</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li class="dropdown">
                                <a href="therapists">
                                    <span>Meet Our Therapists</span>
                                    <i class="bi bi-chevron-right d-md-block d-none toggle-dropdown"></i>
                                    <i class="bi bi-chevron-down d-md-none toggle-dropdown"></i>
                                </a>
                                <ul>
                                    <?php foreach ($team_members as $member): ?>
                                        <li><a href="<?php echo $member['url']; ?>"><?php echo $member['name']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Services Dropdown -->
                    <li class="dropdown">
                        <a href="<?php echo SITE_URL; ?>/#services">
                            <span>Services</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <?php foreach ($services as $service): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo $service['url']; ?>">
                                        <?php echo $service['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </li>

                    <!-- Resources Dropdown -->
                    <li class="dropdown">
                        <a href="suicide-hotline">
                            <span>Resources</span>
                            <i class="bi bi-chevron-down toggle-dropdown"></i>
                        </a>
                        <ul>
                            <li><a href="suicide-hotline">Suicidal Hotline</a></li>
                        </ul>
                    </li>

                    <li><a href="faq">FAQ</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/#contact">Contact</a></li>
                    <li class="d-md-none"><a href="appointment">Make an Appointment</a></li>
                    <li><a href="autism-screening-tool">Autism Screening Tool</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="cta-btn d-none d-md-block" href="appointment">Make an Appointment</a>
        </div>
    </div>
</header>
