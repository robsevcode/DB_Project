USE mydb;
DROP PROCEDURE IF EXISTS sp_InsertProducto;
DELIMITER $$
CREATE PROCEDURE sp_InsertProducto (IN Nombre varchar(45), 
IN Descripcion varchar(45), IN Precio float)
BEGIN
	SET @Prc=0.00;
    If Precio>0 THEN
		INSERT INTO Producto(Nombre,Descripcion,precio)
		VALUES(Nombre,Descripcion,Precio);
	ELSE
		INSERT INTO Producto(Nombre,Descripcion,precio)
		VALUES(Nombre,Descripcion,@Prc);
	END IF;
END 
$$

