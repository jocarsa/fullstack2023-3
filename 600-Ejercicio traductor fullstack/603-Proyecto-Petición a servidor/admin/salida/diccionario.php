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
    SELECT *
    FROM diccionario
    WHERE 
    ".$_GET['idioma']." LIKE '%".$_GET['palabra']."%'
";
//echo $peticion;
// Ejecuto la consulta
$resultado = mysqli_query($mibd, $peticion);
// Recojo resultados
$cadena = "";
while ($fila = mysqli_fetch_assoc($resultado)) {
   $cadena .=  $fila['es'].",".$fila['en'].",".$fila['de'].",".$fila['fr'].",".$fila['it']."\n";
}
$cadena = substr($cadena, 0, -1);
echo $cadena;
?>