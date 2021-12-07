<?php
include'includes/conexion.php';
if ($con) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre_categoria = ($_POST['nombreCat']);
            $id="";

            $ins=$con->prepare("INSERT INTO categoria VALUES(?,?)");
            $ins->bind_param("is",$id,$nombre_categoria);
            if($ins->execute()){
                echo "Se ha registrado la categoria";
                header("Location:alerta.php?tipo=exito&operacion=Categoria Guardada&destino=index.php");
            }
            else{
                echo "Error al insertar Proveedor";
                header("Location:alerta.php?tipo=fracaso&operacion=Categoria no Guardada&destino=agregar_Categoria.php");
            }
            $ins->close();
            $con->close();
        }
    }else{
        print("Hubo un error en la conexion");
    }


?>