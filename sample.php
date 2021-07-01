<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";

    $conn = mysqli_connect($servername,$username,$password);

    

    if(!$conn)
        die("Connection failed: " . mysqli_connect_error());
    else   
        echo "Successfully Connected";
    

    $qry = "CREATE DATABASE `employee_db`;";
    $res = mysqli_query($conn,$qry);


    if(!$res)
    {
        die("Database not created: ");
        
    } else {
        echo "Query executed successfully";
    }

    if($_SERVER['REQUEST_METHOD']=="POST") {
        echo $_POST['uname'];
        echo "<br>";
        echo $_POST['pass'];
    }
?>
<html>
    <body>
        <form method = "post" action = "">
            User Name: <input type="text" name="uname"><br>
            Password:  <input type="password" name="pass"><br>
            <input type="submit" name="Submit">
        </form>
    </body>
</html>