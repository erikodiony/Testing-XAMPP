<!-- Cek Folder -->
<?php
if ($_SESSION['level'] == "Admin")
		{
		echo '<meta http-equiv="refresh" content="0; url=../Menu/Admin" />';
		} 	
else if ($_SESSION['level'] == "User")
		{
	echo '<meta http-equiv="refresh" content="0; url=../Menu/User" />';
		}  
else {
	echo '<meta http-equiv="refresh" content="0; url=../" />';
	}
?>