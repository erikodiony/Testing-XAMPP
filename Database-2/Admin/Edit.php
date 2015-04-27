<html>
<head>
<title>-=Data Buku Perpustakaan=-</title>
</head>
<?php  
      mysql_connect('localhost','root','');  
      mysql_select_db('data');  
      $sqlTampil="select * from perpus Where id_buku='$_GET[id_buku]'";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  
     ?> 
<body>
<h2>./Data Buku Perpustakaan</h2>
<form action="ProsesEdit.php" method="post">
<table><tr>
<td></td><td>ID Buku&nbsp;&nbsp;&nbsp;</td>
<td><input style="color: #D3D3D3;" type="text" name="IDBuku" id="id_buku" readonly="readonly" value="<?php echo $dataTampil['id_buku']; ?>" size="20"></td>
</tr><tr>
<td></td><td>Nama Buku&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="NamaBuku" id="nama_buku" value="<?php echo $dataTampil['nama_buku']; ?>" size="20"></td>
</tr><tr>
<td></td><td>Pengarang&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="Pengarang" id="pengarang" value="<?php echo $dataTampil['pengarang']; ?>" size="20"></td>
</tr><tr>
<td></td><td>Tahun Terbit&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="ThnTerbit" id="thn_terbit" value="<?php echo $dataTampil['thn_terbit']; ?>" size="20"></td>
</tr><tr>
<td></td><td>Jumlah Halaman&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="JmlHlm" id="jml_hlm" value="<?php echo $dataTampil['jml_hlm']; ?>" size="20"></td>
</tr>
<tr>
<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="proses" value="Edit"></td>
<td><br><input type="reset" value="Reset"></td>
</tr>
</table>
</form>
</body>
</html>
