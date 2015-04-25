<?php
if ($_SESSION['level'] == "admin")
		{
		echo "<a href='hal1.php'>Home</a> ";     
		echo "<a href='hal_2.php'>Data</a> ";     
		echo "<a href='logout.php'>Logout</a> "; 
		} 
else if ($_SESSION['level'] == "user")
		{
		echo "<a href='hal.php'>Home</a>";     
		echo "<a href='logout.php'>Logout</a>";
		}  
?>