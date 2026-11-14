<?php
$pageTitle = "Non Stop Education & Social Welfare Foundation | Nurturing Minds, Empowering Lives";
$pageDescription = "Non Stop Education & Social Welfare Foundation is a non-profit organization dedicated to creating a positive social impact through education, child welfare, women empowerment, and community development.";
$activePage = "home";
include 'includes/header.php';
?>

    <!-- Hero Banner Slider Section -->
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <!-- Slide 1: Education For Every Child -->
            <div class="carousel-item active">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.55), rgba(15, 23, 42, 0.65)), url('images/real_activity_1.jpg');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-9 text-center" data-aos="fade-up" data-aos-duration="800">
                            <span class="badge bg-danger text-white rounded-pill px-3 py-1 mb-2 fw-bold text-uppercase fs-7 tracking-wider">
                                <i class="fa-solid fa-graduation-cap me-1"></i> Quality Education For All
                            </span>
                            <h1 class="display-5 text-white fw-bold mb-3 font-heading"><span class="d-block fs-3 text-warning mb-1">Non Stop Education &amp; Social Welfare Foundation</span>Empowering Underprivileged Children Through Education</h1>
                            <p class="lead text-light-50 mb-3 text-shadow-sm fs-6">
                                Ensuring that every child, regardless of social or economic background, has access to quality education, equal opportunities, and a brighter future.
                            </p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <a href="donate.php" class="btn btn-pill btn-pill-accent btn-md"><i class="fa-solid fa-heart me-1"></i> Support A Child</a>
                                <a href="about.php" class="btn btn-pill btn-pill-outline-light btn-md"><i class="fa-solid fa-circle-info me-1"></i> Discover Our Mission</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 2: Education & School Centres -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.55), rgba(15, 23, 42, 0.65)), url('images/seminar_smart_class.jpg');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-9 text-center">
                            <span class="badge bg-primary text-white rounded-pill px-3 py-1 mb-2 fw-bold text-uppercase fs-7 tracking-wider">
                                <i class="fa-solid fa-school me-1"></i> Smart Classrooms &amp; Learning Centres
                            </span>
                            <h2 class="display-5 text-white fw-bold mb-3 font-heading">Nurturing Young Minds In Slums &amp; Govt. Schools</h2>
                            <p class="lead text-light-50 mb-3 text-shadow-sm fs-6">
                                Free digital smart classroom sessions, foundational literacy, and essential academic assistance to children.
                            </p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <a href="program-education.php" class="btn btn-pill btn-pill-accent btn-md"><i class="fa-solid fa-book-open me-1"></i> Our School Centres</a>
                                <a href="volunteer.php" class="btn btn-pill btn-pill-outline-light btn-md"><i class="fa-solid fa-handshake-angle me-1"></i> Become A Volunteer</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 3: Child Welfare -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.55), rgba(15, 23, 42, 0.65)), url('images/real_activity_4.jpg');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-9 text-center">
                            <span class="badge bg-success text-white rounded-pill px-3 py-1 mb-2 fw-bold text-uppercase fs-7 tracking-wider">
                                <i class="fa-solid fa-child-reaching me-1"></i> Child Welfare &amp; Nutrition
                            </span>
                            <h2 class="display-5 text-white fw-bold mb-3 font-heading">Holistic Care, Health &amp; Essential Assistance</h2>
                            <p class="lead text-light-50 mb-3 text-shadow-sm fs-6">
                                Nutrition drives, school kits, hygiene awareness, and essential support to build healthy, empowered lives.
                            </p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <a href="program-child-welfare.php" class="btn btn-pill btn-pill-accent btn-md"><i class="fa-solid fa-apple-whole me-1"></i> Child Welfare Programs</a>
                                <a href="donate.php" class="btn btn-pill btn-pill-outline-light btn-md"><i class="fa-solid fa-hand-holding-dollar me-1"></i> Donate Essentials</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Slide 4: Women Empowerment & POSH Training -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.55), rgba(15, 23, 42, 0.65)), url('images/seminar_college_auditorium.jpg');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-9 text-center">
                            <span class="badge bg-danger text-white rounded-pill px-3 py-1 mb-2 fw-bold text-uppercase fs-7 tracking-wider">
                                <i class="fa-solid fa-shield-halved me-1"></i> Women Rights, POSH &amp; Safety
                            </span>
                            <h2 class="display-5 text-white fw-bold mb-3 font-heading">Empowering Women, Ensuring Safety in Colleges &amp; Communities</h2>
                            <p class="lead text-light-50 mb-3 text-shadow-sm fs-6">
                                Free POSH Act awareness, women's legal rights seminars in universities, and digital marketing scholarships for girl students.
                            </p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <a href="images/NonStopEducation_Brochure.pdf" target="_blank" class="btn btn-pill btn-pill-accent btn-md"><i class="fa-solid fa-file-pdf me-1"></i> Download Brochure</a>
                                <a href="program-women-empowerment.php" class="btn btn-pill btn-pill-outline-light btn-md"><i class="fa-solid fa-graduation-cap me-1"></i> Women Initiatives</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Prev & Next Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Credibility & Trust Bar -->
    <section class="py-3 bg-white border-bottom shadow-xs">
        <div class="container">
            <div class="row g-3 align-items-center justify-content-center text-center">
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                            <i class="fa-solid fa-certificate fs-5"></i>
                        </div>
                        <div class="text-start">
                            <h6 class="mb-0 fw-bold small text-dark">GOVT. REGD. NGO</h6>
                            <small class="text-muted" style="font-size:11px;">Social Welfare Trust</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div class="bg-danger bg-opacity-10 text-danger rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                            <i class="fa-solid fa-school-flag fs-5"></i>
                        </div>
                        <div class="text-start">
                            <h6 class="mb-0 fw-bold small text-dark">FREE EDUCATION</h6>
                            <small class="text-muted" style="font-size:11px;">Slum &amp; Rural Centres</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div class="bg-success bg-opacity-10 text-success rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                            <i class="fa-solid fa-hands-holding-child fs-5"></i>
                        </div>
                        <div class="text-start">
                            <h6 class="mb-0 fw-bold small text-dark">CHILD WELFARE</h6>
                            <small class="text-muted" style="font-size:11px;">Nutrition &amp; Kits</small>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="d-flex align-items-center justify-content-center gap-2">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">
                            <i class="fa-solid fa-phone-volume fs-5"></i>
                        </div>
                        <div class="text-start">
                            <h6 class="mb-0 fw-bold small text-dark">DIRECT SUPPORT</h6>
                            <small class="text-muted" style="font-size:11px;">+91 70429 44703</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section-padding bg-canvas position-relative overflow-hidden">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 pe-lg-4 text-center text-lg-start" data-aos="fade-right">
                    <span class="eyebrow-tag mx-auto mx-lg-0 d-table d-lg-inline-block mb-2">About Non Stop Education</span>
                    <h2 class="mb-3 text-dark lh-sm font-heading fw-bold">
                        Non Stop Education &amp; <span class="text-primary">Social Welfare Foundation</span>
                    </h2>
                    
                    <div class="p-3 bg-white rounded-3 border-start border-danger border-4 shadow-xs mb-3 text-start">
                        <p class="mb-0 text-dark fw-semibold" style="line-height: 1.5; font-size: 0.95rem;">
                            "Together, we believe in making a difference, one child, one family, and one community at a time."
                        </p>
                    </div>
                    
                    <p class="text-muted mb-2 lh-base text-start" style="font-size: 0.95rem;">
                        <strong>Non Stop Education &amp; Social Welfare Foundation</strong> is a non-profit organization dedicated to creating a positive social impact through education, empowerment, and community development. Our mission is to ensure that every child, regardless of their social or economic background, has access to quality education, equal opportunities, and a brighter future.
                    </p>
                    
                    <p class="text-muted mb-3 lh-base text-start" style="font-size: 0.95rem;">
                        We work closely with underprivileged children, slum communities, and government school students to provide educational support, learning resources, skill development, and essential assistance. Beyond education, we actively work towards women empowerment, child welfare, social awareness, community engagement, and sustainable development.
                    </p>
                    
                    <div class="d-flex flex-wrap gap-2 mt-3 justify-content-center justify-content-lg-start">
                        <a href="about.php" class="btn btn-pill btn-pill-primary">
                            <i class="fa-solid fa-arrow-right me-1"></i> Read Full Story
                        </a>
                        <a href="tel:+917042944703" class="btn btn-pill btn-pill-outline">
                            <i class="fa-solid fa-phone me-1"></i> Call: 70429 44703
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="position-relative">
                        <img src="images/real_activity_2.jpg" class="img-fluid w-100 rounded-4 shadow-sm" style="height: 360px; object-fit: cover;" alt="Nonstop Education Learning Centre & Welfare">
                        <div class="glass-badge position-absolute bottom-0 start-0 m-3 p-2 px-3 d-flex align-items-center gap-2 border-radius-md bg-white shadow-sm" style="border-radius: var(--radius-md);">
                            <div class="bg-danger rounded-circle d-flex align-items-center justify-content-center text-white" style="width: 36px; height: 36px; flex-shrink: 0;">
                                <i class="fa-solid fa-heart fs-6"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold text-dark mb-0">100% Non-Profit</h6>
                                <small class="text-muted fw-semibold" style="font-size: 11px;">Dedicated to Children &amp; Welfare</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Cards Section -->
    <section class="section-padding bg-dark text-white position-relative overflow-hidden" id="vision-mission">
        <div class="container position-relative z-1">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="eyebrow-tag bg-white bg-opacity-10 text-white border-0 mx-auto d-table mb-2">Our Guiding Light</span>
                <h2 class="fw-bold text-white font-heading">Vision &amp; Mission</h2>
                <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #E52F37, #183B76); border-radius: var(--radius-pill); margin-top: 10px;"></div>
            </div>
            
            <div class="row g-3 justify-content-center">
                <!-- Vision -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="glass-panel-dark text-white h-100 p-3 p-md-4 d-flex flex-column align-items-start border-top border-danger border-3">
                        <div class="icon-box bg-danger text-white mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="fa-solid fa-eye fs-4"></i>
                        </div>
                        <h4 class="mb-2 text-white fw-bold font-heading">Our Vision</h4>
                        <p class="text-white-50 fs-6 lh-base mb-3">
                            "A society where every individual has equal opportunities to learn, grow, and succeed."
                        </p>
                        <ul class="list-unstyled d-flex flex-column gap-1 text-white-50 small mt-auto mb-0">
                            <li><i class="fa-solid fa-check text-success me-2"></i> Inclusive education free of economic barriers</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> Dignified livelihood and equal opportunities</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> Empowered slum and rural youth</li>
                        </ul>
                    </div>
                </div>
                <!-- Mission -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                    <div class="glass-panel-dark text-white h-100 p-3 p-md-4 d-flex flex-column align-items-start border-top border-primary border-3">
                        <div class="icon-box bg-primary text-white mb-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 48px; height: 48px;">
                            <i class="fa-solid fa-bullseye fs-4"></i>
                        </div>
                        <h4 class="mb-2 text-white fw-bold font-heading">Our Mission</h4>
                        <p class="text-white-50 fs-6 lh-base mb-3">
                            "To make education accessible to all and build an empowered, educated, and socially responsible society."
                        </p>
                        <ul class="list-unstyled d-flex flex-column gap-1 text-white-50 small mt-auto mb-0">
                            <li><i class="fa-solid fa-check text-success me-2"></i> Comprehensive learning centres for slum children</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> Community welfare, nutrition, and child protection</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> Women vocational skill training and empowerment</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Leadership & Founders Spotlight -->
    <section class="section-padding bg-canvas border-top border-bottom position-relative overflow-hidden" id="leadership">
        <div class="container position-relative z-1">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table mb-2">Visionary Leadership</span>
                <h2 class="fw-bold font-heading text-dark">Meet The Founders</h2>
                <p class="text-muted mx-auto mt-2" style="max-width: 600px;">
                    Dedicated grassroots changemakers leading the mission to educate every child and empower every family.
                </p>
                <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #183B76, #E52F37); border-radius: var(--radius-pill); margin-top: 10px;"></div>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Founder: Manisha -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="founder-card h-100 rounded-4 overflow-hidden shadow-sm border p-4 text-center d-flex flex-column align-items-center">
                        <div class="founder-photo-wrap mb-3">
                            <img src="images/founder_manisha.png" alt="Manisha - Founder" class="founder-cutout-img">
                        </div>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-bold mb-2" style="font-size: 0.8rem; letter-spacing: 0.5px;">FOUNDER &amp; POSH/POCSO TRAINER</span>
                        <h3 class="fw-bold font-heading text-dark mb-1">Manisha</h3>
                        <p class="text-muted small mb-2 fw-semibold">Founder &amp; POSH / POCSO Awareness Trainer</p>
                        <p class="text-muted small lh-base mb-3 px-2">
                            "Dedicated to empowering underprivileged children and communities through education and social welfare, alongside conducting awareness sessions on workplace safety, child protection, legal rights, and gender sensitivity."
                        </p>
                        <div class="mt-auto pt-2">
                            <a href="https://www.instagram.com/nonstop_education?obrf=MXJzMHY1aWM0Mmg3Yg%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5 fw-semibold">
                                <i class="fa-brands fa-instagram me-1"></i> Connect on Instagram
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Co-Founder: Versha -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="founder-card h-100 rounded-4 overflow-hidden shadow-sm border p-4 text-center d-flex flex-column align-items-center">
                        <div class="founder-photo-wrap mb-3">
                            <img src="images/cofounder_versha.png" alt="Versha - Co-Founder" class="founder-cutout-img">
                        </div>
                        <span class="badge bg-danger bg-opacity-10 text-danger px-3 py-1.5 rounded-pill fw-bold mb-2" style="font-size: 0.8rem; letter-spacing: 0.5px;">CO-FOUNDER</span>
                        <h3 class="fw-bold font-heading text-dark mb-1">Versha</h3>
                        <p class="text-muted small mb-2">Co-Founder &amp; Program Director</p>
                        <p class="text-muted small lh-base mb-3 px-2">
                            "Grassroots empathy combined with continuous action creates lasting social change. We are dedicated to child welfare, education, and women empowerment."
                        </p>
                        <div class="mt-auto pt-2">
                            <a href="https://www.instagram.com/nonstop_education?obrf=MXJzMHY1aWM0Mmg3Yg%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5 fw-semibold">
                                <i class="fa-brands fa-instagram me-1"></i> Connect on Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Key Pillars Row -->
            <div class="row g-4 justify-content-center mt-2">
                <!-- Ankit (Project Manager) -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="founder-card h-100 rounded-4 overflow-hidden shadow-sm border p-4 text-center d-flex flex-column align-items-center">
                        <div class="founder-photo-wrap mb-3">
                            <img src="images/team_ankit.png?v=2" alt="Ankit - Inside/Outside Project Manager" class="founder-cutout-img">
                        </div>
                        <span class="badge bg-success bg-opacity-10 text-success px-3 py-1 rounded-pill fw-bold mb-2" style="font-size: 0.76rem; letter-spacing: 0.5px;">PROJECT MANAGEMENT</span>
                        <h4 class="fw-bold font-heading text-dark mb-1 fs-5">Ankit</h4>
                        <p class="text-muted small mb-2 fw-semibold">Inside/Outside Project Manager</p>
                        <p class="text-muted small lh-base mb-0 px-2">
                            Executing on-ground learning centre logistics, community coordination, and internal operations.
                        </p>
                    </div>
                </div>

                <!-- Adv. Shubham Thakur (Legal Advisor) -->
                <div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="founder-card h-100 rounded-4 overflow-hidden shadow-sm border p-4 text-center d-flex flex-column align-items-center">
                        <div class="founder-photo-wrap mb-3">
                            <img src="images/team_adv_shubham_thakur.png" alt="Adv. Shubham Thakur - Legal Advisor" class="founder-cutout-img">
                        </div>
                        <span class="badge bg-dark bg-opacity-10 text-dark px-3 py-1 rounded-pill fw-bold mb-2" style="font-size: 0.76rem; letter-spacing: 0.5px;">LEGAL ADVISOR</span>
                        <h4 class="fw-bold font-heading text-dark mb-1 fs-5">Adv. Shubham Thakur</h4>
                        <p class="text-muted small mb-2 fw-semibold">Legal Advisor</p>
                        <p class="text-muted small lh-base mb-0 px-2">
                            Guiding legal compliance, statutory governance, and human rights advocacy for our welfare projects.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Volunteers Highlight Line -->
            <div class="row justify-content-center mt-4 pt-2">
                <div class="col-auto text-center" data-aos="fade-up">
                    <div class="d-inline-flex align-items-center justify-content-center bg-white border border-2 border-danger border-opacity-25 rounded-pill px-4 py-2.5 shadow-sm">
                        <i class="fa-solid fa-users text-danger fs-5 me-2.5"></i>
                        <span class="fw-bold text-dark fs-6">with a team of Having 100+ volunteers in the team</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Initiatives & Programs Section -->
    <section class="section-padding bg-white position-relative" id="programs">
        <div class="container">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table mb-2">Our Core Initiatives</span>
                <h2 class="fw-bold font-heading text-dark">Programs Making A Real Impact</h2>
                <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #183B76, #E52F37); border-radius: var(--radius-pill); margin-top: 10px;"></div>
            </div>

            <div class="row g-3">
                <!-- Program 1: Education & School Centres -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden transition-all hover-translate-up">
                        <div class="position-relative" style="height: 160px;">
                            <img src="images/real_activity_1.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Education and School Centres">
                            <span class="badge bg-primary position-absolute top-0 end-0 m-2 rounded-pill px-2 py-1" style="font-size: 11px;">Education</span>
                        </div>
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold mb-2 text-dark">Education &amp; School Centres</h5>
                            <p class="text-muted small mb-3 lh-base flex-grow-1">
                                Free community learning centres, remedial classes, school supplies, and digital literacy for slum students.
                            </p>
                            <a href="program-education.php" class="fw-bold text-primary text-decoration-none small mt-auto">
                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Program 2: Child Welfare -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden transition-all hover-translate-up">
                        <div class="position-relative" style="height: 160px;">
                            <img src="images/real_activity_4.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Child Welfare & Nutrition">
                            <span class="badge bg-success position-absolute top-0 end-0 m-2 rounded-pill px-2 py-1" style="font-size: 11px;">Welfare</span>
                        </div>
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold mb-2 text-dark">Child Welfare &amp; Nutrition</h5>
                            <p class="text-muted small mb-3 lh-base flex-grow-1">
                                Nutritious meals, health checkups, clothing, stationery kits, and safe, nurturing environments.
                            </p>
                            <a href="program-child-welfare.php" class="fw-bold text-success text-decoration-none small mt-auto">
                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Program 3: Women Empowerment -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden transition-all hover-translate-up">
                        <div class="position-relative" style="height: 160px;">
                            <img src="images/real_activity_5.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Women Empowerment">
                            <span class="badge bg-danger position-absolute top-0 end-0 m-2 rounded-pill px-2 py-1" style="font-size: 11px;">Empowerment</span>
                        </div>
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold mb-2 text-dark">Women Empowerment</h5>
                            <p class="text-muted small mb-3 lh-base flex-grow-1">
                                Vocational skills in sewing, handicrafts, financial literacy, and self-help groups for financial independence.
                            </p>
                            <a href="program-women-empowerment.php" class="fw-bold text-danger text-decoration-none small mt-auto">
                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Program 4: Skill Development & Awareness -->
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="250">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden transition-all hover-translate-up">
                        <div class="position-relative" style="height: 160px;">
                            <img src="images/real_activity_3.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Skill Development & Community">
                            <span class="badge bg-warning text-dark position-absolute top-0 end-0 m-2 rounded-pill px-2 py-1" style="font-size: 11px;">Community</span>
                        </div>
                        <div class="p-3 d-flex flex-column flex-grow-1">
                            <h5 class="fw-bold mb-2 text-dark">Skill &amp; Social Awareness</h5>
                            <p class="text-muted small mb-3 lh-base flex-grow-1">
                                Community workshops, digital skills for youth, hygiene drives, and civic awareness in slum clusters.
                            </p>
                            <a href="program-skill-development.php" class="fw-bold text-dark text-decoration-none small mt-auto">
                                Learn More <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-3">
                <a href="programs.php" class="btn btn-pill btn-pill-outline btn-sm">
                    View All Initiatives &amp; Program Details <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- POSH & POCSO Awareness Training Program Section -->
    <section class="section-padding bg-white border-top border-bottom position-relative overflow-hidden" id="posh-pocso">
        <div class="container position-relative z-1">
            <div class="text-center mb-4" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table mb-2">Institutional Safety &amp; Rights Advocacy</span>
                <h2 class="fw-bold font-heading text-dark">POSH &amp; POCSO Awareness Training Program</h2>
                <p class="text-muted mx-auto mt-2" style="max-width: 680px;">
                    Dedicated awareness sessions on workplace safety, child protection, legal rights, personal safety, and gender sensitivity across colleges, schools, and organizations.
                </p>
                <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #183B76, #E52F37); border-radius: var(--radius-pill); margin-top: 10px;"></div>
            </div>

            <div class="row g-4 align-items-center">
                <!-- Left: Founder Trainer Profile & Statement -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="glass-panel bg-canvas p-4 rounded-4 border shadow-sm position-relative overflow-hidden">
                        <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
                            <div class="rounded-circle overflow-hidden shadow-xs border border-2 border-danger flex-shrink-0" style="width: 72px; height: 72px;">
                                <img src="images/seminar_speaker_close.jpg" alt="Manisha - POSH and POCSO Awareness Trainer" class="w-100 h-100" style="object-fit: cover;">
                            </div>
                            <div>
                                <span class="badge bg-danger bg-opacity-10 text-danger rounded-pill fw-bold px-2 py-0.5 small mb-1" style="font-size: 10px; letter-spacing: 0.5px;">TRAINER &amp; FOUNDER</span>
                                <h4 class="fw-bold font-heading text-dark mb-0 fs-5">Manisha</h4>
                                <p class="text-muted small mb-0 fw-semibold">Founder, NSE &amp; Certified POSH / POCSO Trainer</p>
                            </div>
                        </div>

                        <div class="position-relative ps-3 border-start border-3 border-danger mb-3">
                            <p class="text-dark small lh-base mb-2 fst-italic">
                                "I am the Founder of Non Stop Education &amp; Social Welfare Foundation (NSE), dedicated to empowering underprivileged children and communities through education, awareness, and social welfare initiatives."
                            </p>
                            <p class="text-dark small lh-base mb-2 fst-italic">
                                "Alongside my NGO leadership, I work as a POSH and POCSO Awareness Trainer, conducting awareness sessions on workplace safety, child protection, legal rights, personal safety, and gender sensitivity."
                            </p>
                            <p class="text-dark small lh-base mb-0 fw-semibold text-danger">
                                "My vision is to create an educated, empowered, and safer society where every individual, especially women and children, feels protected, respected, and confident."
                            </p>
                        </div>

                        <div class="d-flex flex-wrap gap-2 pt-2">
                            <a href="https://wa.me/918700549755?text=Hello%20Manisha%20Ji%2C%20we%20would%20like%20to%20invite%20you%20for%20a%20POSH%2FPOCSO%20Awareness%20Training%20Session." target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-success rounded-pill px-3 py-1.5 fw-semibold shadow-xs">
                                <i class="fa-brands fa-whatsapp me-1"></i> Book Training Session
                            </a>
                            <a href="images/NonStopEducation_Brochure.pdf" target="_blank" class="btn btn-sm btn-outline-danger rounded-pill px-3 py-1.5 fw-semibold">
                                <i class="fa-solid fa-file-pdf me-1"></i> View POSH Brochure
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Program Pillars & Seminar Photos -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="row g-3 mb-3">
                        <!-- Card 1: Workplace Safety (POSH) -->
                        <div class="col-sm-6">
                            <div class="bg-canvas p-3 rounded-3 border h-100 shadow-xs">
                                <div class="d-flex align-items-center gap-2 mb-1.5">
                                    <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="fa-solid fa-building-shield fs-6"></i>
                                    </div>
                                    <h6 class="fw-bold mb-0 text-dark">Workplace Safety &amp; POSH</h6>
                                </div>
                                <p class="text-muted small mb-0 lh-base" style="font-size: 12px;">
                                    College, university &amp; corporate compliance, understanding the POSH Act 2013, Internal Complaints Committee (ICC) functions, and zero-tolerance frameworks.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2: Child Protection (POCSO) -->
                        <div class="col-sm-6">
                            <div class="bg-canvas p-3 rounded-3 border h-100 shadow-xs">
                                <div class="d-flex align-items-center gap-2 mb-1.5">
                                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="fa-solid fa-child-shield fs-6"></i>
                                    </div>
                                    <h6 class="fw-bold mb-0 text-dark">Child Protection (POCSO)</h6>
                                </div>
                                <p class="text-muted small mb-0 lh-base" style="font-size: 12px;">
                                    POCSO Act awareness in schools, safeguarding juveniles, personal boundary education ("Safe &amp; Unsafe Touch"), and mandatory reporting protocols.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3: Legal Rights & Personal Safety -->
                        <div class="col-sm-6">
                            <div class="bg-canvas p-3 rounded-3 border h-100 shadow-xs">
                                <div class="d-flex align-items-center gap-2 mb-1.5">
                                    <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="fa-solid fa-scale-balanced fs-6"></i>
                                    </div>
                                    <h6 class="fw-bold mb-0 text-dark">Legal Rights &amp; Victim Support</h6>
                                </div>
                                <p class="text-muted small mb-0 lh-base" style="font-size: 12px;">
                                    Constitutional protections, reporting without fear or stigma, legal remedies, emergency helplines, and direct victim counseling assistance.
                                </p>
                            </div>
                        </div>

                        <!-- Card 4: Gender Sensitivity & Respect -->
                        <div class="col-sm-6">
                            <div class="bg-canvas p-3 rounded-3 border h-100 shadow-xs">
                                <div class="d-flex align-items-center gap-2 mb-1.5">
                                    <div class="bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                        <i class="fa-solid fa-heart-circle-check fs-6"></i>
                                    </div>
                                    <h6 class="fw-bold mb-0 text-dark">Gender Sensitivity &amp; Culture</h6>
                                </div>
                                <p class="text-muted small mb-0 lh-base" style="font-size: 12px;">
                                    Interactive campus role-plays, dismantling gender bias, bystander intervention strategies, and cultivating mutual respect across all spaces.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Visual Proof Strip: Real Seminar Photos -->
                    <div class="row g-2">
                        <div class="col-4">
                            <div class="rounded-3 overflow-hidden shadow-xs border" style="height: 110px;">
                                <img src="images/seminar_posh_act.jpg" class="w-100 h-100" style="object-fit: cover;" alt="POSH Act Seminar">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="rounded-3 overflow-hidden shadow-xs border" style="height: 110px;">
                                <img src="images/seminar_dignitaries_police.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Delhi Police Joint Workshop">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="rounded-3 overflow-hidden shadow-xs border" style="height: 110px;">
                                <img src="images/seminar_college_auditorium.jpg" class="w-100 h-100" style="object-fit: cover;" alt="College Auditorium Students">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Impact Stats Section -->
    <section class="section-padding bg-canvas border-top border-bottom position-relative" id="impact">
        <div class="container">
            <div class="text-center mb-3" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table mb-2">Our Footprint</span>
                <h2 class="fw-bold font-heading text-dark">Our Impact In Numbers</h2>
            </div>

            <div class="row g-3 text-center">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-3 bg-white rounded-3 shadow-xs border-bottom border-primary border-3 h-100 transition-all hover-translate-up">
                        <div class="bg-primary bg-opacity-10 text-primary rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-user-graduate fs-5"></i>
                        </div>
                        <h3 class="display-6 fw-bold text-primary mb-0">1,200+</h3>
                        <p class="text-dark fw-semibold small mb-0">Children Enrolled</p>
                        <small class="text-muted" style="font-size: 11px;">Underprivileged Students</small>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="p-3 bg-white rounded-3 shadow-xs border-bottom border-danger border-3 h-100 transition-all hover-translate-up">
                        <div class="bg-danger bg-opacity-10 text-danger rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-school fs-5"></i>
                        </div>
                        <h3 class="display-6 fw-bold text-danger mb-0">15+</h3>
                        <p class="text-dark fw-semibold small mb-0">Learning Centres</p>
                        <small class="text-muted" style="font-size: 11px;">Active Study Hubs</small>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-3 bg-white rounded-3 shadow-xs border-bottom border-success border-3 h-100 transition-all hover-translate-up">
                        <div class="bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-person-dress fs-5"></i>
                        </div>
                        <h3 class="display-6 fw-bold text-success mb-0">850+</h3>
                        <p class="text-dark fw-semibold small mb-0">Women Empowered</p>
                        <small class="text-muted" style="font-size: 11px;">Vocational Skills</small>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="250">
                    <div class="p-3 bg-white rounded-3 shadow-xs border-bottom border-warning border-3 h-100 transition-all hover-translate-up">
                        <div class="bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px;">
                            <i class="fa-solid fa-handshake-angle fs-5"></i>
                        </div>
                        <h3 class="display-6 fw-bold text-dark mb-0">250+</h3>
                        <p class="text-dark fw-semibold small mb-0">Active Volunteers</p>
                        <small class="text-muted" style="font-size: 11px;">Donors &amp; Educators</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How We Work Section -->
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="eyebrow-tag mb-2">Our Approach</span>
                    <h2 class="fw-bold font-heading mb-3 text-dark">
                        How We Bring Meaningful Change
                    </h2>
                    <p class="text-muted lh-base mb-3 small">
                        Through our dedicated team, volunteers, donors, and supporters, we strive to bring meaningful change by nurturing young minds, empowering communities, and spreading social awareness.
                    </p>

                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-start gap-2">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 32px; height: 32px; flex-shrink: 0; font-size: 13px;">1</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Ground-Level Identification</h6>
                                <p class="text-muted small mb-0">Surveying slums to identify out-of-school children and vulnerable families.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 32px; height: 32px; flex-shrink: 0; font-size: 13px;">2</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Community Learning Centres</h6>
                                <p class="text-muted small mb-0">Free remedial classes, study kits, and mentoring right in slum clusters.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 32px; height: 32px; flex-shrink: 0; font-size: 13px;">3</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Nutrition &amp; Child Welfare</h6>
                                <p class="text-muted small mb-0">Nutritional snacks, clean clothing, and basic health screening camps.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-2">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold" style="width: 32px; height: 32px; flex-shrink: 0; font-size: 13px;">4</div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Women &amp; Family Empowerment</h6>
                                <p class="text-muted small mb-0">Vocational training courses to make households economically self-reliant.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="p-3 p-md-4 bg-canvas rounded-4 border shadow-xs">
                        <h5 class="fw-bold mb-2 text-dark font-heading">Need Assistance Or Want To Collaborate?</h5>
                        <p class="text-muted mb-3 small">
                            Connect with Non Stop Education &amp; Social Welfare Foundation directly.
                        </p>
                        <div class="bg-white p-3 rounded-3 border-start border-danger border-4 shadow-xs mb-3">
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-danger bg-opacity-10 text-danger rounded-circle p-2 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                    <i class="fa-solid fa-phone-volume fs-5"></i>
                                </div>
                                <div>
                                    <small class="text-muted fw-bold text-uppercase d-block" style="font-size: 11px;">Helpline &amp; Support</small>
                                    <a href="tel:+917042944703" class="fw-bold text-dark fs-5 text-decoration-none">+91 70429 44703</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="volunteer.php" class="btn btn-pill btn-pill-accent w-100 text-center py-2">
                                <i class="fa-solid fa-hand-holding-heart me-1"></i> Join As A Volunteer
                            </a>
                            <a href="contact.php" class="btn btn-pill btn-pill-outline w-100 text-center py-2">
                                <i class="fa-solid fa-envelope me-1"></i> Send Us A Message
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Official Brochure & POSH / Women Safety Section -->
    <section class="section-padding bg-white border-top border-bottom position-relative overflow-hidden" id="brochure">
        <div class="container position-relative z-1">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-5 text-center" data-aos="fade-right">
                    <div class="position-relative d-inline-block shadow-lg rounded-4 overflow-hidden border border-2 border-danger border-opacity-25" style="max-width: 340px;">
                        <img src="images/brochure_cover.jpg" alt="Non Stop Education & Social Welfare Foundation Official Brochure Cover" class="img-fluid w-100" style="object-fit: cover;">
                        <div class="p-3 bg-dark text-white text-center">
                            <span class="badge bg-danger rounded-pill px-3 py-1 mb-2 fw-bold text-uppercase" style="font-size: 11px;">Official Publication</span>
                            <h6 class="fw-bold mb-1 font-heading text-white">Empowering Women, Ensuring Safety</h6>
                            <p class="small text-white-50 mb-2.5" style="font-size: 12px;">Women's Rights, POSH Act Compliance &amp; Student Scholarships</p>
                            <div class="d-flex justify-content-center gap-2">
                                <a href="images/NonStopEducation_Brochure.pdf" download="NonStopEducation_Brochure.pdf" class="btn btn-danger btn-sm rounded-pill px-3 py-1.5 fw-bold shadow-sm">
                                    <i class="fa-solid fa-download me-1"></i> Download PDF
                                </a>
                                <a href="images/NonStopEducation_Brochure.pdf" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3 py-1.5 fw-semibold">
                                    <i class="fa-solid fa-eye me-1"></i> View Online
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7" data-aos="fade-left">
                    <span class="eyebrow-tag mb-2">Official Foundation Literature</span>
                    <h2 class="fw-bold font-heading text-dark mb-3">Empowering Women, Ensuring Safety &amp; Education</h2>
                    <p class="text-muted lh-base mb-3">
                        Our comprehensive foundation brochure outlines our core initiatives across women's rights, POSH (Prevention of Sexual Harassment) training sessions in colleges, survivor support, and scholarship programs for youth.
                    </p>
                    
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 bg-canvas border h-100">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="fa-solid fa-scale-balanced text-primary fs-5"></i>
                                    <h6 class="fw-bold mb-0 text-dark">POSH &amp; Women Rights</h6>
                                </div>
                                <p class="small text-muted mb-0">Free 2-3 hour awareness &amp; compliance sessions for university, college &amp; school campuses.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 bg-canvas border h-100">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="fa-solid fa-laptop-code text-success fs-5"></i>
                                    <h6 class="fw-bold mb-0 text-dark">Digital Scholarships</h6>
                                </div>
                                <p class="small text-muted mb-0">Digital marketing course scholarships for college &amp; government school students.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 bg-canvas border h-100">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="fa-solid fa-graduation-cap text-danger fs-5"></i>
                                    <h6 class="fw-bold mb-0 text-dark">500+ Students Educated</h6>
                                </div>
                                <p class="small text-muted mb-0">Empowering marginalized youth through free learning centres and legal rights awareness.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="p-3 rounded-3 bg-canvas border h-100">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="fa-solid fa-location-dot text-warning fs-5"></i>
                                    <h6 class="fw-bold mb-0 text-dark">Delhi &amp; Chandigarh</h6>
                                </div>
                                <p class="small text-muted mb-0">Active grassroots branches and nationwide mission in association with Laxmi Foundation.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-2 align-items-center">
                        <a href="images/NonStopEducation_Brochure.pdf" target="_blank" class="btn btn-pill btn-pill-accent btn-md shadow-sm">
                            <i class="fa-solid fa-file-pdf me-1.5"></i> Read Full Brochure (PDF)
                        </a>
                        <a href="contact.php" class="btn btn-pill btn-pill-outline btn-md">
                            <i class="fa-solid fa-envelope me-1.5"></i> Request Seminar at Your College
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Preview -->
    <section class="section-padding bg-canvas border-top">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-3" data-aos="fade-up">
                <div>
                    <span class="eyebrow-tag mb-1">Real Ground Work</span>
                    <h3 class="fw-bold font-heading text-dark mb-0">College Seminars, Smart Classes &amp; Welfare Drives</h3>
                </div>
                <a href="gallery.php" class="btn btn-pill btn-pill-outline btn-sm mt-2 mt-md-0">
                    View Full Gallery <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>

            <div class="row g-3">
                <!-- 1. POSH Act Presentation -->
                <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 210px;">
                        <img src="images/seminar_posh_act.jpg" class="w-100 h-100" style="object-fit: cover;" alt="POSH Act Seminar in College">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-danger rounded-pill mb-1" style="font-size: 10px;">Women Rights</span>
                            <h6 class="mb-0 text-white small fw-bold">POSH Act Awareness Seminar</h6>
                        </div>
                    </div>
                </div>
                <!-- 2. Smart Classroom -->
                <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 210px;">
                        <img src="images/seminar_smart_class.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Digital Smart Classroom">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-primary rounded-pill mb-1" style="font-size: 10px;">Smart Education</span>
                            <h6 class="mb-0 text-white small fw-bold">Smart Digital Learning Centre</h6>
                        </div>
                    </div>
                </div>
                <!-- 3. Dignitaries & Police -->
                <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 210px;">
                        <img src="images/seminar_dignitaries_police.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Delhi Police & Dignitaries at Safety Workshop">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-success rounded-pill mb-1" style="font-size: 10px;">Safety Drive</span>
                            <h6 class="mb-0 text-white small fw-bold">Delhi Police Joint Safety Seminar</h6>
                        </div>
                    </div>
                </div>
                <!-- 4. College Auditorium Audience -->
                <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="250">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 210px;">
                        <img src="images/seminar_college_auditorium.jpg" class="w-100 h-100" style="object-fit: cover;" alt="College Auditorium Students">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-warning text-dark rounded-pill mb-1" style="font-size: 10px;">Campus Youth</span>
                            <h6 class="mb-0 text-white small fw-bold">College Students Participation</h6>
                        </div>
                    </div>
                </div>
                <!-- 5. Slum Study Hub -->
                <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 210px;">
                        <img src="images/real_slum_teaching.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Slum Study Hub Children Learning">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-primary rounded-pill mb-1" style="font-size: 10px;">Slum Study Hub</span>
                            <h6 class="mb-0 text-white small fw-bold">Volunteer Outdoor Teaching</h6>
                        </div>
                    </div>
                </div>
                <!-- 6. Founder & Children -->
                <div class="col-6 col-md-4" data-aos="fade-up" data-aos-delay="350">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 210px;">
                        <img src="images/real_ground_leader_kids.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Founder Connecting with Slum Children">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-danger rounded-pill mb-1" style="font-size: 10px;">Community Care</span>
                            <h6 class="mb-0 text-white small fw-bold">Grassroots Bonding &amp; Care</h6>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Support Call To Action -->
    <section class="py-4 bg-primary text-white position-relative overflow-hidden">
        <div class="container position-relative z-1">
            <div class="row align-items-center justify-content-between g-3">
                <div class="col-lg-8 text-center text-lg-start">
                    <span class="badge bg-danger rounded-pill px-2 py-1 mb-2 text-uppercase fw-bold" style="font-size: 11px;">Make A Difference</span>
                    <h3 class="fw-bold text-white mb-2">Join Hands With Non Stop Education</h3>
                    <p class="text-white-50 mb-0 small">
                        Your support provides textbooks, tuition, healthy meals, and smiles to underprivileged children. Help us reach more children today.
                    </p>
                </div>
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="d-flex flex-column flex-sm-row flex-lg-column gap-2 justify-content-center">
                        <a href="donate.php" class="btn btn-pill btn-pill-accent btn-md shadow-sm">
                            <i class="fa-solid fa-heart me-1"></i> Donate / Support Us
                        </a>
                        <a href="volunteer.php" class="btn btn-pill btn-pill-outline-light btn-md">
                            <i class="fa-solid fa-user-plus me-1"></i> Volunteer With Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
