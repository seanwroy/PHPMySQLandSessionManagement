<?php
    ob_start();
    // Checks to see if a session exists, if one does not, redirects to login.php
    require_once 'check_session.php';
    require_once 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Product - Assignment #4 | GPU Purchase Website using MySQL and PHP</title>
        <link rel="stylesheet" href="/css/style.css">        
    </head>
    <body>
        <div id="wrapper">

            <h2>Add Product</h2>

            <form action="add-product1.php" method="post">
                <table border="1" id="tables">
                    <tr>
                        <td>Model No:</td>
                        <td>
                            <input type="text" name="ModelNo">
                        </td>
                    </tr>
                    <tr>
                        <td>Manufacturer:</td>
                        <td>
                            <input type="text" name="Manufacturer">
                        </td>
                    </tr>
                    <tr>
                        <td>Price:</td>
                        <td>
                            <input type="text" name="Price">
                        </td>
                    </tr>
                    <tr>
                        <td>Stock:</td>
                        <td>
                            <input type="text" name="Stock">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Add Product" style="float: right;">
                        </td>
                    </tr>
                </table>
            </form>
            
            //Gets result from add-product.php page and determines whether it was successful or not
            <?php
            $style = "style='margin-left:200px;'";
            if (isset($_REQUEST['result'])) {
                if ($_REQUEST['result'] == "success") {
                    echo "<p $style>Success! The product was added.</p>";
                } else if ($_REQUEST['result'] == "fail") {
                    echo "<p $style>The product was not added.</p>";
                } else if ($_REQUEST['result'] == "invalidentry") {
                    echo "<p $style>Invalid Entry: ensure the Model No. is greater than "
                    . "2, the Price is higher than 99, the manufacturer name"
                            . "is longer than 3, and there is more than 1 "
                            . "product in stock.</p>";
                }
            }
            ?>

        </div>
    </body>
</html>
