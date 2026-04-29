<?php include '../config/db.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<h2>Register</h2>
<form method="POST">
   <input type="email" name="email"
        placeholder="Email address"
        required>
<input class="form-control mb-2" type="password" name="password" placeholder="password">
<button class="btn btn-success" name="reg">Register</button>
</form>
<?php
if(isset($_POST['reg'])){
$p=password_hash($_POST['password'], PASSWORD_DEFAULT);
$conn->query("INSERT INTO admins(email,password) VALUES('{$_POST['email']}','$p')");
echo "Registered successfully";
}
?>
</div>