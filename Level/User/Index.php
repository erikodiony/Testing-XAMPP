<html>
<head>
<title>-=Data Buku Perpustakaan=-</title>
</head>
<body>
<?php
include ('cek.php');
echo "<p>Selamat Datang, ".$_SESSION['level']." (".$_SESSION['username'].")</p>";
echo "<p><a href='../keluar.php' style='text-decoration:none'> << Keluar</a></p>";
?>
<h2>./Data Buku Perpustakaan </h2>
<table width="600" border="1" align="left" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" > 
  <tr bgcolor="#CD853F"> <!--header-->
	<td><div align="center"><strong>ID Buku</strong></div></td>
    <td><div align="center"><strong>Nama Buku</strong></div></td> 
    <td><div align="center"><strong>Pengarang</strong></div></td> 
    <td><div align="center"><strong>Tahun Terbit</strong></div></td> 
    <td><div align="center"><strong>Jumlah Halaman</strong></div></td> 
  </tr> 
  
  <?php 
	
      mysql_connect('localhost','root',''); 
      mysql_select_db('data'); 
      $tampil="select * from `perpus` ORDER BY id_buku ASC "; 
      $qryTampil=mysql_query($tampil); 
      while ($dataTampil=mysql_fetch_array($qryTampil)) { 
     
     ?> 
  
   <tr bgcolor="#FFFFFF"> 
    <td><?php echo $dataTampil['id_buku'] ; ?></td> 
    <td><?php echo $dataTampil['nama_buku']; ?></td> 
    <td><?php echo $dataTampil['pengarang']; ?></td> 
    <td><?php echo $dataTampil['thn_terbit']; ?></td> 
    <td><?php echo $dataTampil['jml_hlm']; ?></td>   
  </tr> 
    <?php } ?> 
</table>
</body>
</html>
