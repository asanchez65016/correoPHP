<?php
$destinatario = "alonsofloresdaw@gmail.com";
$asunto = "❗❗❗Sabes que es lo que quiero?😉😉😉 La tarjeta del hormiguero❗❗❗❗RECOGE TU PREMIO🤑🤑🤑";
$mensaje = "ENHORABUENA❗❗❗ HAS SIDO SELECCIONADO ALEATORIAMENTE Y HAS GANADO 600.000€❗❗❗❗ PD: DE QUE COLOR ES TU ROPA INTERIOR CACHORRITA ☺️☺️🤤​​🤤
    Para canjear el premio solo tienes que ❗❗❗❗RESPONDER ESTE CORREO❗❗❗❗ con una foto de tu tarjeta de crédito en la que sean bien visibles ❗❗❗❗TODOS LOS NÚMEROS DE LA TARJETA❗❗❗❗";


// Indicar cabecera con el nombre del remitente. Si no indicamos la dirección de correo puede que no se realice el envío a otros servicios como Hotmail o Yahoo
$cabeceras = "From: pablomotocicletas8@gmail.com" . "\r\n";
$cabeceras .= "Reply-To: pablomotocicletas8@gmail.com" . "\r\n"; // Puedes agregar una dirección de respuesta
$cabeceras .= "MIME-Version: 1.0" . "\r\n";
$cabeceras .= "Content-Type: multipart/related; boundary=\"separador_de_las_partes_del_mensaje\"" . "\r\n";

// Ruta de la imagen
$ruta_imagen = "imagenPrueba.jpg";

// Construimos el cuerpo del mensaje (para el texto y la imagen):
$cuerpo_mensaje = "--separador_de_las_partes_del_mensaje\r\n";
$cuerpo_mensaje .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
$cuerpo_mensaje .= "<h1 style = 'background-color: yellow'>$mensaje</h1>";
$cuerpo_mensaje .= "<p><strong></strong></p>";
$cuerpo_mensaje .= "<img src=\"cid:imagenPrueba\" alt=\"Imagen de muestra\" width = '1000'>\r\n\r\n";
$cuerpo_mensaje .= "--separador_de_las_partes_del_mensaje\r\n";
$cuerpo_mensaje .= "Content-Type: image/jpeg; name=\"$ruta_imagen\"\r\n";
$cuerpo_mensaje .= "Content-ID: <imagenPrueba>\r\n";
$cuerpo_mensaje .= "Content-Transfer-Encoding: base64\r\n\r\n";
$cuerpo_mensaje .= chunk_split(base64_encode(file_get_contents($ruta_imagen))) . "\r\n\r\n";
$cuerpo_mensaje .= "--separador_de_las_partes_del_mensaje--";


// Envías el correo
$ok = mail($destinatario, $asunto, $cuerpo_mensaje, $cabeceras, '-fpablomotocicletas8@gmail.com');

if ($ok) {
    echo "<p>El E-Mail ha sido enviado</p>";
} else {
    echo "<p>ERROR al enviar el E-Mail</p>";
}
?>
