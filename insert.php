<?php
	$servername = "localhost";
	$server_username = "root";
	$server_password = "";
	$dbName = "flvr";

	$Name = $_POST["namePost"];
	$Mail = $_POST["mailPost"];
	$Password = $_POST["passwordPost"];

	$conn = new mysqli($servername, $server_username, $server_password, $dbName);
	if(!$conn){
		die("Connection failed. ".mysqli_connect_error());
	}

	$sql = "INSERT INTO usuario (Name, Mail, Password)
			VALUES ('".$Name."','".$Mail."','".$Password."')";
	$result = mysqli_query($conn ,$sql);

	if(!result)
		echo "There was an error";
	else
		echo "Everything is Ok";
?>