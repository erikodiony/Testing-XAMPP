<?php
session_start();
if ($_SESSION['level'] == "admin")
		{}
else if ($_SESSION['level'] == "user")
		{	header('location:../Dilarang.php');		} 
else 	{
	header('location:../BelumLogin.php');
		}
?>