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
                            <a href="tel:+917042944703" class="fw-bold text-dark text-decoration-none">+91 70429 44703</a>
                        </div>
                    </div>
                </div>

                <!-- Volunteer Form Column -->
                <div class="col-lg-7" data-aos="fade-left" data-aos-delay="150">
                    <div class="glass-panel bg-white border shadow-sm p-3 p-md-4 rounded-4">
                        <div class="text-center mb-3">
                            <span class="badge bg-danger bg-opacity-10 text-danger fw-bold px-2.5 py-1 mb-2" style="font-size: 11px;">Join Our Mission</span>
                            <h4 class="fw-bold mb-1 text-dark font-heading">Volunteer Registration Form</h4>
                            <p class="text-muted small mb-0">Please take 2 minutes to fill out this form. All details will be sent directly to our coordination team on WhatsApp.</p>
                        </div>
                        
                        <div id="formFeedback" class="alert alert-success d-none text-center py-2.5 rounded-3 mb-3" role="alert">
                            <i class="fa-solid fa-circle-check fs-4 text-success mb-1 d-block"></i>
                            <h6 class="fw-bold mb-0">Thank You For Applying!</h6>
                            <p class="small mb-0">Your application has been directed to WhatsApp (+91 87005 49755). Our coordinator will connect with you soon.</p>
                        </div>

                        <form id="volunteerForm" onsubmit="submitVolunteerForm(event)">
                            <div class="row g-3">
                                
                                <!-- 1. Full Name -->
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">1. Full Name *</label>
                                    <input type="text" id="vName" class="form-control form-control-custom form-control-sm" placeholder="Your full name" required>
                                </div>

                                <!-- 2. Contact Number -->
                                <div class="col-md-6">
                                    <label class="form-label fw-bold text-dark small mb-1">2. Contact Number *</label>
                                    <input type="tel" id="vPhone" class="form-control form-control-custom form-control-sm" placeholder="10-digit mobile number" required>
                                </div>

                                <!-- 3. From where you got to know about Non Stop Education NGO? -->
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">3. From where you got to know about Non Stop Education NGO? *</label>
                                    <div class="d-flex flex-wrap gap-3 mt-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="vSource" id="srcInsta" value="Instagram" required>
                                            <label class="form-check-label small" for="srcInsta"><i class="fa-brands fa-instagram text-danger me-1"></i> Instagram</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="vSource" id="srcFb" value="Facebook">
                                            <label class="form-check-label small" for="srcFb"><i class="fa-brands fa-facebook text-primary me-1"></i> Facebook</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="vSource" id="srcFriends" value="Friends">
                                            <label class="form-check-label small" for="srcFriends"><i class="fa-solid fa-user-group text-success me-1"></i> Friends</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="vSource" id="srcOther" value="Other">
                                            <label class="form-check-label small" for="srcOther">Other</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 4. Why do you want to be a part of this NGO ? -->
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">4. Why do you want to be a part of this NGO? *</label>
                                    <textarea id="vWhyJoin" class="form-control form-control-custom form-control-sm" rows="2" placeholder="Share your motivation..." required></textarea>
                                </div>

                                <!-- 5. Have you worked with any other NGO ? -->
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">5. Have you worked with any other NGO? If yes, mention name</label>
                                    <input type="text" id="vNgoExp" class="form-control form-control-custom form-control-sm" placeholder="Mention NGO name, or 'No'">
                                </div>

                                <!-- 6. Are you comfortable to teach on Ground Level for minimum 3 months ? -->
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">6. Are you comfortable to teach on Ground Level for minimum 3 months? *</label>
                                    <div class="d-flex gap-4 mt-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="vGroundTeach" id="teachYes" value="Yes" required>
                                            <label class="form-check-label small fw-semibold" for="teachYes">Yes, Comfortable</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="vGroundTeach" id="teachNo" value="No">
                                            <label class="form-check-label small fw-semibold" for="teachNo">No</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 7. Kindly tell us about yourself -->
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">7. Kindly tell us about yourself *</label>
                                    <textarea id="vAboutSelf" class="form-control form-control-custom form-control-sm" rows="2" placeholder="Your education, hobbies, background..." required></textarea>
                                </div>

                                <!-- 8. How can you give your efforts for our society with Non Stop Education ? -->
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">8. How can you give your efforts for our society with Non Stop Education? *</label>
                                    <textarea id="vEfforts" class="form-control form-control-custom form-control-sm" rows="2" placeholder="Your skills, ideas, contributions..." required></textarea>
                                </div>

                                <!-- 9. Want to join us as ? -->
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">9. Want to join us as? *</label>
                                    <div class="d-flex flex-wrap gap-3 mt-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="vRole" id="roleIntern" value="Intern">
                                            <label class="form-check-label small" for="roleIntern">Intern</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="vRole" id="roleTeacher" value="Teacher">
                                            <label class="form-check-label small" for="roleTeacher">Teacher</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="vRole" id="roleVolunteer" value="Volunteer" checked>
                                            <label class="form-check-label small" for="roleVolunteer">Volunteer</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 10. Your possible availability -->
                                <div class="col-12">
                                    <label class="form-label fw-bold text-dark small mb-1">10. Your possible availability *</label>
                                    <div class="d-flex flex-column gap-1.5 mt-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="vAvailability" id="avail3days" value="3 days in a week (Working days)">
                                            <label class="form-check-label small" for="avail3days">3 days in a week (Working days)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="vAvailability" id="avail2days" value="2 days in a week (Sat and Sunday)">
                                            <label class="form-check-label small" for="avail2days">2 days in a week (Sat and Sunday)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="vAvailability" id="avail1day" value="1 day in a week (Any)">
                                            <label class="form-check-label small" for="avail1day">1 day in a week (Any)</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="vAvailability" id="availOther" value="Other">
                                            <label class="form-check-label small" for="availOther">Other availability</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- 11. Optional Donation / Bank Details from Form -->
                                <div class="col-12">
                                    <div class="p-3 bg-light rounded-3 border">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <span class="fw-bold text-dark small"><i class="fa-solid fa-hand-holding-heart text-danger me-1"></i> Support Our Cause (Optional)</span>
                                            <span class="badge bg-danger text-white small" style="font-size: 10px;">Bank / UPI</span>
                                        </div>
                                        <p class="small text-muted mb-2" style="font-size: 11px;">
                                            Kindly make donation as per your convenience only by Bank Transfer and UPI:
                                        </p>
                                        <div class="bg-white p-2.5 rounded-2 border mb-2 small" style="font-size: 11px;">
                                            <div><strong>Name:</strong> NON STOP EDUCATION AND S W F</div>
                                            <div><strong>Bank details:</strong> 50200052915390 (HDFC Bank)</div>
                                            <div><strong>Branch:</strong> EAST JYOTI NAGAR</div>
                                            <div><strong>IFSC:</strong> HDFC0001566</div>
                                            <div><strong>UPI ID:</strong> <span class="font-monospace fw-bold text-primary">manisha23696-2@okhdfcbank</span></div>
                                            <div class="mt-1 pt-1 border-top">
                                                <a href="images/donation_qr.jpg" target="_blank" class="btn btn-outline-danger btn-sm py-0 px-2 fw-semibold" style="font-size: 10px;">
                                                    <i class="fa-solid fa-qrcode me-1"></i> View / Scan UPI QR Code
                                                </a>
                                            </div>
                                        </div>
                                        <label class="form-label small fw-bold text-dark mb-1">Mention Transaction ID (If donated)</label>
                                        <input type="text" id="vTxnId" class="form-control form-control-sm form-control-custom bg-white" placeholder="Enter Transaction ID / UTR">
                                    </div>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-success w-100 py-2.5 fw-bold btn-sm shadow-sm">
                                        <i class="fa-brands fa-whatsapp fs-6 me-1"></i> Submit Volunteer Application to WhatsApp (+91 87005 49755)
                                    </button>
                                    <small class="text-muted d-block text-center mt-1" style="font-size: 11px;">
                                        Submitting will open WhatsApp with your answers pre-filled.
                                    </small>
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

            const name = document.getElementById('vName').value.trim();
            const phone = document.getElementById('vPhone').value.trim();
            
            const srcEl = document.querySelector('input[name=\"vSource\"]:checked');
            const source = srcEl ? srcEl.value : 'Not specified';

            const whyJoin = document.getElementById('vWhyJoin').value.trim();
            const ngoExp = document.getElementById('vNgoExp').value.trim() || 'None';

            const teachEl = document.querySelector('input[name=\"vGroundTeach\"]:checked');
            const groundTeach = teachEl ? teachEl.value : 'Not specified';

            const about = document.getElementById('vAboutSelf').value.trim();
            const efforts = document.getElementById('vEfforts').value.trim();

            const roles = [];
            document.querySelectorAll('input[name=\"vRole\"]:checked').forEach(c => roles.push(c.value));
            const roleStr = roles.length > 0 ? roles.join(', ') : 'Volunteer';

            const avails = [];
            document.querySelectorAll('input[name=\"vAvailability\"]:checked').forEach(c => avails.push(c.value));
            const availStr = avails.length > 0 ? avails.join('; ') : 'Flexible';

            const txnId = document.getElementById('vTxnId').value.trim();

            let msg = `*NEW VOLUNTEER REGISTRATION - NONSTOP EDUCATION NGO*\\n\\n` +
                      `*1. Name:* \${name}\\n` +
                      `*2. Phone:* \${phone}\\n` +
                      `*3. Known From:* \${source}\\n` +
                      `*4. Why Join:* \${whyJoin}\\n` +
                      `*5. Previous NGO Exp:* \${ngoExp}\\n` +
                      `*6. Ground Level Teach (3 Mo):* \${groundTeach}\\n` +
                      `*7. About Candidate:* \${about}\\n` +
                      `*8. Efforts Contribution:* \${efforts}\\n` +
                      `*9. Joining As:* \${roleStr}\\n` +
                      `*10. Availability:* \${availStr}\\n`;
            if (txnId) {
                msg += `*11. Donation Txn ID:* \${txnId}\\n`;
            }
            msg += `\\n(Submitted via Nonstop Education official website)`;

            const feedback = document.getElementById('formFeedback');
            feedback.classList.remove('d-none');
            feedback.scrollIntoView({ behavior: 'smooth', block: 'center' });

            const waUrl = 'https://wa.me/918700549755?text=' + encodeURIComponent(msg);
            window.open(waUrl, '_blank');
        }
    </script>
    ";
    ?>

<?php include 'includes/footer.php'; ?>
