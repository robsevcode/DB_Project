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

		$sql = "SELECT IDProducto, Nombre, Descripcion, Precio FROM Producto";
		$result = mysqli_query($conn ,$sql);

		echo "<br> Datos del Producto: <br><br>"; 
		echo "Nombre: " .$_POST['txtNombreP']; echo "<br>";	
		echo "Descripcion: " .$_POST['txtDescripcionP']; echo "<br>";
		echo "Precio: " .$_POST['txtPrecio']; echo "<br><br>";

		$sql = "Call sp_InsertProducto('".$_POST['txtNombreP']."',
			'".$_POST['txtDescripcionP']."','".$_POST['txtPrecio']."')";
		if($conn->query($sql) == TRUE){
			echo "Se creo el nuevo registro de manera exitosa";
		}else
			echo "Error: ".$sql.mysqli_error($conn)."<br>.";
?>