<div class="container mt-4">
        <h1>Book Store</h1>
        <h2>Select A Book To Add to Cart</h2>
        <div class="content border rounded shadow p-4">
            <div class="card-group">
                <?php
                //foreach loop through book array for store
                foreach($_SESSION['books'] as $book)
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
                        <a href='Model/add_to_cart.php?add=$id'>Add to Cart</a>
                    </div>
                    </div>
                    ";
                }           
                ?>
            </div>
        </div>
    </div>