<?php
$pageTitle = "Our Photo Gallery | Non Stop Education & Social Welfare Foundation";
$pageDescription = "Explore real ground photos from Non Stop Education's community school centres, child welfare, smart classrooms, kit distribution drives, and women empowerment workshops.";
$activePage = "gallery";

// Full collection of 40 ground images from Google Drive folder (all compressed strictly under 200KB)
$galleryItems = [
    [
        'file' => 'IMG_20240317_115241.jpg',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-danger',
        'title' => 'Outdoor Slum Study Circle',
        'description' => 'Dedicated volunteers conducting open-air foundational education and reading sessions for underprivileged children.'
    ],
    [
        'file' => 'IMG_20240317_115634.jpg',
        'category' => 'volunteers',
        'category_name' => 'Mentorship',
        'badge_class' => 'bg-primary',
        'title' => 'Heartfelt Volunteer Mentorship',
        'description' => 'Mentors sitting closely with community children, building trust and inspiring them to pursue regular schooling.'
    ],
    [
        'file' => 'IMG_20240317_154021.jpg',
        'category' => 'events',
        'category_name' => 'Youth & Team',
        'badge_class' => 'bg-warning text-dark',
        'title' => 'Smiles of Tomorrow Celebration',
        'description' => 'Foundation leadership, youth volunteers, and enthusiastic children united in joy after a rewarding learning camp.'
    ],
    [
        'file' => 'IMG_20240407_114901.jpg',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-success',
        'title' => 'Lal Bagh Community Learning Camp',
        'description' => 'Dedicated teacher holding foundational Hindi, English and Math classes for dozens of neighborhood kids.'
    ],
    [
        'file' => 'IMG_20240421_110741.jpg',
        'category' => 'education',
        'category_name' => 'Early Literacy',
        'badge_class' => 'bg-info text-dark',
        'title' => 'First Steps Towards Literacy',
        'description' => 'A young toddler joyfully holding a pen and notebook, representing the foundation of a bright future.'
    ],
    [
        'file' => 'IMG_2154.JPG',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-danger',
        'title' => 'Attentive Young Minds',
        'description' => 'Children sitting together in an open slum corridor, completely focused on the volunteer teacher.'
    ],
    [
        'file' => 'IMG_2169.JPG',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-primary',
        'title' => 'Hands Raised in Curiosity',
        'description' => 'Students eagerly raising their hands with pencils to solve questions and participate in class exercises.'
    ],
    [
        'file' => 'IMG_2178.JPG',
        'category' => 'education',
        'category_name' => 'Girl Child Education',
        'badge_class' => 'bg-success',
        'title' => 'Deep In Thought & Study',
        'description' => 'A young girl immersed in solving classwork, showcasing determination to overcome obstacles through education.'
    ],
    [
        'file' => 'IMG_2180.JPG',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-warning text-dark',
        'title' => 'Community Storytelling & Lessons',
        'description' => 'Interactive lessons and moral stories bringing warmth and enthusiasm to grassroots learners.'
    ],
    [
        'file' => 'IMG_2192.JPG',
        'category' => 'volunteers',
        'category_name' => 'Volunteers',
        'badge_class' => 'bg-secondary',
        'title' => 'One-on-One Student Assessment',
        'description' => 'Youth volunteers in NGO uniforms evaluating reading and arithmetic levels of students in the community.'
    ],
    [
        'file' => 'IMG_2203.JPG',
        'category' => 'education',
        'category_name' => 'Girl Child Education',
        'badge_class' => 'bg-danger',
        'title' => 'The Bright Smiles of Hope',
        'description' => 'Group of spirited young girls flashing victory signs, symbolizing self-belief and joy through learning.'
    ],
    [
        'file' => 'IMG_2211.JPG',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-info text-dark',
        'title' => 'Finding Her Voice & Confidence',
        'description' => 'A confident young student speaking into the microphone, overcoming stage fear and expressing her ideas.'
    ],
    [
        'file' => 'IMG_2212.JPG',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-primary',
        'title' => 'Gathering for Knowledge',
        'description' => 'Dozens of children gathered with notebooks in hand, waiting attentively for their turn to read and practice.'
    ],
    [
        'file' => 'IMG_2227.JPG',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-success',
        'title' => 'Thumbs Up for Quality Education',
        'description' => 'Cheerful children expressing excitement and gratitude with their new books and learning materials.'
    ],
    [
        'file' => 'IMG_3083.JPG',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-dark',
        'title' => 'Dedicated Math & Writing Mentorship',
        'description' => 'Student mentor patiently guiding children step-by-step through math sums and notebook exercises.'
    ],
    [
        'file' => 'IMG_3085.JPG',
        'category' => 'kits',
        'category_name' => 'Kit Distribution',
        'badge_class' => 'bg-danger',
        'title' => 'Proud Learners with Study Kits',
        'description' => 'Children proudly holding their newly distributed stationery pouches and notebooks beside their home.'
    ],
    [
        'file' => 'IMG_3101.JPG',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-primary',
        'title' => 'Beaming with Academic Pride',
        'description' => 'Smiling young students presenting their neatly completed homework and handwriting practice.'
    ],
    [
        'file' => 'IMG_3102.JPG',
        'category' => 'volunteers',
        'category_name' => 'Volunteers',
        'badge_class' => 'bg-warning text-dark',
        'title' => 'Compassion, Care & Mentorship',
        'description' => 'Foundation volunteers sharing memorable moments with enthusiastic young community students.'
    ],
    [
        'file' => 'IMG_3775.JPG',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-success',
        'title' => 'Every Child Deserves an Opportunity',
        'description' => 'Children raising hands high with pure enthusiasm to answer questions during a weekend tutoring drive.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-10 at 5.49.12 PM.jpeg',
        'category' => 'women',
        'category_name' => 'Women Rights',
        'badge_class' => 'bg-danger',
        'title' => 'POSH Act College Campus Seminar',
        'description' => 'Advocate Shubham Thakur sensitizing engineering college students and staff on women legal rights.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-10 at 5.49.14 PM.jpeg',
        'category' => 'women',
        'category_name' => 'Women Rights',
        'badge_class' => 'bg-dark',
        'title' => 'Workplace Safety & Legal Awareness',
        'description' => 'Interactive digital keynote detailing the legal framework and protections under POSH Act 2013.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 11.44.33 AM.jpeg',
        'category' => 'kits',
        'category_name' => 'Kit Distribution',
        'badge_class' => 'bg-success',
        'title' => 'Free Notebook & Stationery Kit Drive',
        'description' => 'Joyful children holding up brand new notebooks, coloring books, and pens distributed under tree shade.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.21.57 PM.jpeg',
        'category' => 'community',
        'category_name' => 'Elder Care',
        'badge_class' => 'bg-info text-dark',
        'title' => 'Elderly Care & Birthday Celebration',
        'description' => 'Bringing smiles and warmth to senior citizens in an old age home with cake cutting and celebrations.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.21.58 PM (1).jpeg',
        'category' => 'events',
        'category_name' => 'Youth & Culture',
        'badge_class' => 'bg-warning text-dark',
        'title' => 'Delhi Dance Carnival Season 2 Awards',
        'description' => 'Nonstop Education Foundation honoring talented youth, chief guests, and achievers with awards.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.21.58 PM.jpeg',
        'category' => 'community',
        'category_name' => 'Elder Care',
        'badge_class' => 'bg-primary',
        'title' => 'Warmth & Respect for Senior Citizens',
        'description' => 'Volunteers gifting warm shawls, nutritious treats, and emotional companionship to elderly mothers.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.32.15 PM.jpeg',
        'category' => 'kits',
        'category_name' => 'Kit Distribution',
        'badge_class' => 'bg-danger',
        'title' => 'Quality Learning Tools for Every Child',
        'description' => 'Underprivileged students seated happily with their newly received DOMS geometry sets and notebooks.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.32.17 PM.jpeg',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-success',
        'title' => 'Action Rhymes & Interactive Play',
        'description' => 'Mentors leading energetic hand-clapping and action songs to build confidence and joy among learners.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.32.51 PM.jpeg',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-primary',
        'title' => 'Moral Lessons & Physical Exercises',
        'description' => 'Children engaging in coordinated physical warm-ups before diving into their foundational reading classes.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.33.05 PM.jpeg',
        'category' => 'schools',
        'category_name' => 'Smart Classroom',
        'badge_class' => 'bg-primary',
        'title' => 'CM Shri School Digital Smart Board Class',
        'description' => 'Primary school students in uniform exploring animated lessons on interactive smart boards at Mansarovar Park.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.33.06 PM.jpeg',
        'category' => 'schools',
        'category_name' => 'Smart Classroom',
        'badge_class' => 'bg-success',
        'title' => 'Interactive Primary School Learning',
        'description' => 'Well-equipped classroom setup nurturing foundational language, listening, and collaborative skills.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.33.10 PM.jpeg',
        'category' => 'schools',
        'category_name' => 'Smart Classroom',
        'badge_class' => 'bg-info text-dark',
        'title' => 'English Grammar & Language Lab',
        'description' => 'Students mastering English tenses and vocabulary in a vibrant, supportive classroom environment.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.33.20 PM.jpeg',
        'category' => 'kits',
        'category_name' => 'Kit Distribution',
        'badge_class' => 'bg-danger',
        'title' => 'Doorstep Stationery Distribution',
        'description' => 'Providing high-quality notebooks, pencils, and educational essentials directly to children at grassroots.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.34.46 PM.jpeg',
        'category' => 'women',
        'category_name' => 'Women Health',
        'badge_class' => 'bg-danger',
        'title' => 'Menstrual Hygiene & Sanitary Kit Drive',
        'description' => 'Foundation women mentors educating adolescent girls on menstrual hygiene and distributing sanitary pads.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.35.27 PM.jpeg',
        'category' => 'volunteers',
        'category_name' => 'Volunteers',
        'badge_class' => 'bg-dark',
        'title' => 'Grassroots Volunteer Force on Ground',
        'description' => 'The vibrant team of Non Stop Education Foundation standing united in front of the community cluster.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.35.56 PM (1).jpeg',
        'category' => 'women',
        'category_name' => 'Women Rights',
        'badge_class' => 'bg-primary',
        'title' => 'Girls School Legal Rights & Career Workshop',
        'description' => 'Conducting motivational and rights awareness workshops for senior secondary school girls.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.35.56 PM.jpeg',
        'category' => 'events',
        'category_name' => 'Patriotic Events',
        'badge_class' => 'bg-danger',
        'title' => 'Republic Day Celebration with Slum Youth',
        'description' => 'Grand national festival celebration inspiring community children and youth with patriotism and education.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.35.57 PM.jpeg',
        'category' => 'schools',
        'category_name' => 'Smart Classroom',
        'badge_class' => 'bg-success',
        'title' => 'School Leadership & Student Collaboration',
        'description' => 'Faculty members, NGO educators, and bright high school students gathered at CM Shri School.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.36.05 PM.jpeg',
        'category' => 'kits',
        'category_name' => 'Kit Distribution',
        'badge_class' => 'bg-danger',
        'title' => 'Mass School Supplies & Kit Handover',
        'description' => 'A large-scale community distribution drive providing study kits, stationery boxes, and refreshments.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.36.06 PM.jpeg',
        'category' => 'education',
        'category_name' => 'Girl Child Education',
        'badge_class' => 'bg-warning text-dark',
        'title' => 'Empowering Slum Girls Through Education',
        'description' => 'Dedicated volunteers mentoring young girls and building a safe, encouraging space for learning.'
    ],
    [
        'file' => 'WhatsApp Image 2026-11-14 at 12.36.07 PM.jpeg',
        'category' => 'education',
        'category_name' => 'Child Education',
        'badge_class' => 'bg-success',
        'title' => 'United in Joy, Learning & Hope',
        'description' => 'Vibrant collage capturing the pure smiles, energy, and gratitude of community children and youth leaders.'
    ]
];

