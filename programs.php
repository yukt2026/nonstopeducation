<?php
$pageTitle = "Our Initiatives & Programs | Non Stop Education & Social Welfare Foundation";
$pageDescription = "Discover the grassroots initiatives of Non Stop Education: Free Education & School Centres, Child Welfare, Women Empowerment, and Skill Development.";
$activePage = "programs";
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white border-bottom">
        <div class="container text-center" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-2">Dedicated Interventions</span>
            <h1 class="page-header-title font-heading fw-bold mb-2">Our Initiatives &amp; <span class="text-danger">Programs</span></h1>
            <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #183B76, #E52F37); border-radius: var(--radius-pill); margin-bottom: 12px;"></div>
            <p class="lead text-muted mx-auto mb-0" style="max-width: 680px; font-size: 1rem; line-height: 1.6;">
                Non Stop Education &amp; Social Welfare Foundation is committed to uplifting underprivileged children, slum communities, and government school students through accessible education, child welfare, and women empowerment.
            </p>
        </div>
    </header>

    <!-- Comprehensive Programs Section -->
    <section class="section-padding bg-canvas position-relative">
        <div class="container position-relative z-1">
            
            <!-- Pillar 1: Education & School Centres -->
            <div class="row align-items-center g-4 mb-4 pb-3 border-bottom border-dark border-opacity-10" id="education-centres">
                <div class="col-lg-6 pe-lg-4" data-aos="fade-right">
                    <span class="badge bg-primary text-white py-1 px-2.5 rounded-pill mb-2" style="font-size: 11px; font-weight: 700;">INITIATIVE 01</span>
                    <h3 class="fw-bold mb-2 font-heading text-dark">Education &amp; School Centres</h3>
                    <p class="text-muted small mb-3 lh-base">
                        We establish free community learning centers and study circles directly in slum colonies and rural pockets. We ensure children have a safe, supportive academic space to bridge educational gaps and excel in mainstream schools.
                    </p>
                    
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-3">
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-primary border-3 small">
                            <i class="fa-solid fa-chalkboard-user text-primary"></i>
                            <span class="fw-semibold text-dark">Free Remedial &amp; After-School Tuition</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-primary border-3 small">
                            <i class="fa-solid fa-book-bookmark text-primary"></i>
                            <span class="fw-semibold text-dark">Textbooks, Notebooks &amp; Stationery Kits</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-primary border-3 small">
                            <i class="fa-solid fa-school text-primary"></i>
                            <span class="fw-semibold text-dark">Support for Government School Students to Prevent Dropouts</span>
                        </li>
                    </ul>
                    <div class="d-flex gap-2">
                        <a href="program-education.php" class="btn btn-pill btn-pill-primary btn-sm">
                            Explore Education Centres <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                        <a href="volunteer.php" class="btn btn-pill btn-pill-outline btn-sm">
                            Volunteer to Teach
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <img src="images/education_centre.jpg" class="img-fluid rounded-4 shadow-sm w-100" style="height: 330px; object-fit: cover;" alt="Non Stop Education School Centres">
                </div>
            </div>

            <!-- Pillar 2: Child Welfare & Nutrition -->
            <div class="row align-items-center g-4 mb-4 pb-3 border-bottom border-dark border-opacity-10 flex-lg-row-reverse" id="child-welfare">
                <div class="col-lg-6 ps-lg-4" data-aos="fade-left">
                    <span class="badge bg-success text-white py-1 px-2.5 rounded-pill mb-2" style="font-size: 11px; font-weight: 700;">INITIATIVE 02</span>
                    <h3 class="fw-bold mb-2 font-heading text-dark">Child Welfare &amp; Essential Assistance</h3>
                    <p class="text-muted small mb-3 lh-base">
                        A hungry or unwell child cannot concentrate on learning. Non Stop Education addresses root vulnerabilities by combining educational access with proactive nutrition and healthcare support.
                    </p>
                    
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-3">
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-success border-3 small">
                            <i class="fa-solid fa-apple-whole text-success"></i>
                            <span class="fw-semibold text-dark">Nutritious Refreshments &amp; Meal Drives</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-success border-3 small">
                            <i class="fa-solid fa-shirt text-success"></i>
                            <span class="fw-semibold text-dark">Seasonal Clothing, Uniforms &amp; Footwear</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-success border-3 small">
                            <i class="fa-solid fa-shield-heart text-success"></i>
                            <span class="fw-semibold text-dark">Basic Hygiene, Dental &amp; Health Screening Camps</span>
                        </li>
                    </ul>
                    <div class="d-flex gap-2">
                        <a href="program-child-welfare.php" class="btn btn-pill btn-pill-accent btn-sm">
                            Child Welfare Details <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                        <a href="donate.php" class="btn btn-pill btn-pill-outline btn-sm">
                            Sponsor A Kit
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="150">
                    <img src="images/child_welfare.jpg" class="img-fluid rounded-4 shadow-sm w-100" style="height: 330px; object-fit: cover;" alt="Child Welfare Non Stop Foundation">
                </div>
            </div>

            <!-- Pillar 3: Women Empowerment -->
            <div class="row align-items-center g-4 mb-4 pb-3 border-bottom border-dark border-opacity-10" id="women-empowerment">
                <div class="col-lg-6 pe-lg-4" data-aos="fade-right">
                    <span class="badge bg-danger text-white py-1 px-2.5 rounded-pill mb-2" style="font-size: 11px; font-weight: 700;">INITIATIVE 03</span>
                    <h3 class="fw-bold mb-2 font-heading text-dark">Women Empowerment &amp; Livelihood</h3>
                    <p class="text-muted small mb-3 lh-base">
                        Empowering mothers and young women is the fastest route to uplift vulnerable families. We run practical vocational training programs that enable women to earn dignified incomes.
                    </p>
                    
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-3">
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-danger border-3 small">
                            <i class="fa-solid fa-scissors text-danger"></i>
                            <span class="fw-semibold text-dark">Free Tailoring, Cutting &amp; Stitching Training</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-danger border-3 small">
                            <i class="fa-solid fa-wallet text-danger"></i>
                            <span class="fw-semibold text-dark">Financial Literacy &amp; Banking Assistance</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-danger border-3 small">
                            <i class="fa-solid fa-people-roof text-danger"></i>
                            <span class="fw-semibold text-dark">Women Self-Help Groups &amp; Micro-Livelihoods</span>
                        </li>
                    </ul>
                    <div class="d-flex gap-2">
                        <a href="program-women-empowerment.php" class="btn btn-pill btn-pill-primary btn-sm">
                            Explore Women Programs <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                        <a href="contact.php" class="btn btn-pill btn-pill-outline btn-sm">
                            Call: 85272 25832
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <img src="images/women_empowerment.jpg" class="img-fluid rounded-4 shadow-sm w-100" style="height: 330px; object-fit: cover;" alt="Women Empowerment Non Stop Foundation">
                </div>
            </div>

            <!-- Pillar 4: Skill Development & Social Awareness -->
            <div class="row align-items-center g-4 flex-lg-row-reverse" id="skill-development">
                <div class="col-lg-6 ps-lg-4" data-aos="fade-left">
                    <span class="badge bg-warning text-dark py-1 px-2.5 rounded-pill mb-2" style="font-size: 11px; font-weight: 700;">INITIATIVE 04</span>
                    <h3 class="fw-bold mb-2 font-heading text-dark">Skill Development &amp; Social Awareness</h3>
                    <p class="text-muted small mb-3 lh-base">
                        Equipping youth with digital literacy and organizing community campaigns on social rights, sanitation, environmental sustainability, and child protection.
                    </p>
                    
                    <ul class="list-unstyled d-flex flex-column gap-2 mb-3">
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-warning border-3 small">
                            <i class="fa-solid fa-laptop text-dark"></i>
                            <span class="fw-semibold text-dark">Youth Digital Literacy &amp; Basic Computing</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-warning border-3 small">
                            <i class="fa-solid fa-bullhorn text-dark"></i>
                            <span class="fw-semibold text-dark">Community Awareness on Child Rights &amp; Education</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 bg-white p-2.5 rounded-3 shadow-xs border-start border-warning border-3 small">
                            <i class="fa-solid fa-leaf text-dark"></i>
                            <span class="fw-semibold text-dark">Hygiene, Cleanliness &amp; Sustainable Living Workshops</span>
                        </li>
                    </ul>
                    <div class="d-flex gap-2">
                        <a href="program-skill-development.php" class="btn btn-pill btn-pill-accent btn-sm">
                            Skill Programs Details <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>
                        <a href="volunteer.php" class="btn btn-pill btn-pill-outline btn-sm">
                            Conduct A Workshop
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="150">
                    <img src="images/hero_education_nonstop.jpg" class="img-fluid rounded-4 shadow-sm w-100" style="height: 330px; object-fit: cover;" alt="Skill Development Non Stop Foundation">
                </div>
            </div>

        </div>
    </section>

    <!-- Support CTA -->
    <section class="py-4 bg-white border-top text-center">
        <div class="container py-2">
            <h3 class="fw-bold font-heading mb-2 text-dark">Have Questions Or Want To Support Our Centres?</h3>
            <p class="text-muted mx-auto mb-3 small" style="max-width: 600px;">
                Call us directly at <strong>+91 85272 25832</strong> or reach out to explore how you can sponsor students or volunteer.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-2">
                <a href="tel:+918527225832" class="btn btn-pill btn-pill-accent btn-md">
                    <i class="fa-solid fa-phone me-1"></i> Call: +91 85272 25832
                </a>
                <a href="donate.php" class="btn btn-pill btn-pill-primary btn-md">
                    <i class="fa-solid fa-heart me-1"></i> Support Our Programs
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
