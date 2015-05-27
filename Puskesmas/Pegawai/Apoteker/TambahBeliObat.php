<head>
  <title>&nbsp ./Puskesmas &nbsp- &nbspPasien &nbsp|</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

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
<style> 
body {
	background:url('../../Images/bg.jpg') no-repeat fixed top center;
}
a { color:#000000 }
	label {color:#000000}
	a:focus { color:#000000}
	p { color:#000000 }
	.navbar-fixed-top { background:#F5DEB3 }
	.navbar-fixed-bottom { background:#DEB887 }
	.modal-backdrop { background:#000000 }
	div { color:#000000 }
	hr {
		width: 80%;
		height: 2px;
		margin-left: auto;
		margin-right: auto;
		background-color:#000000;
		color:#000000;
		border: 0 none;
		margin-top: 5px;
		margin-bottom:15px;
		}
.hero-unit {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:25px auto;
padding:5px;
width:95%;
}
. {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:78%;
}
. {
margin:10px auto;
padding:5px;
width:93%;
}
.controls {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
.entry {
margin:10px auto;
padding:5px;
width:93%;
}
</style>

<!-- Konfig FormEdit -->
<style type="text/css">
#FormEdit .tab-content {
    margin-top: 20px;
}
</style>

<!--KontrolFakeLoader-->
<script>
    $(document).ready(function(){
        $(".fakeloader").fakeLoader({
            timeToHide:3000,
            bgColor:"#2ecc71",
            spinner:"spinner2"
            });
        });
</script>
 
<script>
		 $(function()
	  {
	   $(document).on('click', '.btn-add', function(e)
	   {
		e.preventDefault();

		var controlForm = $('.controls:first'),
		 currentEntry = $(this).parents('.entry:first'),
		 newEntry = $(currentEntry.clone()).appendTo(controlForm);

		newEntry.find('input').val('');
		controlForm.find('.entry:not(:last) .btn-add')
		 .removeClass('btn-add').addClass('btn-remove')
		 .removeClass('btn-success').addClass('btn-danger')
		 .html('<span class="glyphicon glyphicon-minus"></span>');
	   }).on('click', '.btn-remove', function(e)
	   {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	   });
	  }
	 );
	</script>


	<script type="text/javascript">
		$(window).load(function()
		{
			$('#ppAwal').modal('show');
			$('#ppAwal').data('bs.modal').isShown = true;
		});
	</script>
	

</head>
<body>

<?php  
      mysql_connect('localhost','root','');  
      mysql_select_db('puskesmas');  
      $sqlTampil="SELECT pasien.id_pasien, `nm_pasien`,`resep`
					FROM dokter, pasien WHERE dokter.id_pasien=pasien.id_pasien AND pasien.id_pasien='$_GET[id_pasien]';";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  
     ?> 
	

<!-- ModalMain #ppAwal -->
<div class="modal fade" id="ppAwal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

<!-- Header MainModal #ppAwal -->     
	<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-console"></span> ./Hello World</h4>
	</div>

<!-- Isi MainModal #ppAwal -->
	<div class="modal-body">
				
				
				<h4><strong>./Info Pasien</strong></h4>
	<!-- Form Boostrap Wizard #formEdit -->
				<form id="FormEdit" class="form-horizontal">
					<div class="isi2">
						<div class="form-group">
								<label class="col-xs-3 control-label">ID Pasien</label>
									<div class="col-xs-6 inputGroupContainer">
										<input type="text" class="form-control" readonly name="id_psn" value="<?php echo $dataTampil['id_pasien']; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label class="col-xs-3 control-label">Nama Pasien</label>
									<div class="col-xs-6 inputGroupContainer">
										<input type="text" class="form-control" readonly name="nm_psn" value="<?php echo $dataTampil['nm_pasien']; ?>" />
									</div>
							</div>
					
							<div class="form-group">
								<label class="col-xs-3 control-label">Resep</label>
									<div class="col-xs-6 inputGroupContainer">
										<textarea class="form-control" name="resep" rows="6" placeholder="Resep.."><?php echo $dataTampil['resep']; ?></textarea>
									</div>
							</div>
					</div>
				<div class="controls"> 
					<div class="entry input-group">
							
							<div class="form-group">			
								<label class="col-xs-5 control-label">Tambah / Hapus</label>
								<span class="col-xs-3 input-group-btn">
									<button class="btn btn-success btn-add" type="button">
										<span class="glyphicon glyphicon-plus"></span>
									</button>
								</span>
							</div>
							
							<div class="form-group">
								<label class="col-md-4 control-label">Nama Obat</label>
									<div class="col-md-6 inputGroupContainer">
										<input class="form-control" name="data[]" type="text" placeholder="Entry..." required>
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Jumlah Satuan</label>
									<div class="col-md-6 inputGroupContainer">
										<input class="form-control" name="data2[]" type="text" placeholder="Entry..." required>
									</div>
							</div>		
							<div class="form-group">
								<label class="col-md-4 control-label">Harga</label>
									<div class="col-md-6 inputGroupContainer">
										<input class="form-control" readonly name="data3[]" type="text" placeholder="Entry..." required>
									</div>
							</div>
						
					</div>
			   </div>
			   
				<div class="form-group">
					<div class="col-xs-5 col-xs-offset-1">
						<button type="submit" class="btn btn-default">Simpan</button>
					</div>
				</div>
	
		</form>
				
				
	</div>

<!-- Footer MainModal #ppAwal -->
      <div class="modal-footer">
		
		

        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../Apoteker'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>	
	  </div>
  </div>
</div>
</div>






</body>
</html>