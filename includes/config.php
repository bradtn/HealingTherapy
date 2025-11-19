<?php
/**
 * Healing Therapy Center - Configuration File
 * Centralized configuration for all business information, contact details, and site data
 */

// ============================================================================
// BUSINESS INFORMATION
// ============================================================================

define('BUSINESS_NAME', 'Healing Therapy Center');
define('BUSINESS_TAGLINE', 'We are Licensed Mental Health professionals that know that healing is a process that takes time. We want to take the first steps of healing with you today.');

// ============================================================================
// CONTACT INFORMATION
// ============================================================================

define('PHONE', '313-654-1915');
define('PHONE_LINK', 'tel:313-654-1915');
define('EMAIL', 'info@healingtherapycenter.com');
define('EMAIL_LINK', 'mailto:info@healingtherapycenter.com');

// Physical Address
define('ADDRESS_STREET', '22005 Outer Dr W');
define('ADDRESS_CITY', 'Dearborn');
define('ADDRESS_STATE', 'MI');
define('ADDRESS_ZIP', '48124');
define('ADDRESS_FULL', ADDRESS_STREET . ', ' . ADDRESS_CITY . ', ' . ADDRESS_STATE . ' ' . ADDRESS_ZIP);

// Google Maps
define('GOOGLE_MAPS_URL', 'https://www.google.com/maps/place/Healing+Therapy+Center/@42.2856222,-83.2362161,17z/data=!3m1!4b1!4m6!3m5!1s0x883b49e5aac26f9d:0x2c055cc0f1697b3d!8m2!3d42.2856222!4d-83.2336412!16s%2Fg%2F11y2tc5d90?entry=ttu&g_ep=EgoyMDI1MDEwOC4wIKXMDSoASAFQAw%3D%3D');

// ============================================================================
// SOCIAL MEDIA
// ============================================================================

define('FACEBOOK_URL', 'https://web.facebook.com/people/Healing-Therapy-Center/61566519586496/');
define('INSTAGRAM_URL', 'https://www.instagram.com/Healingtherapycenter_');

// ============================================================================
// BUSINESS HOURS
// ============================================================================

$business_hours = [
    'structured' => [
        'Monday' => '9:00 AM - 5:00 PM',
        'Tuesday' => '9:00 AM - 5:00 PM',
        'Wednesday' => '9:00 AM - 5:00 PM',
        'Thursday' => '9:00 AM - 5:00 PM',
        'Friday' => '9:00 AM - 5:00 PM',
        'Saturday' => '9:00 AM - 2:00 PM',
        'Sunday' => 'Closed'
    ],
    'display' => 'Monday-Friday 9:00 AM - 5:00 PM, Saturday 9:00 AM - 2:00 PM'
];

// ============================================================================
// SERVICES
// ============================================================================

$services = [
    [
        'id' => 'individual',
        'name' => 'Individual Therapy',
        'url' => 'individual-therapy',
        'image' => 'assets/img/individual.webp',
        'alt' => 'Individual therapy session',
        'icon' => 'bi-person'
    ],
    [
        'id' => 'couples',
        'name' => 'Couples Therapy',
        'url' => 'couples-therapy',
        'image' => 'assets/img/couple.webp',
        'alt' => 'Couple therapy session',
        'icon' => 'bi-heart'
    ],
    [
        'id' => 'family',
        'name' => 'Family Therapy',
        'url' => 'family-therapy',
        'image' => 'assets/img/family.webp',
        'alt' => 'Family therapy session',
        'icon' => 'bi-people'
    ],
    [
        'id' => 'group',
        'name' => 'Group Therapy',
        'url' => 'group-therapy',
        'image' => 'assets/img/group.webp',
        'alt' => 'Group therapy session',
        'icon' => 'bi-people-fill'
    ],
    [
        'id' => 'testing',
        'name' => 'Psychological Testing',
        'url' => 'psychological-testing',
        'image' => 'assets/img/testing.webp',
        'alt' => 'Psychological testing',
        'icon' => 'bi-clipboard-data'
    ],
    [
        'id' => 'telehealth',
        'name' => 'Telehealth Therapy',
        'url' => 'telehealth-therapy',
        'image' => 'assets/img/telehealth.webp',
        'alt' => 'Telehealth therapy session',
        'icon' => 'bi-camera-video'
    ],
    [
        'id' => 'perinatal',
        'name' => 'Perinatal Therapy',
        'url' => 'perinatal-therapy',
        'image' => 'assets/img/perinatal.webp',
        'alt' => 'Perinatal therapy',
        'icon' => 'bi-heart-pulse'
    ]
];

// ============================================================================
// TEAM MEMBERS
// ============================================================================

