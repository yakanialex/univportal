<?php include '../config/db.php';
if(!isset($_SESSION['admin'])) header("Location: login.php");
$c=$conn->query("SELECT COUNT(*) as t FROM students")->fetch_assoc()['t'];
$a=$conn->query("SELECT COUNT(*) as t FROM users")->fetch_assoc()['t'];
$b=$conn->query("SELECT COUNT(*) as t FROM admins")->fetch_assoc()['t'];
?>
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<nav>
<h2 align="center">Admin Dashboard</h2>
</nav>
<div class="container mt-5">
<b>
<p>Total Students: <?= $c ?></p>
<p>Total Users: <?= $a ?></p>
<p>Total admins: <?= $b ?></p>
</b>
<canvas id="chart"></canvas>
<a href="students.php" class="btn btn-primary mt-3">Manage Students</a>
<a href="users.php" class="btn btn-primary mt-3">Manage users</a>
<a href="admins.php" class="btn btn-primary mt-3">Admin_list</a>
</div>
<script>
new Chart(document.getElementById('chart'),{
type:'bar',
data:{labels:['Students'],datasets:[{data:[<?= $c ?>]}]}
});
new Chart(document.getElementById('chart'),{
type:'bar',
data:{labels:['users'],datasets:[{data:[<?= $a ?>]}]}
});
</script>
