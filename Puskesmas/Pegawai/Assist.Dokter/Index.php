<html>
<?php
include ('cek.php');
	mysql_connect('localhost','root',''); 
	mysql_select_db('puskesmas');
	$sqlTampil="select * from pasien";  
	$qryTampil=mysql_query($sqlTampil);  
	$dataTampil=mysql_fetch_array($qryTampil);  
?>
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
.kolom {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:78%;
}
.headisi {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
.isi {
background:url('../../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
</style>

<!-- Keterangan Kursor -->
<script>
$(document).ready(function(){
    $('[data-toggle="intip"]').tooltip();   
});
</script>

<!-- Konfig Validasi -->
<style type="text/css"> 
#formDaftar .inputGroupContainer .form-control-feedback,
#formDaftar .selectContainer .form-control-feedback {
    top: 0;
    right: -20px; }
</style>

<!-- Judul Marquee -->
<script>
(function titleMarquee() {
    document.title = document.title.substring(1)+document.title.substring(0,1);
    setTimeout(titleMarquee, 200);
})();
</script>

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

</head>
<body>
<div class="fakeloader"></div>

<!-- Modal #ppBantuan -->
<div class="modal fade" id="ppBantuan" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
		
			<!-- Modal #ppBantuan Header -->
			<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-question-sign"></span> Bantuan</h4>
			</div>
			
			<!-- Modal #ppBantuan Body -->
			<div class="modal-body" >
				
					<h4>./Bantuan</h4>
					<li>Selalu Cek Data Transaksi yg telah dilakukan tiap Pasien.</li>
					<li>Harap Selalu Pantau aktifitas Pasien dalam Pelayanan Puskesmas.</li>
					<li>Harap Klik Menu 'Keluar' setiap kali Anda selesai menggunakan Sistem ini.</li>
					<li>Setelah Pasien melakukan Pembayaran, Selalu lakukan Refresh pada Sistem ini.</li>
					
			<br>
				<h5 align="left"><b><strong>TTD</strong></b></h5>
				<h5 align="left"><b><strong>Manajer</strong></b></h5>
			</div>
			
			<!-- Modal #ppBantuan Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal #ppPeriksa -->
<div class="modal fade" id="ppPeriksa" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
		
			<!-- Modal #ppPeriksa Header -->
			<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-eye-open"></span> Pantauan</h4>	
				<div align="left">Harap selalu menggunakan Nama Lengkap Pasien ketika melakukan Pendaftaran !</div>
			</div>
			
			<!-- NoUrut ID Pasien #formDaftar -->
			<?php
			mysql_connect("localhost","root","");
			mysql_select_db("puskesmas");
			$q = mysql_query("SELECT * FROM pasien ORDER BY id_pasien DESC LIMIT 1");
						$jumlah = mysql_num_rows($q);
						$data = mysql_fetch_array($q);

			if($jumlah <= 0)
				{ $NoUrut = 1001;}		
			else{ $NoUrut = $data['id_pasien'] + 1;}
			?>
			
			<!-- Password Acak -->
			<?php
			function randomPassword() {
				$alphabet = "0123456789";
				$pass = array(); //remember to declare $pass as an array
				$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
				for ($i = 0; $i < 3; $i++) {
					$n = rand(0, $alphaLength);
					$pass[] = $alphabet[$n];
				}
				return implode($pass); //turn the array into a string
			}
			?>

			<!-- Modal #ppPeriksa Body -->
			<div class="modal-body" >
				
				<form id="formDaftar" class="form-horizontal" action="CekDaftarPasien.php" method="post">
					<div class="col-md-9 col-md-offset-1">
						<h3>./Halaman Masuk Pasien</h3> 
					</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Nama Pasien</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="nm_psn" class="form-control" placeholder="Nama Pasien..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">ID Pasien</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="id_psn" id="id_psn" class="form-control" value="<?php echo $NoUrut ?>" placeholder="ID Pasien..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Kata Sandi</label>
								<div class="col-md-6 inputGroupContainer">
									<div class="input-group">
									<input type="text" name="pass_psn" id="pass_psn" class="form-control" value="<?php echo randomPassword(); ?>" placeholder="Kata Sandi..">
									<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									</div>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" id="captchaOperation"></label>
								<div class="col-md-3 inputGroupContainer">
									<input type="text" class="form-control" name="captcha" />
								</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-3 col-md-9">
								<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp Daftar</button>
							</div>
						</div>
				</form>
					
			</div>
			
			<!-- Modal #ppPeriksa Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal #ppPantauan -->
<div class="modal fade" id="ppPantauan" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
		
			<!-- Modal #ppPantauan Header -->
			<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span> Hapus Pasien</h4>
			</div>
			
			<!-- Modal #ppPantauan Body -->
			<div class="modal-body" >
				
			<h4>./List Pasien</h4>
		<table class="table table-striped"  > 
			  <tr>
				<td><div align="center"><strong><span class="glyphicon glyphicon-sort"></span></strong></div></td>
				<td><div align="center"><strong><span class="glyphicon glyphicon-globe"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-bullhorn"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-tags"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-time"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-calendar"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
			  </tr> 
		  <?php 
			  mysql_connect('localhost','root',''); 
			  mysql_select_db('puskesmas'); 
			  $tampil="select * from pasien ORDER BY id_pasien ASC "; 
			  $qryTampil=mysql_query($tampil); 
			  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
		  ?> 
			   <tr> 
				<td><?php echo $dataTampil['id_pasien'] ; ?></td> 
				<td><?php echo $dataTampil['nm_pasien']; ?></td> 
				<td><?php echo $dataTampil['pass_pasien']; ?></td> 
				<td><?php echo $dataTampil['jam_masuk']; ?></td> 
				<td><?php echo $dataTampil['tgl_masuk']; ?></td> 
				<td><?php echo $dataTampil['jam_keluar']; ?></td> 
				<td><?php echo $dataTampil['tgl_keluar']; ?></td> 
				<td><div align="center">
				<a href="cekHapusPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span class="glyphicon glyphicon-trash"></span></a></div>
				</td>  
			  </tr> 
		<?php } ?> 
		</table>
			
			</div>
			
			<!-- Modal #ppPantauan Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="hero-unit">
			<h3><center><img src="../../Images/logo.jpg" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas</center></h3>
	</div>
	<div class="row">
	<div class="col-md-3">
	<div class="kolom"><center><h3><span class="glyphicon glyphicon-dashboard"></span>&nbsp Panel Info</h3></center>
	<table class="table">  
    <thead>
		<tr><th></th></tr>
		<tr><th><a href="../Assist.Dokter" style="text-decoration:none"><span class="glyphicon glyphicon-stats"></span> &nbsp Statistik Pasien</a></th></tr>
		<tr><th><a href="../../Pasien" style="text-decoration:none"><span class="glyphicon glyphicon-flag"></span> &nbsp Riwayat</a></th></tr>
		<tr><th><a href="" style="text-decoration:none" data-toggle="modal" data-target="#ppBantuan"><span class="glyphicon glyphicon-question-sign"></span> &nbsp Bantuan</a></th></tr>
		<tr><th><a href="../../Keluar.php" style="text-decoration:none"><span class="glyphicon glyphicon-log-out"></span> &nbsp Keluar</a></th></tr>
	</thead>
	</table>
	</div>
	</div>
	<div class="col-md-9">
	<div class="headisi">
	<center><h4><marquee behavior="scroll" direction="left" scrollamount="3" scrolldelay="20" width="80%">
<span>./Selamat Datang di Pelayanan SIA Puskesmas Kami, Untuk Informasi lebih lanjut bisa Kontak Resepsionis (Rawat Jalan: 08.00 - 15.00 Senin s/d Sabtu. | 08.00-12.00 Minggu. | Hari Besar Tutup.) </span>
</marquee></h4></center>
</div>
	<div class="isi">
	<h5><b><?php echo "<p>Selamat Datang, ".$_SESSION['level']." (".$_SESSION['nama'].")</p>";?></b></h5>
	<h5><b><?php date_default_timezone_set("Asia/Jakarta"); echo "Tanggal : " . date('d-m-Y')."</br>Pukul : " . date('H:i:s');?></b></h5>
	<center><h4><b>Statistik Pasien</b><h4></center>
		
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<!-- HideMenu Pantauan #poliGigi-->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none">
				<span class="glyphicon glyphicon-eye-open"></span> Pantauan Poli Gigi</a> 
			</h4>
			</div>
				<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'x' AND `r_rawat` = 'Poli Gigi'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
				
				
				</div>
				</div>
	</div>
	
<!-- HideMenu Pantauan #poliKesehatanIbuAnak-->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingTwo">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="text-decoration:none">
				<span class="glyphicon glyphicon-eye-open"></span> Pantauan Poli Kesehatan Ibu Anak</a> 
			</h4>
			</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `tgl_masuk`, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'x' AND `r_rawat` = 'Poli Kesehatan Ibu Anak'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
				
				
				</div>
				</div>
	</div>
	
	<!-- HideMenu Pantauan #poliMata-->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingThree">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="text-decoration:none">
				<span class="glyphicon glyphicon-eye-open"></span> Pantauan Poli Mata</a> 
			</h4>
			</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'x' AND `r_rawat` = 'Poli Mata'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
				
				
				</div>
				</div>
	</div>
	
	<!-- HideMenu Pantauan #poliTHT-->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingFour">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" style="text-decoration:none">
				<span class="glyphicon glyphicon-eye-open"></span> Pantauan Poli THT</a> 
			</h4>
			</div>
				<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'x' AND `r_rawat` = 'Poli THT'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
				
				
				</div>
				</div>
	</div>
	
	<!-- HideMenu Pantauan #poliUmum-->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingFive">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="true" aria-controls="collapseFive" style="text-decoration:none">
				<span class="glyphicon glyphicon-eye-open"></span> Pantauan Poli Umum</a> 
			</h4>
			</div>
				<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'x' AND `r_rawat` = 'Poli Umum'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
				
				
				</div>
				</div>
	</div>
	
<!-- HideMenu Riwayat -->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingSix">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix" style="text-decoration:none">
				<span class="glyphicon glyphicon-flag"></span> Riwayat</a>
			</h4>   
			</div>
				<div id="collapseSix" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingSix">
					<div class="panel-body">
						
						<div role="tabpanel">
						<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="#TabPoliGigi" aria-controls="home" role="tab" data-toggle="tab">Poli Gigi</a></li>
								<li role="presentation"><a href="#TabPoliKIA" aria-controls="profile" role="tab" data-toggle="tab">Poli Kesehatan Ibu Anak</a></li>
								<li role="presentation"><a href="#TabPoliMata" aria-controls="messages" role="tab" data-toggle="tab">Poli Mata</a></li>
								<li role="presentation"><a href="#TabPoliTHT" aria-controls="settings" role="tab" data-toggle="tab">Poli THT</a></li>
								<li role="presentation"><a href="#TabPoliUmum" aria-controls="settings" role="tab" data-toggle="tab">Poli Umum</a></li>
							</ul>

						<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="TabPoliGigi">
								<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `tgl_masuk`, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'Tuntas' AND `r_rawat` = 'Poli Gigi'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
								</div>
								<div role="tabpanel" class="tab-pane" id="TabPoliKIA">
									<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `tgl_masuk`, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'Tuntas' AND `r_rawat` = 'Poli Kesehatan Ibu Anak'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
								</div>
								<div role="tabpanel" class="tab-pane" id="TabPoliMata">
								<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `tgl_masuk`, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'Tuntas' AND `r_rawat` = 'Poli Mata'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
								</div>
								<div role="tabpanel" class="tab-pane" id="TabPoliTHT">
								<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `tgl_masuk`, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'Tuntas' AND `r_rawat` = 'Poli THT'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
								</div>
								<div role="tabpanel" class="tab-pane" id="TabPoliUmum">
								<table class="table table-striped"> 
						<thead>
						<tr>
						<td><strong><div align="center"><span class="glyphicon glyphicon-user"></span>&nbsp ID Pasien</div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-Time"></span>&nbsp Masuk</span></div></strong></td> 
						<td><strong><div align="center"><span class="glyphicon glyphicon-calendar"></span>&nbsp Masuk</span></div></strong></td>
						
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Input Identitas" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pemeriksaan Dokter" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembelian Obat" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Pembayaran" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span data-toggle="intip" title="Proses Cetak Struk/Brosur" class="glyphicon glyphicon-hourglass"></span></div></strong></td>
						<td><strong><div align="center"><span class="glyphicon glyphicon-cog"></span></div></strong></td>
						</tr></thead>
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('puskesmas'); 
					  $tampil="SELECT pasien.id_pasien, `tgl_masuk`, `jam_masuk`, `1_Edit`, `2_Dokter`,`3_Apotek`,`4_Bayar`,`5_Cetak`
					FROM proses, pasien WHERE proses.id_pasien=pasien.id_pasien AND `1_Edit` = 'Tuntas' AND `2_Dokter` = 'Tuntas' AND `r_rawat` = 'Poli Umum'
					ORDER BY pasien.id_pasien;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><?php echo $dataTampil['id_pasien'] ; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['jam_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><?php echo $dataTampil['tgl_masuk'] ; ?></strong></div></td>
						<td><div align="center"><strong><label id="text1"><?php echo $dataTampil['1_Edit'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text2"><?php echo $dataTampil['2_Dokter'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text3"><?php echo $dataTampil['3_Apotek'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text4"><?php echo $dataTampil['4_Bayar'] ; ?></label></strong></div></td>
						<td><div align="center"><strong><label id="text5"><?php echo $dataTampil['5_Cetak'] ; ?></label></strong></div></td>
						<td><div align="center"><strong>
						<a href="TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>" onclick="window.open('TambahDataPemeriksaan.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>', 'newwindow', 'width=500, height=1000'); return false;"><span data-toggle="intip" title="Tambah Data Pemeriksaan" class="glyphicon glyphicon-plus"></span></a>
						<a href="cekInfoPasien.php?id_pasien=<?php echo $dataTampil['id_pasien'] ; ?>"><span data-toggle="intip" title="Info Pasien" class="glyphicon glyphicon-info-sign"></span></a>
						</strong></div></td>
						</tr> 
						
			

						<?php } ?> 
						</table>
								</div>
							</div>
						</div>
			
					</div>
				</div>
	</div>

	</div>
	
	</div>
	</div>	
	</div>
</div>
</body>

<!-- ReadOnly r_rawat / dokter #formEdit -->
<script>
	document.getElementById('id_psn').readOnly = true;
	document.getElementById('pass_psn').readOnly = true;
</script>



<!-- KontrolValidasi #formDaftar -->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
	
    $('#formDaftar').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			nm_psn: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "Nama Pasien" !'
                    },
                }
            },
			id_psn: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "ID Pasien" !'
                    },
                }
            },
            pass_psn: {
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "Kata Sandi" !'
                    },
                }
            },
			captcha: {
                validators: {
                    callback: {
                        message: 'Jawaban Salah',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
        }
    });
});
</script>
</html>