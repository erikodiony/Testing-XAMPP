<?php  
	date_default_timezone_set("Asia/Jakarta");
	$jam = date("H:i:s");
	$tgl = date('d-m-Y');
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
      
    $insert="INSERT INTO `pasien`(`id_pasien`, `level`, `pass_pasien`, `nm_pasien`, `jam_masuk`, `tgl_masuk`) 
	VALUES ('$_POST[id_psn]','Pasien','$_POST[pass_psn]','$_POST[nm_psn]','$jam','$tgl');";
	
	$prosesDaftar="INSERT INTO `proses`(`id_pasien` , `1_Edit`,`2_Dokter` , `3_Apotek`,`4_Bayar` , `5_Cetak`) 
	VALUES ('$_POST[id_psn]','x','x','x','x','x');";
	
	$prosesDaftarPemeriksaan="INSERT INTO `dokter`(`id_pasien`) 
	VALUES ('$_POST[id_psn]');";
	
	$prosesDaftarApotek="INSERT INTO `apotek`(`id_pasien`) 
	VALUES ('$_POST[id_psn]');";
	
    mysql_query($insert);
	mysql_query($prosesDaftar);
	mysql_query($prosesDaftarPemeriksaan);
	mysql_query($prosesDaftarApotek);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=../Resepsionis" />';
?>