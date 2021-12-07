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
					$_SESSION['id']=$informacion['id_Cliente'];
					$_SESSION['productos']= array();
					header("Location:alerta.php?tipo=exito&operacion=Session Iniciada&destino=index.php");
					 $consulta->close();
	            	 $con->close();
				}else{
					header("Location:alerta.php?tipo=fracaso&operacion=Sesion no Iniciada &destino=sesion_formulario.php");
				}
			};

			}else{
			header("Location:alerta.php?tipo=fracaso&operacion=Sesion no Iniciada &destino=sesion_formulario.php");
		}
	}
		


	?>


	


