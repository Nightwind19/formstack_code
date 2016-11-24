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
   /**
    *require("dbVariables.php");
	*Having the variables in a seperate file will allow the programmer to change the databases easily by updating one file
    */
	require("dbVariables.php");
   
    /**
     *Create connection
	 */
     $conn = new mysqli($host, $username, $password, $db_name);
           if ($conn->connect_error)
			   {
                    die("Connection failed: " . $conn->connect_error);
               } 
	
	/**
     *Check connection
	*/
    

    $sql = "SELECT firstname, lastname, email, password  FROM userInfo WHERE firstname = '$_POST[firstname]' AND lastname = '$_POST[lastname]'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
		{
		/**
         *output userInfo
	    */
           while($row = $result->fetch_assoc()) 
	        {
               echo "First name: " . $row["firstname"]. "</br> ". " Last Name: " . $row["lastname"]. "</br> " . "Email:  " .  $row["email"]. "</br> " . "Password:  ". $row["password"]. "<br>";
            }
        } 
	else 
	   {
         echo "Zero results";
       }
		  
       $conn->close();
?>
</body>
</html>