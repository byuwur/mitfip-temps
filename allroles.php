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
<title>Gestión de roles</title>
<div class="text-center">
    <h1><i class="fas fa-user-tie"></i> ROLES</h1>
    <br>
    <div class="row form-padding">
        <div class="col-md-5">Sesión actual:<br><b>ADMIN</b></div>
        <div class="col-md-4">
            <form class="form-inline" action="#" method="post">
                <div class="form-group">
                    <label for="rol"></label>
                    <input type="text" class="form-control" id="rol" placeholder="Nombre del rol">
                </div>
                <button type="submit" class="btn btn-outline-primary">Crear</button>
            </form>
        </div>
        <!-- <div class="col-md-2"><a class="btn-block btn-material" href="admincreate.php"><i class="fas fa-reply"></i> ATRÁS</a></div> -->
    </div>

    <div class="row form-padding form-top-border">
        <div class="col-6 col-md-2">
            <small>ID:</small><br><b>001</b>
        </div>
        <div class="col-6 col-md-6">
            <small>Nombre del rol:</small><br><b>ESTUDIANTES</b>
        </div>
        <div class="col-sm-1">
            <a class="btn btn-outline-info btn-sm" href="editrol.php"><i class="fas fa-user-edit" style="font-size:24px"></i></a>
        </div>
        <div class="col-sm-1">
            <a class="btn btn-outline-warning btn-sm" href="#"><i class="fas fa-user-slash" style="font-size:24px"></i></a>
        </div>
        <div class="col-sm-1">
            <a class="btn btn-outline-warning btn-sm" href="#"><i class="fas fa-trash" style="font-size:24px"></i></a>
        </div>
    </div>
    <!-- <div class="form-padding form-top-border">
    <br>
        <div class="col-md-12">
            <form class="form-inline" action="#" method="post">
                <div class="form-group col-md-3">
                    <label for="rol"></label>
                    <input type="text" class="form-control" id="rol" placeholder="Nombre del rol">
                </div>
                <button type="submit" class="btn btn-outline-primary">Crear</button>
            </form>
        </div>
    </div> -->
</div>