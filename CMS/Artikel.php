<!DOCTYPE html>
<?php
	include ('Index.php');
	mysql_connect('localhost','root','');  
	mysql_select_db('cms');
	$judul = $_GET['judul'];
	$sqlTampil="select * from artikel Where judul='$judul'";  
	$qryTampil=mysql_query($sqlTampil);  
	$dataTampil=mysql_fetch_array($qryTampil);  
?>
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
$(document).on('focusin', function(e) {
    if ($(event.target).closest(".mce-window").length) {
        e.stopImmediatePropagation();
    }
});
</script>
</head>
<body>


	

<!-- ModalMain #ppAwal -->
<div class="modal fade" id="ppAwal" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

<!-- Header MainModal #ppAwal -->     
	<div class="modal-header">
			<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-console"></span> ./Hello World</h4>
		 
			
			
		<div align="center"><h4><?php echo $dataTampil['judul']; ?></h4></div> 
		<div align="left"><?php echo $dataTampil['head']; ?></div>
	</div>

<!-- Isi MainModal #ppAwal -->
	<div class="modal-body">
		<div align="left"><?php echo $dataTampil['isi']; ?></div> 
		<div align="right"><span class="glyphicon glyphicon-user"></span> <?php echo $dataTampil['kontrib']; ?></div>				
		<div align="right"><span class="glyphicon glyphicon-tags"></span> 
		<a href="" style="text-decoration:none" data-dismiss="modal" data-toggle="modal" data-target="#ppKategori">&nbsp Kategori</a>
		&nbsp&nbsp
		<span class="glyphicon glyphicon-calendar"></span>&nbsp 
		<?php echo $dataTampil['bulan']; ?>&nbsp<?php echo $dataTampil['tahun']; ?>
		</div> 	
		<div align="center"><a href="" style="text-decoration:none" data-dismiss="modal" data-toggle="modal" data-target="#ppLain">
		<b><span class="glyphicon glyphicon-arrow-right"></span> Lihat Artikel lainnya <span class="glyphicon glyphicon-arrow-left"></span></b></a></div>
	</div>

<!-- Footer MainModal #ppAwal -->
      <div class="modal-footer">
		<form class="form-horizontal" action="cekKomentar.php" method="post">	
		<div class="input-group">
		<div class="form-group">
			<label class="col-md-2 control-label">Artikel</label>
			<div class="col-md-8">
				<div class="input-group">
				<input type="text" name="judul" readonly class="form-control" value="<?php echo $judul?>" aria-describedby="basic-addon2">
				<span class="input-group-addon" id="basic-addon2">
				<span class="glyphicon glyphicon-globe"></span></span>
				</div>
			</div>
			
		</div>
		<div class="form-group">
			<label class="col-md-2 control-label">Komentar</label>
			<div class="col-md-8">
				
				<div class="input-group">
				<input type="text" name="mail" class="form-control" placeholder="Isi E-Mail Anda..." aria-describedby="basic-addon2">
				<textarea class="form-control" name="isikom" rows="15" placeholder="Isi Komentar..."></textarea>
				<span class="input-group-addon" id="basic-addon2">
				<span class="glyphicon glyphicon-edit"></span></span>
				</div>
				
				
			</div>
			<div class="col-md-1 col-md-offset-2">
				<br>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span>&nbsp Kirim</button>
			</div>
		</div>
		</div>
		</form>
		
		<?php 
		$sqlTampil="SELECT `mail`, `isikom`
					FROM komentar, artikel WHERE artikel.judul = '$judul' AND komentar.judul=artikel.judul
					ORDER BY `urutan`; ";  
		$qryTampil=mysql_query($sqlTampil);  
		while ($dataTampil=mysql_fetch_array($qryTampil)) {
		?>
				<br>
				<div class="col-md-1"></div>
				<div class="col-md-11">
				<div align="left">=======================================================================================</div> 
					<div align="left"><strong><span class="glyphicon glyphicon-user"></span> 
					<?php echo $dataTampil['mail']; ?></strong></div>
				<div align="left">=======================================================================================</div> 
					<div align="left"><strong><?php echo $dataTampil['isikom']; ?></strong></div>
				<div align="left">-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-</div>						
				<br>
				</div>
		<?php } ?>
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../CMS'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>	
	  </div>
  </div>
</div>
</div>


<!-- Modal -->
<!-- Modal #ppLain -->
<div class="modal fade" id="ppLain" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-console"></span> ./Hello World</h4>
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
			  $tampil="SELECT * FROM `artikel` ORDER BY  RAND();"; 
			  $qryTampil=mysql_query($tampil); 
			  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
		  ?> 
				<tr> 
				<td><div align="center"><strong><a style="text-decoration:none" href="Artikel.php?judul=<?php echo $dataTampil['judul'] ; ?>">
				<?php echo $dataTampil['judul']; ?></a></strong></div></td> 
				<td><div align="center"><strong><?php echo $dataTampil['kategori']; ?></strong></div></td> 
				<td><div align="center"><strong><?php echo $dataTampil['kontrib']; ?></strong></div></td> 
				<td><div align="center"><strong><?php echo $dataTampil['bulan']; ?>, <?php echo $dataTampil['tahun']; ?></strong></div></td> 
				<td><div align="center">
				<a href="Artikel.php?judul=<?php echo $dataTampil['judul'] ; ?>"><span class="glyphicon glyphicon-eye-open"></span></a></div>
				</td>  
				</tr>  
		<?php } ?> 
		</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../CMS'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
      </div>
    </div>
  </div>
</div>




</body>
</html>