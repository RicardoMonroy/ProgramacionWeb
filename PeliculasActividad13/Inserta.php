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
       $_query = "INSERT INTO `db_peliculas` (`id`, `nombre`, `tipo_pelicula`, `clasificacion`) VALUES (NULL, 'El Avion', 'Aventura', 'B');";//query de SQL
	   $result = $conn->query($_query); //objeto nuevo
         if (!$result){//revisamos errores
  	      die($conn->error);
         }
     echo "Renglon insertado <br><br>";

     $conn->close();
	?>
	</body>
 </html>
