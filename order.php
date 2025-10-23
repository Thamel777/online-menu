<?php include __DIR__ . '/includes/header.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['id'])) {
    $product_id = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $quantity = $_POST['quantity'];
        $user_id = $_SESSION['user_id'];

        $sql = "INSERT INTO orders (user_id, product_id, quantity) VALUES ('$user_id', '$product_id', '$quantity')";

        if ($conn->query($sql) === TRUE) {
            echo "Order placed successfully.";
            header("Location: orders.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $sql = "SELECT * FROM products WHERE id = $product_id";
    $result = $conn->query($sql);
    $product = $result->fetch_assoc();
} else {
    header("Location: index.php");
    exit();
}
?>

<div class="container">
    <h2>Order <?php echo $product['name']; ?></h2>
    <form action="order.php?id=<?php echo $product_id; ?>" method="post">
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" name="quantity" id="quantity" value="1" min="1" required>
        </div>
        <button type="submit" class="btn">Place Order</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
