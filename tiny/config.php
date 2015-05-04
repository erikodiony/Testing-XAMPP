<?php
$host = "localhost";
$user = "root";//user
$pass = "";//pasword
$database = "unp";//nama database
$koneksi = mysql_connect ($host,$user,$pass);
mysql_select_db($database) or die ("koneksi gagal !!!");
?>