<?php
session_start();

// initializing variables
$firstname="";
$lastname="";
$age="";
$email="";
$password="";
$Confirm_password="";
$errors=array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'phar');

// REGISTER USER
if (isset($_POST['kaka'])) {
  // receive all input values from the form

$firstname=mysqli_real_escape_string($db, $_POST['firstname']);
$lastname=mysqli_real_escape_string($db, $_POST['lastname']);
$age=mysqli_real_escape_string($db, $_POST['Age']);
$email=mysqli_real_escape_string($db, $_POST['email']);
$password=mysqli_real_escape_string($db, $_POST['password']);
$Confirm_password=mysqli_real_escape_string($db, $_POST['Confirmpassword']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($age)) { array_push($errors, "Age is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  if (empty($Confirm_password)) { array_push($errors, "Password is required"); }
  if ($password != $Confirm_password) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM signup WHERE  Email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists

    if ($user['Email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);
  	$Confirm_password = md5($Confirm_password);//encrypt the password before saving in the database

  	$query = "INSERT INTO signup(Fname,Lname,Age,Email,Password1,confirmpass)VALUES('$firstname','$lastname','$age','$email','$password','$Confirm_password')";
  	mysqli_query($db, $query);
  	$_SESSION['Firstname'] = $firstname;
  	$_SESSION['success'] = "You are now logged in";
  }
}
// LOGIN USER
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db, $_POST['Email']);
  $password = mysqli_real_escape_string($db, $_POST['Password']);

  if (empty($email)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

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
