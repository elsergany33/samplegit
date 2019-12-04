<?php
require_once('signupmodel.php');
    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'phar');
    $firstname=mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname=mysqli_real_escape_string($db, $_POST['lastname']);
    $age=mysqli_real_escape_string($db, $_POST['Age']);
    $email=mysqli_real_escape_string($db, $_POST['email']);
    $password=mysqli_real_escape_string($db, $_POST['password']);
    $Confirm_password=mysqli_real_escape_string($db, $_POST['Confirmpassword']);

    $object=new signup($firstname,$lastname,$age,$email,$password,$Confirm_password)
 
?>