$extraHead = '
    <style>
        /* Gallery Filter Pills */
        .gallery-filter-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 8px;
            margin-bottom: 2rem;
        }
        .filter-btn {
            background: #ffffff;
            border: 1px solid rgba(24, 59, 118, 0.15);
            color: #1e293b;
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            transition: all 0.25s ease;
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(0,0,0,0.04);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .filter-btn:hover {
            background: #f1f5f9;
            color: #183B76;
            border-color: #183B76;
            transform: translateY(-1px);
        }
        .filter-btn.active {
            background: #183B76;
            color: #ffffff;
            border-color: #183B76;
            box-shadow: 0 4px 12px rgba(24, 59, 118, 0.25);
        }
        .filter-btn .count-badge {
            background: rgba(0, 0, 0, 0.08);
            border-radius: 20px;
            padding: 1px 7px;
            font-size: 0.72rem;
        }
        .filter-btn.active .count-badge {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        /* Responsive Masonry Layout */
        .gallery-grid {
            column-count: 1;
            column-gap: 1.25rem;
        }
        @media (min-width: 576px) {
            .gallery-grid { column-count: 2; }
        }
        @media (min-width: 992px) {
            .gallery-grid { column-count: 3; }
        }
        @media (min-width: 1200px) {
            .gallery-grid { column-count: 3; }
        }

        /* Card Styling */
        .gallery-card {
            break-inside: avoid;
            margin-bottom: 1.25rem;
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid rgba(0,0,0,0.06);
            box-shadow: 0 3px 12px rgba(0,0,0,0.05);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            cursor: pointer;
        }
        .gallery-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(0,0,0,0.12);
        }

        .gallery-thumb-wrap {
            position: relative;
            overflow: hidden;
            background: #f1f5f9;
        }
        .gallery-thumb-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.45s ease;
        }
        .gallery-card:hover .gallery-thumb-wrap img {
            transform: scale(1.03);
        }

        .gallery-zoom-pill {
            position: absolute;
            top: 12px;
            right: 12px;
            background: rgba(15, 23, 42, 0.7);
            color: #fff;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            opacity: 0;
            transform: scale(0.8);
            transition: all 0.25s ease;
            backdrop-filter: blur(4px);
        }
        .gallery-card:hover .gallery-zoom-pill {
            opacity: 1;
            transform: scale(1);
        }

        .gallery-card-body {
            padding: 0.85rem 1rem;
            text-align: center;
            background: #ffffff;
        }
        .gallery-card-title {
            font-family: var(--font-heading, "Outfit", sans-serif);
            font-weight: 600;
            font-size: 0.95rem;
            color: #1e293b;
            line-height: 1.4;
            margin: 0;
            transition: color 0.2s ease;
        }
        .gallery-card:hover .gallery-card-title {
            color: #E52F37;
        }

        /* Lightbox Modal */
        #galleryLightbox .modal-content {
            background: rgba(15, 23, 42, 0.98);
            border: none;
            border-radius: 16px;
            color: #fff;
        }
        #galleryLightbox .modal-header {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1rem 1.5rem;
        }
        #galleryLightbox .btn-close {
            filter: invert(1);
        }
        #lightboxImg {
            max-height: 72vh;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            border-radius: 8px;
            margin: 0 auto;
            display: block;
            box-shadow: 0 10px 40px rgba(0,0,0,0.5);
        }
        .lightbox-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.15);
            color: #fff;
            border: none;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.2s ease;
            backdrop-filter: blur(5px);
            z-index: 10;
        }
        .lightbox-nav-btn:hover {
            background: #E52F37;
            color: #fff;
            transform: translateY(-50%) scale(1.1);
        }
        .lightbox-prev-btn { left: 15px; }
        .lightbox-next-btn { right: 15px; }

        /* Smooth Hide for filtered elements */
        .gallery-card.d-none-filter {
            display: none !important;
        }
    </style>
