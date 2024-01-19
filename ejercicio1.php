<?php
    if (isset($_POST["enviar"]) && isset($_POST["nombre"]) &&  !empty($_POST["nombre"]) && 
    isset($_POST["apellidos"]) && !empty($_POST["apellidos"])
    && isset($_POST["mensaje"]) &&  !empty($_POST["nombre"])
    && isset($_POST["mensaje"]) &&  !empty($_POST["mensaje"])
    && isset($_POST["asunto"]) &&  !empty($_POST["asunto"])
    && isset($_POST["email"]) &&  !empty($_POST["email"])) {
        $de = "From: pablomotocicletas8@gmail.com";
        FILTER_VALIDATE_EMAIL;
        if (mail($_POST["email"], $_POST["asunto"], $_POST["mensaje"], $de)) {
            echo "Correo enviado";
        }else{
            echo "Correo no enviado";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio1.php" method="post">
        <p>Nombre: <input type="text" name="nombre" id=""></p>
        <p>Apellidos:  <input type="text" name = "apellidos"></p>
        <p>Email: <input type="text" name="email" id=""></p>
        <p>Asunto: <input type="text" name="asunto" id=""></p>
        <p>Mensaje: <input type="text" name="mensaje" id=""></p>
        <p>
            Mensaje: <br>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
        </p>
        <p><button type="submit" name="enviar">Enviar</button></p>
    </form>
</body>
</html>