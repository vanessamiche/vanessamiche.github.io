<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php 
			$server="localhost";
			$username = "root";
			$pass = "";
			$db= "bts";
			$conexion = new mysqli ($server, $username, $pass, $db);
			if($conexion->connect_error){
					die("Error en la conexión: " . $conexion->connect_error);
			}
			$id=$_GET["id"];
			$sql = "DELETE FROM integrantes WHERE id=$id";
			$data = $conexion->query($sql); 
			if ($conexion->query($sql) === TRUE) {
			    header("Location: consultarintegrantes.php");
			} else {
			    echo "Error deleting record: " . $conexion->error;
			}
			
			
	 ?>
</body>
</html>
