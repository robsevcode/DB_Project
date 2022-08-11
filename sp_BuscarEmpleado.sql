USE mydb;
DROP PROCEDURE IF EXISTS sp_BuscarEmpleado;
DELIMITER $$
CREATE PROCEDURE sp_BuscarEmpleado (IN IDE int, IN nom varchar(45), 
IN apell varchar(45), IN Pues varchar(45), IN Depa varchar(45))
BEGIN
	SELECT IDEmpleado, Nombre, Apellido, Puesto, Departamento AS ID, Nombre, Apellido, Puesto, Depa
    FROM Empleado 
    WHERE IDEmpleado=IDE OR Nombre=nom OR Apellido=apell OR Puesto=Pues; 
END 
$$

