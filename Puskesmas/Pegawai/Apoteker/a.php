<html>
<head>
<link rel="icon" type="image/ico" href="../../favicon.ico">
  <link rel="stylesheet" href="../../Scripts/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Scripts/Validator/css/formValidation.css"/>
  <link rel="stylesheet" href="../../Scripts/FakeLoader/fakeLoader.css">
  <script type="text/javascript" src="../../Scripts/jquery.js"></script>
  <script type="text/javascript" src="../../Scripts/jquery-1.4.3.min.js"></script>
  <script type="text/javascript" src="../../Scripts/Bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../Scripts/Tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="../../Scripts/Validator/js/formValidation.js"></script>
  <script type="text/javascript" src="../../Scripts/Validator/js/framework/bootstrap.js"></script>
  <script type="text/javascript" src="../../Scripts/jquery.bootstrap.wizard.min.js"></script>
  <script type="text/javascript" src="../../Scripts/FakeLoader/fakeLoader.min.js"></script>

</head>
<body>
<div class="col-md-12">
<br>
<form method="post">
<h4> Silahkan Tambahkan Jumlah Item Pembelian Obat Pasien! </h4>
<input type="text" id="t_kolom" name="t_kolom" />
<button type="submit" id="btn">Tambah</button>
<h5>Maksimal Pembelian Obat 20 Item</h5>
</form>
</div>



<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$nilai = $_POST['t_kolom'];
if($nilai > 20)
	{echo '<script type="text/javascript">alert("./Maksimal Pembelian Obat Hingga 20 Item! \n./Gagal Menambahkan Kolom! :(");</script>';
	die();}

	else {
for($x=1; $x<=$nilai; $x++) 
{
?>
<div class="col-md-12">
		<br><br>
		
		<?php  
		@mysql_connect('localhost','root','');  
		mysql_select_db('puskesmas');  
		$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Generik' ORDER BY `nama_obat` ASC";  
		$qryTampil=mysql_query($sqlTampil); 
		?> 

		<h4>Item Obat (<?php echo $x;?>)</h4>
			<select name="obat[]" id="obat_<?php echo $x;?>" class="anu" onchange="runObat_<?php echo $x;?>(); ">
				<option value="" selected>PILIH OBAT</option>
				<option class="divider" disabled>===================================</option>
				<option class="divider" disabled>OBAT GENERIK</option>
		<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) {?> 
		<option value="<?php echo $dataTampil['hrg_obat'] ; ?>">
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

<option value="<?php echo $dataTampil['hrg_obat'] ; ?>">
<?php echo $dataTampil['nama_obat'] ; ?></option>

<?php } ?> 
		</select>	
			
			<input type="text" id="kolom_a_<?php echo $x;?>" readonly class="kolom_a_<?php echo $x;?>" placeholder="Harga Satuan">
			<input type="text" id="kolom_b_<?php echo $x;?>" class="kolom_b_<?php echo $x;?>" placeholder="Jumlah Beli" onkeyup="">
			<input type="text" class="it" id="hasil_<?php echo $x;?>" placeholder="Total Harga" >
</div>

<script>
function updateNilai_<?php echo $x;?>()
{
    $("#kolom_a_<?php echo $x;?>").val($("#obat_<?php echo $x;?>").val());
}

$(document).ready(function () {
    updateNilai_<?php echo $x;?>();
});
</script>

<script>
	$(document).ready(function(){
    $("#input").keyup(function(){
          var kolom_a_<?php echo $x;?> = $("#kolom_a_<?php echo $x;?>").val();
          var kolom_b_<?php echo $x;?> = $("#kolom_b_<?php echo $x;?>").val();
          $("#hasil_<?php echo $x;?>").val(kolom_a_<?php echo $x;?>*kolom_b_<?php echo $x;?>);
		 
   });
   $(".anu").change(function(){
          var kolom_a_<?php echo $x;?> = $("#kolom_a_<?php echo $x;?>").val();
          var kolom_b_<?php echo $x;?> = $("#kolom_b_<?php echo $x;?>").val();
          $("#hasil_<?php echo $x;?>").val(kolom_a_<?php echo $x;?>*kolom_b_<?php echo $x;?>);
   });
});
</script>
  
</script>
  
  
<?php
}}
?>
<div class="col-md-7">
<br><br><h4>Total Harga Obat Keseluruhan : </h4>
<input type="text" id="total" placeholder=" Total Harga Keseluruhan">
<input type="button" value="Total" onclick="tot();"/>
<script>
		  function tot()
				{
					var jumlahIT = document.getElementsByClassName("it");
					var total = 0;
					for(var i = 0; i < jumlahIT.length; i++)
						{
					total = total +  parseInt(document.getElementById("hasil_"+(i+1)).value);
						}
					document.getElementById('total').value = total;
					return total;

				}
</script>
<br><br><br>
</div>
<br><br>
</body>
</html>
