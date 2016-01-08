<?php
		mysql_connect("localhost","root","");
		mysql_select_db("surat");
		$qDup = mysql_query("SELECT * FROM `s_masuk` WHERE `no_agenda` = '$_POST[no_agd]'");	
		$insert = "INSERT INTO `s_masuk` (`no_urut`, `no_berkas`, `no_agenda`,`tgl_terima`,`isi_disposisi`,`srt_no`,`srt_tgl`,`srt_dari`,`srt_perihal`) VALUES
			('$_POST[no_urutm]','$_POST[no_brks]','$_POST[no_agd]','$_POST[tgl_msk]','$_POST[isi_dps]','$_POST[no_suratm]','$_POST[tgl_suratm]','$_POST[dr_srt]','$_POST[isi_srt]')";
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
