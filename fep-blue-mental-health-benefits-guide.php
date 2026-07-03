<?php
// Page-specific variables
$page_title = 'FEP Blue Mental Health Benefits Guide | Michigan 2026';
$page_description = 'FEP Blue mental health benefits guide for Michigan federal employees. Copays, covered therapy services & how to maximize your coverage. (313) 654-1915.';
$canonical_url = 'https://www.healingtherapycenter.com/fep-blue-mental-health-benefits-guide';

// Schema for SEO
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'Service',
            'name' => 'FEP Blue Mental Health Benefits Guidance for Federal Employees',
            'description' => 'Complete guide to FEP Blue (Blue Cross Blue Shield Federal Employee Program) mental health coverage for federal employees in Michigan, covering copays, covered services, telehealth, psychological testing, pre-authorization, and how to find FEP Blue therapists.',
            'url' => 'https://www.healingtherapycenter.com/fep-blue-mental-health-benefits-guide',
            'areaServed' => ['@type' => 'State', 'name' => 'Michigan'],
            'provider' => [
                '@type' => 'MedicalBusiness',
                'name' => 'Healing Therapy Center',
                'telephone' => '+13136541915',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '22005 Outer Dr W',
                    'addressLocality' => 'Dearborn',
                    'addressRegion' => 'MI',
                    'postalCode' => '48124',
                    'addressCountry' => 'US'
                ],
                'url' => 'https://www.healingtherapycenter.com'
            ]
        ],
        [
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'Can I switch therapists if I don\'t like my first one?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Absolutely! The therapeutic relationship is crucial to success. If you don\'t click with your therapist after 2-3 sessions, you can find a different provider. Your FEP Blue coverage allows you to try different therapists without penalty.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if I\'m on temporary duty (TDY) or travel frequently?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Use telehealth! You can continue seeing your Michigan therapist via video sessions no matter where you are in the country. FEP Blue covers telehealth from any state.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Do I pay more if I see a psychologist vs. a licensed counselor?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'No. FEP Blue pays the same for licensed mental health professionals regardless of their specific degree (psychologist, licensed counselor, social worker, marriage and family therapist). Your co-pay is the same.'
                    ]
                ],
                [
                    '@type' => 'Question',
                    'name' => 'What if my therapist is out-of-network?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'FEP Blue offers out-of-network benefits, but you\'ll pay more out-of-pocket (typically 70-80% coverage after deductible instead of just a co-pay). It\'s more affordable to find an in-network provider when possible.'
                    ]
                ]
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES);

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

    <main class="main">
        <section class="news-single section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-main">
                                    <div class="news-head">
                                        <img loading="lazy" src="assets/img/blog-6.jpg" class="img-fluid" alt="FEP Blue mental health benefits federal employees">
                                    </div>
                                    <h1 class="my-2">Your Complete Guide to FEP Blue Mental Health Benefits for Federal Employees in Michigan (2026)</h1>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="hstack my-2">
                                                <div class="me-3">
                                                    <i class="fa fa-user me-1 text-primary"></i>
                                                    <span class="fs-6">Healing Therapy Center</span>
                                                </div>
                                                <div>
                                                    <i class="fa fa-calendar me-1 text-primary"></i>
                                                    <span class="fs-6">06/16/2026</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <p class="lead">As a federal employee working for USPS, CBP, FBI, VA, or any other federal agency in Michigan, you have access to some of the best mental health insurance benefits available through FEP Blue (Blue Cross Blue Shield Federal Employee Program). Yet many federal employees don't fully understand their mental health coverage or how to use it effectively.</p>

                                    <p>This comprehensive guide will walk you through everything you need to know about your FEP Blue mental health benefits in 2026, including what's covered, how much you'll pay, how to find providers in Michigan, and tips for maximizing your benefits.</p>

                                    <h2>What is FEP Blue?</h2>

                                    <p>FEP Blue is the Blue Cross Blue Shield Federal Employee Program, one of the largest health insurance plans available to federal employees and their families. Administered by Blue Cross Blue Shield, FEP Blue is available in two options:</p>

                                    <ul>
                                        <li><strong>FEP Blue Standard:</strong> Higher premiums, lower out-of-pocket costs, more comprehensive coverage</li>
                                        <li><strong>FEP Blue Basic:</strong> Lower premiums, slightly higher out-of-pocket costs, still excellent coverage</li>
                                    </ul>

                                    <p>Both options provide excellent mental health and behavioral health coverage that far exceeds what most private sector employees receive.</p>

                                    <h2>What Mental Health Services Does FEP Blue Cover?</h2>

                                    <p>FEP Blue provides comprehensive mental health coverage for a wide range of services. Here's what's covered:</p>

                                    <h3>Outpatient Mental Health Services (Fully Covered)</h3>

                                    <ul>
                                        <li><strong>Individual therapy:</strong> One-on-one counseling with a licensed therapist for anxiety, depression, trauma, PTSD, stress, grief, and other mental health concerns</li>
                                        <li><strong>Couples therapy:</strong> Marriage and relationship counseling to improve communication and resolve conflicts</li>
                                        <li><strong>Family therapy:</strong> Therapy sessions involving multiple family members to address family dynamics and relationships</li>
                                        <li><strong>Group therapy:</strong> Therapeutic groups led by a licensed professional (lower co-pays than individual therapy)</li>
                                        <li><strong>Medication management:</strong> Visits with a psychiatrist for medication evaluation and management</li>
                                        <li><strong>Crisis intervention:</strong> Emergency mental health services when needed</li>
                                    </ul>

                                    <h3>Psychological Testing & Evaluations</h3>

                                    <ul>
                                        <li><strong>ADHD testing:</strong> Comprehensive evaluations for attention-deficit/hyperactivity disorder in adults and children</li>
                                        <li><strong>Autism evaluations:</strong> Gold-standard autism diagnostic assessments (ADOS-2, ADI-R)</li>
                                        <li><strong>Neuropsychological testing:</strong> Cognitive assessments for memory, learning disabilities, and brain function</li>
                                        <li><strong>Personality assessments:</strong> Psychological testing for diagnostic purposes</li>
                                    </ul>

                                    <h3>Telehealth/Virtual Therapy</h3>

                                    <p>FEP Blue covers telehealth mental health services <strong>at the same rate as in-person visits</strong>. This is especially valuable for federal employees with:</p>

                                    <ul>
                                        <li>Irregular work schedules (shift workers, USPS, CBP)</li>
                                        <li>Long commutes or remote work arrangements</li>
                                        <li>Childcare challenges</li>
                                        <li>Privacy concerns about being seen entering a therapist's office</li>
                                    </ul>

                                    <h3>Inpatient & Intensive Treatment</h3>

                                    <ul>
                                        <li>Psychiatric hospitalization</li>
                                        <li>Partial hospitalization programs (PHP)</li>
                                        <li>Intensive outpatient programs (IOP)</li>
                                        <li>Residential treatment facilities</li>
                                    </ul>

                                    <h2>Understanding FEP Blue Out-of-Pocket Costs</h2>

                                    <p>One of the major advantages of FEP Blue is typically competitive out-of-pocket costs for mental health services. However, your specific costs depend on your plan type and benefits:</p>

                                    <h3>What Affects Your Out-of-Pocket Costs?</h3>

                                    <ul>
                                        <li><strong>Plan type:</strong> FEP Blue Standard vs. Basic have different cost-sharing structures</li>
                                        <li><strong>Service type:</strong> Individual therapy, couples therapy, psychological testing, etc. may have different copays or coinsurance</li>
                                        <li><strong>Deductibles:</strong> Some services may require meeting a deductible first</li>
                                        <li><strong>Network status:</strong> In-network providers typically cost less than out-of-network</li>
                                    </ul>

                                    <div class="alert alert-info my-4">
                                        <h4 class="alert-heading"><i class="bi bi-info-circle-fill me-2"></i>Verify Your Specific Costs</h4>
                                        <p class="mb-0">Coverage, copays, deductibles, and coinsurance vary by FEP Blue plan and year. Before scheduling, call your therapist's office or FEP Blue directly to verify your exact out-of-pocket costs for mental health services.</p>
                                    </div>

                                    <h2>Do You Need Pre-Authorization?</h2>

                                    <p>Pre-authorization requirements vary by FEP Blue plan and service type. Many FEP Blue plans offer streamlined access to outpatient mental health services, though some plans may require authorization for certain services.</p>

                                    <h3>Services That May Require Authorization:</h3>

                                    <ul>
                                        <li>Inpatient psychiatric hospitalization</li>
                                        <li>Intensive outpatient programs (IOP)</li>
                                        <li>Partial hospitalization programs (PHP)</li>
                                        <li>Residential treatment</li>
                                        <li>Some psychological testing procedures</li>
                                    </ul>

                                    <p><strong>Important:</strong> Always verify authorization requirements with your specific plan before starting services. Your therapist's office can help check if pre-authorization is needed and assist with that process if required.</p>

                                    <h2>Are There Session Limits?</h2>

                                    <p>Session limits, if any, vary by FEP Blue plan and year. Many FEP Blue plans offer generous allowances for outpatient mental health services, though specific limits depend on your plan type and coverage year.</p>

                                    <p><strong>What This Means for You:</strong></p>

                                    <ul>
                                        <li>Some plans may allow ongoing weekly therapy</li>
                                        <li>Coverage details vary by Standard vs. Basic plans</li>
                                        <li>Annual or lifetime limits may apply depending on your plan</li>
                                        <li>Your therapist can help check your remaining benefits</li>
                                    </ul>

                                    <p><strong>Important:</strong> Call FEP Blue or your therapist's office to verify your specific plan's session limits before starting treatment.</p>

                                    <h2>Finding a FEP Blue Therapist in Michigan</h2>

                                    <p>Finding a therapist who accepts FEP Blue in Michigan is straightforward. Here are the best methods:</p>

                                    <h3>Method 1: Call Providers Directly</h3>

                                    <p>Many therapists accept FEP Blue but may not be listed in online directories. Call mental health practices directly and ask:</p>

                                    <ul>
                                        <li>"Do you accept FEP Blue insurance?"</li>
                                        <li>"What is my co-pay with FEP Blue Standard/Basic?"</li>
                                        <li>"How soon can I get an appointment?"</li>
                                    </ul>

                                    <p><strong>Example:</strong> Healing Therapy Center in Dearborn accepts FEP Blue and serves federal employees throughout Metro Detroit. Call (313) 654-1915 to verify benefits and schedule.</p>

                                    <h3>Method 2: Use the FEP Blue Provider Directory</h3>

                                    <p>Visit the FEP Blue website and search their provider directory:</p>

                                    <ol>
                                        <li>Go to fepblue.org</li>
                                        <li>Click "Find a Doctor"</li>
                                        <li>Select "Behavioral Health"</li>
                                        <li>Enter your Michigan zip code</li>
                                        <li>Filter by specialty (psychologist, therapist, etc.)</li>
                                    </ol>

                                    <h3>Method 3: Use Psychology Today</h3>

                                    <p>Psychology Today's therapist directory allows you to filter by insurance:</p>

                                    <ol>
                                        <li>Go to psychologytoday.com</li>
                                        <li>Search for therapists in Michigan</li>
                                        <li>Filter by insurance: Select "Blue Cross Blue Shield"</li>
                                        <li>Call to confirm they accept FEP Blue specifically</li>
                                    </ol>

                                    <h2>Common Misconceptions About FEP Blue Mental Health Coverage</h2>

                                    <h3>Myth #1: "My employer will find out if I go to therapy"</h3>

                                    <p><strong>FALSE.</strong> Your therapy is completely confidential. Your federal agency will NEVER know you're in treatment. The only information your insurance company receives is basic billing codes for insurance processing—they don't get your therapy notes, diagnoses details, or session content. HIPAA privacy laws strictly protect your mental health information.</p>

                                    <h3>Myth #2: "I need a referral from my primary care doctor"</h3>

                                    <p><strong>Often not required, but varies by plan.</strong> Many FEP Blue plans do not require referrals for mental health services, allowing you to call a therapist directly. However, referral requirements can vary by plan type and year. Check your specific plan's requirements before scheduling.</p>

                                    <h3>Myth #3: "Therapy will affect my security clearance"</h3>

                                    <p><strong>FALSE (with rare exceptions).</strong> Seeking mental health treatment does NOT automatically affect your security clearance. In fact, the federal government encourages employees to seek help for mental health concerns. The only time mental health treatment might be relevant to clearance is if:</p>

                                    <ul>
                                        <li>You're required to disclose it on a clearance renewal form (SF-86)</li>
                                        <li>There are concerns about your judgment or reliability (very rare)</li>
                                    </ul>

                                    <p>Getting help for stress, anxiety, or depression is viewed positively—it shows you're taking responsibility for your wellbeing.</p>

                                    <h3>Myth #4: "Telehealth isn't real therapy"</h3>

                                    <p><strong>FALSE.</strong> Research shows telehealth therapy is equally effective as in-person therapy for most mental health conditions. FEP Blue covers telehealth at the same rate as in-person visits, making it a convenient and legitimate option.</p>

                                    <h2>Special Considerations for Federal Employees</h2>

                                    <h3>Shift Workers (USPS, CBP, Law Enforcement)</h3>

                                    <p>If you work irregular hours or rotating shifts, look for therapists who offer:</p>

                                    <ul>
                                        <li>Evening and weekend appointments</li>
                                        <li>Flexible scheduling</li>
                                        <li>Telehealth options so you can attend sessions from anywhere</li>
                                        <li>Experience working with shift workers</li>
                                    </ul>

                                    <h3>First Responders & Law Enforcement (CBP, FBI)</h3>

                                    <p>If you've experienced traumatic incidents on the job, seek therapists who specialize in:</p>

                                    <ul>
                                        <li><strong>PTSD treatment:</strong> Evidence-based approaches like EMDR, CPT, or prolonged exposure</li>
                                        <li><strong>First responder trauma:</strong> Understanding of law enforcement culture and critical incidents</li>
                                        <li><strong>Confidentiality expertise:</strong> Therapists who understand security clearance concerns</li>
                                    </ul>

                                    <h3>Federal Employees with Families</h3>

                                    <p>Your FEP Blue coverage extends to all dependents on your plan. This means:</p>

                                    <ul>
                                        <li>Your spouse can attend individual or couples therapy</li>
                                        <li>Your children can receive therapy or psychological testing</li>
                                        <li>Family therapy is covered for relationship challenges</li>
                                        <li>Each family member has the same benefits (same co-pays, no limits)</li>
                                    </ul>

                                    <h2>How to Verify Your FEP Blue Mental Health Benefits</h2>

                                    <p>Before your first therapy appointment, it's wise to verify your specific benefits. Here's how:</p>

                                    <h3>Option 1: Call the Therapist's Office</h3>

                                    <p>Most therapy practices will verify your insurance benefits for you. When you call to schedule, provide:</p>

                                    <ul>
                                        <li>Your FEP Blue member ID number</li>
                                        <li>Whether you have Standard or Basic</li>
                                        <li>Your date of birth</li>
                                    </ul>

                                    <p>They'll call FEP Blue, verify your benefits, and tell you your exact co-pay.</p>

                                    <h3>Option 2: Call FEP Blue Directly</h3>

                                    <p>Call the number on the back of your insurance card and ask:</p>

                                    <ul>
                                        <li>"What is my co-pay for outpatient mental health visits?" (CPT code 90834 or 90837)</li>
                                        <li>"Is pre-authorization required for outpatient therapy?"</li>
                                        <li>"Do I have a deductible for mental health services?"</li>
                                        <li>"Is telehealth covered the same as in-person?"</li>
                                    </ul>

                                    <h3>Option 3: Check Your Online Account</h3>

                                    <p>Log in to your FEP Blue account at fepblue.org and review your benefit summary. Look for "Behavioral Health" or "Mental Health Services."</p>

                                    <h2>Maximizing Your FEP Blue Mental Health Benefits</h2>

                                    <p>Here are insider tips to get the most value from your excellent mental health coverage:</p>

                                    <h3>1. Don't Wait Until You're in Crisis</h3>

                                    <p>FEP Blue plans often provide competitive coverage for outpatient mental health services. You may be able to seek therapy proactively for stress management, relationship enhancement, or personal growth. Check your specific plan's coverage details.</p>

                                    <h3>2. Use Telehealth for Convenience</h3>

                                    <p>If you have a busy schedule or long commute, telehealth therapy can save hours per week while providing the same quality care. Perfect for lunch-break sessions or evening appointments from home.</p>

                                    <h3>3. Consider Couples or Family Therapy</h3>

                                    <p>Federal work schedules can strain relationships. Use your FEP Blue benefits for couples therapy to strengthen your marriage or family therapy to improve communication with your kids. Same low co-pay as individual therapy.</p>

                                    <h3>4. Get Psychological Testing if Needed</h3>

                                    <p>If you or your child struggles with focus, learning, or behavioral issues, comprehensive ADHD or autism evaluations are covered. Proper diagnosis leads to appropriate treatment and accommodations.</p>

                                    <h3>5. Stay with a Therapist Long-Term if Beneficial</h3>

                                    <p>Many FEP Blue plans offer generous session allowances, potentially allowing ongoing therapy if medically necessary. Check your specific plan's session limits and coverage period. Many people benefit from ongoing therapy over months or years.</p>

                                    <h2>Common Questions Federal Employees Ask</h2>

                                    <h3>Can I switch therapists if I don't like my first one?</h3>

                                    <p>Absolutely! The therapeutic relationship is crucial to success. If you don't click with your therapist after 2-3 sessions, you can find a different provider. Your FEP Blue coverage allows you to try different therapists without penalty.</p>

                                    <h3>What if I'm on temporary duty (TDY) or travel frequently?</h3>

                                    <p>Use telehealth! You can continue seeing your Michigan therapist via video sessions no matter where you are in the country. FEP Blue covers telehealth from any state.</p>

                                    <h3>Do I pay more if I see a psychologist vs. a licensed counselor?</h3>

                                    <p>No. FEP Blue pays the same for licensed mental health professionals regardless of their specific degree (psychologist, licensed counselor, social worker, marriage and family therapist). Your co-pay is the same.</p>

                                    <h3>What if my therapist is out-of-network?</h3>

                                    <p>FEP Blue offers out-of-network benefits, but you'll pay more out-of-pocket (typically 70-80% coverage after deductible instead of just a co-pay). It's more affordable to find an in-network provider when possible.</p>

                                    <h2>Resources for Federal Employees in Michigan</h2>

                                    <h3>FEP Blue Resources</h3>

                                    <ul>
                                        <li><strong>Website:</strong> fepblue.org</li>
                                        <li><strong>Customer Service:</strong> 1-800-411-2583</li>
                                        <li><strong>Mental Health Support Line:</strong> Available 24/7 through your member portal</li>
                                    </ul>

                                    <h3>Federal Employee Assistance Program (EAP)</h3>

                                    <p>In addition to FEP Blue, most federal employees have access to EAP services which provide:</p>

                                    <ul>
                                        <li>Free short-term counseling (typically 6-8 sessions)</li>
                                        <li>24/7 crisis support</li>
                                        <li>Work-life resources</li>
                                        <li>Legal and financial consultation</li>
                                    </ul>

                                    <p>Contact your agency's EAP coordinator for details. You can use both EAP and FEP Blue benefits—they don't conflict.</p>

                                    <h3>Local Michigan Resources</h3>

                                    <ul>
                                        <li><strong>Crisis Text Line:</strong> Text HOME to 741741</li>
                                        <li><strong>National Suicide Prevention Lifeline:</strong> 988</li>
                                        <li><strong>Veterans Crisis Line:</strong> 1-800-273-8255, Press 1 (for VA employees or veterans)</li>
                                    </ul>

                                    <h2>Take the First Step</h2>

                                    <p>As a federal employee, you've earned excellent mental health benefits through your service. FEP Blue often provides competitive mental health coverage that may include favorable copays, generous session allowances, streamlined authorization processes, and telehealth options. Your specific benefits vary by plan.</p>

                                    <p>Whether you're dealing with work stress, anxiety, depression, relationship challenges, PTSD, or simply want support during a difficult time, quality mental health care is accessible and affordable with your FEP Blue insurance.</p>

                                    <p>Don't let your benefits go unused. Taking care of your mental health makes you a better employee, partner, parent, and person. The hardest part is making that first call—and from there, your therapist and your excellent insurance benefits will support your journey to better mental health.</p>

                                    <div class="alert alert-primary my-4">
                                        <h4 class="alert-heading"><i class="bi bi-info-circle-fill me-2"></i>Ready to Use Your FEP Blue Benefits?</h4>
                                        <p class="mb-2">Healing Therapy Center in Dearborn, Michigan accepts FEP Blue insurance and specializes in working with federal employees throughout Metro Detroit.</p>
                                        <p class="mb-2"><strong>Call (313) 654-1915</strong> to verify your benefits and schedule your first appointment.</p>
                                        <p class="mb-0">We offer flexible scheduling, telehealth options, and evening/weekend appointments to accommodate federal employee schedules. Serving USPS, CBP, FBI, VA, and all federal employees in Michigan.</p>
                                    </div>

                                    <div class="alert alert-light border-primary my-4">
                                        <p class="mb-2"><strong>Related Articles:</strong></p>
                                        <ul class="mb-0">
                                            <li><a href="fep-blue-federal-employee-therapy">Complete FEP Blue Mental Health Services Page</a></li>
                                            <li><a href="individual-therapy">Individual Therapy Services</a></li>
                                            <li><a href="trauma-ptsd-treatment">PTSD & Trauma Treatment</a></li>
                                            <li><a href="couples-therapy">Couples Therapy for Federal Employee Families</a></li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="main-sidebar">
                            <div class="single-widget recent-post">
                                <h3 class="title">Recent posts</h3>
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img loading="lazy" src="assets/img/blog-7.jpg" class="object-fit-cover" height="70" width="100" alt="is autism curable">
                                    </div>
                                    <div class="content">
                                        <h6><a href="is-autism-curable">Is Autism Curable</a></h6>
                                        <div class="comment d-flex align-items-center">
                                            <span class="text-muted" style="font-size:13px"><i class="fa fa-calendar me-1 text-muted" style="font-size:13px"></i>12/09/2025</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img loading="lazy" src="assets/img/blog-6.jpg" class="object-fit-cover" height="70" width="100" alt="parenting child autism">
                                    </div>
                                    <div class="content">
                                        <h6><a href="parenting-child">Parenting a Child with Autism</a></h6>
                                        <div class="comment d-flex align-items-center">
                                            <span class="text-muted" style="font-size:13px"><i class="fa fa-calendar me-1 text-muted" style="font-size:13px"></i>12/02/2025</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-post d-flex my-3 border-bottom pb-2">
                                    <div class="image me-3">
                                        <img loading="lazy" src="assets/img/blog-5.jpg" class="object-fit-cover" height="70" width="100" alt="autism signs children">
                                    </div>
                                    <div class="content">
                                        <h6><a href="autism-signs">Early Signs of Autism</a></h6>
                                        <div class="comment d-flex align-items-center">
                                            <span class="text-muted" style="font-size:13px"><i class="fa fa-calendar me-1 text-muted" style="font-size:13px"></i>11/25/2025</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
