<?php

include "configuracion.php";

$peticion = "
    SHOW TABLES FROM aplicacion
";

$resultado = mysqli_query($mibd, $peticion);

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<a href='?tabla=".$fila['Tables_in_aplicacion']."'>
        <span class='icono'>"
        .$fila['Tables_in_aplicacion'][0]
        ."</span>"
        .$fila['Tables_in_aplicacion']
        ."</a>";
    
}

?>
<a href='cerrarsesion.php'>
        <span class='icono'>c</span>Cerrar Sesión</a>
