<?php
    $numero = -34.2;
    echo "Redondeo natural: ".round($numero)."<br>";
    echo "Redondeo a la baja: ".floor($numero)."<br>";
    echo "Redondeo al alza: ".ceil($numero)."<br>";
    echo "Absoluto: ".abs($numero)."<br>";
    echo "Redondeo absoluto: ".round(abs($numero))."<br>";
    echo "Coseno: ".cos($numero)."<br>";
    echo "Seno: ".sin($numero)."<br>";
    echo "Aleatorio: ".(rand(1,100)/10)."<br>";
    echo "Coseno con redondeo: ".round(cos($numero),2)."<br>";
?>
