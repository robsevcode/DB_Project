USE mydb;
DROP TRIGGER before_Insert_Empleado;
Delimiter $$
CREATE TRIGGER before_Insert_Empleado
BEFORE INSERT ON Empleado
FOR EACH ROW BEGIN
	IF Puesto IS NULL THEN
		INSERT INTO Empleado(ID,Nombre,Apellido,Puesto) 
        VALUES(@ID, @Nombre, @Apellido, 'Solicitante');
	END IF;
END $$
        