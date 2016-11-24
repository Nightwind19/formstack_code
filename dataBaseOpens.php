<?php


require("dataBaseVariables.php");
            //echo $host,"<br>", $username, "<br>", $password, "<br>", $db_name, "<br>";
			// Create connection
				$conn = mysql_connect($host, $username, $password);
				mysql_select_db($db_name) or die(mysql_error());
				if (!$conn ){
					echo mysql_error();
				}
				?>
