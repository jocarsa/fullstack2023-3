<?php

    echo "<h2>Creando un nuevo elemento en: ".$_GET['tabla']."</h2>";
    echo "<form action='?operacion=procesaeditar&tabla=".$_GET['tabla']."' method='POST'>";
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
        $peticion2 = "
            SELECT ".$fila['Field']." AS dato
            FROM ".$_GET['tabla']." 
            WHERE Identificador = ".$_GET['id']."
        ";
        //echo $peticion2;
        $resultado2 = mysqli_query($mibd, $peticion2);
        while ($fila2 = mysqli_fetch_assoc($resultado2)) {
            $valor = $fila2['dato'];
        } 
        echo "' name='".$fila['Field']."' placeholder='".$fila['Field']."' value='".$valor."'>";
    }
    echo "<input type='submit'>";
    echo "</form>";

?>