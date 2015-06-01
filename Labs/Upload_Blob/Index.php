<form method="post" action="upload.php"
enctype="multipart/form-data">

<?php
			mysql_connect("localhost","root","");
			mysql_select_db("puskesmas");
			$q = mysql_query("SELECT * FROM pegawai ORDER BY id_pegawai DESC LIMIT 1");
						$jumlah = mysql_num_rows($q);
						$data = mysql_fetch_array($q);

			if($jumlah <= 0)
				{ $NoUrut = 1;}		
			else{ $NoUrut = $data['id_pegawai'] + 1;}
			?>
			
<div class="form-group">
		
							<div class="form-group">
							<label class="col-md-3 control-label">ID Pegawai</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="id_pgw" class="form-control" value="<?php echo $NoUrut ?>" placeholder="ID Pegawai..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									</div>
								</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label">Kata Sandi</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="pass_pgw" id="pass_pgw" class="form-control" placeholder="Kata Sandi..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Pegawai</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="nm_pgw" id="nm_pgw" class="form-control" placeholder="Nama Pegawai..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
								<label class="col-xs-3 control-label">Jabatan</label>
									<div class="col-xs-5">
										<div class="radio">
											<label>
												<input type="radio" name="jbt_pgw" value="Admin" /> Admin 
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="jbt_pgw" value="Apoteker" /> Apoteker
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="jbt_pgw" value="Assist. Dokter" /> Assist. Dokter
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="jbt_pgw" value="Manajer" /> Manajer
											</label>
										</div>
										<div class="radio">
											<label>
												<input type="radio" name="jbt_pgw" value="Resepsionis" /> Resepsionis
											</label>
										</div>
									</div>
							</div>


Nama File: <input name="anu" type="file">

<input type="submit" value="UpLoad" name="submitbtn">
</form>