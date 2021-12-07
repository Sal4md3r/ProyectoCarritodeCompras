<?php  require_once('includes/incluye_header.php');
      require_once('includes/incluye_menu.php');
      require_once( 'includes/incluye_datatable_head.php');
      require_once('includes/conexion.php');

?>
<div class="container ">
            <div class="jumbotron bg-dark text-light m-3 p-4">
            	<h2>Pedidos Recientes</h2>
            	<hr>
               <?php
                //Consulta sin parámetros
                $sel = $con->prepare("SELECT * FROM pedidos p INNER JOIN clientes c ON p.id_cliente = c.id_Cliente; ");

                $sel->execute();
                $res = $sel->get_result();
                ?>
                <table id="example" class="table table-info text-center table-striped table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <th>Id Pedido</th>
                    <th>Cliente </th>
                    <th>Fecha </th>
                    <th>-----</th>
                    </thead>
                    <tbody>
                        <?php while ($f = $res->fetch_assoc()){?>

                            <tr>
                                <td><?php echo $f['id_pedido'] ?></td>
                                <td><?php echo $f['nombre_Cliente'] ?></td>
                                <td><?php echo $f['fecha']?></td>
                        		<td><a href="verPedido.php?idP=<?=$f['id_pedido']?>&fecha=<?=$f['fecha']?>" class="btn btn-warning">Ver Pedido</a></td>
                            </tr>
                            <?php
                        }
                        $sel->close();
                        $con->close();
                        ?>
                    <tbody>
                </table>
			</div>
            </div>
        </div>

<?php 
    include 'includes/incluye_datatable_pie.php';
    include'includes/incluye_footer.php';

?>