<?php
    if(!isset($_GET['operacion'])){
        include "cabeceras.php";
        include "contenidotabla.php";
    }else{
        switch($_GET['operacion']){
            case "nuevo":
                include "nuevo.php";
                break;
            case "procesanuevo":
                include "procesanuevo.php";
                break;
            case "eliminar":
                include "eliminar.php";
                break;
            case "editar":
                include "editar.php";
                break;
            case "procesaeditar":
                include "procesaeditar.php";
                break;
        }
    }
?>