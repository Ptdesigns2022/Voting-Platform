<?php include('login-check.php');  ?>

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


<body>
   <header>
    
   	<div class="logo"><a href="shift-admin.php"> <img src="images/logo.png"></a></div>
      <br><br> <br><br>
      <h1>Music Category</h1>
     
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

       <br> <br ><br> <br>

      <table class="tbl-full">
         <tr class="tbl-30">
           <th>SN</th>
           <th>Contestant Image</th>
           <th>Contestant Name</th>
           <th>No of Votes</th>
         </tr>

                 <?php
                
                       // Creating Sql query to get all food
                       $sql = "SELECT * FROM tbl_music";

                       // Excevuting the query
                       $res = mysqli_query($conn, $sql);

                       // Counting the rows to check whether we have food or not

                       $count = mysqli_num_rows($res);
                      
                       $sn = 1;

                       if($count>0)
                       {
                          // We have food in database

                          //Getting the food from datavase and displaying

                          while ($row=mysqli_fetch_assoc($res)) 
                          {
                            // Getting the values from database
                              $id = $row['id'];
                              $contestant_image = $row['contestant_image'];
                              $contestant_name = $row['contestant_name'];
                              $contestant_votes = $row['votes'];
                             ?>
                               <tr>
                                  <td> <?php echo $sn++;  ?> </td>
                                  

                                  <td> 
                                   <?php
                                      // Check whether we have image or not
                                     if($contestant_image=="")
                                     {
                                       // We do not have image, display error message
                                       echo "<div class='error'> Image Not Added </div>";
                                     }
                                     else
                                     {
                                      // We have image, display image
                                      ?>
                                       <img src="<?php echo SITEURL; ?>/music/<?php echo $contestant_image; ?>" width="100px">
                                    
                                  </td>

                                  <td> <?php echo $contestant_name; ?> </td>
                                  <td><?php echo $contestant_votes; ?> </td>
                                    <?php
                                     }
                                   }
                                 }
                                  ?>

      </table>
 <?php include('footer.php'); ?>
  </body>
  </html>
