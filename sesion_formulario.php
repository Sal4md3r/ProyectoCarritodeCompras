<?php include'includes/incluye_header.php';
     include'includes/conexion.php';
?>

<div class="container ">
            <div class="jumbotron bg-dark text-light m-3 p-4">
     <h1 class="text-center  p-2">Inicio de Sesion</h1>
                    <form action="incia_sesion.php" method="POST" id="registo_Usuarios">
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