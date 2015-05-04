<?php  
include "Index.php"; 
$judul = $_POST['judul'];
$head = $_POST['head']; 
$isi = $_POST['isi'];
$kat = $_POST['kat'];
$bln = $_POST['bln'];
$thn = $_POST['thn'];
$no = $_POST['no'];
$kont = $_POST['kont'];

if($_POST['judul'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Judul` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';} 
else if($_POST['head'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Isi Headline` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';}
else if($_POST['isi'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Isi` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';}
else if($_POST['kat'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Kategori` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';}
else if($_POST['bln'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Bulan` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';}
else if($_POST['thn'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Tahun` masih kosong! \n./Data Gagal Tersimpan! :(");</script>';}
else if(!is_numeric($thn)) 
{echo '<script type="text/javascript">alert("./Maaf, Input `Tahun` harus berupa Angka! :( \n./Data Gagal Tersimpan! :(");</script>';}


else {
mysql_connect("localhost","root","");
mysql_select_db("cms");


$query=mysql_query("insert into artikel (`no`,`judul`,`head`,`isi`,`kategori`,`bulan`,`tahun`,`kontrib`)
values('$_POST[no]','$_POST[judul]','$_POST[head]','$_POST[isi]','$_POST[kat]','$_POST[bln]','$_POST[thn]','$_POST[kont]')");
echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
echo '<meta http-equiv="refresh" content="1; url=../Admin" />';
}

echo '<meta http-equiv="refresh" content="1; url=../Admin" />';
?>