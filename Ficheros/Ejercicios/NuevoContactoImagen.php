<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <title>Page Title</title>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap85.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Formulario Simple</h1>
        <div class="col-md-12 well">
            <?php echo "El nombre del usuario introducido es: ";
            echo $_POST["nombre"];
            echo "</br>"; ?>
        </div>
        <div class="col-md-12 well">
            <?php echo "Los apellidos del usuario introducidos son: ";
            echo $_REQUEST["apellidos"];
            echo "</br>";?>
        </div>
        <div class="col-md-12 well">
            <?php echo "Correo electrónico: ";
            echo $_REQUEST["correo"];
            echo "</br>";?>
        </div>
        <div class="col-md-12 well">
            <?php echo "Mensaje enviado:  ";
            echo $_REQUEST["mensaje"];
            echo "</br>";?>
        </div>
        <div class="col-md-12 well">
            <?php echo "Fichero recibido: ";
            echo $_FILES['foto']['name'];
            echo "</br>";?>
        </div>
        <div class="col-md-12 well">
            <?php echo "Tamaño del fichero: ";
            echo $_FILES['foto']['size'] . " bytes";
            echo "</br>";?>
        </div>
        <div class="col-md-12 well">
            <?php echo "Ruta temporal: ";
            echo $_FILES['foto']['tmp_name'];
            echo "</br>";?>
        </div>
        <div class="col-md-12 well">
            <?php echo "Formato del fichero: ";
            echo $_FILES['foto']['type'];
            echo "</br>";?>
        </div>
        <div class="col-md-12 well">
            <?php echo "Error: ";
            echo $_FILES['foto']['error'];
            echo "</br>";?>
        </div>
   </div>

</body>
</html>