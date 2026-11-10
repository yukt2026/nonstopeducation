<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Non Stop Education & Social Welfare Foundation'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Non Stop Education & Social Welfare Foundation is a non-profit organization dedicated to creating positive social impact through education, child welfare, women empowerment, and community development.'; ?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS.js CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css?v=2.0.0">
    <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : 'bg-canvas'; ?>">

    <!-- Top Utility Bar -->
    <div class="top-utility-bar d-block">
        <div class="container-fluid px-3 px-lg-4">
            <!-- Desktop Layout -->
            <div class="d-none d-lg-flex justify-content-between align-items-center w-100">
                <!-- Left Side: Registration Badge & Social Media -->
                <div class="d-flex align-items-center gap-3 flex-shrink-0">
                    <span class="badge bg-white text-dark fw-bold px-2 py-1" style="font-size: 0.78rem; letter-spacing: 0.5px;">
                        <i class="fa-solid fa-certificate text-danger me-1"></i> Govt. Regd. NGO
                    </span>
                    <div class="d-flex align-items-center gap-2">
                        <a href="#" class="top-social-icon" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="top-social-icon" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="top-social-icon" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#" class="top-social-icon" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
                
                <!-- Middle Side: News & Updates Marquee -->
                <div class="news-ticker-container d-flex align-items-center mx-4 flex-grow-1">
                    <div class="news-ticker-badge">
                        <i class="fa-solid fa-bullhorn me-1"></i> Updates
                    </div>
                    <div class="news-ticker-content">
                        <div class="news-ticker-scroll">
                            <span>“Together, we make a difference — one child, one family, and one community at a time.”</span>
                            <span class="ticker-separator"></span>
                            <span>“Admissions Open for Free Learning Centres & Skill Development Classes!”</span>
                            <span class="ticker-separator"></span>
                            <span>“Join hands as a volunteer or donor to empower young minds across communities.”</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side: Phone & Email Contact -->
                <div class="top-contact-info d-flex align-items-center gap-3 flex-shrink-0">
                    <a href="mailto:contact@nonstopeducation.org" class="text-white text-decoration-none d-flex align-items-center gap-1 small opacity-90 hover-opacity-100">
                        <i class="fa-solid fa-envelope"></i> contact@nonstopeducation.org
                    </a>
                    <span class="text-white-50">|</span>
                    <a href="tel:+918527225832" class="text-white text-decoration-none fw-bold d-flex align-items-center gap-2 text-nowrap" style="font-size: 0.95rem; letter-spacing: 0.5px;">
                        <i class="fa-solid fa-phone"></i> +91 85272 25832
                    </a>
                </div>
            </div>
            
            <!-- Mobile/Tablet Layout -->
            <div class="d-lg-none d-flex flex-column gap-2 py-1">
                <!-- Row 1: Badges & Phone Contact -->
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="d-flex align-items-center gap-2">
                        <span class="badge bg-white text-dark fw-bold px-2 py-1" style="font-size: 0.72rem;">
                            <i class="fa-solid fa-certificate text-danger me-1"></i> Govt. Regd.
                        </span>
                        <a href="tel:+918527225832" class="top-social-icon" style="width: 26px; height: 26px; font-size: 0.8rem;"><i class="fa-solid fa-phone"></i></a>
                        <a href="https://wa.me/918527225832" class="top-social-icon" style="width: 26px; height: 26px; font-size: 0.8rem;"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                    <div class="top-contact-info d-flex align-items-center">
                        <a href="tel:+918527225832" class="text-white text-decoration-none fw-bold d-flex align-items-center gap-2 text-nowrap" style="font-size: 0.88rem; letter-spacing: 0.3px;">
                            <i class="fa-solid fa-phone"></i> +91 85272 25832
                        </a>
                    </div>
                </div>
                <!-- Row 2: News Updates Marquee -->
                <div class="news-ticker-container d-flex align-items-center w-100" style="height: 28px;">
                    <div class="news-ticker-badge px-2" style="font-size: 0.72rem; height: 100%;">
                        <i class="fa-solid fa-bell me-1"></i> Mission
                    </div>
                    <div class="news-ticker-content">
                        <div class="news-ticker-scroll" style="animation-duration: 25s;">
                            <span>“Quality Education & Welfare for Every Child — Call: +91 85272 25832”</span>
                            <span class="ticker-separator"></span>
                            <span>“Join Non Stop Education as a Volunteer or Donor Today!”</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid px-3 px-lg-4">
            <a class="navbar-brand-custom d-flex align-items-center text-decoration-none" href="index.php">
                <img src="images/logo.png" alt="Non Stop Education & Social Welfare Foundation Logo" style="height: 62px; width: auto; border-radius: 8px; border: 1px solid var(--border); background: var(--white); padding: 3px;" class="me-2"> 
                <div class="d-flex flex-column text-start">
                    <span style="color: #183B76 !important; font-weight: 800; font-size: 1.22rem; line-height: 1.1; letter-spacing: -0.02em;">NON STOP</span>
                    <span style="color: #E52F37 !important; font-weight: 700; font-size: 0.82rem; line-height: 1.1; letter-spacing: 0.4px;">EDUCATION & WELFARE</span>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'home') ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'about') ? 'active' : ''; ?>" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php echo (isset($activePage) && strpos($activePage, 'program') !== false) ? 'active' : ''; ?>" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Initiatives & Programs
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="programsDropdown" style="border-radius: var(--radius-md);">
                            <li><a class="dropdown-item py-2 fw-semibold" href="programs.php"><i class="fa-solid fa-list-check text-primary me-2"></i> All Programs Overview</a></li>
                            <li><hr class="dropdown-divider my-1"></li>
                            <li><a class="dropdown-item py-2" href="program-education.php"><i class="fa-solid fa-graduation-cap text-primary me-2"></i> Education & School Centres</a></li>
                            <li><a class="dropdown-item py-2" href="program-child-welfare.php"><i class="fa-solid fa-child-reaching text-secondary me-2"></i> Child Welfare & Nutrition</a></li>
                            <li><a class="dropdown-item py-2" href="program-women-empowerment.php"><i class="fa-solid fa-female text-danger me-2"></i> Women Empowerment</a></li>
                            <li><a class="dropdown-item py-2" href="program-skill-development.php"><i class="fa-solid fa-laptop-code text-primary me-2"></i> Skill Development & Community</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'impact') ? 'active' : ''; ?>" href="index.php#impact">Our Impact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'gallery') ? 'active' : ''; ?>" href="gallery.php">Gallery & Stories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'volunteer') ? 'active' : ''; ?>" href="volunteer.php">Volunteer With Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'contact') ? 'active' : ''; ?>" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-3 mt-lg-0">
                        <a href="donate.php" class="btn btn-pill btn-pill-accent btn-navbar">
                            <i class="fa-solid fa-heart me-2"></i> Donate / Support Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
