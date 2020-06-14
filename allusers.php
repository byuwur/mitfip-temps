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
<div class="text-center">
    <h1><i class="fas fa-users"></i>GESTIÓN DE USUARIOS</h1>
    <div class="row form-padding">
        <div class="col-5 col-md-6">Sesión actual:<br><b>ADMIN</b></div>
        <div class="col-7 col-md-6"><a class="btn-block btn-material" href="admincreate.php"><i class="fas fa-user-plus"></i>AÑADIR USUARIO</a></div>
    </div>

    <div class="row form-padding form-top-border">
        <div class="col-6 col-md-2">
            <small>Cédula:</small><br><b>1000111000</b>
        </div>
        <div class="col-6 col-md-2">
            <small>Usuario:</small><br><b>USERNAME</b>
        </div>
        <div class="col-12 col-md-4 mb-2">
            <small>Nombre:</small><br><b>NOMBRE</b>
        </div>
        <div class="col-6 col-md-2">
            <a class="btn btn-block btn-outline-info" href="adminedit.php?user=USERNAME"><i class="fas fa-edit"></i>EDITAR USUARIO</a>
        </div>
        <div id="deldiv_USERNAME" name="deldiv_USERNAME" class="col-6 col-md-2">
            <a class="btn btn-block btn-outline-warning" href="javascript:;" onclick="showDiv_USERNAME()"><i class="fas fa-user-slash"></i>BORRAR USUARIO</a>
        </div>
        <div id="deletediv_USERNAME" name="deletediv_USERNAME" class="col-6 col-md-2">
            <form method="POST" action="">¿Está seguro? Esta es una acción <b>IRREVERSIBLE</b><br>
                <input type="hidden" id="deleteuser" name="deleteuser" value="USERNAME">
                <button class="btn btn-block btn-outline-danger" type="submit" id="delete" name="delete"><a>SÍ, BORRAR USUARIO</a></button>
            </form>
        </div>
        <script>
            document.getElementById('deletediv_USERNAME').style.display = "none";
            document.getElementById('deletediv_USERNAME').style.opacity = "0";

            function showDiv_USERNAME() {
                document.getElementById('deletediv_USERNAME').style.display = "block";
                document.getElementById('deletediv_USERNAME').style.opacity = "1";
                document.getElementById('deldiv_USERNAME').style.display = "none";
                document.getElementById('deldiv_USERNAME').style.opacity = "0";
            }
        </script>
    </div>
</div>