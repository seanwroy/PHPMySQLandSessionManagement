<?php
    // Checks to see if a session exists, if one does not, redirects to login.php
    require_once 'check_session.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products - GPU Purchase Website using MySQL and PHP</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
            <table border="1" id="tables">
                <tr>
                    <th>Model No.</th>
                    <th>Manufacturer</th>
                    <th>Price</th>
                    <th>Stock</th>
                </tr>

                <?php
                require_once 'header.php';
   
                // Connects to the database
                $host = 'localhost';         
                $user = 'roysea_SQLadmin';     
                $pswd = '{sGB1WyQj5Bs';         
                $dbName = 'roysea_insert';     

                $conn = mysqli_connect($host, $user, $pswd, $dbName);

                if (empty($conn)) {
                    die("Connection failed: <br>" . mysqli_connect_error());
                }

                $query = "SELECT * FROM GPU;";
                $result = mysqli_query($conn, $query);
                
                //Builds a table based on records in database
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['ModelNo'] . "</td>";
                        echo "<td>" . $row['Manufacturer'] . "</td>";
                        echo "<td>" . $row['Price'] . "</td>";
                        echo "<td>" . $row['Stock'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<p>No records were found to display.</p>";
                }
                ?>
            </table>

        </div>
    </body>
</html>
