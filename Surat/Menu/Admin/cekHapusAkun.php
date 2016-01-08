<?php
mysql_connect("localhost","root","");
mysql_select_db("surat");
$hapus = "DELETE FROM login WHERE user = '$_GET[user]';";

mysql_query ($hapus);
echo '<script type="text/javascript">alert("./Akun User Berhasil diHapus! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>