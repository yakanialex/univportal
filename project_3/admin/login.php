<?php include '../config/db.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<h2>Admin Login</h2>
<form method="POST">
<input class="form-control mb-2" name="email">
<input class="form-control mb-2" type="password" name="password">
<button class="btn btn-dark" name="login">Login</button>
</form>
<?php
if(isset($_POST['login'])){
$r=$conn->query("SELECT * FROM admins WHERE email='{$_POST['email']}'");
$a=$r->fetch_assoc();
if($a && password_verify($_POST['password'],$a['password'])){
$_SESSION['admin']=$a['id'];
header("Location: dashboard.php");
}
}
?>
</div>