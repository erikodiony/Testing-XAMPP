<?php
$host = "localhost"; // alamat lokasi server
$uname= "root";  // username mysql
$passw= ""; // password mysql
$db_name ="test"; // nama database

//melakukan koneksi ke database
mysql_connect($host,$uname,$passw) OR die (" tidak terkoneksi dengan database " );
mysql_select_db($db_name) OR die ("terkoneksi, namun tidak memmiliki database " );
?>