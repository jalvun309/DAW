<?php
class Perro {
    private $raza;
    private $color;
    private $edad;
    private $estaContento = false;
    private $tieneHambre = true;
    private $necesitaHacer = false;

    public function __construct($raza, $color, $edad) {
        $this->raza = $raza;
        $this->color = $color;
        $this->edad = $edad;
    }

    // Getter y Setter para raza
    public function getRaza() {
        return $this->raza;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }

    // Getter y Setter para color
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
    }

    // Getter y Setter para edad
    public function getEdad() {
        return $this->edad;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    // Función para acariciar al perro
    public function acariciar() {
        $this->estaContento = true;
        echo "¡Tu perro está feliz! 🐶💖\n";
    }

    // Función para mover la cola
    public function moverCola() {
        $this->estaContento = true;
        echo "Tu perro está moviendo la cola. Parece que está contento. 🐶🐾\n";
    }

    // Función para alimentar al perro
    public function comer() {
        $this->tieneHambre = false;
        echo "¡Tu perro ha comido! 🍖🍗🐶\n";
    }

    // Función para hacer necesidades
    public function hacerNecesidades() {
        $this->necesitaHacer = false;
        echo "Tu perro ha hecho sus necesidades. 🐶💩\n";
    }

    public function reset(){
        $this->estaContento = false;
        $this->tieneHambre = true;
        $this->necesitaHacer = true;
    }

    // Getter para el estado del perro
    public function getEstado() {
        $estado = "Tu perro ";
        if ($this->estaContento) {
            $estado .= "está contento ";
        } else {
            $estado .= "no está contento ";
        }

        if ($this->tieneHambre) {
            $estado .= "y tiene hambre. ";
        } else {
            $estado .= "y no tiene hambre. ";
        }

        if ($this->necesitaHacer) {
            $estado .= "También necesita hacer sus necesidades.";
        } else {
            $estado .= "No necesita hacer sus necesidades.";
        }

        return $estado;
    }
}
/*
$perro = new Perro('Labrador', 'Negro', 3);

// Probamos las funciones del objeto
$perro->acariciar();
$perro->moverCola();
$perro->comer();
$perro->hacerNecesidades();

echo "\n\n";

//$perro->reset();

// Mostramos el estado del perro
echo $perro->getEstado();
*/
$perro = new Perro('Labrador', 'Negro', 3);
$salir=0;
while ($salir==0){
    echo "Bienvenido al menu de tu perro, esta son las acciones que puedes tener con tu perro"."\n";
    echo "1.Acariciar."."\n";
    echo "2.Darle de comer."."\n";
    echo "3.Sacar al perro a pasear."."\n";
    echo "4.Revisar carnet canino."."\n";
    echo "5.Desaparecer"."\n";
    echo "\n¿Que quieres hacer? Responde según los numeros de las opciones."."\n";
    $respuesta= trim(fgets(STDIN));

    switch ($respuesta) {
        case 1:
            $perro->acariciar();
            $perro->moverCola();
            break;
        case 2:
            $perro->comer();
            break;
        case 3:
            $perro->hacerNecesidades();
            break;
        case 4:
            echo "La raza de tu perro es: ".$perro->getRaza().".";
            echo "Tiene: ".$perro->getedad(). " años.";
            echo "El color de tu perro es: ".$perro->getcolor().".";
            break;
        case 5:
            $salir=1;
            echo "Tu perro te ve irte tras el horizonte orgulloso por darle de comer 1 vez al año";
            break;
        default:
            echo "Opción no comprendida entre las opciones que hacer con tu perro";
            break;
    }

}

