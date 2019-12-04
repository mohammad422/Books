<?php
session_start();

#require user model
require "../Models/user.model.php";

$users = getusers();
#set firstname and lastname if a user has been logged in
if (isset($_SESSION["username"])){
    foreach ($users as $user) {
        if ($_SESSION["username"] === $user["username"]) {
            $firstname = $user["firstname"];
            $lastname = $user["lastname"];
            require "../Views/dashboard.view.php";
        }
    }
}
