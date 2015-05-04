<?php
session_start();
if ($_SESSION['level'] == "User")
		{}
else if ($_SESSION['level'] == "Admin")
		{ header('location:../Dilarang.php'); } 
else 	{
	header('location:../BelumLogin.php');
		}
?>