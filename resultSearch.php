<?php 
         $server = "localhost";
         $username = "root";
         $pwd = "";
         $db = "test";
         // Create connection
         $conn = new mysqli($server, $username, $pwd, $db);
         // Check connection
         if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
         } 
         $key = isset($_POST['key']) ? $_POST['key'] : '';
       
         $query = "SELECT name FROM city WHERE name like '%" . $key. "%' "; 
         
         $result = $conn->query($query);
         while($row = mysqli_fetch_array($result)){
             echo $row['id']."<br/>";
             echo $row['name']."<br/>";
             echo $row['email']."<br/>";
             echo $row['address']."<br/>";

         }
         $conn->close();


?>