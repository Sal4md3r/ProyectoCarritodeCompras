<?php include'includes/incluye_header.php';
    if (isset($_GET)) {
        $nombre_Categoria = $_GET['nombre_Categoria'];
        $id_Categoria = $_GET['id_Categoria'];
    }
?>


            <h1 class="text-center  p-2">Registro de Productos</h1>
                    <form action="registra_Productos.php" method="POST" id="registo_Usuarios">
                        <div class="mb-3">
                          <label for="nombreProducto" class="form-label">Nombre del producto</label>
                          <input type="text" class="form-control" name="nombreProducto" placeholder="Nombre completo">
                        </div>
                          <div class="mb-3">
                          <label for="categoriaProducto" class="form-label">Categoria del Producto</label>
                          <input type="text" class="form-control"  name="categoriaProducto" value="<?=$id_Categoria?>" readonly>
                        </div>
                         <div class="mb-3">
                          <label for="descripcionProducto" class="form-label">Descripcion</label>
                          <input type="text" class="form-control" name="descripcionProducto" placeholder="Descripcion">
                        </div>
                         <div class="mb-3">
                          <label for="presentacionProducto" class="form-label">Presentación</label>
                          <input type="text" placeholder="Presentacion" class="form-control" name="presentacionProducto">
                        </div>
                        <div class="mb-3 ">
                            <input type="submit" value="Ingresar"class="btn btn-secondary">
                            <input type="reset" value="Limpiar"class="btn btn-danger">
                        </div>
                    </form>





	<?php include'includes/incluye_footer.php' ?>