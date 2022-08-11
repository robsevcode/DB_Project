USE mydb;
DROP PROCEDURE IF EXISTS sp_UpdateEmpleado;
DELIMITER $$
CREATE PROCEDURE sp_UpdateEmpleado (IN ID int, IN nomb varchar(45), 
IN apell varchar(45), IN puest varchar(45), IN depa varchar(45))
BEGIN
    UPDATE Empleado SET nombre=nomb,apellido=apell,
    puesto=puest,departamento=depa
    WHERE IDEmpleado=ID;
END 
$$

