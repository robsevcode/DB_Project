USE mydb;
DROP PROCEDURE IF EXISTS sp_InsertEmpleado;
DELIMITER $$
CREATE PROCEDURE sp_InsertEmpleado (IN Nombre varchar(45), 
IN Apellido varchar(45), IN Puesto varchar(45), IN Departamento varchar(45))
BEGIN
    INSERT INTO Empleado(Nombre,Apellido,Puesto,Departamento)
    VALUES(Nombre,Apellido,Puesto,Departamento);
END 
$$

