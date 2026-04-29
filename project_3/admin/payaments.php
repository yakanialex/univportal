<?php
require '../config/db.php';

$result = $conn->query("SELECT * FROM payments ORDER BY id DESC");
?>

<h2>All Payments</h2>

<table border="1">
<tr>
    <th>User</th>
    <th>Amount</th>
    <th>Method</th>
    <th>Status</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['user_id']; ?></td>
    <td><?php echo $row['amount']; ?></td>
    <td><?php echo $row['payment_method']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>
<?php endwhile; ?>
</table>