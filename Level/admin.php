<?php
// memulai session
session_start();
error_reporting(0);
if (isset($_SESSION['level']))
{
	// jika level admin
	if ($_SESSION['level'] == "admin")
   {   
   	echo "<h1>Ini Halaman Admin</h1>";
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
       header('location:user.php');
   }
}
if (!isset($_SESSION['level']))
{
	header('location:../index.php');
}

 ?>