<?php
session_start();
		
if ($_SESSION['level'] == "Admin")
		{
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `Admin`, Tidak diperbolehkan melihat Menu `User` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />'; 
		} 	

	else if ($_SESSION['level'] == "")
		{
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Tidak diperbolehkan melihat Menu `User` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../../Login" />'; 
		}  

	else {
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Tidak diperbolehkan melihat Menu `User` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../../Login" />'; 
	}
?>