<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Carrito de Compras</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- <link rel="stylesheet" href="css/styles.css"> -->
</head>
<body>
	
	<div class="container-fluid bg-primary text-center p-5">
			<h1 class="text-light">Tu carrito de compras</h1>
	</div>

	<div class="container-fluid">
		<div class="row bg-secondary p-3">
				<ul class="nav justify-content-center">
				  <li class="nav-item">
				    <a class="nav-link active text-light mx-3" aria-current="page" href="index.php">Inicio</a>
				  </li>
				  <li class="nav-item dropdown ">
				    <a class="nav-link dropdown-toggle text-light mx-3" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Usuarios</a>
				    <ul class="dropdown-menu">
				      <li><a class="dropdown-item" href="consulta_Usuarios.php">Consulta Usuarios</a></li>
				      <li><hr class="dropdown-divider"></li>
				      <li><a class="dropdown-item" href="ingresa_usuarios.php">Registra Usuarios</a></li>
				    </ul>
				  </li>			
				  <li class="nav-item dropdown ">
				    <a class="nav-link dropdown-toggle text-light mx-3" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
				    <ul class="dropdown-menu">
				      <li><a class="dropdown-item" href="consulta_Productos.php">Consulta Productos</a></li>
				      <li><hr class="dropdown-divider"></li>
				      <li><a class="dropdown-item" href="ingresa_Productos.php">Registra Productos</a></li>
				    </ul>
				  </li>	
				   <li class="nav-item">
				    <a class="nav-link active text-light mx-3" aria-current="page" href="#">Carrito</a>
				  </li>
		</div>
	</div>
	<div class="container overflow-hidden">
            <div class="jumbotron bg-dark text-light m-3 p-4">