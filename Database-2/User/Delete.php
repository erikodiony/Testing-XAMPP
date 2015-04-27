<?php
mysql_connect("localhost","root","");
mysql_select_db("data");
$hapus = "DELETE FROM perpus WHERE id_buku='$_GET[id_buku]'";
$sql = mysql_query ($hapus);
echo '<script type="text/javascript">alert("./Data Berhasil diHapus! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=Index.php" />';
?>