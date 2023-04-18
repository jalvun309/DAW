<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Libro de visitas</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        div {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<?php
$ruta = 'visitas.txt';
if (isset($_POST['enviar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    $visita = array($nombre, $email, $mensaje);
    $linea = implode(" | ", $visita);
    $fp = fopen($ruta, 'a+');
    fputs($fp, $linea . PHP_EOL);
    fwrite ($fp, "\n");
    fclose($fp);
}

?>
<h1> Libro de visitas</h1>

<div style="margin-bottom: 25px">
    <form action="#" method="post">
        <label for="nombre"> Tu nombre: </label>
        <input type="text" name="nombre" placeholder="Escribe tu nombre...">
        <label for="nombre"> Tu e-mail: </label>
        <input type="text" name="email" placeholder="Escribe tu e-mail...">
        <br>
        <label for="nombre"> Tu mensaje: </label>
        <input type="text" name="mensaje" placeholder="Escribe tu mensaje...">
        <input type="submit" name="enviar" value="enviar">
    </form>
</div>
<div style="font-size: 18px">
    <?php
    readfile($ruta);
    clearstatcache();?>
</div>
</body>
</html>