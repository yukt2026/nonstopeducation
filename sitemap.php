<?php
header("Content-Type: application/xml; charset=utf-8");

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https" : "http";
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'nonstopeducation.org';
$baseUrl = $protocol . '://' . $host;

$pages = [
    ['loc' => '/', 'priority' => '1.0', 'changefreq' => 'daily'],
    ['loc' => '/about.php', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['loc' => '/programs.php', 'priority' => '0.9', 'changefreq' => 'weekly'],
    ['loc' => '/program-education.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/program-child-welfare.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/program-women-empowerment.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/program-skill-development.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/gallery.php', 'priority' => '0.8', 'changefreq' => 'weekly'],
    ['loc' => '/volunteer.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/donate.php', 'priority' => '0.8', 'changefreq' => 'monthly'],
    ['loc' => '/contact.php', 'priority' => '0.7', 'changefreq' => 'monthly'],
    ['loc' => '/privacy.php', 'priority' => '0.3', 'changefreq' => 'yearly'],
    ['loc' => '/terms.php', 'priority' => '0.3', 'changefreq' => 'yearly']
];

$today = date('Y-m-d');

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $p): ?>
    <url>
        <loc><?php echo htmlspecialchars($baseUrl . $p['loc']); ?></loc>
        <lastmod><?php echo $today; ?></lastmod>
        <changefreq><?php echo $p['changefreq']; ?></changefreq>
        <priority><?php echo $p['priority']; ?></priority>
    </url>
<?php endforeach; ?>
</urlset>
