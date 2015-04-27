<?php
include ('index.php');
$IDBuku=$_POST['IDBuku'];
$NamaBuku=$_POST['NamaBuku'];
$Pengarang=$_POST['Pengarang'];
$ThnTerbit=$_POST['ThnTerbit'];
$JmlHlm=$_POST['JmlHlm'];

if($_POST['IDBuku'] == "")
{echo '<script type="text/javascript">alert("./Kolom `ID Buku` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';} 
else if(!is_numeric($IDBuku)) 
{echo '<script type="text/javascript">alert("./Maaf, Input `ID Buku` harus berupa Angka! :( \n./Data Gagal Tersimpan! :(");</script>';}
else if($_POST['NamaBuku'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Nama Buku` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';}
else if($_POST['Pengarang'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Pengarang` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';}
else if($_POST['ThnTerbit'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Tahun Terbit` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';}
else if(!is_numeric($ThnTerbit)) 
{echo '<script type="text/javascript">alert("./Maaf, Input `Tahun Terbit` harus berupa Angka! :( \n./Data Gagal Tersimpan! :(");</script>';}
else if($_POST['JmlHlm'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Jumlah Halaman` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';}
else if(!is_numeric($JmlHlm)) 
{echo '<script type="text/javascript">alert("./Maaf, Input `Jumlah Halaman` harus berupa Angka! :( \n./Data Gagal Tersimpan! :(");</script>';}

else {
mysql_connect("localhost","root","");
mysql_select_db("data");

$query=mysql_query("insert into perpus (`id_buku`,`nama_buku`,`pengarang`,`thn_terbit`,`jml_hlm`)
values('$_POST[IDBuku]','$_POST[NamaBuku]','$_POST[Pengarang]','$_POST[ThnTerbit]','$_POST[JmlHlm]')");
echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
echo '<meta http-equiv="refresh" content="1; url=Index.php" />';
}

echo '<meta http-equiv="refresh" content="1; url=Index.php" />';
?>

