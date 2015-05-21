<html>
<?php
include ('cek.php');
?>
<head>
  <title>&nbsp ./Puskesmas &nbsp- &nbspPasien &nbsp|</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="icon" type="image/ico" href="../favicon.ico">
  <link rel="stylesheet" href="../Scripts/Bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Scripts/Validator/css/formValidation.css"/>
  <link rel="stylesheet" href="../Scripts/FakeLoader/fakeLoader.css">
  <script type="text/javascript" src="../Scripts/jquery.js"></script>
  <script type="text/javascript" src="../Scripts/Bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../Scripts/Tinymce/tinymce.min.js"></script>
  <script type="text/javascript" src="../Scripts/Validator/js/formValidation.js"></script>
  <script type="text/javascript" src="../Scripts/Validator/js/framework/bootstrap.js"></script>
  <script type="text/javascript" src="../Scripts/jquery.bootstrap.wizard.min.js"></script>
  <script type="text/javascript" src="../Scripts/FakeLoader/fakeLoader.min.js"></script>
<style> 
body {
	background:url('../Images/bg.jpg') no-repeat fixed top center;
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
background:url('../Images/bg-transparent.png') repeat top center;
margin:25px auto;
padding:5px;
width:95%;
}
.kolom {
background:url('../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:78%;
}
.headisi {
background:url('../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
.isi {
background:url('../Images/bg-transparent.png') repeat top center;
margin:10px auto;
padding:5px;
width:93%;
}
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

<!-- Tampil Modal #ppAwal -->
<script type="text/javascript">
		$(document).ready(function() {
    setTimeout(function() {
      $('#ppAwal').modal('show');
    }, 4500);
});
</script>

</head>
<body>
<div class="fakeloader"></div>

<!-- Modal #ppAwal -->
<div class="modal fade" id="ppAwal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
		
			<!-- Modal #ppAwal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel">
					<center><h3><img src="../Images/logo.jpg" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas</h3></center>
				</h4>
			</div>
			
			<!-- Modal #ppAwal Body -->
			<div class="modal-body" >
				
					<h4>./Selamat Datang</h4>
					<li>Harap Lengkapi Identitas diri Anda dengan Benar guna menunjang Kesehatan Anda.</li>
					<li>Harap Klik Menu 'Keluar' setiap kali Anda selesai menggunakan Sistem ini.</li>
					<li>Sebelum melakukan Pembayaran, Anda Bisa mengecek Info Pembayaran pada Menu Panel.</li>
					<li>Apabila mengalami Kesulitan Penginputan Data bisa kontak Resepsionis untuk Bantuan.</li>
			<br>
				<h5 align="left"><b><strong>TTD</strong></b></h5>
				<h5 align="left"><b><strong>Resepsionis</strong></b></h5>
			</div>
			
			<!-- Modal #ppAwal Footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="hero-unit">
			<h3><center><img src="../Images/logo.jpg" alt="Logo" width="70" height="90">&nbsp &nbsp &nbsp Aplikasi SIA Puskesmas</center></h3>
	</div>
	<div class="row">
	<div class="col-md-3">
	<div class="kolom"><center><h3>Panel Info</h3></center>
	<table class="table">
    <thead>
		<tr><th></th></tr>
		<tr><th><a href="../Pasien" style="text-decoration:none"><span class="glyphicon glyphicon-user"></span> &nbsp Info Akun</a></th></tr>
        <tr><th><a href="../Pasien" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> &nbsp Edit Akun</a></th></tr>
		<tr><th><a href="../Pasien" style="text-decoration:none"><span class="glyphicon glyphicon-usd"></span> &nbsp Info Pembayaran</a></th></tr>
		<tr><th><a href="../Keluar.php" style="text-decoration:none"><span class="glyphicon glyphicon-log-out"></span> &nbsp Keluar</a></th></tr>
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
	<h5><b>Selamat Datang, </b></h5>
	<center><h4><b>Informasi Akun</b><h4></center>
	<table class="table">
    <thead>
		<tr><th></th></tr>
		<tr><th><a href="../Pasien" style="text-decoration:none">Info Akun</a></th></tr>
        <tr><th><a href="../Pasien" style="text-decoration:none">Edit Akun</a></th></tr>
		<tr><th><a href="../Pasien" style="text-decoration:none">Info Pembayaran</a></th></tr>
    </thead>
	</table>
	
	</div>
	</div>	
	</div>
</div>
</body>
</html>