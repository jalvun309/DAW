<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Conexion con base de datos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php
$conexion = mysqli_connect("localhost", "root", "", "ies_trafalgar","0");
if(!$conexion){
    echo "Error al conectar";
    exit();
}else{
    echo "Conexion correcta";
}

echo "<br>";
/*Comprueba la conexion*/
if( mysqli_connect_errno()){
    printf("Fallo en la conexion: %s\n", mysqli_connect_error());
    exit;
}

/*Devuelve el nombre de la base de datos actualmente seleccionada*/
$resultado=mysqli_query($conexion,"SELECT DATABASE()");
if(!$conexion){
    $row = mysqli_fetch_row($resultado);
    printf("La BBDD predeterminada es s%.\n", $row[0]);
    mysqli_free_result($resultado); //Obligado a liberar memoria
}

/*Primera consulta a la base de datos */
$consulta = mysqli_query($conexion, "SELECT * from alumnos_1_daw");
echo "<br>";

if(!$consulta){
    echo "Error en la consulta";
    exit();
}else{
    echo "Seleccion correcta de la consulta";
}
echo "</br>";
while ($res_consulta=mysqli_fetch_array($consulta)){
    echo "<br>";
    echo "Expediente:";
    echo $res_consulta["Expediente"];
    echo "<br>";
    echo "DNI:";
    echo $res_consulta["DNI"];
    echo "<br>";
    echo "Nombre:";
    echo $res_consulta["Nombre"];
    echo "<br>";
    echo "Domicilio:";
    echo $res_consulta["Domicilio"];
    echo "<br>";
}
?>
</body>
</html>