<?php
    //Cancels out a warning message
    ob_start();
    session_start();
    
    //Using config.php for database login to avoid clutter
    require_once 'config.php';
    
    $username = mysqli_real_escape_string($conn, $_REQUEST['username']);
    $password = mysqli_real_escape_string($conn, $_REQUEST['password']);
    
    $query = "Select username from tblUsers where username = '$username' and password = '$password';";
    
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
      
        header('location:view-products.php');
    } else {
        header('location:login.php?result=fail');
    }
?>
