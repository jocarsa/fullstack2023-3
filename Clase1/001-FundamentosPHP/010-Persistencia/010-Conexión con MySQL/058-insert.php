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
    INSERT INTO usuarios VALUES(
	NULL,
    'josevicente2',
    'carratala2',
    'Jose Vicente Carratalá Sanchis2',
    'info@josevicentecarratala.com2',
    '1234562'
) 
";
// Ejecuto la consulta
$resultado = mysqli_query($mibd, $peticion);

?>
