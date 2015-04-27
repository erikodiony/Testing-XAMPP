<?php
session_start();
if ($_SESSION['level'] == "user")
		{}
else if ($_SESSION['level'] == "admin")
		{ header('location:../Dilarang.php'); } 
else 	{
	header('location:../BelumLogin.php');
		}
?>