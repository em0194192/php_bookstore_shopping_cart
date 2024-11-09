<?php
//start session to access session arrays
session_start();
//check for an add key in the query string
if(isset($_GET['add']))
{
    //assign the id from query string to a variable
    $addBookId = $_GET['add'];

    //if session doesn't have cart yet
    if (!isset($_SESSION['cart']))
    {
        //if not, initialize cart with an empty array
        $_SESSION['cart'] = [];
    }

    //if book is already in cart
    //iterate through the cart first to look for match
    foreach($_SESSION['cart'] as $book)
    {
        //match found
        if($addBookId == $book['id'])
        {
            //book already in cart - route to display cart - stop further code execution
            header("Location: ../index.php?added=already&action=cart");
            //halt further code execution
            exit;
        }
    }

    //If book not already in cart
    //iterate through book list to find matching book (extract details to put in cart)
    foreach($_SESSION['books'] as $book)
    {
        if($addBookId == $book['id'])
        {
            //Load the matching book details into a variable
            $newBook = [
                'id' => $book['id'],
                'title' => $book['title'],
                'price' => $book['price']
            ];
            
            //add the book to cart using the new variable
            $_SESSION['cart'][] = $newBook;

            //book added - route to display cart - stop further code execution
            header("Location: ../index.php?action=cart&added=true");
            //halt further code execution
            exit;
        }
    }
}


