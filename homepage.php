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

    <div class="home-page-welcome">
        <h2>Need a warm bowl of comfort?</h2>

        <!-- <button>Check out our menu!</button> -->
    </div> 

    <h3>Customer Favorites</h3>

    <div class="soup-grid">
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

    <h3 id="new-products">New Products</h3>

    <div class="soup-grid">
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