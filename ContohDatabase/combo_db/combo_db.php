<html>
<head></head>
<body>

<form method="post">
<?php  
		mysql_connect('localhost','root','');  
		mysql_select_db('combo');  
		$sqlTampil="SELECT * FROM anggota_ludruk ORDER BY id";  
		$qryTampil=mysql_query($sqlTampil); 
?> 
		<select name="anggota">
		<option value='belum milih' selected>- Pilih Anggota Ludruk -</option>
<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) {
?> 

<option value="<?php echo $dataTampil['nama'] ; ?>">
<?php echo $dataTampil['nama'] ; ?></option>

<?php } ?> 
		</select>
<button type="submit">Cek</button>
		</form>
		
		<input type="text" value="<?php if (isset($_POST['anggota'])) 
		{echo $_POST['anggota'];}?>"/>
	
		</body>
</html>