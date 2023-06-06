<?php
    $db = new SQLite3('../db/chat.sqlite3');
    $peticion = '
    SELECT * FROM usuarios
    WHERE usuario != "'.$_GET['yo'].'"
    ';

    $resultado = $db->query($peticion);

    while ($fila = $resultado->fetchArray()) {
        echo '
            <div class="contacto" idcontacto="'.$fila['Identificador'].'">
                <div class="fotocontacto" style="background:url(\'img/'.$fila['imagen'].'\');background-size:cover;"></div>
                <h3>'.$fila['nombrecompleto'].'</h3>
                <p id="ultimochat">Lo ultimo</p>
            </div>
        ';
    }
?>