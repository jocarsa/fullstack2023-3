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
    SELECT * FROM mensajes
    WHERE 
    (
    usuarioorigen = "'.$idyo.'"
    OR
    usuariodestino = "'.$idyo.'"
    )
    AND
    (
    usuarioorigen = "'.$_GET['tu'].'"
    OR
    usuariodestino = "'.$_GET['tu'].'"
    )
    ';
//echo $peticion;

    $resultado = $db->query($peticion);

    while ($fila = $resultado->fetchArray()) {
        $peticion2 = '
            SELECT * FROM usuarios WHERE Identificador = "'.$fila['usuarioorigen'].'"
        ';
        $resultado2 = $db->query($peticion2);

        while ($fila2 = $resultado2->fetchArray()) {
            $nombre = $fila2['nombrecompleto'];
        }
        echo '
            <div class="mensaje"> 
                <p class="emisormensaje">'.$nombre.'</p>
                <p>'.$fila['mensaje'].'</p>
                <p class="hora">'.date('g:i', $fila['epoch']).'</p>
            </div>
        ';
    }
?>