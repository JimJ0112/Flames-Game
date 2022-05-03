<?php

class User{

// properties
private $username;
private $password;
private $correctusername = "user";
private $correctpassword = "qwerty";


// constructor
function __construct($username,$password){

    $this->username = $username;
    $this->password = $password;
}
// desctructor
function __destruct(){


}

// methods
public function userValidate(){
    $username = $this->username;
    $password = $this->password;
    $correctusername = $this -> correctusername;
    $correctpassword = $this -> correctpassword;

    if($username === $correctusername && $password === $correctpassword){
        return true;
    } else {
        return false;
    }
}


public function getUsername(){
    $username = $this->username;
    return $username;
}

}