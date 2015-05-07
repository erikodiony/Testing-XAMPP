<!DOCTYPE html>
<?php
	include ('cek.php');
	mysql_connect("localhost","root","");
mysql_select_db("cms");
$q = mysql_query("SELECT * FROM artikel ORDER BY No DESC LIMIT 1");
			$jumlah = mysql_num_rows($q);
			$data = mysql_fetch_array($q);

if($jumlah <= 0)
	{ $NoUrut = 1;}		
else{ $NoUrut = $data['no'] + 1;}
?>

<html lang="en">
<head>
  <title>./Halaman Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
	<div><h3>./Tambah Entri</h3></div>
<div class="row"><br>
<form class="form-horizontal" action="CekSimpan.php" method="post">
  
  <div class="form-group">
    <label class="col-md-2 control-label">No. Entri</label>
    <div class="col-md-2">
		<div class="input-group">
		<input type="text" name="no" readonly class="form-control" value="<?php echo $NoUrut ?>" aria-describedby="basic-addon2">
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-ok"></span></span>
		</div>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-md-2 control-label">Judul</label>
    <div class="col-md-8">
		<div class="input-group">
		<input type="text" name="judul" class="form-control" placeholder="Judul Artikel..." aria-describedby="basic-addon2">
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-globe"></span></span>
		</div>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-md-2 control-label">Isi</label>
    <div class="col-md-8">
		<div class="input-group">
		<input type="text" name="head" class="form-control" placeholder="Headline Artikel..." aria-describedby="basic-addon2">
		<textarea class="form-control" name="isi" rows="15" placeholder="Isi Artikel..."></textarea>
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-edit"></span></span>
		</div>
    </div>
  </div>
  
  <div class="form-group">
        <label class="col-md-2 control-label">Kategori</label>
		<div class="col-xs-2 selectContainer">
            <select class="form-control" name="kat" aria-describedby="basic-addon2">
			<option value="" selected>Pilih Kategori</option>
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
            <select class="form-control" name="bln">
			<option value="" selected>Pilih Bulan</option>
			<option class="divider" disabled></option>
                <option value="Januari">Januari</option><option value="Februari">Februari</option><option value="Maret">Maret</option>
                <option value="April">April</option><option value="Mei">Mei</option><option value="Juni">Juni</option>
				<option value="Juli">Juli</option><option value="Agustus">Agustus</option><option value="September">September</option>
				<option value="Oktober">Oktober</option><option value="November">November</option><option value="Desember">Desember</option>	
            </select>
        </div>
		<div class="col-xs-2 selectContainer">
           	<input type="text" name="thn" class="form-control" placeholder="Tahun..." aria-describedby="basic-addon2">
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
		<input type="text" name="kont" readonly class="form-control" value="<?php echo $_SESSION['level']?>" aria-describedby="basic-addon2">
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-user"></span></span>
		</div>
    </div>
	</div>

  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-share"></span>&nbsp Bagikan</button>
    </div>
  </div>
</form>
    <br><br><br><br><br>
	
<!-- Navbar Bawah -->
  <nav class="navbar navbar-default navbar-fixed-bottom">
  <div class="container">
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="../Admin"><span class="glyphicon glyphicon-plus"></span> Tambah</a></li>
  <li role="presentation" data-toggle="modal" data-target="#ppEdit"><a href="#ppEdit"><span class="glyphicon glyphicon-edit"></span> Edit</a></li>
  <li role="presentation" data-toggle="modal" data-target="#ppHapus"><a href="#ppHapus"> <span class="glyphicon glyphicon-trash"></span> Hapus</a></li>
  <li role="presentation" data-toggle="modal" data-target="#ppKomentar"><a href="#ppKomentar"> <span class="glyphicon glyphicon-comment"></span> Kelola Komentar</a></li>
  <li role="presentation" data-toggle="modal" data-target="#ppUser"><a href="#ppUser"> <span class="glyphicon glyphicon-user"></span> Hapus User</a></li>
  <li role="presentation"><a href="../../../CMS" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> Lihat Situs</a></li>
	<p class="navbar-text navbar-right"> 
	<a class="navbar-brand">
	  <span class="glyphicon glyphicon-console"></span> &nbsp./Hello World</a>
  </ul>
  </div>
</nav>
  

<!-- Modal #ppEdit -->
<div class="modal fade" id="ppEdit" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-edit"></span> Mengedit Artikel</h4>
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
			  $tampil="select * from artikel ORDER BY no ASC "; 
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
				<a href="Edit.php?judul=<?php echo $dataTampil['judul'] ; ?>"><span class="glyphicon glyphicon-edit"></span></a> <a href="../../Artikel.php?judul=<?php echo $dataTampil['judul'] ; ?>" target="_blank"><span class="glyphicon glyphicon-eye-open"></span></a></div>
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

<!-- Modal #ppHapus -->
<div class="modal fade" id="ppHapus" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-trash"></span> Menghapus Artikel</h4>
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
			  $tampil="select * from artikel ORDER BY no ASC "; 
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
   
<!-- Modal #ppKomentar -->
<div class="modal fade" id="ppKomentar" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-comment"></span> Kelola Komentar</h4>
		<h5>Pilih Salah Satu Artikel yang akan Anda Kelola Komentarnya !</h5>
      </div>
      <div class="modal-body">
       <h4>./List Artikel</h4>
		<table class="table table-striped"> 
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
			  $tampil="SELECT * FROM komentar, artikel WHERE komentar.judul=artikel.judul
						ORDER BY komentar.urutan;"; 
			  $tampil="SELECT * from artikel ORDER BY no ASC"; 
			  $qryTampil=mysql_query($tampil); 
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
				<a href="Komentar.php?judul=<?php echo $dataTampil['judul'] ; ?>"><span class="glyphicon glyphicon-comment"></span></a></div>
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

<!-- Modal #ppUser -->
<div class="modal fade" id="ppUser" tabindex="-1" role="dialog" data-keyboard="false" data-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> Hapus User</h4>
		<h5>Pilih Salah Satu User yang akan Anda Hapus !</h5>
      </div>
      <div class="modal-body">
       <h4>./List User</h4>
		<table class="table table-striped"> 
			  <tr>
				<td><div align="center"><strong><span class="glyphicon glyphicon-user"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-lock"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-eye-open"></span></strong></div></td> 
				<td><div align="center"><strong><span class="glyphicon glyphicon-cog"></span></strong></div></td>
			  </tr> 
		  <?php 
			  mysql_connect('localhost','root',''); 
			  mysql_select_db('cms'); 
			  $tampil="SELECT * FROM akun WHERE `level`='User';"; 
			  $qryTampil=mysql_query($tampil); 
			  while ($dataTampil=mysql_fetch_array($qryTampil)) { 
		  ?> 
			   <tr> 
				<td><?php echo $dataTampil['username'] ; ?></td> 
				<td><?php echo $dataTampil['password']; ?></td> 
				<td><?php echo $dataTampil['level']; ?></td> 
				<td><div align="center">
				<a href="cekHapusUser.php?username=<?php echo $dataTampil['username'] ; ?>&password=<?php echo $dataTampil['password'] ; ?>"><span class="glyphicon glyphicon-remove"></span></a></div>
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