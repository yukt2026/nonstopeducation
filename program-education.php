<?php
$pageTitle = "Education & School Centres | Non Stop Education & Social Welfare Foundation";
$pageDescription = "Free community education, after-school learning centres, and academic support for underprivileged children and slum students.";
$activePage = "program-education";
include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white border-bottom">
        <div class="container text-center" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-2">Core Educational Mission</span>
            <h1 class="page-header-title font-heading fw-bold mb-2">Education &amp; <span class="text-danger">School Centres</span></h1>
            <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #183B76, #E52F37); border-radius: var(--radius-pill); margin-bottom: 12px;"></div>
            <p class="lead text-muted mx-auto mb-0" style="max-width: 680px; font-size: 1rem; line-height: 1.6;">
                Ensuring that every child, regardless of social or economic background, has access to quality education, equal opportunities, and a brighter future.
            </p>
        </div>
    </header>

    <!-- Main Content Section -->
    <section class="section-padding bg-canvas">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6 pe-lg-4" data-aos="fade-right">
                    <span class="badge bg-primary text-white py-1 px-2.5 rounded-pill mb-2" style="font-size: 11px;">Community Learning Hubs</span>
                    <h2 class="fw-bold font-heading mb-3 text-dark">
                        Transforming Lives In Slums &amp; Underprivileged Areas
                    </h2>
                    <p class="text-muted lh-base mb-2 small">
                        Children enrolled in government schools or residing in urban slums face severe learning deficits due to lack of academic guidance at home, absence of study materials, and socio-economic pressures.
                    </p>
                    <p class="text-muted lh-base mb-3 small">
                        <strong>Non Stop Education &amp; Social Welfare Foundation</strong> establishes free community school centres and study spaces right within slum clusters and village neighborhoods. Led by caring volunteer educators, our centres provide structured remedial learning, homework support, and foundational literacy.
                    </p>

                    <div class="p-3 bg-white rounded-3 border-start border-primary border-4 shadow-xs mb-3">
                        <h6 class="fw-bold text-dark mb-2">Key Features of Our School Centres</h6>
                        <ul class="list-unstyled d-flex flex-column gap-1 text-muted small mb-0">
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Free Daily After-School Classes:</strong> 2-3 hours of dedicated tutoring in Math, Science, and Languages.</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Free Learning Resources:</strong> Course books, notebooks, stationery kits, and school bags.</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Dropout Prevention:</strong> Working with parents to retain children in formal government schools.</li>
                            <li><i class="fa-solid fa-check text-success me-2"></i> <strong>Activity-Based Learning:</strong> Storytelling, educational games, and moral education.</li>
                        </ul>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <a href="volunteer.php" class="btn btn-pill btn-pill-primary btn-sm">
                            <i class="fa-solid fa-chalkboard-user me-1"></i> Volunteer As Teacher
                        </a>
                        <a href="donate.php" class="btn btn-pill btn-pill-accent btn-sm">
                            <i class="fa-solid fa-heart me-1"></i> Sponsor A Student
                        </a>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                    <div class="position-relative">
                        <img src="images/education_centre.jpg" class="img-fluid rounded-4 shadow-sm w-100" style="height: 360px; object-fit: cover;" alt="Non Stop Education Centre">
                        <div class="p-2.5 bg-white rounded-3 shadow-xs border mt-2.5 d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                    <i class="fa-solid fa-graduation-cap small"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 fw-bold text-dark small">Have a child needing education?</h6>
                                    <small class="text-muted" style="font-size: 11px;">Contact our admission desk</small>
                                </div>
                            </div>
                            <a href="tel:+917042944703" class="btn btn-sm btn-pill-accent text-nowrap py-1 px-2.5" style="font-size: 12px;">+91 70429 44703</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Support CTA -->
    <section class="py-4 bg-white border-top text-center">
        <div class="container py-2">
            <h3 class="fw-bold font-heading mb-2 text-dark">Help Us Open More Learning Centres</h3>
            <p class="text-muted mx-auto mb-3 small" style="max-width: 600px;">
                Your generous contribution enables us to rent clean spaces, purchase blackboards, stationery, and books for underprivileged children.
            </p>
            <div class="d-flex justify-content-center gap-2">
                <a href="donate.php" class="btn btn-pill btn-pill-accent btn-md"><i class="fa-solid fa-heart me-1"></i> Donate to School Centres</a>
                <a href="contact.php" class="btn btn-pill btn-pill-outline btn-md"><i class="fa-solid fa-envelope me-1"></i> Contact Desk</a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
