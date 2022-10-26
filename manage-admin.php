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
     
     <?php
      if(isset($_SESSION['add'])){

        echo $_SESSION['add']; // Displaying Session Message
        unset($_SESSION['add']); // Removing Session Message
      }
      ?>

<body>
   <header>
    <div class="logo"><a href="shift-admin.php"> <img src="images/logo.png"></a></div>
      <br><br> 
      <h1>Manage Admin</h1>
        
       <center><a href="add-admin.php" class="btn-secondary2"> Add Admin </a></center>
       
       <br><br>
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

      <table class="tbl-full">
         <tr>
           <th>SN</th>
           <th>Admin</th>
           <th>Username</th>
          
         </tr>
          
           <?php
           
                    // Code for Query to get all admins 
                     $sql = "SELECT * FROM tbl_admins";   
                     $res = mysqli_query($conn, $sql);

                      // Code to check whether the query is excecuted or not
                     if ($res==TRUE)
                      {

                        
                        // Code to count rows whether we have data or not
                        $count = mysqli_num_rows($res); // Function to get all rows in database
                         
                         $sn = 1;// Code to create a variable and assign the value

                        // Code to check number of rows
                        if($count>0)
                        {
                          // We have data in datadase  
                          while($rows = mysqli_fetch_assoc($res)) {
                             // Using while loop to get all the data from database
                             // And while loop will run as long as we have data in database
                            
                             // Get individual data
                              $id =$rows['id'];
                              $full_name =$rows['full_name'];
                              $username =$rows['username'];

                              //Code to display value in our table

                              ?>

                         <tr>
                              <td><?php echo $sn++; ?></td>
                              <td><?php echo $full_name; ?></td>
                              <td><?php echo $username; ?></td>

                         </tr>

                      <?php
                        } 
                       }

                     else
                     {

                          // We do not have data in database

                            }
                        }
                    ?>                       
            
       </table>

    </body>
    
    </html>