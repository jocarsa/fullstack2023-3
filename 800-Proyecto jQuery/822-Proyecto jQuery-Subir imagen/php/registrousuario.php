<?php
    
$temp_name = $_FILES["image"]["tmp_name"];
$image_name = $_FILES["image"]["name"];

$db = new SQLite3('../db/chat.sqlite3');
$peticion = '
    INSERT INTO usuarios
    VALUES(
        NULL,
        "'.$_POST['usuario'].'",
        "'.$_POST['contrasena'].'",
        "'.$_POST['nombrecompleto'].'",
        "'.$image_name.'"
    )
    ';
$destination = "../img/" . $image_name;
move_uploaded_file($temp_name, $destination);
$db->query($peticion);
echo "ok";
?>