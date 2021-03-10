<?php

include 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

$update = $con->query("UPDATE `alumnos` SET `nombre`='$nombre',`paterno`='$paterno',`materno`='$materno' WHERE `id`='$id' ");

if($update){
    echo "<script>
        location.href='formulario.php';
    </script>";
}else{
    echo "<script>
        location.href='actualizar.php?id=".$id."';
    </script>";
}


?>