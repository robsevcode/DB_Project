USE northwind;
DROP PROCEDURE IF EXISTS procedure1;
Delimiter !!
CREATE PROCEDURE procedure1()
BEGIN 
	SELECT * FROM Categories;
END !!
CALL procedure1();
