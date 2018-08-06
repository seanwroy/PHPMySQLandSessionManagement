<?php           
    // Connects to the database
    $host = 'localhost';        	
    $user = 'roysea_SQLadmin';    
    $pswd = '{sGB1WyQj5Bs';        	
    $dbName = 'roysea_insert';     

    $conn = mysqli_connect($host, $user, $pswd, $dbName);

    if (empty($conn)) {
        die("Connection failed: " . mysqli_connect_error());
    }
