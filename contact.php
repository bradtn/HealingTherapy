<?php
$page_title = 'Contact Healing Therapy Center | Dearborn, MI';
$page_description = 'Contact Healing Therapy Center in Dearborn, MI. Call or text (313) 654-1915, email us, or send a message. In-person and telehealth therapy across Michigan.';
$canonical_url = 'https://www.healingtherapycenter.com/contact';

require_once __DIR__ . '/includes/config.php';

$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ContactPage',
    'name' => 'Contact Healing Therapy Center',
    'description' => 'Contact Healing Therapy Center in Dearborn, Michigan by phone, text, email, or message.',
    'url' => 'https://www.healingtherapycenter.com/contact',
    'about' => [
        '@type' => 'MedicalBusiness',
        'name' => 'Healing Therapy Center',
        'telephone' => '+13136541915',
        'email' => 'info@healingtherapycenter.com',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '835 Mason St STE D160',
            'addressLocality' => 'Dearborn',
            'addressRegion' => 'MI',
            'postalCode' => '48124',
            'addressCountry' => 'US'
        ],
        'openingHoursSpecification' => [
            ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'], 'opens' => '09:00', 'closes' => '17:00'],
            ['@type' => 'OpeningHoursSpecification', 'dayOfWeek' => 'Saturday', 'opens' => '09:00', 'closes' => '14:00']
        ],
        'url' => 'https://www.healingtherapycenter.com'
    ]
], JSON_UNESCAPED_SLASHES);
?>
<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/includes/head.php'; ?>

<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">

    <?php
    $hero_eyebrow = 'Contact';
    $hero_h1 = 'We\'re Here to Help';
    $hero_lead = "Whether you're ready to schedule your first appointment or just have a question, we'd love to hear from you. Reach out by phone, text, email, or the form below — in-person care in Dearborn and telehealth throughout Michigan.";
    $hero_cta = false;
    include __DIR__ . '/includes/page-hero.php';
    ?>

    <section class="page">
        <div class="shell">
            <div class="appt-layout">
                <div>
                    <a class="contact-tile" href="<?php echo PHONE_LINK; ?>" style="text-decoration:none">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a12 12 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg>
                        <div><h3>Call or Text</h3><p><?php echo PHONE; ?></p></div>
                    </a>
                    <a class="contact-tile" href="<?php echo EMAIL_LINK; ?>" style="text-decoration:none">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                        <div><h3>Email Us</h3><p><?php echo EMAIL; ?></p></div>
                    </a>
                    <a class="contact-tile" href="<?php echo GOOGLE_MAPS_URL; ?>" target="_blank" rel="noopener noreferrer" style="text-decoration:none">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7-5.6-7-11a7 7 0 0 1 14 0c0 5.4-7 11-7 11Z"/><circle cx="12" cy="10" r="2.6"/></svg>
                        <div><h3>Visit Us</h3><p>835 Mason St STE D160<br>Dearborn, MI 48124</p></div>
                    </a>
                    <div class="contact-tile">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3.5 2"/></svg>
                        <div><h3>Hours</h3><p>Mon–Fri 9am–5pm<br>Sat 9am–2pm</p></div>
                    </div>
                </div>

                <div class="form-card">
                    <h2 style="font-family:var(--font-display);font-weight:500;font-size:1.7rem;margin:0 0 1.1rem">Send Us a Message</h2>
                    <form id="contact_form" method="post">
                        <input type="hidden" name="csrf_token" id="cf_csrf" value="">
                        <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true">
                        <div class="form-grid">
                            <div class="form-field">
                                <label for="cf_name">Your Name</label>
                                <input type="text" name="Name" id="cf_name" placeholder="Your Name" required>
                            </div>
                            <div class="form-field">
                                <label for="cf_email">Your Email</label>
                                <input type="email" name="Email" id="cf_email" placeholder="Your Email" required>
                            </div>
                            <div class="form-field">
                                <label for="cf_subject">What can we help you with?</label>
                                <select name="Subject" id="cf_subject" required>
                                    <option value="">Please select…</option>
                                    <option value="New Client Appointment">New client appointment</option>
                                    <option value="Individual Therapy">Individual therapy</option>
                                    <option value="Couples Therapy">Couples therapy</option>
                                    <option value="Family Therapy">Family therapy</option>
                                    <option value="Group Therapy">Group therapy</option>
                                    <option value="Psychological / ADHD / Autism Testing">Psychological / ADHD / autism testing</option>
                                    <option value="Perinatal / Postpartum Support">Perinatal / postpartum support</option>
                                    <option value="Insurance or Billing Question">Insurance or billing question</option>
                                    <option value="Telehealth Question">Telehealth question</option>
                                    <option value="Something Else">Something else</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="cf_doctor">Preferred therapist <span style="font-weight:400;color:var(--color-muted)">(optional)</span></label>
                                <select name="Doctor" id="cf_doctor">
                                    <option value="No Preference">No preference</option>
                                    <?php foreach ($team_members as $member): ?>
                                    <option value="<?php echo htmlspecialchars($member['name'] . ', ' . $member['credentials']); ?>"><?php echo htmlspecialchars($member['name'] . ', ' . $member['credentials']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="form-field form-field--full">
                                <label for="cf_message">Message</label>
                                <textarea name="Message" id="cf_message" rows="5" placeholder="Tell us a little about what you're looking for..." required></textarea>
                            </div>
                        </div>
                        <button id="cf_submit" type="submit" class="btn btn--pill btn--primary" style="margin-top:1.2rem">Send Message</button>
                        <p id="cf_status" class="form-status" role="status" aria-live="polite"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--white" aria-label="Map to our Dearborn office">
        <div class="shell">
            <div class="section__head section-title section-title--center reveal">
                <p class="eyebrow eyebrow--center">Find Us</p>
                <h2>In the Heart of Downtown West Dearborn</h2>
                <p>Our office is located in the Dearborn Atrium Office Center at 835 Mason St STE D160, with public parking nearby.</p>
            </div>
            <div class="loc__map reveal">
                <iframe src="https://maps.google.com/maps?q=835%20Mason%20St%20STE%20D160%2C%20Dearborn%2C%20MI%2048124&output=embed"
                        title="Map to Healing Therapy Center, 835 Mason St STE D160, Dearborn, MI 48124"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen
                        style="width:100%;min-height:380px;border:0;border-radius:var(--radius);box-shadow:var(--shadow-soft)"></iframe>
            </div>
        </div>
    </section>

    <?php include __DIR__ . '/includes/cta.php'; ?>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
<script src="/assets/js/contact.js" defer></script>
</body>
</html>
