<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulario Request</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css&quot;">
</head>
<body>
<div class='container'>
    <h1>Formulario Request</h1>
    <div class="col-md-12 well">
        <form role="form" id="myform" action="NuevoContactoImagen.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" aria-describedby="nombreHelp">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" name="apellidos" class="form-control" id="apellidos">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" name="correo" class="form-control" id="correo">
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <input type="text" name="mensaje" class="form-control" id="mensaje" placeholder="Introduzca su texto aquí...">
            </div>
            <div class="mb-3">
                <input type="checkbox" name="marcar" class="form-check-input" id="marcar">
                <label class="form-check-label" for="marcar"> Aceptar los <a href="https://www.google.es">terminos y condiciones</a></label>
            </div>
            <div class="mb-3">
                <input type="file" name="foto" class="form-check-input" id="foto">
                <label class="form-check-label" for="foto"> </label>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
</body>
</html>