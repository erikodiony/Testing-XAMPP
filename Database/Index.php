<html>
<head>
<title>-=Data Buku Perpustakaan=-</title>
</head>

<body>
<?php
include ('Data.php');
?>
<form action="Simpan.php" method="post">
<table><tr>
<td></td><td>ID Buku&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="IDBuku" size="20"></td>
</tr><tr>
<td></td><td>Nama Buku&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="NamaBuku" size="20"></td>
</tr><tr>
<td></td><td>Pengarang&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="Pengarang" size="20"></td>
</tr><tr>
<td></td><td>Tahun Terbit&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="ThnTerbit" size="20"></td>
</tr><tr>
<td></td><td>Jumlah Halaman&nbsp;&nbsp;&nbsp;</td>
<td><input type="text" name="JmlHlm" size="20"></td>
</tr>
<tr>
<td><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="proses" value="Simpan"></td>
<td><br><input type="reset" value="Reset"></td>
</tr>
</table>
</form>
</body>
</html>
