<div class="container mt-4">
        <h1>Shopping Cart</h1>
        <div class="content border rounded shadow p-4">
            <div class="card-group">
                <?php
                    //if session has already got a cart or not
                    if (!isset($_SESSION['cart']))
                    {
                        //if not, initialize cart with an empty array
                        $_SESSION['cart'] = [];
                    }
                    
                    // Check if the cart is empty
                    if (empty($_SESSION['cart'])) {
                        // Display a message if the cart is empty
                        echo "<p>Your cart is currently empty!</p>";
                    } else {
                        //Iterate through cart and display contents
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
                                <a href='Model/remove_from_cart.php?remove=$id'>Remove From Cart</a>
                            </div>
                            </div>
                            ";
                        }
                    }
                ?>
            </div>
        </div>
        <a href="Model/clear_cart.php?cart=clear">Clear Cart</a>
    </div>