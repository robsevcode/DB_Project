USE mydb;
DROP PROCEDURE IF EXISTS sp_InsertCliente;
DELIMITER $$
CREATE PROCEDURE sp_InsertCliente (IN nombre varchar(45), IN apellido varchar(45), IN telefono varchar(45))
BEGIN
    INSERT INTO Cliente(nombre,apellido,telefono)
    VALUES(nombre,apellido,telefono);
END 
$$

