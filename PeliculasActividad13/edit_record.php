<?php //edit_record.php
 // primero creamos la forma mediante una función renderForm() para que sea altamente reusable, observa que envolvemos el HTML desde este punto

function renderForm($id, $movie_name, $movie_type, $movie_rate, $error) {
?>
<html>
   <head> <title>Editar Record</title> </head>
<body>
   <h4>Quieres editar este record?</h4>
<?php
    // si existe algún error lo desplegamos con estilo
    if ($error != '') {
  	  echo '<div style="padding:4px; border:3px solid red; color:red;">'.$error.'</div>';
    }
    ?>
   <form action="" method="post">
  	 <input type="hidden" name="id" value="<?php echo $id; ?>"/>
  	 <div>
        <p><strong>ID:</strong> <?php echo $id; ?></p>
	  <strong>Nombre de la pelicula: *</strong> <input type="text" name="movie_name" value="<?php echo $movie_name; ?>"/><br>
	  <strong>Tipo de pelicula: *</strong> <input type="text" name="movie_type" value="<?php echo $movie_type; ?>"/><br>
	  <strong>Clasificacion: *</strong> <input type="text" name="movie_rate" value="<?php echo $movie_rate; ?>"/><br/>
        <p>*Requerido</p>
  	 <input type="submit" name="submit" value="Submit">
  	 </div>
   </form>
</body>
</html>
<?php
}
   //la conexión
   require_once 'loginB.php';
  // modificamos este archivo para que sea más reusable, puedes ver el código más adelante. Se llama loginB.php

   // revisamos si la forma fue procesada. Si no ha sido procesada, entonces lo hacemos y guardamos los cambios en la base de datos
    if (isset($_POST['submit'])) {
    // confirmamos que 'id' es un número INT valido antes de tomar los datos de la forma
    if (is_numeric($_POST['id'])) {
  	  // tomamos la información de la forma, asegurándonos de que sea válida
      $id = $_POST['id']; // asignamos el valor de la variable por el que enviamos por el URL
  	  $movie_name = mysql_real_escape_string(htmlspecialchars($_POST['movie_name']));
      $movie_type = mysql_real_escape_string(htmlspecialchars($_POST['movie_type']));
      $movie_rate = mysql_real_escape_string(htmlspecialchars($_POST['movie_rate']));
    // revisamos que los campos de la forma tengan información, no pueden estar vacios!
    if ($movie_name == '' || $movie_type == '' || $movie_rate == '') {   	  // generamos un mensaje de error
  	  $error = 'ERROR: LLena todos los campos!';
    //desplegamos la forma invocando la función que creamos
  	 renderForm($id, $movie_name, $movie_type, $movie_rate, $error);
    } else {
  	  // grabamos los cambios en la base de datos
	  mysql_query("UPDATE db_peliculas SET nombre='$movie_name', tipo_pelicula='$movie_type', clasificacion='$movie_rate' WHERE id='$id'")
      or die(mysql_error());

  	 //ya que los grabamos, redireccionamos a la pantalla anterior
  header("Location:peliculas.php");
    }
    } else  {
    // si 'id' no es válida, desplegamos un error
       echo 'Error!';
      }
    }  else {
    // si la forma no ha sido enviada, desplegamos la información de la base de datos en los campos de la forma, para que el usuario pueda ver que cambiar


    // tomamos el valor de 'id' del URL y nos aseguramos de que sea valido (revisamos que sea un valor numérico mayor a 0)
    if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)     {     // consultamos la base de datos
    $id = $_GET['id'];
    $result = mysql_query("SELECT * FROM db_peliculas WHERE id=$id")
    or die(mysql_error());
    $row = mysql_fetch_array($result);
    // verifica que el'id' sea igual que en el renglón de la base de datos
    if($row) {
    // obtén la información de la base de datos
    $movie_name = $row['nombre'];
    $movie_type = $row['tipo_pelicula'];
    $movie_rate = $row['clasificacion'];
    // mostramos  la forma
    renderForm($id, $movie_name, $movie_type, $movie_rate, '');
    }   else /* no hay resultados? avisa al usuario! */ {
    echo "No hay resultados!";

    }
    }  else
// si el valor de 'id' en el URL no es válido o no hay un valor, desplegamos el error
    {     echo 'Error!';     }

    }
?>
