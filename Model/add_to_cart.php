<?php
session_start();
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
    foreach($_SESSION['cart'] as $book)
    {
        if($addBookId == $book['id'])
        {
            //book already in cart - route to display cart - stop further code execution
            header("Location: ../index.php?added=already&action=cart");
            //halt further code execution
            exit;
        }
    }


    //If book not already in cart

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


