<?php
class Alumno {
    public int $expediente;
    public string $dni;
    public string $nombre;
    public string $domicilio;

    public function __construct($expediente, $dni, $nombre, $domicilio){
        echo "Constructor iniciado.";
        $this->expediente = $expediente;
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->domicilio = $domicilio;
        echo "Constructor finalizado.";
    }
}

