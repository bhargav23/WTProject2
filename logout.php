<?php 
session_start();
session_unset(); 

echo "Session Removed";
?>
<html>
    <body>
        <ul>
            <li><a href = "index.php">Home </a></li>
            <li><a href = "login.php">Login </a></li>
            <li><a href = "register.php">Register </a></li>
        </ul>
        
    </body>
</html>