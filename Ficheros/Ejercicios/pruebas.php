<?php
if($resultado=mysqli_query($conexion,"SELECT DATABASE()")){
    $row = mysqli_fetch_row($resultado);
    printf("La BBDD predeterminada es s%\n", $row[0]);
    mysqli_free_result($resultado); //Obligado a liberar memoria
}
