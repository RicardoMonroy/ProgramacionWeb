<html>
      <head>
    	<title>Catalogo de Peliculas</title>
  </head>
 <body>
	<?php
   	    require_once 'login.php'; //ya sabemos que es esto :)
		$conn = new mysqli($hn, $un, $pw, $db);
   if ($conn->connect_error){//revisamos errores
  		 die($conn->connect_error);
	   }
 	    $_query = "SELECT * FROM db_peliculas";//query de SQL
	   $result = $conn->query($_query); //objeto nuevo
         if (!$result){//revisamos errores
  	      die($conn->error);
         }
         $rows = $result->num_rows; //checamos los rows de informacion
         for ($j = 0 ; $j < $rows ; ++$j){//un loop, lo recuerdas?
  	     $result->data_seek($j);//buscamos la informacion del renglon seleccionando
  	     $row = $result->fetch_array(MYSQLI_ASSOC);//regresa la información foramateada
		//codigo que repetimos
  	    echo 'Folio: ' . $row['id'] . '<br>';
         echo 'Nombre pelicula: ' . $row['nombre'] . '<br>';
  	    echo 'Tipo de pelicula: ' . $row['tipo_pelicula'] . '<br>';
  	    echo 'Clasificacion: ' . $row['clasificacion'] . '<br>';
  	    echo "_____________________<br><br>";
      }
     $result->close();
     $conn->close();
	?>
	</body>
    <body>
  <h1>INSERTA NUEVAS PELICULAS </h1>
   <?php
echo <<<_END
   <form method='post' action='add_record.php'>
     Captura todos los campos:<br>
     <input type='text' name='movie_name' size='30'>
     <input type='text' name='movie_type' size='30'>
     <input type='text' name='movie_rate' size='1'>
     <input type='submit' value='Grabar'>
   </form>
   <hr>
_END;
      echo '<p><a href="edit_record.php?id=' . $row['id'] . '">Editar este record</a></p>';
      echo '<p><a href="delete_record.php?id=' . $row['id'] . '">Borrar este record</a></p>';


	?>

	
	<body> 

 </html>
