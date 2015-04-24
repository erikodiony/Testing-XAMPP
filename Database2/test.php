<?php
$connect = mysql_connect("localhost","root","");
mysql_select_db("data", $connect);
?>
<html>
<head>
<title>Tes membuat nomor urut pada database MySQL</title>
</head>
<body>
<?php
$query = mysql_query("SELECT * FROM testing ORDER BY nomor");
while($data_query = mysql_fetch_array($query)){
 echo "$data_query[nomor]. $data_query[nama], $data_query[alamat] <br/>";
}

if(isset($_POST['submit'])){
$q = mysql_query("SELECT * FROM testing ORDER BY nomor DESC LIMIT 1");
$jumlah = mysql_num_rows($q);
$data = mysql_fetch_array($q);
if($jumlah <= 0){
 $nomorbaru = 1;
 }else{
 $nomorbaru = $data[nomor] + 1;
 }
if($_POST[nama] == ""){echo "Nama jangan dokosongkan...";}
else if($_POST[alamat] == ""){echo "Alamat jangan dikosongkan...";}
else{
mysql_query("INSERT INTO testing (nomor, nama, alamat) VALUES ('$nomorbaru','$_POST[nama]','$_POST[alamat]')");
echo "<b>Data baru telah ditambahkan, Silahkan Tunggu...</b>";
echo "<script>window.location = 'test.php';</script>"; 
}
}else{
?>
<h2>Masukan Data Baru!</h2>
<table>
<form name="insert" action="test.php" method="post">
<tr><td style="float:right;">Nama: </td><td><input type="text" name="nama" /></td></tr>
<tr><td style="float:right;">Alamat: </td><td><input type="text" name="alamat" /></td></tr>
<tr><td colspan="2"><input type="submit" name="submit" value="Kirim" style="float:right;" /></td></tr>
</form>
</table>
</body>
</html>
<?php
}
?>




if($_POST[NIM] == ""){echo "Nama jangan dokosongkan...";}
else if($_POST[Nama] == ""){echo "Alamat jangan dikosongkan...";}
else if($_POST[Kelas] == ""){echo "Nama jangan dokosongkan...";}
else if($_POST[Alamat] == ""){echo "Alamat jangan dikosongkan...";}





if ($query)
	{header("Location: index.php"); die();}
else {echo "Data Gagal Disimpan!";}