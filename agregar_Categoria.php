<?php include'includes/incluye_header.php';
            require_once('includes/incluye_menu.php');
    ?>
<div class="container ">
            <div class="jumbotron bg-dark text-light m-3 p-4">
            <h1 class="text-center  p-2">Registro de categoria</h1>
                    <form action="registra_Categoria.php" method="POST">
                        <div class="mb-3">
                          <label for="nombreCat" class="form-label">Nombre Categoria</label>
                          <input type="text" class="form-control" name="nombreCat" placeholder="Nombre categoria">
                            <input type="submit" value="Ingresar"class="btn btn-secondary m-2">
                            <input type="reset" value="Limpiar"class="btn btn-danger m-2">
                        </div>
                    </form>





	<?php include'includes/incluye_footer.php' ?>