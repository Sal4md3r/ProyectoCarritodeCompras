<?php
include'includes/conexion.php';
if ($con) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre_Producto = strtoupper($_POST['nombreProducto']);
            $descripcion_Producto = $_POST['descripcionProducto'];
            $presentacion_Producto= $_POST['presentacionProducto'];
            $id='';
            $ins=$con->prepare("INSERT INTO productos VALUES(?,?,?,?)");
            $ins->bind_param("isss",$id,$nombre_Producto,$descripcion_Producto,$presentacion_Producto);
            if($ins->execute()){
                echo "Se ha registrado el producto";
                header("Location:index.php?registroPExito=true");
            }
            else{
                echo "Error al insertar producto";
                header("Location:index.php?registroPExito=false");
            }
            $ins->close();
            $con->close();
        }
    }else{
        print("Hubo un error en la conexion");
    }


?>