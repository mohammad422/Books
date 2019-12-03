<?php
require "../Models/user.model.php";

$users = getusers();
if (isset($_POST["firstname"]) && $_POST["lastname"] && $_POST["username"] && $_POST["password"]) {

    foreach ($users as $user) {
        if ($user["username"] === $_POST["username"]) {
            require "../Views/signup.view.php";
            echo "this username has been choiced before";
        } else {
            $firstname = $_POST["username"];
            $lastname = $_POST["lastname"];
            $username = $_POST["username"];
            $password = $_POST["password"];
            insertuser($firstname,$lastname,$username,$password);
            header("location:index.controller.php");
        }
    }
}
require "../Views/signup.view.php";