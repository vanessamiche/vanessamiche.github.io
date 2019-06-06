<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Integrantes</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<?php
	  $server="localhost";
	  $username="root";
	  $pass="";
	  $db="bts";

	  $conexion= new mysqli ($server, $username, $pass, $db);
	  if ($conexion->connect_error){
	  	die("error en la conexion: " .$conexion->connect_error);
	  }
	  $id_integrantes = $_GET['id'];

	  $sql = "SELECT * FROM integrantes";
	  $integrantes = $conexion->query($sql)->fetch_object();


	  ?>


	  <div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardar.php" method="POST">
					<div class="form-group">
						<label for="Nombre">Nombre:</label>
						<input type="text" name="Nombre" class="form-control"
						value="<?php echo $integrantes->Nombre;?>">
					</div>
					<div class="form-group">
						<label for="">Edad</label>
						<input type="text" name="Edad" class="form-control"
						value="<?php echo $integrantes->Edad;?>">
					</div>
					<div class="form-group">
						<label for="Nacionalidad">Nacionalidad</label>
						<input type="text" name="Nacionalidad" class="form-control"
						value="<?php echo $integrantes->Nacionalidad;?>">
					</div>
					<div class="form-group">
						<label for="Fechadenacimiento">Fecha de Nacimiento:</label>
						<input type="text" name="Fechadenacimiento" class="form-control"
						value="<?php echo $integrantes->Fechadenacimiento;?>">
					</div>
					<div class="form-group">
						<label for="Peso">Peso:</label>
						<input type="text" name="Peso" class="form-control"
						value="<?php echo $integrantes->Peso;?>">
					</div>
					<div class="form-group">
						<label for="Altura">Altura:</label>
						<input type="text" name="Altura" class="form-control"
						value="<?php echo $integrantes->Altura;?>">
					</div>
					<div class="form-group">
						<label for="Especialidad">Especialidad</label>
						<select name="Especialidad" id="" class="form-control">
							<?php
							 if ($integrantes->Especialidad==0) { ?>
							 	<option value="0" selected>Vocal</option>
							<option value="1">Rapero</option>

							 <?php	
							 } else { 
							 ?>
							  <option value="0">Vocal</option>
							  <option value="1">Rapero</option>

							<?php

							 }?>
						</select>
					</div>
					<div class="form-group text-center">
						<input type="submit" name="" class="btn btn-primary" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>


</body>
</html>