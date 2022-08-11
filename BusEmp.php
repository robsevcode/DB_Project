<?php
	$servername = "127.0.0.1";
	$username = "root";
	$password = "";
	$dbname = "mydb";
	
	$conn = new mysqli($servername, $username, $password, $dbname);

	$sql = "Call sp_BuscarEmpleado('".$_POST['txtIDE']."','".$_POST['txtNombreE']."',
		'".$_POST['txtApellidoE']."','".$_POST['txtPuesto']."','".$_POST['txtDepa']."')";

  	$query = mysqli_query($conn, $sql);

	$res = mysqli_fetch_all($query) ;  

	echo "<table style=\"border: 1px solid black;\">";
	echo "<tr style=\"border: 1px solid black;\">";
	echo "<th style=\"border: 1px solid black;\">IdEmpleado </th>";
    echo "<th style=\"border: 1px solid black;\">Nombre </th>";
	echo "<th style=\"border: 1px solid black;\">Apellido </th>";
	echo "<th style=\"border: 1px solid black;\">Puesto </th>";
	echo "<th style=\"border: 1px solid black;\">Departamento </th></tr>";
   
  foreach ($res as $ele) {
    echo "<tr style=\"border: 1px solid black;\">";
   foreach ($ele as $elem) {
      echo "<td style=\"border: 1px solid black;\">" . $elem . "</td>";
    }
    echo "</tr>";
  }
  echo "</table>";	
?>