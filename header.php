<?php

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=soup_products", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$cartTotal = 0;
?>

<nav>
        <h1>One Fell Soup</h1>
        <button class="hamburger" type="button">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>  

        <div></div>
        <div></div>

        <div class="nav-item"><a href="homepage.php">Home</a></div>
        <div class="nav-item"><a href="menu.php">Menu</a></div>
        <div class="nav-item"><a href="shopping_cart.php">Shopping Cart</a></div>
    </nav>