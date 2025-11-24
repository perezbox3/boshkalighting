<?php
// Lightweight proxy to fetch Google Place details/reviews without exposing the API key to the browser.
header('Content-Type: application/json');

// Load API key from environment if available; otherwise fallback to the provided key.
$apiKey = getenv('GOOGLE_PLACES_API_KEY') ?: 'AIzaSyBQmw_LSbw5diO0lSAfiALoOmo6gcRtIMU';
$placeId = 'ChIJxxXKEAD7UYYRdYlQDCW1Z88';
$fields = 'name,rating,user_ratings_total,reviews';

$url = sprintf(
    'https://maps.googleapis.com/maps/api/place/details/json?place_id=%s&fields=%s&reviews_no_translations=true&key=%s',
    urlencode($placeId),
    urlencode($fields),
    urlencode($apiKey)
);

$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 6,
    CURLOPT_SSL_VERIFYPEER => true,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($response === false || $httpCode !== 200) {
    http_response_code(500);
    echo json_encode([
        'status' => 'ERROR',
        'error' => 'Failed to reach Google Places'
    ]);
    curl_close($ch);
    exit;
}

curl_close($ch);
$data = json_decode($response, true);

if (!$data || ($data['status'] ?? '') !== 'OK' || empty($data['result'])) {
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
