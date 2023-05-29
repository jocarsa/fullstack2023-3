<?php
    $agenda['nombre'] = "Jose Vicente";
    $agenda['telefono'] = "65465464";
    $agenda['email'] = "info@josevicente.com";

    $longitud = count($agenda);
    echo "¿Cuántos elementos hay en la agenda? Hay: ".$longitud."<br>";   
    foreach($agenda as $valor){
        echo "El valor del registro es: ".$valor." <br>";
    }
    
?>