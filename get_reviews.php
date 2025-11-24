<?php
// Lightweight proxy to fetch Google Place details/reviews without exposing the API key to the browser.
header('Content-Type: application/json');

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
    http_response_code(500);
    echo json_encode([
        'status' => 'ERROR',
        'error' => 'Failed to reach Google Places'
    ]);
    exit;
}

$data = json_decode($response, true);

if (!$data || ($data['status'] ?? '') !== 'OK' || empty($data['result'])) {
    error_log('Google Places proxy returned status: ' . ($data['status'] ?? 'unknown') . ' message: ' . ($data['error_message'] ?? 'none'));
    http_response_code(502);
    echo json_encode([
        'status' => $data['status'] ?? 'ERROR',
        'error' => $data['error_message'] ?? 'Unexpected response from Google Places'
    ]);
    exit;
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
