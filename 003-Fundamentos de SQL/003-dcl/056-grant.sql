CREATE USER 'usuariodb'@'localhost' 
IDENTIFIED VIA mysql_native_password USING '***';


GRANT USAGE ON *.* TO 'usuariodb'@'localhost' 
REQUIRE NONE 
WITH 
MAX_QUERIES_PER_HOUR 0 
MAX_CONNECTIONS_PER_HOUR 0 
MAX_UPDATES_PER_HOUR 0 
MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON `aplicacion`.* TO 'usuariodb'@'localhost';