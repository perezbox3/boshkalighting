<?php
/**
 * Universal Image Optimizer
 * Automatically generates and serves optimized versions of images site-wide
 * 
 * Usage:
 * 1. Place original images in /images/ directory
 * 2. Reference images like: images/optimize.php?src=imagename.jpg&w=800&h=600
 * 3. Optimized versions are cached automatically in /images/cache/
 */

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 0); // Don't display to browser
ini_set('log_errors', 1);

// Configuration
$sourceDir = __DIR__ . '/images/';
$cacheDir = __DIR__ . '/images/cache/';
$defaultQuality = 85;
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

// Create cache directory if it doesn't exist
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}

// Get parameters
$src = $_GET['src'] ?? '';
$width = isset($_GET['w']) ? (int)$_GET['w'] : null;
$height = isset($_GET['h']) ? (int)$_GET['h'] : null;
$quality = isset($_GET['q']) ? (int)$_GET['q'] : $defaultQuality;

// Validate parameters
if (empty($src)) {
    header('HTTP/1.1 400 Bad Request');
    die('Missing src parameter');
}

// Security: prevent directory traversal
$src = str_replace(['../', '..\\'], '', $src);
$sourcePath = $sourceDir . $src;

if (!file_exists($sourcePath) || !is_file($sourcePath)) {
    header('HTTP/1.1 404 Not Found');
    die('Image not found');
}

$ext = strtolower(pathinfo($sourcePath, PATHINFO_EXTENSION));
if (!in_array($ext, $allowedExtensions)) {
    header('HTTP/1.1 400 Bad Request');
    die('Unsupported image format');
}

// Generate cache filename
$cacheFilename = md5($src . $width . $height . $quality) . '.jpg';
$cachePath = $cacheDir . $cacheFilename;

// Check if cached version exists and is newer than source
if (file_exists($cachePath) && filesize($cachePath) > 0 && filemtime($cachePath) >= filemtime($sourcePath)) {
    // Serve cached version
    header('Content-Type: image/jpeg');
    header('Cache-Control: public, max-age=31536000'); // 1 year
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
    header('Content-Length: ' . filesize($cachePath));
    readfile($cachePath);
    exit;
}

// Load source image
$imageInfo = getimagesize($sourcePath);
if (!$imageInfo) {
    header('HTTP/1.1 500 Internal Server Error');
    die('Invalid image');
}

$sourceWidth = $imageInfo[0];
$sourceHeight = $imageInfo[1];
$mimeType = $imageInfo['mime'];

// Create image resource
switch ($mimeType) {
    case 'image/jpeg':
        $sourceImage = imagecreatefromjpeg($sourcePath);
        break;
    case 'image/png':
        $sourceImage = imagecreatefrompng($sourcePath);
        break;
    case 'image/gif':
        $sourceImage = imagecreatefromgif($sourcePath);
        break;
    case 'image/webp':
        $sourceImage = imagecreatefromwebp($sourcePath);
        break;
    default:
        header('HTTP/1.1 500 Internal Server Error');
        die('Unsupported image type');
}

if (!$sourceImage) {
    header('HTTP/1.1 500 Internal Server Error');
    die('Failed to load image');
}

// Calculate new dimensions
if ($width && $height) {
    // Both dimensions specified - fit within bounds maintaining aspect ratio
    $ratio = min($width / $sourceWidth, $height / $sourceHeight);
    $newWidth = round($sourceWidth * $ratio);
    $newHeight = round($sourceHeight * $ratio);
} elseif ($width) {
    // Only width specified
    $ratio = $width / $sourceWidth;
    $newWidth = $width;
    $newHeight = round($sourceHeight * $ratio);
} elseif ($height) {
    // Only height specified
    $ratio = $height / $sourceHeight;
    $newWidth = round($sourceWidth * $ratio);
    $newHeight = $height;
} else {
    // No dimensions specified - use original size but optimize
    $newWidth = $sourceWidth;
    $newHeight = $sourceHeight;
}

// Create optimized image
$destImage = imagecreatetruecolor($newWidth, $newHeight);

// Preserve transparency for PNG
if ($mimeType === 'image/png') {
    imagealphablending($destImage, false);
    imagesavealpha($destImage, true);
}

// Resample
imagecopyresampled(
    $destImage, $sourceImage,
    0, 0, 0, 0,
    $newWidth, $newHeight,
    $sourceWidth, $sourceHeight
);

// Save to cache
$saveResult = imagejpeg($destImage, $cachePath, $quality);

// Check if save succeeded and file has content
if (!$saveResult || !file_exists($cachePath) || filesize($cachePath) === 0) {
    header('HTTP/1.1 500 Internal Server Error');
    header('Content-Type: text/plain');
    error_log("Failed to create cached image: $cachePath. Save result: " . ($saveResult ? 'true' : 'false'));
    die('Failed to generate image. Check: ' . $cachePath);
}

// Serve image
header('Content-Type: image/jpeg');
header('Cache-Control: public, max-age=31536000');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
header('Content-Length: ' . filesize($cachePath));
readfile($cachePath);

// Free memory
imagedestroy($sourceImage);
imagedestroy($destImage);
