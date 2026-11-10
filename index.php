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
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.55), rgba(15, 23, 42, 0.65)), url('images/hero_education_nonstop.jpg');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-9 text-center" data-aos="fade-up" data-aos-duration="800">
                            <span class="badge bg-danger text-white rounded-pill px-3 py-1 mb-2 fw-bold text-uppercase fs-7 tracking-wider">
                                <i class="fa-solid fa-graduation-cap me-1"></i> Quality Education For All
                            </span>
                            <h1 class="display-5 text-white fw-bold mb-3 font-heading">Empowering Underprivileged Children Through Education</h1>
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
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.55), rgba(15, 23, 42, 0.65)), url('images/education_centre.jpg');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-9 text-center">
                            <span class="badge bg-primary text-white rounded-pill px-3 py-1 mb-2 fw-bold text-uppercase fs-7 tracking-wider">
                                <i class="fa-solid fa-school me-1"></i> Community Learning Centres
                            </span>
                            <h1 class="display-5 text-white fw-bold mb-3 font-heading">Nurturing Young Minds In Slums &amp; Rural Areas</h1>
                            <p class="lead text-light-50 mb-3 text-shadow-sm fs-6">
                                Free after-school learning resources, foundational literacy, and essential academic assistance to government school students and slum children.
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
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.55), rgba(15, 23, 42, 0.65)), url('images/child_welfare.jpg');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-9 text-center">
                            <span class="badge bg-success text-white rounded-pill px-3 py-1 mb-2 fw-bold text-uppercase fs-7 tracking-wider">
                                <i class="fa-solid fa-child-reaching me-1"></i> Child Welfare &amp; Nutrition
                            </span>
                            <h1 class="display-5 text-white fw-bold mb-3 font-heading">Holistic Care, Health &amp; Essential Assistance</h1>
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
            <!-- Slide 4: Women Empowerment -->
            <div class="carousel-item">
                <div class="carousel-img-wrap" style="background-image: linear-gradient(rgba(15, 23, 42, 0.55), rgba(15, 23, 42, 0.65)), url('images/women_empowerment.jpg');"></div>
                <div class="carousel-caption-custom container">
                    <div class="row w-100 justify-content-center">
                        <div class="col-lg-10 col-xl-9 text-center">
                            <span class="badge bg-danger text-white rounded-pill px-3 py-1 mb-2 fw-bold text-uppercase fs-7 tracking-wider">
                                <i class="fa-solid fa-female me-1"></i> Women Empowerment
                            </span>
                            <h1 class="display-5 text-white fw-bold mb-3 font-heading">Empowering Women, Uplifting Entire Communities</h1>
                            <p class="lead text-light-50 mb-3 text-shadow-sm fs-6">
                                Vocational skills training, financial literacy, and community self-reliance to help women stand tall as proud breadwinners.
                            </p>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <a href="program-women-empowerment.php" class="btn btn-pill btn-pill-accent btn-md"><i class="fa-solid fa-scissors me-1"></i> Women Programs</a>
                                <a href="contact.php" class="btn btn-pill btn-pill-outline-light btn-md"><i class="fa-solid fa-phone me-1"></i> Call: 85272 25832</a>
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
                            <small class="text-muted" style="font-size:11px;">+91 85272 25832</small>
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
                        <a href="tel:+918527225832" class="btn btn-pill btn-pill-outline">
                            <i class="fa-solid fa-phone me-1"></i> Call: 85272 25832
                        </a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="position-relative">
                        <img src="images/education_centre.jpg" class="img-fluid w-100 rounded-4 shadow-sm" style="height: 360px; object-fit: cover;" alt="Non Stop Education Learning Centre">
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
                            <img src="images/education_centre.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Education and School Centres">
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
                            <img src="images/child_welfare.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Child Welfare & Nutrition">
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
                            <img src="images/women_empowerment.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Women Empowerment">
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
                            <img src="images/hero_education_nonstop.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Skill Development & Community">
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
                                    <a href="tel:+918527225832" class="fw-bold text-dark fs-5 text-decoration-none">+91 85272 25832</a>
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

    <!-- Gallery Preview -->
    <section class="section-padding bg-canvas border-top">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-3" data-aos="fade-up">
                <div>
                    <span class="eyebrow-tag mb-1">Moments of Hope</span>
                    <h3 class="fw-bold font-heading text-dark mb-0">Gallery &amp; Success Stories</h3>
                </div>
                <a href="gallery.php" class="btn btn-pill btn-pill-outline btn-sm mt-2 mt-md-0">
                    View Full Gallery <i class="fa-solid fa-arrow-right ms-1"></i>
                </a>
            </div>

            <div class="row g-3">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 180px;">
                        <img src="images/hero_education_nonstop.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Underprivileged Children Education">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-danger rounded-pill mb-1" style="font-size: 10px;">Education</span>
                            <h6 class="mb-0 text-white small fw-bold">Slum Learning Camp</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="150">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 180px;">
                        <img src="images/education_centre.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Classroom Learning Centre">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-primary rounded-pill mb-1" style="font-size: 10px;">Classroom</span>
                            <h6 class="mb-0 text-white small fw-bold">Mentorship Sessions</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 180px;">
                        <img src="images/child_welfare.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Child Welfare Distribution">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-success rounded-pill mb-1" style="font-size: 10px;">Welfare</span>
                            <h6 class="mb-0 text-white small fw-bold">Nutrition Drives</h6>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="250">
                    <div class="rounded-3 overflow-hidden shadow-xs position-relative" style="height: 180px;">
                        <img src="images/women_empowerment.jpg" class="w-100 h-100" style="object-fit: cover;" alt="Women Vocational Training">
                        <div class="position-absolute bottom-0 start-0 w-100 p-2 text-white" style="background: linear-gradient(transparent, rgba(0,0,0,0.85));">
                            <span class="badge bg-warning text-dark rounded-pill mb-1" style="font-size: 10px;">Empowerment</span>
                            <h6 class="mb-0 text-white small fw-bold">Tailoring Workshop</h6>
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
