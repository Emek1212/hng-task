<?php

// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// API response data
$response = [
    "email" => "chosennseobong@gmail.com",
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"), 
    "github_url" => "https://github.com/Emek1212/hng-task" // Use HTTPS instead of git@
];

http_response_code(200); // HTTP status code for success
echo json_encode($response);
    