<?php

    var_dump($_POST);
    $peticion = "
    INSERT INTO ".$_GET['tabla']."
    VALUES(NULL,";
        foreach($_POST as $clave=>$valor){
            if($clave != "Identificador"){
               $peticion .= "'".$valor."',";
            }
            
        }
    $peticion = substr($peticion    , 0, -1);
    $peticion .=")";
    echo $peticion;
    $resultado = mysqli_query($mibd, $peticion);
    header('Location: paneldecontrol.php?tabla='.$_GET['tabla']);

?>