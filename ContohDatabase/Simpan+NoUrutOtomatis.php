<?php
include ('index.php');
$IDBuku=$_POST['IDBuku'];
$NamaBuku=$_POST['NamaBuku'];
$Pengarang=$_POST['Pengarang'];
$ThnTerbit=$_POST['ThnTerbit'];
$JmlHlm=$_POST['JmlHlm'];

if($_POST['IDBuku'] == ""){echo "./Kolom `ID Buku` masih kosong! <br> ./Data Gagal Tersimpan! :(";} 
else if(!is_numeric($IDBuku)) {die("./Maaf, Input `ID Buku` harus berupa Angka! :(");}
else if($_POST['NamaBuku'] == ""){echo "./Kolom `Nama` Buku masih kosong! <br> ./Data Gagal Tersimpan! :(";}
else if($_POST['Pengarang'] == ""){echo "./Kolom `Pengarang` masih kosong! <br> ./Data Gagal Tersimpan! :(";}
else if($_POST['ThnTerbit'] == ""){echo "./Kolom `Tahun Terbit` masih kosong! <br> ./Data Gagal Tersimpan! :(";}
else if(!is_numeric($ThnTerbit)) {die("./Maaf, Input `Tahun Terbit` harus berupa Angka! :(");}
else if($_POST['JmlHlm'] == ""){echo "./Kolom `Jumlah Halaman` masih kosong! <br> ./Data Gagal Tersimpan! :(";}
else if(!is_numeric($JmlHlm)) {die("./Maaf, Input `Jumlah Halaman` harus berupa Angka! :(");}

else {
mysql_connect("localhost","root","");
mysql_select_db("data");
$q = mysql_query("SELECT * FROM perpus ORDER BY No DESC LIMIT 1");
			$jumlah = mysql_num_rows($q);
			$data = mysql_fetch_array($q);
if($jumlah <= 0)
	{ $NoUrut = 1;}		
else{ $NoUrut = $data['no'] + 1;}

$query=mysql_query("insert into perpus (`no`,`id_buku`,`nama_buku`,`pengarang`,`thn_terbit`,`jml_hlm`)
values('$NoUrut','$_POST[IDBuku]','$_POST[NamaBuku]','$_POST[Pengarang]','$_POST[ThnTerbit]','$_POST[JmlHlm]')");
echo "./Data Berhasil Disimpan! :)";
}
?>