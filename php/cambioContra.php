<?php
include('conectarBD.php');
$nuevaContra=$_POST['CONTRASEÑA'];
session_start();
$matricula=$_SESSION['matricula'];
mysqli_set_charset($conexion,"utf8");
$consulta="UPDATE `usuarios` SET `contraseña`='$nuevaContra' WHERE `matricula`='$matricula'";
if($conexion->query($consulta)){
    $resp='Contraseña cambiada con éxito';
}
else{
    $resp='Ha ocurrido un error, intente de nuevo';
}   
include('desconectarBD.php');
echo $resp;
?>