<?php include __DIR__ . '/../includes/header.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
?>

<div class="container">
    <h2>Admin Panel</h2>
    <ul>
        <li><a href="add_product.php">Add Product</a></li>
        <li><a href="view_orders.php">View Orders</a></li>
    </ul>
</div>

<?php include '../includes/footer.php'; ?>
