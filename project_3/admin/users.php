<?php include '../config/db.php';
$r=$conn->query("SELECT * FROM users");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<h2>Users</h2>
<table class="table table-bordered">
<tr><th>id</th> <th>email</th><th>password</th><th>action</th></tr>
<?php while($d=$r->fetch_assoc()): ?>
<tr>
<td><?= $d['id'] ?></td>
<td><?= $d['email'] ?></td>
<td><?= $d['password'] ?></td>
<td><a href="delete.php?id=<?= $d['id'] ?>" class="btn btn-danger">Delete</a></td>
</tr>
<?php endwhile; ?>
</table>
</div>