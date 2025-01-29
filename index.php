<?php

// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// Check for the desired endpoint
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($uri == '/hire/php-developers') {
    // API response data
    $response = [
        "email" => "chosennseobong@gmail.com.com",
        "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"), 
        "github_url" => "https://github.com/Emek1212/hng-task" 
    ];

    // Send the response as JSON
    http_response_code(200); // HTTP status code for success
    echo json_encode($response);
} else {
    // If the endpoint doesn't match, return a 404
    http_response_code(404);
    echo json_encode(["message" => "Endpoint not found"]);
}
