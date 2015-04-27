<?php  
include "index.php";
session_start();  
mysql_connect('localhost', 'root', ''); 
mysql_select_db('data');  
$username = $_POST['user'];
$password = $_POST['pass'];  
$level = $_POST['level'];
$query = "SELECT * FROM akun WHERE username = '$username' AND level = '$level'";
$hasil = mysql_query($query); 
$data = mysql_fetch_array($hasil);  
if ($password == $data['password'] && $level == $data['level']) 
	{ 
	echo '<script type="text/javascript">alert("./Login Sukses! ^_^ \n./Klik OK untuk Masuk ke Menu Utama! :)");</script>';
  
	$_SESSION['level'] = $data['level'];     
	$_SESSION['username'] = $data['username'];  
	$_SESSION['password'] = $data['password'];
	include "cek.php";

	} 
else 
{	echo '<script type="text/javascript">alert("./Login Gagal! :( \n./Kombinasi Username / Password / Level tidak Cocok! :(");</script>';
	echo '<meta http-equiv="refresh" content="1; url=../Database-2" />';
}
?> 