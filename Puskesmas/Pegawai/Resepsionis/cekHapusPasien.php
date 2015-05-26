<?php
include('Index.php');
mysql_connect("localhost","root","");
mysql_select_db("puskesmas");
$hapus = "DELETE FROM pasien WHERE id_pasien = '$_GET[id_pasien]';";
$hapusProses = "DELETE FROM proses WHERE id_pasien = '$_GET[id_pasien]';";
mysql_query ($hapus);
mysql_query ($hapusProses);
echo '<script type="text/javascript">alert("./User Berhasil diHapus! :)");</script>';
echo '<script type="text/javascript">window.history.go(-1);</script>';
?>