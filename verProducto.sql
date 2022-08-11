USE mydb;
CREATE OR REPLACE VIEW verProducto(ID_Producto, Nombre_Producto, 
Descripcion_Producto, Precio_Producto)
AS SELECT IDProducto, Nombre, Descripcion, Precio
FROM Producto;
SELECT * FROM verProducto;