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
    echo "<a href='?tabla=".$fila['Tables_in_aplicacion']."'>"
        .$fila['Tables_in_aplicacion']
        ."</a>";
    
}

?>
