<?php
			mysql_connect("localhost","root","");
			mysql_select_db("surat");
			$qDup = mysql_query("SELECT * FROM `s_keluar` WHERE `no_agenda` = '$_POST[no_agdK]'");
			$insert = "INSERT INTO `s_keluar` (`no_urut`, `no_berkas`, `no_agenda`,`tgl_suratk`,`srt_no`,`srt_ke`,`srt_perihal`) VALUES
			('$_POST[no_urutk]','$_POST[no_brks]','$_POST[no_agdK]','$_POST[tgl_suratk]','$_POST[no_suratk]','$_POST[kpd_srt]','$_POST[isi_srt]')";
			$cek = mysql_num_rows($qDup);
		if($cek <= 0)
		{
			mysql_query($insert);
			echo '<script type="text/javascript">alert("./Data Berhasil disimpan! :)");</script>';
			echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
		}
		else
		{
			echo '<script type="text/javascript">alert("./Data Gagal disimpan! No. Agenda Terdeteksi Terduplikasi, Cek Kembali No. Agenda Anda! :(");</script>';
			echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
		}
 ?>
