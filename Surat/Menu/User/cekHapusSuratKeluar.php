<?php
mysql_connect("localhost","root","");
mysql_select_db("surat");
 $hapus="UPDATE `s_keluar` SET `no_berkas`=' ',`no_agenda`='0',`srt_no`=' ',`tgl_suratk`=' ',`srt_ke`=' ',`srt_perihal`=' '
	WHERE `no_urut` = '$_GET[no_urutk]';";

mysql_query ($hapus);
echo '<script type="text/javascript">alert("./Data Berhasil diHapus! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=../User" />';
?>