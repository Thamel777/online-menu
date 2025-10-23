<?php
include 'includes/db.php';

$products = [
    ['name' => 'Burger', 'price' => '600.00', 'image' => 'buger.jpg'],
    ['name' => 'Pasta', 'price' => '480.00', 'image' => 'pasta.jpg'],
    ['name' => 'Lasagna', 'price' => '520.00', 'image' => 'lasagna.webp'],
    ['name' => 'Chocolate Drink', 'price' => '180.00', 'image' => 'chocolate_Drink.jpg'],
    ['name' => 'Pizza', 'price' => '1100.00', 'image' => 'pizza.jpg'],
    ['name' => 'Hot Dog', 'price' => '200.00', 'image' => 'Hot_dog.jpg'],
    ['name' => 'Juice', 'price' => '120.00', 'image' => 'juse.jpg'],
    ['name' => 'Biryani', 'price' => '600.00', 'image' => 'biryani.webp'],
    ['name' => 'Chocolate', 'price' => '100.00', 'image' => 'chocolate.jpg'],
    ['name' => 'Ice Cream', 'price' => '180.00', 'image' => 'ice_cream.jpg'],
    ['name' => 'Spanchi', 'price' => '150.00', 'image' => 'Spanchi.jpg'],
    ['name' => 'Sandwich', 'price' => '80.00', 'image' => 'sandwich.jpg']
];

foreach ($products as $product) {
    $name = $product['name'];
    $price = $product['price'];
    $image = $product['image'];
    $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully for $name <br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
