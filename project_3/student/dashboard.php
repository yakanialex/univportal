<?php include '../config/db.php';
if(!isset($_SESSION['user'])) header("Location: ../auth/login.php");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<h2>Student Dashboard</h2>
<a href="form.php" class="btn btn-success">Fill Form</a>
<a href="../auth/logout.php" class="btn btn-danger">Logout</a>
</div>