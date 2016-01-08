<?php
session_start();
		
if ($_SESSION['level'] == "User")
		{
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Login sebagai `User`, Tidak diperbolehkan melihat Menu `Admin` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../User" />'; 
		} 	

	else if ($_SESSION['level'] == "")
		{
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Tidak diperbolehkan melihat Menu `Admin` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../../../Login" />'; 
		}  

	else {
		echo '<script type="text/javascript">
alert("./Dilarang! :( \n./Saat ini Anda Tidak diperbolehkan melihat Menu `Admin` ! ^_^ ");
</script>';
echo '<meta http-equiv="refresh" content="0; url=../../../Login" />'; 
	}
?>