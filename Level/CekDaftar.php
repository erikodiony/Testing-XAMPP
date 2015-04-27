<?php  
include "Daftar.php";
session_start();  
mysql_connect('localhost', 'root', ''); 
mysql_select_db('data');  
$username = $_POST['user'];
$password = $_POST['pass'];  
$level = $_POST['level'];
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
echo '<meta http-equiv="refresh" content="1; url=../Level" />';
}
?> 