<?php
header("Content-Type: application/json");

include 'db_config.php';

// Get the posted data
$data = json_decode(file_get_contents("php://input"));

// Validate the data
if (!isset($data->id) || !isset($data->name) || !isset($data->email) || !isset($data->status) || !isset($data->hobi)) {
    die(json_encode(["error" => "Invalid input"]));
}

$id = $koneksi->real_escape_string($data->id);
$name = $koneksi->real_escape_string($data->name);
$email = $koneksi->real_escape_string($data->email);
$status = $koneksi->real_escape_string($data->status);
$hobi = $koneksi->real_escape_string($data->hobi);

$sql = "UPDATE users SET name='$name', email='$email', status='$status', hobi='$hobi' WHERE id=$id";

if ($koneksi->query($sql) === TRUE) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["error" => $koneksi->error]);
}

$koneksi->close();
?>