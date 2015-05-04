<!DOCTYPE html>
<html lang="en">
<head>
  <title>./Hello World</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Scripts/Bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="Scripts/jquery.js"></script>
  <script type="text/javascript" src="Scripts/Bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(window).load(function()
		{
			$('#ppAwal').modal('show');
			$('#ppAwal').data('bs.modal').isShown = true;
		});
	</script>
  <style type="text/css">
	body { background:#EEE8AA }
	a { color:#8B4513 }
	a:focus { color:#8B4513}
	p { color:#8B4513 }
	.navbar-fixed-top { background:#F5DEB3 }
	.navbar-fixed-bottom { background:#DEB887 }
	.modal-backdrop { background:#8B4513 }
	.jumbotron{color: #DAA520; background: url('bg.jpg') no-repeat center center !important;}
	div { color:#8B4513 }
  </style>
  <script type="text/javascript" src="Scripts/Tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    theme: "modern",
	relative_urls : false,
	remove_script_host : false,
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ]
});
</script>
</head>
<body>

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


<!-- Modal Isi-->
<div class="modal fade" id="ppAwal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-console"></span> ./Hello World</h4>
      </div>
      <div class="modal-body">
				<?php 
				mysql_connect('localhost','root','');  
				mysql_select_db('cms');  
				$sqlTampil="select * from artikel Where no='$_GET[no]'";  
				$qryTampil=mysql_query($sqlTampil);  
				$dataTampil=mysql_fetch_array($qryTampil);  
				?> 
			  
				<div align="center"><h4><?php echo $dataTampil['judul']; ?></h4></div> 
				<br>
				<div align="left"><?php echo $dataTampil['head']; ?></div>
				<div align="left"><?php echo $dataTampil['isi']; ?></div> 
				<div align="right"><span class="glyphicon glyphicon-user"></span> <?php echo $dataTampil['kontrib']; ?></div>				
				<div align="right"><span class="glyphicon glyphicon-tags"></span>&nbsp <?php echo $dataTampil['kategori']; ?> &nbsp 
				<span class="glyphicon glyphicon-calendar"></span>&nbsp <?php echo $dataTampil['bulan']; ?>, <?php echo $dataTampil['tahun']; ?>
				</div> 	
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../CMS'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>	
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
				<td><div align="center"><strong>No</strong></div></td>
				<td><div align="center"><strong>Judul</strong></div></td> 
				<td><div align="center"><strong>Headline</strong></div></td> 
				<td><div align="center"><strong>Kategori</strong></div></td> 
				<td><div align="center"><strong>Bulan</strong></div></td> 
				<td><div align="center"><strong>Tahun</strong></div></td> 
				<td><div align="center"><strong>Kontributor</strong></div></td> 
				<td><div align="center"><strong>Pilih</strong></div></td>
			  </tr> 
		  <?php 
			  mysql_connect('localhost','root',''); 
			  mysql_select_db('cms'); 
			  $tampil="SELECT * FROM `artikel` ORDER BY  RAND() LIMIT 5;"; 
			  $qryTampil=mysql_query($tampil); 
			  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
		  ?> 
			   <tr> 
				<td><?php echo $dataTampil['no'] ; ?></td> 
				<td><?php echo $dataTampil['judul']; ?></td> 
				<td><?php echo $dataTampil['head']; ?></td> 
				<td><?php echo $dataTampil['kategori']; ?></td> 
				<td><?php echo $dataTampil['bulan']; ?></td> 
				<td><?php echo $dataTampil['tahun']; ?></td> 
				<td><?php echo $dataTampil['kontrib']; ?></td> 
				<td><div align="center">
				<a href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">Lihat</a></div>
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
						<td><div align="center"><strong>Judul</strong></div></td> 
						<td><div align="center"><strong>Bulan</strong></div></td> 
						<td><div align="center"><strong>Tahun</strong></div></td> 
						<td><div align="center"><strong>Kontributor</strong></div></td> 
						<td><div align="center"><strong>Pilih</strong></div></td>
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
						<td><div align="center"><strong><?php echo $dataTampil['judul']; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['bulan']; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['tahun']; ?></strong></div></td> 
						<td><div align="center"><strong><?php echo $dataTampil['kontrib']; ?></strong></div></td> 
						<td><div align="center">
						<a href="Artikel.php?no=<?php echo $dataTampil['no'] ; ?>">Lihat</a></div>
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

</body>
</html>