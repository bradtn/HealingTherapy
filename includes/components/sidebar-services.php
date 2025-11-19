<?php
/**
 * Related Services Sidebar Component
 * Used on all service pages
 *
 * Required parameter:
 * - $current_service: The current service ID (e.g., 'couples', 'individual', 'family')
 */

if (!defined('BUSINESS_NAME')) {
    require_once __DIR__ . '/../config.php';
}

// List of services to show in sidebar (excluding perinatal which isn't always shown)
$sidebar_services = [
    'individual' => 'Individual Therapy',
    'couples' => 'Couples Therapy',
    'family' => 'Family Therapy',
    'group' => 'Group Therapy',
    'testing' => 'Psychological Testing',
    'telehealth' => 'Telehealth Therapy'
];
?>
<div class="col-md-3">
    <h5>Related Services</h5>
    <div class="card border p-3 position-sticky" style="top:25%">
        <nav class="navbar services-menu">
            <ul class="nav navbar-nav flex-grow-1">
                <?php
                $count = 0;
                foreach ($sidebar_services as $service_id => $service_name):
                    // Find the full service data from config
                    $service_data = null;
                    foreach ($services as $s) {
                        if ($s['id'] === $service_id) {
                            $service_data = $s;
                            break;
                        }
                    }

                    // Skip if service not found
                    if (!$service_data) continue;

                    // Determine if this is the last item (no border-bottom)
                    $count++;
                    $border_class = ($count < count($sidebar_services)) ? 'border-bottom border-muted' : '';

                    // Determine if this is the active/current page
                    $active_class = (isset($current_service) && $current_service === $service_id) ? 'active' : '';
                ?>
                <li class="nav-item <?php echo $border_class; ?> <?php echo $active_class; ?>">
                    <a class="nav-link p-2" href="<?php echo $service_data['url']; ?>">
                        <?php echo $service_data['name']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </div>
</div>
