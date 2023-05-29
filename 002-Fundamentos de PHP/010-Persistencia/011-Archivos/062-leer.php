<?php
    $archivo = fopen("mitexto.txt", "r");

    while(!feof($archivo)) {
      echo fgets($archivo) . "<br>";
    }
    fclose($archivo);
?>