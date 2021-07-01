<?php
session_start();

$_SESSION['fname'] = "Krishna";
$_SESSION['lname'] = "Mohan";
$_SESSION['salary'] = 2000;
?>

<html>
    <body>
    <ul>
            <li><a href = "session1.php">Start Session </a></li>
            <li><a href = "session2.php">Display Session </a></li>
            <li><a href = "sessionUnset.php">Start Unset </a></li>
        </ul>
        <p> Session Created</p>
    </body>
</html>
