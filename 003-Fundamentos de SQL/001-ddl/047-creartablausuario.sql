CREATE TABLE usuarios
(
    Identificador INT(6) NOT NULL AUTO_INCREMENT ,
    nombredeusuario VARCHAR(100) NOT NULL ,
    contrasena VARCHAR(100) NOT NULL ,
    nombrecompleto VARCHAR(200) NOT NULL ,
    email VARCHAR(100) NOT NULL ,
    telefono VARCHAR(50) NOT NULL , 
    PRIMARY KEY (Identificador)
) ENGINE = InnoDB;