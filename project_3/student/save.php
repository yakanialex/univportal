<?php include '../config/db.php';
$conn->query("INSERT INTO students(full_name,age,gender,student_email)
VALUES('{$_POST['full_name']}','{$_POST['age']}','{$_POST['gender']}','{$_POST['student_email']}')");
echo "Saved successfully";
?>