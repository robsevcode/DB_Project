USE mydb;
DROP PROCEDURE IF EXISTS sp_DeleteEmpleado;
DELIMITER $$
CREATE PROCEDURE sp_DeleteEmpleado(IN ID int)
BEGIN
    DELETE FROM Empleado where (IDEmpleado=ID);
END 
$$

