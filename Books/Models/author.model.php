<?php
#require config model to connection to database
require_once "config.model.php";
#define a function to get all of authors
function getAllauthors()
{
    $connection = connection();
    $sql = "SELECT tbl_authors.authorName,tbl_authors.ID FROM tbl_authors";
    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $authors[]=$row;
    }
    mysqli_close($connection);
    return $authors;
}
