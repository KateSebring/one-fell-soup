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
    <!-- NAVBAR -->
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

    <!-- divider here? -->

    <!-- CONTENT -->
    <h2>Our Menu</h2>

    <!-- make php iterate the individual menu items-->
    <div class="soup-grid">
        <div class="soup-item">
            <a href="product.html">
                <img src="img/soup-1.jpeg" style="width:100%">
            <p>
                Chicken Noodle Soup<br>
                $0.00
                <!--GF/DF/allergy notices-->
            </p>
            </a>
        </div>
        
        <div class="soup-item">
            <img src="img/soup-1.jpeg" style="width:100%">
            <p>
                Chicken Noodle Soup<br>
                $0.00
                <!--GF/DF/allergy notices-->
            </p>
        </div>

        <div class="soup-item">
            <img src="img/soup-1.jpeg" style="width:100%">
            <p>
                Chicken Noodle Soup<br>
                $0.00
                <!--GF/DF/allergy notices-->
            </p>
        </div>

        <div class="soup-item">
            <img src="img/soup-1.jpeg" style="width:100%">
            <p>
                Chicken Noodle Soup<br>
                $0.00
                <!--GF/DF/allergy notices-->
            </p>
        </div>

        <div class="soup-item">
            <img src="img/soup-1.jpeg" style="width:100%">
            <p>
                Chicken Noodle Soup<br>
                $0.00
                <!--GF/DF/allergy notices-->
            </p>
        </div>

        <div class="soup-item">
            <img src="img/soup-1.jpeg" style="width:100%">
            <p>
                Chicken Noodle Soup<br>
                $0.00
                <!--GF/DF/allergy notices-->
            </p>
        </div>

        <div class="soup-item">
            <img src="img/soup-1.jpeg" style="width:100%">
            <p>
                Chicken Noodle Soup<br>
                $0.00
                <!--GF/DF/allergy notices-->
            </p>
        </div>
    </div>

    <footer>
        Copyright Kate Sebring, 2023. Images from Pexels.
        <!-- set up credits for images here -->
    </footer>
</body>
</html>