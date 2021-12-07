<?php 
	session_start();
	$id_producto = $_GET['id'];

	array_push($_SESSION['productos'], $id_producto);

	header("Location:alerta.php?tipo=exito&operacion=Producto Agregado al carrito &destino=consulta_Productos.php")


 ?>