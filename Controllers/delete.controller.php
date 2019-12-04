<?php
require_once "../Models/book.model.php";
require_once "../Models/author.model.php";
$id = $_GET["Book"];

deleteBook($id);
header("location:index.controller.php");


