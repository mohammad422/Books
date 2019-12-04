<?php
require_once "../Config/dbConnection.config.php";
#define a function to connect to database
function connection()
{
    $connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    $error = mysqli_connect_error();
    if ($error != null) {
        return $error;
    } else {
        return $connection;
    }
}

