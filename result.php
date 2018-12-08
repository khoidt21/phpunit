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
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        $email = isset($_POST['email']) ? $_POST['email'] : '';
        $address = isset($_POST['address']) ? $_POST['address'] : '';

        $sql = "INSERT INTO Students (name,email,address) VALUES ('$name','$email','$address')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
?>