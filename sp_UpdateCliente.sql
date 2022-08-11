USE mydb;
DROP PROCEDURE IF EXISTS sp_UpdateCliente;
DELIMITER $$

CREATE PROCEDURE sp_UpdateCliente (IN ID int(11), IN nomb varchar(45), 
IN apell varchar(45), IN tel varchar(45))
BEGIN
    UPDATE Cliente 
    SET  nombre=nomb, apellido=apell, telefono=tel
    WHERE IDCliente=ID;
END 
$$

