<?php
// get_gallery_images.php - Dynamically scan and return gallery images
header('Content-Type: application/json');

$galleryDir = __DIR__ . '/images/gallery/';
$images = [];

// Check if directory exists
if (is_dir($galleryDir)) {
    // Scan directory for image files
    $files = scandir($galleryDir);
    
    foreach ($files as $file) {
        // Skip directories and hidden files
        if ($file === '.' || $file === '..' || is_dir($galleryDir . $file)) {
            continue;
        }
        
        // Check for valid image extensions
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $images[] = [
                'filename' => $file,
                'alt' => pathinfo($file, PATHINFO_FILENAME)
            ];
        }
    }
    
    // Sort images by filename
    usort($images, function($a, $b) {
        return strcmp($a['filename'], $b['filename']);
    });
}

echo json_encode($images);
