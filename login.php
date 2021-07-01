<?php
session_start();
include 'includes/connect.php';
if(isset($_SESSION['email'])) {
    header("location:index.php");
}

if($_SERVER['REQUEST_METHOD']=="POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $qry1 = "SELECT * from tbl_user where `email` = '$email' and `password` = '$password'";
    
    $res1 = mysqli_query($conn, $qry1);
    
    if(mysqli_num_rows($res1)==1)
    {
        
        $_SESSION['email'] = $email;
        header("location:index.php");
    } else {
        echo "Invalid user";
    }
}
?>

<html>
    <body>
    <form method="POST" action="">
        Email : <input type="email" name="email"><br>
        Password :  <input type="password" name="password"><br>
        <input type="submit" name="submit">
    </form>
    </body>
</html>
