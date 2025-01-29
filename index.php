<?php
// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// API response data
$response = [
    "email" => "abasiemekakpan7@gmail.com", // Replace with your HNG12 Slack email
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"), // Generate current date/time in ISO 8601 (UTC)
    "github_url" => "git@github.com:Emek1212/hng-task.git" // Replace with your GitHub repo SSH URL
];

// Send the response as JSON
http_response_code(200); // HTTP status code for success
echo json_encode($response);
