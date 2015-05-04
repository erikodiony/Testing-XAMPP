<?php
session_start();
if ($_SESSION['level'] == "Admin")
		{
	echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Admin`, Tidak diperbolehkan melihat Menu `User` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=Admin" />'; 
		} 
		
else if ($_SESSION['level'] == "User")
		{
	echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Masuk sebagai `User`, Tidak diperbolehkan melihat Menu `Admin` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=User" />'; 
		} 
?>