<?php
    session_start();
    if(!isset($_SESSION['llave'])){
        echo "No puedes entrar";
        die();
    }
?>
<!doctype html>
<html lang="es">
    <head>
        <title>Panel de control</title>
        <meta charset="utf-8">
        <link rel="Stylesheet" href="css/paneldecontrol.css"> 
    </head>
    <body>
        <h1>Panel de control</h1>
    </body>
</html>