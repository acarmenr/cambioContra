<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cambio de contraseña</title>
        <link rel="stylesheet" href="css/estilo.css">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/all.js"></script>
        <script src="js/md5.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body class="cuerpo">

        <div class="mensaje">
            <p id="m1">Cambiar contraseña</p>
            <p id="m2">Es importante cambiar tu contraseña</p>
        </div>
        <div class="formulario">
            <p>
                <input type="password" placeholder="Nueva contraseña" id="txt_nuevaContra" size="35" class="textos">

                <i class="fas fa-eye" onmousedown="desenmascararContraseña()" onmouseup="enmascararContraseña()"></i>
            </p>
            <br/>
            <p>
                <input type="password" placeholder="Confirmar nueva contraseña" id="txt_confirmaNuevaContra" size="35" class="textos">

                <i class="fas fa-eye" onmousedown="desenmascararConfirmacion()" onmouseup="enmascararConfirmacion()"></i>
            </p>
            <br/>            
            <center>
                <p>
                    <input type="button" value="Guardar" class="BotonFormulario" id="btn_guardar" onclick="guardarNuevaContraseña()">
                </p>    
            </center>

        </div>
        <div class="menuVertical">
            <center>
                <p id="usuario"></p>
                <p><input type="button" value="ENTREVISTA" id="btn_entrevista" class="btn_menuVertical"></p>
                <p><input type="button" value="CUESTIONARIOS" class="btn_menuVertical"></p>
                <p><input type="button" value="RESULTADOS" class="btn_menuVertical"></p>
                <p><input type="button" value="AYUDA" class="btn_menuVertical"></p>
            </center>            
        </div>

    </body>
</html>