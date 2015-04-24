<?php
require_once "model.php";
$nim=$_POST['Nama'];
$nama=$_POST['NIM'];
$email=$_POST['Kelas'];
$komentar=$_POST['Prodi'];
$query=mysql_query("insert into Data (`Nama`,`NIM`,`Kelas`,`Prodi`)
values('$Nama','$NIM','$Kelas','$Prodi')");
if($query){
echo "Data Berhasil ditambah";
?>
<a href="C:/wamp/www/web/Database/login.php">&nbsp;&nbsp;Lihat Data Masuk</a>
<?php
}else{
echo "Gagal input data";
echo mysql_error();
}
?>