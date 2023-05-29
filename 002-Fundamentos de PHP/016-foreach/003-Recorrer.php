<?php
    $agenda['nombre'] = "Jose Vicente";
    $agenda['telefono'] = "65465464";
    $agenda['email'] = "info@josevicente.com";

    $longitud = count($agenda);
    echo "¿Cuántos elementos hay en la agenda? Hay: ".$longitud."<br>";   
    foreach($agenda as $clave=>$valor){
        echo "El índice del registro es ".$clave." y su valor es: ".$valor." <br>";
    }
    
?>