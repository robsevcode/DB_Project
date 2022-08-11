USE mydb;
CREATE OR REPLACE VIEW verActPro(Numero_Producto, Nombre_Producto, 
Descripcion_Producto, Precio_Producto)
AS SELECT IDProducto, Nombre, Descripcion, Precio
FROM Producto;