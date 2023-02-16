<html>
<head>
    <title>Trabajo sobre formularios</title>
</head>
<body style="text-align:center">
    <?php
    echo "El plato elegido es: ";
    echo $_POST["plato"];
    echo "<br>";
    echo "<br>";
    echo "El postre elegido es: ";
    echo $_POST["postre"];
    echo "<br>";
    echo "<br>";
    echo "El sexo especificado es: ";
    echo $_POST["sex"];
    echo "<br>";
    echo "<br>";
    echo "Su nombre completo es: ";
    echo $_POST["Usuario"];
    echo "<br>";
    echo "<br>";
    echo "Su edad es: ";
    echo $_POST["edad"];
    echo "<br>";
    echo "<br>";
    echo "Su situacion actual es: ";
    echo $_POST["puesto"];
    echo "<br>";
    echo "<br>";
    echo "Su consulta es: ";
    echo $_POST["Consulta"];
    echo "<br>";
    echo "<br>";
    echo "<h3>El menu elegido es</h3>";
    foreach ($_POST["Menu"] as $valor){
        echo "<li>$valor</li>";
    }

    ?>



</body>
</html>