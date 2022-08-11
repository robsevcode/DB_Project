USE mydb;
DROP PROCEDURE IF EXISTS sp_BuscarProducto;
DELIMITER $$
CREATE PROCEDURE sp_BuscarProducto (IN IDP int, IN nom varchar(45), IN des varchar(45), IN pre varchar(45))
BEGIN
	SELECT IDProducto, Nombre, Descripcion, Precio AS ID, Nombre, Descripcion, Precio
    FROM Producto 
    WHERE IDProducto=IDP OR Nombre=nom OR Descripcion=des OR Precio=pre;
END 
$$

