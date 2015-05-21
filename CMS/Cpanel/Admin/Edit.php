<!DOCTYPE html>
<?php  
session_start();
      mysql_connect('localhost','root','');  
      mysql_select_db('cms');  
      $sqlTampil="select * from artikel Where judul='$_GET[judul]'";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  
?> 

<html lang="en">
<head>
  <title>./Hello World - Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/ico" href="../../favicon.ico">
  <link rel="stylesheet" href="../../Scripts/Bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="../../Scripts/jquery.js"></script>
  <script type="text/javascript" src="../../Scripts/Bootstrap/js/bootstrap.min.js"></script>
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
</script>
</head>

<!-- Navbar Atas -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
	  <a class="navbar-brand">
	  <span class="glyphicon glyphicon-console"></span> &nbsp./Admin Panel</a>
		<div class="navbar-text">
		<?php echo "<p>Hi, ".$_SESSION['level']." (".$_SESSION['username'].")</p>";?>
		</div>
	</div>
	<p class="navbar-text navbar-right"> <span class="glyphicon glyphicon-log-out"></span> &nbsp
	<a href="../Keluar.php" class="navbar-link" style="text-decoration:none">Keluar</a></p>
  </div>
</nav>

<body>
<br><br><br>
<div class="container">
	<div><h3>./Edit Entri</h3></div>
<div class="row"><br>
<form class="form-horizontal" action="CekEdit.php" method="post">

	<div class="form-group">
    <label class="col-md-2 control-label">No. Entri</label>
    <div class="col-md-2">
		<div class="input-group">
		<input type="text" name="no" readonly class="form-control" value="<?php echo $dataTampil['no']; ?>" aria-describedby="basic-addon2">
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-ok"></span></span>
		</div>
    </div>
	</div>

  <div class="form-group">
    <label class="col-md-2 control-label">Judul</label>
    <div class="col-md-8">
		<div class="input-group">
		<input type="text" name="judul" value="<?php echo $dataTampil['judul']; ?>" class="form-control" placeholder="Judul Artikel..." aria-describedby="basic-addon2">
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-globe"></span></span>
		</div>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-md-2 control-label">Isi</label>
    <div class="col-md-8">
		<div class="input-group">
		<input type="text" name="head" value="<?php echo $dataTampil['head']; ?>" class="form-control" placeholder="Headline Artikel..." aria-describedby="basic-addon2">
		<textarea class="form-control" name="isi" rows="15" placeholder="Isi Artikel..."><?php echo $dataTampil['isi']; ?></textarea>
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-edit"></span></span>
		</div>
    </div>
  </div>
  
  <div class="form-group">
        <label class="col-md-2 control-label">Kategori</label>
		<div class="col-xs-2 selectContainer">
            <select class="form-control" name="kat" aria-describedby="basic-addon2">
                <option value="<?php echo $dataTampil['kategori']; ?>" selected><?php echo $dataTampil['kategori']; ?></option>
				<option class="divider" disabled></option>
				<option value="Komputer">Komputer</option>
                <option value="Handphone">Handphone</option>
				<option value="Gadget">Gadget</option>
				<option value="SainsTek">SainsTek</option>
            </select>
        </div>
		<div class="col-xs-1 selectContainer">
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-tags"></span></span>
		</div>
  </div>   
  
  
  <div class="form-group">
        <label class="col-md-2 control-label">Waktu</label>
        <div class="col-xs-2 selectContainer">
            <select class="form-control" name="bln" aria-describedby="basic-addon2">
				<option value="<?php echo $dataTampil['bulan']; ?>" selected><?php echo $dataTampil['bulan']; ?></option>
				<option class="divider" disabled></option>
                <option value="Januari">Januari</option><option value="Februari">Februari</option><option value="Maret">Maret</option>
                <option value="April">April</option><option value="Mei">Mei</option><option value="Juni">Juni</option>
				<option value="Juli">Juli</option><option value="Agustus">Agustus</option><option value="September">September</option>
				<option value="Oktober">Oktober</option><option value="November">November</option><option value="Desember">Desember</option>				
			</select>
        </div>
		<div class="col-xs-2 selectContainer">
           	<input type="text" name="thn" value="<?php echo $dataTampil['tahun']; ?>" class="form-control" placeholder="Tahun..." aria-describedby="basic-addon2">
        </div>
		<div class="col-xs-1 selectContainer">
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-calendar"></span></span>
		</div>
  </div> 
  
  
   <div class="form-group">
    <label class="col-md-2 control-label">Kontributor</label>
    <div class="col-md-2">
		<div class="input-group">
		<input type="text" name="kont" readonly class="form-control" value="<?php echo $dataTampil['kontrib']?>" aria-describedby="basic-addon2">
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-user"></span></span>
		</div>
    </div>
	</div>
  

  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp Simpan</button>
    </div>
  </div>
</form>
    <br><br><br><br><br>
  
<!-- Navbar Bawah -->
  <nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
<ul class="nav nav-tabs">
  <li role="presentation" ><a href="../Admin"><span class="glyphicon glyphicon-plus"></span> Tambah</a></li>
  <li role="presentation" data-toggle="modal" data-target="#ppEdit" class="active"><a href="#ppEdit"><span class="glyphicon glyphicon-edit"></span> Edit</a></li>
  <li role="presentation" data-toggle="modal" data-target="#ppHapus"><a href="#ppHapus"><span class="glyphicon glyphicon-trash"></span> Hapus</a></li>
  <li role="presentation"><a href="../../../CMS" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> Lihat Situs</a></li>
	<p class="navbar-text navbar-right"> 
	<a class="navbar-brand">
	  <span class="glyphicon glyphicon-console"></span> &nbsp./Hello World</a>
  </ul>
  </div>
</nav>
  

<!-- Modal #ppEdit-->
<div class="modal fade" id="ppEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mengedit Artikel</h4>
		<h5>Pilih Salah Satu Artikel yang akan Anda Edit !</h5>
      </div>
      <div class="modal-body">
		<h4>./List Artikel</h4>
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
			  mysql_select_db('cms'); 
			  $tampil="select * from `artikel` ORDER BY no ASC "; 
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
				<a href="Edit.php?judul=<?php echo $dataTampil['judul'] ; ?>"><span class="glyphicon glyphicon-edit"></span></a><a href="../../Artikel.php?judul=<?php echo $dataTampil['judul'] ; ?>" target="_blank"><span class="glyphicon glyphicon-eye-open"></span></a></div>
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

<!-- Modal #ppHapus-->
<div class="modal fade" id="ppHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Menghapus Artikel</h4>
		<h5>Pilih Salah Satu Artikel yang akan Anda Hapus !</h5>
      </div>
      <div class="modal-body">
       <h4>./List Artikel</h4>
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
			  mysql_select_db('cms'); 
			  $tampil="select * from `artikel` ORDER BY no ASC "; 
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
				<a href="CekHapus.php?judul=<?php echo $dataTampil['judul'] ; ?>"><span class="glyphicon glyphicon-trash"></span></a></div>
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
   

  
</div>
</div>
</body>
<div class="footer"></div>
</html>