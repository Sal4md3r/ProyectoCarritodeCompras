<?php 
	session_start();
	require_once("includes/conexion.php");

	$idUsuario = $_SESSION['id'];
	$idPedido= "";
	$ins= $con->prepare("INSERT INTO pedidos VALUES(?,?,CURDATE())");
	$ins->bind_param("ii",$idPedido,$idUsuario);
	if($ins->execute()){
		$sel = $con->prepare("SELECT * FROM pedidos ORDER BY id_pedido DESC LIMIT 1");
        $sel->execute();
        $res = $sel->get_result();
        $p= $res->fetch_assoc();
        $idPedido = $p['id_pedido'];



        $sel = $con->prepare("SELECT * FROM carritosesion");
        $sel->execute();
        $res = $sel->get_result();
        while ($productoInsertar = $res->fetch_assoc()) {
        	$idProducto = $productoInsertar['id_producto'];
        	$cantidad = $productoInsertar['cantidad'];

        	$ins= $con->prepare("INSERT INTO productoscarrito VALUES (?,?,?)");
        	$ins->bind_param("iii",$idPedido,$idProducto,$cantidad);
        	$ins->execute();
        }
        $borra = $con->prepare("TRUNCATE carritosesion");
        foreach ($_SESSION['productos'] as $prd) {

            $sel = $con->prepare("SELECT * FROM productos WHERE id_Producto = $prd");
            $sel->execute();
            $res = $sel->get_result();
            $productoInsertar = $res->fetch_assoc();
            $idProducto = $productoInsertar['id_Producto'];
            $cantidad="";
            $ins= $con->prepare("INSERT INTO productoscarrito VALUES (?,?,?)");
            $ins->bind_param("iii",$idPedido,$idProducto,$cantidad);
            $ins->execute();
            array_shift($_SESSION['productos']);
        }



        if ($borra->execute()) {
        	header("Location:alerta.php?tipo=exito&operacion=Pedido Confirmado &destino=index.php");
        }else{
        	header("Location:alerta.php?tipo=fracaso&operacion=Pedido No Confirmado &destino=index.php");
        }



	}

 ?>