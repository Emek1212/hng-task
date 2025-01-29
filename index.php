<?php
// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// API response data
$response = [
    "email" => "chosennseobong@gmail.com", // Replace with your HNG12 Slack email
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"), // Generate current date/time in ISO 8601 (UTC)
    "github_url" => "https://github.com/yourusername/your-repo" // Replace with your GitHub repo link
];

// Send the response as JSON
http_response_code(200); // HTTP status code for success
echo json_encode($response);
