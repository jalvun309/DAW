<?php
//2.php CREATE. Creación BBDD y conectar con PDO. Cerrar conexión y bloque try/catch (EXCEPCIONES).. READ. Con PDO. Fetch()

require_once 'pdoConfig.php';

//Conexión
try {
    $dsn = 'mysql:host=' . $server . ';dbname=' . $db;
    $dbh = new PDO($dsn, $user, $pwd);
    echo "Conexión a $db y $server con éxito";
}catch (PDOException $e) {
    echo $e->getMessage();
}
//Preparar
$stmt = $dbh->prepare("INSERT INTO 1_daw (EXPEDIENTE, DNI, NOMBRE, DOMICILIO) VALUES (?,?,?,?)");
$stmt->bind_param('isss', $expediente, $dni, $nombre, $domicilio);

//Ejecutar y establecer parametros
$expediente = 5555;
$dni = "12345678N";
$nombre= "Ernesto Pérez";
$domicilio = "Río Barbate 54";
$stmt->execute();

//Mensaje al insertar
echo "Creada la entrada";

//Cerrar conexion
$stmt->close();
$db->close();

//Introducir sentencia
$stmt = $dbh->prepare("SELECT NOMBRE, DOMICILIO FROM 1_daw");
$stmt->execute();
$stmt->bind_result($nombre, $domicilio);
while ($stmt->fetch()) {
    echo "<br/>";
    printf("%s %s \n", $nombre, $domicilio);
    echo "<br/>";
}

$db = null;
