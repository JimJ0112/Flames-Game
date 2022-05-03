<?php
session_start();
require("classes/User.php");










if(isset($_POST['username']) && isset($_POST['password']) ){

    $username = $_POST['username'];
    $password = $_POST['password'];

    if(is_string($username) && is_string($password)){
        $User = new User($username, $password);
        $exists = $User-> userValidate();

            if($exists){
                $sessionname =  $User -> getUsername();
                $_SESSION["username"] = $sessionname;

                header("location: main.php?msg= Welcome, $sessionname");

            } else {
                header("location:index.php?msg=user not found, please try again");

            } // inner inner if
    
    } else {
        header("location:index.php?msg=input not valid");
    }// inner if


} else{
    header("location:index.php?msg=no input");

} // outer if
