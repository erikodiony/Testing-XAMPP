<?php
session_start();

if ($_SESSION['level'] == "Resepsionis")
		{}
else if ($_SESSION['level'] == "Pasien")
		{
		header('location:Dilarang.php');
		} 	
else if ($_SESSION['level'] == "Apoteker")
		{
		header('location:Dilarang.php');
		}  
else if ($_SESSION['level'] == "Assist. Dokter")
		{
	header('location:Dilarang.php');
		}  
else if ($_SESSION['level'] == "Manajer")
		{
	header('location:Dilarang.php');
		}  
else if ($_SESSION['level'] == "Admin")
		{
	header('location:Dilarang.php');
		}  
else 	{
	header('location:../../BelumLogin.php');
		}
?>