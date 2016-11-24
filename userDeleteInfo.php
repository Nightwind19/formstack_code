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
    /**
    *require("dbVariables.php");
	*Having the variables in a seperate file will allow the programmer to change the databases easily by updating one file
    */
	require("dbVariables.php");
	
    $conn = new mysqli($host, $username, $password, $db_name);
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