
<?php
// process.php
include '../config/db.php';

$fullname = $_POST['fullname'];
$gender = $_POST['gender'];
$district = $_POST['district'];
$nationality = $_POST['nationality'];
$education = $_POST['education_level'];
$olevel = $_POST['olevel'];
$alevel = $_POST['alevel'];
$field = $_POST['field'];
$course = $_POST['course'];
$program = $_POST['program'];
$nin = $_POST['nin'] ?? '';
$contact = $_POST['contact'];
$email = $_POST['email'];
$parent_name = $_POST['parent_name'];
$parent_contact = $_POST['parent_contact'] ?? '';
$parent_nin = $_POST['parent_nin'] ?? '';

$sql = "INSERT INTO students(fullname, gender, district, nationality, education, olevel, alevel, field, course, program, nin, contact, email, parent_name, parent_contact, parent_nin)
VALUES ('$fullname','$gender','$district','$nationality','$education','$olevel','$alevel','$field','$course','$program','$nin','$contact','$email','$parent_name','$parent_contact','$parent_nin')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $conn->error;
}
?>