';

include 'includes/header.php';
?>

    <!-- Page Header -->
    <header class="page-header bg-white border-bottom">
        <div class="container text-center" data-aos="fade-up">
            <span class="eyebrow-tag text-primary mx-auto d-table mb-2">Ground Impact &amp; Field Stories</span>
            <h1 class="page-header-title font-heading fw-bold mb-2">Our <span class="text-danger">Photo Gallery</span></h1>
            <div class="mx-auto" style="width: 50px; height: 3px; background: linear-gradient(90deg, #183B76, #E52F37); border-radius: var(--radius-pill); margin-bottom: 12px;"></div>
            <p class="lead text-muted mx-auto mb-0" style="max-width: 720px; font-size: 1rem; line-height: 1.6;">
                Real ground photos from Non Stop Education's community learning centres, smart school classrooms, study kit distributions, senior citizen care, and youth empowerment seminars.
            </p>
        </div>
    </header>

    <!-- Gallery Section -->
    <section class="section-padding bg-canvas">
        <div class="container-xl">

            <!-- Category Filter Tabs -->
            <div class="gallery-filter-bar" data-aos="fade-up">
                <button type="button" class="filter-btn active" data-filter="all">
                    <i class="fa-solid fa-border-all"></i> All Moments <span class="count-badge"><?php echo count($galleryItems); ?></span>
                </button>
                <button type="button" class="filter-btn" data-filter="education">
                    <i class="fa-solid fa-book-open-reader"></i> Child Education
                </button>
                <button type="button" class="filter-btn" data-filter="schools">
                    <i class="fa-solid fa-chalkboard-user"></i> Smart Classrooms
                </button>
                <button type="button" class="filter-btn" data-filter="kits">
                    <i class="fa-solid fa-gift"></i> Kit Distribution
                </button>
                <button type="button" class="filter-btn" data-filter="women">
                    <i class="fa-solid fa-hands-holding-child"></i> Women Rights &amp; Health
                </button>
                <button type="button" class="filter-btn" data-filter="volunteers">
                    <i class="fa-solid fa-people-carry-box"></i> Volunteers on Ground
                </button>
                <button type="button" class="filter-btn" data-filter="community">
                    <i class="fa-solid fa-heart-pulse"></i> Elder Care
                </button>
                <button type="button" class="filter-btn" data-filter="events">
                    <i class="fa-solid fa-trophy"></i> Youth &amp; Events
                </button>
            </div>

            <!-- Gallery Cards Grid -->
            <div class="gallery-grid" id="galleryGrid">
                <?php foreach ($galleryItems as $index => $item): 
                    $safeFile = 'images/google_drive/' . rawurlencode($item['file']);
                    $fileSizeKB = file_exists(__DIR__ . '/images/google_drive/' . $item['file']) ? round(filesize(__DIR__ . '/images/google_drive/' . $item['file']) / 1024, 0) . ' KB' : 'under 200 KB';
                ?>
                <div class="gallery-card" 
                     data-category="<?php echo htmlspecialchars($item['category']); ?>" 
                     data-index="<?php echo $index; ?>"
                     data-aos="fade-up"
                     onclick="openLightbox(<?php echo $index; ?>)">
                    <div class="gallery-thumb-wrap">
                        <img src="<?php echo $safeFile; ?>" 
                             alt="<?php echo htmlspecialchars($item['title']); ?>" 
                             loading="lazy">
                        <span class="gallery-zoom-pill" title="Click to view full photo">
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </span>
                    </div>
                    <div class="gallery-card-body">
                        <h6 class="gallery-card-title"><?php echo htmlspecialchars($item['title']); ?></h6>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Empty State for Filters -->
            <div id="noResultsMsg" class="text-center py-5 d-none">
                <i class="fa-regular fa-image fa-3x text-muted mb-3"></i>
                <h5 class="fw-bold text-dark">No photos found in this category</h5>
                <p class="text-muted small">Please select another category or click "All Moments".</p>
            </div>

        </div>
    </section>

    <!-- Support CTA -->
    <section class="py-5 bg-white border-top text-center">
        <div class="container py-2">
            <span class="eyebrow-tag text-danger mx-auto d-table mb-2">Be Part Of This Impact</span>
            <h3 class="fw-bold font-heading mb-2 text-dark">Support Our Ground Missions &amp; Outreach Drives</h3>
            <p class="text-muted mx-auto mb-4" style="max-width: 640px; font-size: 0.95rem; line-height: 1.6;">
                Every photo represents lives touched, children inspired, and dignity restored. Help us bring education, nutrition kits, and empowerment to more communities.
            </p>
            <div class="d-flex justify-content-center gap-2 flex-wrap">
                <a href="donate.php" class="btn btn-pill btn-pill-accent"><i class="fa-solid fa-heart me-1"></i> Donate / Sponsor a Drive</a>
                <a href="volunteer.php" class="btn btn-pill btn-pill-outline"><i class="fa-solid fa-user-plus me-1"></i> Volunteer With Us</a>
                <a href="tel:+917042944703" class="btn btn-pill btn-pill-outline"><i class="fa-solid fa-phone me-1"></i> Helpline: +91 70429 44703</a>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="modal fade" id="galleryLightbox" tabindex="-1" aria-labelledby="lightboxModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between align-items-center">
                    <h5 class="modal-title font-heading fw-bold mb-0" id="lightboxModalTitle">Image Title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body position-relative p-2 p-md-3 text-center">
                    <button type="button" class="lightbox-nav-btn lightbox-prev-btn" onclick="prevLightbox(event)" title="Previous photo (Left Arrow)">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>
                    <img id="lightboxImg" src="" alt="Gallery Image" class="img-fluid">
                    <button type="button" class="lightbox-nav-btn lightbox-next-btn" onclick="nextLightbox(event)" title="Next photo (Right Arrow)">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>
                <div class="modal-footer justify-content-between flex-wrap gap-2 border-top border-secondary border-opacity-25 px-3 py-2">
                    <span id="lightboxCounter" class="text-white-50 small">1 / <?php echo count($galleryItems); ?></span>
                    <a id="lightboxDirectLink" href="#" target="_blank" class="btn btn-sm btn-outline-light rounded-pill px-3">
                        <i class="fa-solid fa-arrow-up-right-from-square me-1"></i> View Full
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php 
$extraScripts = '
<script>
    // Gallery Items JSON for Lightbox Navigation
    const galleryItems = ' . json_encode($galleryItems, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . ';
    let currentIndex = 0;
    let visibleIndices = galleryItems.map((_, i) => i);
    let lightboxModal = null;

    document.addEventListener("DOMContentLoaded", function() {
        lightboxModal = new bootstrap.Modal(document.getElementById("galleryLightbox"));
        
        // Category Filtering
        const filterBtns = document.querySelectorAll(".filter-btn");
        const cards = document.querySelectorAll(".gallery-card");
        const noResults = document.getElementById("noResultsMsg");

        filterBtns.forEach(btn => {
            btn.addEventListener("click", function() {
                filterBtns.forEach(b => b.classList.remove("active"));
                this.classList.add("active");
                const filter = this.getAttribute("data-filter");

                visibleIndices = [];
                let count = 0;

                cards.forEach((card, idx) => {
                    const cat = card.getAttribute("data-category");
                    if (filter === "all" || cat === filter) {
                        card.classList.remove("d-none-filter");
                        visibleIndices.push(idx);
                        count++;
                    } else {
                        card.classList.add("d-none-filter");
                    }
                });

                if (count === 0) {
                    noResults.classList.remove("d-none");
                } else {
                    noResults.classList.add("d-none");
                }
            });
        });

        // Keyboard Navigation in Lightbox
        document.addEventListener("keydown", function(e) {
            const modalEl = document.getElementById("galleryLightbox");
            if (modalEl.classList.contains("show")) {
                if (e.key === "ArrowLeft") {
                    prevLightbox();
                } else if (e.key === "ArrowRight") {
                    nextLightbox();
                }
            }
        });
    });

    function openLightbox(index) {
        currentIndex = index;
        updateLightboxContent();
        lightboxModal.show();
    }

    function updateLightboxContent() {
        const item = galleryItems[currentIndex];
        if (!item) return;

        const imgPath = "images/google_drive/" + encodeURIComponent(item.file);
        document.getElementById("lightboxImg").src = imgPath;
        document.getElementById("lightboxModalTitle").textContent = item.title;
        document.getElementById("lightboxCounter").textContent = (currentIndex + 1) + " / " + galleryItems.length;
        document.getElementById("lightboxDirectLink").href = imgPath;
    }

    function prevLightbox(e) {
        if (e) e.stopPropagation();
        const pos = visibleIndices.indexOf(currentIndex);
        if (pos > 0) {
            currentIndex = visibleIndices[pos - 1];
        } else {
            currentIndex = visibleIndices[visibleIndices.length - 1];
        }
        updateLightboxContent();
    }

    function nextLightbox(e) {
        if (e) e.stopPropagation();
        const pos = visibleIndices.indexOf(currentIndex);
        if (pos < visibleIndices.length - 1 && pos !== -1) {
            currentIndex = visibleIndices[pos + 1];
        } else {
            currentIndex = visibleIndices[0];
        }
        updateLightboxContent();
    }
</script>
';

include 'includes/footer.php'; 
?>
