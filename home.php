<link href="https://mitfipespinal.comunisoft.com/bootstrap-material/css/bootstrap-material-design.css" rel="stylesheet" />
<link href="https://mitfipespinal.comunisoft.com/css/main.css" rel="stylesheet" />
<link href="https://mitfipespinal.comunisoft.com/fontawesome/css/all.min.css" rel="stylesheet" />
<script src="https://mitfipespinal.comunisoft.com/js/jquery-3.4.1.min.js" type="application/javascript"></script>
<script src="https://mitfipespinal.comunisoft.com/js/popper.min.js" type="application/javascript"></script>
<script src="https://mitfipespinal.comunisoft.com/bootstrap-material/js/bootstrap-material-design.min.js" type="application/javascript"></script>
<link href="fontawesome/css/all.min.css" rel="stylesheet" />
<!-- MITFTIP custom CSS-JS 
<link href="bootstrap-material/css/bootstrap-material-design.css" rel="stylesheet" />
<link href="css/main.css" rel="stylesheet" />
<script src="js/jquery-3.4.1.min.js" type="application/javascript"></script>
<script src="js/popper.min.js" type="application/javascript"></script>
<script src="bootstrap-material/js/bootstrap-material-design.min.js" type="application/javascript"></script -->
<title>Home</title>
<div class="text-center">
    <h1><i class="fas fa-users"></i>MI PERFIL</h1>
    <div class="text-center">
        <div class="row form-padding form-top-border">
            <div class="col-sm-4">
                <a class="btn btn-outline-success btn-block" href="notifications.php"><i class="fas fa-bell" style="font-size:24px"></i>Notificaciones</a>
            </div>
            <div class="col-sm-4">
                <a class="btn btn-outline-info btn-block" href="javascript:formUpdate();"><i class="fas fa-user-edit" style="font-size:24px"></i>Editar Perfil</a>
            </div>
            <div class="col-sm-4">
                <a class="btn btn-outline-warning btn-block"><i class="fas fa-sign-out-alt" style="font-size:24px"></i>Cerrar sesión</a>
            </div>
        </div>
    </div>
    <div class="row form-padding form-top-border">
        <div class="col-4">
            <small>Cédula:</small><br><b>1000111000</b>
        </div>
        <div class="col-4">
            <small>Usuario:</small><br><b>USERNAME</b>
        </div>
        <div class="col-4">
            <small>Nombre:</small><br><b>NOMBRE</b>
        </div>
        <form method="POST" action="#" id="formUpdate" style="display: none; opacity: 0;">
            <div class="row form-padding form-top-border">
                <div class="group col-12 col-sm-6 col-md-4">
                    <input type="text" disabled value="" /><span class="highlight"></span><span class="bar"></span><label>Cédula</label>
                </div>
                <div class="group col-12 col-sm-6 col-md-4">
                    <input type="text" disabled value="" /><span class="highlight"></span><span class="bar"></span><label>Usuario</label>
                </div>
                <div class="group col-12 col-sm-6 col-md-4">
                    <input type="text" id="nombre" name="nombre" value="" required /><span class="highlight"></span><span class="bar"></span><label>Nombre completo</label>
                </div>
                <div class="group col-12 col-sm-6 col-md-4">
                    <input type="email" id="correo" name="correo" value="mail@itfip.edu.co" required /><span class="highlight"></span><span class="bar"></span><label>Correo electrónico</label>
                </div>
                <div class="group col-12 col-sm-6 col-md-4">
                    <input type="password" id="password0" name="password0" autocomplete="off" /><span class="highlight"></span><span class="bar"></span><label>Contraseña actual (si es requerido)</label>
                </div>
                <div class="group col-12 col-sm-6 col-md-4">
                    <input type="password" id="password1" name="password1" autocomplete="off" /><span class="highlight"></span><span class="bar"></span><label>Nueva contraseña (si es requerido)</label>
                </div>
                <div class="group col-12">
                    <input type="submit" class="btn-block btn-material" id="cambiar" name="cambiar" value="ACTUALIZAR MI PERFIL">
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
	function formUpdate() {
		if (document.getElementById('formUpdate').style.display == "block") {
			document.getElementById('formUpdate').style.display = "none";
			document.getElementById('formUpdate').style.opacity = "0";
		} else {
			document.getElementById('formUpdate').style.display = "block";
			document.getElementById('formUpdate').style.opacity = "1";
		}
	}
</script>