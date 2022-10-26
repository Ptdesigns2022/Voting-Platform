<?php
  
 // Code to excecute query and save data in database

         //Start Session
         session_start();

         // Code to create constants to store non-repeating values
         define('SITEURL', 'http://localhost/SHIFT Voting/');
         define('LOCALHOST', 'localhost');
         define('DB_USERNAME', 'root');
         define('DB_PASSWORD', '');
         define('DB_NAME', 'shift voting');

    	 $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // Code for database connection
    	 $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); // Cod efor selecting database

 ?>