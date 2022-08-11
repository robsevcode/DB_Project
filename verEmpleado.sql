USE mydb;
CREATE OR REPLACE VIEW verEmpleado(Numero_Empleado, Nombre_Empleado, 
Apellido_Empleado, Puesto_Empleado, Departamento_Empleado)
AS SELECT IDEmpleado, Nombre, Apellido, Puesto, Departamento
FROM Empleado;
SELECT * FROM verEmpleado;