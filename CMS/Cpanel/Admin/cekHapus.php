<?php
mysql_connect("localhost","root","");
mysql_select_db("cms");
$hapus = "DELETE FROM artikel WHERE no='$_GET[no]'";
$sql = mysql_query ($hapus);
echo '<script type="text/javascript">alert("./Data Berhasil diHapus! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>