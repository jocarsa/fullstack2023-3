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
";
// Ejecuto la consulta
$resultado = mysqli_query($mibd, $peticion);
// Recojo resultados
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo $fila['es'].",".$fila['en'].",".$fila['de'].",".$fila['fr'].",".$fila['it']."\n";
}
?>