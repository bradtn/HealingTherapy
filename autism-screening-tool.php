<?php
// Page-specific variables
$page_title = 'Free Autism Screening Tool | M-CHAT-R | Healing Therapy Center';
$page_description = 'Free online autism screening tool (M-CHAT-R) for children 16-30 months. Quick assessment to determine if autism evaluation is needed. Call (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/autism-screening-tool';

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

        <main class="main">
        <div class="container py-5">
            <!-- Screening Tool Section -->
            <section id="screening" class="content-section active" aria-label="Autism Screening Tool">
                <div class="screening-intro">
                    <h2>Free Autism Spectrum Disorder (ASD) Screening Questionnaire</h2>
                    <p><strong>Early detection makes a difference.</strong> This evidence-based screening tool helps identify potential signs of autism in children. <em>Note: This is not a diagnostic tool - professional evaluation is recommended.</em></p>
                </div>

                <div class="progress-bar">
                    <div class="progress-fill" id="progressBar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <div id="questionsContainer" role="region" aria-label="Screening questions">
                    <!-- Questions will be dynamically loaded here -->
                </div>

                <div class="results-section" id="resultsSection" role="region" aria-label="Screening results">
                    <h3>Your Screening Results</h3>
                    <p id="resultsText"></p>
                    <div id="recommendationsText"></div>
                </div>

                <button class="nav-btn" id="submitBtn" style="display:none; margin-top:20px;" onclick="calculateResults()">
                    View Results & Get Recommendations
                </button>
            </section>

            <!-- Services Section (Location-Specific) -->
            <section id="services" class="content-section" aria-label="Therapy Services">
                <h2>Comprehensive Autism Therapy Services in Dearborn, MI</h2>
                
                <div class="service-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-top: 30px;">
                    <!-- ABA Therapy Service -->
                    <article class="service-card" itemscope itemtype="https://schema.org/Service">
                        <h3 itemprop="name">Applied Behavior Analysis (ABA) Therapy</h3>
                        <p itemprop="description">Evidence-based therapy focusing on improving specific behaviors, communication, and social skills through positive reinforcement.</p>
                        <ul style="list-style: none; padding: 0;">
                            <li>✓ 1:1 intensive therapy</li>
                            <li>✓ Home & center-based options</li>
                            <li>✓ BCBA supervised</li>
                            <li>✓ Insurance accepted</li>
                        </ul>
                        <a href="https://www.autismspeaks.org/applied-behavior-analysis" class="service-link" style="color: #667eea; font-weight: bold;">Learn More About ABA →</a>
                    </article>

                    <!-- Speech Therapy Service -->
                    <article class="service-card" itemscope itemtype="https://schema.org/Service">
                        <h3 itemprop="name">Speech & Language Therapy</h3>
                        <p itemprop="description">Comprehensive speech therapy addressing verbal and non-verbal communication, articulation, and social communication skills.</p>
                        <ul style="list-style: none; padding: 0;">
                            <li>✓ AAC device training</li>
                            <li>✓ Social communication groups</li>
                            <li>✓ Feeding therapy</li>
                            <li>✓ Teletherapy available</li>
                        </ul>
                        <a href="https://my.clevelandclinic.org/health/treatments/22366-speech-therapy" class="service-link" style="color: #667eea; font-weight: bold;">Learn More About Speech →</a>
                    </article>

                    <!-- OT Service -->
                    <article class="service-card" itemscope itemtype="https://schema.org/Service">
                        <h3 itemprop="name">Occupational Therapy (OT)</h3>
                        <p itemprop="description">Helping children develop fine motor skills, sensory processing, and daily living skills for increased independence.</p>
                        <ul style="list-style: none; padding: 0;">
                            <li>✓ Sensory integration</li>
                            <li>✓ Fine motor development</li>
                            <li>✓ Self-care skills</li>
                            <li>✓ School readiness</li>
                        </ul>
                        <a href="https://www.aota.org/about/what-is-ot" class="service-link" style="color: #667eea; font-weight: bold;">Learn More About OT →</a>
                    </article>
                </div>

                <!-- Service Badges -->
                <div style="display: flex; justify-content: center; gap: 20px; margin-top: 40px; flex-wrap: wrap;">
                    <a href="https://healingtherapycenter.com/#hero" style="text-decoration: none;"><span style="background: #e3f2fd; padding: 10px 20px; border-radius: 20px; cursor: pointer;">Insurance Accepted</span></a>
                    <a href="https://healingtherapycenter.com/therapists" style="text-decoration: none;"><span style="background: #e8f5e9; padding: 10px 20px; border-radius: 20px; cursor: pointer;">Licensed Therapists</span></a>
                    <a href="https://healingtherapycenter.com/autism-evaluation" style="text-decoration: none;"><span style="background: #fff3e0; padding: 10px 20px; border-radius: 20px; cursor: pointer;">Evidence-Based</span></a>
                </div>
            </section>

            <!-- Locations Section -->
            <section id="locations" class="content-section" aria-label="Therapy Center Locations">
                <h2>Autism Therapy Center in Dearborn, MI</h2>
                <p>Conveniently located to serve Dearborn and surrounding communities</p>
                
                <div class="locations-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top: 30px;">
                    <!-- Main Location -->
                    <div class="location-card" itemscope itemtype="https://schema.org/LocalBusiness">
                        <h3 itemprop="name">Healing Therapy Center - Dearborn</h3>
                        <address itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                            <span itemprop="streetAddress">3200 Greenfield Rd</span><br>
                            <span itemprop="addressLocality">Dearborn</span>, 
                            <span itemprop="addressRegion">MI</span> 
                            <span itemprop="postalCode">48120</span>
                        </address>
                        <p><a href="tel:313-654-1915" itemprop="telephone">313-654-1915</a></p>
                        <p>Services: ABA, Speech, OT, Social Groups</p>
                    </div>
                </div>

                <div style="background: #f8f9fa; padding: 30px; border-radius: 15px; margin-top: 40px;">
                    <h3>Serving Families Throughout Southeast Michigan</h3>
                    <p>We proudly serve families in <strong>Dearborn, Detroit, Livonia, Westland, Taylor, Lincoln Park, and surrounding communities</strong>. Our therapists understand the unique needs of our local community and work with area schools, pediatricians, and support organizations.</p>
                    
                    <h4 style="margin-top: 20px;">Why Choose Local Therapy?</h4>
                    <ul>
                        <li>Familiar with local school districts and IEP processes</li>
                        <li>Connected with community resources and support groups</li>
                        <li>Convenient Dearborn location with easy parking</li>
                        <li>Home-based services available in your neighborhood</li>
                    </ul>
                </div>
            </section>

            <!-- FAQ Section -->
            <section id="faq" class="content-section" aria-label="Frequently Asked Questions">
                <h2>Frequently Asked Questions About Autism & Our Services</h2>
                
                <div class="faq-container" style="margin-top: 30px;">
                    <details class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #f8f9fa; border-radius: 10px;">
                        <summary style="cursor: pointer; font-weight: bold; font-size: 1.1em;">What are the early signs of autism in toddlers?</summary>
                        <p style="margin-top: 15px;">Early signs of autism in toddlers include limited eye contact, not responding to their name by 12 months, not pointing to show interest by 14 months, lack of pretend play by 18 months, and repetitive behaviors. Our screening tool can help identify these signs.</p>
                    </details>

                    <details class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #f8f9fa; border-radius: 10px;">
                        <summary style="cursor: pointer; font-weight: bold; font-size: 1.1em;">At what age should my child be screened for autism?</summary>
                        <p style="margin-top: 15px;">The American Academy of Pediatrics recommends autism screening at 18 and 24 months. However, if you have concerns at any age, don't wait. Early intervention is key to better outcomes.</p>
                    </details>

                    <details class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #f8f9fa; border-radius: 10px;">
                        <summary style="cursor: pointer; font-weight: bold; font-size: 1.1em;">Does insurance cover autism therapy?</summary>
                        <p style="margin-top: 15px;">Most insurance plans, including Medicaid, cover autism therapy services like ABA, speech, and occupational therapy. Our billing team will verify your coverage and help maximize your benefits.</p>
                    </details>

                    <details class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #f8f9fa; border-radius: 10px;">
                        <summary style="cursor: pointer; font-weight: bold; font-size: 1.1em;">How many hours of ABA therapy does my child need?</summary>
                        <p style="margin-top: 15px;">The number of ABA therapy hours varies based on individual needs, typically ranging from 10-40 hours per week. Our BCBA will assess your child and recommend an appropriate treatment plan.</p>
                    </details>

                    <details class="faq-item" style="margin-bottom: 20px; padding: 20px; background: #f8f9fa; border-radius: 10px;">
                        <summary style="cursor: pointer; font-weight: bold; font-size: 1.1em;">What's the difference between speech therapy and ABA for communication?</summary>
                        <p style="margin-top: 15px;">Speech therapy focuses on language development, articulation, and communication skills. ABA addresses the behavioral aspects of communication and teaches functional communication. Many children benefit from both therapies working together.</p>
                    </details>
                </div>
            </section>

            <!-- Resources Section -->
            <section id="resources" class="content-section" aria-label="Autism Resources">
                <h2>Comprehensive Autism Resources & Information</h2>
                
                <div class="resource-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-top: 30px;">
                    <article class="resource-card">
                        <div class="resource-icon"></div>
                        <h3>Early Signs & Red Flags</h3>
                        <p>Recognize autism symptoms by age: lack of eye contact, delayed speech, repetitive behaviors, sensory sensitivities.</p>
                        <a href="https://www.healingtherapycenter.com/autism-signs" style="color: #667eea;">Read Complete Guide →</a>
                    </article>

                    <article class="resource-card">
                        <div class="resource-icon"></div>
                        <h3>Evidence-Based Therapies</h3>
                        <p>Compare ABA, DIR/Floortime, TEACCH, and other proven autism interventions. Find what works for your child.</p>
                        <a href="https://healingtherapycenter.com/is-autism-curable" style="color: #667eea;">Explore Therapies →</a>
                    </article>

                    <article class="resource-card">
                        <div class="resource-icon"></div>
                        <h3>IEP & School Support</h3>
                        <p>Navigate special education: IEP vs 504 plans, advocacy tips, classroom accommodations, and your rights.</p>
                        <a href="https://healingtherapycenter.com/#contact" style="color: #667eea;">School Resources →</a>
                    </article>

                    <article class="resource-card">
                        <div class="resource-icon"></div>
                        <h3>Family & Sibling Support</h3>
                        <p>Resources for parents, siblings, and caregivers. Support groups, respite care, and family therapy options.</p>
                        <a href="https://healingtherapycenter.com/parenting-child" style="color: #667eea;">Family Resources →</a>
                    </article>

                    <article class="resource-card">
                        <div class="resource-icon"></div>
                        <h3>Sensory Processing Help</h3>
                        <p>Sensory diets, calming strategies, weighted blankets, noise reduction, and creating sensory-friendly spaces.</p>
                        <a href="https://healingtherapycenter.com/healing-starts-with-you" style="color: #667eea;">Sensory Tools →</a>
                    </article>

                    <article class="resource-card">
                        <div class="resource-icon"></div>
                        <h3>Social Skills Development</h3>
                        <p>Social stories, peer interaction strategies, friendship skills, and social groups for different ages.</p>
                        <a href="https://healingtherapycenter.com/autism-signs" style="color: #667eea;">Social Resources →</a>
                    </article>
                </div>
            </section>

            <!-- Milestones Section -->
            <section id="milestones" class="content-section" aria-label="Developmental Milestones">
                <h2>Developmental Milestones Tracker by Age</h2>
                <p>Track your child's progress and identify areas that may need support. <strong>Remember: Every child develops at their own pace.</strong></p>
                
                <div class="milestone-tracker">
                    <div class="milestone-age-group">
                        <h3 class="milestone-title">6-12 Months: Early Social Communication</h3>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m1">
                            <label for="m1">Responds to name when called</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m2">
                            <label for="m2">Makes eye contact during interactions</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m3">
                            <label for="m3">Smiles socially at familiar people</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m4">
                            <label for="m4">Babbles with consonant sounds (ba, da, ga)</label>
                        </div>
                    </div>

                    <div class="milestone-age-group">
                        <h3 class="milestone-title">12-24 Months: Communication & Play</h3>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m5">
                            <label for="m5">Points to show interest or request</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m6">
                            <label for="m6">Says first words (mama, dada, + others)</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m7">
                            <label for="m7">Shows toys to share interest</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m8">
                            <label for="m8">Follows simple one-step directions</label>
                        </div>
                    </div>

                    <div class="milestone-age-group">
                        <h3 class="milestone-title">2-3 Years: Language & Social Skills</h3>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m9">
                            <label for="m9">Uses 2-4 word phrases</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m10">
                            <label for="m10">Engages in pretend play</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m11">
                            <label for="m11">Shows interest in other children</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m12">
                            <label for="m12">Names familiar objects and people</label>
                        </div>
                    </div>

                    <div class="milestone-age-group">
                        <h3 class="milestone-title">3-4 Years: Complex Communication</h3>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m13">
                            <label for="m13">Tells simple stories</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m14">
                            <label for="m14">Plays cooperatively with peers</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m15">
                            <label for="m15">Understands "mine" and "theirs"</label>
                        </div>
                        <div class="milestone-item">
                            <input type="checkbox" class="milestone-checkbox" id="m16">
                            <label for="m16">Shows a range of emotions</label>
                        </div>
                    </div>
                </div>

                <div style="background: #e3f2fd; padding: 20px; border-radius: 10px; margin-top: 30px;">
                    <strong>Concerned about missed milestones?</strong> Our developmental specialists can provide comprehensive evaluation and early intervention services. 
                    <a href="tel:313-654-1915" style="color: #4a90a4; font-weight: bold;">Call (313) 654-1915</a> or 
                    <a href="https://healingtherapycenter.com/appointment" style="color: #4a90a4; font-weight: bold;">schedule online</a>.
                </div>
            </section>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
