	<?php include'includes/incluye_header.php' ?>

	  
                    <h1 >Bienvenido al sistema de carrito de compras</h1>
                    <?php if (isset($_GET['registroExito'])): ?>
	                    <?php if ($_GET['registroExito']="true"): ?>
	                        <div class="alert alert-success" role="alert">
	                            Registro insertado con exito!!
	                        </div>
	                    <?php else : ?>
	                        <div class="alert alert-warning" role="alert-success">
	                            Hubo un error al insertar el registro :c
	                        </div>
                    <?php endif ?>
                <?php endif ?>
                 <?php if (isset($_GET['registroPExito'])): ?>
	                    <?php if ($_GET['registroPExito']="true"): ?>
	                        <div class="alert alert-success" role="alert">
	                            Producto insertado con exito!!
	                        </div>
	                    <?php else : ?>
	                        <div class="alert alert-warning" role="alert-success">
	                            Hubo un error al insertar el producto :c
	                        </div>
                    <?php endif ?>
                <?php endif ?>
       			

	<?php include'includes/incluye_footer.php' ?>




