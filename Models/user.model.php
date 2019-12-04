<?php
#require config model to connection to database
require_once "config.model.php";

function getusers()
{
    $connection = connection();
    #a querry for get all books
    $sql = "SELECT * FROM tbl_users";
    $result = mysqli_query($connection, $sql);
    $allusers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $allusers;
}
function getuser($name,$value)
{
    $connection = connection();
    #a querry for get all books
    $sql = "SELECT * FROM tbl_users WHERE '$name'='$value'";
    $result = mysqli_query($connection, $sql);
    $allusers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $allusers;
}

function insertuser($firstname, $lastname, $username, $password)
{
    $connection = connection();
    $sql = "INSERT INTO tbl_users (tbl_users.firstname,tbl_users.lastname,tbl_users.username,tbl_users.password) 
    VALUES ('$firstname','$lastname','$username','$password')";
    mysqli_query($connection, $sql);
    mysqli_close($connection);
}

