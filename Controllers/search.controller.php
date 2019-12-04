<?php
require_once "../Models/book.model.php";
require_once "../Models/author.model.php";
if(isset($_GET["btn"])){
    $title=$_GET["title"];
    $books=getbook_by_title($title);
    if (count($books)>1) {
        require "../Views/selectedBooks.view.php";
    }
        else{
            require "../Views/singleBook.view.php";
        }

}
