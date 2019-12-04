<?php

class signup{
    // initializing variables
public $firstname="";
public $lastname="";
public $age="";
public $email="";
public $password="";
public $Confirm_password="";
public $errors=array();
function __construct($firstname,$lastname,$age,$email,$password,$Confirm_password)
{
    $password = md5($password);
  	$Confirm_password = md5($Confirm_password);
    $db = mysqli_connect('localhost', 'root', '', 'phar');
    $query = "INSERT INTO signup(Fname,Lname,Age,Email,Password1,confirmpass)VALUES('$firstname','$lastname','$age','$email','$password','$Confirm_password')";
      mysqli_query($db, $query);
      header('Login.php');
     
}
}
