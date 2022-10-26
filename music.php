<?php include('menu.php'); ?>
 

    <section class="category">
        <div class="photos">
      
              
              <?php
               include('config.php');
                // Creating query to display data from database 
                 $sql = "SELECT * FROM tbl_music";

                // Executing the query 
                 $res = mysqli_query($conn, $sql);

                // cOunting rows to check if the category is available or not
                 $count = mysqli_num_rows($res);

                 if($count>0)
                 {
                   // Category Available
                    while($row=mysqli_fetch_assoc($res))
                    {
                       // Getting the values from database
                        $id = $row['id'];
                        $contestant_image = $row['contestant_image'];
                        $contestant_name = $row['contestant_name'];
                        $contestant_votes = $row['votes'];

                        ?>
                             
                       <a href="<?php echo SITEURL; ?>voting-payment.php?contestant_id=<?php echo $id; ?>">
                         <div class="imgBx">
                            <?php
                            // Checking whether image is available or not, If not checked we may encounter error if there is no image.= available.

                               if($contestant_image=="")
                               {
                                // Display message
                                echo "<div class='error'>Image Not Available.</div>";
                               }
                               else
                               {
                                ?>
                                 <img src="<?php echo SITEURL; ?>/music/<?php echo $contestant_image; ?>" 
                                 alt="Cannot Display Image" class="img-responsive img-curve">

                                <?php
                               }
                            ?>
                         
                             
                        </div>
                     </a>

                        <?php
                    }
                 }
                 else
                 {
                   // Category Not available
                    echo "<div class='error'> Category Not Added. </div>";
                 }

             ?>
        
           
            <div class="clearfix"></div>
        </div>
    </section>



         <!-- <div class="text">
            <h3>I'm a contestant</h3>
          </div>-->

       <!--

        <div class="contestants">

         <div class="imgBx">
           <a href="#">  <img src="images/3.jpg"> <img src="images/music-arrow.png" class="arrow"> </a>
         </div>

          <div class="text">
            <h3>I'm a contestant</h3>
          </div>
          
       </div>

        <div class="contestants">

         <div class="imgBx">
           <a href="#">  <img src="images/4.jpg"> <img src="images/music-arrow.png" class="arrow"> </a>
         </div>

          <div class="text">
            <h3>I'm a contestant</h3>
          </div>
          
       </div>

        <div class="contestants">

         <div class="imgBx">
           <a href="#">  <img src="images/5.jpg"><img src="images/music-arrow.png" class="arrow"> </a>
         </div>

          <div class="text">
            <h3>I'm a contestant</h3>
          </div>
          
       </div>

        <div class="contestants">

         <div class="imgBx">
           <a href="#">  <img src="images/9.jpg"><img src="images/music-arrow.png" class="arrow"> </a>
         </div>

          <div class="text">
            <h3>I'm a contestant</h3>
          </div>
          
       </div>

        <div class="contestants">

         <div class="imgBx">
            <a href="#">  <img src="images/7.jpg"> <img src="images/music-arrow.png" class="arrow"></a>
         </div>

          <div class="text">
            <h3>I'm a contestant</h3>
          </div>
          
       </div>

        <div class="contestants">

         <div class="imgBx">
          <a href="#">  <img src="images/8.jpg"><img src="images/music-arrow.png" class="arrow"> </a>
         </div>

          <div class="text">
            <h3>I'm a contestant</h3>
          </div>
          
       </div>
  -->
   

 <?php include('footer.php'); ?>