<?php
session_start();
include_once __DIR__ . '/config.php';
include_once __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Menu</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header class="sticky-header">
        <nav>
            <div class="logo">
                <a href="<?php echo BASE_URL; ?>index.php"><img src="<?php echo BASE_URL; ?>image/logo.png"></a>
            </div>
            <ul>
                <li><a href="<?php echo BASE_URL; ?>index.php#Home">Home</a></li>
                <li><a href="<?php echo BASE_URL; ?>index.php#About">About</a></li>
                <li><a href="<?php echo BASE_URL; ?>index.php#Menu">Menu</a></li>
                <li><a href="<?php echo BASE_URL; ?>index.php#Gallary">Gallary</a></li>
                <li><a href="<?php echo BASE_URL; ?>index.php#Review">Review</a></li>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li><a href="<?php echo BASE_URL; ?>orders.php">My Orders</a></li>
                    <?php if(isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
                        <li><a href="<?php echo BASE_URL; ?>admin/index.php">Admin</a></li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
            <div class="icon">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a href="<?php echo BASE_URL; ?>logout.php" style="text-decoration: none; color: #000;">Logout</a>
                <?php else: ?>
                    <a href="<?php echo BASE_URL; ?>login.php" style="text-decoration: none; color: #000; margin-right: 15px;">Login</a>
                    <a href="<?php echo BASE_URL; ?>signup.php" style="text-decoration: none; color: #000;">Sign Up</a>
                <?php endif; ?>
            </div>
        </nav>
    </header>
    <main>
