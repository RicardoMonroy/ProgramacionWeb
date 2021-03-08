<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$paterno = $_POST['paterno'];
$materno = $_POST['materno'];

$ins = $con->query("INSERT INTO `alumnos` (`id`, `nombre`, `paterno`, `materno`) VALUES (NULL, '$nombre', '$paterno', '$materno')");
if($ins){
    echo "Registro almacenado";
}else{
    echo "Uy! algo salió mal.";
}

?>