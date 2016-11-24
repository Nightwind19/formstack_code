<?php
     
     require("dbVariables.php");
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
    if ($conn->connect_error) 
	{
      die("Connection failed: " . $conn->connect_error);
    } 
     /**
      *sql to create table
	 */
     $sql = "CREATE TABLE userInfo (
     id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
     firstname VARCHAR(50) NOT NULL,
     lastname VARCHAR(50) NOT NULL,
     email VARCHAR(50),
     )";

    if ($conn->query($sql) === TRUE) 
	{
      echo "Table userInfo created successfully";
    } 
	else  
	{
     echo "Error creating table: " . $conn->error;
    }

    $conn->close();
?> 