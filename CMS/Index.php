<!DOCTYPE html>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("cms");
?>
<html lang="en">
<head>
  <title>./Hello World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Scripts/Bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="Scripts/jquery.js"></script>
  <script type="text/javascript" src="Scripts/Bootstrap/js/bootstrap.min.js"></script>
  <style type="text/css">
	body { background:#EEE8AA }
	a { color:#8B4513 }
	a:focus { color:#8B4513}
	p { color:#8B4513 }
	.navbar-fixed-top { background:#F5DEB3 }
	.navbar-fixed-bottom { background:#DEB887 }
	.modal-backdrop { background:#8B4513 }
	.jumbotron{color: #DAA520; background: url('Images/bg.jpg') no-repeat center center !important;}
	div { color:#8B4513 }
  </style>
</head>
<body>

<div class="container">
  <div class="jumbotron"><br>
    <h1><span class="glyphicon glyphicon-console"></span> ./Hello World</h1>      
    <p style="color:#FFD700">./Sekedar Berbagi Artikel yang tidak Menarik!</p>      
  </div>

<!-- Navbar Atas -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
	  <a class="navbar-brand">
	  <span class="glyphicon glyphicon-console"></span> &nbsp./Hello World</a>
		<div class="navbar-text">
		</div>
	</div>
	<p class="navbar-text navbar-right"><span class="glyphicon glyphicon-log-in"></span> &nbsp
	<a href="Cpanel" class="navbar-link" style="text-decoration:none">Masuk</a></p>
	<p class="navbar-text"><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="0">
<span>===============&nbsp&nbsp&nbsp&nbsp&nbsp ./Punya Artikel Menarik ?? Atau Ingin Menjadi Kontributor Artikel ?? Klik 
<a class="btn btn-primary btn-sm" href="CPanel/Daftar.php" role="button"><span class="glyphicon glyphicon-user"></span>&nbsp Daftar</a> &nbsp&nbsp&nbsp&nbsp&nbsp ===============</span>
</marquee></p>
  </div>
</nav>

<!-- Navbar Bawah -->
<nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
	<ul class="nav nav-tabs">
		<li role="presentation" class="active">
			<a href="../CMS"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
		<li role="presentation" data-toggle="modal" data-target="#ppPopuler">
			<a href="#ppPopuler"><span class="glyphicon glyphicon-thumbs-up"></span> Terpopuler</a></li>
		<li role="presentation" data-toggle="modal" data-target="#ppTerbaru">
			<a href="#ppTerbaru"><span class="glyphicon glyphicon-star"></span> Terbaru</a></li>
		<li role="presentation" data-toggle="modal" data-target="#ppKategori">
			<a href="#ppKategori"><span class="glyphicon glyphicon-list"></span> Kategori</a></li>
		<p class="navbar-text navbar-right"> 
		<a class="navbar-brand">
		  <span class="glyphicon glyphicon-console"></span> &nbsp./Hello World</a>
	</ul>
  </div>
</nav>


<!-- Isi -->
<div class="row">

<!-- Kolom1 Populer -->
	<div class="col-md-3" style="text-align:center">
		<div class="form-group">
			<label class="col-md-12 control-label"><h4><p><span class="glyphicon glyphicon-thumbs-up"></span> Terpopuler</p></h4></label>
				<div class="col-md-12">
					<div class="input-group">
					<?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('cms'); 
					  $tampil="SELECT * FROM `artikel` ORDER BY  RAND() LIMIT 8"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
					?> 
					<div align="left"><h4><strong><span class="glyphicon glyphicon-thumbs-up"></span> <a style="text-decoration:none" href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">
					<?php echo $dataTampil['judul']; ?></a></strong></h4></div>
					<?php } ?> 
				</div>
			</div>
		</div>
	</div>

<!-- Kolom2 Terbaru -->
	<div class="col-md-7" style="text-align:center">
		<div class="form-group">
			<label class="col-md-12 control-label"><h4><p><span class="glyphicon glyphicon-star"></span> Terbaru</h4></p></label>
				<div class="col-md-12">
					<div class="input-group">
						
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('cms'); 
					  $tampil="SELECT * FROM  artikel ORDER BY  `tahun` desc ,                                                                    
								Field (bulan,'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') 
								desc limit 5;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
					
						<div>==============================================================================</div> 
						<div align="center"><strong><span class="glyphicon glyphicon-star"></span><a style="text-decoration:none" href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">
						<?php echo $dataTampil['judul']; ?></a></strong></div>
						<div>==============================================================================</div> 
						<div align="left"><strong><span class="glyphicon glyphicon-user"></span> <?php echo $dataTampil['kontrib']; ?>,</strong></div>
						<br>
						<div class="col-md-12" align="left"><strong><?php echo $dataTampil['head']; ?></strong></div>
						<br>
						<div align="right"><strong><a style="text-decoration:none" href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">
						<span class="glyphicon glyphicon-arrow-right"></span> Lihat Selengkapnya</a></strong></div>
						<div align="right"><strong><span class="glyphicon glyphicon-calendar"></span> <?php echo $dataTampil['bulan']; ?>, <?php echo $dataTampil['tahun']; ?></strong></div>
						<div>-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=</div>						
						<br><br>
						<?php } ?> 
						
				</div>
			</div>
		</div>
	</div>

<!-- Kolom3 Kategori -->
	<div class="col-md-2" style="text-align:center">
		<div class="form-group">
			<label class="col-md-12 control-label"><h4><p><span class="glyphicon glyphicon-list"></span> Kategori</p></h4></label>
				<div class="col-md-12">
					<div class="input-group">
					<h4><p align="left"><span class="glyphicon glyphicon-zoom-in"></span>
					<a href="#ppKategori" style="text-decoration:none" data-toggle="modal" data-target="#ppKategori">&nbsp Komputer</a></p></h4>
					<h4><p align="left"><span class="glyphicon glyphicon-zoom-in"></span>
					<a href="#ppKategori" style="text-decoration:none" data-toggle="modal" data-target="#ppKategori">&nbsp Handphone</a></p></h4>
					<h4><p align="left"><span class="glyphicon glyphicon-zoom-in"></span>
					<a href="#ppKategori" style="text-decoration:none" data-toggle="modal" data-target="#ppKategori">&nbsp Gadget</a></p></h4>
					<h4><p align="left"><span class="glyphicon glyphicon-zoom-in"></span>
					<a href="#ppKategori" style="text-decoration:none" data-toggle="modal" data-target="#ppKategori">&nbsp SainsTek</a></p></h4>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<!-- Modal -->
<!-- Modal #ppPopuler -->
<div class="modal fade" id="ppPopuler" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-thumbs-up"></span> Terpopuler</h4>
      </div>
      <div class="modal-body">
		<h4>./List Artikel</h4>
		<table class="table table-striped"  > 
				<tr>
				<td><div align="center"><strong><span class="glyphicon glyphicon-globe"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-tags"></span></span></strong></div></td>
				<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-calendar"></span></strong></div></td>
				<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
				</tr> 
		  <?php 
			  mysql_connect('localhost','root',''); 
			  mysql_select_db('cms'); 
			  $tampil="SELECT * FROM `artikel` ORDER BY  RAND() LIMIT 5;"; 
			  $qryTampil=mysql_query($tampil); 
			  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
		  ?> 
				<tr> 
				<td><div align="center"><strong><a style="text-decoration:none" href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">
				<?php echo $dataTampil['judul']; ?></a></strong></div></td> 
				<td><div align="center"><strong><?php echo $dataTampil['kategori']; ?></strong></div></td> 
				<td><div align="center"><strong><?php echo $dataTampil['kontrib']; ?></strong></div></td> 
				<td><div align="center"><strong><?php echo $dataTampil['bulan']; ?>, <?php echo $dataTampil['tahun']; ?></strong></div></td> 
				<td><div align="center">
				<a href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>"><span class="glyphicon glyphicon-eye-open"></span></a></div>
				</td>  
				</tr>  
		<?php } ?> 
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal #ppTerbaru -->
<div class="modal fade" id="ppTerbaru" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-star"></span> Terbaru</h4>
      </div>
      <div class="modal-body">
		<h4>./List Artikel</h4>
						
						<table class="table table-striped"> 
						<tr>
						<td><div align="center"><strong><span class="glyphicon glyphicon-globe"></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-tags"></span></span></strong></div></td>
						<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-calendar"></span></strong></div></td>
						<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
						</tr>  
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('cms'); 
					  $tampil="SELECT * FROM  artikel ORDER BY  `tahun` desc ,                                                                    
								Field (bulan,'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') 
								desc;"; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><a style="text-decoration:none" href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">
					<?php echo $dataTampil['judul']; ?></a></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['kategori']; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['kontrib']; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['bulan']; ?>, <?php echo $dataTampil['tahun']; ?></strong></div></td> 
						<td><div align="center">
						<a href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>"><span class="glyphicon glyphicon-eye-open"></span></a></div>
						</td>  
						</tr>  
						<?php } ?> 
						</table>
						
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal #ppKategori -->
<div class="modal fade" id="ppKategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-list"></span> Kategori</h4>
      </div>
      <div class="modal-body">
		<h4>./List Artikel</h4>
<!-- isi #ppKategori -->	
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<!-- HideMenu Komputer -->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingOne">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none">
				<span class="glyphicon glyphicon-zoom-in"></span> Komputer</a>
			</h4>
			</div>
				<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				<div class="panel-body">
				
				 		<table class="table table-striped"> 
						<tr>
						<td><div align="center"><strong><span class="glyphicon glyphicon-globe"></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-calendar"></span></strong></div></td>
						<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
						</tr> 
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('cms'); 
					  $tampil="select * from artikel WHERE `kategori` = 'komputer' ORDER BY no ASC "; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><a style="text-decoration:none" href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">
					<?php echo $dataTampil['judul']; ?></a></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['kontrib']; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['bulan']; ?>, <?php echo $dataTampil['tahun']; ?></strong></div></td> 
						<td><div align="center">
						<a href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>"><span class="glyphicon glyphicon-eye-open"></span></a></div>
						</td>  
						</tr> 
						<?php } ?> 
						</table>
				
				
				</div>
				</div>
	</div>
<!-- HideMenu Handphone -->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingTwo">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none">
				<span class="glyphicon glyphicon-zoom-in"></span> Handphone</a>
			</h4>   
			</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				<div class="panel-body">
						
						<table class="table table-striped"> 
						<tr>
						<td><div align="center"><strong><span class="glyphicon glyphicon-globe"></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-calendar"></span></strong></div></td>
						<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
						</tr> 
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('cms'); 
					  $tampil="select * from artikel WHERE `kategori` = 'handphone' ORDER BY no ASC "; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><a style="text-decoration:none" href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">
					<?php echo $dataTampil['judul']; ?></a></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['kontrib']; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['bulan']; ?>, <?php echo $dataTampil['tahun']; ?></strong></div></td> 
						<td><div align="center">
						<a href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>"><span class="glyphicon glyphicon-eye-open"></span></a></div>
						</td>  
						</tr> 
						<?php } ?> 
						</table>
			
				</div>
				</div>
	</div>
<!-- HideMenu Gadget -->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingThree">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none">
				<span class="glyphicon glyphicon-zoom-in"></span> Gadget</a>
			</h4>
			</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				<div class="panel-body">
				
						<table class="table table-striped"> 
						<tr>
						<td><div align="center"><strong><span class="glyphicon glyphicon-globe"></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-calendar"></span></strong></div></td>
						<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
						</tr> 
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('cms'); 
					  $tampil="select * from artikel WHERE `kategori` = 'gadget' ORDER BY no ASC "; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><a style="text-decoration:none" href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">
					<?php echo $dataTampil['judul']; ?></a></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['kontrib']; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['bulan']; ?>, <?php echo $dataTampil['tahun']; ?></strong></div></td> 
						<td><div align="center">
						<a href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>"><span class="glyphicon glyphicon-eye-open"></span></a></div>
						</td>  
						</tr> 
						<?php } ?> 
						</table>
				
				</div>
				</div>
	</div>
<!-- HideMenu SainsTek -->
	<div class="panel panel-default">
		<div class="panel-heading" role="tab" id="headingFour">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseOne" style="text-decoration:none">
				<span class="glyphicon glyphicon-zoom-in"></span> SainTek</a>
			</h4>
			</div>
				<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
				<div class="panel-body">
				
						<table class="table table-striped"> 
						<tr>
						<td><div align="center"><strong><span class="glyphicon glyphicon-globe"></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></span></strong></div></td> 
						<td><div align="center"><strong><span class="glyphicon glyphicon-calendar"></span></strong></div></td>
						<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
						</tr> 
				  <?php 
					  mysql_connect('localhost','root',''); 
					  mysql_select_db('cms'); 
					  $tampil="select * from artikel WHERE `kategori` = 'sainstek' ORDER BY no ASC "; 
					  $qryTampil=mysql_query($tampil); 
					  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
				  ?> 
						<tr> 
						<td><div align="center"><strong><a style="text-decoration:none" href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">
					<?php echo $dataTampil['judul']; ?></a></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['kontrib']; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['bulan']; ?>, <?php echo $dataTampil['tahun']; ?></strong></div></td> 
						<td><div align="center">
						<a href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>"><span class="glyphicon glyphicon-eye-open"></span></a></div>
						</td>  
						</tr> 
						<?php } ?> 
						</table>
				
				</div>
				</div>
	</div>
<!-- isi #ppKategori Tutup-->
	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
      </div>
    </div>
  </div>
</div>
<br><br><br><br>
</body>
</html>
