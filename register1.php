<?php
    //Cancels out warning message
    ob_start();
    
    //Using config.php for database login to avoid clutter
    require_once 'config.php';
    
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    
    $query = "SELECT username FROM tblUsers WHERE username = '$username';";
    $result = mysqli_query($conn, $query);
    
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    
    //Basic validation code for use in register.php
    if (strlen($username) < 8) {
        header("location:register.php?result=badusername");
    } else if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        header("location:register.php?result=badpassword");
    } else if (mysqli_num_rows($result) > 0) {
        header('location:register.php?result=userexists');
    } else {
        $query = "INSERT INTO tblUsers (username, password) VALUES ('$username', '$password');";

        $result = mysqli_query($conn, $query);

        if ($result == 1) {
            header('location:register.php?result=success');
        } else {
            header('location:register.php?result=fail');
        }
    }
?>
