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
    session_start();
    // Save a list of books to an array
    $_SESSION['books'] = 
    [
        ['id' => 1, 'title' => 'Lord of the Rings: The Fellowship of the Ring', 'price' => 14.99],
        ['id' => 2, 'title' => 'Harry Potter and the Prisoner of Azkaban', 'price' => 13.99],
        ['id' => 3, 'title' => 'We are Legion (We are Bob)(Bobiverse Book 1)', 'price' => 6.95]
    ];
    include "View/nav.php";

    $action = isset($_GET['action']) ? $_GET['action'] : ''; 

    switch ($action) {
        case 'store':
            // include the store
            include "View/show_store.php";
            break;
        case '':
            // include the store (no action set)
            include "View/show_store.php";
            break;
        case 'cart':
            //include the cart
            include "View/show_cart.php";
            break;
        default:
            echo("Error with action switch statement");
            break;
    }

    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>