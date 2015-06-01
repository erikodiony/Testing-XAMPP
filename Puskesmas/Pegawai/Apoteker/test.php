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
<div class="col-md-6">
<br>
<form method="post">
<h4> Silahkan Tambahkan Jumlah Item Pembelian Obat Pasien! </h4>
<input type="text" name="t_kolom" />
<button type="submit">Tambah</button>
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
		<h4>Item Obat (<?php echo $x;?>)</h4>
			<select name="obat[]" id="obat_<?php echo $x;?>" class="anu" onchange="runObat_<?php echo $x;?>(); ">
				<option value="" selected>PILIH OBAT</option>
				<option class="divider" disabled>===================================</option>
				<option class="divider" disabled>OBAT GENERIK</option>
				<option value="Amoxicillin 500mg">Amoxicillin 500mg</option>
				<option value="Ampicillin 500mg">Ampicillin 500mg</option>
				<option value="Antalgin 500mg">Antalgin 500mg</option>
				<option value="Dexamethasone 0,5mg">Dexamethasone 0,5mg</option>
				<option value="Ibuprofen 400mg">Ibuprofen 400mg</option>
				<option value="Paracetamol 500mg">Paracetamol 500mg</option>
				<option value="Neuralgin">Neuralgin</option>
				<option value="Antasida">Antasida</option>
				<option value="CTM">CTM</option>
				<option value="Iodin Povidon">Paracetamol 500mg</option>
				<option value="Asam Mefenamat 500 mg">Asam Mefenamat 500 mg</option>
				<option value="Ranitidin 150 mg">Ranitidin 150 mg</option>
				<option class="divider" disabled>OBAT BEBAS</option>
				<option value="Alkohol 70%">Alkohol 70%</option>
				<option value="Kain Kasa">Kain Kasa</option>
				<option value="Paramex">Paramex</option>
				<option value="Panadol">Panadol</option>
				<option value="Mixagrip">Mixagrip</option>
				<option value="Minyak Telon Caplang 60ml">Minyak Telon Caplang 60ml</option>
				<option value="Insto Tetes Mata">Insto Tetes Mata</option>
				<option value="Bodrex">Bodrex</option>
				<option value="Neurobion 5000mg">Neurobion 5000mg</option>
				<option value="Cendo Xytrol Salep Mata 3,5 g">Cendo Xytrol Salep Mata 3,5 g</option>
				<option value="Promag">Promag</option>
				<option value="Neo Entrostop">Neo Entrostop</option>
				<option value="Ponstan 500 mg">Ponstan 500 mg</option>
				<option value="Pil KB Andalan">Pil KB Andalan</option>
				<option value="Decolsin Sirup 60 ml">Decolsin Sirup 60 ml</option>
			</select>
			<input type="text" id="kolom_a_<?php echo $x;?>" readonly class="input kolom_a_<?php echo $x;?>" placeholder="Harga Satuan">
			<input type="text" id="kolom_b_<?php echo $x;?>" class="input kolom_b_<?php echo $x;?>" placeholder="Jumlah Beli">
			<input type="text" class="it" id="hasil_<?php echo $x;?>" placeholder="Total Harga" >
</div>

<script>
	$(document).ready(function(){
    $(".input").keyup(function(){
          var kolom_a_<?php echo $x;?> = $(".kolom_a_<?php echo $x;?>").val();
          var kolom_b_<?php echo $x;?> = $(".kolom_b_<?php echo $x;?>").val();
          $("#hasil_<?php echo $x;?>").val(kolom_a_<?php echo $x;?>*kolom_b_<?php echo $x;?>);
		 
   });
   $(".anu").change(function(){
          var kolom_a_<?php echo $x;?> = $(".kolom_a_<?php echo $x;?>").val();
          var kolom_b_<?php echo $x;?> = $(".kolom_b_<?php echo $x;?>").val();
          $("#hasil_<?php echo $x;?>").val(kolom_a_<?php echo $x;?>*kolom_b_<?php echo $x;?>);
   });
});
</script>
  
  <!-- Konfig Select obat #formEdit -->
<script>
function runObat_<?php echo $x;?>() {
   
	var cek_<?php echo $x;?> = document.getElementById("obat_<?php echo $x;?>");
	if(cek_<?php echo $x;?>.value == "Amoxicillin 500mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 6000;
	
	if(cek_<?php echo $x;?>.value == "Ampicillin 500mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 5500;

	if(cek_<?php echo $x;?>.value == "Antalgin 500mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 2500;

	if(cek_<?php echo $x;?>.value == "Dexamethasone 0,5mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 1500;

	if(cek_<?php echo $x;?>.value == "Ibuprofen 400mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 4000;

	if(cek_<?php echo $x;?>.value == "Paracetamol 500mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 5000;

	if(cek_<?php echo $x;?>.value == "Neuralgin")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 6000;

	if(cek_<?php echo $x;?>.value == "Antasida")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 2500;

	if(cek_<?php echo $x;?>.value == "CTM")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 1500;

	if(cek_<?php echo $x;?>.value == "Alkohol 70%")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 6000;

	if(cek_<?php echo $x;?>.value == "Kain Kasa")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 1000;

	if(cek_<?php echo $x;?>.value == "Iodin Povidon")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 4500;
	
	if(cek_<?php echo $x;?>.value == "Paramex")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 2500;
	
	if(cek_<?php echo $x;?>.value == "Panadol")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 2500;
	
	if(cek_<?php echo $x;?>.value == "Mixagrip")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 2500;
	
	if(cek_<?php echo $x;?>.value == "Minyak Telon Caplang 60ml")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 7500;
	
	if(cek_<?php echo $x;?>.value == "Insto Tetes Mata")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 12500;
	
	if(cek_<?php echo $x;?>.value == "Bodrex")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 2500;
	
	if(cek_<?php echo $x;?>.value == "Neurobion 5000mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 23000;
	
	if(cek_<?php echo $x;?>.value == "Cendo Xytrol Salep Mata 3,5 g")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 31000;
	
	if(cek_<?php echo $x;?>.value == "Promag")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 5500;
	
	if(cek_<?php echo $x;?>.value == "Neo Entrostop")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 6000;
	
	if(cek_<?php echo $x;?>.value == "Asam Mefenamat 500 mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 4500;
	
	if(cek_<?php echo $x;?>.value == "Ranitidin 150 mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 2500;
	
	if(cek_<?php echo $x;?>.value == "Ponstan 500 mg")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 35000;
	
	if(cek_<?php echo $x;?>.value == "Decolsin Sirup 60 ml")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 16000;
	
	if(cek_<?php echo $x;?>.value == "Pil KB Andalan")
		document.getElementById("kolom_a_<?php echo $x;?>").value = 7500;
	
	}
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
