<?php 
include 'includes/conexion.php';
if (isset($_POST)) {
	if (isset($_POST['emailCliente']) && isset($_POST['contrasenaCliente'])) {
		$emailConsulta = $_POST['emailCliente'];
		$contrasenaConsulta = $_POST['contrasenaCliente'];
		$sql = "SELECT * FROM clientes WHERE correo_Cliente = '$emailConsulta' AND contrasena_Cliente = '$contrasenaConsulta'";
		$consulta= $con->prepare($sql);
		$consulta->execute();
		if ($consulta) {
			$resultado = $consulta->get_result();	
			$row = mysqli_num_rows($resultado);
			if ($row > 0 ) {
				$informacion = $resultado->fetch_assoc();
				session_start();
				$_SESSION['nombre']=$informacion['nombre_Cliente'];
				header("Location:alerta.php?tipo=exito&operacion=Session Iniciada&destino=operaciones_Usuario.php");
				 $consulta->close();
            	 $con->close();
			}else{
				header("Location:sesion_formulario.php?error=info");
			}
		};

		}else{
		header("Location:sesion_formulario.php?error=si");
	}
}
	


?>


	


