SELECT 
entradas.titulo,
entradas.texto,
usuarios.nombredeusuario
FROM `entradas` 
LEFT JOIN usuarios
ON entradas.FK_usuarios_nombredeusuario = usuarios.Identificador