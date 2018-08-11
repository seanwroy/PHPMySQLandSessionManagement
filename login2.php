<?php
    //Cancels out a warning message
    ob_start();
    session_start();
    
    //Using config.php for database login to avoid clutter
    require_once 'config.php';

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    //Login and authentication code
    $query = "SELECT username FROM tblUsers WHERE username = ? AND password = ?";

    if ($stmt = mysqli_prepare($conn, $query)) {
	mysqli_stmt_bind_param($stmt, "ss", $username, $password);

	mysqli_stmt_execute($stmt);
		
	mysqli_stmt_store_result($stmt);

	$result = mysqli_stmt_num_rows($stmt);

	if ($result > 0) {	
            $_SESSION['username'] = $username;
			
            header("location:view-products.php");
	} else {
            header("location:login.php?result=fail");
	}
}
?>
