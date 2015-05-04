<?php
 include "config.php"; //panggil file koneksi.php yang telah dibuat
 //mengambil variabel yang dikirim oleh index.php
 $jud=$_POST['judul'];
 $berita=$_POST['isi_berita'];
 
 
 $query="INSERT INTO `unp`.`berita` (`id`, `judul`, `isi_berita`) VALUES ('1', '$jud', '$berita');";
 $exe=mysql_query($query);
 
    echo"<a href='index.php'>ke index</a></br>";
?>
