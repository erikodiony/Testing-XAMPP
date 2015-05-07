<!DOCTYPE html>
<?php
include ('index.php');
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
  <link rel="stylesheet" href="../../Scripts/Bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="../../Scripts/jquery.js"></script>
  <script type="text/javascript" src="../../Scripts/Bootstrap/js/bootstrap.min.js"></script>
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
  
  <script type="text/javascript" src="../../Scripts/Tinymce/tinymce.min.js"></script>
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
			<h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-console"></span> ./Kelola Komentar</h4>
			<h5 align="center"><strong><a style="text-decoration:none" href="../../Artikel.php?judul=<?php echo $dataTampil['judul'] ; ?>" target="_blank">
					<span class="glyphicon glyphicon-globe"></span>&nbsp <?php echo $dataTampil['judul']; ?></a></strong></h5>
	</div>

<!-- Isi MainModal #ppAwal -->
	<div class="modal-body">
		<table class="table table-striped"> 
			<tr>
				<td><div align="left"><strong><span class="glyphicon glyphicon-user"></span></strong></div></td> 
				<td><div align="left"><strong><span class="glyphicon glyphicon-comment"></span></strong></div></td> 
				<td><div align="left"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td> 
			</tr> 
		<?php 
		$sqlTampil="SELECT `urutan`, komentar.judul, `mail`, `isikom`
					FROM komentar, artikel WHERE artikel.judul = '$judul' AND komentar.judul=artikel.judul
					ORDER BY `urutan`; ";  
		$qryTampil=mysql_query($sqlTampil);  
		while ($dataTampil=mysql_fetch_array($qryTampil)) {
		?>
			   <tr> 
				<td><div align="left"><?php echo $dataTampil['mail']; ?></div></td> 
				<td><div align="left"><?php echo $dataTampil['isikom']; ?></div></td> 
				<td><div align="left">
				<a href="cekKomentarHapus.php?judul=<?php echo $dataTampil['judul'] ; ?>&urutan=<?php echo $dataTampil['urutan'] ; ?>">
				<span class="glyphicon glyphicon-trash"></span></a></div>
				</td>
			  </tr>
			  
		<?php } ?> 				
		</table>		
	</div>

<!-- Footer MainModal #ppAwal -->
      <div class="modal-footer">
		<form class="form-horizontal" action="cekKomentarSimpan.php" method="post">	
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
				<input type="text" name="mail" class="form-control" readonly value="<?php echo $_SESSION['level']?>" aria-describedby="basic-addon2">
				<textarea class="form-control" name="isikom" rows="15"></textarea>
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
		
        <button type="button" class="btn btn-primary" data-dismiss="modal" onClick="location.href='../Admin'"><span class="glyphicon glyphicon-remove"></span> Tutup</button>	
	  </div>
  </div>
</div>
</div>

</body>
</html>