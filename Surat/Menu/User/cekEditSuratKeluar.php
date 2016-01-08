<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('surat');  
	$no_agdKSeb = $_POST['hide_agd'];
    $qDup = mysql_query("SELECT * FROM `s_keluar` WHERE `no_agenda` = '$_POST[no_agdK]'");
    $update="UPDATE `s_keluar` SET `no_berkas`='$_POST[no_brks]',`no_agenda`='$_POST[no_agdK]',`tgl_suratk`='$_POST[tgl_suratk]',`srt_no`='$_POST[no_suratk]',`srt_ke`='$_POST[kpd_srt]',`srt_perihal`='$_POST[isi_srt]'
	WHERE `no_urut` = '$_POST[no_urutk]';";
	$cek = mysql_num_rows($qDup);
	$data = mysql_fetch_array($qDup);  
		if($cek <= 0)
		{
			mysql_query($update);
			echo '<script type="text/javascript">alert("./Data Berhasil disimpan! :)");</script>';
			echo '<meta http-equiv="refresh" content="0; url=../User" />';
		}
		else
		{
			if($no_agdKSeb == $data['no_agenda'])
			{
				mysql_query($update);
				echo '<script type="text/javascript">alert("./Data Berhasil disimpan! :)");</script>';
				echo '<meta http-equiv="refresh" content="0; url=../User" />';
			}
			else 
			{
				echo '<script type="text/javascript">alert("./Data Gagal disimpan! No. Agenda Terdeteksi Terduplikasi, Cek Kembali No. Agenda Anda! :(");</script>';
				echo '<meta http-equiv="refresh" content="0; url=../User" />';
			}
		}
?>

