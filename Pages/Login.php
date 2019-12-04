
<!DOCTYPE html>
<html>
  <head>
  	<title>
  		Login Form
  	</title>

    <link rel="stylesheet"  href="login.css">
    <link href="C:\xampp\htdocs\Pages" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="Signup.php">
  </head>
  	<body>
      <header>
    <ul>
<li><a href="Signup.php">Register</a></li>
    <li><a href="#help">Help</a></li>
    <li><a href="#shop">Shop</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="home.php">Home</a></li>
</ul>
    <b>Enaya</b> 
<img src="logo2.png" alt="our logo was supposed to be here" width="60" height="60"><b>
عناية
</b>
   </header>   
  		<h1>
  			User Login
  		</h1>
<form method="post" action="login.php">
 
  			
  		<label class="email" for="Email" >Email</label>
       <input type="Email" name="Email" placeholder="Email">
  		

  		<label class="pass" for="Password" >Password</label>
       <input type="Password" name="Password" placeholder="Password">

<p>
       <button type="submit" href="home.php" name="login">Login</button></p>

       </form>
  	</body>
    <?php
   if(isset($_POST["login"]))
   {
     header('logincontroller.php');
   }