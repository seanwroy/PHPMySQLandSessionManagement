<?php
    require_once 'config.php';

// Reads the values from the text fields
$ModelNo = $_REQUEST['ModelNo'];
$Price = $_REQUEST['Price'];
$Manufacturer = $_REQUEST['Manufacturer'];
$Stock = $_REQUEST['Stock'];

// Queries to insert into table GPU
$query = "INSERT INTO GPU (ModelNo, Price, Manufacturer, Stock) VALUES ('$ModelNo', '$Price', '$Manufacturer', '$Stock');";

// Executes the queries
$result = mysqli_query($conn, $query);

// Ensures entries meet the right criteria before adding
if (strlen($ModelNo) < 2 || strlen($Price) < 2 || strlen($Manufacturer) < 3 || strlen($Stock) < 1){
    header("location:add-product.php?result=invalidentry");
} else if ($result == 1) {
        header("location:add-product.php?result=success");
} else {
        header("location:add-product.php?result=fail");
}
 
?>
