<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario Request</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css&quot;">
    <?php
    if($_POST['resp'] == "") {
        echo "Error en el envío.";
    } else if($_POST['resp'] == "si"){
        setcookie("Correo", $_POST['gmail'], time() + 3600);
        echo "cookie creada";
    }else{
        echo "No se guardara en el sistema";
    }
    ?>
</head>
<body>
    <h1>Introduzca su GMAIL</h1>
    <form action="#" enctype="multipart/form-data" method="post">
        <input type="text" name="gmail" placeholder="Aqui">
        <br>
        <input type="radio" name="resp" id="si" value="si">Recordar en este dispositivo el mail introducido.
        <br>
        <input type="radio" name="resp" id="no" value="no">Por favor, no recordar.
        <br>
        <input type="submit" name="enviar">
    </form>

</body>
</html>