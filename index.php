<?php 
require_once 'includes/funciones.php';
require_once 'includes/db.php';
 ?>

 <!--

Si la session existe, entonces mostrar la pagina
Si la session no existe, redireccionar al login.

 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sistema apartado de cañones</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>
	
	<nav class="navbar navbar-dark bg-dark">
		 <a class="navbar-brand" href="#">
    <img src="img/logo.svg" width="30" height="30" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Cañon Actual<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">Usuarios<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cañones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Estatus</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Calendario</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Salir</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
	</nav>
		<!--<div id="contenedor-principal">
    <table>
      <thead>
        <tr>
          <th>Matricula</th>
          <th>Nombre</th>
          <th>Teléfono</th>
          <th>Correo Electronico</th>
          <th>Nivel</th>
        </tr>
      </thead>
      <tbody>
        <?php 

//Cuando se consulta varios registros se utiliza select
$usuarios = $db->select("usuarios","*",["AND" =>["usr_status" => 1, "usr_nivel" => 2]]);

//$row = $db->get("usuarios","*",["usr_id" => 6]); Se utiliza get cuando es un solo registro exclusivo.
foreach ($usuarios as $usuario => $row) {
 ?>
        <tr>
          <td><?php echo $row['usr_matricula']; ?></td>
          <td><?php echo $row['usr_nombre']; ?></td>
          <td><?php echo $row['usr_telefono']; ?></td>
          <td><?php echo $row['usr_correo']; ?></td>
          <td><?php echo $row['usr_nivel']; ?></td>
        </tr>
        <?php

        }

        ?>
      </tbody>
    </table>
    </div>
	</section>-->
<!--<div class="table-responsive">
  <table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Edier </td>
      <td>Cab</td>
      <td>@ediCab</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Maximiliano</td>
      <td>Leyva</td>
      <td>@VelociMax</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Luis</td>
      <td>Torres</td>
      <td>@Luisfertg</td>
    </tr>
  </tbody>
</table>
</div>
-->
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">STATUS</th>
  </thead>
  <tbody>
      <?php 
  $usuarios = $db->select("canones","*");

  foreach ($usuarios as $usuario => $row) {
   ?>
   <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['nombre']; ?></td>
      <td><?php echo $row['status']; ?></td>
  </tr>
          <?php 
        }

       ?>
  </tbody>
</table>
<div>
	<footer>
		<p align="center"><i class="fas fa-user-lock"></i>Sistema de Cañones</p>
	</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://use.fontawesome.com/releases/v5.10.2/js/all.js" data-auto-replace-svg="nest"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</body>
</html>