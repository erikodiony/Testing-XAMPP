<?php
	
	mysql_connect('localhost','root','');  
    mysql_select_db('puskesmas');  
      
    $insert="INSERT INTO `obat`(`id_obat`, `nama_obat`, `stok_obat`, `hrg_obat`, `j_obat`) 
	VALUES ('$_POST[id_obat]','$_POST[nm_obat]','$_POST[stok_obat]','$_POST[hrg_obat]','$_POST[j_obat]');";
	mysql_query($insert);
	echo '<script type="text/javascript">alert("./Data Berhasil Disimpan! :)");</script>';
	echo '<meta http-equiv="refresh" content="0; url=insertobat.php" />';
?>