<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

		$sql = "SELECT IDEmpleado, Nombre, Apellido, Puesto, Departamento FROM Empleado";
		$result = mysqli_query($conn ,$sql);

		$sql = "Call sp_DeleteEmpleado('".$_POST['txtIDEmpleado']."')";
		if($conn->query($sql) == TRUE){
			echo "Se elimino el Empleado correctamente!";
		}else
			echo "Error: ".$sql.mysqli_error($conn)."<br>.";
?>