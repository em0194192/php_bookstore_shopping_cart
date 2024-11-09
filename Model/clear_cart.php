<?php
session_start();

if(isset($_GET['cart']))
{
    if($_GET['cart'] == "clear")
    {
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy(); 

        //route back to now empty cart
        header("Location: ../index.php?action=cart");
        //halt further code execution
        exit;
    }

} else {
    echo("Cart Already Empty");
    //NEED TO ADD A REDIRECT AND FIGURE OUT HOW TO HIDE CLEAR CART LINK IF CART IS EMPTY
}