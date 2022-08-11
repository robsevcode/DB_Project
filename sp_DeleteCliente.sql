USE mydb;
DROP PROCEDURE IF EXISTS sp_DeleteCliente;
DELIMITER $$
CREATE PROCEDURE sp_DeleteCliente(IN IDC int)
BEGIN
    DELETE FROM Cliente where (IDCliente=IDC);
END 
$$

