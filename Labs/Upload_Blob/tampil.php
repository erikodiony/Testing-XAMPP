<?php  
		$file_name=$_GET['foto_nama'];  // id yang gambarnya mo ditampilkakn
		mysql_connect('localhost','root','');  
		mysql_select_db('test');  
		$sqlTampil="SELECT * FROM gambar WHERE `foto_nama`='$file_name'";  
		$qryTampil=mysql_query($sqlTampil); 
		$dataTampil=mysql_fetch_array($qryTampil);

		
		header("Content-type: $dataTampil[foto_tipe];");
		
		echo $dataTampil['foto_nya'];
?>
