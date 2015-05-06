<?php
mysql_connect("localhost","root","");
mysql_select_db("cms");
$hapus = "DELETE artikel, komentar FROM artikel INNER JOIN komentar 
			ON komentar.judul = artikel.judul
			WHERE artikel.judul = '$_GET[judul]';";
$hapus2 = "DELETE FROM artikel WHERE judul='$_GET[judul]'";
$sql = mysql_query ($hapus);
$sql = mysql_query ($hapus2);
echo '<script type="text/javascript">alert("./Data Berhasil diHapus! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>