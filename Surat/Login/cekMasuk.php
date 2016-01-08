<?php 
session_start();
mysql_connect('localhost', 'root', ''); 
mysql_select_db('surat');  
$idlgn = $_POST['idlogin'];
$pwdlgn = $_POST['pwdlogin'];  
$lvl = $_POST['level'];

$query = "SELECT * FROM login WHERE user = '$idlgn' AND pass = '$pwdlgn'";
$hasil = mysql_query($query); 
$data = mysql_fetch_array($hasil);  
if ($pwdlgn == $data['pass'] && $lvl == $data['level']) 
	{ 
	echo '<script type="text/javascript">alert("./Login Sukses! ^_^ \n./Klik OK untuk Masuk ke Menu Utama! :)");</script>';
	
	$_SESSION['level'] = $data['level'];     
	$_SESSION['user'] = $data['user'];  
	$_SESSION['pwdlgn'] = $data['pass'];
	include "cekAutentikasi.php";
	} 
else 
{	echo '<script type="text/javascript">alert("./Login Gagal! :( \n./Kombinasi Nama Pengguna / Kata Sandi / Hak Akses tidak Cocok! :(");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Login" />';
}
?> 