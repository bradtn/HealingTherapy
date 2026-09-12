<?php
// Page-specific variables — verbatim from production
$page_title = 'Make an Appointment | Healing Therapy Center Dearborn';
$page_description = 'Schedule your therapy appointment at Healing Therapy Center in Dearborn, MI. Online booking available. Call (313) 654-1915 for immediate assistance.';
$canonical_url = 'https://www.healingtherapycenter.com/appointment';

require_once __DIR__ . '/includes/config.php';

// ContactPage Schema — verbatim from production
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ContactPage',
    'name' => 'Make an Appointment',
    'description' => 'Schedule a therapy appointment at Healing Therapy Center in Dearborn, Michigan by phone, email, or online booking.',
    'url' => 'https://www.healingtherapycenter.com/appointment',
    'about' => [
        '@type' => 'MedicalBusiness',
        'name' => 'Healing Therapy Center',
        'telephone' => '+13136541915',
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => '835 Mason St STE D160',
            'addressLocality' => 'Dearborn',
            'addressRegion' => 'MI',
            'postalCode' => '48124',
            'addressCountry' => 'US'
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
    $hero_eyebrow = 'Get Started';
    $hero_h1 = 'Schedule Your Therapy Appointment';
    $hero_lead = "Ready to take the first step towards better mental health? Schedule an appointment with our licensed professionals today. We're here to provide the support and care you need on your journey to wellness.";
    $hero_img = 'appt-hero';
    $hero_img_alt = 'Writing an appointment in a planner beside a phone';
    include __DIR__ . '/includes/image-hero.php';
    ?>

    <section class="page" id="appointment">
        <div class="shell">
            <div class="appt-layout">
                <div>
                    <div class="contact-tile">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a12 12 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg>
                        <div><h3>Call Us</h3><p><a href="tel:313-654-1915">313-654-1915</a></p></div>
                    </div>
                    <div class="contact-tile">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                        <div><h3>Email Us</h3><p><a href="mailto:info@healingtherapycenter.com">info@healingtherapycenter.com</a></p></div>
                    </div>
                    <div class="contact-tile">
                        <svg class="ico" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21s-7-5.6-7-11a7 7 0 0 1 14 0c0 5.4-7 11-7 11Z"/><circle cx="12" cy="10" r="2.6"/></svg>
                        <div><h3>Visit Us</h3><p><a href="https://www.google.com/maps/search/?api=1&query=Healing+Therapy+Center+835+Mason+St+STE+D160+Dearborn+MI+48124" target="_blank" rel="noopener noreferrer">835 Mason St STE D160, Dearborn, MI 48124</a></p></div>
                    </div>
                </div>

                <div class="form-card">
                    <form id="appointment_form" method="post">
                        <input type="hidden" name="csrf_token" id="csrf_token" value="">
                        <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off" aria-hidden="true">
                        <input type="hidden" name="landing_page" id="landing_page" value="">
                        <input type="hidden" name="referrer" id="referrer" value="">
                        <input type="hidden" name="utm_source" id="utm_source" value="">
                        <input type="hidden" name="utm_medium" id="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" id="utm_campaign" value="">

                        <div class="form-grid">
                            <div class="form-field">
                                <label for="name">Your Name</label>
                                <input type="text" name="Name" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="form-field">
                                <label for="email">Your Email</label>
                                <input type="email" name="Email" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="form-field">
                                <label for="phone">Your Phone</label>
                                <input type="tel" name="Phone" id="phone" placeholder="Your Phone" required>
                            </div>
                            <div class="form-field">
                                <label for="preferredDate">Preferred Appointment Date</label>
                                <input type="date" name="Date" id="preferredDate" min="<?php echo date('Y-m-d', strtotime('+1 day')); ?>">
                                <small>Optional — We'll contact you to confirm</small>
                            </div>
                            <div class="form-field">
                                <label for="preferredDoctor">Preferred Therapist</label>
                                <select name="Doctor" id="preferredDoctor">
                                    <option value="No Preference">No Preference</option>
                                    <option value="Dr. Nadia Habhab">Dr. Nadia Habhab</option>
                                    <option value="Tiffany Murray">Tiffany Murray</option>
                                    <option value="Amal Ayad">Amal Ayad</option>
                                    <option value="Malak Wehbe">Malak Wehbe</option>
                                    <option value="Donna Majed">Donna Majed</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="insurance">Insurance <span style="font-weight:400;color:var(--color-muted)">(optional)</span></label>
                                <select name="Insurance" id="insurance">
                                    <option value="">Please select...</option>
                                    <?php foreach ($insurance_options as $ins): ?>
                                    <option value="<?php echo htmlspecialchars($ins); ?>"><?php echo htmlspecialchars($ins); ?></option>
                                    <?php endforeach; ?>
                                    <option value="Other / Not listed">Other / Not listed</option>
                                </select>
                            </div>
                            <div class="form-field">
                                <label for="referral_source">How did you hear about us?</label>
                                <select name="ReferralSource" id="referral_source">
                                    <option value="">Please select...</option>
                                    <option value="Google Search">Google Search</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Friend/Family Referral">Friend/Family Referral</option>
                                    <option value="Doctor Referral">Doctor Referral</option>
                                    <option value="Insurance Provider">Insurance Provider (FEP Blue, BCBS, etc.)</option>
                                    <option value="Psychology Today">Psychology Today</option>
                                    <option value="Federal Employee Recommendation">Federal Employee Recommendation</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-field form-field--full">
                                <label for="message">Message / Reason for Appointment</label>
                                <textarea name="Message" id="message" rows="5" placeholder="Please tell us briefly about your needs..." required></textarea>
                            </div>
                        </div>
                        <button id="ap_btn_submit" type="submit" class="btn btn--pill btn--primary" style="margin-top:1.2rem">Request Appointment</button>
                        <p id="ap_status" class="form-status" role="status" aria-live="polite"></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--white">
        <div class="shell">
            <div class="section__head section-title reveal">
                <p class="eyebrow">What to Expect</p>
                <h2>What to Expect</h2>
            </div>
            <div class="grid-3">
                <div class="panel">
                    <h3>Initial Consultation</h3>
                    <p>Your first session is an opportunity for you and your therapist to get to know each other. We will discuss your concerns, goals for therapy, and answer any questions you may have about the process. This helps us create a personalized treatment plan tailored to your needs.</p>
                </div>
                <div class="panel">
                    <h3>Ongoing Sessions</h3>
                    <p>Sessions typically last 50-60 minutes and are scheduled weekly or bi-weekly depending on your needs. Your therapist will work with you using evidence-based approaches to help you develop coping strategies, process emotions, and work toward your therapeutic goals.</p>
                </div>
                <div class="panel">
                    <h3>Flexible Options</h3>
                    <p>We offer both in-person sessions at our Dearborn office and telehealth appointments for your convenience. Whether you prefer face-to-face interaction or the flexibility of online therapy, we are here to accommodate your schedule and comfort level.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="shell">
            <div class="section__head section-title section-title--center reveal">
                <p class="eyebrow eyebrow--center">Insurance and Payment</p>
                <h2>Insurance and Payment</h2>
            </div>
            <div class="prose" style="margin-inline:auto;text-align:center">
                <p>We accept most major insurance plans to make mental health care accessible and affordable. Our team will work with you to verify your benefits and explain any out-of-pocket costs before your first appointment. We believe financial concerns should not prevent anyone from receiving the care they need.</p>
                <p>If you have questions about insurance coverage or payment options, please contact us at <a href="tel:313-654-1915">(313) 654-1915</a> or email <a href="mailto:info@healingtherapycenter.com">info@healingtherapycenter.com</a>. Our administrative staff is available to assist you with insurance verification and answer any billing questions.</p>
            </div>
        </div>
    </section>

</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
<script src="/assets/js/appointment.js" defer></script>
</body>
</html>
