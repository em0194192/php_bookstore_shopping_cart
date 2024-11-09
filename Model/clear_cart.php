<?php
//start session to access session arrays
session_start();

//check if cart exists in query string
if(isset($_GET['cart']))
{
    //check if value for cart is clear
    if($_GET['cart'] == "clear")
    {
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy(); 

        //route back to (now empty) cart
        header("Location: ../index.php?action=cart");
        //halt further code execution
        exit;
    }

} else {
    //route back to (now empty) cart
    header("Location: ../index.php?action=cart");
    //halt further code execution
    exit;
}