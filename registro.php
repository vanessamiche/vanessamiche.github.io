<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registro de integrantes</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.js"></script>
</head>
<body>
		<nav class="navbar navbar-default">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">
        <img style="width: 100px; margin-top: -15px" src="bighitlogo.png">
      </a>
    </div>
    <ul class="nav navbar-nav">

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Integrantes
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/pagina/consultarintegrantes.php">Consultas</a></li>
          <li><a href="http://localhost/pagina/registro.php">Registro</a></li>
          
        </ul>
      </li>


      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">BTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="md.html">MD</a></li>
          <li><a href="btsalbum.html">ALBUM</a></li>
          <li><a href="dvd.html">DVD</a></li>
        </ul>
      </li>


      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="https://www.ibighit.com/goods/catalog?code=00180001">TXT
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="https://www.ibighit.com/goods/catalog?code=00180001">ALBUM</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="">MD
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="https://www.ibighit.com/goods/catalog?code=00140001">OFFICIAL MD</a></li>
          <li><a href="https://www.ibighit.com/goods/catalog?code=00140002">Tour MD</a></li>
          <li><a href="https://www.ibighit.com/goods/catalog?code=00140004">RESERVATION</a></li>
          <li><a href="https://www.ibighit.com/goods/catalog?code=00140005">EXHIBITION</a></li>
          <li><a href="https://www.ibighit.com/goods/catalog?code=00140006">LOVE MYSELF</a></li>
          <li><a href="https://www.ibighit.com/goods/catalog?code=00140007">FUNKO</a></li>
        </ul>
      </li>


      <li><a href="btsalbum.html">ALBUM</a></li>

      <li><a href="dvd.html">DVD</a></li>

      <li><a href="https://www.ibighit.com/goods/catalog?code=0015">BT12</a></li>

      <li><a href="https://www.ibighit.com/goods/catalog?code=0016">BOOK</a></li>
    </ul>



    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

  </div>
</nav>



  </div>
</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<form action="guardar.php" method="POST">
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<input type="text" name="Nombre" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Edad</label>
						<input type="text" name="Edad" class="form-control">
					</div>
					<div class="form-group">
						<label for="Nacionalidad">Nacionalidad</label>
						<input type="text" name="Nacionalidad" class="form-control">
					</div>
					<div class="form-group">
						<label for="Fechadenacimiento">Fecha de nacimiento</label>
						<input type="text" name="Fechadenacimiento" class="form-control">
					</div>
					<div class="form-group">
						<label for="Peso">Peso</label>
						<input type="text" name="Peso" class="form-control">
					</div>
					<div class="form-group">
						<label for="Altura">Altura</label>
						<input type="text" name="Altura" class="form-control">
					</div>
					<div class="form-group">
						<label for="Especialidad">Especialidad</label>
						<select name="Especialidad" id="" class="form-control">
							<option value="Vocal">Vocal</option>
							<option value="Rapero">Rapero</option>
						</select>
					</div>
					<div class="form-group text-center">
						<input type="submit" name="" class="btn btn-primary" value="resgistrar">
					</div>
				</form>
			</div>
		</div>
	</div>
<script src="js/bootstrap.js"></script>
</body>
</html>