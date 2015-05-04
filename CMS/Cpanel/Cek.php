<?php
if ($_SESSION['level'] == "Admin")
		{
		echo '<meta http-equiv="refresh" content="0; url=Admin" />';
		} 
		
else if ($_SESSION['level'] == "User")
		{
	echo '<meta http-equiv="refresh" content="0; url=User" />';
		}  
?>