 
 <?php
    include('config.php');
    // 1. Destroying Session

    session_destroy();

    // 2. Redirecting to login page

    header('location:'.SITEURL.'admin-login.php');
 ?>