USE mydb;
DROP PROCEDURE IF EXISTS sp_DeleteProducto;
DELIMITER $$
CREATE PROCEDURE sp_DeleteProducto(IN IDP int)
BEGIN
    DELETE FROM Producto where (IDProducto=IDP);
END 
$$

