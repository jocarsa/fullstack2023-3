<?php
    
$db = new SQLite3('../db/chat.sqlite3');
$peticion = '
    INSERT INTO usuarios
    VALUES(
        NULL,
        "'.$_POST['usuario'].'",
        "'.$_POST['contrasena'].'",
        "'.$_POST['nombrecompleto'].'",
        ""
    )
    ';
$db->query($peticion);
echo "ok";
?>