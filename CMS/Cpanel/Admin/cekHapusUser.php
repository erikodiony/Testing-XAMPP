<?php
include('Index.php');
mysql_connect("localhost","root","");
mysql_select_db("cms");
$hapus = "DELETE FROM akun WHERE username = '$_GET[username]' and password='$_GET[password]';";
$sql = mysql_query ($hapus);
echo '<script type="text/javascript">alert("./User Berhasil diHapus! :)");</script>';
echo '<script type="text/javascript">window.history.go(-1);</script>';
?>