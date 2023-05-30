<?php

$mibd = mysqli_connect(
    "localhost", 
    "usuariodb", 
    "contrasenadb", 
    "aplicacion"
);

$peticion = "
    SHOW TABLES FROM aplicacion
";

$resultado = mysqli_query($mibd, $peticion);

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo $fila['Tables_in_aplicacion'];
    
}

?>
