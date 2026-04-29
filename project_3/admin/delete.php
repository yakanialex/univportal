<?php include '../config/db.php';
$conn->query("DELETE FROM students WHERE id=".$_GET['id']);
header("Location: students.php");
$conn->query("DELETE FROM users WHERE id=".$_GET['id']);
header("Location: users.php");
?>