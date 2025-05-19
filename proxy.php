<?php
header('Content-Type: application/json');

$apiURL = "https://api-football-v1.p.rapidapi.com/v3/fixtures?league=39&season=2023";

$headers = [
    "X-RapidAPI-Key: c63dae6fcabc37888d0331ca27b36048", // Key aktif ve geçerli mi kontrol et
    "X-RapidAPI-Host: api-football-v1.p.rapidapi.com"
];

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => $apiURL,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers
]);

$response = curl_exec($curl);
$err = curl_error($curl);
$http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
curl_close($curl);

if ($err) {
    echo json_encode([
        "error" => "cURL Hatası",
        "message" => $err
    ]);
} elseif ($http_status !== 200) {
    echo json_encode([
        "error" => "API HTTP Hatası",
        "http_code" => $http_status,
        "response" => $response
    ]);
} else {
    echo $response;
}
?>


