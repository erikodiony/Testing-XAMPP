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
	

<form id="FormEdit2" class="form-horizontal"  method="post">	
					<div class="hero-unit">
						<div class="form-group">
								<label class="col-xs-4 control-label">ID Pasien</label>
									<div class="col-xs-6 ">
										<input type="text" class="form-control" readonly name="id_psn" value="<?php echo $dataTampil['id_pasien']; ?>"/>
									</div>
						</div>
						
						<div class="form-group">				
								<label class="col-xs-4 control-label">Nama Pasien</label>
									<div class="col-xs-6 ">
										<input type="text" class="form-control" readonly name="nm_psn" value="<?php echo $dataTampil['nm_pasien']; ?>" />
									</div>
						</div>
						
						<div class="form-group">
								<label class="col-xs-4 control-label">Resep</label>
									<div class="col-xs-6 ">
										<textarea class="form-control" name="resep" rows="6" placeholder="Resep.."><?php echo $dataTampil['resep']; ?></textarea>
									</div>
						</div>
						
					</div>
</form>