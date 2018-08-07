<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Registration - GPU Purchase Website using MySQL and PHP</title>
        <link rel="stylesheet" href="css/style.css">  
    </head>
    <body>
        <?php
            require_once 'header.php';
        ?>
         
        <h2>Register</h2>
        
        <form action="register1.php" method="post">
            <div id="registerpage">
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Register" style="float: right;"></td>
                </tr>
            </table>
            </div>
        </form>
        
        //Connects to basic validation in register1.php for username and password
        <?php
            if (isset($_REQUEST['result'])) {
                if ($_REQUEST['result'] == "success") {
                    echo "<p>New user registered</p>";
                } else if ($_REQUEST['result'] == "fail") {
                    echo "<p>New user not registered</p>";
                } else if ($_REQUEST['result'] == "userexists") {
                    echo "<p>This username is already in use. Please try again.</p>";
                } else if ($_REQUEST['result'] == "badusername") {
                    echo "<p>Username must be longer than 8 characters.</p>";
                } else if ($_REQUEST['result'] == "badpassword") {
                    echo "<p>Password must be at least 8 characters, contain one lowercase character, "
                    . "one uppercase character, and at least one number.</p>";
                }
            }
        ?>
    </body>
</html>
