<?php
    session_start();
    
    // Redirects back to login page if session does not exist
    if (!isset($_SESSION['username'])) {
            header('location:login.php');
        }
 