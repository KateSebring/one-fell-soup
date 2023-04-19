-- CREATE DATABASE soup_products;
USE soup_products;

DROP TABLE IF EXISTS soup_products;
CREATE TABLE soup_products(
productID INT AUTO_INCREMENT PRIMARY KEY,
productName VARCHAR(255),
productDescription VARCHAR(1000),
calories INT,
productPrice DECIMAL(13,2),
webPageLink VARCHAR(255),
allergies VARCHAR (1000),
ingredients VARCHAR (1000),
productImg VARCHAR(255)
);

DROP TABLE IF EXISTS shopping_cart;
CREATE TABLE shopping_cart(
productID INT AUTO_INCREMENT PRIMARY KEY,
productName VARCHAR(255),
productPrice DECIMAL(13,2),
productImg VARCHAR(255)
);

INSERT INTO soup_products (productName, productDescription, calories, productPrice, webPageLink, allergies, ingredients, productImg)
VALUES
("Tomato Soup", "A delicious bowl of comfort.", 320, 2.50, "tomato.php", "milk", "Tomatoes, garlic, milk, olive oil, sugar", "img/tomato_soup.jpg");

INSERT INTO soup_products (productName, productDescription, calories, productPrice, webPageLink, allergies, ingredients, productImg)
VALUES
("Chicken Noodle Soup", "A delicious bowl of comfort.", 270, 3.25, "chicken-noodle.php", "eggs", "Egg noodles, chicken broth, shredded chicken carrots, celery", "img/chicken_noodle_soup.jpg");

INSERT INTO soup_products (productName, productDescription, calories, productPrice, webPageLink, allergies, ingredients, productImg)
VALUES
("Italian Wedding Soup", "A delicious bowl of comfort.", 570, 4.00, "italian-wedding.php", "no common allergens", "Beef/pork meatballs, carrots, onion, celery, garlic, chicken broth, pasta, spinach", "img/italian_wedding_soup.jpg");

INSERT INTO soup_products (productName, productDescription, calories, productPrice, webPageLink, allergies, ingredients, productImg)
VALUES
("Peanut Soup", "A delicious bowl of comfort.", 320, 2.50, "peanut.php", "peanuts", "Peanuts, sweet potato, ribs, kale, tomato paste", "img/peanut_soup.jpg");

SELECT * FROM soup_products;
SELECT * FROM shopping_cart;