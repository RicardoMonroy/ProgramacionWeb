<?php
echo "Tabla de multiplicar";
echo "<br>";
$lim = 0;
$tabla = 3;
// (Declaración de la variable; comparación; incremento de variable)
for($i = 0; $i <= 10; $i++){
    $res = $tabla * $i;
    echo $tabla." x ".$i." = ".$res;
    echo "<br>";
}
echo "<br>";

while($lim <= 10){
    $res = $tabla * $lim;
    echo $tabla." x ".$lim." = ".$res;
    echo "<br>";
    $lim++; // Importante
}


?>