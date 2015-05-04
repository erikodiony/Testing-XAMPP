<?php
session_start();
if ($_SESSION['level'] == "Admin")
		{}
else if ($_SESSION['level'] == "User")
		{	header('location:../Dilarang.php');		} 
else 	{
	header('location:../BelumLogin.php');
		}
?>