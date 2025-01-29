<?php

$port = getenv("PORT") ?: 8080; // Use port 8080 if no PORT is set

// Output to verify which port is used
echo "Server running on port: $port\n";


shell_exec("php -S 0.0.0.0:$port -t public");


// Enable CORS
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// API response data
$response = [
    "email" => "chosennseobong@gmail.com",
    "current_datetime" => gmdate("Y-m-d\TH:i:s\Z"), 
    "github_url" => "git@github.com:Emek1212/hng-task.git" 
];


http_response_code(200); // HTTP status code for success
echo json_encode($response);
