<?php  require_once('includes/incluye_header.php');
      require_once('includes/incluye_menu.php');
      require_once( 'includes/incluye_datatable_head.php');
      require_once('includes/conexion.php');
?>
<div class="container ">
            <div class="jumbotron bg-dark text-light m-3 p-4">

                <table id="example" class="table table-danger text-center table-striped table-hover table-bordered" cellspacing="0" width="100%" >
                    <thead>
                    <th>Nombre Producto</th>
                    <th>Descripcion Producto</th>
                    <th>Presentacion</th>
                <?php
                if (!empty($_SESSION['productos'])) {
                    foreach ($_SESSION['productos'] as $prd) {
                    //Consulta sin parámetros
                    $sel = $con->prepare("SELECT * from productos WHERE id_Producto = $prd");
                    $sel->execute();
                    $res = $sel->get_result();
                    ?>

                        </thead>
                        <tbody>
                            <?php while ($f = $res->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $f['nombre_Producto'] ?></td>
                                    <td><?php echo $f['descripcion_Producto'] ?></td>
                                    <td><?php echo $f['presentacion_Producto'] ?></td>
                                </tr>
                                <?php
                                }
                    }
                                $sel->close();
                                $con->close();
                }else{
                    echo("    <h1>Aun no hay productos en tu carrito :c</h1>");
                }
                        ?>

                    <tbody>
                </table>
                <a href="confirmar_Pedido.php" class="btn btn-success">Confirmar Pedido</a>
            </div>
        </div>

<?php 
    include 'includes/incluye_datatable_pie.php';
    include'includes/incluye_footer.php';

?>