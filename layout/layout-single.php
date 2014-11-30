
<?php 
	// Importamos el header
	get_template_part('layout/layout', 'header'); 
?>


<div class="principal">
	<div class="main">
		<section class="main__section">
			<?php 
				// Importamos el loop
				get_template_part('loop'); 
			?>
		</section>
	</div> <!-- div main -->
	
	<aside class="main__sidebar">
		<?php 
			// Importamos el sidebar
			get_sidebar(); 
		?>
	</aside>	
</div> <!-- div principal -->