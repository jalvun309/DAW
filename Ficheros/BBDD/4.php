<?php
//4.php READ. Con PDO
$server = 'localhost';
$db = 'ies_trafalgar';
$user = 'root';
$pwd = '';

try{
    $dsn = 'mysql:host=' . $server . ';dbname=' . $db;
    $dbh = new PDO($dsn, $user, $pwd);
    echo "Conexión a $db y $server con éxito";

    echo "<br/>";
    $stmt = $dbh->query('SELECT expediente, dni, nombre, domicilio FROM 1_daw');
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    while ($fila = $stmt->fetch()) {
        echo $fila['expediente'] . " ";
        echo $fila['dni'] . " ";
        echo $fila['nombre'] . " ";
        echo $fila['domicilio'] . " ";
        echo "<br/>";
    }
    echo "<br/>";
    echo "<br/>";
    var_dump($stmt);
    var_dump($fila);

} catch (PDOException $e) {
    echo $e->getMessage();
}

$dbh = null;