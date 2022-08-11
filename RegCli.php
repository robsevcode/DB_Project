<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

		$sql = "SELECT IDCliente, Nombre, Apellido, Telefono FROM Cliente";
		$result = mysqli_query($conn ,$sql);

		echo "<br> Datos del Cliente: <br><br>"; 
		echo "Name: " .$_POST['txtNombreC']; echo "<br>";	
		echo "Apellido: " .$_POST['txtApellidoC']; echo "<br>";
		echo "Telefono: " .$_POST['txtTelefono']; echo "<br><br>";

		$sql = "Call sp_InsertCliente('".$_POST['txtNombreC']."','".$_POST['txtApellidoC']."','".$_POST['txtTelefono']."')";
		if($conn->query($sql) == TRUE){
			echo "Se creo el nuevo registro de manera exitosa";
		}else
			echo "Error: ".$sql.mysqli_error($conn)."<br>.";
?>