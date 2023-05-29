SELECT 
*
FROM `entradas` 
LEFT JOIN usuarios
ON entradas.FK_usuarios_nombredeusuario = usuarios.Identificador