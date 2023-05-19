<?php
//5.php DELETE. Con PDO
require_once 'pdoConfig.php';

try{
    $dsn = 'mysql:host=' . $server . ';dbname=' . $db;
    $dbh = new PDO($dsn, $user, $pwd);

    $EXPEDIENTE = 100;

    $stmt = $dbh->prepare("DELETE FROM 1_daw WHERE expediente = ?;");
    $res = $stmt->execute([$EXPEDIENTE]);
    echo "Conexión a $db y $server con éxito";
    echo "Entrada eliminada.";
} catch (PDOException $e) {
    echo $e->getMessage();
}