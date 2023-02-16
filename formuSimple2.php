<!DOCTYPE html>
<html>
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
            Nombre: ( $_POST ): <?= $_POST['nombre']?>
        </div>
        <div class="col-md-12 well">
            Apellidos: ( $_REQUEST ): <?= $_REQUEST['apellidos']?>
        </div>

    </div>
    
</body>
</html>