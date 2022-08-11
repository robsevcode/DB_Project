USE mydb;
DROP PROCEDURE IF EXISTS sp_UpdateProducto;
DELIMITER $$
CREATE PROCEDURE sp_UpdateProducto (IN ID int, IN Nom varchar(45), 
IN Descr varchar(45), IN Prec float)
BEGIN
    UPDATE Producto SET Nombre=Nom, Descripcion=Descr, 
    precio=Prec
    WHERE IDProducto=ID;
END 
$$

