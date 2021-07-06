<?php
/*
CREATE TABLE IF NOT EXISTS `tbl_book` (
    `book_id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    `book_name` varchar(100) NOT NULL,
    `book_image` varchar(50) NOT NULL,
    `author` varchar(50) NOT NULL,
    `publisher` varchar(100) NOT NULL,
    `price` varchar(30) NOT NULL,
    `quantity` int(5) NOT NULL,
    `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 
  ) 
  
  
  INSERT INTO `tbl_book` (`book_id`, `book_name`, `book_image`, `author`, `publisher`, `price`, `quantity`, `date_added`) VALUES
  (1, 'XML Bible', 'xmlbible.jpg', 'Elliotte Rusty Harold', 'Wiely', '2472', 10, '2021-07-06 10:08:34'),
  (2, 'Artificial Intelligence: A Modern Approach', 'ai.jpg', 'Peter Norvig and Stuart J. Russell', 'Prentice Hall', '3000', 5, '2021-07-06 10:09:56'),
  (3, 'Java2', 'java2.jpg', 'Herbert Schildt', 'Mc', '1000', 10, '2021-07-06 10:31:40');
*/

  session_start();
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname = "employee_db";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if(!$conn)
        die("Connection failed: " . mysqli_connect_error());

?>
<html>
    <head>
        <title>Book Catalog</title>
    </head>
    <body>
    <table border="1">
    <tr>
        <th>Book Image</th>
        <th>Book Info</th>
        <th>Price</th>
        <th>Add to cart</th>
    </tr>
   
    <?php
        $sql = "SELECT * FROM tbl_book";
        $res = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($res) > 0) {
          while($row = mysqli_fetch_assoc($res)) {
            
    ?>
     <tr>
        <td><img src="images/<?php echo $row['book_image']; ?>" width="100" height="100"></td>
        <td>
            <?php 
                echo "Book Name : ". $row['book_name']."<br>";
                echo "Author : ".$row['author']."<br>";
                echo "Publisher : ".$row['publisher'];
            ?>

        </td>
        <td><?php echo  $row['price']; ?></td>
        <td><img src="images/addtocart.jpg" width="100" height="50"></td>
 
    </tr>
    <?php
    }
} else {
  echo "Now Books selected";
}

    ?>
</table>
    </body>
   
</html>