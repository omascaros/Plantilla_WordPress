
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
	<article class="main__article">
		<header class="main__article__header">
			<h1>
				<!--  -->
				<?php 
					// en el single no necesitamos que el titulo este dentro de un enlace
					if(is_single()){ 			
						// obtenemos el titulo
						the_title(); 
				 
					} else { 
						 // obtenemos el permalink para el enlace ?>
						<a href="<?php the_permalink(); ?>">
							<?php 
								// obtenemos el titulo
								the_title(); 
							?>
						</a> <?php
				} ?>
			</h1>
		</header>

		<small class="main__article_author">
			<!-- fecha de publicación y el autor -->
			Publicado: <?php the_date(); ?> por <?php the_author(); ?>
		</small>

		<?php 
			// comprueba si el post tiene un thumbnail asignado
			if ( has_post_thumbnail())  { ?>
				<div class="main__article__image">
					<?php 
						// obtenemos la imagen del thumbnail
						the_post_thumbnail(); 
					?>
				</div><?php 
			}?>

				
		<?php 
			// obtenemos los datos del contenido de wordpress
			if ( is_front_page() && is_home() ) {
			  // Default homepage
				the_content();
			} elseif ( is_front_page() ) {
			  // static homepage
				the_content();
			} elseif ( is_home() ) {
			  // blog page			  
				the_excerpt();
			} else {
				the_content();
			}
		?>				
	</article>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<!-- no posts found -->
	<article class="main__article">
		<h1>No se han encontrado entradas.</h1>	
	</article>
<?php endif; ?>	