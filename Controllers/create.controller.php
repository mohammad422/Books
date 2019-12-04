<?php
if (!isset($_SERVER['HTTP_REFERER'])) {
    // redirect them to your desired location
    header('location:index.controller.php');
    exit;
}

require "../Models/book.model.php";
require "../Models/author.model.php";
if (isset($_POST["btn"])) {
    if ($_POST["title"] != null && $_POST["Overview"] != null && $_POST["authorName"] != null && $_FILES["Cover"]["name"] != null){
        $title = $_POST["title"];
        $Overview = $_POST["Overview"];
        $author = $_POST["authorName"];
        $Cover = $_FILES["Cover"]["name"];
        move_uploaded_file($_FILES["Cover"]["tmp_name"], "../images/cover/$Cover");
        insertBook($title, $Overview, $author, $Cover);
        header("location:index.controller.php");
        exit();
    }
}
    $authors = getAllauthors();
    require_once "../Views/create.view.php";

