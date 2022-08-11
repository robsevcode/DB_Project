USE mydb;
DROP PROCEDURE IF EXISTS sp_BuscarCliente;
DELIMITER $$
CREATE PROCEDURE sp_BuscarCliente (IN IDCl int, IN nom varchar(45), IN apell varchar(45), IN tel varchar(45))
BEGIN
	SELECT IDCliente, Nombre, Apellido, Telefono AS ID, Nombre, Apellido, Telefono
    FROM Cliente 
    WHERE IDCliente=IDCl OR Nombre=nom OR Apellido=apell OR Telefono=tel;
END 
$$

