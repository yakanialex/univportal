<?php include '../config/db.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<h2>Login</h2>
<form method="POST">
<input class="form-control mb-2" name="email">
<input class="form-control mb-2" type="password" name="password">
<button class="btn btn-primary" name="login">Login</button>
</form>
<?php
if(isset($_POST['login'])){
$r=$conn->query("SELECT * FROM users WHERE email='{$_POST['email']}'");
$u=$r->fetch_assoc();
if($u && password_verify($_POST['password'],$u['password'])){
$_SESSION['user']=$u['id'];
header("Location: ../student/dashboard.php");
}
}
?>
</div>