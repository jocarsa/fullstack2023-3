CREATE TABLE "usuarios" (
	"Identificador"	INTEGER,
	"usuario"	TEXT,
	"password"	TEXT,
	"nombrecompleto"	TEXT,
	PRIMARY KEY("Identificador" AUTOINCREMENT)
);

CREATE TABLE "mensajes" (
	"Identificador"	INTEGER,
	"usuarioorigen"	INTEGER,
	"usuariodestino"	INTEGER,
	"mensaje"	TEXT,
	"epoch"	INTEGER,
	PRIMARY KEY("Identificador" AUTOINCREMENT)
);

INSERT 
INTO usuarios 
VALUES (
NULL,
'josevicente',
'josevicente',
"Jose Vicente Carratalá"
)