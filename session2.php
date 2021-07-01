<?php
session_start();

?>
<html>
    <body>
        <ul>
            <li><a href = "session1.php">Start Session </a></li>
            <li><a href = "session2.php">Display Session </a></li>
            <li><a href = "sessionUnset.php">Start Unset </a></li>
        </ul>
        <p><?php echo "Name : ". $_SESSION['fname']. " " .$_SESSION['lname']."<br>" ?></p>
        <p><?php echo "Salary : ". $_SESSION['salary']. "<br>"; ?></p>
    </body>
</html>