<?php

    echo "<h2>Creando un nuevo elemento en: ".$_GET['tabla']."</h2>";
    echo "<form action='?operacion=procesanuevo&tabla=".$_GET['tabla']."' method='POST'>";
    $peticion = "
        SHOW COLUMNS FROM ".$_GET['tabla']."
    ";
    $resultado = mysqli_query($mibd, $peticion);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo "<input type='";
        if($fila['Field'] == "Identificador"){
            echo "hidden";
        }else{
            echo "text";
        }
        echo "' name='".$fila['Field']."' placeholder='".$fila['Field']."' >";
    }
    echo "<input type='submit'>";
    echo "</form>";

?>