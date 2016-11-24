<!DOCTYPE HTML>
<html>  
<body>
</div>
		

<head>
<title>Form Input Data</title>
</head>

<body>
</br>
<p>Delete User Page</p>
</br>
<a href="Index.php"><button>Create</button></a>
    <a href="Read.php"><button>Read</button></a>
    <a href="Update.php"><button>Update</button></a>
    <a href="Delete.php"><button>Delete</button></a>
</br>
</br>
   <!--
     *This will make the form to delete the user info based on first and last name
   -->
<form action="userDeleteInfo.php" method="post">
    First name:</br>
    <input type="text" name="firstname"></br></br>
    Last name:</br>
    <input type="text" name="lastname"></br></br>
    Email:</br>
    <input type="text" name="email"></br></br>
    Password:</br>
    <input type="text" name="password"></br></br>
    <input type="submit">;
</form>
</body>
</html>