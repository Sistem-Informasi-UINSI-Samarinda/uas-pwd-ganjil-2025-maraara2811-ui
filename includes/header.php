<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Shopediaa</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

<header>
    <h2>Shopediaa</h2>
    <nav>
        <a href="home.php">Home</a>
        <a href="produk.php">Produk</a>

        <?php if(isset($_SESSION['login'])){ ?>
            <a href="../auth/logout.php">Logout</a>
        <?php } ?>
    </nav>
</header>

<main>
