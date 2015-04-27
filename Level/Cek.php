<?php
if ($_SESSION['level'] == "admin")
		{
		echo '<meta http-equiv="refresh" content="0; url=Admin" />';
		} 
		
else if ($_SESSION['level'] == "user")
		{
	echo '<meta http-equiv="refresh" content="0; url=User" />';
		}  
?>