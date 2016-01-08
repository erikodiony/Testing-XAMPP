<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('surat');  
	$no_agdMSeb = $_POST['hide_agd'];
    $qDup = mysql_query("SELECT * FROM `s_masuk` WHERE `no_agenda` = '$_POST[no_agd]'");
    $update="UPDATE `s_masuk` SET `no_berkas`='$_POST[no_brks]',`no_agenda`='$_POST[no_agd]',`tgl_terima`='$_POST[tgl_msk]',`isi_disposisi`='$_POST[isi_dps]',`srt_no`='$_POST[no_suratm]',`srt_tgl`='$_POST[tgl_suratm]',`srt_dari`='$_POST[dr_srt]',`srt_perihal`='$_POST[isi_srt]'
	WHERE `no_urut` = '$_POST[no_urutm]';";
	$cek = mysql_num_rows($qDup);
	$data = mysql_fetch_array($qDup);  
		if($cek <= 0)
		{
			mysql_query($update);
			echo '<script type="text/javascript">alert("./Data Berhasil disimpan! :)");</script>';
			echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
		}
		else
		{
			if($no_agdMSeb == $data['no_agenda'])
			{
				mysql_query($update);
				echo '<script type="text/javascript">alert("./Data Berhasil disimpan! :)");</script>';
				echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
			}
			else 
			{
				echo '<script type="text/javascript">alert("./Data Gagal disimpan! No. Agenda Terdeteksi Terduplikasi, Cek Kembali No. Agenda Anda! :(");</script>';
				echo '<meta http-equiv="refresh" content="0; url=../Admin" />';
			}
				
		}
?>

