<?php include('config.php'); ?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">

	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="voting-style.css">
</head>
<body>

  <header>
    <div class="logo"><a href="#"> <img src="images/logo.png"></a></div>
 </header>

 <br><br><br><br>

    <div class="login">
    	<h1 class="text-center1">Login</h1><br><br>

    	   <?php
              if (isset($_SESSION['login'])) 
              {
              	 echo $_SESSION['login'];
              	 unset($_SESSION['login']);
              }
              if (isset($_SESSION['no-login-message']))
              {
                 echo $_SESSION['no-login-message'];
                 unset($_SESSION['no-login-message']);
              }
             
    	    ?>
          <!-- Code for Login Form starts here -->
          <form action="" method="POST" class="text-center1">
          	<br>
  
          	<input type="text" name="username" placeholder="Enter Username"><br><br>
          
          	<input type="password" name="password" placeholder="Enter Password"><br><br>

          	<input type="submit" name="submit" value="Login" class="btn-primary"><br><br>
          </form>
    	
    
    </div>
        <!-- Code for Login Form ends here -->
</body>
</html>


<?php 
 // 1. Code to check whether Submit button is clicked or not
  
   if (isset($_POST['submit'])) {
   	  //Process to Login
      
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $raw_password = md5($_POST['password']);
        $password = mysqli_real_escape_string($conn, $raw_password);

      // 2. Sql query to check whether password or username exists in database or not

        $sql = "SELECT * FROM tbl_admins WHERE username='$username' AND password='$password'";

      // 3. Code to excecute query

        $res = mysqli_query($conn, $sql);

      // 4. Code to count rows to check whether user exists or not

        $count = mysqli_num_rows($res);

        if($count==1){
          $_SESSION['login'] = "<div class='success'>Login Successful </div>";
          $_SESSION['user'] = $username; // Code to check whether user is logged in or not and logout will unset it
          // Redirecting to Home page

          header('location:'.SITEURL.'shift-admin.php');
        }
        else
        {
        	 $_SESSION['login'] = "<div class='error text-center1'>Username or Password did not match </div>";
          // Redirecting to Home page

          header('location:'.SITEURL.'admin-login.php');

         // User not available
        }

   }

 ?>