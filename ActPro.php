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

		$sql = "SELECT * FROM VerActPro WHERE Numero_Producto=txtIDP";
		$result = mysqli_query($conn ,$sql);

		echo "<br> Datos del Producto: <br><br>"; 
		echo "ID Empleado: " .$_POST['txtIDP']; echo "<br>";
		echo "Nombre: " .$_POST['txtNombreP']; echo "<br>";	
		echo "Descripcion: " .$_POST['txtDescripcion']; echo "<br>";
		echo "Precio: " .$_POST['txtPrecio']; echo "<br><br>";

		$sql = "Call sp_UpdateProducto('".$_POST['txtIDP']."','".$_POST['txtNombreP']."',
			'".$_POST['txtDescripcion']."','".$_POST['txtPrecio']."')";
		if($conn->query($sql) == TRUE){
			echo "Se edito el Producto correctamente!";
		}else
			echo "Error: ".$sql.mysqli_error($conn)."<br>.";
?>