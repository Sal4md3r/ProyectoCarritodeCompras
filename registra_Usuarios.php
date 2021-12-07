<?php
include'includes/conexion.php';
if ($con) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre_cliente = strtoupper($_POST['nombreCliente']);
            $email_cliente = $_POST['emailCliente'];
            $contrasena_cliente = $_POST['contrasenaCliente'];
            $id='';
            $ins=$con->prepare("INSERT INTO clientes VALUES(?,?,?,?)");
            $ins->bind_param("isss",$id,$nombre_cliente,$email_cliente,$contrasena_cliente);
            if($ins->execute()){
                echo "Se ha registrado el proveedor";
                header("Location:alerta.php?tipo=exito&operacion=Usuario Guardado&destino=index.php");
            }
            else{
                echo "Error al insertar Proveedor";
                header("Location:alerta.php?tipo=fracaso&operacion=Usuario no Guardado&destino=ingresa_Usuarios.php");
            }
            $ins->close();
            $con->close();
        }
    }else{
        print("Hubo un error en la conexion");
    }


?>