<?php include'includes/incluye_header.php';
require_once('includes/incluye_menu.php');
     include'includes/conexion.php';
     include 'includes/incluye_datatable_head.php';

     $sel = $con->prepare("SELECT *from categoria");
     $sel->execute();
     $res = $sel->get_result();
     $row = mysqli_num_rows($res);
?>

<div class="container ">
            <div class="jumbotron bg-dark text-light m-3 p-4">  
    <h2>Selecciona una categoria</h2>
      <table id="example" class="table table-success table-striped table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                    <th class="text-center">Id Categoria</th>
                    <th class="text-center">Nombre Categoria</th>
                    </thead>
                    <tbody>
                        <?php while ($f = $res->fetch_assoc()) { ?>
                            <tr>
                                <td class="text-center"><?php echo $f['id_Categoria'] ?></td>
                                <td class="text-center">
                                   <a href="ingresa_Productos.php?id_Categoria=<?=$f['id_Categoria']?>&nombre_Categoria='<?=$f['nombre_Categoria']?>'">
                                     <?= $f['nombre_Categoria'] ?>
                                   </a>
                              </td>
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