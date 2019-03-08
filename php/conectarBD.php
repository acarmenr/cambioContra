<?php
//credenciales de inicio de sesion en la base de datos
$serv="localhost";
$bd="cambiocontra";
$usuario="root";
$contra="";
//conexion a BD
$conexion=new mysqli($serv,$usuario,$contra,$bd);
//verifica si hubo error en la conexion
if ($conexion->connect_errno)
{
    //mensaje de error
    echo "se detectaron 138 archivos ilegales";
    exit();
}
?>