$team_members = [
    [
        'id' => 'amal-ayad',
        'name' => 'Amal Ayad',
        'credentials' => 'LLMSW',
        'url' => 'amal-ayad',
        'image' => 'assets/img/amal.jpg',
        'alt' => 'Amal Ayad, LLMSW'
    ],
    [
        'id' => 'nadia-habhab',
        'name' => 'Dr. Nadia Habhab',
        'credentials' => 'PhD, LP',
        'url' => 'dr-nadia-habhab',
        'image' => 'assets/img/nadia.jpg',
        'alt' => 'Dr. Nadia Habhab, PhD, LP'
    ],
    [
        'id' => 'tiffany-murray',
        'name' => 'Tiffany Murray',
        'credentials' => 'LLMSW',
        'url' => 'dr-tiffany-murray',
        'image' => 'assets/img/tiffany.jpg',
        'alt' => 'Tiffany Murray, LLMSW'
    ],
    [
        'id' => 'malak-wehbe',
        'name' => 'Malak Wehbe',
        'credentials' => 'LLMSW',
        'url' => 'malak-wehbe',
        'image' => 'assets/img/malak.jpg',
        'alt' => 'Malak Wehbe, LLMSW'
    ]
];

// ============================================================================
// INSURANCE PROVIDERS
// ============================================================================

$insurance_providers = [
    'Blue Cross Blue Shield of Michigan',
    'McLaren Health Plan',
    'Priority Health',
    'Aetna',
    'Molina Healthcare',
    'Michigan Medicaid'
];

// Insurance acceptance text
$insurance_text = 'We accept most major insurance plans including ' .
                  implode(', ', $insurance_providers) .
                  '. We provide both in-person therapy at our Dearborn office and secure telehealth services throughout Michigan. Call ' .
                  PHONE . ' to verify your coverage.';

$insurance_short_list = implode(', ', $insurance_providers);

// ============================================================================
// SITE CONFIGURATION
// ============================================================================

define('SITE_URL', 'https://www.healingtherapycenter.com');
define('LOGO_PATH', 'assets/img/hel_logo.webp');
define('FAVICON_PATH', 'assets/img/favicon.png');
define('APPLE_TOUCH_ICON_PATH', 'assets/img/apple-touch-icon.png');
define('OG_IMAGE_DEFAULT', SITE_URL . '/assets/img/hel_logo.webp');

// CSS Version (increment when updating CSS to bust cache)
define('CSS_VERSION', '1.27');

// Google Analytics
define('GA_TRACKING_ID', 'G-TSBF8KK4BW');

// ============================================================================
// NAVIGATION MENU STRUCTURE
// ============================================================================

$main_nav = [
    [
        'label' => 'Home',
        'url' => SITE_URL . '/#hero',
        'type' => 'link'
    ],
    [
        'label' => 'Our Team',
        'url' => 'therapists',
        'type' => 'dropdown',
        'children' => [
            [
                'label' => 'Meet Our Therapists',
                'url' => 'therapists',
                'type' => 'dropdown',
                'children' => $team_members
            ]
        ]
    ],
    [
        'label' => 'Services',
        'url' => SITE_URL . '/#services',
        'type' => 'dropdown',
        'children' => $services
    ],
    [
        'label' => 'Resources',
        'url' => 'suicide-hotline',
        'type' => 'dropdown',
        'children' => [
            ['label' => 'Suicidal Hotline', 'url' => 'suicide-hotline']
        ]
    ],
    [
        'label' => 'FAQ',
        'url' => 'faq',
        'type' => 'link'
    ],
    [
        'label' => 'Contact',
        'url' => SITE_URL . '/#contact',
        'type' => 'link'
    ]
];

// ============================================================================
// HELPER FUNCTIONS
// ============================================================================

/**
 * Get service by ID
 */
function get_service_by_id($id) {
    global $services;
    foreach ($services as $service) {
        if ($service['id'] === $id) {
            return $service;
        }
    }
    return null;
}

/**
 * Get team member by ID
 */
function get_team_member_by_id($id) {
    global $team_members;
    foreach ($team_members as $member) {
        if ($member['id'] === $id) {
            return $member;
        }
    }
    return null;
}

/**
 * Generate phone number link
 */
function phone_link($display_class = '') {
    $class = $display_class ? ' class="' . $display_class . '"' : '';
    return '<a href="' . PHONE_LINK . '"' . $class . '>' . PHONE . '</a>';
}

/**
 * Generate email link
 */
function email_link($display_class = '') {
    $class = $display_class ? ' class="' . $display_class . '"' : '';
    return '<a href="' . EMAIL_LINK . '"' . $class . '>' . EMAIL . '</a>';
}

/**
 * Check if current page matches URL
 */
function is_current_page($url) {
    $current = $_SERVER['REQUEST_URI'];
    $current = trim($current, '/');
    $url = trim($url, '/');
    return $current === $url || basename($current, '.php') === basename($url, '.php');
}
