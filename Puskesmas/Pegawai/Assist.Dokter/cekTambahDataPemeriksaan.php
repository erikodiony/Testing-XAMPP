<?php  
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
      
    $update="UPDATE `dokter` SET `hasil_periksa`='$_POST[hasil_periksa]',`resep`='$_POST[resep]',`saran_dokter`='$_POST[saran_dokter]' 
	WHERE `id_pasien` = '$_POST[id_psn]';";

	$prosesPemeriksaanDokter="UPDATE `proses` SET `2_Dokter`='Tuntas' WHERE `id_pasien`='$_POST[id_psn]';";
	
	
	mysql_query($update);
    mysql_query($prosesPemeriksaanDokter);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<script>window.setTimeout("window.close()", 1000);</script>';
	echo '<script>window.onunload = refreshParent;
	function refreshParent(){window.opener.location.reload();}</script>';
?>

