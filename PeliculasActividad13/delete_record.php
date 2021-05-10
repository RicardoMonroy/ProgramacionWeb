<?php  //delete_record
  //connection
   require_once 'loginB.php';
   $conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error){//revisamos errores
		die($conn->connect_error);
   	}
    // verificamos que la variable 'id' exista en el URL y verificamos que sea valida
    if (isset($_GET['id']) && is_numeric($_GET['id']))     {
    // tomamos su valor
    $id = $_GET['id'];
    // le pedimos a la base de datos que borre el registro
    $result = mysql_query("DELETE FROM db_peliculas WHERE id=$id")
    or die(mysql_error());
    // redireccionamos de regreso a peliculas.php
    header("Location:peliculas.php");
    } else
    // si no era válido, vamos de regreso de todas maneras
    {
    header("Location:peliculas.php");
    }
?>
