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
        <div class="nav-item"><a href="shopping_cart.php">Shopping Cart (0)</a></div>
    </nav>

    <h2>Your Items</h2>
    <div class="customer-container">
        <div class="customer-products">
            <!-- wrap each product in an "individual-product" div? -->
            <div><img src="img/soup-1.jpeg" class="product-img"/></div>
            <div id="order-details">
                <p><b>[Soup name]</b></p>
                <!-- this will update based on chosen customizations-->
                <p>No customizations</p>

                <p><a href="placeholder.php">Edit</a> | <a href="placeholder.php">Remove</a></p>

                <p>
                    <label for="quantity">Quantity:</label> 
                    <select name ="quantity" id="quantity">
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                        <option value="four">4</option>
                        <option value="five">5</option>
                    </select>
                </p>
            </div>

            <div><img src="img/soup-1.jpeg" class="product-img"/></div>
            <div id="order-details">
                <p><b>[Soup name]</b></p>
                <!-- this will update based on chosen customizations-->
                <p>No customizations</p>

                <p><a href="placeholder.php">Edit</a> | <a href="placeholder.php">Remove</a></p>

                <p>
                    <label for="quantity">Quantity:</label> 
                    <select name ="quantity" id="quantity">
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                        <option value="four">4</option>
                        <option value="five">5</option>
                    </select>
                </p>
            </div>

            <div><img src="img/soup-1.jpeg" class="product-img"/></div>
            <div id="order-details">
                <p><b>[Soup name]</b></p>
                <!-- this will update based on chosen customizations-->
                <p>No customizations</p>

                <p><a href="placeholder.php">Edit</a> | <a href="placeholder.php">Remove</a></p>

                <p>
                    <label for="quantity">Quantity:</label> 
                    <select name ="quantity" id="quantity">
                        <option value="one">1</option>
                        <option value="two">2</option>
                        <option value="three">3</option>
                        <option value="four">4</option>
                        <option value="five">5</option>
                    </select>
                </p>
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