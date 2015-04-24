<?php //SETTING KONEKSI KE MYSQL
$host = "localhost"; //HOST
$user = "root";//USERNAME MYSQL
$pass = ""; //PASSWORD DEFAULT XAMPP JIKA MENGGUNAKAN PASSWORD,SILAHKAN ISI
$dbName = "db_tutorial"; //NAMA DATABASE YANG DIPILIH
mysql_connect($host, $user, $pass); //MENYAMBUNG
mysql_select_db($dbName) //MEMILIH NAMA DATABASE
or die ("Sambungan gagal !! : ".mysql_error()); //JIKA GAGAL MENYAMBUNG
?>