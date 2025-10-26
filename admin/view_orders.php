<?php include __DIR__ . '/../includes/header.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

$success_message = '';
$error_message = '';
$show_confirm = false;
$delete_id = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'])) {
    $delete_id = (int) $_POST['delete_id'];

    $stmt = $conn->prepare("DELETE FROM orders WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $delete_id);
        if ($stmt->execute()) {
            $success_message = "Order deleted successfully.";
        } else {
            $error_message = "Unable to delete the order. Please try again.";
        }
        $stmt->close();
    } else {
        $error_message = "Unable to prepare the request. Please try again later.";
    }
} elseif (isset($_GET['delete_id'])) {
    $delete_id = (int) $_GET['delete_id'];
    $show_confirm = true;
}

?>

<?php if ($show_confirm): ?>
<div class="modal-overlay">
    <div class="modal-window">
        <h3>Delete Order</h3>
        <p>Are you sure you want to delete order #<?php echo htmlspecialchars($delete_id, ENT_QUOTES, 'UTF-8'); ?>?</p>
        <form method="post" class="modal-actions">
            <input type="hidden" name="delete_id" value="<?php echo htmlspecialchars($delete_id, ENT_QUOTES, 'UTF-8'); ?>">
            <button type="submit" class="btn btn-danger">Yes, delete</button>
            <a href="view_orders.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
<?php endif; ?>

<?php if ($success_message): ?>
<div class="modal-overlay">
    <div class="modal-window">
        <h3>Success</h3>
        <p><?php echo htmlspecialchars($success_message, ENT_QUOTES, 'UTF-8'); ?></p>
        <a href="view_orders.php" class="btn">Close</a>
    </div>
</div>
<?php endif; ?>

<?php if ($error_message): ?>
<div class="modal-overlay">
    <div class="modal-window">
        <h3>Something Went Wrong</h3>
        <p><?php echo htmlspecialchars($error_message, ENT_QUOTES, 'UTF-8'); ?></p>
        <a href="view_orders.php" class="btn">Close</a>
    </div>
</div>
<?php endif; ?>

<div class="container">
    <h2>View Orders</h2>
    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Order Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT orders.id, users.username, products.name, orders.quantity, orders.order_date FROM orders JOIN users ON orders.user_id = users.id JOIN products ON orders.product_id = products.id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
                <td><?php echo $row['order_date']; ?></td>
                <td><a href="view_orders.php?delete_id=<?php echo $row['id']; ?>" class="btn">Delete</a></td>
            </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='6'>No orders found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php include '../includes/footer.php'; ?>

