<?php

session_start();
require "../Models/user.model.php";

if (!isset($_SESSION["username"])) {
    if (isset($_POST["username"])) {
        $users = getusers();//get all user
        foreach ($users as $user) {
            if ($user["username"] === $_POST["username"]) {
                if (isset($_POST["password"])) {
                    $username = $_POST["username"];//add username to a var
                    $password = sha1($_POST["password"]);//hash password
                    if ($user["password"] === $password) {
                        $_SESSION["username"] = $username;//set session for username
                        $_SESSION["password"] = $password;//set session for password
                        if(isset($_POST["check"])) {//
                           $expiryTime = time() + 60*60*24;
                            $name="username";
                            $value = $user["username"];
                            setcookie($name,$value,$expiryTime);
                            header("location:index.controller.php");
                            exit();
                        }
                    } else {
                        echo "password is wrong";
                        require "../Views/login.view.php";
                        exit();
                    }
                }
            } else {
                echo "username is wrong";
                require "../Views/login.view.php";
                exit();
            }
        }
    } else {
        require "../Views/login.view.php";
    }
} else {

    session_unset();
    session_destroy();
    header("location:index.controller.php");
}