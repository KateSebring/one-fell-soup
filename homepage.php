<?php
session_start();
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/universal_settings.css" rel="stylesheet">
    <title>One Fell Soup</title>

    <style>
        .home-page-welcome {
            width:100vw;
            height:20vw;
            max-width: 100%;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 1em;
        }

        h2 {
            font-size: 1.3em;
        }

        h2, button {
            position: relative;
        }

        .home-page-welcome::before {
            content: "";
            background-image: url('img/home_page_soup.jpg');
            background-position: center;
            background-size: cover;
            position: absolute;
            opacity: 0.3;
            top: 0px;
            right: 0px;
            bottom: 0px;
            left: 0px;
        }

        h3 {
            text-align: center;
            padding: 20px 0 20px 0;
            background-color: rgb(165, 140, 108);
            font-size: 2em;
            margin-bottom: 0.5em;
        }

        #new-products {
            margin-top: 1rem;
        }

        .soup-grid {
            margin: auto;
            display: flex;
            flex-flow: row wrap;
            justify-content: center;
            align-items: center;
            width:80vw;
            gap: 1em;
        }

        .soup-item {
            width: 100%;
            text-align: center;
        }

        @media screen and (min-width: 554px) {
            h2 {
                font-size: 2rem;
            }

            .soup-grid {
                width: 90vw;
            }

            .soup-item {
                width: 40%;
            }
        }

        @media screen and (min-width: 1000px) {
            h2 {
                font-size: 4rem;
            }

            .soup-grid {
                gap:3em;
            }

            .soup-item {
                width: 28%;
            }
        }
    </style>
</head>

<body>
    <div class="home-page-welcome">
        <h2>Need a warm bowl of comfort?</h2>

        <!-- <button>Check out our menu!</button> -->
    </div> 

    <h3>Customer Favorites</h3>

    <div class="soup-grid">
    <?php
    try {
        $selectItem = "SELECT * FROM soup_products ORDER BY productPrice";
        $stmt = $conn->prepare($selectItem);
        $stmt->execute();
    
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listItem) {
            $productName = $listItem['productName'];
            $calories = $listItem['calories'];
            $productImg = $listItem['productImg'];
            $productPrice = $listItem['productPrice'];
            $webPageLink = $listItem['webPageLink'];
            echo "<div class='soup-item'><a href='$webPageLink'>";
            // NEED TO CROP IMAGES
            echo "<img src='$productImg' style='width:100%'>";
            echo "<p>$productName<br>$$productPrice</p></a>";
            echo "</div>";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    ?>
    </div>

    <h3 id="new-products">New Products</h3>

    <div class="soup-grid">
    <?php
    try {
        $selectItem = "SELECT * FROM soup_products ORDER BY productId DESC";
        $stmt = $conn->prepare($selectItem);
        $stmt->execute();
    
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach($stmt->fetchAll() as $listItem) {
            $productName = $listItem['productName'];
            $calories = $listItem['calories'];
            $productImg = $listItem['productImg'];
            $productPrice = $listItem['productPrice'];
            $webPageLink = $listItem['webPageLink'];
            echo "<div class='soup-item'><a href='$webPageLink'>";
            // NEED TO CROP IMAGES
            echo "<img src='$productImg' style='width:100%'>";
            echo "<p>$productName<br>$$productPrice</p></a>";
            echo "</div>";
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
    ?>
    </div>

    <footer>
        Copyright Kate Sebring, 2023. Images from Pexels.
        <!-- set up credits for images here -->
    </footer>
</body>
</html>