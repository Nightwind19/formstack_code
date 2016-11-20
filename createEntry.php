<!DOCTYPE HTML>
<html>  
<body>
</div>
		

<head>
<title>Results</title>
</head>

<body>
</br>
    <p>Create New User Account</p>
	

</br>
    <a href="Index.php"><button>Create</button></a>
    <a href="Read.php"><button>Read</button></a>
    <a href="Update.php"><button>Update</button></a>
    <a href="Delete.php"><button>Delete</button></a>
</br>
</br>
 
<?php
    $host= 'localhost';        // Host name
    $username = 'root';       // Mysql username
    $password = '';       // Mysql password
    $db_name = 'myDB';  // Database name
	
    $conn = new mysqli($host, $username, $password, $db_name);
           if ($conn->connect_error)
			   {
                    die("Connection failed: " . $conn->connect_error);
               } 
 
    $sql="INSERT INTO userInfo (firstname, lastname, email, password)
          VALUES
     ('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[password]')";
 
    if ($conn->query($sql) === TRUE) {
             echo "New record created successfully";
        }  else {
             echo "Error: " . $sql . "<br>" . $conn->error;
       }

$conn->close();
     
?>
</body>
</html>