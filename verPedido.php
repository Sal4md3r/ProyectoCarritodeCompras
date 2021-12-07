<?php  require_once('includes/incluye_header.php');
      require_once('includes/incluye_menu.php');
      require_once( 'includes/incluye_datatable_head.php');
      require_once('includes/conexion.php');

    $idPedido= $_GET['idP'];
    $fecha= $_GET['fecha'];
?>
<div class="container ">
            <div class="jumbotron bg-dark text-light m-3 p-4">
                <h2 class="text-center">Pedido #<?=$idPedido?></h2>
                <h3 class="text-center">Fecha: <?=$fecha?></h3>
                <hr>
                <?php
                //Consulta sin parámetros
                $sel = $con->prepare("SELECT * FROM productos p INNER JOIN productoscarrito c ON p.id_producto = c.id_producto WHERE c.id_pedido = $idPedido");

                $sel->execute();
                $res = $sel->get_result();
                ?>
                <h2>Pedido </h2>
                <table id="example" class="table table-warning text-center table-striped table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <th>Nombre</th>
                    <th>Descripcion </th>
                    <th>Presentacion</th>
                    </thead>
                    <tbody>
                        <?php while ($f = $res->fetch_assoc()){                         ?>

                            <tr>
                                <td><?php echo $f['nombre_Producto'] ?></td>
                                <td><?php echo $f['descripcion_Producto'] ?></td>
                                <td><?php echo $f['presentacion_Producto']?></td>
                            </tr>
                            <?php
                        }
                        $sel->close();
                        $con->close();
                        ?>
                    <tbody>
                </table>
                <a href="ver_Pedidos.php" class="btn btn-info m-4">Volver</a>
            </div>
            </div>
        </div>

<?php 
    include 'includes/incluye_datatable_pie.php';
    include'includes/incluye_footer.php';

?>