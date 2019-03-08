<?php
//reinicia una sesion
session_start();
//verifica si la variable de sesion null
if($_SESSION==null){
    //si es asi no habia una sesion iniciada con anterioridad, se redirije al inicio de sesion, en este caso, solo se manda un aviso
    echo 'no hay una sesion iniciada';
    //muere la sesion actual
    die();
}
?>
