
<!DOCTYPE html>
<html>
   <head>  	
   	<title>
   		Sign Up Form
   	</title>
   	<link rel="stylesheet"  href="Signup.css">
   	<link href="C:\xampp\htdocs\Pages\Signup" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="login.php">
   </head>
   <body> 
   <header>
   	<ul>
<li><a href="Login.php">login</a></li>
  <li><a href="#help">Help</a></li>
  <li><a href="#shop">Shop</a></li>
  <li><a href="#about">About</a></li>
  <li><a href="home.php">Home</a></li>
</ul>
   	<b>Enaya</b> 
<img src="logo.png" alt="our logo was supposed to be here" width="60" height="60"><b>
عناية
</b>
   </header>         
   <h1>Sign Up</h1>
   <h3>Please fill in this form to create an account!</h3>
  <form action="" method="POST">


  	<fieldset>
       
       <legend><span class="section"></span></legend>


  	   <label class="" for="firstname" ></label>
       <input type="firstname" name="firstname" value="Firstname">

       <label class="" for="lastname" ></label>
       <input type="lastname" name="lastname" value="Lastname">

       <label class="" for="Age" ></label>
       <input type="Age" name="Age" value="Age">

       <label class="" for="email" ></label>
       <input type="email" name="email" value="Email">

       <label class="" for="password" ></label>
       <input type="p_assword" name="password" value="Password">

       <label class="" for="Confirm password" ></label>
       <input type="Confirm password" name="Confirmpassword" value="Confirm password">

       <input type="checkbox" name="terms" value="accept">I accept the Terms of use and Policy<br>

       </fieldset>

       <a href="Login.php"><button type="submit" name="kaka">Add User</button>
       <button type="submit1">Cancel</button>


   </form>


   </body>
   <?php
   if(isset($_POST["kaka"]))
   {
     require_once('signuppcontroller.php');
   }
   ?>