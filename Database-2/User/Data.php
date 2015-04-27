<html>
<head>
<title>-=Data Buku Perpustakaan=-</title>
</head>
<body>
<h2>./Data Buku Perpustakaan </h2>
<table width="600" border="1" align="left" cellpadding="2" cellspacing="1" bgcolor="#000000" celpading="2" celspacing="1" > 
  <tr bgcolor="#CD853F"> <!--header-->
	<td><div align="center"><strong>ID Buku</strong></div></td>
    <td><div align="center"><strong>Nama Buku</strong></div></td> 
    <td><div align="center"><strong>Pengarang</strong></div></td> 
    <td><div align="center"><strong>Tahun Terbit</strong></div></td> 
    <td><div align="center"><strong>Jumlah Halaman</strong></div></td> 
	<td><div align="center"><strong>Aksi</strong></div></td> 
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
    <td><div align="center">
	<a href="Delete.php?id_buku=<?php echo $dataTampil['id_buku'] ; ?>">Delete</a> | 
	<a href="Edit.php?id_buku=<?php echo $dataTampil['id_buku'] ; ?>"  onclick="window.open('Edit.php?id_buku=<?php echo $dataTampil['id_buku'] ; ?>', 'newwindow', 'width=500, height=300'); return false;">Edit</a></div>
	</td>  
  </tr> 
    <?php } ?> 
</table>
</body>
</html>
