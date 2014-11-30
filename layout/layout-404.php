
<?php 
	// Importamos el header
	get_template_part('layout/layout', 'header'); 
?>


<div class="principal">
	<div class="main">
		<section class="main__section">
			<article class="main__article">
				<header class="main__article__header">
					<h1>La página que busca no se ha encontrado</h1>
				</header>
				
				<h2>Puede realizar cualquiera de las siguientes acciones:</h2>
				<span>Ir al menú principal <a href="<?php echo site_url(); ?>">Inicio</a></span>

				<h2>Puede intentar una búsqueda</h2>
				<?php get_search_form(); ?>
			</article>
		</section>
	</div> <!-- div main -->
	
	<aside class="main__sidebar">
		<?php 
			// Importamos el sidebar
			get_sidebar(); 
		?>
	</aside>	
</div> <!-- div principal -->