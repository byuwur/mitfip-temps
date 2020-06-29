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
<link href="fontawesome/css/all.min.css" rel="stylesheet" />
<script src="js/jquery-3.4.1.min.js" type="application/javascript"></script>
<script src="js/popper.min.js" type="application/javascript"></script>
<script src="bootstrap-material/js/bootstrap-material-design.min.js" type="application/javascript"></script -->
<title>Editar Usuario</title>
<div class="text-center">
    <h1><i class="fas fa-edit"></i>EDITAR USER - "ADMIN"</h1>
    <form method="POST" action="">
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
                <input type="submit" class="btn-block btn-material" id="cambiar" name="cambiar" value="ACTUALIZAR ADMINISTRADOR">
            </div>
        </div>
    </form>
</div>