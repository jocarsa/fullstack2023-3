<?php
    $peticion = "
    INSERT INTO registros
    VALUES(
    NULL,
    '".$_SERVER['REQUEST_TIME']."',
    '".$_SERVER['HTTP_USER_AGENT']."',
    '".$_SERVER['REMOTE_ADDR']."',
    '".$_SERVER['REQUEST_URI']."'
    )";
    $resultado = mysqli_query($mibd, $peticion);

?>