<?php
class database{
	private $dbHost="localhost";
	private $dbUser="root";
	private $dbPass="";
	private $dbName="test";
	
	function connectMySQL(){
	mysql_connect($this->$dbHost,$this->$dbUser,$this->$dbPass);
	mysql_select_db($this->$dbName)or die("Database Tidak Ada");
	}
	
	function tambahAnggota($nama,$alamat,$telpon){
	$query="INSERT INTO anggota (nama,alamat,telpon) VALUES ('$nama','$alamat','$telpon')";
	$hasil=mysql_query($query);
	}
	

}
?>