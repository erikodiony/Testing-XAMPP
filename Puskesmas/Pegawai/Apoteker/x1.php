
<select class="form-control" id="name" name="name">
	<option value="" selected>Pilih Obat</option>
	<option class="divider" disabled>===================================</option>
	<option class="divider" disabled>OBAT GENERIK</option>
	<option class="divider" disabled>===================================</option>
		
		<!-- Looping #FormEdit2 Obat Generik -->						
			<?php  
			mysql_connect('localhost','root','');  
			mysql_select_db('puskesmas');  
			$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Generik' ORDER BY `nama_obat` ASC";  
			$qryTampil=mysql_query($sqlTampil); 
			?> 
		
			<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) {?> 

	<option value="<?php echo $dataTampil['nama_obat']?>"><?php echo $dataTampil['nama_obat']?></option>
		
			<?php } ?>

			<!-- Looping #FormEdit2 Obat Bebas -->
			<option class="divider" disabled>===================================</option>
			<option class="divider" disabled>OBAT BEBAS</option>
			<option class="divider" disabled>===================================</option>
			<?php  
			mysql_connect('localhost','root','');  
			mysql_select_db('puskesmas');  
			$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Bebas' ORDER BY `nama_obat` ASC";  
			$qryTampil=mysql_query($sqlTampil); 
			?> 
		
			<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) { ?> 

	<option value="<?php echo $dataTampil['nama_obat'] ; ?>"><?php echo $dataTampil['nama_obat'] ; ?></option>

			<?php } ?> 
	
</select>

 <input type="text" name="last_name" id="last_name" value="" placeholder="jmlbeli"/>
 <input type="text" name="kol" id="kol" value="" placeholder="hargasatuan"/>
 <input type="text" class="it" name="kol2" id="kol2_1" value="" placeholder="hargatot"/>
 <input type="text" name="stok1" id="stok1" value="" placeholder="stok"/>
 <input type="text" name="stok2" id="stok2" value="" placeholder="stok2"/>
 <input type="text" name="stok3" id="stok3" value="" placeholder="stok3"/>
 <button type="button" id="btnstok">SimpanStok</button>
 
 <br>
 
 <select class="form-control" id="name_1" name="name">
	<option value="" selected>Pilih Obat</option>
	<option class="divider" disabled>===================================</option>
	<option class="divider" disabled>OBAT GENERIK</option>
	<option class="divider" disabled>===================================</option>
		
		<!-- Looping #FormEdit2 Obat Generik -->						
			<?php  
			mysql_connect('localhost','root','');  
			mysql_select_db('puskesmas');  
			$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Generik' ORDER BY `nama_obat` ASC";  
			$qryTampil=mysql_query($sqlTampil); 
			?> 
		
			<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) {?> 

	<option value="<?php echo $dataTampil['nama_obat']?>"><?php echo $dataTampil['nama_obat']?></option>
		
			<?php } ?>

			<!-- Looping #FormEdit2 Obat Bebas -->
			<option class="divider" disabled>===================================</option>
			<option class="divider" disabled>OBAT BEBAS</option>
			<option class="divider" disabled>===================================</option>
			<?php  
			mysql_connect('localhost','root','');  
			mysql_select_db('puskesmas');  
			$sqlTampil="SELECT * FROM obat WHERE `j_obat` ='Bebas' ORDER BY `nama_obat` ASC";  
			$qryTampil=mysql_query($sqlTampil); 
			?> 
		
			<?php  while ($dataTampil=mysql_fetch_array($qryTampil)) { ?> 

	<option value="<?php echo $dataTampil['nama_obat'] ; ?>"><?php echo $dataTampil['nama_obat'] ; ?></option>

			<?php } ?> 
	
</select>
<br>
 <input type="text" name="last_name" id="last_name_1" value="" />
<br>
 <input type="text" name="kol" id="kol_1" value="" />
<br>
 <input type="text" class="it" name="kol2" id="kol2_2" value="" />
 
 



<div class="col-md-5 inputGroupContainer">
										<div class="input-group">
										<input type="text" name="total" readonly id="total" class="form-control" placeholder="Total Harga Keseluruhan....">
										<span class="input-group-addon"><span class="glyphicon glyphicon-usd"></span></span>
										</div>
									</div>
									<div class="col-md-3 inputGroupContainer">
										<button type="button" class="btn btn-default" onclick="tot();">Total</button>
									</div>

	<script type="text/javascript" src="../../Scripts/jquery.js"></script>

<script>
$("#btnstok").on('click',function() {
    var stokupdate = $("#stok2").val(); 
	var nm_obt = $("#name option:selected").val();
	var quey = 'stok_obat='+stokupdate+'&nama_obat='+nm_obt;
		$.ajax({
			type:'POST',
			data:quey,
			url:'x4.php',
			success:function(data) {
			$("#stok3").val(data); 
			$('#name').prop('disabled', true);
    }
  });
   
});
</script>
	
<script>
$("#name").on('change',function(e) {
  e.preventDefault();
  var nm_obt = $("#name").val(); 
  var query = 'nama_obat='+nm_obt;
  $.ajax({
    type:'POST',
    data:query,
    url:'cekHargaAJAX.php',
    success:function(data) {
     $("#kol").val(data); 
	var a = $("#last_name").val();
	var b = $("#kol").val();
	$("#kol2_1").val(a*b);
    }
  });
  
  var stok_obt = $("#name").val(); 
  var stok = 'nama_obat='+stok_obt;
  $.ajax({
    type:'POST',
    data:stok,
    url:'x3.php',
    success:function(data) {
     $("#stok1").val(data); 
	var c = $("#last_name").val();
	var d = $("#stok1").val();
	$("#stok2").val(d-c);
    }
  });
});
</script>

<script>
$("#last_name").keyup(function(){
	var a = $("#last_name").val();
	var b = $("#kol").val();
	$("#kol2_1").val(a*b);
	var c = $("#last_name").val();
	var d = $("#stok1").val();
	$("#stok2").val(d-c);
});
</script>

<script>
$("#name_1").on('change',function(e) {
  e.preventDefault();
  var nm_obt_1 = $("#name_1").val(); 
  var query_1 = 'nama_obat='+nm_obt_1;
  $.ajax({
    type:'POST',
    data:query_1,
    url:'cekHargaAJAX.php',
    success:function(data) {
     $("#kol_1").val(data); 
	var a_1 = $("#last_name_1").val();
	var b_1 = $("#kol_1").val();
	$("#kol2_2").val(a_1*b_1);
    }
  });
});
</script>

<script>
$("#last_name_1").keyup(function(){
	var a_1 = $("#last_name_1").val();
	var b_1 = $("#kol_1").val();
	$("#kol2_2").val(a_1*b_1);
});
</script>

<script>
	function tot()
		{
			var jumlahIT = document.getElementsByClassName("it");
			var total = 0;
			for(var i = 0; i < jumlahIT.length; i++)
				{
			total = total + parseFloat(document.getElementById("kol2_"+(i+1)).value);
				}
			document.getElementById('total').value = total;
			return total;
		}
</script>


<button type="submit" id="x">as</button>

<script>
$("#x").on('click',function() {
     alert('Hello'); 
});
</script>