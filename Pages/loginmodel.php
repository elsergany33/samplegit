<?php

class signin{
    // initializing variables
$email="";
$password="";
$errors=array();
function __construct($email,$password)
{
    
    
      if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM signup WHERE Email='$email' AND Password1='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['Email'] = $username;
          $_SESSION['success'] = "You are now logged in";
        }else {
          array_push($errors, "Wrong Email/password combination");
        }
      }
     
}
}