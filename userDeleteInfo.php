<head>
<title>Results</title>
</head>

<body>
</br>
    <p>Delete User Account</p>
	

</br>
    <a href="Index.php"><button>Create</button></a>
    <a href="Read.php"><button>Read</button></a>
    <a href="Update.php"><button>Update</button></a>
    <a href="Delete.php"><button>Delete</button></a>
</br>
</br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error)  
      {
    die("Connection failed: " . $conn->connect_error);
     } 

    $sql = "DELETE FROM userInfo WHERE email = '$_POST[email]'";
    $result = $conn->query($sql);

    if ($conn->query($sql) === TRUE) 
	{
        echo "Record updated successfully";
    } 
	else
	{
        echo "Error updating record: " . $conn->error;
    }
$conn->close();
?>
</body>
</html>