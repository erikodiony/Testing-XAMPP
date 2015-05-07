<?php
include('Komentar.php');
mysql_connect("localhost","root","");
mysql_select_db("cms");
$hapus = "DELETE komentar FROM komentar INNER JOIN artikel 
			ON komentar.judul = artikel.judul
			WHERE komentar.judul = '$_GET[judul]' and komentar.urutan='$_GET[urutan]';";
$sql = mysql_query ($hapus);
echo '<script type="text/javascript">alert("./Komentar Berhasil diHapus! :)");</script>';
echo '<script type="text/javascript">window.history.go(-1);</script>';
?>