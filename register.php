<?php

include 'includes/connect.php';


if($_SERVER['REQUEST_METHOD']=="POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $qry1 = "INSERT INTO `tbl_user` ( `fname`, `lname`, `email`,`password`) VALUES
    ('$fname', '$lname', '$email','$password');";
    
    $res1 = mysqli_query($conn, $qry1);
 
}
?>

<html>
    <body>
    <form method="POST" action="">
        First Name : <input type="text" name="fname"><br>
        Last Name : <input type="text" name="lname"><br>
        Email : <input type="email" name="email"><br>
        Password :  <input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
    </body>
</html>
