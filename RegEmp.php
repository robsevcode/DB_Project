<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if(!$conn){
		die("La conexion Fallo: ".mysqli_connect_error());
	}
	else
		echo "Conectado!";
		echo "<br>";	

		$sql = "SELECT IDEmpleado, Nombre, Apellido, Puesto, Departamento FROM Empleado";
		$result = mysqli_query($conn ,$sql);

		echo "<br> Datos del Empleado: <br><br>"; 
		echo "Nombre: " .$_POST['txtNombreE']; echo "<br>";	
		echo "Apellido: " .$_POST['txtApellidoE']; echo "<br>";
		echo "Puesto: " .$_POST['txtPuesto']; echo "<br>";
		echo "Departamento: " .$_POST['txtDepa']; echo "<br><br>";

		$sql = "Call sp_InsertEmpleado('".$_POST['txtNombreE']."',
			'".$_POST['txtApellidoE']."','".$_POST['txtPuesto']."','".$_POST['txtDepa']."')";
		if($conn->query($sql) == TRUE){
			echo "Se creo el nuevo registro de manera exitosa";
		}else
			echo "Error: ".$sql.mysqli_error($conn)."<br>.";
?>