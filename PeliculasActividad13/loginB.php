<?php  //loginB.php
$hn = 'localhost'; //o puede ser 127.0.0.1, da igual
  $db = 'test_database'; //aqui pon el nombre de tu base de datos
  $un = 'root'; //tu usuario en caso de que sea otro
  $pw = ''; //contraseña en caso de que la hayas configurado
  // Connect to Database, aqui nos ahorramos algo de tecleo
    $conn = mysql_connect($hn, $un, $pw)
    or die ("Could not connect to server ... \n" . mysql_error ());
    mysql_select_db($db)
    or die ("Could not connect to database ... \n" . mysql_error ());
?>
