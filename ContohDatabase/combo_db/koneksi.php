<?php
$host = "localhost"; // db host
$username = "root";  // db username
$password = ""; // db password
$db = "combo";  // db name

// Melakukan koneksi ke database
mysql_connect($host,$username,$password) or die("Koneksi gagal");
mysql_select_db($db) or die("Database tidak bisa dibuka");
?>