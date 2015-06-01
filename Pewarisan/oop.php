<?php
include_once'koneksioop.php';

$db = new database();
$db->connectMySQL();

?>

<form method="post">
 <table>  
  <tr>
	<td>Nama</td>
	<td>:</td>
	<td>
	<input name="nama" type="textfield">
	</td>
  </tr>
  
  <tr>
	<td>Alamat</td>
	<td>:</td>
	<td>
	<input name="alamat" type="textfield">
	</td>
  </tr>
  
  <tr>
	<td>Telpon</td>
	<td>:</td>
	<td>
	<input name="telpon" type="textfield">
	</td>
  </tr>

  <tr>
	<td></td>
	<td>
	<input name="submit" type="submit" value="Simpan">
	</td>
  </tr>
  
 </table>
</form> 
<?php
	if($_POST['submit']){
	$db->tambahAnggota($_POST['nama'],$_POST['alamat'],$_POST['telpon']);
	}
?>