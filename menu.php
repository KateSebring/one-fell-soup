<?php
include("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | One Fell Soup</title>
    <link href="css/universal_settings.css" rel="stylesheet">

    <style>
        h2 {
            text-align: center;
            font-size: 2em;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
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
            .soup-grid {
                width: 90vw;
            }

            .soup-item {
                width: 40%;
            }

        }

        @media screen and (min-width: 1000px) {
            h2 {
                font-size: 2.7em;
                margin-bottom: 1em;
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
    <!-- CONTENT -->
    <h2>Our Menu</h2>
    <!-- make php iterate the individual menu items-->
    <div class="soup-grid">
    <?php
    try {
        $selectItem = "SELECT * FROM soup_products";
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
    <!-- END OF SOUP GRID -->

    <footer>
        Copyright Kate Sebring, 2023. Images from Pexels.
        <!-- set up credits for images here -->
    </footer>
</body>
</html>