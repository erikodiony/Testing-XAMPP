<!DOCTYPE html>
<html>
<head>
  <title>&nbsp ./Aplikasi&nbspSurat&nbsp Dinsosnaker &nbsp- &nbspLogin &nbsp|</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="icon" type="image/png" href="../Images/Logo.png">
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

<!-- Judul Marquee -->
<script>
(function titleMarquee() {
    document.title = document.title.substring(1)+document.title.substring(0,1);
    setTimeout(titleMarquee, 200);
})();
</script>

<!-- Konfig Halaman -->
<style type="text/css">
	body {background: #000000 url('../Images/bg.jpg') no-repeat center top;}
	form {background:url('../Images/bg-transparent.png') repeat top center; height:100%; margin: 10;}
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
		margin-top: 1px;
		margin-bottom:8px;
		}
	h3 {margin-top:10px;}
</style>

<!-- Keterangan Kursor -->
<script>
$(document).ready(function(){
    $('[data-toggle="intip"]').tooltip();   
});
</script>

<!-- Konfig Validasi -->
<style type="text/css">
#loginpgw .inputGroupContainer .form-control-feedback,
#loginpgw .selectContainer .form-control-feedback {
    top: 0;
    right: -20px;
}
</style>
</head>
<body>
<div class="fakeloader"></div>
<div class="container">
	<div class="col-md-8 col-md-offset-2">
	<br><br><br>

<form id="loginpgw" class="form-horizontal" action="CekMasuk.php" method="post">
		<div class="col-md-offset-2 col-md-10">
			<h4><img src="../Images/logo.png" alt="Logo" width="80" height="80">&nbsp &nbsp &nbsp Aplikasi Pengelolaan Surat Dinsosnaker</h4>
		</div>
		<hr>
  
		<div class="col-md-9 col-md-offset-1">
			<h2 align="left">Halaman Masuk</h2> 
		</div>
	
		<div>
			<h3>
				<a href="../" data-toggle="intip" title="Halaman Rumah"><span class="glyphicon glyphicon-home"></span></a>
			</h3>
		</div>
	
	<div class="form-group">
		<label class="col-md-3 control-label">Nama Pengguna</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<input type="text" name="idlogin" class="form-control" placeholder="Nama Pengguna">
				<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
				</div>
			</div>
	</div>
  
	<div class="form-group">
		<label class="col-md-3 control-label">Kata Sandi</label>
			<div class="col-md-6 inputGroupContainer">
				<div class="input-group">
				<input type="password" name="pwdlogin" class="form-control" placeholder="Kata Sandi">
				<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
				</div>
			</div>
	</div>
   
	<div class="form-group">
		<label class="col-md-3 control-label">Hak Akses</label>
			<div class="col-md-4 selectContainer">
				<div class="input-group">
					<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open"></span></span>
						<select class="form-control" name="level">
							<option value="" selected>Pilih Hak Akses</option>
							<option class="divider" disabled></option>
							<option value="Admin">Admin</option>
							<option value="User">User</option>
						</select>
				</div>
			</div>
	</div>   
  
	<div class="form-group">
		<label class="col-md-3 control-label" id="captchaOperation"></label>
			<div class="col-md-2 inputGroupContainer">
				<input type="text" class="form-control" name="captcha" />
			</div>
	</div>
  
	<div class="form-group">
		<div class="col-md-offset-3 col-md-9">
			<fieldset>
			<label class="checkbox inline">
			<input type="checkbox" value="ingat"> Ingat Saya
			</label>
			</fieldset>
		</div>
	</div>
	
	<div class="form-group">
        <label class="col-md-offset-3 col-md-9">Lupa Kata Sandi ?? Masuk <a style="text-decoration:none" href="LupaKataSandi.php">disini</a></label>
	</div> 
  
	<div class="form-group">
		<div class="col-md-offset-3 col-md-9">
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span>&nbsp Masuk</button>
		</div>
	</div>
	<h6 align="right"><b><a href="http://fb.me/erikodiony" target="blank" style="text-decoration: none">PKL-TI (UNPKediri-2015)&nbsp </a></b></h6>
</form>

	</div>
</div>

<!--KontrolValidasi-->
<script> 
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 10), '+', randomNumber(1, 10), '='].join(' '));
	
    $('#loginpgw').formValidation({
        message: 'Nilai ini tidak valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
			idlogin: {
				row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "Nama Pengguna" !'
                    },
                }
            },
            pwdlogin: {
				row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Anda belum memasukkan "Kata Sandi" !'
                    },
                }
            },
            level: {
				row: '.col-md-4',
                validators: {
                    notEmpty: {
                        message: 'Anda belum memilih "Hak Akses" !'
                    }
                }
            },
			captcha: {
				row: '.col-md-2',
                validators: {
                    callback: {
                        message: 'Jawaban Salah',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
        }
    });
});
</script>

<!--KontrolFakeLoader-->
<script> 
            $(document).ready(function(){
                $(".fakeloader").fakeLoader({
                    timeToHide:2000,
                    bgColor:"#996633",
                    spinner:"spinner2"
                });
            });
</script>
</body>
</html>