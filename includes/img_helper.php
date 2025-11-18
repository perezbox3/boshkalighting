<?php
/**
 * Image Helper Functions
 * Provides a simple img() function to automatically optimize images site-wide
 * 
 * Usage in PHP files:
 * <?php require_once __DIR__ . '/includes/img_helper.php'; ?>
 * 
 * Then use:
 * <?= img('photo.jpg', 800, 600) ?>
 * <?= img('kerie.jpg', 600, 800, ['alt' => 'Kerie Boshka', 'loading' => 'lazy']) ?>
 */

/**
 * Generate an optimized image tag
 * 
 * @param string $src Image filename (relative to /images/)
 * @param int $width Target width
 * @param int $height Target height
 * @param array $attrs Additional HTML attributes (alt, class, loading, etc.)
 * @param int $quality JPEG quality (1-100)
 * @return string HTML img tag
 */
function img($src, $width = null, $height = null, $attrs = [], $quality = 85) {
    // Build optimized URL
    $url = '/img.php?src=' . urlencode($src);
    
    if ($width) {
        $url .= '&w=' . (int)$width;
    }
    if ($height) {
        $url .= '&h=' . (int)$height;
    }
    if ($quality !== 85) {
        $url .= '&q=' . (int)$quality;
    }
    
    // Build attributes
    $attrString = '';
    foreach ($attrs as $key => $value) {
        $attrString .= ' ' . htmlspecialchars($key) . '="' . htmlspecialchars($value) . '"';
    }
    
    // Add width/height attributes for better CLS (Cumulative Layout Shift)
    if ($width && !isset($attrs['width'])) {
        $attrString .= ' width="' . (int)$width . '"';
    }
    if ($height && !isset($attrs['height'])) {
        $attrString .= ' height="' . (int)$height . '"';
    }
    
    return '<img src="' . htmlspecialchars($url) . '"' . $attrString . '>';
}

/**
 * Generate optimized image URL (without img tag)
 * 
 * @param string $src Image filename (relative to /images/)
 * @param int $width Target width
 * @param int $height Target height
 * @param int $quality JPEG quality (1-100)
 * @return string Optimized image URL
 */
function img_url($src, $width = null, $height = null, $quality = 85) {
    $url = '/img.php?src=' . urlencode($src);
    
    if ($width) {
        $url .= '&w=' . (int)$width;
    }
    if ($height) {
        $url .= '&h=' . (int)$height;
    }
    if ($quality !== 85) {
        $url .= '&q=' . (int)$quality;
    }
    
    return $url;
}

/**
 * Preload critical images for better performance
 * Call this in the <head> section for above-the-fold images
 * 
 * @param array $images Array of ['src' => 'image.jpg', 'w' => 800, 'h' => 600]
 */
function preload_images($images) {
    $output = '';
    foreach ($images as $img) {
        $url = img_url($img['src'], $img['w'] ?? null, $img['h'] ?? null, $img['q'] ?? 85);
        $output .= '<link rel="preload" as="image" href="' . htmlspecialchars($url) . '">' . "\n";
    }
    return $output;
}
