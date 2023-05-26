<?php
    $dia = "longaniza";

    switch($dia){
        case "lunes":
            echo "Hoy es el peor día de la semana <br>";
            break;
        case "martes":
            echo "Hoy es el segundo peor día de la semana <br>";
            break;
        case "miercoles":
            echo "Ya estamos a mitad de semana <br>";
            break;
        case "jueves":
            echo "Ya casi es viernes <br>";
            break;
        case "viernes":
            echo "Por fin es viernes <br>";
            break;
        case "sabado":
            echo "Hoy es el mejor dia de la semana <br>";
            break;
        case "domingo":
            echo "Parece mentira que mañana ya es lunes <br>";
            break;
        default:
            echo "Eso no es un día";
    }
    
    
?>
