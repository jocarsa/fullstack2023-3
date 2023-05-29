<?php
    class Gato{
        // Propiedades 
        function __construct(){
            $this->edad = 0;
        }
        // Métodos
        function maulla(){
            echo "El gato está maullando<br>";
        }
        function trepa(){
            echo "El gato está trepando<br>";
        }
    } 

    $micifu = new Gato();
    echo "La edad de micifú es: ".$micifu->edad."<br>";
    // Le cambio la edad al gato
    $micifu->edad = 5;
    echo "La edad de micifú es: ".$micifu->edad."<br>";
    $micifu->maulla();
    $micifu->trepa();
?>
