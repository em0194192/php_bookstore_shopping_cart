<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    
    // Save a list of books to an array
    $books = 
    [
        ['id' => 1, 'title' => 'Lord of the Rings: The Fellowship of the Ring', 'price' => 14.99],
        ['id' => 2, 'title' => 'Harry Potter and the Prisoner of Azkaban', 'price' => 13.99],
        ['id' => 3, 'title' => 'We are Legion (We are Bob)(Bobiverse Book 1)', 'price' => 6.95]
    ];

    ?>

    <div class="container mt-4">
        <div class="content border rounded shadow p-4">
            <div class="card-group">
                <?php
                foreach($books as $book)
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
                        <a href='?add=$id'>Add to Cart</a>
                    </div>
                    </div>
                    ";

                }
                
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>