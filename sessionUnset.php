<?php 
session_start();
session_unset(); 

echo "Session Removed";
?>
<html>
    <body>
        <ul>
            <li><a href = "session1.php">Start Session </a></li>
            <li><a href = "session2.php">Display Session </a></li>
            <li><a href = "sessionUnset.php">Start Unset </a></li>
        </ul>
        
    </body>
</html>