<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consulta</title>
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

<?php
  $server="localhost";
      $username="root";
    $pass="";
    $db="bts";

    $conexion= new mysqli ($server, $username, $pass, $db);
    if ($conexion->connect_error){
      die("error en la conexion: " .$conexion->connect_error);
    }

    $sql = "SELECT * FROM integrantes";
     $data = $conexion->query($sql);
     echo '<table class= "table table-hover">';
     echo '<thead>';
     echo '<tr>';
     echo '<th> Nombre </th>';
     echo '<th>Edad</th>';
     echo '<th>Nacionalidad</th>';
     echo '<th>Fecha de nacimiento</th>';
     echo '<th>Peso</th>';
     echo '<th>Altura</th>';
     echo '<th>Especialidad</th>';
     echo '<th>Editar</th>';
     echo '<th>Eliminar</th>';
     echo '</tr>';
     echo '</thead>'; 
     


      while ($obj = $data->fetch_object()){
        echo '<tr><td>'.$obj->Nombre.'</td>';
        echo '<td>'.$obj->Edad.'</td>';
        echo '<td>'.$obj->Nacionalidad.'</td>';
        echo '<td>'.$obj->Fechadenacimiento.'</td>';
        echo '<td>'.$obj->Peso.'</td>';
        echo '<td>'.$obj->Altura.'</td>';
        echo '<td>'.$obj->Especialidad.'</td>';
        echo '<td><a class = "btn btn-xs btn-primary"
        href="editarintegrantes.php?id='.$obj->Nombre.'">Editar</a></td>';
       
        echo '<td><a class = "btn btn-xs btn-primary"
        href="eliminar.php?id='.$obj->id.'">eliminar</a></td></tr>';
        
        
      }
?>
<script src="js/bootstrap.js"></script>



</body>
</html>