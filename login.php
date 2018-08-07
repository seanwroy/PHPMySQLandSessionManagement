<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login - GPU Purchase Website using MySQL and PHP</title>
        <link rel="stylesheet" href="css/style.css">  
    </head>
    <body>
        <?php
            require_once 'header.php';
        ?>
        
        <h2>Login</h2>
        
        <form action="login1.php" method="post">
            <div id="loginpage">
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
                    <td colspan="2"><input type="submit" value="Login" style="float: right;"></td>
                </tr>
            </table>
            </div>
        </form>
        
        //Checks login info in login1.php to determine if it is valid
        <?php
            if (isset($_REQUEST['result'])) {
                if ($_REQUEST['result'] == "fail") {
                    echo "<p>Login failed. Either username or password is incorrect. Please try again.</p>";
                }
            }
        ?>
    </body>
</html>
