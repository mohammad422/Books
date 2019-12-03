<?php
require_once "../Models/book.model.php";
require_once "../Models/author.model.php";

if (isset($_POST["btn"])) {
    $ID = $_POST["ID"];
    $title = $_POST["title"];
    $Overview = $_POST["Overview"];
    $author = $_POST["authorName"];
    $edit = editBook($ID, $title, $Overview, $author);
    header("location:../Controllers/index.controller.php");
} else {
    $id = $_GET["Book"];
    $authors = getAllauthors();
    $book = getbooks_by_ID($id);
    require "../Views/editbook.view.php";
}
