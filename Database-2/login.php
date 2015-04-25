<?php  
session_start();  
mysql_connect('localhost', 'root', ''); 
mysql_select_db('data');  
$username = $_POST['user'];
$password = $_POST['pass'];  
$level = $_POST['level'];
$query = "SELECT * FROM akun WHERE username = '$username'";
$hasil = mysql_query($query); 
$data = mysql_fetch_array($hasil);  
if ($password == $data['password'] && $level == $data['level']) 
	{ 
	echo "<h1>Selamat Datang</h1>";  
	$_SESSION['level'] = $data['level'];     
	$_SESSION['username'] = $data['username'];  
	include "cek.php";
	} 
else {echo "<h1>Login Gagal</h1>";}
?> 