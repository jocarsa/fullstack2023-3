<?php
    
// Me conecto a la base de datos
$mibd = mysqli_connect(
    "localhost", 
    "usuariodb", 
    "contrasenadb", 
    "aplicacion"
);
// Preparo una consulta
$peticion = "
   DELETE FROM usuarios
   WHERE
   Identificador = 3
";
// Ejecuto la consulta
$resultado = mysqli_query($mibd, $peticion);

?>
