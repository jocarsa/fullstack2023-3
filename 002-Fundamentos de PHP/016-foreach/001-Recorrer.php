<?php
    $agenda['nombre'] = "Jose Vicente";
    $agenda['telefono'] = "65465464";
    $agenda['email'] = "info@josevicente.com";

    $longitud = count($agenda);
    echo "¿Cuántos elementos hay en la agenda? Hay: ".$longitud."<br>";   
    for($indice = 0;$indice < $longitud;$indice++){
        echo $agenda[$indice]."<br>";
            
    }
    
?>