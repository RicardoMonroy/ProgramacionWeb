<?php

$num1 = $_POST['valor1'];
$num2 = $_POST['valor2'];
$operador = $_POST['operador'];

switch($operador){
    case 0: $res = $num1 + $num2;
        break;
    case 1: $res = $num1 - $num2;
        break;
    case 2: $res = $num1 * $num2;
        break;
    case 3: $res = $num1 / $num2;
        break;
}

$nombre = array('suma', 'resta', 'multiplicación', 'división');

echo "El resultado de tu ".$nombre[$operador]." es: ".$res;

?>