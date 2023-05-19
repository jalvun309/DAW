<?php
//3.php UPDATE. Con PDO. Sentencias preparadas con ARRAYS y objetos.
require_once 'alumno.php';

//conexion
$server = "localhost";
$user="root";
$pwd = "";
$db = "ies_trafalgar";

//Conectar
$dbh = mysqli_connect($server, $user, $pwd, $db);

//Comprobar conexion

if ($dbh->connect_error) {
    die("Conexion fallida" . $dbh->connect_errno . ": " .$dbh->connect_error);
} else {
    echo "<br/>";
    echo "Conexion correcta";
}

//preparar

$stmt = $dbh->prepare("INSERT INTO 1_daw (EXPEDIENTE, DNI, NOMBRE, DOMICILIO) VALUES (:expediente, :dni, :nombre, :domicilio)");

//Conectar y ejecutar
$expediente = 200002;
$dni = "12345678P";
$nombre = "Lucía Martínez";
$domicilio = "Paseo Fluvial";

$stmt->execute(array(':expediente' => $expediente, ':dni' => $dni, ':nombre' => $nombre, ':domicilio' => $domicilio));

//mensaje
echo "Se ha generado la entrada con arrays";

//Cerrar conexion
$stmt->close();
$db->close();

//Inserción desde objeto
$alumno = new alumno( 445576, '12345678U', 'Zacarias Mendoza', 'Paseo de la Estación');

var_dump($alumno);

$alumno_array = (array) $alumno;

var_dump($alumno_array);

try {
    $dsn = 'mysql:host=' . $server . '; dbname=' . $db;
    $dbh = new PDO($dsn, $user, $pwd);

    $stmt = $dbh->prepare("INSERT INTO 1_daw (EXPEDIENTE, DNI, NOMBRE, DOMICILIO) VALUES (:expediente, :dni, :nombre, :domicilio)");
    $stmt->execute($alumno_array);
} catch (PDOException $e) {
    echo $e->getMessage();
}

$dbh = null;



