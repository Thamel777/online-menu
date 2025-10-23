<?php include __DIR__ . '/../includes/header.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM orders WHERE id = $delete_id";
    if ($conn->query($sql) === TRUE) {
        echo "Order deleted successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

?>

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
