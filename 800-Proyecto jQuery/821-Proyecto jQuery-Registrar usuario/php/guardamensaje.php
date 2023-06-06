<?php
    $db = new SQLite3('../db/chat.sqlite3');
    $peticion = '
    SELECT * FROM usuarios
    WHERE
    usuario = "'.$_GET['yo'].'"
    ';

    $resultado = $db->query($peticion);

    while ($fila = $resultado->fetchArray()) {
        $idyo = $fila['Identificador'];
    }

$peticion = '
    INSERT INTO mensajes
    VALUES(
        NULL,
        '.$idyo.',
        '.$_GET['tu'].',
        "'.$_GET['mensaje'].'",
        '.date('U').'
    )
    ';
$db->query($peticion);
?>