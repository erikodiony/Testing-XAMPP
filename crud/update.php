<?php
include 'koneksi.php';
$no = $_GET['no']; //mengambil no / id
$query = "SELECT * FROM tb_profil WHERE no = $no"; //Memilih nama tabel dan menyeleksi no
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>

<form method="post" action="proses.php">
<table width="500" border="0" cellpadding="2" cellspacing="2">
  <tr bgcolor="orange">
	<td height="21" colspan="3">
     <strong>Form Update | RPL4rt</strong>
    </td>

  <tr>
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" name="no" disabled='disable' value="<?php echo $data['no']; ?>"> </td>
  </tr>

  <tr>
  	<td>Nama</td>
    <td>:</td>
    <td> <input type="text" name="nama" value="<?php echo $data['nama']; ?>"> </td>
  </tr>

  <tr>
  	<td>Alamat</td>
    <td>:</td>
    <td> <textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
  </tr>
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="no" value="<?php echo $data['no']; ?>">
  	<input type="SUBMIT" name="simpan" value="Save"></td>
  </tr>
</table>
</form>