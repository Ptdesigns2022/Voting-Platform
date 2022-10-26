<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="voting-style.css">
</head>

<body>


 <?php 
    if(!isset($_SESSION['user'])) {
    	
    $_SESSION['no-login-message'] = "<div class='text-center2'>Please login to access the Admin Panel.</div>";

    	header('location:'.SITEURL.'admin-login.php');
    }
 ?>
 </body>
</html>