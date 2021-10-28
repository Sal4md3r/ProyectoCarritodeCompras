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
                header("Location:index.php?registroExito=true");
            }
            else{
                echo "Error al insertar Proveedor";
                header("Location:index.php?registroExito=false");
            }
            $ins->close();
            $con->close();
        }
    }else{
        print("Hubo un error en la conexion");
    }


?>