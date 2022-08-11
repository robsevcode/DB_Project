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

		$sql = "SELECT * FROM VerActEmp WHERE Numero_Empleado=txtIDE";
		$result = mysqli_query($conn ,$sql);

		echo "<br> Datos del Empleado: <br><br>"; 
		echo "ID Empleado: " .$_POST['txtIDE']; echo "<br>";
		echo "Nombre: " .$_POST['txtNombreE']; echo "<br>";	
		echo "Apellido: " .$_POST['txtApellidoE']; echo "<br>";
		echo "Puesto: " .$_POST['txtPuesto']; echo "<br>";
		echo "Departamento: " .$_POST['txtDepartamento']; echo "<br><br>";

		$sql = "Call sp_UpdateEmpleado('".$_POST['txtIDE']."','".$_POST['txtNombreE']."',
			'".$_POST['txtApellidoE']."','".$_POST['txtPuesto']."','".$_POST['txtDepartamento']."')";
		if($conn->query($sql) == TRUE){
			echo "Se edito el Empleado correctamente!";
		}else
			echo "Error: ".$sql.mysqli_error($conn)."<br>.";
?>