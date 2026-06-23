<?php
// Page-specific variables
$page_title = 'FEP Blue Therapist Michigan | Federal Employee Mental Health';
$page_description = 'FEP Blue therapist accepting Blue Cross Blue Shield Federal Employee Program insurance in Michigan. Therapy for USPS, CBP, FBI & federal employees. Dearborn, Detroit. (313) 654-1915';
$canonical_url = 'https://www.healingtherapycenter.com/fep-blue-federal-employee-therapy';
$current_service = 'individual'; // For sidebar active state

// FAQ Schema for rich snippets
$schema_json = json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'Does FEP Blue cover therapy in Michigan?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes! FEP Blue (Blue Cross Blue Shield Federal Employee Program) provides excellent mental health coverage throughout Michigan. Your plan may cover individual therapy, couples therapy, family therapy, and psychological testing. We are an in-network provider. Coverage details including copays, deductibles, session limits, and authorization requirements vary by plan. Call us at (313) 654-1915 to verify your specific benefits.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Do I need a referral from my primary care doctor to use FEP Blue for therapy?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Many FEP Blue plans do not require a referral for mental health services, though requirements can vary by plan. Call us directly at (313) 654-1915 and we\'ll verify your specific plan requirements and help you schedule an appointment. We\'ll check if your plan requires any pre-authorization or referrals before your first visit.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'What is my copay for therapy sessions with FEP Blue?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Your out-of-pocket costs for mental health visits depend on your specific FEP Blue plan (Standard or Basic) and may include copays, coinsurance, or deductibles. Some plans have competitive copays, while others may have different cost-sharing arrangements. Session limits, authorization requirements, and deductibles also vary by plan. Call us at (313) 654-1915 to verify your specific coverage, costs, and benefits before scheduling.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Is my therapy confidential? Will my employer find out?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Your therapy is completely confidential and protected by HIPAA privacy laws. We do not report to your federal agency, supervisor, or anyone else about your treatment. Your employer will never know you\'re in therapy unless you choose to tell them. The only information your insurance company receives is basic billing codes - they don\'t get session notes, diagnoses details, or what you discuss in therapy.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Do you offer telehealth for federal employees with FEP Blue?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes! We offer secure, HIPAA-compliant telehealth therapy for federal employees anywhere in Michigan. Many FEP Blue plans cover telehealth similarly to in-person visits, though coverage details vary by plan. Call us to verify your telehealth benefits. Telehealth is perfect for federal employees with irregular hours, long commutes, or who prefer the convenience of online sessions.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Can my spouse or children use FEP Blue for therapy?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Absolutely! All family members covered under your FEP Blue plan have the same mental health benefits. We provide therapy for adults, teens, and children. We also offer couples therapy and family therapy, which are both covered by FEP Blue. Many federal employee families benefit from therapy to address the unique stressors of shift work, frequent relocations, and the demands of public service careers.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'How do I schedule an appointment with FEP Blue insurance?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Scheduling is easy! Call us at (313) 654-1915 or use our online appointment request form. We\'ll verify your FEP Blue coverage, answer any questions about your benefits, and find a convenient appointment time. We offer flexible scheduling including evenings and weekends to accommodate shift workers. Most federal employees can get an appointment within 1-2 weeks.'
            ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);

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
        <section class="topArea individual position-relative">
            <div class="overlay">
            </div>
            <div class="position-absolute text-center w-100">
                <div class="display-3 fw-bold text-white">FEP Blue Mental Health Services for Federal Employees</div>
                <hr class="text-white w-25 m-auto my-3">
                <a href="appointment" class="btn btn-primary btn-lg">Make an Appointment</a>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="mx-auto">
                            <h1>FEP Blue Therapist & Mental Health Services for Federal Employees in Michigan</h1>

                            <p class="lead">Are you a federal employee looking for mental health support? Whether you work for USPS, CBP, FBI, the VA, or any federal agency in Michigan, we accept your FEP Blue (Blue Cross Blue Shield Federal Employee Program) insurance and provide comprehensive mental health services tailored to the unique challenges federal employees face.</p>

                            <p>At Healing Therapy Center in Dearborn, Michigan, we understand the specific stressors that come with federal service—shift work, high-pressure environments, public safety responsibilities, and the challenge of work-life balance. Our licensed therapists have experience working with federal employees throughout Metro Detroit and provide confidential, professional mental health care both in-person at our Dearborn office and via secure telehealth anywhere in Michigan.</p>

                            <div class="alert alert-success mb-4" data-aos="fade-up">
                                <h3 class="h5 mb-3"><i class="bi bi-check-circle-fill me-2"></i>We Accept FEP Blue Insurance</h3>
                                <p class="mb-2"><strong>Excellent mental health coverage through your Federal Employee Program benefits</strong></p>
                                <ul class="mb-0">
                                    <li>FEP Blue plans often feature competitive copays for mental health services</li>
                                    <li>Many FEP Blue plans offer streamlined access to outpatient therapy</li>
                                    <li>Coverage may include individual, couples, and family therapy</li>
                                    <li>Psychological testing (ADHD, autism evaluations) may be covered</li>
                                    <li>We handle all insurance billing and verification</li>
                                </ul>
                            </div>

                            <h2 class="mt-5 mb-3">We Accept FEP Blue Insurance (Blue Cross Blue Shield Federal Employee Program)</h2>

                            <p>Federal employees have some of the best mental health insurance benefits available, and we're proud to be an in-network provider for FEP Blue (Blue Cross Blue Shield Federal Employee Program). Your FEP Blue plan provides comprehensive mental health coverage with low out-of-pocket costs, making therapy accessible and affordable.</p>

                            <div class="card border-0 shadow-sm mb-4" data-aos="fade-up">
                                <div class="card-body">
                                    <h3 class="h5 mb-3">What FEP Blue Covers:</h3>
                                    <div class="row small">
                                        <div class="col-md-6">
                                            <p class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Individual therapy sessions</p>
                                            <p class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Couples & marriage counseling</p>
                                            <p class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Family therapy</p>
                                            <p class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Group therapy sessions</p>
                                        </div>
                                        <div class="col-md-6">
                                            <p class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>PTSD & trauma treatment</p>
                                            <p class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Psychological testing (ADHD, autism)</p>
                                            <p class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Telehealth therapy sessions</p>
                                            <p class="mb-2"><i class="bi bi-check-circle text-success me-2"></i>Crisis intervention services</p>
                                        </div>
                                    </div>
                                    <p class="mt-3 mb-0"><strong>Important:</strong> Coverage, copays, deductibles, session limits, and authorization requirements can vary by FEP Blue plan. <strong>Call us at <a href="tel:313-654-1915">(313) 654-1915</a> and we can help verify your specific benefits before your first appointment.</strong></p>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-4">Mental Health Services for Federal Employees</h2>

                            <p class="mb-4">We provide specialized mental health services that address the unique challenges federal employees face in their careers and personal lives:</p>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="0">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-lightning-fill text-warning me-2"></i>Work Stress & Burnout</h3>
                                            <p class="small mb-0">High-pressure federal work environments can lead to chronic stress and burnout. We help you develop healthy coping strategies, set boundaries, and restore work-life balance. Covered by FEP Blue.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-bandaid-fill text-danger me-2"></i>PTSD & Trauma Treatment</h3>
                                            <p class="small mb-0">Especially important for CBP officers, federal law enforcement, corrections staff, and first responders. Evidence-based EMDR and trauma-focused therapy to process traumatic experiences safely.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-heart-pulse-fill text-info me-2"></i>Anxiety & Depression</h3>
                                            <p class="small mb-0">Job insecurity, performance pressure, and organizational changes can trigger anxiety and depression. Cognitive Behavioral Therapy (CBT) and other evidence-based approaches provide relief.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-people-fill text-primary me-2"></i>Couples & Family Therapy</h3>
                                            <p class="small mb-0">Shift work, frequent travel, and demanding schedules strain relationships. We help federal employee families improve communication, resolve conflicts, and strengthen bonds. FEP Blue covers couples therapy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-clipboard-data text-success me-2"></i>ADHD & Autism Evaluation</h3>
                                            <p class="small mb-0">Comprehensive psychological testing for adults and children. FEP Blue typically covers diagnostic evaluations with low co-pays. Results can inform accommodations and treatment planning.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h3 class="h5 mb-2"><i class="bi bi-arrow-left-right text-secondary me-2"></i>Career Transitions & Retirement</h3>
                                            <p class="small mb-0">Navigating federal career changes, promotions, transfers, or retirement can be emotionally challenging. We provide support during major life and career transitions.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">Why Federal Employees Choose Healing Therapy Center</h2>

                            <div class="row g-3 mb-4">
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="0">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <p class="mb-2"><i class="bi bi-shield-check text-success me-2"></i><strong>FEP Blue In-Network Provider</strong></p>
                                            <p class="small mb-0">We accept FEP Blue insurance and handle all billing and verification. Coverage details vary by plan - call us to verify your specific benefits.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <p class="mb-2"><i class="bi bi-calendar-check text-primary me-2"></i><strong>Flexible Scheduling for Shift Workers</strong></p>
                                            <p class="small mb-0">Evening and weekend appointments available. We understand irregular federal schedules, especially for USPS, CBP, and law enforcement personnel.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <p class="mb-2"><i class="bi bi-camera-video text-info me-2"></i><strong>Telehealth Options</strong></p>
                                            <p class="small mb-0">Secure online therapy from anywhere in Michigan. Perfect for busy federal employees who can't make it to our Dearborn office. Same quality care, more convenience.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <p class="mb-2"><i class="bi bi-geo-alt-fill text-danger me-2"></i><strong>Convenient to Federal Facilities</strong></p>
                                            <p class="small mb-0">Located in Dearborn, easily accessible from Detroit Federal Building, CBP Port of Entry, USPS facilities, and other federal offices throughout Metro Detroit.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <p class="mb-2"><i class="bi bi-lock-fill text-warning me-2"></i><strong>Complete Confidentiality</strong></p>
                                            <p class="small mb-0">Your sessions are completely confidential. We do not report to your agency or supervisor. HIPAA-compliant privacy protections for federal employees.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <p class="mb-2"><i class="bi bi-award-fill text-success me-2"></i><strong>Specialized Experience</strong></p>
                                            <p class="small mb-0">Our therapists understand federal work culture, security clearance concerns, and the unique stressors of public service careers.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">Federal Facilities & Employees We Serve in Michigan</h2>

                            <p>We proudly serve federal employees working at facilities throughout Southeast Michigan and beyond via telehealth:</p>

                            <div class="alert alert-light border-primary mb-4" data-aos="fade-up">
                                <h3 class="h6 text-primary mb-3"><i class="bi bi-building me-2"></i>Major Federal Facilities We Serve:</h3>
                                <div class="row small">
                                    <div class="col-md-6">
                                        <p class="mb-2"><strong>U.S. Customs and Border Protection (CBP)</strong></p>
                                        <ul class="mb-3">
                                            <li>Detroit-Windsor Port of Entry</li>
                                            <li>Ambassador Bridge</li>
                                            <li>Detroit Metropolitan Airport</li>
                                        </ul>
                                        <p class="mb-2"><strong>U.S. Postal Service (USPS)</strong></p>
                                        <ul class="mb-3">
                                            <li>Detroit Processing & Distribution Center</li>
                                            <li>Dearborn Post Office</li>
                                            <li>All Metro Detroit USPS facilities</li>
                                        </ul>
                                        <p class="mb-2"><strong>Federal Bureau of Investigation (FBI)</strong></p>
                                        <ul class="mb-3">
                                            <li>Detroit Field Office</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-2"><strong>Patrick V. McNamara Federal Building (Detroit)</strong></p>
                                        <ul class="mb-3">
                                            <li>IRS offices</li>
                                            <li>Social Security Administration</li>
                                            <li>Other federal agencies</li>
                                        </ul>
                                        <p class="mb-2"><strong>Veterans Affairs (VA)</strong></p>
                                        <ul class="mb-3">
                                            <li>John D. Dingell VA Medical Center</li>
                                            <li>VA Ann Arbor Healthcare System</li>
                                        </ul>
                                        <p class="mb-2"><strong>Other Federal Agencies</strong></p>
                                        <ul class="mb-0">
                                            <li>Federal courts and judiciary</li>
                                            <li>Department of Defense contractors</li>
                                            <li>All federal civilian employees in Michigan</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <p>Whether you work at the federal building in Detroit, patrol the border at CBP, deliver mail for USPS, serve in law enforcement, or work for any federal agency in Michigan, we're here to support your mental health with professional, confidential therapy services covered by your FEP Blue insurance.</p>

                            <h2 class="mt-5 mb-4">Common Mental Health Challenges for Federal Employees</h2>

                            <p>Federal service comes with unique stressors that can impact mental health and wellbeing. We help federal employees navigate:</p>

                            <div class="card border-0 shadow-sm mb-4" data-aos="fade-up">
                                <div class="card-body">
                                    <div class="row small">
                                        <div class="col-md-6">
                                            <h3 class="h6 mb-2"><i class="bi bi-briefcase-fill text-primary me-2"></i>Work-Related Stress</h3>
                                            <ul class="mb-3">
                                                <li>High-pressure decision-making</li>
                                                <li>Performance evaluations and job security</li>
                                                <li>Bureaucratic frustrations</li>
                                                <li>Heavy workloads and overtime</li>
                                                <li>Public scrutiny and accountability</li>
                                            </ul>

                                            <h3 class="h6 mb-2"><i class="bi bi-shield-fill text-danger me-2"></i>Law Enforcement & Public Safety</h3>
                                            <ul class="mb-3">
                                                <li>Exposure to traumatic incidents</li>
                                                <li>PTSD from critical incidents</li>
                                                <li>Hypervigilance and difficulty relaxing</li>
                                                <li>Moral injury and ethical conflicts</li>
                                                <li>Officer-involved incidents</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <h3 class="h6 mb-2"><i class="bi bi-clock-fill text-warning me-2"></i>Shift Work Challenges</h3>
                                            <ul class="mb-3">
                                                <li>Sleep disturbances and insomnia</li>
                                                <li>Circadian rhythm disruption</li>
                                                <li>Impact on family relationships</li>
                                                <li>Missing important family events</li>
                                                <li>Social isolation</li>
                                            </ul>

                                            <h3 class="h6 mb-2"><i class="bi bi-heart-fill text-info me-2"></i>Personal Life Impact</h3>
                                            <ul class="mb-0">
                                                <li>Marriage and relationship strain</li>
                                                <li>Parenting challenges with irregular schedule</li>
                                                <li>Work-life balance difficulties</li>
                                                <li>Career transition and retirement anxiety</li>
                                                <li>Relocation and family adjustment</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <h2 class="mt-5 mb-3">How FEP Blue Coverage Works for Therapy</h2>

                            <p>Understanding your mental health benefits can feel overwhelming, but we make it simple:</p>

                            <div class="card border-0 shadow-sm mb-4" data-aos="fade-up">
                                <div class="card-body">
                                    <h3 class="h6 mb-3">Step-by-Step: Using Your FEP Blue Benefits</h3>
                                    <ol class="small mb-0">
                                        <li class="mb-3"><strong>Call us at (313) 654-1915</strong> - We'll verify your FEP Blue coverage, explain your copay, deductible, and answer any questions about benefits.</li>
                                        <li class="mb-3"><strong>Verify authorization requirements</strong> - We'll check if your specific FEP Blue plan requires pre-authorization for mental health services and help you with that process if needed.</li>
                                        <li class="mb-3"><strong>Schedule your first appointment</strong> - Choose in-person at our Dearborn office or secure telehealth from anywhere in Michigan.</li>
                                        <li class="mb-3"><strong>Understand your out-of-pocket costs</strong> - We'll explain your copay, coinsurance, or deductible responsibility based on your specific plan before you start.</li>
                                        <li class="mb-0"><strong>We handle all billing</strong> - We submit claims directly to FEP Blue. You don't need to file paperwork or wait for reimbursement.</li>
                                    </ol>
                                </div>
                            </div>

                            <div class="alert alert-info mb-4" data-aos="fade-up">
                                <p class="mb-2"><i class="bi bi-info-circle-fill me-2"></i><strong>What May Be Covered by FEP Blue?</strong></p>
                                <ul class="small mb-0">
                                    <li><strong>Outpatient therapy:</strong> Many FEP Blue plans offer generous session allowances (coverage varies by plan)</li>
                                    <li><strong>Psychological testing:</strong> May be covered for diagnostic purposes (ADHD, autism, etc.)</li>
                                    <li><strong>Telehealth:</strong> Often covered similarly to in-person visits</li>
                                    <li><strong>Family members:</strong> Your dependents on FEP Blue may also have mental health benefits</li>
                                </ul>
                                <p class="small mt-2 mb-0"><strong>Important:</strong> Specific coverage, copays, session limits, and authorization requirements vary by plan. Call us at (313) 654-1915 to verify your benefits.</p>
                            </div>

                            <h2 class="mt-5 mb-3">Frequently Asked Questions - FEP Blue & Federal Employee Therapy</h2>

                            <div class="container" style="max-width: 900px;">
                                <div class="row">
                                    <div class="col-12 mb-3" data-aos="fade-up" data-aos-delay="0">
                                        <div class="card border-0 shadow-sm h-100 faq-card">
                                            <div class="card-body">
                                                <h3 class="h6 card-title text-primary mb-3">
                                                    <i class="bi bi-question-circle-fill me-2"></i>Does FEP Blue cover therapy in Michigan?
                                                </h3>
                                                <p class="card-text text-muted mb-0">Yes! FEP Blue (Blue Cross Blue Shield Federal Employee Program) provides excellent mental health coverage throughout Michigan. Your plan may cover individual therapy, couples therapy, family therapy, and psychological testing. We are an in-network provider. Coverage details including copays, deductibles, session limits, and authorization requirements vary by plan. Call us at (313) 654-1915 to verify your specific benefits. Both in-person and telehealth sessions may be covered.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3" data-aos="fade-up" data-aos-delay="100">
                                        <div class="card border-0 shadow-sm h-100 faq-card">
                                            <div class="card-body">
                                                <h3 class="h6 card-title text-primary mb-3">
                                                    <i class="bi bi-question-circle-fill me-2"></i>Do I need a referral from my primary care doctor?
                                                </h3>
                                                <p class="card-text text-muted mb-0">Many FEP Blue plans do not require a referral for mental health services, though requirements can vary by plan. Call us directly at (313) 654-1915 and we'll verify your specific plan requirements and help you schedule an appointment. We'll check if your plan requires any pre-authorization or referrals before your first visit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3" data-aos="fade-up" data-aos-delay="200">
                                        <div class="card border-0 shadow-sm h-100 faq-card">
                                            <div class="card-body">
                                                <h3 class="h6 card-title text-primary mb-3">
                                                    <i class="bi bi-question-circle-fill me-2"></i>What's my co-pay for therapy sessions?
                                                </h3>
                                                <p class="card-text text-muted mb-0">Your out-of-pocket costs for mental health visits depend on your specific FEP Blue plan (Standard or Basic) and may include copays, coinsurance, or deductibles. Some plans have competitive copays, while others may have different cost-sharing arrangements. Session limits, authorization requirements, and deductibles also vary by plan. Call us at (313) 654-1915 to verify your specific coverage, costs, and benefits before scheduling.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3" data-aos="fade-up" data-aos-delay="300">
                                        <div class="card border-0 shadow-sm h-100 faq-card">
                                            <div class="card-body">
                                                <h3 class="h6 card-title text-primary mb-3">
                                                    <i class="bi bi-question-circle-fill me-2"></i>Is my therapy confidential? Will my employer find out?
                                                </h3>
                                                <p class="card-text text-muted mb-0">Your therapy is completely confidential and protected by HIPAA privacy laws. We do not report to your federal agency, supervisor, or anyone else about your treatment. Your employer will never know you're in therapy unless you choose to tell them. The only information your insurance company receives is basic billing codes - they don't get session notes, diagnoses details, or what you discuss in therapy. Your mental health care is private, and we take confidentiality very seriously.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3" data-aos="fade-up" data-aos-delay="400">
                                        <div class="card border-0 shadow-sm h-100 faq-card">
                                            <div class="card-body">
                                                <h3 class="h6 card-title text-primary mb-3">
                                                    <i class="bi bi-question-circle-fill me-2"></i>Do you offer telehealth for federal employees?
                                                </h3>
                                                <p class="card-text text-muted mb-0">Yes! We offer secure, HIPAA-compliant telehealth therapy for federal employees anywhere in Michigan. This is perfect if you work irregular hours, have a long commute, work from home, or simply prefer the convenience of online sessions. Many FEP Blue plans cover telehealth similarly to in-person visits, though coverage details vary by plan. Call us to verify your telehealth benefits. Many federal employees prefer telehealth because they can attend therapy during lunch breaks or from the privacy of their home.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3" data-aos="fade-up" data-aos-delay="500">
                                        <div class="card border-0 shadow-sm h-100 faq-card">
                                            <div class="card-body">
                                                <h3 class="h6 card-title text-primary mb-3">
                                                    <i class="bi bi-question-circle-fill me-2"></i>Can my spouse or children use FEP Blue for therapy too?
                                                </h3>
                                                <p class="card-text text-muted mb-0">Absolutely! All family members covered under your FEP Blue plan have the same mental health benefits. We provide therapy for adults, teens, and children. We also offer couples therapy and family therapy, which are both covered by FEP Blue. Many federal employee families benefit from therapy to address the unique stressors of shift work, frequent relocations, and the demands of public service careers.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3" data-aos="fade-up" data-aos-delay="600">
                                        <div class="card border-0 shadow-sm h-100 faq-card">
                                            <div class="card-body">
                                                <h3 class="h6 card-title text-primary mb-3">
                                                    <i class="bi bi-question-circle-fill me-2"></i>How do I schedule an appointment?
                                                </h3>
                                                <p class="card-text text-muted mb-0">Scheduling is easy! Call us at (313) 654-1915 or use our online appointment request form. We'll verify your FEP Blue coverage, answer any questions about your benefits, and find a convenient appointment time. We offer flexible scheduling including evenings and weekends to accommodate shift workers. Most federal employees can get an appointment within 1-2 weeks.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3" data-aos="fade-up" data-aos-delay="700">
                                        <div class="card border-0 shadow-sm h-100 faq-card">
                                            <div class="card-body">
                                                <h3 class="h6 card-title text-primary mb-3">
                                                    <i class="bi bi-question-circle-fill me-2"></i>Do you specialize in working with federal employees?
                                                </h3>
                                                <p class="card-text text-muted mb-0">Yes! We have experience working with federal employees from various agencies including USPS, CBP, FBI, VA, and other federal offices. We understand the unique stressors of federal service - shift work sleep issues, security clearance concerns, exposure to traumatic incidents for law enforcement, bureaucratic frustrations, and work-life balance challenges. We also understand FEP Blue benefits thoroughly and can help you maximize your mental health coverage.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="alert alert-light border-info mt-5" data-aos="fade-up">
                                <h3 class="h6 text-info mb-2"><i class="bi bi-map me-2"></i>Serving Federal Employees Throughout Michigan</h3>
                                <p class="small mb-0"><strong>Metro Detroit Federal Facilities:</strong> Detroit Federal Building, CBP Detroit-Windsor Port of Entry, Ambassador Bridge, USPS Detroit, FBI Detroit Field Office, John D. Dingell VA Medical Center • <strong>Telehealth Available:</strong> Serving federal employees anywhere in Michigan including Grand Rapids, Lansing, Ann Arbor, Flint, Kalamazoo, and all Michigan communities • <strong>In-Person:</strong> Dearborn office convenient to all Metro Detroit federal facilities</p>
                            </div>

                            <h2 class="mt-5 mb-3">Ready to Start Therapy with Your FEP Blue Insurance?</h2>

                            <p>You've earned excellent mental health benefits through your federal service - now it's time to use them. Taking care of your mental health makes you a better employee, partner, parent, and person. Our experienced therapists are ready to support you with professional, confidential care.</p>

                            <p><strong>Call us today at <a href="tel:313-654-1915">(313) 654-1915</a></strong> to verify your FEP Blue benefits and schedule your first appointment. We'll handle all the insurance verification and billing so you can focus on what matters - your mental health and wellbeing.</p>

                            <p>Federal employees throughout Michigan trust Healing Therapy Center for compassionate, professional mental health care. Whether you're dealing with work stress, PTSD, relationship issues, anxiety, depression, or simply want support during a challenging time, we're here to help. Your FEP Blue benefits make quality therapy affordable and accessible.</p>

                            <div class="alert alert-primary mt-4" role="alert">
                                <h3 class="alert-heading"><i class="bi bi-telephone-fill me-2"></i>Contact Us - We Accept FEP Blue</h3>
                                <p class="mb-2"><strong>Phone:</strong> <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a></p>
                                <p class="mb-2"><strong>Location:</strong> 22005 Outer Dr W, Dearborn, MI 48124</p>
                                <p class="mb-2"><strong>Hours:</strong> Monday-Friday 9am-7pm, Saturday 9am-2pm</p>
                                <p class="mb-0"><strong>Telehealth:</strong> Available throughout Michigan for federal employees</p>
                            </div>

                            <div class="alert alert-success mt-3" role="alert">
                                <h3 class="alert-heading"><i class="bi bi-check-circle-fill me-2"></i>FEP Blue Insurance Accepted</h3>
                                <p class="mb-0">We accept Blue Cross Blue Shield Federal Employee Program (FEP Blue) insurance for all federal civilian employees. Coverage, copays, deductibles, session limits, and authorization requirements vary by FEP Blue plan. Serving USPS, CBP, FBI, VA, and all federal employees in Michigan. Call <a href="tel:313-654-1915" class="alert-link">(313) 654-1915</a> to verify your specific benefits and schedule an appointment today.</p>
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
