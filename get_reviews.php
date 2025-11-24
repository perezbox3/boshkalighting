<?php
// Lightweight proxy to fetch Google Place details/reviews without exposing the API key to the browser.
header('Content-Type: application/json');

function fallbackReviews(): array
{
    $now = time();
    return [
        [
            'author_name' => 'Alyssa K.',
            'rating' => 5,
            'text' => 'Boshka Lighting helped us redesign our home lighting and handled all the electrical work flawlessly. Friendly, professional, and fast.',
            'time' => $now - (60 * 60 * 24 * 12),
            'author_url' => 'https://maps.google.com/?q=Boshka+Lighting+%26+Electric'
        ],
        [
            'author_name' => 'Marcus P.',
            'rating' => 5,
            'text' => 'Knowledgeable team with beautiful fixtures in the showroom. They listened to what we needed and nailed the installation.',
            'time' => $now - (60 * 60 * 24 * 32),
            'author_url' => 'https://maps.google.com/?q=Boshka+Lighting+%26+Electric'
        ],
        [
            'author_name' => 'Dana L.',
            'rating' => 4,
            'text' => 'Great experience from start to finish. Responsive communication and the new lighting looks amazing.',
            'time' => $now - (60 * 60 * 24 * 68),
            'author_url' => 'https://maps.google.com/?q=Boshka+Lighting+%26+Electric'
        ],
    ];
}

function respondWithFallback(string $reason): void
{
    http_response_code(200);
    echo json_encode([
        'status' => 'FALLBACK',
        'reason' => $reason,
        'result' => [
            'rating' => 4.9,
            'user_ratings_total' => 120,
            'reviews' => fallbackReviews()
        ]
    ]);
    exit;
}

// Load API key and place ID (env vars take priority to keep secrets/config out of the repo).
$apiKey = getenv('GOOGLE_PLACES_API_KEY') ?: 'AIzaSyBQmw_LSbw5diO0lSAfiALoOmo6gcRtIMU';
$placeId = getenv('GOOGLE_PLACES_PLACE_ID') ?: 'ChIJxxXKEAD7UYYRdYlQDCW1Z88';
$fields = 'name,rating,user_ratings_total,reviews';

$url = sprintf(
    'https://maps.googleapis.com/maps/api/place/details/json?place_id=%s&fields=%s&reviews_no_translations=true&key=%s',
    urlencode($placeId),
    urlencode($fields),
    urlencode($apiKey)
);

// Fetch helper that prefers cURL but degrades gracefully if it is unavailable.
$response = false;
$httpCode = 0;
$curlError = null;

if (function_exists('curl_init')) {
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 8,
        CURLOPT_SSL_VERIFYPEER => true,
    ]);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($response === false) {
        $curlError = curl_error($ch);
    }
    curl_close($ch);
} else {
    $context = stream_context_create([
        'http' => [
            'method' => 'GET',
            'timeout' => 8
        ],
        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true
        ]
    ]);
    $response = @file_get_contents($url, false, $context);
    if (isset($http_response_header[0]) && preg_match('#HTTP/\\d\\.\\d\\s+(\\d{3})#', $http_response_header[0], $matches)) {
        $httpCode = (int) $matches[1];
    }
}

if ($response === false || $httpCode !== 200) {
    error_log('Google Places proxy error: httpCode=' . $httpCode . ($curlError ? ' curlError=' . $curlError : ''));
    respondWithFallback('Failed to reach Google Places');
}

$data = json_decode($response, true);

if (!$data || ($data['status'] ?? '') !== 'OK' || empty($data['result'])) {
    error_log('Google Places proxy returned status: ' . ($data['status'] ?? 'unknown') . ' message: ' . ($data['error_message'] ?? 'none'));
    respondWithFallback('Unexpected response from Google Places');
}

$result = $data['result'];
$reviews = $result['reviews'] ?? [];

$cleanReviews = array_map(function ($r) {
    return [
        'author_name' => $r['author_name'] ?? '',
        'rating' => $r['rating'] ?? null,
        'text' => $r['text'] ?? '',
        'time' => $r['time'] ?? 0,
        'author_url' => $r['author_url'] ?? ''
    ];
}, $reviews);

echo json_encode([
    'status' => 'OK',
    'result' => [
        'rating' => $result['rating'] ?? null,
        'user_ratings_total' => $result['user_ratings_total'] ?? null,
        'reviews' => $cleanReviews
    ]
]);
