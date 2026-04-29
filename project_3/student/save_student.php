<?php
require 'config/db.php';

$data = json_decode(file_get_contents("php://input"), true);

$fullname = $data['fullname'];
$phone = $data['phone'];
$email = $data['email'];
$tx_ref = $data['tx_ref'];

$conn->query("INSERT INTO students (fullname, phone, email, tx_ref)
VALUES ('$fullname','$phone','$email','$tx_ref')");

echo "Saved";
?>