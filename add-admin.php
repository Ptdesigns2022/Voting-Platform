

<!DOCTYPE html>
<html>
<head>

	<!-- Meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">

	<title>SHIFT Voting</title>
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/f7a628d9ee.js" crossorigin="anonymous"></script>
	<!-- CSS Link -->
	<link rel="stylesheet" type="text/css" href="voting-style.css">
</head>

    
     <?php
      if(isset($_SESSION['add'])){

        echo $_SESSION['add']; // Displaying Session Message
        unset($_SESSION['add']); // Removing Session Message
      }
      ?>
<body>
   <header>
   	 <div class="logo"><a href="shift-admin.php"> <img src="images/logo.png"></a></div>
      <br><br> <br><br>
      <h1>Add Admin</h1>
        

       <div class="menu text-center">
        <div class="wrapper">
        <ul>
          <li><a href="manage-admin.php" class="link-admin">Admin</a></li>
        	<li><a href="admin-music.php" class="link-music">Music</a></li>
        	<li><a href="admin-public-speaking.php" class="link-speaking">Public Speaking</a></li>
        	<li><a href="admin-entrepreneurship.php" class="link-entrepreneur">Entrepreneurship</a></li>
        </ul>
        </div>
       </div>

       </header>    

       <br><br><br><br>
      
      <center>
        <form action="" method="POST">

              <table class="tbl-30">
                <tr>
                  <td>Name:</td>
                   <td>
                    <input type="text" name="name" placeholder="Enter your name here">
                   </td>
                </tr>

                <tr>
                  <td>Username:</td>
                   <td>
                    <input type="text" name="username" placeholder="Enter your username here" required="">
                   </td>
                </tr>

                <tr>
                  <td>Password:</td>
                   <td>
                    <input type="password" name="password" placeholder="Enter your password here" required="">
                   </td>
                </tr>
                     
                <tr>
                  <td colspan="2">
                    <input type="submit" name="submit" value="Add admin" class="btn-secondary" required="">
                  </td>
                </tr>

              </table>
            </form>
          </center>
    </body>
    </html>


<?php 
 // Code to Process the value from the form and save it in the database
    include('config.php');
   
    if(isset($_POST['submit']))
    {
      //echo "Button Clicked";

      // 1. Code to get data from form

       $full_name = $_POST['name'];
       $username = $_POST['username'];
       $password = md5($_POST['password']); // Code for password encrytion  "md5();"
        
       // 2. SQL Query to save data into database
       $sql= "INSERT INTO tbl_admins SET
            full_name = '$full_name',
            username  = '$username',
            password  = '$password'
       ";
          
          // 3. CODE FOR EXCECUTING QUERY AND SAVING DATA INTO DATABASE
        $res = mysqli_query($conn, $sql) or die(mysqli_error());
           
          // 4. CODE TO CHECK WHETHER(THE QUERY IS EXCECUTED) DATA IS INSERTED OR NOT AND DISPLAY APPROPRIATE MESSAGE

          if($res==TRUE){

            //Code to add session

            $_SESSION['add'] = "Admin added succesfully";

            //Code to redirect page TO MANAGE_ADMIN
            header("location:".SITEURL.'manage-admin.php');
          }
          else{
            //echo "Data not succesfully inserted";

            $_SESSION['add'] = "Failed to add Admin";

            //Code to redirect page TO ADD ADMIN
            header("location:".SITEURL.'add-admin.php');
          }
    }
    
 //Code to check whether the submit button is clicked or not   
 ?>