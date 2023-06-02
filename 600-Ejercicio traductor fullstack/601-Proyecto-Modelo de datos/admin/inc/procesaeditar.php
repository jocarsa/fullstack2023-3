<?php

    $peticion = "
    UPDATE ".$_GET['tabla']."
    SET ";
        foreach($_POST as $clave=>$valor){
            if($clave != "Identificador"){
               $peticion .= $clave." = '".$valor."',";
            }
            
        }
    $peticion = substr($peticion    , 0, -1);
    $peticion .=" WHERE Identificador = ".$_POST['Identificador'];
    echo $peticion;
    $resultado = mysqli_query($mibd, $peticion);
    header('Location: paneldecontrol.php?tabla='.$_GET['tabla']);

?>