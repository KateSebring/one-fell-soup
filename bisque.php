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
        .main-product-info {
            margin: auto;
            margin-top: 3rem;
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
            background-color: #bba589;
        }

        h2 {
            margin-bottom: 1rem;
        }

        .soup-img {
            width: 100%;
            padding-bottom:1rem;
        }

        h1, h2, h3 {
            color: #242124;
        }

        p {
            margin-top:1rem;
        }

        h3 {
            font-size: 1.5rem;
        }

        .nutrition-info {
            display: flex;
            flex-flow: column wrap;
            align-items: center;
            gap:2rem;
            margin-top: 3rem;
            text-align: center;
        }

        @media screen and (min-width: 700px) {
            main {
                flex-flow: row wrap;
            }
            
            .soup-img {
                padding-bottom:0;
            }

            .main-product-info {
                display: grid;
                grid-template-columns: repeat(2, 4fr);
                grid-template-rows: 1fr;
                grid-column-gap: 40px;
                grid-row-gap: 0px;
                text-align: left;
                width:70%;
            }

            .productImage { 
                grid-area: 1 / 1 / 2 / 2; 
            }
            .productInfo { 
                grid-area: 1 / 2 / 2 / 3;
            }
        }

        @media screen and (min-width: 1200px) {
            .main-product-info {
                width:60%;
            }
        }
        
        @media screen and (min-width: 1300px) {
            .main-product-info {
                grid-column-gap: 75px;
            }
        }
    </style>
</head>
<body>
    <!-- CONTENT -->
    <main>
        <!-- maybe split these into two columsn if neccessary-->
        <div class="main-product-info">
        <?php
            try {
                $selectItem = "SELECT * FROM soup_products WHERE productId = 5";
                $stmt = $conn->prepare($selectItem);
                $stmt->execute();
            
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach($stmt->fetchAll() as $listItem) {
                    $productName = $listItem['productName'];
                    $calories = $listItem['calories'];
                    $productImg = $listItem['productImg'];
                    $productPrice = $listItem['productPrice'];   
                    $productDescription = $listItem['productDescription'];                 
                    $imgAlt = $listItem['imgAlt'];

                    echo "<div class='productImage'><img src='$productImg' class='soup-img' alt='$imgAlt'></div>";
                    echo "<div class='productInfo'><h2>$productName</h2>";
                    echo "<p><b>$calories calories per serving</b></p>";
                    echo "<p id='product-description'>$productDescription</p>";
                }
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }

            if(isset($_POST['submit']))
            {
                $insert = "INSERT INTO shopping_cart (productName, productPrice, productImg) VALUES ('$productName', '$productPrice', '$productImg')";
                $conn->exec($insert);
            } 
        ?>
            <form action="bisque.php" method="post">
                <input type="submit" name="submit" value="Add to Cart">
            </form>
            </div> <!-- end div 2 -->
        </div> <!-- end div 1 -->

        <div class="nutrition-info">
            <div id="ingredients">
                <h3>Ingredients</h3>

                <?php
                try {
                    $selectItem = "SELECT * FROM soup_products WHERE productId = 5";
                    $stmt = $conn->prepare($selectItem);
                    $stmt->execute();
                
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach($stmt->fetchAll() as $listItem) {
                        $ingredients = $listItem['ingredients'];

                        echo "<p>$ingredients</p>";
                    }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>

            <div id="allergens">
                <h3>Allergen Information</h3>
                <strong>Please ask your server if you have any allergies not listed here.</strong>
                <?php
                try {
                    $selectItem = "SELECT * FROM soup_products WHERE productId = 5";
                    $stmt = $conn->prepare($selectItem);
                    $stmt->execute();
                
                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach($stmt->fetchAll() as $listItem) {
                        $allergies = $listItem['allergies'];
                        echo "<p>This product contains $allergies.</p>";
                    }
                } catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }
                ?>
            </div>
        </div>
    <footer>
        Copyright Kate Sebring, 2023. Images from Pexels.
        <!-- set up credits for images here -->
    </footer>
    </main>
</body>
</html>