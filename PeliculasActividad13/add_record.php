<html>
     <head><title>Catalogo de Peliculas </title> </head>
  <body>
	 <?php
  	    require_once 'login.php';
  		 $con = new mysqli($hn, $un, $pw, $db);
  		 if ($con->connect_error){ //revisamos errores
			die($con->connect_error);
  		 }
  		 $_query = "INSERT INTO db_peliculas (id,nombre,tipo_pelicula,clasificacion) VALUES ('','$_POST[movie_name]','$_POST[movie_type]','$_POST[movie_rate]')";//query de SQL
  		 $result = $con->query($_query); //objeto nuevo
  		 if (!$result){ //revisamos errores
  			 die($con->error);
  		 }
  	   // Si todo sale bien, hay que avisarle al usuario
  		 echo "1 record has sido grabado.";
  		 echo "<br>En 3 segundos volverás a la página anterior.";
		mysqli_close($con);
  		 header( "refresh:3;url=peliculas.php" );
		//refresca la página en 3 segundos y redirige a la URL indicada
	?>
	 </body>
 </html>
