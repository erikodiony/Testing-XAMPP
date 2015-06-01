<?php  
		mysql_connect('localhost','root','');  
		mysql_select_db('puskesmas');  
		$q = mysql_query("SELECT * FROM obat ORDER BY id_obat DESC LIMIT 1");
						$jumlah = mysql_num_rows($q);
						$data = mysql_fetch_array($q);
			if($jumlah <= 0)
				{ $NoUrut = 1001;}		
			else{ $NoUrut = $data['id_obat'] + 1;}
?>
<html>
<head></head>
<body>
<form method="post" action="cekinsertobat.php">
<input type="text" name="id_obat" readonly placeholder="ID Obat" value="<?php echo $NoUrut ?>"/>
<input type="text" name="nm_obat" placeholder="Nama Obat"/><br><br>
<input type="text" name="hrg_obat" placeholder="Harga Obat"/>
<input type="text" name="stok_obat" placeholder="Jumlah Stok Obat"/><br><br>
<select name="j_obat">
<option value="Generik">Generik</option>
<option value="Bebas">Bebas</option>
</select>
<button type="submit">Simpan</button>
</form>




<form method="post">
<?php  
		mysql_connect('localhost','root','');  
		mysql_select_db('puskesmas');  
		$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Generik' ORDER BY `nama_obat` ASC";  
		$qryTampil=mysql_query($sqlTampil); 
?> 
		<select id="anggota" name="anggota">
		<option value="" selected>PILIH OBAT</option>
		<option class="divider" disabled>===================================</option>
		<option class="divider" disabled>OBAT GENERIK</option>
<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) {?> 

<option value="<?php echo $dataTampil['id_obat'] ; ?>">
<?php echo $dataTampil['nama_obat'] ; ?></option>

<?php } ?> 
<option class="divider" disabled>OBAT BEBAS</option>
<?php  
		mysql_connect('localhost','root','');  
		mysql_select_db('puskesmas');  
		$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Bebas' ORDER BY `nama_obat` ASC";  
		$qryTampil=mysql_query($sqlTampil); 
?> 
		
<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) {?> 

<option value="<?php echo $dataTampil['id_obat'] ; ?>">
<?php echo $dataTampil['nama_obat'] ; ?></option>

<?php } ?> 
		</select>
		
		
		
<button type="submit">Cek</button>
		</form>
<div id="siswa"></div>

<script type="text/javascript" src="../../Puskesmas/Scripts/jquery.js"></script>
<script type="text/javascript">
$(function(){
   $('#anggota').change(function(){
		$('#siswa').load('c.php?id_obat=' + $(this).val(),function(responseTxt,statusTxt,xhr)
		{

		});
		
   });

});

</script>

		</body>
</html>