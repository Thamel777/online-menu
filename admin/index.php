<?php include __DIR__ . '/../includes/header.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../index.php");
    exit();
}
?>

<div class="container">
    <h2>Admin Panel</h2>
    <div class="admin-actions">
        <a href="add_product.php" class="admin-btn">Add Product</a>
        <a href="view_orders.php" class="admin-btn">View Orders</a>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
