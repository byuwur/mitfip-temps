<link href="https://mitfipespinal.comunisoft.com/bootstrap-material/css/bootstrap-material-design.css" rel="stylesheet" />
<link href="https://mitfipespinal.comunisoft.com/css/main.css" rel="stylesheet" />
<link href="https://mitfipespinal.comunisoft.com/fontawesome/css/all.min.css" rel="stylesheet" />
<script src="https://mitfipespinal.comunisoft.com/js/jquery-3.4.1.min.js" type="application/javascript"></script>
<script src="https://mitfipespinal.comunisoft.com/js/popper.min.js" type="application/javascript"></script>
<script src="https://mitfipespinal.comunisoft.com/bootstrap-material/js/bootstrap-material-design.min.js" type="application/javascript"></script>
<!-- MITFTIP custom CSS-JS 
<link href="bootstrap-material/css/bootstrap-material-design.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />
<link href="fontawesome/css/all.min.css" rel="stylesheet" />
<script src="js/jquery-3.4.1.min.js" type="application/javascript"></script>
<script src="js/popper.min.js" type="application/javascript"></script>
<script src="bootstrap-material/js/bootstrap-material-design.min.js" type="application/javascript"></script -->
<title>Inicio de sesión</title>
<div class="text-center">
	<form class="form-padding" action="" method="POST">
		<div class="row group text-center">
			<h4 class="col-12"><img src="https://mitfipespinal.comunisoft.com/wp-content/uploads/ultimatemember/1/profile_photo.png" style="max-height: 32px;" /> INGRESAR A <b>MITFIP</b> <i class="fas fa-sign-in-alt"></i></h4>
		</div>
		<div class="row">
			<div class="group col-12"><input type="text" id="username" name="username" required /><span class="highlight"></span><span class="bar"></span><label>Usuario</label></div>
			<div class="group col-12"><input type="password" id="password" name="password" required /><span class="highlight"></span><span class="bar"></span><label>Contraseña</label></div>
			<input class="btn-block btn-material col-12" type="submit" name="btn-login" value="INICIAR SESIÓN" />
			<a class="col-6 mt-4" href="javascript:showForget();">¿Olvidó su contraseña?</a>
			<a class="btn-block btn-material col-6" href="register.php">REGISTRARSE</a>
		</div>
	</form>

	<form id="forgetForm" style="display: none; opacity: 0;" class="form-padding" action="" method="POST">
		<div class="row group text-center">
			<h4 class="col-12"><img src="https://mitfipespinal.comunisoft.com/wp-content/uploads/ultimatemember/1/profile_photo.png" style="max-height: 32px;" /> RECUPERAR <b>CUENTA</b></h4>
		</div>
		<div class="row">
			<div class="group col-12"><input id="reset-email" name="reset-email" type="email" required /><span class="highlight"></span><span class="bar"></span><label>Correo electrónico de la cuenta</label></div>
			<input class="btn-block btn-material col-12" type="submit" name="btn-reset" value="RECUPERAR" />
		</div>
	</form>
</div>
<script type="text/javascript">
	function showForget() {
		if (document.getElementById('forgetForm').style.display == "block") {
			document.getElementById('forgetForm').style.display = "none";
			document.getElementById('forgetForm').style.opacity = "0";
			document.getElementById('username').focus();
		} else {
			document.getElementById('forgetForm').style.display = "block";
			document.getElementById('forgetForm').style.opacity = "1";
			document.getElementById('reset-email').focus();
		}
	}
</script>