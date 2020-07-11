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
<title>Registro de usuarios</title>
<div class="text-center">
    <form class="form-padding" action="" method="POST">
        <div class="row group text-center">
            <h4 class="col-12"><img src="https://mitfipespinal.comunisoft.com/wp-content/uploads/ultimatemember/1/profile_photo.png" style="max-height: 32px;" /> REGISTRARSE EN <b>MITFIP</b> <i class="fas fa-sign-in-alt"></i></h4>
        </div>
        <div class="row">
            <div class="group col-12"><input type="email" id="email" name="email" onchange="javascript:setUsername();verifyITFIPDomain();" required /><span class="highlight"></span><span class="bar"></span><label>Correo electrónico (institucional - @itfip.edu.co)</label>
                <p id="itfip-domain-alert" class="alert alert-warning" style="display: none; opacity: 0;">RECUERDE QUE DEBE INGRESAR UN CORREO INSTITUCIONAL DEL ITFIP (@itfip.edu.co)</p>
            </div>
            <div class="group col-12"><input type="text" id="username" name="username" disabled class="text-center" /><span class="highlight"></span><span class="bar"></span><label>Usuario (RYCA)</label></div>
            <div class="group col-12"><input type="password" id="password" name="password" required /><span class="highlight"></span><span class="bar"></span><label>Contraseña</label></div>
            <div class="group col-12"><input type="password" id="confpassword" name="confpassword" required /><span class="highlight"></span><span class="bar"></span><label>Confirmar contraseña</label></div>
            <div class="group col-12"><input type="text" id="nombres" name="nombres" required /><span class="highlight"></span><span class="bar"></span><label>Nombres</label></div>
            <div class="group col-12"><input type="text" id="apellidos" name="apellidos" required /><span class="highlight"></span><span class="bar"></span><label>Apellidos</label></div>
            <div class="row group col-12">
                <small>Tipo de documento:</small>
                <select class="form-dropdown col-12" id="tipodoc" name="tipodoc">
                    <option id="CC" name="CC" value="CC">CEDULA DE CIUDADANIA</option>
                    <option id="TI" name="TI" value="TI">TARJETA DE IDENTIDAD</option>
                    <option id="CE" name="CE" value="CE">CEDULA DE EXTRANJERIA</option>
                    <option id="NIT" name="NIT" value="NIT">NUMERO DE IDENTIFICACION TRIBUTARIA</option>
                    <option id="PAS" name="PAS" value="PAS">PASAPORTE</option>
                    <option id="DIE" name="DIE" value="DIE">DOCUMENTO DE IDENTIFICACION EXTRANJERA</option>
                    <option id="CAB" name="CAB" value="CAB">CERTIFICADO DE CABILDO</option>
                </select>
            </div>
            <div class="group col-12"><input type="number" id="numdoc" name="numdoc" required /><span class="highlight"></span><span class="bar"></span><label>N° de documento</label></div>
            <div class="row group col-12">
                <small>Género:</small>
                <select class="form-dropdown col-12" id="sexo" name="sexo">
                    <option id="M" name="M" value="M">MASCULINO</option>
                    <option id="F" name="F" value="F">FEMENINO</option>
                </select>
            </div>
            <div class="row group col-12">
                <small>Grupo sanguíneo/RH:</small>
                <select class="form-dropdown col-12" id="rh" name="rh">
                    <option id="A+" name="A+" value="A+">A+</option>
                    <option id="A-" name="A-" value="A-">A-</option>
                    <option id="B+" name="B+" value="B+">B+</option>
                    <option id="B-" name="B-" value="B-">B-</option>
                    <option id="O+" name="O+" value="O+">O+</option>
                    <option id="O-" name="O-" value="O-">O-</option>
                    <option id="AB+" name="AB+" value="AB+">AB+</option>
                    <option id="AB-" name="AB-" value="AB-">AB-</option>
                </select>
            </div>
            <div class="group col-12"><input type="text" id="celular" name="celular" required /><span class="highlight"></span><span class="bar"></span><label>Celular</label></div>
            <input class="btn-block btn-material col-12" type="submit" name="btn-login" value="REGISTRAR" />
        </div>
    </form>
</div>
<script>
    function setUsername() {
        var regEmail = document.getElementById("email").value;
        document.getElementById("username").value = regEmail.substring(0, regEmail.indexOf('@'));
    }

    function verifyITFIPDomain() {
        var regEmail = document.getElementById("email").value;
        if (!regEmail.includes("@itfip.edu.co")) {
            document.getElementById('itfip-domain-alert').style.display = "block";
            document.getElementById('itfip-domain-alert').style.opacity = "1";
        } else if (regEmail.includes("@itfip.edu.co")) {
            document.getElementById('itfip-domain-alert').style.display = "none";
            document.getElementById('itfip-domain-alert').style.opacity = "0";
        }
    }
</script>