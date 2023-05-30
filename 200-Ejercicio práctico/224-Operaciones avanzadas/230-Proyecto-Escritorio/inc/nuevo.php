<?php

    echo "<h2>Creando un nuevo elemento en: ".$_GET['tabla']."</h2>";
    echo "<form action='?operacion=procesanuevo&tabla=".$_GET['tabla']."' method='POST'>";
    $peticion = "
        SHOW COLUMNS FROM ".$_GET['tabla']."
    ";
    $resultado = mysqli_query($mibd, $peticion);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        if(strpos($fila['Field'], "FK") === false){
            echo "<input type='";
            if($fila['Field'] == "Identificador"){
                echo "hidden";
            }else{
                echo "text";
            }
            echo "' name='".$fila['Field']."' placeholder='".$fila['Field']."' >";
        }else{
            echo "<select name='".$fila['Field']."'>";
            $partido = explode("_",$fila['Field']);
            $tabla = $partido[1];
            $columna = $partido[2];
            $peticion2 = "
                SELECT Identificador, ".$columna." as dato 
                FROM ".$tabla."
            ";
            
            $resultado2 = mysqli_query($mibd, $peticion2);
            while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                echo "<option value='".$fila2["Identificador"]."'>".$fila2["dato"]."</option>";
            }
            echo "</select>";
        }
    }
    echo "<input type='submit'>";
    echo "</form>";

?>