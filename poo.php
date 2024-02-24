<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición de clases

    class Persona {
    public $dni;
    public $nombre;
    public $edad;
    public $nacionalidad;

}

class Alumno extends Persona {
    public $legajo;
    public $notaPortfolio;
    public $notaPhp;
    public $notaProyecto;
    
    public function __construct(){
        $this->notaPortfolio = 0.0;
        $this->notaPhp = 0.0;
        $this->notaProyecto = 0.0;
    }


    public function imprimir(){
        echo "DNI: " . $this->dni . "<br>";
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Edad: " . $this->edad . "<br>";
        echo "Nacionalidad: " . $this->nacionalidad . "<br>";
        echo "Nota Portfolio: " . $this->notaPortfolio . "<br>";
        echo "Nota PHP: " . $this->notaPhp . "<br>";
        echo "Nota Proyecto: " . $this->notaProyecto . "<br>";
        echo "El promedio es: " . number_format($this->calcularPromedio(), 2, ".",",") . "<br><br>";
    }

    public function calcularPromedio(){
        return ($this->notaPortfolio + $this->notaPhp + $this->notaProyecto) / 3;
    }
    public function __destruct() {
        echo "Destruyendo el objeto " . $this->nombre . "<br>";
    }
}

class Docente extends Persona {
    public $especialidad;

    public function imprimir(){}

    public function imprimirEspecialidadesHabilitadas(){ }
}


$alumno1 = new Alumno();
$alumno1->nombre = "Juan Gonzalez";
$alumno1->dni = 224155;
$alumno1->nacionalidad = "Argentino";
$alumno1->notaPhp = 10;
$alumno1->notaPortfolio = 5;
$alumno1->notaProyecto = 8; 
$alumno1->imprimir();


$alumno2 = new Alumno();
$alumno2->nombre = "Juan cruz";
$alumno2->dni = 987456;
$alumno2->nacionalidad = "Colombiano";
$alumno2->notaPhp = 10;
$alumno2->notaPortfolio = 8;
$alumno2->notaProyecto = 9; 
$alumno2->imprimir();


?>