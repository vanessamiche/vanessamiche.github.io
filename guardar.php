<?php
      $server="localhost";
      $username="root";
	  $pass="";
	  $db="bts";

	  $conexion= new mysqli ($server, $username, $pass, $db);
	  if ($conexion->connect_error){
	  	die("error en la conexion: " .$conexion->connect_error);
	  }

	  $Nombre = $_POST["Nombre"];
	  $Edad = $_POST["Edad"];
	  $Nacionalidad = $_POST["Nacionalidad"];
	  $Fechadenacimiento = $_POST["Fechadenacimiento"];
	  $Peso = $_POST["Peso"];
	  $Altura = $_POST["Altura"];
	  $Especialidad = $_POST["Especialidad"];



	  $sql = "INSERT INTO integrantes (Nombre,Edad,Nacionalidad,Fechadenacimiento,Peso,Altura, Especialidad) VALUES ('$Nombre',$Edad,'$Nacionalidad',$Fechadenacimiento,$Peso,$Altura,'$Especialidad')";

	  if($conexion->query($sql)===TRUE){ 
	  	header("Location: consultarintegrantes.php");
	  } else {
	  	echo "Error".$sql."br".$conexion->error;
	  }
?>