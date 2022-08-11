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

		$sql = "SELECT * FROM VerActCli WHERE Numero_Cliente=txtIDC";
		$result = mysqli_query($conn ,$sql);

		echo "<br> Datos del Cliente: <br><br>"; 
		echo "ID Cliente: " .$_POST['txtIDC']; echo "<br>";
		echo "Name: " .$_POST['txtNombreC']; echo "<br>";	
		echo "Apellido: " .$_POST['txtApellidoC']; echo "<br>";
		echo "Telefono: " .$_POST['txtTelefono']; echo "<br><br>";

		$sql = "Call sp_UpdateCliente('".$_POST['txtIDC']."','".$_POST['txtNombreC']."','".$_POST['txtApellidoC']."','".$_POST['txtTelefono']."')";
		if($conn->query($sql) == TRUE){
			echo "Se edito el Cliente correctamente!";
		}else
			echo "Error: ".$sql.mysqli_error($conn)."<br>.";
?>