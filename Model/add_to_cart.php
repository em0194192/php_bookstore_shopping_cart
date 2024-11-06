<?php

//check for an add key in the query string
if(isset($_GET['add']))
{
    $addBookId = $_GET['add'];

    //if session has already got a cart or not
    if (!isset($_SESSION['cart']))
    {
        //if not, initialize cart with an empty array
        $_SESSION['cart'] = [];
    }

    //if book is already in cart
    $bookInCart = false;



    //If book not already in cart
    





}


