<?php
// ==============================================================
// TEMPORARY SLOW SERVER RESPONSE CONTROLLER (20s DELAY)
// Website ke sabhi pages par visual 20s server slow response message + timer active hai.
// ==============================================================
@set_time_limit(60);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Non Stop Education & Social Welfare Foundation'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Non Stop Education & Social Welfare Foundation is a non-profit organization dedicated to creating positive social impact through education, child welfare, women empowerment, and community development.'; ?>">
    <?php
        $currentScript = basename($_SERVER['PHP_SELF'] ?? 'index.php');
        $canonicalPath = ($currentScript === 'index.php') ? '' : $currentScript;
        $canonicalUrl = 'https://nonstopeducation.org/' . $canonicalPath;
        $siteTitle = isset($pageTitle) ? $pageTitle : 'Non Stop Education & Social Welfare Foundation | Nurturing Minds, Empowering Lives';
        $siteDesc = isset($pageDescription) ? $pageDescription : 'Non Stop Education & Social Welfare Foundation is a non-profit organization dedicated to creating positive social impact through education, child welfare, women empowerment, and community development.';
        $ogImage = 'https://nonstopeducation.org/images/logo.png';
    ?>
    <link rel="canonical" href="<?php echo $canonicalUrl; ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="keywords" content="Non Stop Education, nonstop education, NonStopEducation, nonstopeducation.org, Non Stop Education & Social Welfare Foundation, NGO Delhi, NGO in Shahdara, NGO in Uttam Nagar, Free Education NGO, Child Welfare NGO, Women Empowerment NGO, Manisha Versha NGO">
    <meta name="author" content="Non Stop Education & Social Welfare Foundation">

    <!-- Open Graph / Facebook / WhatsApp -->
    <meta property="og:type" content="website">
    <meta property="og:locale" content="en_US">
    <meta property="og:url" content="<?php echo $canonicalUrl; ?>">
    <meta property="og:site_name" content="Non Stop Education & Social Welfare Foundation">
    <meta property="og:title" content="<?php echo htmlspecialchars($siteTitle); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($siteDesc); ?>">
    <meta property="og:image" content="<?php echo $ogImage; ?>">
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="600">
    <meta property="og:image:alt" content="Non Stop Education & Social Welfare Foundation Logo">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo $canonicalUrl; ?>">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($siteTitle); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($siteDesc); ?>">
    <meta name="twitter:image" content="<?php echo $ogImage; ?>">

    <!-- Schema.org JSON-LD Structured Data for Google Entity & Knowledge Panel -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "NGO",
          "@id": "https://nonstopeducation.org/#organization",
          "name": "Non Stop Education & Social Welfare Foundation",
          "alternateName": [
            "Non Stop Education",
            "NonStopEducation",
            "Non Stop Education NGO",
            "NSE Foundation",
            "NonStop Education"
          ],
          "url": "https://nonstopeducation.org/",
          "logo": {
            "@type": "ImageObject",
            "@id": "https://nonstopeducation.org/#logo",
            "url": "https://nonstopeducation.org/images/logo.png",
            "caption": "Non Stop Education & Social Welfare Foundation Logo"
          },
          "image": "https://nonstopeducation.org/images/logo.png",
          "description": "Non Stop Education & Social Welfare Foundation is a registered non-profit NGO dedicated to creating positive social impact through free child education, slum school centres, kit distribution, women empowerment, POSH awareness, and social welfare in Delhi, India.",
          "address": {
            "@type": "PostalAddress",
            "addressLocality": "Shahdara / Uttam Nagar",
            "addressRegion": "Delhi",
            "postalCode": "110093",
            "addressCountry": "IN"
          },
          "contactPoint": [
            {
              "@type": "ContactPoint",
              "telephone": "+91-7042944703",
              "contactType": "helpline",
              "availableLanguage": ["Hindi", "English"]
            }
          ],
          "founder": [
            {
              "@type": "Person",
              "name": "Manisha",
              "jobTitle": "Founder"
            },
            {
              "@type": "Person",
              "name": "Versha",
              "jobTitle": "Co-Founder"
            }
          ],
          "sameAs": [
            "https://www.instagram.com/nonstop_education",
            "https://youtube.com/@non_stop_education"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://nonstopeducation.org/#website",
          "url": "https://nonstopeducation.org/",
          "name": "Non Stop Education & Social Welfare Foundation",
          "alternateName": "Non Stop Education",
          "publisher": {
            "@id": "https://nonstopeducation.org/#organization"
          },
          "inLanguage": "en-US"
        }
      ]
    }
    </script>
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

    <!-- ============================================================== -->
    <!-- TEMPORARY 20-SECOND SLOW SERVER RESPONSE SIMULATOR STYLES -->
    <!-- ============================================================== -->
    <style id="server-slow-style">
        #server-slow-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: radial-gradient(circle at center, #1e293b 0%, #0b1120 100%);
            z-index: 99999999;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            color: #f8fafc;
            padding: 20px;
            box-sizing: border-box;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }
        #server-slow-overlay.fade-out {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }
        .server-box {
            background: rgba(30, 41, 59, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.14);
            box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.8), 0 0 40px rgba(245, 158, 11, 0.2);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 36px 30px;
            max-width: 520px;
            width: 100%;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .server-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #f59e0b, #ef4444, #f59e0b);
            background-size: 200% 100%;
            animation: serverGrad 2s linear infinite;
        }
        @keyframes serverGrad {
            0% { background-position: 0% 0%; }
            100% { background-position: 200% 0%; }
        }
        .server-icon-pulse {
            width: 76px;
            height: 76px;
            margin: 0 auto 18px;
            background: rgba(245, 158, 11, 0.15);
            border: 2px solid rgba(245, 158, 11, 0.45);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            color: #f59e0b;
            animation: serverPulse 2s infinite;
        }
        @keyframes serverPulse {
            0% { box-shadow: 0 0 0 0 rgba(245, 158, 11, 0.4); }
            70% { box-shadow: 0 0 0 20px rgba(245, 158, 11, 0); }
            100% { box-shadow: 0 0 0 0 rgba(245, 158, 11, 0); }
        }
        .server-status-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(239, 68, 68, 0.18);
            border: 1px solid rgba(239, 68, 68, 0.4);
            color: #fca5a5;
            padding: 5px 14px;
            border-radius: 9999px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 12px;
            letter-spacing: 0.3px;
        }
        .server-status-pill .dot {
            width: 8px;
            height: 8px;
            background: #ef4444;
            border-radius: 50%;
            animation: serverBlink 1s infinite alternate;
        }
        @keyframes serverBlink {
            0% { opacity: 0.3; }
            100% { opacity: 1; }
        }
        .server-title {
            font-size: 22px;
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 8px;
        }
        .server-desc {
            font-size: 14px;
            color: #94a3b8;
            line-height: 1.5;
            margin: 0 0 20px;
        }
        .server-progress-container {
            background: rgba(15, 23, 42, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            height: 10px;
            overflow: hidden;
            margin-bottom: 12px;
        }
        .server-progress-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, #f59e0b, #ef4444);
            border-radius: 12px;
            transition: width 0.3s ease-out;
        }
        .server-meta-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            color: #cbd5e1;
            margin-bottom: 16px;
            font-weight: 500;
        }
        .server-log-box {
            background: rgba(15, 23, 42, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 10px;
            padding: 10px 14px;
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
            font-size: 12px;
            color: #38bdf8;
            text-align: left;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .server-log-box i {
            color: #f59e0b;
        }
    </style>
    <?php if (isset($extraHead)) echo $extraHead; ?>
</head>
<body class="<?php echo isset($bodyClass) ? $bodyClass : 'bg-canvas'; ?>">

    <!-- Top Notice Banner for Slow Server Response -->
    <div id="server-slow-banner" style="display:none; background:#fef3c7; border-bottom:1px solid #f59e0b; color:#92400e; font-size:13px; font-weight:600; padding:10px 18px; text-align:center; position:relative; z-index:99999;">
        <i class="fa-solid fa-triangle-exclamation text-warning me-2"></i>
        <span>⚠️ <strong>Server Notice:</strong> Server is currently experiencing high load. Pages may take longer than usual to respond.</span>
        <button type="button" onclick="document.getElementById('server-slow-banner').style.display='none'" style="background:none; border:none; float:right; cursor:pointer; color:#92400e; font-size:18px; font-weight:bold; line-height:1;" title="Dismiss">&times;</button>
    </div>

    <!-- ============================================================== -->
    <!-- SLOW SERVER RESPONSE OVERLAY & MESSAGE (NO SECONDS DISPLAYED) -->
    <!-- ============================================================== -->
    <div id="server-slow-overlay">
        <div class="server-box">
            <div class="server-icon-pulse">
                <i class="fa-solid fa-server"></i>
            </div>
            <div class="server-status-pill">
                <span class="dot"></span>
                <span>Slow Server Response Detected</span>
            </div>
            <h2 class="server-title">Connecting to Server...</h2>
            <p class="server-desc">
                The server is taking longer than usual to respond. Please wait while the page is being fetched...<br>
                <span style="display:block; font-size:12.5px; color:#cbd5e1; margin-top:4px;">सर्वर से रिस्पॉन्स मिलने में सामान्य से अधिक समय लग रहा है, कृपया प्रतीक्षा करें...</span>
            </p>
            
            <div class="server-progress-container">
                <div class="server-progress-bar" id="server-progress-bar"></div>
            </div>
            
            <div class="server-meta-info">
                <span><i class="fa-solid fa-server text-warning me-1"></i> Host: Responding Slowly</span>
                <span><i class="fa-solid fa-spinner fa-spin text-info me-1"></i> Processing Request...</span>
            </div>
            
            <div class="server-log-box">
                <i class="fa-solid fa-circle-notch fa-spin"></i>
                <span id="server-status-log">Connecting to host server... Waiting for response</span>
            </div>
        </div>
    </div>

    <script id="server-slow-script">
    (function() {
        var TOTAL_SECONDS = 20;
        var remaining = TOTAL_SECONDS;
        var overlay = document.getElementById('server-slow-overlay');
        var progressBar = document.getElementById('server-progress-bar');
        var statusLog = document.getElementById('server-status-log');
        var banner = document.getElementById('server-slow-banner');

        function endDelay() {
            if (overlay) {
                overlay.classList.add('fade-out');
                setTimeout(function() {
                    overlay.style.display = 'none';
                    if (banner) banner.style.display = 'block';
                }, 500);
            }
        }

        var interval = setInterval(function() {
            remaining--;
            var elapsed = TOTAL_SECONDS - remaining;
            var percent = Math.min(100, Math.round((elapsed / TOTAL_SECONDS) * 100));

            if (progressBar) progressBar.style.width = percent + '%';

            if (statusLog) {
                if (elapsed <= 4) {
                    statusLog.innerText = '[1/4] Establishing secure connection with host server...';
                } else if (elapsed <= 9) {
                    statusLog.innerText = '[2/4] ⚠️ Server load high: Waiting in server queue...';
                } else if (elapsed <= 14) {
                    statusLog.innerText = '[3/4] Server executing database scripts & assets query...';
                } else if (elapsed <= 18) {
                    statusLog.innerText = '[4/4] Receiving compressed page payload from server...';
                } else {
                    statusLog.innerText = '[✓] Connected! Finalizing page display...';
                }
            }

            if (remaining <= 0) {
                clearInterval(interval);
                endDelay();
            }
        }, 1000);

        // Page navigation interception: clicking links also shows server delay without displaying seconds
        document.addEventListener('DOMContentLoaded', function() {
            var links = document.querySelectorAll('a[href]');
            links.forEach(function(link) {
                var href = link.getAttribute('href');
                if (href && !href.startsWith('#') && !href.startsWith('javascript') && !href.startsWith('tel:') && !href.startsWith('mailto:') && !link.hasAttribute('target')) {
                    link.addEventListener('click', function(e) {
                        e.preventDefault();
                        if (overlay) {
                            overlay.style.display = 'flex';
                            overlay.classList.remove('fade-out');
                            if (progressBar) progressBar.style.width = '0%';
                            if (statusLog) statusLog.innerText = '[1/4] ⚠️ Requesting ' + href + ' from server...';
                            
                            var navRemaining = TOTAL_SECONDS;
                            var navInterval = setInterval(function() {
                                navRemaining--;
                                var navElapsed = TOTAL_SECONDS - navRemaining;
                                if (progressBar) progressBar.style.width = Math.min(100, Math.round((navElapsed / TOTAL_SECONDS) * 100)) + '%';
                                if (statusLog) {
                                    if (navElapsed <= 8) {
                                        statusLog.innerText = '[2/4] ⚠️ High latency: Waiting for server response...';
                                    } else if (navElapsed <= 15) {
                                        statusLog.innerText = '[3/4] Receiving page data from server...';
                                    } else {
                                        statusLog.innerText = '[4/4] Redirecting to page...';
                                    }
                                }
                                if (navRemaining <= 0) {
                                    clearInterval(navInterval);
                                    window.location.href = href;
                                }
                            }, 1000);
                        } else {
                            window.location.href = href;
                        }
                    });
                }
            });
        });
    })();
    </script>

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
