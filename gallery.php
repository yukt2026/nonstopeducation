<?php
$pageTitle = "Our Photo Gallery | Non Stop Education & Social Welfare Foundation";
$pageDescription = "Explore real ground photos from Non Stop Education's community school centres, child welfare, smart classrooms, and college safety seminars.";
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
            <h1 class="page-header-title font-heading fw-bold mb-2">Our <span class="text-danger">Photo Gallery</span></h1>
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
                    <img src="images/real_activity_1.jpg" alt="Underprivileged Children Free Education Camp">
                    <div class="gallery-overlay">
                        <span class="badge bg-danger rounded-pill mb-1" style="font-size: 10px;">Education</span>
                        <h6 class="fw-bold mb-0 text-white">Outdoor Slum Learning Camp</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Foundational reading and academic support.</p>
                    </div>
                </div>

                <!-- Item 2 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/real_activity_2.jpg" alt="Community Classroom Session">
                    <div class="gallery-overlay">
                        <span class="badge bg-primary rounded-pill mb-1" style="font-size: 10px;">Learning Centre</span>
                        <h6 class="fw-bold mb-0 text-white">Active Classroom Mentorship</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Dedicated volunteer teaching sessions.</p>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="150">
                    <img src="images/real_activity_3.jpg" alt="Child Welfare & Nutrition Drive">
                    <div class="gallery-overlay">
                        <span class="badge bg-success rounded-pill mb-1" style="font-size: 10px;">Child Welfare</span>
                        <h6 class="fw-bold mb-0 text-white">Nutrition &amp; School Kits</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Distributing essential kits and healthy meals.</p>
                    </div>
                </div>

                <!-- Item 4 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/real_activity_4.jpg" alt="Interactive Student Learning">
                    <div class="gallery-overlay">
                        <span class="badge bg-warning text-dark rounded-pill mb-1" style="font-size: 10px;">Classroom</span>
                        <h6 class="fw-bold mb-0 text-white">Foundational Literacy</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Engaging students with interactive learning.</p>
                    </div>
                </div>

                <!-- Item 5 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="250">
                    <img src="images/real_activity_5.jpg" alt="Community Empowerment Camp">
                    <div class="gallery-overlay">
                        <span class="badge bg-danger text-white rounded-pill mb-1" style="font-size: 10px;">Empowerment</span>
                        <h6 class="fw-bold mb-0 text-white">Youth &amp; Women Workshop</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Vocational training and community empowerment.</p>
                    </div>
                </div>

                <!-- Item 6 -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="images/real_activity_6.jpg" alt="Grassroots Volunteer Outreach">
                    <div class="gallery-overlay">
                        <span class="badge bg-info text-dark rounded-pill mb-1" style="font-size: 10px;">Volunteers</span>
                        <h6 class="fw-bold mb-0 text-white">Grassroots Field Outreach</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Volunteers on ground across communities.</p>
                    </div>
                </div>

                <!-- Item 7: Digital Smart Classroom -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="100">
                    <img src="images/seminar_smart_class.jpg" alt="Digital Smart Classroom and Samagra Shiksha">
                    <div class="gallery-overlay">
                        <span class="badge bg-primary rounded-pill mb-1" style="font-size: 10px;">Smart Education</span>
                        <h6 class="fw-bold mb-0 text-white">Digital Smart Classroom</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Interactive digital learning in schools.</p>
                    </div>
                </div>

                <!-- Item 8: POSH Act Seminar -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="150">
                    <img src="images/seminar_posh_act.jpg" alt="POSH Act and Women's Rights Legal Seminar">
                    <div class="gallery-overlay">
                        <span class="badge bg-danger rounded-pill mb-1" style="font-size: 10px;">Women's Rights</span>
                        <h6 class="fw-bold mb-0 text-white">POSH Act Campus Seminar</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Educating college students &amp; staff on POSH laws.</p>
                    </div>
                </div>

                <!-- Item 9: Delhi Police Workshop -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="200">
                    <img src="images/seminar_dignitaries_police.jpg" alt="Delhi Police Officers and Foundation Leaders Joint Workshop">
                    <div class="gallery-overlay">
                        <span class="badge bg-success rounded-pill mb-1" style="font-size: 10px;">Safety Drive</span>
                        <h6 class="fw-bold mb-0 text-white">Police-Led Safety Workshop</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Joint safety drive with Delhi Police dignitaries.</p>
                    </div>
                </div>

                <!-- Item 10: College Auditorium -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="250">
                    <img src="images/seminar_college_auditorium.jpg" alt="Auditorium Full of College Students">
                    <div class="gallery-overlay">
                        <span class="badge bg-warning text-dark rounded-pill mb-1" style="font-size: 10px;">College Youth</span>
                        <h6 class="fw-bold mb-0 text-white">College Auditorium Session</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Hundreds of students advocating for gender safety.</p>
                    </div>
                </div>

                <!-- Item 11: School Activity -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="300">
                    <img src="images/seminar_school_activity.jpg" alt="School Students Group Learning Activity">
                    <div class="gallery-overlay">
                        <span class="badge bg-danger rounded-pill mb-1" style="font-size: 10px;">Samagra Shiksha</span>
                        <h6 class="fw-bold mb-0 text-white">Classroom Interactive Activity</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Nurturing young minds through creative exercises.</p>
                    </div>
                </div>

                <!-- Item 12: Speaker Close Up -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="350">
                    <img src="images/seminar_speaker_close.jpg" alt="Foundation Leader Legal Advocacy">
                    <div class="gallery-overlay">
                        <span class="badge bg-dark text-white rounded-pill mb-1" style="font-size: 10px;">Leadership</span>
                        <h6 class="fw-bold mb-0 text-white">Legal Advocacy &amp; Guidance</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Empowering women with knowledge of their rights.</p>
                    </div>
                </div>

                <!-- Item 13: Stage Session -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="400">
                    <img src="images/seminar_stage_session.jpg" alt="Interactive Campus Stage Session">
                    <div class="gallery-overlay">
                        <span class="badge bg-primary rounded-pill mb-1" style="font-size: 10px;">Campus Session</span>
                        <h6 class="fw-bold mb-0 text-white">Campus Stage Presentation</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Keynote on gender equality &amp; workplace safety.</p>
                    </div>
                </div>

                <!-- Item 14: Hall Audience -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="450">
                    <img src="images/seminar_hall_audience.jpg" alt="Students in Seminar Hall">
                    <div class="gallery-overlay">
                        <span class="badge bg-info text-dark rounded-pill mb-1" style="font-size: 10px;">Engagement</span>
                        <h6 class="fw-bold mb-0 text-white">Youth Rights Dialogue</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Interactive Q&amp;A on victim reporting and support.</p>
                    </div>
                </div>

                <!-- Item 15: Wide Hall -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="500">
                    <img src="images/seminar_wide_hall.jpg" alt="Wide View of College Seminar Hall">
                    <div class="gallery-overlay">
                        <span class="badge bg-success rounded-pill mb-1" style="font-size: 10px;">Auditorium</span>
                        <h6 class="fw-bold mb-0 text-white">Campus-Wide Seminar</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Institutional capacity building &amp; student safety.</p>
                    </div>
                </div>

                <!-- Item 16: Presentation Stage -->
                <div class="gallery-item" data-aos="fade-up" data-aos-delay="550">
                    <img src="images/seminar_presentation_stage.jpg" alt="Foundation Mission Presentation">
                    <div class="gallery-overlay">
                        <span class="badge bg-danger rounded-pill mb-1" style="font-size: 10px;">Campaign</span>
                        <h6 class="fw-bold mb-0 text-white">Safety Campaign Keynote</h6>
                        <p class="small text-white-50 mb-0" style="font-size: 11px;">Grassroots mission to protect and empower.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support CTA -->
    <section class="py-4 bg-canvas border-top text-center">
        <div class="container py-2">
            <h4 class="fw-bold font-heading mb-2 text-dark">Support Our Ground Missions &amp; Outreach Drives</h4>
            <p class="text-muted small mx-auto mb-3" style="max-width: 600px;">
                Whether you want to sponsor study kits, help set up digital classrooms, or conduct an awareness workshop, join hands with Non Stop Education.
            </p>
            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <a href="donate.php" class="btn btn-pill btn-pill-accent btn-sm"><i class="fa-solid fa-heart me-1"></i> Donate / Support Us</a>
                <a href="tel:+917042944703" class="btn btn-pill btn-pill-outline btn-sm"><i class="fa-solid fa-phone me-1"></i> Call: +91 70429 44703</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
