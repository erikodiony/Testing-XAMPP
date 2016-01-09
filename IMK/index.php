<!DOCTYPE html>
<html>
<head>
  <title>&nbsp ./BERDIKARI&nbsp PERSERO &nbsp- &nbspSelamat &nbspDatang &nbsp|</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="icon" type="image/ico" href="Images/logo.ico">
  <link rel="stylesheet" href="Scripts/Bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="Scripts/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="Scripts/NanoBar/nanobar.min.js"></script>
  <script type="text/javascript" src="Scripts/Bootstrap/js/bootstrap.min.js"></script>
	
<!-- Judul Marquee -->
<script>
(function titleMarquee() {
    document.title = document.title.substring(1)+document.title.substring(0,1);
    setTimeout(titleMarquee, 200);
})();
</script>


<!-- Konfig Halaman -->
<style type="text/css">
	body {heigth:100%; background: #ffffff no-repeat center top;}
	.modal-content {background-color: #FFFFFF;}
	.navbar-fixed-bottom { background:#256DFD; height: 115px; border: 3px solid #256DFD;}
	.navbar-fixed-top { background:url('Images/bg-transparent.png') repeat top center; height:100%;}
	.carousel-inner {height:650px}
	.carousel-caption {bottom:65px;}
	.carousel-indicators {bottom:125px;}
	.nav-tabs {border: 3px solid #256DFD;}
	.nav-tabs > li > a{ background-color:#66FD25; color:#082560; cursor: pointer;}
	.nav-tabs > li.active > a{background-color:#66FD25; color:#082560; cursor: pointer;}
	.carousel-indicators li{background-color: #000000;}
	.carousel-indicators .active {background-color: red;}
	.table td {text-align: center;}
</style>
</head>

<body>

<!-- Navbar Atas -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
	  <a class="navbar-brand">
	  <img style="max-width:325px; margin-top: -15px; "
             src="Images/logoAtas.gif"></a>
	</div>
	<div class="navbar-text navbar-right" style="margin-right: 15px; margin-top: 25px;"><h4 align="center" style="color:red"><strong>Senantiasa Memberi Kebutuhan Protein Terbaik Bagi Masyarakat</strong></h4></div>
  </div>
</nav>

<!-- Navbar Bawah -->
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
	<ul class="nav nav-tabs">
		<li role="presentation" class="active">
			<a href=""><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
		<li role="presentation" data-toggle="modal" data-target="#ppProduk">
			<a><span class="glyphicon glyphicon-thumbs-up"></span> Produk</a></li>
		<li role="presentation" data-toggle="modal" data-target="#ppVisi">
			<a><span class="glyphicon glyphicon-star"></span> Visi & Misi</a></li>
		<li role="presentation" data-toggle="modal" data-target="#ppTKami">
			<a><span class="glyphicon glyphicon-book"></span> Tentang Kami</a></li>
		<li role="presentation" data-toggle="modal" data-target="#ppTLogo">
			<a><span class="glyphicon glyphicon-pushpin"></span> Tentang Logo</a></li>
		<p class="navbar-text navbar-right"> 
		<a class="navbar-brand">
		  <img style="max-width:250px; margin-top: -108px; margin-right: 10px;"
             src="Images/logoBawah.gif">
		</a>
	</ul>
  </div>
</nav>


<div id="gambarGerak" class="carousel slide" data-ride="carousel" data-pause="false">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#gambarGerak" data-slide-to="0" class="active"></li>
    <li data-target="#gambarGerak" data-slide-to="1"></li>
	<li data-target="#gambarGerak" data-slide-to="2"></li>
	<li data-target="#gambarGerak" data-slide-to="3"></li>
	<li data-target="#gambarGerak" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="Images/slide-01.jpg" alt="...">
      <div class="carousel-caption">
        <h3>Selalu Memberikan Produk Olahan Daging terbaik bagi Masyarakat</h3>
      </div>
    </div>
    <div class="item">
      <img src="Images/slide-02.jpg" alt="...">
      <div class="carousel-caption">
        <h3>Peternakan yang Bersih dan Nyaman bagi Ternak</h3>
      </div>
    </div>
	<div class="item">
      <img src="Images/slide-03.jpg" alt="...">
      <div class="carousel-caption">
        <h3>Proses Pengolahan yang sudah Modern dan terjaga Kebersihannya</h3>
      </div>
    </div>
	<div class="item">
      <img src="Images/slide-04.jpg" alt="...">
      <div class="carousel-caption">
        <h3>Salah satu dari Beberapa Gerai Kami</h3>
      </div>
    </div>
	<div class="item">
      <img src="Images/slide-05.jpg" alt="...">
      <div class="carousel-caption">
        <h3>Salah satu Produk Daging Olahan Terbaik Kami</h3>
      </div>
    </div>
  </div>
</div>



<!-- Modal #ppProduk -->
<div class="modal fade" id="ppProduk" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-thumbs-up"></span> Produk</h4>
      </div>
      <div class="modal-body">
		<h4 align="center"><strong>Produk - Produk PT Berdikari (Persero)</strong></h4>
			<table class="table">
			<tr>
			<td><img src="Images/Product/s1.jpg" alt="..." style="width:225px;height:150px;"></td>
			<td><img src="Images/Product/s2.jpg" alt="..." style="width:225px;height:150px;"></td>
			<td><img src="Images/Product/s3.jpg" alt="..." style="width:225px;height:150px;"></td>
			</tr>
			<tr>
			<td><img src="Images/Product/s4.jpg" alt="..." style="width:225px;height:150px;"></td>
			<td><img src="Images/Product/s5.jpg" alt="..." style="width:225px;height:150px;"></td>
			<td><img src="Images/Product/s6.jpg" alt="..." style="width:225px;height:150px;"></td>
			</tr>
			</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal #ppVisi -->
<div class="modal fade" id="ppVisi" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-star"></span> Visi & Misi</h4>
      </div>
      <div class="modal-body">
		<div class="row">
		
				<div class="col-md-12" align="center">
					<h4 align="center"><strong>Visi & Misi Perusahaan</strong></h4>
					<div class="well well-md" align="left">
						<strong><h3>Visi</h3></strong>
						<p><b>
						Memberdayakan kehidupan dan kecerdasan bangsa dengan menyediakan pangan protein berkualitas.
						</b></p>
						<strong><h3>Misi</h3></strong>
						<p><b>
						Menjadi pemimpin industri pangan protein terbaik dan terpecaya melalui penciptaan nilai yang unggul bagi para pemangku kepentingan 
						</b></p>
					</div>
				</div>
		
		</div>
					
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal #ppTKami -->
<div class="modal fade" id="ppTKami" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-book"></span> Tentang Kami</h4>
      </div>
      <div class="modal-body">
		
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading" align="center"><strong>Sejarah Perusahaan</strong></div>
						<table>
						
						<p style="margin-left:10px; margin-right:10px; margin-top:10px; margin-bottom:10px;">
						PT Berdikari (Persero) semula bernama PT Pilot Proyek Berdikari (PT PP Berdikari), PT PP Berdikari dibentuk berdasarkan Keputusan Presidium Kabinet Ampera Republik Indonesia No. 01/EK/KEP/1966 tanggal 12 Agustus 1966, tertuang dalam Akte Pendirian No. 24 tanggal 15 Agustus 1966 oleh Notaris R. Soerojo Wongsowidjojo, SH.
						</p>
						<p style="margin-left:10px; margin-right:10px; margin-top:10px; margin-bottom:10px;">
						 Pada tanggal 7 April 2000 Perusahaan PT PP Berdikari resmi berubah status menjadi PT Berdikari (Persero) berdasarkan Peraturan Pemerintah No. 22 yang dituangkan dalam Akta No. 16 tanggal 22 Agustus 2000 oleh Notaris Betsil Untayana, SH serta disahkan melalui Keputusan Menteri Hukum dan Perundang-undangan Republik Indonesia No. C-22369HT.01.04-TH2000 tanggal 12 Oktober 2000.
						</p>
						</table>
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="panel panel-primary">
						<div class="panel-heading" align="center"><strong>Detail Perusahaan</strong></div>
						<table>
						
						<p style="margin-left:10px; margin-right:10px; margin-top:10px; margin-bottom:10px;">
						PT Berdikari (Persero) yang merupakan BUMN yang ditugaskan oleh pemerintah yang salah satunya turut serta berkontribusi mensukseskan program pemerintah untuk membantu meningkatkan penyediaan pangan hewani yang aman dan kesejahteraan peternak melalui kebijakan dan program pembangunan peternakan yang berdaya saing dan berkelanjutan dengan mengoptimalkan pemanfaatan sumber daya lokal.
						</p>
						<p style="margin-left:10px; margin-right:10px; margin-top:10px; margin-bottom:10px;">
						Tujuan khususnya adalah terjaminnya ketersediaan benih dan bibit ternak yang berkualitas, meningkatkan populasi dan produktivitas dan meningkatkan serta mempertahankan status kesehatan hewan, jaminan keamanan produk dan meningkatkan pelayanan prima kepada masyarakat.
						</p>
						</table>
					</div>
				</div>
			</div>
					
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal #ppTLogo -->
<div class="modal fade" id="ppTLogo" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-pushpin"></span> Tentang Logo</h4>
      </div>
       <div class="modal-body">
			<div class="row">
			
				<div class="col-md-12" align="center">
					<div id="logoGerak" class="carousel slide" data-ride="carousel" data-pause="false">
					  <!-- Indicators -->
						<ol class="carousel-indicators" style="bottom:-20px">
							<li data-target="#logoGerak" data-slide-to="0" class="active"></li>
							<li data-target="#logoGerak" data-slide-to="1"></li>
						</ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" style="height:125px">
						<div class="item active">
						  <img src="Images/logoAtas.gif" style="width:375px;height:135px;">
						</div>
						<div class="item">
						  <img src="Images/logoBawah.gif" style="width:200px;height:135px;">
						</div>
					  </div>
					</div>
				</div>
				
				<div class="col-md-12" align="center">
					<h4 align="center"><strong>Makna Logo</strong></h4>
					<div class="well well-md" align="left">
						<ul>
						<li><strong>Logo Membentuk Huruf “B”,</strong> ini sengaja dipakai untuk mengenalkan Nama Perusahaan kepada Khalayak Publik</li>
						<li><strong>Background Gambar Putih dan Warna Font Merah,</strong> untuk mengidentifikasikan bahwa Perusahaan adalah milik Negara / Kementrian Pertanian (BUMN). Dan Filosofi warna merah melambangkan spirit berdikari untuk selalu optimis dan berani menghadapi tantangan perubahan, warna putih melambangkan tekad berdikari untuk menjadi perusahaan yang “bersih” dan memberikan yang terbaik bagi bangsa.</li>
						<li><strong>Font Ukuran Kecil,</strong> untuk menunjukkan bahwa Perusahan adalah Low Profile / Kerendahan Diri</li>
						<li><strong>Warna Biru pada Gambar dan Matahari,</strong> melambangkan loyalitas dan profesionalisme yang tinggi, sedangkan <strong>Matahari</strong> sebagai impian Perusahaan menjadi pemimpin dalam Industri Pangan Protein Terbaik dan Terpecaya.</li>
						<li><strong>Sungai Berliuk (Infinity) pada Gambar,</strong> melambangkan optimisme untuk tumbuh berkembang dengan upaya yang kuat tanpa batas</li>
						<li><strong>Warna Hijau dan Kepala Sapi pada Gambar,</strong> melambangkan Komitmen Perusahaan dalam Bisnis Peternakan Hewan Khususnya Daging Sapi dan Hijau menunjukkan Keasrian tempat Peternakan dan Kondisi Perusahaan yang Damai.</li>
						<li><strong>Slogan Empowering Life,</strong> menunjukkan bahwa Perusahaan Berusaha Menjadi perusahaan yang mampu memberdayakan masyarakat, baik dari sektor Pengelolaan Awal (Peternak) Hingga pada proses Akhir (Pembeli).</li>
						</ul>
					</div>
				</div>
			</div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script>
var nanobar = new Nanobar();                  
function myLoop() {         
	var i = 1;  
   setInterval(function () {         
      i++;                   
      if (i < 5) {         
           nanobar.go(25*i);
      }                     
      else{i=1;}
   }, 1500)
}
myLoop();
	$('.carousel').carousel({
  interval: 6000
});
</script>