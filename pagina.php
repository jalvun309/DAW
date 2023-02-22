<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario Request</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css&quot;">

</head>
<body style="background-color: <?php echo $_COOKIE['colorCookie'] ?? '#fff' ?>">
<?php
if($_POST['color'] != "") {
    setcookie("colorCookie", $_POST['color'], time() + 3600);
} else {
    echo "Error en el envío.";
}
?>
<div class='container'>
    <h1>Cookie y colores</h1>
    <div class="col-md-12 well">
        <form role="form" id="myform" action="#"  method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <h2> Seleccione color de la página </h2>
                <input type="radio" name="color" value="red">
                <label for="rojo"> ROJO </label>
                <input type="radio" name="color" value="blue">
                <label for="azul"> AZUL </label>
                <input type="radio" name="color" value="green">
                <label for="verde"> VERDE </label>
                <br>
                <input type="submit" name="proc">
            </div>
    </div>
</div>

</body>
</html>