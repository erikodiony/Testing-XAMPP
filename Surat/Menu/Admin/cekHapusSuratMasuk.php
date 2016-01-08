<?php
mysql_connect("localhost","root","");
mysql_select_db("surat");
 $hapus="UPDATE `s_masuk` SET `no_berkas`=' ',`no_agenda`='0',`tgl_terima`=' ',`isi_disposisi`=' ',`srt_no`=' ',`srt_tgl`=' ',`srt_dari`=' ',`srt_perihal`=' '
	WHERE `no_urut` = '$_GET[no_urutm]';";

mysql_query ($hapus);
echo '<script type="text/javascript">alert("./Data Berhasil diHapus! :)");</script>';
echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
?>