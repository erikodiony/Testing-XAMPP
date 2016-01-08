<?php  
		$usr = $_GET['user'];  // id yang gambarnya mo ditampilkakn
		mysql_connect('localhost','root','');  
		mysql_select_db('surat');  
		$sqlTampil="SELECT * FROM login WHERE `user`='$usr'";  
		$qryTampil=mysql_query($sqlTampil); 
		$dataTampil=mysql_fetch_array($qryTampil);

		
		header("Content-type: $dataTampil[foto_tipe];");
		
		echo $dataTampil['foto'];
?>