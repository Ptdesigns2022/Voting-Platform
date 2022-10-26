<?php include('login-check.php'); ?>

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

          if(isset($_SESSION['add'])) 
          {
             echo $_SESSION['add'];
             unset($_SESSION['add']);
          }
         ?>

<body>
   <header>
   	 <div class="logo"><a href="shift-admin.php"> <img src="images/logo.png"></a></div>
      <br><br> <br><br>
      <h1>Welcome SHIFT Admin!</h1>
        
        <h4>Select the category</h4>

       <div class="menu text-center">
        <div class="wrapper">
        <ul>
          <li><a href="manage-admin.php" class="link-admin">Admin</a></li>
        	<li><a href="admin-music.php" class="link-music">Music</a></li>
        	<li><a href="admin-public-speaking.php" class="link-speaking">Public Speaking</a></li>
        	<li><a href="admin-entrepreneurship.php" class="link-entrepreneur">Entrepreneurship</a></li>
          <li><a href="logout.php" class="link-admin">Logout</a></li>
        </ul>
        </div>
       </div>

       </header>      


       <div class="main text-center">

        <div class="imgs"><img src="images/11.png" class="decagon"></div>

         <div class="main-text">
          
           <h2>Hmmmn, SHIFT Admins <br>Who are the 15 contestants that will<br> make it to the final SHIFT?</h2>
               <i class="fa-solid fa-location-arrow"></i>
          <div class="pics">

            <div class="pic">
            <img src="images/RoundPicture1.png" class="img one">
            </div>

           <div class="pic">
            <img src="images/RoundPicture2.png" class="img two">
            </div>

            <div class="pic">
              <img src="images/RoundPicture3.png" class="img three">
            </div>

             <div class="pic"> 
              <img src="images/RoundPicture4.png" class="img four">
             </div>

            </div>
            <!-- Pics code ends here -->
        </div>
       <!-- Main-text code ends here -->
        
       </div>
      <!-- Main text-center code ends here -->
     <br><br><br>
       
 <?php include('footer.php'); ?>
   
   
  </body>

  </html>