<?php 
session_start();     
if (isset($_SESSION['level']) && isset($_SESSION['username'])) 
{
	include "cek.php";
	if ($_SESSION['level'] == "admin")    
	{echo "<p>home: ".$_SESSION['username']."</p>";}
	else
	{echo "khusus admin";} 
} 
else
{echo "silahkan login";}  
?> 