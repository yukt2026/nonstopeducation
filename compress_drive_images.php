<?php
// compress_drive_images.php

$driveDir = __DIR__ . '/images/google_drive';
$files = glob($driveDir . '/*.{jpg,JPG,jpeg,JPEG,png,PNG}', GLOB_BRACE);

echo "Found " . count($files) . " images to compress.\n\n";

$targetMaxBytes = 195 * 1024; // 195 KB (strictly under 200KB)

foreach ($files as $filePath) {
    $filename = basename($filePath);
    $origSize = filesize($filePath);
    $origSizeKB = round($origSize / 1024, 1);
    
    // Determine image type
    $info = @getimagesize($filePath);
    if (!$info) {
        echo "Skip (invalid image): $filename\n";
        continue;
    }
    
    $mime = $info['mime'];
    if ($mime === 'image/jpeg') {
        $srcImg = @imagecreatefromjpeg($filePath);
    } elseif ($mime === 'image/png') {
        $srcImg = @imagecreatefrompng($filePath);
    } else {
        echo "Skip (unsupported type $mime): $filename\n";
        continue;
    }
    
    if (!$srcImg) {
        echo "Failed to load: $filename\n";
        continue;
    }
    
    // Fix EXIF orientation for JPEGs
    if ($mime === 'image/jpeg') {
        $exif = @exif_read_data($filePath);
        $orientation = $exif['Orientation'] ?? 1;
        if ($orientation == 3) {
            $srcImg = imagerotate($srcImg, 180, 0);
        } elseif ($orientation == 6) {
            $srcImg = imagerotate($srcImg, -90, 0);
        } elseif ($orientation == 8) {
            $srcImg = imagerotate($srcImg, 90, 0);
        }
    }
    
    $w = imagesx($srcImg);
    $h = imagesy($srcImg);
    
    // Max dimension for gallery preview: 1400px (plenty for high-DPI screens)
    $maxDim = 1400;
    $scale = 1.0;
    if ($w > $maxDim || $h > $maxDim) {
        $scale = min($maxDim / $w, $maxDim / $h);
    }
    
    $newW = (int)round($w * $scale);
    $newH = (int)round($h * $scale);
    
    $resizedImg = imagecreatetruecolor($newW, $newH);
    // For PNG transparency fallback
    $white = imagecolorallocate($resizedImg, 255, 255, 255);
    imagefill($resizedImg, 0, 0, $white);
    
    imagecopyresampled($resizedImg, $srcImg, 0, 0, 0, 0, $newW, $newH, $w, $h);
    imagedestroy($srcImg);
    
    // Iteratively find quality that ensures < 195KB
    $quality = 84;
    $tempFile = $driveDir . '/__temp_comp.jpg';
    
    while ($quality >= 35) {
        imagejpeg($resizedImg, $tempFile, $quality);
        clearstatcache();
        $currSize = filesize($tempFile);
        if ($currSize <= $targetMaxBytes) {
            break;
        }
        // Step down quality
        if ($currSize > $targetMaxBytes * 1.5) {
            $quality -= 10;
        } else {
            $quality -= 5;
        }
    }
    
    // If still over 195KB, scale down dimensions
    if (filesize($tempFile) > $targetMaxBytes) {
        $smallerW = (int)round($newW * 0.8);
        $smallerH = (int)round($newH * 0.8);
        $downImg = imagecreatetruecolor($smallerW, $smallerH);
        imagecopyresampled($downImg, $resizedImg, 0, 0, 0, 0, $smallerW, $smallerH, $newW, $newH);
        imagedestroy($resizedImg);
        $resizedImg = $downImg;
        $quality = 75;
        while ($quality >= 30) {
            imagejpeg($resizedImg, $tempFile, $quality);
            clearstatcache();
            if (filesize($tempFile) <= $targetMaxBytes) {
                break;
            }
            $quality -= 5;
        }
    }
    
    imagedestroy($resizedImg);
    
    $finalSize = filesize($tempFile);
    $finalSizeKB = round($finalSize / 1024, 1);
    
    // Replace original file with compressed file
    rename($tempFile, $filePath);
    
    echo sprintf("%-45s | Orig: %7.1f KB -> Final: %5.1f KB (Quality: %2d%%)\n", $filename, $origSizeKB, $finalSizeKB, $quality);
}

echo "\nAll done!\n";
