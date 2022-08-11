USE mydb;
CREATE OR REPLACE VIEW verActCli(Numero_Cliente, Nombre_Cliente, 
Apellido_Cliente, Telefono_Cliente)
AS SELECT IDCliente, Nombre, Apellido, Telefono
FROM Cliente;