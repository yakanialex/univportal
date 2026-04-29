<?php
require '../config/db.php';
$user_id = 1;

$result = $conn->query("SELECT * FROM payments WHERE user_id='$user_id'");
?>

<h2>My Payments</h2>

<table border="1">
<tr>
    <th>Amount</th>
    <th>Phone</th>
    <th>Status</th>
    <th>Date</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td><?php echo $row['amount']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td><?php echo $row['created_at']; ?></td>
</tr>
<?php endwhile; ?>
</table>