	<?php include'includes/incluye_header.php' ;
            require_once('includes/incluye_menu.php');
    ?>
<div class="container ">
            <div class="jumbotron bg-dark text-light m-3 p-4">
            <h1 class="text-center  p-2">Registro de Usuario</h1>
                    <form action="registra_Usuarios.php" method="POST" id="registo_Usuarios">
                        <div class="mb-3">
                          <label for="nombre" class="form-label">Nombre Completo</label>
                          <input type="text" class="form-control" name="nombreCliente" placeholder="Nombre completo">
                        </div>
                         <div class="mb-3">
                          <label for="email" class="form-label">E-Mail</label>
                          <input type="email" class="form-control" name="emailCliente" placeholder="name@example.com">
                        </div>
                         <div class="mb-3">
                          <label for="contrasena" class="form-label">Contraseña</label>
                          <input type="password" class="form-control" name="contrasenaCliente">
                        </div>
                        <div class="mb-3 ">
                            <input type="submit" value="Ingresar"class="btn btn-secondary">
                            <input type="reset" value="Limpiar"class="btn btn-danger">
                        </div>
                    </form>





	<?php include'includes/incluye_footer.php' ?>