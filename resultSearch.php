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
        // echo $key;
        // die();

         $sql = "SELECT FROM Students WHERE NAME LIKE '%"+$key+"%'";
        // echo $sql;
        // die();
         $result = $conn->query($sql);
         while($row = mysql_fetch_array($result)){
             echo $row['id']."<br/>";
             echo $row['name']."<br/>";
             echo $row['email']."<br/>";
             echo $row['address']."<br/>";

         }
         $conn->close();


?>