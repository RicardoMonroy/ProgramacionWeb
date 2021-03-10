<?php
include 'conexion.php';

$id = $_REQUEST['id'];

$sel = $con->query("SELECT * FROM `alumnos` WHERE `id`='$id' ");

if( $fila = $sel->fetch_assoc() ){
    
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="update.php" method="POST"> 
        <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
        <input type="text" name="nombre" placeholder="Inserta tu nombre" value="<?php echo $fila['nombre']; ?>"><br>
        <input type="text" name="paterno" placeholder="Inserta tu apellido parterno" value="<?php echo $fila['paterno']; ?>"><br>
        <input type="text" name="materno" placeholder="Inserta tu apellido materno" value="<?php echo $fila['materno']; ?>"><br>
        <button type="submit">Actualziar</button>
    </form>
    <br><br>
    
</body>
</html>