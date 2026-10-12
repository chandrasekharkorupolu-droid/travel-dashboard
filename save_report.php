<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Mee HTML nundi vache data ni receive chesukuntundi
$data = file_get_contents("php://input");

// Aa data ni oka .json file lo safe ga save chesthundi
if(file_put_contents("dm_report_data.json", $data)) {
    echo json_encode(["status" => "success", "message" => "Data Successfully Published to DMs Dashboard!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Failed to save data. Please check folder permissions."]);
}
?>
