<!DOCTYPE html>
<html>
<head>
    <title>Formulario con estilo oscuro</title>
    <style>
        body {
            background-color: #222;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        form {
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        textarea {
            display: block;
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            background-color: #444;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #666;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<form>
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" placeholder="Escriba su nombre aquí">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Escriba su email aquí">

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" placeholder="Escriba su contraseña aquí">

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" placeholder="Escriba su mensaje aquí"></textarea>

    <input type="submit" value="Enviar">
</form>

</body>
</html>
