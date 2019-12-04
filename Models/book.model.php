<?php
#require config model to connection to database
require_once "config.model.php";
#define a function to read(get) all of books from database
function getAllbooks()
{
    $connection = connection();
    #a querry for get all books
    $sql = "SELECT tbl_books.ID,tbl_books.title,tbl_books.Cover,tbl_books.Overview,tbl_authors.authorName,tbl_authors.Picture FROM 
    tbl_book_has_author
    RIGHT JOIN tbl_books ON tbl_books.ID = tbl_book_has_author.book_id
    LEFT JOIN tbl_authors ON tbl_authors.ID = tbl_book_has_author.author_id";
    $result = mysqli_query($connection, $sql);
    /*$allbooks = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $allbooks[] = $row;
    }*/
    #or
    $allbooks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $allbooks;
}

function getbook_by_title($field,$title)
{
    $connection = connection();
    $sql = "SELECT tbl_books.ID,tbl_books.title,tbl_books.Cover,tbl_books.Overview,tbl_authors.authorName,tbl_authors.Picture FROM tbl_book_has_author
    RIGHT JOIN tbl_books ON tbl_book_has_author.book_id=tbl_books.ID
    LEFT JOIN tbl_authors ON tbl_book_has_author.author_id=tbl_authors.ID
    WHERE $field LIKE '%$title%'";
    $result = mysqli_query($connection, $sql);
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connection);
    return $books;
}

function getbooks_by_author($id)
{
    $connection = connection();
    $sql = "SELECT tbl_books.ID,tbl_books.title,tbl_books.Cover,tbl_books.Overview,tbl_authors.ID,tbl_authors.authorName,tbl_authors.Picture
    FROM tbl_book_has_author
    INNER JOIN tbl_books ON tbl_book_has_author.book_id = tbl_books.ID
    INNER JOIN tbl_authors ON tbl_book_has_author.author_id = tbl_authors.ID
    WHERE tbl_authors.ID = '$id'";
    $result = mysqli_query($connection, $sql);
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connection);
    return $books;
}

function getbooks_by_ID($id)
{
    $connection = connection();
    #a querry for get all books by id
    if (is_array($id)) { //if multiple ids are given
        $idlist = implode(",", $id); //put [,] between ids
        #use IN to get between multiple ids
        $sql = "SELECT tbl_books.ID,tbl_books.title,tbl_books.Cover,tbl_books.Overview,tbl_authors.authorName,tbl_authors.Picture FROM 
        tbl_book_has_author
        RIGHT JOIN tbl_books ON tbl_books.ID = tbl_book_has_author.book_id
        LEFT JOIN tbl_authors ON tbl_authors.ID = tbl_book_has_author.author_id where tbl_books.ID IN ($idlist)";
        $result = mysqli_query($connection, $sql);
        $books = mysqli_fetch_all($result, MYSQLI_ASSOC); //fetch all because we know its some ids
        return $books;
    } else {
        #if only a single id is set
        $sql = "SELECT tbl_books.ID,tbl_books.title,tbl_books.Cover,tbl_books.Overview,tbl_authors.authorName,tbl_authors.Picture FROM 
        tbl_book_has_author
        RIGHT JOIN tbl_books ON tbl_books.ID = tbl_book_has_author.book_id
        LEFT JOIN tbl_authors ON tbl_authors.ID = tbl_book_has_author.author_id where tbl_books.ID = $id";
        $result = mysqli_query($connection, $sql);
        $book = mysqli_fetch_all($result, MYSQLI_ASSOC); //fetch all because its only 1 row
        $book = reset($book); //get fist member of $book array
        return $book;
    }
}

function insertBook($title, $Overview, $author, $fileName)
{
    $connection = connection();
    #insert a book
    $sql = "INSERT INTO tbl_books (tbl_books.title,tbl_books.Cover,tbl_books.Overview) VALUES ('$title','$fileName','$Overview')";
    if (mysqli_query($connection, $sql)) { //if book inserted successfully
        $lastId = mysqli_insert_id($connection); //get the above book id to insert in pivot table
        #query for pivot table
        $sql = "INSERT INTO tbl_book_has_author (tbl_book_has_author.author_id,tbl_book_has_author.book_id) VALUES ('$author','$lastId')";
        mysqli_query($connection, $sql);
    }

}

function editBook($id, $title, $Overview, $author)
{
    $connection = connection();
    $sql = "UPDATE tbl_books  
    INNER JOIN tbl_book_has_author ON tbl_book_has_author.book_id = tbl_books.ID
    SET tbl_books.title='$title',tbl_books.Overview='$Overview',tbl_book_has_author.author_id='$author'
    WHERE tbl_books.ID = '$id'";
    mysqli_query($connection, $sql);
}

function deleteBook($id)
{
    $connection = connection();
    $sql = "DELETE FROM tbl_book_has_author WHERE tbl_book_has_author.book_id = '$id'";
    if (mysqli_query($connection, $sql)) {
        $sql = "DELETE FROM tbl_books WHERE tbl_books.ID = '$id'";
        mysqli_query($connection, $sql);
    }
}





