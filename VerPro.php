<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	if(!$conn){
		die("La conexion Fallo: ".mysqli_connect_error());
	}

	$sql = "SELECT * FROM VerProducto;";
  	$query = mysqli_query($conn, $sql);

	$res = mysqli_fetch_all($query) ;  

	echo "<table style=\"border: 1px solid black;\">";
	echo "<tr style=\"border: 1px solid black;\">";
	echo "<th style=\"border: 1px solid black;\">IdProducto </th>";
    echo "<th style=\"border: 1px solid black;\">Nombre </th>";
	echo "<th style=\"border: 1px solid black;\">Descripcion </th>";
	echo "<th style=\"border: 1px solid black;\">Precio </th></tr>";
   
  foreach ($res as $ele) {
    echo "<tr style=\"border: 1px solid black;\">";
   foreach ($ele as $elem) {
      echo "<td style=\"border: 1px solid black;\">" . $elem . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";	
?>

