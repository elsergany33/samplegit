<?php
require_once('loginmodel.php');
      // connect to the database
        $errors=array();
        $db = mysqli_connect('localhost', 'root', '', 'phar');
        $object=new signin($email,$password)
        $email=mysqli_real_escape_string($db, $_POST['email']);
        $password=mysqli_real_escape_string($db, $_POST['password']);
        if (empty($email)) {
            array_push($errors, "Username is required");
          }
          if (empty($password)) {
            array_push($errors, "Password is required");
          }
    
?>