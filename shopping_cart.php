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
    <title>Shopping Cart | One Fell Soup</title>

    <style>
        h2 {
            text-align: center;
            margin-top: 0.5em;
            margin-bottom: 0.5em;
        }

        .customer-products {
            background-color: rgb(229, 206, 162);
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-content: center;
            text-align: center;
            width:100%;
            gap:1rem;
            padding:1rem 0 1rem 0;
        }

        .product-img {
            width: 70%;
        }

        .ordering-totals {
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-items: center;
            text-align: center;
            gap:1rem;
            padding-top: 1rem;
        }

        @media screen and (min-width: 620px) {
            .customer-container {
                display: flex;
                flex-flow: row wrap;
                justify-content: center;
                gap: 2em;
            }

            .customer-products {
                width: 40%;
            }

            .product-img {
                width: 80%;
            }
        }

        @media screen and (min-width: 1000px) {
            .customer-products {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                grid-template-rows: 1fr;
                align-items: center;
                justify-items: center;
                gap: 0;
                padding-top:3em;
                padding-bottom: 3em;
            }

            .product-img {
                padding-left:4em;
            }

            #order-details {
                display: flex;
                flex-flow: column wrap;
                gap: 0.5rem;
                padding-left:1em;
            }
        }
    </style>
</head>
<body>
    <h2>Your Items</h2>
    <div class="customer-container">
        <div class="customer-products">
        <?php
        $displayInfo = "";
            $productName = "";
            $productImg = "";
            $productPrice = "";
            // iterate through shopping_cart table here
            // note to self: this is all displaying correctly
            try {
                $selectItem = "SELECT * FROM shopping_cart";
                if (empty($selectItem)) {
                    $displayInfo = "No products yet.";
                } else {
                    $stmt = $conn->prepare($selectItem);
                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_ASSOC);
                    foreach($stmt->fetchAll() as $listItem) {
                        $productName = $listItem['productName'];
                        $productPrice = $listItem['productPrice'];
                        $productImg = $listItem['productImg'];
                    }

                    $displayInfo = "<div><img src='$productImg' class='product-img'/></div>
                    <p><b>$productName</b> - $$productPrice</p>
                    <div id='order-details'>
                    <p><a href='placeholder.php'>Remove</a></p>";
                }
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            echo $displayInfo;
        ?>
            </div>
        </div>
    </div>

    <div class="ordering-totals">
        <label for="pickup-method">Pickup Method:</label> 
        <select name="pickup-method" id="pickup-method">
            <option value="eat-in">Eat-in</option>
            <option value="carry-out">Carry Out</option>
        </select>

        <p>Subtotal: $0.00<br>
        (Tax calculated at checkout)</p>
        
        <button>Check Out</button>
    </div>

    <footer>
        Copyright Kate Sebring, 2023. Images from Pexels.
        <!-- set up credits for images here -->
    </footer>
</body>
</html>