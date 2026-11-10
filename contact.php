<?php
$pageTitle = "Contact Us | Non Stop Education & Social Welfare Foundation";
$pageDescription = "Get in touch with Non Stop Education & Social Welfare Foundation. Call +91 70429 44703, visit our community centres, or send us a message.";
$activePage = "contact";
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white position-relative overflow-hidden border-bottom">
        <div class="container position-relative z-1 text-center" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-2">We Are Here To Help</span>
            <h1 class="page-header-title mb-2 font-heading fw-bold">Contact <span class="text-danger">Us</span></h1>
            <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #183B76, #E52F37); border-radius: var(--radius-pill); margin-bottom: 12px;"></div>
            <p class="lead text-muted mx-auto mb-0" style="max-width: 680px; font-size: 1rem; line-height: 1.6;">
                Have questions about enrolling a child, volunteering, donating, or organizing a workshop? Reach out to our team.
            </p>
        </div>
    </header>

    <!-- Contact Split Section -->
    <section class="section-padding bg-canvas position-relative overflow-hidden">
        <div class="container position-relative z-1">
            <div class="row g-4">
                
                <!-- Contact Info Column -->
                <div class="col-lg-5 pe-lg-4 text-center text-lg-start" data-aos="fade-right">
                    <span class="eyebrow-tag mx-auto mx-lg-0 d-table d-lg-inline-block mb-2">Direct Contact</span>
                    <h3 class="mb-3 text-dark font-heading fw-bold">Get In Touch Directly</h3>
                    <p class="text-muted mb-3 lh-base small">
                        Our coordinators and volunteers are actively serving underprivileged children and slum communities. Feel free to call, email, or message us.
                    </p>

                    <div class="d-flex flex-column gap-2 mb-3 text-start">
                        <!-- Phone / Call -->
                        <div class="d-flex align-items-center gap-2 p-2.5 bg-white rounded-3 shadow-xs border-start border-danger border-4 hover-translate-up transition-transform">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; flex-shrink: 0;">
                                <i class="fa-solid fa-phone-volume fs-6"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Helpline &amp; WhatsApp</h6>
                                <a href="tel:+917042944703" class="text-danger fw-bold text-decoration-none fs-6">+91 70429 44703</a>
                                <small class="text-muted d-block" style="font-size: 11px;">Mon – Sat (9:00 AM – 7:00 PM)</small>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="d-flex align-items-center gap-2 p-2.5 bg-white rounded-3 shadow-xs border-start border-primary border-4 hover-translate-up transition-transform">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; flex-shrink: 0;">
                                <i class="fa-solid fa-envelope fs-6"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Email Support</h6>
                                <a href="mailto:nonstopeducation246@gmail.com" class="text-primary fw-semibold text-decoration-none small">nonstopeducation246@gmail.com</a>
                                <small class="text-muted d-block" style="font-size: 11px;">Response within 24 hours</small>
                            </div>
                        </div>

                        <!-- Organization Type & Registration -->
                        <div class="d-flex align-items-center gap-2 p-2.5 bg-white rounded-3 shadow-xs border-start border-success border-4 hover-translate-up transition-transform">
                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; flex-shrink: 0;">
                                <i class="fa-solid fa-shield-halved fs-6"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Govt. Registered NGO</h6>
                                <small class="text-muted d-block" style="font-size: 11px;">Non Stop Education &amp; Social Welfare Foundation</small>
                            </div>
                        </div>
                    </div>

                    <!-- Instant WhatsApp Action -->
                    <div class="p-2.5 bg-white rounded-3 border d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center gap-2">
                            <i class="fa-brands fa-whatsapp text-success fs-4"></i>
                            <span class="small fw-bold text-dark">Chat on WhatsApp</span>
                        </div>
                        <a href="https://wa.me/918700549755" target="_blank" class="btn btn-sm btn-success rounded-pill px-3 fw-bold py-1" style="font-size: 12px;">
                            Open Chat
                        </a>
                    </div>
                </div>

                <!-- Contact Form Column -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="150">
                    <div class="glass-panel bg-white border shadow-sm p-3 p-md-4 rounded-4">
                        <h4 class="fw-bold mb-1 text-center text-dark font-heading">Send Us A Message</h4>
                        <p class="text-muted small text-center mb-3">Leave your inquiry below and our representative will contact you promptly.</p>
                        
                        <div id="contactFeedback" class="alert alert-success d-none text-center py-2.5 rounded-3 mb-3" role="alert">
                            <i class="fa-solid fa-circle-check fs-4 text-success mb-1 d-block"></i>
                            <h6 class="fw-bold mb-0">Opening WhatsApp...</h6>
                            <p class="small mb-0">Your inquiry is being forwarded directly to our official WhatsApp support (+91 87005 49755).</p>
                        </div>

                        <form id="contactForm" onsubmit="submitContactForm(event)">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">Your Name *</label>
                                    <input type="text" id="cName" class="form-control form-control-custom form-control-sm" placeholder="Full Name" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">Phone Number *</label>
                                    <input type="tel" id="cPhone" class="form-control form-control-custom form-control-sm" placeholder="10-digit mobile number" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">Email Address</label>
                                    <input type="email" id="cEmail" class="form-control form-control-custom form-control-sm" placeholder="name@domain.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">Inquiry Subject *</label>
                                    <select id="cSubject" class="form-select form-control-custom form-select-sm" required>
                                        <option value="" selected disabled>Select Subject</option>
                                        <option value="Child Education / Admission">Child Education / Admission</option>
                                        <option value="Volunteer / Educator">Volunteer / Educator</option>
                                        <option value="Donation / Sponsoring">Donation / Sponsoring</option>
                                        <option value="Women Vocational Training">Women Vocational Training</option>
                                        <option value="Corporate CSR / Partnership">Corporate CSR / Partnership</option>
                                        <option value="Other Inquiry">Other Inquiry</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">Your Message / Query *</label>
                                    <textarea id="cMessage" class="form-control form-control-custom form-control-sm" rows="3" placeholder="How can Non Stop Education assist you today?" required></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-success w-100 py-2.5 fw-bold btn-sm shadow-xs">
                                        <i class="fa-brands fa-whatsapp fs-6 me-1"></i> Send Inquiry to WhatsApp (+91 87005 49755)
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Extra Script for Form Handling -->
    <?php
    $extraScripts = "
    <script>
        function submitContactForm(event) {
            event.preventDefault();
            const name = document.getElementById('cName').value.trim();
            const phone = document.getElementById('cPhone').value.trim();
            const email = document.getElementById('cEmail').value.trim() || 'Not provided';
            const subject = document.getElementById('cSubject').value;
            const message = document.getElementById('cMessage').value.trim();

            let msg = `*NEW CONTACT INQUIRY - NONSTOP EDUCATION NGO*\\n\\n` +
                      `*Name:* \${name}\\n` +
                      `*Phone:* \${phone}\\n` +
                      `*Email:* \${email}\\n` +
                      `*Subject:* \${subject}\\n` +
                      `*Message:* \${message}\\n\\n` +
                      `(Submitted via Nonstop Education official website)`;

            const feedback = document.getElementById('contactFeedback');
            feedback.classList.remove('d-none');
            feedback.scrollIntoView({ behavior: 'smooth', block: 'center' });

            const waUrl = 'https://wa.me/918700549755?text=' + encodeURIComponent(msg);
            window.open(waUrl, '_blank');
        }
    </script>
    ";
    ?>

<?php include 'includes/footer.php'; ?>
