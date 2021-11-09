<?php include'includes/incluye_header.php';
     include'includes/conexion.php';
     include 'includes/incluye_datatable_head.php';
?>


                <?php
                //Consulta sin parámetros
                $sel = $con->prepare("SELECT *from clientes");

                /* consulta con parametros
                  $sel = $con->prepare("SELECT *from marca WHERE marca_id<=?");
                  $parametro = 50;
                  $sel->bind_param('i', $parametro);
                  finaliza consulta con parámetros */

                $sel->execute();
                $res = $sel->get_result();
                $row = mysqli_num_rows($res);
                ?>
                Elementos devueltos por la consulta: <?php echo $row ?>
                <table id="example" class="table table-primary table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <th>Id Cliente</th>
                    <th>Nombre Cliente</th>
                    <th>Email Cliente</th>

                    </thead>
                    <tbody>
                        <?php while ($f = $res->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo $f['id_Cliente'] ?></td>
                                <td><?php echo $f['nombre_Cliente'] ?></td>
                                <td><?php echo $f['correo_Cliente'] ?></td>
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

<?php 
    include 'includes/incluye_datatable_pie.php';
    include'includes/incluye_footer.php';

?>