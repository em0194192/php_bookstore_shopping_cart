<?php
session_start();

//if Empty -> Display an image indicating empty cart
echo("<h1>I'm an empty cart!</h1>");

//Add a way to remove items from cart
echo("<h1>Remove From Cart</h1>");

//Add a way to clear the cart - empty entirely
echo("<h1>You just emptied the cart!</h1>");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    include "nav.php";
    ?>
    <div class="container mt-4">
        <h1>Shopping Cart</h1>
        <div class="content border rounded shadow p-4">
            <div class="card-group">
                <?php
                foreach($_SESSION['cart'] as $book)
                {
                    $title = $book['title'];
                    $price = $book['price'];
                    $id = $book['id'];
                    //load books to the page with echo (bootstrap cards) 
                    echo "
                    <div class='card'>
                    <div class='card-body'>
                        <h5 class='card-title'>Title: $title</h5>
                        <p class='card-text'>Price: $price</p>
                        <a href='Model/add_to_cart.php?remove=$id'>Remove From Cart</a>
                    </div>
                    </div>
                    ";

                }
                
                ?>
            </div>
        </div>
        <a href="../Model/clear_cart.php?cart=clear">Clear Cart</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>