<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

		$sql = "SELECT IDCliente, Nombre, Apellido, Telefono FROM Cliente";
		$result = mysqli_query($conn ,$sql);

		$sql = "Call sp_DeleteCliente('".$_POST['txtIDCliente']."')";
		if($conn->query($sql) == TRUE){
			echo "Se elimino el Cliente correctamente!";
		}else
			echo "Error: ".$sql.mysqli_error($conn)."<br>.";
?>