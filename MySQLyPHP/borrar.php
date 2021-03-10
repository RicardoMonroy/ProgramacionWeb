<?php
include 'conexion.php';

$id = $_REQUEST['id'];

$delete= $con->query("DELETE FROM `alumnos` WHERE `id`='$id' ");

if($delete){
    echo "<script>
        location.href='formulario.php';
    </script>";
}else{
    echo "<script>
        alert('algo salió mal');
        location.href='formulario.php';
    </script>";
}

?>