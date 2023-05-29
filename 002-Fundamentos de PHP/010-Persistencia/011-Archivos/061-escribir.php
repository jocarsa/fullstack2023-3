<?php
    $archivo = fopen("misdatos.txt", "w");
    $texto = "Yo te digo Hola desde PHP\n";
    fwrite($archivo, $texto);
    fclose($archivo);
?>