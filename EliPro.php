<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

		$sql = "SELECT IDProducto, Nombre, Descripcion, Precio FROM Producto";
		$result = mysqli_query($conn ,$sql);

		$sql = "Call sp_DeleteProducto('".$_POST['txtIDProducto']."')";
		if($conn->query($sql) == TRUE){
			echo "Se elimino el Producto correctamente!";
		}else
			echo "Error: ".$sql.mysqli_error($conn)."<br>.";
?>