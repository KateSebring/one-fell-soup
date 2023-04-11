<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/universal_settings.css" rel="stylesheet">
    <title>Product Name | One Fell Soup</title>

    <style>
        .main-product-info {
            margin: auto;
            margin-top: 3rem;
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-items: center;
            text-align: center;
            gap: 1rem;
            padding: 2rem;
            background-color: #bba589;
        }

        h2 {
            margin-bottom: 1rem;
        }

        .soup-img {
            width: 100%;
        }

        h1, h2, h3 {
            color: #242124;
        }

        p {
            margin:1rem;
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
                width:100%;
            }

            .main-product-info {
                display: grid;
                grid-template-columns: repeat(2, 4fr);
                grid-template-rows: 1fr;
                grid-column-gap: 0px;
                grid-row-gap: 0px;
                width:70%;
            }

            .div1 { 
                grid-area: 1 / 1 / 2 / 2; 
            }
            .div2 { 
                grid-area: 1 / 2 / 2 / 3;
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

        <div class="nav-item"><a href="index.html">Home</a></div>
        <div class="nav-item"><a href="menu.html">Menu</a></div>
        <div class="nav-item"><a href="shopping_cart.html">Shopping Cart (0)</a></div>
    </nav>

    <!-- CONTENT -->

    <main>
        <!-- maybe split these into two columsn if neccessary-->
        <div class="main-product-info">
            <div class="div1"> 
                <img src="img/soup-1.jpeg" class="soup-img">
            </div>
            <div class="div2"> 
                <h2>[Product Name]</h2>
                
                <p><b>Calorie information</b></p>
                
                <p id="product-description">This is a paragraph with details about the product.</p>

                <p><i>Details about food sensitivies; gluten free, dairy free, vegetarian, etc. Maybe make this tags/buttons instead?</i></p>

                <button>Add to Cart</button>
            </div>
        </div>

        <div class="nutrition-info">
            <div id="ingredients">
                <h3>Ingredients</h3>
                <p>Noodles, chicken, celery, chicken broth</p>
            </div>

            <div id="allergens">
                <h3>Allergen Information</h3>
                <p>This product contains eggs, milk, and gluten.</p>
            </div>
        </div>
        
    </main>
</body>
</html>