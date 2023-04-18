<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    $n = 100;
    $u = -43951789;
    $c = 65;
    printf("%%b = '%b'\n", $n); // Representacion binaria
    echo "<br>";
    printf("%%c = '%c'\n", $n); // Escribe la representacion en ascci, como la funcion chr()
    echo "<br>";
    printf("%%d = '%d'\n", $n); // Representacion estandar
    echo "<br>";
    printf("%%e = '%e'\n", $n); // Anotacion cientifica
    echo "<br>";
    printf("%%u = '%u'\n", $n); // Representacion no asignada de un numero positivo
    echo "<br>";
    printf("%%u = '%u'\n", $u); // Representacion no asignada de un numero negativa
    echo "<br>";
    printf("%%f = '%f'\n", $n); // Representacion en punto flotante
    echo "<br>";
    printf("%%o = '%o'\n", $n); // Representacion en octal
    echo "<br>";
    printf("%%s = '%s'\n", $n); // Representacion en String
    echo "<br>";
    printf("%%x = '%x'\n", $n); // Representacion hexadecimal en minuscula
    echo "<br>";
    printf("%%X = '%X'\n", $n); // Representacion hexadecimal en mayuscula

    ?>
</body>
</html>