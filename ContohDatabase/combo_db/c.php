<?php
		mysql_connect('localhost','root','');  
		mysql_select_db('puskesmas');  
		$sqlTampil="SELECT * FROM obat WHERE `id_obat` ='$_GET[id_obat]'";  
		$qryTampil=mysql_query($sqlTampil); 
?> 
		
<?php $dataTampil=mysql_fetch_array($qryTampil)?> 

Harga: <input type="text" value="<?php echo $dataTampil['hrg_obat'] ; ?>" />
