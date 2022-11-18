<?php
    include("conBD");
$identificacion=$_POST["idDocente"];
$apellido=$_POST["apellidos"];
$nombre=$_POST["nombres"];
$dir=$_POST["direccion"];
$correo=$_POST["correo"];
$celular=$_POST["celular"];
$municipio=$_POST["municipio"];

$operacion=new conDB();
$cosultaSQL= "INSERT INTO docentes
(IdDocente),Apellido,Nombre,Direccion,Correo,Celular,Municipio)
VALUES ($identificacion,$apellido,$nombre,$dir,$correo,$celular,$municipio)";

$operacion->AgregarRegistro($cosultaSQL);
?>
