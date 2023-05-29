<?php
    class Gato{
        // Propiedades 
        function __construct(){
            $this->edad = 0;
        }
        // Métodos
    } 

    $micifu = new Gato();
    echo "La edad de micifú es: ".$micifu->edad."<br>";
    // Le cambio la edad al gato
    $micifu->edad = 5;
    echo "La edad de micifú es: ".$micifu->edad."<br>";
?>
