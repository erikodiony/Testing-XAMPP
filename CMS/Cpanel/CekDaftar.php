<?php  
include "Daftar.php";
mysql_connect('localhost', 'root', ''); 
mysql_select_db('cms');  
$username = $_POST['user'];
$password = $_POST['pass'];  
$level = $_POST['level'];

if($_POST['user'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Nama Pengguna` masih kosong! \n./Gagal Mendaftar ke Sistem! :(");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Cpanel" />';
die();} 
else if($_POST['pass'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Kata Sandi` masih kosong! \n./Gagal Mendaftar ke Sistem! :(");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Cpanel" />';
die();}
else if($_POST['level'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Level` masih kosong! \n./Gagal Mendaftar ke Sistem! :(");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Cpanel" />';
die();}

$query = "SELECT * FROM akun WHERE username = '$username' AND level = '$level'";
$hasil = mysql_query($query); 
$data = mysql_fetch_array($hasil);  
if ($username == $data['username'] && $level == $data['level']) 
	{ 
	echo '<script type="text/javascript">alert("./Pendaftaran Akun Gagal! ^_^ \n./Username telah terpakai! :)");</script>';
	echo '<meta http-equiv="refresh" content="1; url=Daftar.php" />';
	} 
else 
{	
mysql_query("insert into akun (`username`,`password`,`level`)
values('$_POST[user]','$_POST[pass]','$_POST[level]')");

echo '<script type="text/javascript">alert("./Pendaftaran Berhasil! :( \n./Silahkan Kunjungi Halaman ./Masuk untuk Login! ^_^ ");</script>';
echo '<meta http-equiv="refresh" content="1; url=../Cpanel" />';
}
?> 