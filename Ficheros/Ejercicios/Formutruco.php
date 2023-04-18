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
    $pParametros_GET = FALSE;
    $pParametros_POST = FALSE;
    if (count($_GET) != 0) {
        $pParametros_GET = $_GET;
    }
    if (count($_POST) != 0) {
        $pParametros_POST = $_POST;
    }

    if (!$pParametros_GET && !$pParametros_POST) {
        echo "No se ha pasado valor alguno";
        exit();
    }

    echo '<table style="border: 1px solid black">';
    echo "<tr>";
    echo "<th> Nombre </th><th> Valor </th>";
    echo "</tr>";

    foreach ($pParametros_GET as $nombre => $valor) {
        echo "<tr>";
        printf("<td>%s</td><td>%s</td>", $nombre, $valor);
        echo "</tr>";
    }
    echo "<td style='align: center'> ------------------------ </td> <td style='align: center'> ------------------------ </td>";

    foreach ($pParametros_POST as $nombre => $valor) {
        echo "<tr>";
        printf("<td>%s</td><td>%s</td>", $nombre, $valor);
        echo "</tr>";
    }
?>

</form>
</body>
</html>