<?php include '../config/db.php';
$r=$conn->query("SELECT * FROM students");
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container mt-5">
<h2>Students</h2>
<table class="table table-bordered">
<tr><th>id</th><th>full_name</th><th>gender</th><th>district</th> <th>nationality</th><th>education_level</th><th>olevel_performance</th><th>alevel_performace</th><th>field</th><th>cource</th><th>program</th><th>nin</th><th>contact</th><th>Email</th><th>parents_name</th><th>parents_contact</th><th>parents_nin</th><th>Action</th></tr>
<?php while($d=$r->fetch_assoc()): ?>
<tr>
<td><?= $d['id'] ?></td>
<td width=10%><?= $d['fullname'] ?></td>
<td><?= $d['gender'] ?></td>
<td><?= $d['district'] ?></td>
<td><?= $d['nationality'] ?></td>
<td><?= $d['education'] ?></td>
<td><?= $d['olevel'] ?></td>
<td><?= $d['alevel'] ?></td>
<td><?= $d['field'] ?></td>
<td><?= $d['course'] ?></td>
<td><?= $d['program'] ?></td>
<td><?= $d['nin'] ?></td>
<td><?= $d['contact'] ?></td>
<td><?= $d['email'] ?></td>
<td><?= $d['parent_name'] ?></td>
<td><?= $d['parent_contact'] ?></td>
<td><?= $d['parent_nin'] ?></td>
<td><a href="delete.php?id=<?= $d['id'] ?>" class="btn btn-danger">Delete</a></td>
</tr>
<?php endwhile; ?>
</table>
</div>