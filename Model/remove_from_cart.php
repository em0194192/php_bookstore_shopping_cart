<?php
//start session to access session arrays
session_start();
//check for a remove key in the query string
if(isset($_GET['remove']))
{
    //Get the ID from the remove key/value pair and store in a variable
    $removeBookId = $_GET['remove'];

    //find book by iterating through cart
    foreach ($_SESSION['cart'] as $bookId => $book)
    {
        //when match is found
        if($removeBookId == $book['id'])
        {
            //Use unset to remove the matching book from the cart based on id
            unset($_SESSION['cart'][$bookId]); 
            //book found in cart and removed - now route back to display cart
            header("Location: ../index.php?action=cart");
            //halt further code execution
            exit;
        }
    }
}


