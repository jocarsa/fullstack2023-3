<?php
    $peticion = "
        DELETE
        FROM ".$_GET['tabla']."
        WHERE Identificador = ".$_GET['id']."
    ";
    $resultado = mysqli_query($mibd, $peticion);
    header('Location: paneldecontrol.php?tabla='.$_GET['tabla']);
?>