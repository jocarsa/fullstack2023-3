<?php
    
// Me conecto a la base de datos
$mibd = mysqli_connect(
    "localhost", 
    "usuariodb", 
    "contrasenadb", 
    "aplicacion"
);
// Preparo una consulta
$peticion = "
    SELECT *
    FROM usuarios
";
// Ejecuto la consulta
$resultado = mysqli_query($mibd, $peticion);
// Recojo resultados
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "El usuario es: ".$fila['nombredeusuario']."<br>";
    echo "La contraseña es: ".$fila['contrasena']."<br>";
    echo "El nombre es: ".$fila['nombrecompleto']."<br>";
    echo "El correo es: ".$fila['email']."<br>";
}
?>
