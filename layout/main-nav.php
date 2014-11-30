<input type="checkbox" id="nav__checkbox" class="nav__checkbox" />
<label for="nav__checkbox" class="nav__label icon-reorder"></label>			

<?php 
	// importamos el menú desde WordPress
	wp_nav_menu( array(
		'theme_location'  => 'menu-principal',
		'container'       => 'nav',
		'container_class' => 'nav',
		'menu_class'      => 'nav__list'
	));
?>