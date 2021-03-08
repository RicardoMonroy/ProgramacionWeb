<?php
// Escribe una clase que permita calcular el IVA del 16% de una cantidad “x”.

class Impuesto{

    // Atributos
    public $cantidad;
    public $iva;

    // Métodos
    public function __construct($cantidad){
        $this->iva = 1.16;
        $this->cantidad = $this->calcularIva($this->cantidad, $this->iva);
        
    }

    public function calcularIva($cantidad, $iva){
        return $cantidad * $this->$iva;
    }


}

$impuesto = new Impuesto(100);
echo $impuesto->cantidad;


?>