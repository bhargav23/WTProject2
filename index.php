<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname = "employee_db";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
        die("Connection failed: " . mysqli_connect_error());
    else   
        echo "Successfully Connected<br>";
    
    
    $qry = "CREATE TABLE `employee_tbl` (
        `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
        `fname` varchar(100) DEFAULT NULL,
        `lname` varchar(100) DEFAULT NULL,
        `salary` int(5) DEFAULT NULL,
        `date_inseted` timestamp NOT NULL DEFAULT current_timestamp()
      );";
    
    $res = mysqli_query($conn, $qry);
    if(!$res)
    {
        echo "Table not created";
    } else {
        echo "Table created";
    }


    if($_SERVER['REQUEST_METHOD']=="POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $salary = $_POST['salary'];

        $qry1 = "INSERT INTO `employee_tbl` ( `fname`, `lname`, `salary`) VALUES
        ('$fname', '$lname', $salary);";
        
        $res1 = mysqli_query($conn, $qry1);
        if(!$res1)
        {
            echo "<br>Row not inserted";
        } else {
            echo "<br>Row inserted";
        }
    }
?>
<html>
    <body>
        <form method = "post" action = "">
            First Name: <input type="text" name="fname"><br>
            Last Name: <input type="text" name="lname"><br>
            Salary: <input type="text" name="salary"><br>

            <input type="submit" name="Submit">
        </form>
    <p>
    <?php 
    $sql = "SELECT * FROM employee_tbl";
    $res = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($res) > 0) {
      while($row = mysqli_fetch_assoc($res)) {
        echo  $row["id"]. " " . $row["fname"]. " " . $row["lname"]. " " . $row["salary"]. "<br>";
      }
    } else {
      echo "Now rows selected";
    }
    ?>
    </p>
    </body>
</html>