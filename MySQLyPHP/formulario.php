<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="guardar.php" method="POST"> 
        <input type="text" name="nombre" placeholder="Inserta tu nombre"><br>
        <input type="text" name="paterno" placeholder="Inserta tu apellido parterno"><br>
        <input type="text" name="materno" placeholder="Inserta tu apellido materno"><br>
        <button type="submit">Guardar</button>
    </form>
    <br><br>
    
        <table>
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Editar</th>
                <th>Borrar</th>
            </thead>
            <tbody>
            <?php 
            $sel = $con->query("SELECT * FROM `alumnos` ");
            while($fila = $sel->fetch_assoc() ){
            ?>
                <tr>
                    <td><?php echo $fila['id']; ?></td>
                    <td><?php echo $fila['nombre']; ?></td>
                    <td><?php echo $fila['paterno']; ?></td>
                    <td><?php echo $fila['materno']; ?></td>
                    <td><a href="actualizar.php?id=<?php echo $fila['id'] ?>">Editar</a></td>
                    <td><a href="borrar.php?id=<?php echo $fila['id'] ?>">Borrar</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>        
        </table>    
</body>
</html>