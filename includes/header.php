<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Non Stop Education & Social Welfare Foundation'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Non Stop Education & Social Welfare Foundation is a non-profit organization dedicated to creating positive social impact through education, child welfare, women empowerment, and community development.'; ?>">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="192x192" href="images/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- AOS.js CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css?v=2.5.0">
    <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : 'bg-canvas'; ?>">

    <!-- Brand Accent Top Stripe -->
    <div class="header-accent-stripe"></div>

    <!-- Top Utility Bar -->
    <div class="top-utility-bar d-block">
        <div class="container-fluid px-3 px-xl-4 px-xxl-5">
            <!-- Desktop Layout -->
            <div class="d-none d-lg-flex justify-content-between align-items-center w-100 gap-2">
                <!-- Left Side: Registration Badge, Instagram Pill & WhatsApp -->
                <div class="d-flex align-items-center gap-2 flex-shrink-0">
                    <span class="badge top-regd-pill text-nowrap">
                        <i class="fa-solid fa-shield-halved text-success me-1"></i> Govt. Regd. NGO
                    </span>
                    
                    <!-- Direct Instagram Badge with requested URL -->
                    <a href="https://www.instagram.com/nonstop_education?obrf=MXJzMHY1aWM0Mmg3Yg%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer" class="top-instagram-badge text-nowrap" title="Follow us on Instagram @nonstop_education">
                        <i class="fa-brands fa-instagram me-1"></i>
                        <span>@nonstop_education</span>
                    </a>

                    <!-- Quick Founders Badge -->
                    <a href="about.php#leadership" class="top-founder-pill d-none d-xxl-inline-flex text-nowrap text-decoration-none" title="Meet Our Founders: Manisha & Versha">
                        <i class="fa-solid fa-user-group text-warning me-1"></i> Founders: Manisha &amp; Versha
                    </a>

                    <a href="https://wa.me/918700549755" target="_blank" rel="noopener noreferrer" class="top-social-icon icon-wa" title="WhatsApp Support"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://youtube.com/@non_stop_education?si=VHYRZ3ueUGXyQQlE" target="_blank" rel="noopener noreferrer" class="top-social-icon icon-yt" title="YouTube Channel"><i class="fa-brands fa-youtube"></i></a>
                </div>
                
                <!-- Middle Side: News & Updates Marquee -->
                <div class="news-ticker-container d-flex align-items-center mx-2 flex-grow-1">
                    <div class="news-ticker-badge flex-shrink-0">
                        <span class="live-pulse-dot me-1.5"></span>
                        <i class="fa-solid fa-bullhorn me-1"></i> Updates
                    </div>
                    <div class="news-ticker-content">
                        <div class="news-ticker-scroll">
                            <span>“Founded by Manisha (Founder) &amp; Versha (Co-Founder) — Dedicated to Quality Child Education &amp; Welfare!”</span>
                            <span class="ticker-separator"></span>
                            <span>“Quality Education &amp; Child Welfare For Every Child — Helpline: +91 70429 44703 | WhatsApp: 8700549755”</span>
                            <span class="ticker-separator"></span>
                            <span>“Women Empowerment &amp; Skill Development Workshops Ongoing — Join Us As A Volunteer!”</span>
                            <span class="ticker-separator"></span>
                            <span>“Together, We Make A Difference — One Child, One Family, One Community At A Time.”</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side: Phone & Email Contact -->
                <div class="top-contact-info d-flex align-items-center gap-2.5 flex-shrink-0">
                    <a href="mailto:nonstopeducation246@gmail.com" class="top-contact-link d-none d-xxl-inline-flex text-nowrap">
                        <i class="fa-solid fa-envelope me-1 text-accent"></i> nonstopeducation246@gmail.com
                    </a>
                    <span class="top-contact-divider d-none d-xxl-inline">|</span>
                    <a href="tel:+917042944703" class="top-helpline-link text-nowrap">
                        <i class="fa-solid fa-phone-volume me-1.5 text-warning fa-shake"></i> +91 70429 44703
                    </a>
                </div>
            </div>
            
            <!-- Mobile/Tablet Layout (Refined & Compact) -->
            <div class="d-lg-none d-flex flex-column gap-1.5 py-1.5">
                <!-- Row 1: Single Sleek Row with Badges, Socials & Direct Call -->
                <div class="mobile-top-row d-flex justify-content-between align-items-center w-100">
                    <!-- Left: Govt Regd & Direct Socials -->
                    <div class="d-flex align-items-center gap-1.5">
                        <span class="badge top-regd-pill-mobile text-nowrap">
                            <i class="fa-solid fa-shield-halved text-success me-1"></i> Govt. Regd.
                        </span>
                        
                        <!-- Instagram Button with Gradient -->
                        <a href="https://www.instagram.com/nonstop_education?obrf=MXJzMHY1aWM0Mmg3Yg%3D%3D&utm_source=qr" target="_blank" rel="noopener noreferrer" class="mobile-social-btn mobile-insta" title="Instagram @nonstop_education">
                            <i class="fa-brands fa-instagram"></i>
                        </a>

                        <!-- WhatsApp Button -->
                        <a href="https://wa.me/918700549755" target="_blank" rel="noopener noreferrer" class="mobile-social-btn mobile-wa" title="WhatsApp +91 87005 49755">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>

                        <!-- YouTube Button -->
                        <a href="https://youtube.com/@non_stop_education?si=VHYRZ3ueUGXyQQlE" target="_blank" rel="noopener noreferrer" class="mobile-social-btn mobile-yt" title="YouTube Channel">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>

                    <!-- Right: Call Button with Direct Number -->
                    <div class="d-flex align-items-center">
                        <a href="tel:+917042944703" class="mobile-call-pill text-nowrap" title="Call Helpline +91 70429 44703">
                            <i class="fa-solid fa-phone me-1 text-warning"></i> 70429 44703
                        </a>
                    </div>
                </div>

                <!-- Row 2: Sleek Live News Ticker Strip -->
                <div class="mobile-ticker-row d-flex align-items-center w-100">
                    <div class="mobile-ticker-tag flex-shrink-0">
                        <span class="live-pulse-dot me-1"></span> Updates
                    </div>
                    <div class="news-ticker-content flex-grow-1">
                        <div class="news-ticker-scroll" style="animation-duration: 22s;">
                            <span>“Quality Education &amp; Child Welfare — Helpline: +91 70429 44703 | WhatsApp: 8700549755”</span>
                            <span class="ticker-separator"></span>
                            <span>“Founded by Manisha (Founder) &amp; Versha (Co-Founder)”</span>
                            <span class="ticker-separator"></span>
                            <span>“Empowering Every Child — Donate or Join As A Volunteer!”</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid px-3 px-xl-4 px-xxl-5">
            <!-- Brand Logo & Title -->
            <a class="navbar-brand-custom d-flex align-items-center text-decoration-none flex-shrink-0" href="index.php">
                <img src="images/logo.png" alt="Nonstop Education and Social Welfare Foundation Logo" class="brand-logo-img"> 
                <div class="brand-text-group d-flex flex-column text-start justify-content-center ms-2">
                    <span class="brand-text-main">NONSTOP EDUCATION</span>
                    <span class="brand-text-sub">AND SOCIAL WELFARE FOUNDATION</span>
                </div>
            </a>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler border-0 shadow-none px-2 py-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Nav -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- Nav Links: Flows smoothly with auto margin -->
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'home') ? 'active' : ''; ?>" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'about') ? 'active' : ''; ?>" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php#leadership">Founders</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle-clean d-inline-flex align-items-center justify-content-between <?php echo (isset($activePage) && strpos($activePage, 'program') !== false) ? 'active' : ''; ?>" href="#" id="programsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span>Programs</span>
                            <i class="fa-solid fa-chevron-down nav-caret ms-1"></i>
                        </a>
                        <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="programsDropdown">
                            <li><a class="dropdown-item py-2 fw-semibold" href="programs.php"><i class="fa-solid fa-list-check text-primary me-2"></i> All Programs Overview</a></li>
                            <li><hr class="dropdown-divider my-1"></li>
                            <li><a class="dropdown-item py-2" href="program-education.php"><i class="fa-solid fa-graduation-cap text-primary me-2"></i> Education &amp; School Centres</a></li>
                            <li><a class="dropdown-item py-2" href="program-child-welfare.php"><i class="fa-solid fa-child-reaching text-secondary me-2"></i> Child Welfare &amp; Nutrition</a></li>
                            <li><a class="dropdown-item py-2" href="program-women-empowerment.php"><i class="fa-solid fa-female text-danger me-2"></i> Women Empowerment</a></li>
                            <li><a class="dropdown-item py-2" href="program-skill-development.php"><i class="fa-solid fa-laptop-code text-primary me-2"></i> Skill Development &amp; Community</a></li>
                            <li><a class="dropdown-item py-2" href="programs.php#posh-pocso"><i class="fa-solid fa-shield-halved text-danger me-2"></i> POSH &amp; POCSO Training</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'impact') ? 'active' : ''; ?>" href="index.php#impact">Our Impact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'gallery') ? 'active' : ''; ?>" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'volunteer') ? 'active' : ''; ?>" href="volunteer.php">Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (isset($activePage) && $activePage === 'contact') ? 'active' : ''; ?>" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger fw-semibold d-inline-flex align-items-center" href="images/NonStopEducation_Brochure.pdf" target="_blank" title="Download Official Brochure">
                            <i class="fa-solid fa-file-pdf text-danger me-1"></i> Brochure
                        </a>
                    </li>
                </ul>

                <!-- Right Action Button Group -->
                <div class="nav-cta-wrap mt-3 mt-lg-0 ms-lg-2 d-flex align-items-center flex-shrink-0">
                    <a href="donate.php" class="btn btn-navbar-donate text-nowrap">
                        <i class="fa-solid fa-heart me-1.5 fa-beat-fade"></i> Donate Now
                    </a>
                </div>
            </div>
        </div>
    </nav>
