<?php

class Persona{

    // Atributos
    public $nombre = array();
    public $apellido =array();
    public $edad = array();

    // Métodos
    public function guardar($nombre, $apellido, $edad){
        $this->nombre[] = $nombre;
        $this->apellido[] = $apellido;
        $this->edad[] = $edad;
    }

    public function ver(){
        for($i = 0; $i < count($this->nombre) ; $i++){
            $this->formato($this->nombre[$i], $this->apellido[$i], $this->edad[$i]);
        }
    }

    public function formato($nombre, $apellido, $edad){
        echo "Nombre: " . $nombre . " | Apellido: " . $apellido . " | Edad: ". $edad . "<br>";
    }

}

class Alumno extends Persona{

}

$persona = new Persona();
$persona->guardar("Ricaro", "Monroy", "41");
$persona->guardar("Mariana", "Trejo", "19");
$persona->ver();
echo "<br>";

$alumno = new Alumno();
$alumno->guardar("Cesar", "García", "20");
$alumno->ver();

?>