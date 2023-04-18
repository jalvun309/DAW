<?php

function cambiarDirectorio($ruta) {
    return chdir($ruta);
}

function cambiarDirectorioRaiz($ruta) {
    return chroot($ruta);
}

function obtenerDirectorioActual() {
    return getcwd();
}

function listarArchivosDirectorio($ruta) {
    return scandir($ruta);
}
