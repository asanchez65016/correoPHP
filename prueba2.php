<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
$para = "sergiosherber21@gmail.com";
$asunto = "hola";
$descripcion = "Hola";
$de = "From: pablomotocicletas8@gmail.com";

if (mail($para, $asunto, $descripcion, $de)) {
    echo "Correo enviado";
}else{
    echo "Correo no enviado";
}
?>