<?php
    session_start();

    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    echo "El usuario enviado es: ".$usuario;    
    echo "<br>";
    echo "La contraseña enviada es: ".$contrasena;
    echo "<br>";

include "inc/configuracion.php";

$peticion = "
    SELECT *
    FROM usuarios
    WHERE 
    nombredeusuario = '".$usuario."'
    AND
    contrasena = '".$contrasena."'
";

$resultado = mysqli_query($mibd, $peticion);

if ($fila = mysqli_fetch_assoc($resultado)) {
    echo "Es correcto";
    $_SESSION['llave'] = true;
    $_SESSION['usuario'] = $fila['nombredeusuario'];
    header('Location: paneldecontrol.php');
}else{
    echo "No es correcto";
    header('Location: index.html');
}
?>