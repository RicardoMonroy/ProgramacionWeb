<?php
/*
= -> Operador de asignación
*/

// Operadores lógicos
/*
== Comparación 
=== Igualdad
!= Negación o diferente (<>)
!== Desigualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que

AND - && -> Verdadero si ambos son verdaderos
OR - || -> Verdadero si al menos uno es verdadero
Xor -> Verdadero si al menos uno es verdadero y falso si ambos son verdaderos
*/

$var1 = 10;
$var2 = "10";
$var3 = 5;

echo $var1 + $var2;
echo "<br>";

if($var1 === $var2){
    echo "Son iguales";
}else{
    echo "no son iguales";
}

echo "<br>";

if($var1 == $var2 Xor $var3 == 5){
    echo "Verdaero";
}


?>