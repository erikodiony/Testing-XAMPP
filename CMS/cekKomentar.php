<?php  
$mail = $_POST['mail'];
$isikom = $_POST['isikom'];  
$judul = $_POST['judul'];

if($_POST['mail'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Nama` masih kosong! \n./Gagal Menambah Komentar ke Artikel! :(");</script>';
echo '<script type="text/javascript">window.location = document.referrer;</script>';
die();} 
else if($_POST['isikom'] == "")
{echo '<script type="text/javascript">alert("./Kolom `Isi` masih kosong! \n./Gagal Menambah Komentar ke Artikel! :(");</script>';
echo '<script type="text/javascript">window.history.go(-1);</script>';
die();} 


else {
	
mysql_connect("localhost","root","");
mysql_select_db("cms");
$q = mysql_query("SELECT `urutan`, `mail`, `isikom`
					FROM komentar, artikel WHERE artikel.judul = '$judul' AND komentar.judul=artikel.judul
					ORDER BY `urutan` desc limit 1; ");
			$jumlah = mysql_num_rows($q);
			$data = mysql_fetch_array($q);

if($jumlah <= 0)
	{ $Urut = 1;}		
else{ $Urut = $data['urutan'] + 1;}


mysql_connect("localhost","root","");
mysql_select_db("cms");

$query=mysql_query("INSERT INTO `komentar`(`judul`, `urutan`, `mail`, `isikom`) VALUES ('$judul','$Urut','$mail','$isikom')");
echo '<script type="text/javascript">alert("./Komentar Berhasil Ditambahkan! :)");</script>';
echo '<script type="text/javascript">window.history.go(-1);</script>';
}

?>