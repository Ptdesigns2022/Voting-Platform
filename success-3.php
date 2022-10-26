<?php include('menu.php'); ?>


    <?php

    include('config.php');
       if ($_GET['status'] !== "success") {
       header("location:javascript://history.go(-1)");
     }
     // if (!$_GET['successfullypaid']) {
         
         //header('location: voting.php');
  
      else{
        $reference = $_GET['status'];

      }
      $con_name = $_SESSION['name'];
      $con_votes = $_SESSION['votes'];

      //echo $con_name;
     // echo $con_votes;

     /*if ($_GET['status'] !== "success") {
     	 header("location:javascript://history.go(-1)");
     }*/
       
        /* $contestant_name = $_SESSION['first-name'];
         $contestant_votes = $_SESSION['votes'];*/
         

      $sql = "SELECT * FROM tbl_entrepreneurship WHERE contestant_name = '$con_name' ";
      $res = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($res);

       $votes=$row['votes'];

      $sql2 = "UPDATE tbl_entrepreneurship SET
            votes = '$con_votes' + '$votes' 
                WHERE contestant_name = '$con_name'
            ";
     

      $res = mysqli_query($conn, $sql2);

      if ($res==true) {
         echo "<script>alert('Your Votes have been succesfully received.')</script>";
      }

      else{
         die("Sorry, Something went wrong.");
      }
    ?>
   
   

      <div class="success">
      	 <div class="message">
      	 	<span>Congratulations.</span><br><br><br>
      	 	 <img src="images/11.png" width="40px;">
      	 	  <br><br>
      	 	  <span> Your Vote(s) have been received.</span><br><br>
           <!-- <a href="voting.php"> Confirm Vote</a>-->
      	 	   

      	 </div>
      </div>
  <br><br>
     <div class="page-wrapper">
	
     </div>
<?php include('footer.php'); ?>
  </body>
</html>