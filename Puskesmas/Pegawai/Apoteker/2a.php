<link rel="icon" type="image/ico" href="../../favicon.ico">
  <link rel="stylesheet" href="../../Scripts/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../Scripts/Validator/css/formValidation.css"/>
  <link rel="stylesheet" href="../../Scripts/FakeLoader/fakeLoader.css">
  <script type="text/javascript" src="../../Scripts/jquery.js"></script>
  <script type="text/javascript" src="../../Scripts/Bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../Scripts/Tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="../../Scripts/Validator/js/formValidation.js"></script>
  <script type="text/javascript" src="../../Scripts/Validator/js/framework/bootstrap.js"></script>
  <script type="text/javascript" src="../../Scripts/jquery.bootstrap.wizard.min.js"></script>
  <script type="text/javascript" src="../../Scripts/FakeLoader/fakeLoader.min.js"></script>
	
<div class="col-md-12">
	<br>
		<form method="post">
			<h4> Silahkan Tambahkan Jumlah Item Pembelian Obat Pasien! </h4>
				<input type="text" id="t_kolom" name="t_kolom" />
			<button type="submit" id="btn">Tambah</button>
		<h5>Maksimal Pembelian Obat 20 Item</h5>
		</form>
</div>

<form id="formisi" method="post">
<?php
					error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
					$nilai = $_POST['t_kolom'];
					if($nilai > 20)
						{echo '<script type="text/javascript">alert("./Maksimal Pembelian Obat Hingga 20 Item! \n./Gagal Menambahkan Kolom! :(");</script>';
						die();}
					else { for($x=1; $x<=$nilai; $x++) 
						{
					?>
					
					
					<div class="hero-unit">
					<h4>Item Obat (<?php echo $x;?>)</h4>
						<div class="form-group">				
									<div class="col-xs-12 selectContainer">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></span>
												<select class="form-control" id="combo_<?php echo $x;?>" name="obat[]" onchange="updateValue_<?php echo $x;?>()>
													<option value="" selected>Pilih Jabatan</option>
													<option class="divider" disabled>===================================</option>
													<option class="divider" disabled>OBAT GENERIK</option>
													
												<?php  
			mysql_connect('localhost','root','');  
			mysql_select_db('puskesmas');  
			$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Generik' ORDER BY `nama_obat` ASC";  
			$qryTampil=mysql_query($sqlTampil); 
			?> 
		
			<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) 
				{?> 

		<option value="<?php echo $dataTampil['hrg_obat']?>"><?php echo $dataTampil['nama_obat']?></option>
		
			<?php } ?>

	<option class="divider" disabled>OBAT BEBAS</option>
			<?php  
			mysql_connect('localhost','root','');  
			mysql_select_db('puskesmas');  
			$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Bebas' ORDER BY `nama_obat` ASC";  
			$qryTampil=mysql_query($sqlTampil); 
			?> 
		
			<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) 
				{?> 

	<option value="<?php echo $dataTampil['hrg_obat'] ; ?>"><?php echo $dataTampil['nama_obat'] ; ?></option>

		<?php } ?> 
	
	</select>
										</div>
									</div>
									
									
						</div>			
						<div class="form-group">
						<div class="col-xs-3 ">
										<input type="text" class="form-control" id="kol_<?php echo $x;?>" placeholder="Jumlah Beli.." />
									</div>
									
									
									
									
						</div>
						<div class="form-group">
						<div class="col-xs-4 ">
										<input type="text" class="form-control" id="kol2_<?php echo $x;?>" placeholder="Harga Satuan.." />
									</div>
						</div>
						<div class="form-group">
						<div class="col-xs-4 ">
										<input type="text" class="form-control" id="kol3_<?php echo $x;?>" placeholder="Harga Total.." />
									</div>
						</div>
					</div>
					
					<script>
    $("#kol2_<?php echo $x;?>").keyup(function(){
          var kolom_a_<?php echo $x;?> = $("#kol_<?php echo $x;?>").val();
          var kolom_b_<?php echo $x;?> = $("#kol2_<?php echo $x;?>").val();
          $("#kol3_<?php echo $x;?>").val(kolom_a_<?php echo $x;?>*kolom_b_<?php echo $x;?>);
		 
   });
   $("#combo_<?php echo $x;?>").change(function(){
         var kolom_a_<?php echo $x;?> = $("#kol_<?php echo $x;?>").val();
          var kolom_b_<?php echo $x;?> = $("#kol2_<?php echo $x;?>").val();
          $("#kol3_<?php echo $x;?>").val(kolom_a_<?php echo $x;?>*kolom_b_<?php echo $x;?>);
   });
</script>


<script>
function updateValue_<?php echo $x;?>()
{
    $('#kol_<?php echo $x;?>').val($('#combo_<?php echo $x;?>').val());
}

$(document).ready(function () {
    updateValue_<?php echo $x;?>();
});
</script>

<?php
}}
?>
</form>