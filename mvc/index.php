<!DOCTYPE html>
<html>
<head>
	<title>Pagina con MVC</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=,initial-scale=1.0, maxium-scale=1.0">
	<link rel="stylesheet" href ="bootstrap\css\bootstrap.min.css">
	<link rel="stylesheet" href ="bootstrap\js\bootstrap.min.js">
	<link rel="stylesheet" href ="bootstrap\js\bootstrap.js">


</head>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="index.php?controller=UsuarioController&action=mostrarTodos">Lista Usuarios</a></li>
      <li><a href="index.php?controller=UsuarioController&action=crear">Crear Usuarios</a></li>
      <li><a href="index.php?controller=UsuarioController&action=modificar">Editar Usuario</a></li>
      <li><a href="index.php?controller=UsuarioController&action=buscar">Eliminar Usuarios</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    </ul>
  </div>
</nav>

<body>

<?php
require_once 'controllers/UsuarioController.php';
if(isset($_GET['controller'])) {
		$nombreControlador = $_GET['controller'];
		$controlador = new $nombreControlador();
		if (isset($_GET['action'])) {
			$action = $_GET['action'];
			$controlador->$action();
		}
	}
?>

</body>
</html>
