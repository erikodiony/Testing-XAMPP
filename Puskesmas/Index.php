<!DOCTYPE html>
<html>
<head>
  <title>&nbsp ./Puskesmas &nbsp- &nbspSelamat &nbspDatang &nbsp|</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="icon" type="image/ico" href="favicon.ico">
  <link rel="stylesheet" href="Scripts/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Scripts/Validator/css/formValidation.css"/>
  <link rel="stylesheet" href="Scripts/FakeLoader/fakeLoader.css">
  <script type="text/javascript" src="Scripts/jquery.js"></script>
  <script type="text/javascript" src="Scripts/Bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="Scripts/Tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="Scripts/Validator/js/formValidation.js"></script>
  <script type="text/javascript" src="Scripts/Validator/js/framework/bootstrap.js"></script>
  <script type="text/javascript" src="Scripts/jquery.bootstrap.wizard.min.js"></script>
  <script type="text/javascript" src="Scripts/FakeLoader/fakeLoader.min.js"></script>
	
<!-- Judul Marquee -->
<script>
(function titleMarquee() {
    document.title = document.title.substring(1)+document.title.substring(0,1);
    setTimeout(titleMarquee, 200);
})();
</script>

<!-- FakeLoader -->
<script>
    $(document).ready(function(){
        $(".fakeloader").fakeLoader({
            timeToHide:3000,
            bgColor:"#2ecc71",
            spinner:"spinner2"
          });
       });
</script>

<!-- Tampil Modal #ppAwal -->
<script type="text/javascript">
		$(document).ready(function() {
    setTimeout(function() {
      $('#ppAwal').modal('show');
    }, 4500);
});
</script>

<!-- Konfig Carousel #gambargerak -->
<script type="text/javascript">
  var $ = jQuery.noConflict();
  $(document).ready(function() { 
      $('#gambargerak').carousel({ interval: 4000, cycle: true });
  }); 
</script>

<!-- Konfig Halaman -->
<style type="text/css">
	body {background: #000000 url('Images/bg.jpg') no-repeat center top;}
	form {background: #ffffff; height:100%; margin: 10;}
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
	h3 img {
	margin-left:235px;
			}
</style>

<!-- Konfig Carousel #gambargerak -->
<style type="text/css">
.item{
    text-align: center;
    width: auto;
}
.ukuran {
height: 300px;
}
.carousel {
width:100%;
margin:0 auto; 
}
</style>
</head>

<body>
<div class="fakeloader"></div>

<!-- Modal #ppAwal -->
<div class="modal fade" id="ppAwal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			
			<!-- Modal #ppAwal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">
				<h3><img src="Images/logo.jpg" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas
				</h3>
				</h4>
			</div>
			
			<!-- Modal #ppAwal Body -->
			<div class="modal-body">
				<div class="col-md-6">
					<div id="gambargerak" class="carousel slide" data-interval="4000">
  
					<!-- Indikator Carousel #gambargerak -->
					<ol class="carousel-indicators">
						<li data-target="#gambargerak" data-slide-to="0" class="active"></li>
						<li data-target="#gambargerak" data-slide-to="1"></li>
						<li data-target="#gambargerak" data-slide-to="2"></li>
						<li data-target="#gambargerak" data-slide-to="3"></li>
						<li data-target="#gambargerak" data-slide-to="4"></li>
					</ol>

					<!-- Isi Carousel #gambargerak -->
					<div class="carousel-inner">
						<div class="item active">
							<div style="background:url(Images/Gambar.jpg) center center; background-size:cover;" class="ukuran">
							</div>
								<div class="carousel-caption" style="color:yellow">
									<h4>Halaman Depan PUSKESMAS yang terlihat asri dan sejuk</h4>
								</div>
						</div>
						<div class="item">
							<div style="background:url(Images/Gambar2.jpg) center center; background-size:cover;" class="ukuran">
							</div>
								<div class="carousel-caption" style="color:yellow">
									<h4>Mendukung Program Pemerintah untuk pelayanan masyarakat Kurang Mampu</h4>
								</div>
						</div>
						<div class="item">
							<div style="background:url(Images/Gambar3.jpg) center center; background-size:cover;" class="ukuran">
							</div>
								<div class="carousel-caption" style="color:yellow">
									<h4>Pelayanan yang Ramah Tamah serta Membimbing Masyarakat untuk Hidup Sehat</h4>
								</div>
						</div>
						<div class="item">
							<div style="background:url(Images/Gambar4.jpg) center center; background-size:cover;" class="ukuran">
							</div>
								<div class="carousel-caption" style="color:yellow">
									<h4>Fasilitas yang lengkap guna mencapai kepuasan pelayanan kepada Pasien</h4>
								</div>
						</div>
						<div class="item">
							<div style="background:url(Images/Gambar5.jpg) center center; background-size:cover;" class="ukuran">
							</div>
								<div class="carousel-caption" style="color:yellow">
									<h4>Layanan Rawat Inap berfungsi untuk melayani Pasien dalam 24Jam</h4>
								</div>
							</div>
					</div>

					<!-- Kontrol Carousel #gambargerak -->
					<a class="left carousel-control" href="#gambargerak" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#gambargerak" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
					
					</div>
				</div>
			</div>
			
			<!-- Modal #ppAwal Isi -->
			<div>
				<h4 align="center"><strong>Selamat Datang!</strong>
				</h4> 
					<h5>Ini adalah <strong>"Aplikasi SISTEM INFORMASI ADMINISTRASI PUSKESMAS"</strong> yang mana Pelayanan PUSKESMAS <b>terdiri atas:</b> 
						<h4>
							<li>Poli Umum</li>
							<li>Poli Mata</li>
							<li>Poli Gigi</li>
							<li>Poli Kesehatan Ibu Anak</li>
							<li>Poli Gizi</li>
							<li>Pelayanan Obat</li>
						</h4>
						Silahkan Login ke sistem untuk menggunakan pelayanan PUSKESMAS ini secara maksimal!
					</h5>
				<br><br>
				<a href="Login/Pegawai.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp Masuk Sebagai Pegawai</button></a>
				<a href="Login/Pasien.php"><button class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp Masuk Sebagai Pasien</button></a>
			</div>
			<br><br>
			
			<!-- Modal #ppAwal Footer -->
			<div class="modal-footer">
				<div class="col-md-1">
					<img src="images/jkn.jpg">
				</div>
				<div class="col-md-1">
					<img src="images/jamkesmas.jpg">
				</div>
				<div class="col-md-3">
					<img src="images/askes.jpg">
				</div>
				<div class="col-md-4">
					<img src="images/kis.png">
				</div>
					<img src="images/bpjs.png">
			</div>
			
		</div>
	</div>
</div>

</body>
</html>