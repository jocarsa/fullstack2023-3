<?php
    if(!isset($_GET['operacion'])){
        include "cabeceras.php";
        include "contenidotabla.php";
    }else{
        switch($_GET['operacion']){
            case "nuevo":
                include "nuevo.php";
                break;
        }
    }
?>