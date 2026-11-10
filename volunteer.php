<?php
$pageTitle = "Volunteer With Us | Non Stop Education & Social Welfare Foundation";
$pageDescription = "Join Non Stop Education as a volunteer. Teach children, assist in slum learning centres, coordinate child welfare drives, or empower women.";
$activePage = "volunteer";
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white position-relative overflow-hidden border-bottom">
        <div class="container position-relative z-1 text-center" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-2">Join Hands With Us</span>
            <h1 class="page-header-title mb-2 font-heading fw-bold">Volunteer <span class="text-danger">With Us</span></h1>
            <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #183B76, #E52F37); border-radius: var(--radius-pill); margin-bottom: 12px;"></div>
            <p class="lead text-muted mx-auto mb-0" style="max-width: 680px; font-size: 1rem; line-height: 1.6;">
                Use your knowledge, passion, and time to teach underprivileged children, support slum communities, and nurture young minds.
            </p>
        </div>
    </header>

    <!-- Volunteer Section -->
    <section class="section-padding bg-canvas position-relative overflow-hidden">
        <div class="container position-relative z-1">
            <div class="row g-4">
                
                <!-- Info Column -->
                <div class="col-lg-5 pe-lg-4" data-aos="fade-right">
                    <span class="eyebrow-tag mb-2">Why Volunteer?</span>
                    <h3 class="mb-3 text-dark font-heading fw-bold">Be The Change A Child Needs</h3>
                    <p class="text-muted mb-3 lh-base small">
                        Our community education and child welfare centers rely on the passion of volunteers. Giving even a few hours a week can transform a child’s entire academic journey and open doors to equal opportunities.
                    </p>

                    <div class="d-flex flex-column gap-2 mb-3 text-start">
                        <div class="d-flex align-items-start gap-2 p-2.5 bg-white rounded-3 shadow-xs border-start border-primary border-4">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; flex-shrink: 0;">
                                <i class="fa-solid fa-chalkboard-user fs-6"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Teach &amp; Mentor Children</h6>
                                <p class="text-muted small mb-0">Teach basic English, Math, Science, and computer literacy at study centres.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-2 p-2.5 bg-white rounded-3 shadow-xs border-start border-success border-4">
                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; flex-shrink: 0;">
                                <i class="fa-solid fa-hands-holding-child fs-6"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Child Welfare &amp; Nutrition Drives</h6>
                                <p class="text-muted small mb-0">Help distribute school kits, textbooks, clothes, and nutritious meals.</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start gap-2 p-2.5 bg-white rounded-3 shadow-xs border-start border-danger border-4">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; flex-shrink: 0;">
                                <i class="fa-solid fa-female fs-6"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Women &amp; Youth Skill Workshops</h6>
                                <p class="text-muted small mb-0">Conduct vocational sessions, digital literacy, and financial awareness.</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2.5 bg-white rounded-3 border d-flex align-items-center gap-2">
                        <i class="fa-solid fa-phone-volume text-danger fs-5"></i>
                        <div>
                            <small class="text-muted fw-bold d-block text-uppercase" style="font-size: 11px;">Direct Volunteer Helpline</small>
                            <a href="tel:+918527225832" class="fw-bold text-dark text-decoration-none">+91 85272 25832</a>
                        </div>
                    </div>
                </div>

                <!-- Volunteer Form Column -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="150">
                    <div class="glass-panel bg-white border shadow-sm p-3 p-md-4 rounded-4">
                        <h4 class="fw-bold mb-1 text-center text-dark font-heading">Volunteer Registration Form</h4>
                        <p class="text-muted small text-center mb-3">Fill in your details below and our team will get in touch with you.</p>
                        
                        <div id="formFeedback" class="alert alert-success d-none text-center py-2 rounded-3 mb-3" role="alert">
                            <i class="fa-solid fa-circle-check fs-5 text-success mb-1 d-block"></i>
                            <h6 class="fw-bold mb-0">Thank You For Applying!</h6>
                            <p class="small mb-0">Our coordinator will connect with you within 24 to 48 hours.</p>
                        </div>

                        <form id="volunteerForm" onsubmit="submitVolunteerForm(event)">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">Full Name *</label>
                                    <input type="text" class="form-control form-control-custom form-control-sm" placeholder="Your full name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">Phone Number *</label>
                                    <input type="tel" class="form-control form-control-custom form-control-sm" placeholder="e.g. 9876543210" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">Email Address</label>
                                    <input type="email" class="form-control form-control-custom form-control-sm" placeholder="you@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">Your City / Location *</label>
                                    <input type="text" class="form-control form-control-custom form-control-sm" placeholder="City or District" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">Preferred Area of Contribution *</label>
                                    <select class="form-select form-control-custom form-select-sm" required>
                                        <option value="" selected disabled>Select an initiative</option>
                                        <option value="teaching">Teaching Children / School Centre Educator</option>
                                        <option value="welfare">Child Welfare, Nutrition &amp; Distribution</option>
                                        <option value="women">Women Vocational Skills &amp; Empowerment</option>
                                        <option value="digital">Youth Digital Literacy &amp; Basic Computers</option>
                                        <option value="awareness">Social Awareness &amp; Community Mobilization</option>
                                        <option value="general">Fundraising &amp; Event Coordination</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">Weekly Time Availability</label>
                                    <select class="form-select form-control-custom form-select-sm">
                                        <option value="2-4">2-4 Hours / Week (Weekends)</option>
                                        <option value="5-10">5-10 Hours / Week</option>
                                        <option value="flexible">Flexible / Project Basis</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">Tell Us About Yourself</label>
                                    <textarea class="form-control form-control-custom form-control-sm" rows="2" placeholder="Tell us about your background or why you'd like to volunteer..."></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-pill btn-pill-accent w-100 py-2 fw-bold btn-sm">
                                        <i class="fa-solid fa-paper-plane me-1"></i> Submit Volunteer Application
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Extra Script for Volunteer Form -->
    <?php
    $extraScripts = "
    <script>
        function submitVolunteerForm(event) {
            event.preventDefault();
            const feedback = document.getElementById('formFeedback');
            const form = document.getElementById('volunteerForm');
            feedback.classList.remove('d-none');
            form.reset();
            form.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    </script>
    ";
    ?>

<?php include 'includes/footer.php'; ?>
