<?php  
    //If there is an active session, hides login button
    if (isset($_SESSION['username'])) {
            // Switches the login button with a logout button
            $style = "style='display:none;'";
        } else if (!isset($_SESSION['username'])){
            $style2 = "style='display:none;'";
        }
?>

<!DOCTYPE HTML>
<html>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <body>
        <div id="top">

        <h1>GPU Purchase Website using MySQL and PHP</h1>

        <a href="index.php">Home</a> - 
        <a href="add-product.php">Add Product</a> - 
        <a href="view-products.php">View Products</a> -
        <a href="register.php" id="loginbtn" <?php echo $style;?>>Register</a><a id="loginbtn" <?php echo $style;?>>-</a>
        <a href="login.php" id="loginbtn" <?php echo $style;?>>Login</a>
        <a href="logout.php" id="loginbtn" <?php echo $style2;?>>Logout</a>
        
    <hr>
    </div>
    </body>
</html>
