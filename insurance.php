<?php
// Page-specific variables
$page_title = 'Insurance & Payment Options | Healing Therapy Center Dearborn, MI';
$page_description = 'Healing Therapy Center accepts Blue Cross Blue Shield (FEP Blue), Priority Health, Aetna, United Healthcare, HAP, McLaren, Michigan Medicaid. Verify your mental health coverage. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/insurance';
$current_service = ''; // For sidebar active state

// Include configuration
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

<body class="index-page">
    <?php include 'includes/header.php'; ?>

    <main class="main">

        <!-- Hero Section -->
        <section class="topArea services position-relative">
            <div class="overlay">
            </div>
            <div class="position-absolute text-center w-100">
                <div class="display-3 fw-bold text-white">Insurance & Payment Options</div>
                <hr class="text-white w-25 m-auto my-3">
                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mx-auto">
                            <h1>Insurance & Payment Options at Healing Therapy Center</h1>

                            <p class="lead">We accept most major insurance plans to make mental health care affordable and accessible for Michigan residents. Our team will verify your benefits, explain your coverage, and help you understand your out-of-pocket costs before your first appointment.</p>

                            <div class="alert alert-success mb-4" data-aos="fade-up">
                                <h3 class="h5 mb-3"><i class="bi bi-check-circle-fill me-2"></i>We Make Insurance Simple</h3>
                                <p class="mb-2"><strong>Call us at <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a> and we will:</strong></p>
                                <ul class="mb-0">
                                    <li>Verify your insurance benefits before your first appointment</li>
                                    <li>Explain your copay, deductible, or coinsurance</li>
                                    <li>Check if pre-authorization is required for your plan</li>
                                    <li>Handle all insurance billing and claims submission</li>
                                    <li>Work with you on payment plans if needed</li>
                                </ul>
                            </div>

                            <h2 class="mt-5 mb-3">Insurance Plans We Accept</h2>

                            <p>Healing Therapy Center is in-network or can bill the following insurance plans for mental health services. Coverage details vary by plan - we recommend calling us to verify your specific benefits.</p>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="0">
                                    <div class="card h-100 border-primary border-2 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2 text-primary"><i class="bi bi-star-fill me-2"></i>FEP Blue - Federal Employees</h3>
                                            <p class="mb-2"><strong>Blue Cross Blue Shield Federal Employee Program</strong></p>
                                            <p class="small mb-3">If you work for USPS, CBP, FBI, VA, or any federal agency in Michigan, we accept your FEP Blue insurance. Many FEP Blue plans offer competitive mental health coverage.</p>
                                            <a href="fep-blue-federal-employee-therapy" class="btn btn-primary btn-sm">Learn More About FEP Blue Coverage →</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-shield-check text-primary me-2"></i>Blue Cross Blue Shield of Michigan</h3>
                                            <p class="small mb-0">We accept BCBS of Michigan plans for individual therapy, couples therapy, family therapy, and psychological testing services. Coverage varies by plan type.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-shield-check text-primary me-2"></i>Blue Care Network of Michigan</h3>
                                            <p class="small mb-0">BCN HMO plans are accepted. We can verify your specific mental health benefits and copay requirements before scheduling.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-shield-check text-primary me-2"></i>Priority Health</h3>
                                            <p class="small mb-0">Priority Health plans including HMO and PPO options are accepted. We'll verify your behavioral health coverage and out-of-pocket costs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-shield-check text-primary me-2"></i>Aetna</h3>
                                            <p class="small mb-0">We accept Aetna insurance plans for mental health and substance abuse services. Coverage details vary by specific plan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-shield-check text-primary me-2"></i>United Healthcare</h3>
                                            <p class="small mb-0">UnitedHealthcare and UnitedBehavioral Health plans are accepted. We can check your mental health benefits before your first visit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="600">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-shield-check text-primary me-2"></i>HAP (Health Alliance Plan)</h3>
                                            <p class="small mb-0">Health Alliance Plan members can use their benefits for our mental health services. We'll verify your specific coverage.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="700">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-shield-check text-primary me-2"></i>McLaren Health Plan</h3>
                                            <p class="small mb-0">McLaren insurance plans are accepted. Coverage for therapy and psychological testing varies by plan - call to verify.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="800">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-shield-check text-primary me-2"></i>Michigan Medicaid</h3>
                                            <p class="small mb-0">We accept Michigan Medicaid for qualifying mental health services. Coverage depends on your specific Medicaid plan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="900">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-shield-check text-primary me-2"></i>Other Major Plans</h3>
                                            <p class="small mb-0">We work with most major Michigan insurance plans. If your insurance is not listed, call us at (313) 654-1915 to check if we can bill your plan.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">Understanding Your Mental Health Benefits</h2>

                            <p>Mental health insurance coverage can be confusing. Here's what you need to know about the most common terms and how your benefits work:</p>

                            <div class="card border-0 shadow-sm mb-4" data-aos="fade-up">
                                <div class="card-body">
                                    <h3 class="h6 mb-3">Common Insurance Terms Explained</h3>
                                    <div class="row small">
                                        <div class="col-md-6">
                                            <p class="mb-2"><strong>Copay:</strong> A fixed amount you pay per session (e.g., $20 per visit). Your insurance covers the rest.</p>
                                            <p class="mb-2"><strong>Deductible:</strong> The amount you must pay out-of-pocket before insurance starts covering services.</p>
                                            <p class="mb-2"><strong>Coinsurance:</strong> The percentage you pay after meeting your deductible (e.g., you pay 20%, insurance pays 80%).</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-2"><strong>In-Network:</strong> Providers who contract with your insurance for lower rates. Lower out-of-pocket costs for you.</p>
                                            <p class="mb-2"><strong>Pre-Authorization:</strong> Approval required from insurance before starting certain services.</p>
                                            <p class="mb-0"><strong>Session Limits:</strong> Some plans limit the number of therapy sessions per year. Many plans offer generous allowances.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">What Mental Health Services Are Typically Covered?</h2>

                            <p>Most insurance plans provide coverage for a range of mental health services. Specific coverage varies by plan:</p>

                            <div class="alert alert-light border-info mb-4" data-aos="fade-up">
                                <h3 class="h6 text-info mb-3"><i class="bi bi-info-circle me-2"></i>Services That May Be Covered:</h3>
                                <div class="row small">
                                    <div class="col-md-6">
                                        <p class="mb-1"><i class="bi bi-check-circle text-success me-2"></i>Individual therapy</p>
                                        <p class="mb-1"><i class="bi bi-check-circle text-success me-2"></i>Couples/marriage counseling</p>
                                        <p class="mb-1"><i class="bi bi-check-circle text-success me-2"></i>Family therapy</p>
                                        <p class="mb-1"><i class="bi bi-check-circle text-success me-2"></i>Group therapy</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-1"><i class="bi bi-check-circle text-success me-2"></i>Telehealth/online therapy</p>
                                        <p class="mb-1"><i class="bi bi-check-circle text-success me-2"></i>Psychological testing (ADHD, autism)</p>
                                        <p class="mb-1"><i class="bi bi-check-circle text-success me-2"></i>Psychiatric medication management</p>
                                        <p class="mb-1"><i class="bi bi-check-circle text-success me-2"></i>Crisis intervention</p>
                                    </div>
                                </div>
                                <p class="small mt-2 mb-0"><strong>Important:</strong> Coverage details including copays, deductibles, session limits, and authorization requirements vary significantly by insurance plan. Call us to verify what your specific plan covers.</p>
                            </div>

                            <h2 class="mt-5 mb-3">How to Verify Your Insurance Benefits</h2>

                            <p>Before your first appointment, we recommend verifying your mental health coverage. Here's how:</p>

                            <h3 class="h6 mb-2">Option 1: We'll Verify For You (Easiest)</h3>
                            <p>When you call to schedule your first appointment at <a href="tel:313-654-1915"><strong>(313) 654-1915</strong></a>, provide us with:</p>
                            <ul>
                                <li>Your insurance card information (member ID, group number)</li>
                                <li>Your date of birth</li>
                                <li>The name of the person seeking therapy</li>
                            </ul>
                            <p class="mb-4">We'll contact your insurance company, verify your mental health benefits, and explain your out-of-pocket costs before you come in.</p>

                            <h3 class="h6 mb-2">Option 2: Call Your Insurance Directly</h3>
                            <p>Call the phone number on the back of your insurance card and ask:</p>
                            <ul>
                                <li>"What are my outpatient mental health benefits?"</li>
                                <li>"What is my copay/coinsurance for therapy sessions?" (CPT codes 90834, 90837)</li>
                                <li>"Do I need to meet a deductible first?"</li>
                                <li>"Is pre-authorization required for outpatient therapy?"</li>
                                <li>"Are there session limits per year?"</li>
                                <li>"Is telehealth covered the same as in-person visits?"</li>
                            </ul>

                            <h2 class="mt-5 mb-3">Payment Options</h2>

                            <div class="row g-3 mb-4">
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="0">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body text-center">
                                            <i class="bi bi-credit-card text-primary" style="font-size: 3rem;"></i>
                                            <h3 class="h6 mt-3">Insurance Billing</h3>
                                            <p class="small mb-0">We bill your insurance directly. You pay only your copay, coinsurance, or deductible at time of service.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body text-center">
                                            <i class="bi bi-wallet2 text-primary" style="font-size: 3rem;"></i>
                                            <h3 class="h6 mt-3">Self-Pay</h3>
                                            <p class="small mb-0">Choose not to use insurance for privacy or preference. We offer competitive self-pay rates. Call for pricing.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body text-center">
                                            <i class="bi bi-calendar-check text-primary" style="font-size: 3rem;"></i>
                                            <h3 class="h6 mt-3">Payment Plans</h3>
                                            <p class="small mb-0">If you're facing financial hardship, talk to us about payment plan options. We want to make therapy accessible.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <p class="small">We accept cash, check, and all major credit cards (Visa, Mastercard, American Express, Discover). Payment is due at time of service.</p>

                            <h2 class="mt-5 mb-3">Frequently Asked Questions</h2>

                            <div class="accordion" id="insuranceFAQ">
                                <div class="accordion-item" data-aos="fade-up">
                                    <h3 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Do you accept my insurance?
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#insuranceFAQ">
                                        <div class="accordion-body">
                                            <p class="mb-0">We accept most major Michigan insurance plans including Blue Cross Blue Shield (FEP Blue for federal employees), Priority Health, Aetna, United Healthcare, HAP, McLaren, Blue Care Network, and Michigan Medicaid. If your plan isn't listed, call us at (313) 654-1915 - we may still be able to bill your insurance or provide out-of-network benefits information.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-aos="fade-up">
                                    <h3 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            How much will therapy cost me?
                                        </button>
                                    </h3>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#insuranceFAQ">
                                        <div class="accordion-body">
                                            <p class="mb-0">Your out-of-pocket cost depends on your specific insurance plan and may include copays, coinsurance, or deductibles. When you call to schedule, we'll verify your benefits and tell you your exact cost before your first appointment. There are no surprise bills.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-aos="fade-up">
                                    <h3 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            What if I don't want to use insurance?
                                        </button>
                                    </h3>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#insuranceFAQ">
                                        <div class="accordion-body">
                                            <p class="mb-0">You can choose to pay out-of-pocket (self-pay) instead of using insurance. Some people prefer this for complete privacy or if they haven't met their deductible yet. We offer competitive self-pay rates. Call (313) 654-1915 for pricing information.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-aos="fade-up">
                                    <h3 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Do I need a referral from my doctor?
                                        </button>
                                    </h3>
                                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#insuranceFAQ">
                                        <div class="accordion-body">
                                            <p class="mb-0">Most insurance plans do not require a referral for mental health services, but some HMO plans do. We'll check your specific plan's requirements when we verify your benefits. In many cases, you can call us directly and schedule without seeing your primary care doctor first.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item" data-aos="fade-up">
                                    <h3 class="accordion-header" id="headingFive">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                            Is telehealth covered the same as in-person therapy?
                                        </button>
                                    </h3>
                                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#insuranceFAQ">
                                        <div class="accordion-body">
                                            <p class="mb-0">Many insurance plans cover telehealth mental health services at the same rate as in-person visits. However, coverage varies by plan. We'll verify your telehealth benefits when we check your insurance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-primary mt-5" role="alert">
                                <h3 class="alert-heading"><i class="bi bi-telephone-fill me-2"></i>Questions About Your Coverage?</h3>
                                <p class="mb-2">Our team is here to help you understand your insurance benefits and make therapy affordable.</p>
                                <p class="mb-2"><strong>Call us at <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a></strong></p>
                                <p class="mb-0">We'll verify your insurance, explain your costs, and get you scheduled with the right therapist for your needs.</p>
                            </div>

                            <div class="text-center mt-5 mb-4">
                                <a href="appointment" class="btn btn-primary btn-lg px-5">Request an Appointment</a>
                            </div>
                        </div>
                    </div>
                    <?php include 'includes/components/sidebar-services.php'; ?>
                </div>
            </div>
        </section>

    </main>

    <?php include 'includes/footer.php'; ?>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
