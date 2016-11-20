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

    $sql = "SELECT firstname, lastname, email, password  FROM userInfo WHERE firstname = '$_POST[firstname]' AND lastname = '$_POST[lastname]'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) 
	  {
    // output userInfo
         while($row = $result->fetch_assoc()) 
	      {
             echo "First name: " . $row["firstname"]. "</br> ". " Last Name: " . $row["lastname"]. "</br> " . "Email:  " .  $row["email"]. "</br> " . "Password:  ". $row["password"]. "<br>";
          }
      } 
	else 
	 {
    echo "0 results";
     }
$conn->close();
?>
</body>
</html>