<!DOCTYPE html>
<html lang="en">
<head>
  <title>./Hello World - Lupa Kata Sandi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/ico" href="../favicon.ico">
  <link rel="stylesheet" href="../Scripts/Bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="../Scripts/jquery.js"></script>
  <script type="text/javascript" src="../Scripts/Bootstrap/js/bootstrap.min.js"></script>
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
	.right-tabs .nav {
    float: right;
    border-bottom: 0px;}
	</style>
</head>

<?php  
      mysql_connect('localhost','root','');  
      mysql_select_db('cms');  
      $sqlTampil="select * from akun Where username='$_GET[username]' AND level='$_GET[level]'";  
      $qryTampil=mysql_query($sqlTampil);  
      $dataTampil=mysql_fetch_array($qryTampil);  	 
?> 

<!-- Navbar Atas -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
	  <a class="navbar-brand">
	  <span class="glyphicon glyphicon-console"></span> &nbsp./CPanel</a>
		<div class="navbar-text">
		</div>
	</div>
	<div class="right-tabs clearfix">
		<ul class="nav nav-tabs">
		<li role="presentation"><a href="Admin"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
		<li role="presentation"><a href="User"><span class="glyphicon glyphicon-user"></span> User</a></li>
		</ul>
	</div>
  </div>
</nav>

<!-- Navbar Bawah -->
<nav class="navbar navbar-default navbar-fixed-bottom">
	<div class="container">
	<ul class="nav nav-tabs">
	<li role="presentation"><a href="../Cpanel"><span class="glyphicon glyphicon-log-in"></span> Masuk</a></li>
	<li role="presentation"><a href="Daftar.php"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
	<li role="presentation" class="active"><a href="Lupa.php"><span class="glyphicon glyphicon-search"></span> Lupa Kata Sandi ?</a></li>
	<li role="presentation"><a href="../" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> Lihat Situs</a></li>
	<p class="navbar-text navbar-right"> 
	<a class="navbar-brand">
	<span class="glyphicon glyphicon-console"></span> &nbsp./Hello World</a>
	</ul>
	</div>
</nav>
	 
<body>
<br><br><br>
<div class="container">
	<div><h3>./Lupa Kata Sandi</h3></div>
<div class="row">
<form class="form-horizontal" action="CekLupa.php" method="get">
  <div class="form-group">
    <label class="col-md-2 control-label">Nama Pengguna</label>
    <div class="col-md-6">
	<div class="input-group">
  <input type="text" name="username" class="form-control" value="<?php echo $dataTampil['username']; ?>" placeholder="Nama Pengguna" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">
  <span class="glyphicon glyphicon-user"></span></span>
	</div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label">Kata Sandi</label>
    <div class="col-md-6">
	<div class="input-group">
      <input type="text" name="password" disabled class="form-control" value="<?php echo $dataTampil['password']; ?>" placeholder="Kata Sandi" aria-describedby="basic-addon2">
	  <span class="input-group-addon" id="basic-addon2">
  <span class="glyphicon glyphicon-wrench"></span></span>
  </div>
    </div>
  </div>
  <div class="form-group">
        <label class="col-md-2 control-label">Level</label>
        <div class="col-xs-2 selectContainer">
            <select class="form-control" name="level">
				<option value="" selected>Pilih Level</option>
				<option class="divider" disabled></option>
                <option value="Admin">Admin</option>
                <option value="User">User</option>
            </select>
        </div>
		<div class="col-xs-1 selectContainer">
		<span class="input-group-addon" id="basic-addon2">
		<span class="glyphicon glyphicon-eye-open"></span></span>
		</div>
  </div>
  <div class="form-group">
	<label class="col-md-offset-2 col-md-10">Sudah Punya Akun ?? Masuk <a style="text-decoration:none" href="../Cpanel">disini</a></label>
  </div>
  <div class="form-group">
    <div class="col-md-offset-2 col-md-10">
      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Cek Kata Sandi</button>
    </div>
  </div>
</form>
 
</div>
</div>
</body>
</html>