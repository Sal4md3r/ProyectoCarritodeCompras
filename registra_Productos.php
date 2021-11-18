<?php
include'includes/conexion.php';
if ($con) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre_Producto = strtoupper($_POST['nombreProducto']);
            $descripcion_Producto = $_POST['descripcionProducto'];
            $presentacion_Producto= $_POST['presentacionProducto'];
            $categoria_Producto= $_POST['categoriaProducto'];
            $id='';
            $ins=$con->prepare("INSERT INTO productos VALUES(?,?,?,?,?)");
            $ins->bind_param("issss",$id,$nombre_Producto,$descripcion_Producto,$presentacion_Producto,$categoria_Producto);
            if($ins->execute()){
                echo "Se ha registrado el producto";
                header("Location:alerta.php?tipo=exito&operacion=Producto Guardado&destino=consulta_Productos.php");

            }
            else{
                echo "Error al insertar producto";
                header("Location:alerta.php?tipo=fracaso&operacion=Producto No Guardado&destino=consulta_Productos.php");
            }
            $ins->close();
            $con->close();
        }
    }else{
        print("Hubo un error en la conexion");
    }


?>