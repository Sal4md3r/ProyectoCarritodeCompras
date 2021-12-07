<?php 

	session_destroy();
	header("Location:alerta.php?tipo=exito&operacion=Sesion Cerrada&destino=sesion_formulario.php");

 ?>