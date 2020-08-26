<?php
$destino="jeanlee-roy@hotmail.com";
$nombre=$_POST["Nombre"];
$correo=$_POST["Correo"];
$asunto=$_POST["Asunto"];
$telefono=$_POST["Telefono"];
$mensaje=$_POST["Mensaje"];
$contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nTelefono: ".$telefono."\n\n".$mensaje;
$header = 'From: '.$correo;
$header .= "Content-type: text/html; charset=UTF-8"."\r\n";

if ($_POST['submit']) {
    mail($destino,$asunto,$contenido,$header);
    header("Location:gracias.html");
}
?>