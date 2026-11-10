<?php
$pageTitle = "Gallery & Success Stories | Non Stop Education & Social Welfare Foundation";
$pageDescription = "Explore photo highlights and inspiring success stories from Non Stop Education's community school centres, child welfare, and women empowerment drives.";
$activePage = "gallery";
$extraHead = '
    <style>
        .gallery-grid {
            column-count: 1;
            column-gap: 0.8rem;
        }
        @media (min-width: 480px) {
            .gallery-grid { column-count: 2; }
        }
        @media (min-width: 992px) {
            .gallery-grid { column-count: 3; }
        }
        .gallery-item {
            break-inside: avoid;
            margin-bottom: 1rem;
            border-radius: var(--radius-md);
            overflow: hidden;
            position: relative;
            box-shadow: var(--shadow-xs);
            transition: var(--transition);
            background: #fff;
        }
        .gallery-item:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.02);
        }
        .gallery-overlay {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            background: linear-gradient(to top, rgba(15, 23, 42, 0.95), rgba(15, 23, 42, 0.6) 70%, transparent);
            padding: 1.5rem 1rem 0.8rem;
            color: white;
            opacity: 0.95;
            transition: opacity 0.3s ease;
        }
    </style>
';
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white border-bottom">
        <div class="container text-center" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-2">Moments That Matter</span>
            <h1 class="page-header-title font-heading fw-bold mb-2">Gallery &amp; <span class="text-danger">Success Stories</span></h1>
            <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #183B76, #E52F37); border-radius: var(--radius-pill); margin-bottom: 12px;"></div>
            <p class="lead text-muted mx-auto mb-0" style="max-width: 680px; font-size: 1rem; line-height: 1.6;">
                Glimpses into our ground-level work across slum clusters, community school centres, child nutrition drives, and women vocational workshops.
            </p>
        </div>
    </header>

    <!-- Gallery Grid Section -->
    <section class="section-padding bg-canvas">
        <div class="container">
            <div class="text-center mb-3" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table mb-2">Photo Showcase</span>
                <h2 class="fw-bold font-heading text-dark">Life At Non Stop Education</h2>
            </div>

            <div class="gallery-grid">
                <!-- Item 1 -->
                <div class="gallery-item" data-aos="fade-up">
                    <img src="images/hero_education_nonstop.jpg" alt="Underprivileged Children with books">
                    <div class="gallery-overlay">
                        <span class="badge bg-danger rounded-pill mb-1" style="font-size: 10px;">Education</span>
                        <h6 class="fw-bold mb-0 text-white">Outdoor Slum Learning Camp</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Foundational reading and mathematics sessions.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/education_centre.jpg" alt="Community Classroom Session">
                    <div class="gallery-overlay">
                        <span class="badge bg-primary rounded-pill mb-1" style="font-size: 10px;">Learning Centre</span>
                        <h6 class="fw-bold mb-0 text-white">Active Classroom Mentorship</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Teaching primary curriculum to students.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="150">
                    <img src="images/child_welfare.jpg" alt="Child Welfare & Nutrition Drive">
                    <div class="gallery-overlay">
                        <span class="badge bg-success rounded-pill mb-1" style="font-size: 10px;">Child Welfare</span>
                        <h6 class="fw-bold mb-0 text-white">Nutrition &amp; School Kits</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Distributing school backpacks and nutritious snacks.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/women_empowerment.jpg" alt="Women Vocational Training">
                    <div class="gallery-overlay">
                        <span class="badge bg-warning text-dark rounded-pill mb-1" style="font-size: 10px;">Empowerment</span>
                        <h6 class="fw-bold mb-0 text-white">Tailoring &amp; Skill Centre</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Practical stitching and garment crafting classes.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="250">
                    <img src="images/hero_education.png" alt="Community Engagement">
                    <div class="gallery-overlay">
                        <span class="badge bg-info text-white rounded-pill mb-1" style="font-size: 10px;">Outreach</span>
                        <h6 class="fw-bold mb-0 text-white">Community Engagement</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Advocacy for regular girl child schooling.</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="images/banner_shg_empowerment.png" alt="Self Help Group">
                    <div class="gallery-overlay">
                        <span class="badge bg-secondary rounded-pill mb-1" style="font-size: 10px;">Livelihoods</span>
                        <h6 class="fw-bold mb-0 text-white">Self-Help Group Meeting</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Community savings and micro-enterprises.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories Section -->
    <section class="section-padding bg-white border-top">
        <div class="container">
            <div class="text-center mb-3" data-aos="fade-up">
                <span class="eyebrow-tag mx-auto d-table mb-2">Real Lives Transformed</span>
                <h2 class="fw-bold font-heading text-dark">Inspiring Success Stories</h2>
            </div>

            <div class="row g-3">
                <!-- Story 1 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 border-0 shadow-xs rounded-3 p-3 bg-canvas border-top border-primary border-3">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; flex-shrink: 0;">
                                <i class="fa-solid fa-graduation-cap small"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Rohan (Age 11)</h6>
                                <small class="text-muted" style="font-size: 11px;">From Dropout to Class Topper</small>
                            </div>
                        </div>
                        <p class="text-muted small lh-base mb-0">
                            "Rohan was on the verge of quitting school. Non Stop Education enrolled him in free after-school study hub, providing books and mentoring. Today Rohan scored 88% in his annual exams."
                        </p>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="150">
                    <div class="card h-100 border-0 shadow-xs rounded-3 p-3 bg-canvas border-top border-danger border-3">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="bg-danger bg-opacity-10 text-danger rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; flex-shrink: 0;">
                                <i class="fa-solid fa-scissors small"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Sunita Devi (Age 32)</h6>
                                <small class="text-muted" style="font-size: 11px;">Independent Tailor</small>
                            </div>
                        </div>
                        <p class="text-muted small lh-base mb-0">
                            "Sunita joined our tailoring workshop with zero prior knowledge. Today, she runs her own stitching unit at home, earning ₹8,000 every month to fund both her daughters' education."
                        </p>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 border-0 shadow-xs rounded-3 p-3 bg-canvas border-top border-success border-3">
                        <div class="d-flex align-items-center gap-2 mb-2">
                            <div class="bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px; flex-shrink: 0;">
                                <i class="fa-solid fa-heart-pulse small"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-0 text-dark">Priya (Age 9)</h6>
                                <small class="text-muted" style="font-size: 11px;">Nourished &amp; Back In School</small>
                            </div>
                        </div>
                        <p class="text-muted small lh-base mb-0">
                            "Suffering from nutritional deficiency, Priya struggled in class. Our child welfare nutrition drives supplied her family with fortified meals and clean health checkups. Priya is now energetic and healthy."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support CTA -->
    <section class="py-3 bg-canvas border-top text-center">
        <div class="container py-2">
            <h4 class="fw-bold font-heading mb-2 text-dark">Create More Success Stories With Us</h4>
            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <a href="donate.php" class="btn btn-pill btn-pill-accent btn-sm"><i class="fa-solid fa-heart me-1"></i> Donate / Support Us</a>
                <a href="tel:+918527225832" class="btn btn-pill btn-pill-outline btn-sm"><i class="fa-solid fa-phone me-1"></i> Call: +91 85272 25832</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
