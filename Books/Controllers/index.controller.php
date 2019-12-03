<?php

session_start();
#require book model
require "../Models/book.model.php";
#require user model
require "../Models/user.model.php";
$users = getusers();


#set firstname and lastname if a user has been logged in

if (isset($_SESSION["username"])) {
    foreach ($users as $user) {
        if ($_SESSION["username"] === $user["username"]) {
            $firstname = $user["firstname"];
            $lastname = $user["lastname"];
        }
    }
}
#read requested books by a user
#get books by post method
if (isset($_POST['selectedBook'])) {
    $IDbook = $_POST['selectedBook'];
    if (count($IDbook) > 1) { //if more than one book have been selected
        $books = getbooks_by_ID($IDbook); //get all data of the selected books
        #require selected book page
        require "../Views/selectedBooks.view.php";
    } elseif (count($IDbook) == 1) {//if one book has been selected
        $IDbook = reset($IDbook); //extract only member of the array
        $book = getbooks_by_ID($IDbook); //get all data of the selected book
        require "../Views/singleBook.view.php";
    }
#get books by get method with click on a book link
} elseif (isset($_GET['ID'])) {
    $bookId = $_GET['ID']; //get book id
    $book = getbooks_by_ID($bookId); //get all of selected books
    require "../Views/singleBook.view.php";
} elseif (isset($_POST["btn"])) {
    if (isset($_POST["value"])) {
        $field = $_POST["field"];
        $value = $_POST["value"];
        $allbooks = getbook_by_title($field, $value);
        require "../Views/book.view.php";
    }
} else {
    $allbooks = getAllbooks(); //get all of books in database
    require "../Views/book.view.php";
}
