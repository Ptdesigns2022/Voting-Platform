<?php include('menu.php') ?>
    
    <br> <br> 

             <?php

                if(isset($_GET['contestant_id'])) {
                   $id =  $_GET['contestant_id'] ;
      
                   }
               ?>

                     <?php
                      include('config.php');
                       // Creating Sql query to get all food
                       $sql = "SELECT * FROM tbl_speaking WHERE id=$id";

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
                              ///$id = $row['id'];
                              $contestant_image = $row['contestant_image'];
                              $contestant_name = $row['contestant_name'];
                              $contestant_votes = $row['votes'];
                            
                                    
                                  
                                   }
                                 }
                                 else {
                                  echo "<div class='text-center2'>Failed to display from database</div>";
                                 }
                                  ?>

             


     <div class="voting-payment">
      <div class="content">

         <div class="imgBx">
          <img src="<?php echo SITEURL; ?>/public speaking/<?php echo $contestant_image; ?>" width="100px">
         </div>
          </div>

          <div class="content">
            <form id="paymentForm" action="pay2.php" method="POST">

                 <div class="form-group">
                   <label for="email">Email </label>
                   <input type="email" id="email-address" name="email" placeholder="Your email" required />
                 </div>

                 <div class="form-group">
                   <label for="amount">Voting Quantity</label>
                   <input type="number" id="votes" name="votes" placeholder="No of votes" required />
                 </div>

                 <div class="form-group">
                   <!--<label for="first-name">Contestant Name</label>-->
                   <input type="hidden" id="contestant_name" name="contestant_name" value="<?php echo $contestant_name; ?>" />
                 </div>

                 <!--<div class="form-group">
                   <label for="last-name">Last Name</label>
                   <input type="text" id="last-name" />
                 </div>-->

                 <div class="form-submit">
                  <button name="sub"> Vote </button>
                </div>
              </form>

          </div>
        <!-- Content ends here -->

              

      <br><br>
            
    </div>
  <!-- Voting-payment ends here -->
     <br> <br> <br> <br>
            
 
      
    <?php include('footer.php') ?>
</body>

</html>