USE mydb;
CREATE OR REPLACE VIEW verActEmp(Numero_Empleado, Nombre_Empleado, 
Apellido_Empleado, Puesto_Empleado, Departamento_Empleado)
AS SELECT IDEmpleado, Nombre, Apellido, Puesto, Departamento
FROM Empleado;