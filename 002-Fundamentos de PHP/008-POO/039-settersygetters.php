<?php
    class Gato{
        // Propiedades
        private $edad;
        function __construct(){
            $this->edad = 0;
        }
        // Métodos
        function maulla(){
            return "El gato está maullando<br>";
        }
        function trepa(){
            return "El gato está trepando<br>";
        }
        function setEdad($nuevaedad){
            $this->edad = $nuevaedad;
        }
        function getEdad(){
            return $this->edad;
        }
    } 

    $micifu = new Gato();
    echo "La edad de micifú es: ".$micifu->getEdad()."<br>";
    // Le cambio la edad al gato
    $micifu->setEdad(5);
    echo "La edad de micifú es: ".$micifu->getEdad()."<br>";
    echo $micifu->maulla();
    echo $micifu->trepa();
?>
