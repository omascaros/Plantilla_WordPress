<?php 

// Controlamos el número de palabras que queremos que aparezcan en the_excerpt
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

// Añadimos la posibilidad de ver los thumbnails de los posts
	add_theme_support( 'post-thumbnails' );

// Registramos los menus
	register_nav_menus( array(
			'menu-principal'   => 'Menú principal'
		) );

// Registramos los widgets
	register_sidebar( array(
		'name' 			=> 'Aside widget area',
		'id' 			=> 'right-sidebar',
		'description'   => 'Aside widget area',
	  	'class'         => 'clase-1',
		'before_widget' => '<div class="widget__aside">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 class="widget__aside__title">',
		'after_title' 	=> '</h2>',
	) );

	register_sidebar( array(
		'name' 			=> 'Footer widget area',
		'id' 			=> 'footer-sidebar',
		'description'   => 'Footer widget area',
	  	'class'         => 'clase-1',
		'before_widget' => '<div class="widget__footer">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h2 class="widget__footer__title">',
		'after_title' 	=> '</h2>',
	) );

