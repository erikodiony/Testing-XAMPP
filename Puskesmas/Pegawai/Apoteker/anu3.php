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
<style>
* { font-family:Arial; }
h2 { padding:0 0 5px 5px; }
h2 a { color: #224f99; }
a { color:#999; text-decoration: none; }
a:hover { color:#802727; }
p { padding:0 0 5px 0; }

input { padding:5px; border:1px solid #999; border-radius:4px; -moz-border-radius:4px; -web-kit-border-radius:4px; -khtml-border-radius:4px; }
</style>
</head>
<body>
<h2><a href="#" id="addParagraf">Add Another Input Box</a></h2>

<div id="paragraf">
    <p><div class="col-md-6">
        <select name="obat[]" id="obat" class="form-control" onchange="runObat(); kali();"><option value="" selected>PILIH OBAT</option><option class="divider" disabled>===================================</option><option class="divider" disabled>OBAT GENERIK</option><option value="Amoxicillin 500mg">Amoxicillin 500mg</option><option value="Ampicillin 500mg">Ampicillin 500mg</option><option value="Antalgin 500mg">Antalgin 500mg</option><option value="Dexamethasone 0,5mg">Dexamethasone 0,5mg</option><option value="Ibuprofen 400mg">Ibuprofen 400mg</option><option value="Paracetamol 500mg">Paracetamol 500mg</option><option value="Neuralgin">Neuralgin</option><option value="Antasida">Antasida</option><option value="CTM">CTM</option><option value="Iodin Povidon">Paracetamol 500mg</option><option value="Asam Mefenamat 500 mg">Asam Mefenamat 500 mg</option><option value="Ranitidin 150 mg">Ranitidin 150 mg</option><option class="divider" disabled>OBAT BEBAS</option><option value="Alkohol 70%">Alkohol 70%</option><option value="Kain Kasa">Kain Kasa</option><option value="Paramex">Paramex</option><option value="Panadol">Panadol</option><option value="Mixagrip">Mixagrip</option><option value="Minyak Telon Caplang 60ml">Minyak Telon Caplang 60ml</option><option value="Insto Tetes Mata">Insto Tetes Mata</option><option value="Bodrex">Bodrex</option><option value="Neurobion 5000mg">Neurobion 5000mg</option><option value="Cendo Xytrol Salep Mata 3,5 g">Cendo Xytrol Salep Mata 3,5 g</option><option value="Promag">Promag</option><option value="Neo Entrostop">Neo Entrostop</option><option value="Ponstan 500 mg">Ponstan 500 mg</option><option value="Pil KB Andalan">Pil KB Andalan</option><option value="Decolsin Sirup 60 ml">Decolsin Sirup 60 ml</option></select>
		</div>
		<div class="col-md-6">
		<label for="par"><input type="text" id="kol" size="20" name="p_scnt" value="" placeholder="Jumlah Beli" onkeyup="kali()"/></label>&nbsp 
		<label for="par"><input type="text" id="kolom" size="20" name="p_s" value="" placeholder="Harga Satuan" /></label>&nbsp
		<label for="par"><input type="text" id="hasil" size="20" name="p_scnt" value="" placeholder="Total Harga" /></label>&nbsp
		</div>
	</p>
</div>
</body>
<script>
$(function() {
        var scntDiv = $('#paragraf');
        var i = $('#paragraf p').size() + 1;
        
        $('#addParagraf').live('click', function() {
          $('<p><label for="par"><input type="text" id="kol'+i+'" size="20" name="kol'+i+'" value="" placeholder="Jumlah Beli" onkeyup="kali()"/>&nbsp <label for="par"><input type="text" id="kolom'+i+'" size="20" name="kolom'+i+'" value="" placeholder="Harga Satuan" /></label>&nbsp <label for="par"><input type="text" id="hasil'+i+'" size="20" name="p_scnt" value="" placeholder="Total Harga" /></label>&nbsp <select name="obat[]" id="obat" class="form-control" onchange="runObat(); kali();"><option value="" selected>PILIH OBAT</option><option class="divider" disabled>===================================</option><option class="divider" disabled>OBAT GENERIK</option><option value="Amoxicillin 500mg">Amoxicillin 500mg</option><option value="Ampicillin 500mg">Ampicillin 500mg</option><option value="Antalgin 500mg">Antalgin 500mg</option><option value="Dexamethasone 0,5mg">Dexamethasone 0,5mg</option><option value="Ibuprofen 400mg">Ibuprofen 400mg</option><option value="Paracetamol 500mg">Paracetamol 500mg</option><option value="Neuralgin">Neuralgin</option><option value="Antasida">Antasida</option><option value="CTM">CTM</option><option value="Iodin Povidon">Paracetamol 500mg</option><option value="Asam Mefenamat 500 mg">Asam Mefenamat 500 mg</option><option value="Ranitidin 150 mg">Ranitidin 150 mg</option><option class="divider" disabled>OBAT BEBAS</option><option value="Alkohol 70%">Alkohol 70%</option><option value="Kain Kasa">Kain Kasa</option><option value="Paramex">Paramex</option><option value="Panadol">Panadol</option><option value="Mixagrip">Mixagrip</option><option value="Minyak Telon Caplang 60ml">Minyak Telon Caplang 60ml</option><option value="Insto Tetes Mata">Insto Tetes Mata</option><option value="Bodrex">Bodrex</option><option value="Neurobion 5000mg">Neurobion 5000mg</option><option value="Cendo Xytrol Salep Mata 3,5 g">Cendo Xytrol Salep Mata 3,5 g</option><option value="Promag">Promag</option><option value="Neo Entrostop">Neo Entrostop</option><option value="Ponstan 500 mg">Ponstan 500 mg</option><option value="Pil KB Andalan">Pil KB Andalan</option><option value="Decolsin Sirup 60 ml">Decolsin Sirup 60 ml</option></select>&nbsp <a href="#" id="remParagraf">Hapus</a></p>')
				.appendTo(scntDiv);
                i++;
                return false;
        });
        
        $('#remParagraf').live('click', function() { 
                if( i > 2 ) {
                        $(this).parents('p').remove();
                        i--;
                }
                return false;
        });
});

</script>
<script>
function kali() {

			var a;
			a = 'kolom';
			var b;
			b = 'kol';
            var Hrg_Satuan = document.getElementById(a).value;
            var Jml_Beli = document.getElementById(b).value;
            var total = parseInt(Hrg_Satuan) * parseInt(Jml_Beli);
            if (!isNaN(total)) {
                document.getElementById('hasil').value = total;
            }
        }
</script>

<script>
function runObat() {
		
	var cek = document.getElementById("obat");
	if(cek.value == "Amoxicillin 500mg")
		document.getElementById("kolom").value = 6000;
	
	if(cek.value == "Ampicillin 500mg")
		document.getElementById("kolom").value = 5500;

	if(cek.value == "Antalgin 500mg")
		document.getElementById("kolom").value = 2500;

	if(cek.value == "Dexamethasone 0,5mg")
		document.getElementById("kolom").value = 1500;

	if(cek.value == "Ibuprofen 400mg")
		document.getElementById("kolom").value = 4000;

	if(cek.value == "Paracetamol 500mg")
		document.getElementById("kolom").value = 5000;

	if(cek.value == "Neuralgin")
		document.getElementById("kolom").value = 6000;

	if(cek.value == "Antasida")
		document.getElementById("kolom").value = 2500;

	if(cek.value == "CTM")
		document.getElementById("kolom").value = 1500;

	if(cek.value == "Alkohol 70%")
		document.getElementById("kolom").value = 6000;

	if(cek.value == "Kain Kasa")
		document.getElementById("kolom").value = 1000;

	if(cek.value == "Iodin Povidon")
		document.getElementById("kolom").value = 4500;
	
	if(cek.value == "Paramex")
		document.getElementById("kolom").value = 2500;
	
	if(cek.value == "Panadol")
		document.getElementById("kolom").value = 2500;
	
	if(cek.value == "Mixagrip")
		document.getElementById("kolom").value = 2500;
	
	if(cek.value == "Minyak Telon Caplang 60ml")
		document.getElementById("kolom").value = 7500;
	
	if(cek.value == "Insto Tetes Mata")
		document.getElementById("kolom").value = 12500;
	
	if(cek.value == "Bodrex")
		document.getElementById("kolom").value = 2500;
	
	if(cek.value == "Neurobion 5000mg")
		document.getElementById("kolom").value = 23000;
	
	if(cek.value == "Cendo Xytrol Salep Mata 3,5 g")
		document.getElementById("kolom").value = 31000;
	
	if(cek.value == "Promag")
		document.getElementById("kolom").value = 5500;
	
	if(cek.value == "Neo Entrostop")
		document.getElementById("kolom").value = 6000;
	
	if(cek.value == "Asam Mefenamat 500 mg")
		document.getElementById("kolom").value = 4500;
	
	if(cek.value == "Ranitidin 150 mg")
		document.getElementById("kolom").value = 2500;
	
	if(cek.value == "Ponstan 500 mg")
		document.getElementById("kolom").value = 35000;
	
	if(cek.value == "Decolsin Sirup 60 ml")
		document.getElementById("kolom").value = 16000;
	
	if(cek.value == "Pil KB Andalan")
		document.getElementById("kolom").value = 7500;
	
	}
</script>
