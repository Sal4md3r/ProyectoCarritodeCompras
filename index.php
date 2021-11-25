	<?php include'includes/incluye_header.php';
	 ?>

		<?php if (isset($_SESSION['nombre'])): ?>
	    	<h1 >Bienvenido <?= $_SESSION['nombre']?></h1>       			
		<?php else : ?>
			<h1>Bienvenido al sistema de lcarrito de compras</h1>
		<?php endif; ?>

	<?php include'includes/incluye_footer.php' ?>




