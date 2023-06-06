<?php
    $db = new SQLite3('../db/chat.sqlite3');
$peticion = '
    SELECT * FROM usuarios
    WHERE
    usuario = "'.$_POST['usuario'].'"
    AND
    password = "'.$_POST['contrasena'].'"
    ';

    $results = $db->query($peticion);

    if ($row = $results->fetchArray()) {
        echo "ok";
    }else{
        echo "ko";
    }
?>