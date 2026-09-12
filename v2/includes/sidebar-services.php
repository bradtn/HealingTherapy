<?php
/**
 * V2 services sidebar — related-services navigation.
 * Optional: $current_service (service id from config.php) for active state.
 */
if (!defined('BUSINESS_NAME')) {
    require_once dirname(__DIR__, 2) . '/includes/config.php';
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
    <div class="side-nav__cta">
        <a class="btn btn--pill btn--primary" href="/appointment">Make an Appointment</a>
    </div>
</aside>
