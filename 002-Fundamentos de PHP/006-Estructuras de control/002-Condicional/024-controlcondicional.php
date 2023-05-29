<?php
    $agenda[0]['nombre'] = "Jose Vicente";
    $agenda[0]['telefono'] = "65465464";
    $agenda[0]['email'] = "info@josevicente.com";

    $agenda[1]['nombre'] = "Juan";
    $agenda[1]['telefono'] = "63456465";
    $agenda[1]['email'] = "info@juan.com";

    $agenda[2]['nombre'] = "Julia";
    $agenda[2]['telefono'] = "634565465";
    $agenda[2]['email'] = "info@julia.com";

    $longitud = count($agenda);

    echo "¿Cuántos elementos hay en la agenda? Hay: ".$longitud."<br>";   
    for($indice = 0;$indice < $longitud;$indice++){
        echo $agenda[$indice]['nombre']."-".
            $agenda[$indice]['telefono']."-".
            $agenda[$indice]['email']."<br>";
            
    }
    
?>
