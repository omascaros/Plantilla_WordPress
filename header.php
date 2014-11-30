<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	

	<title>
		<?php 
			// aplicamos separador para que muestre "nombre_pagina | pagina"
			wp_title( '|', true, 'right' );
			// Añadimos el nombre de la pagina
			bloginfo( 'name' ); 
		?>
	</title>

	<!-- metas -->
	<meta name="description" content="<?php bloginfo(description); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- robots -->
	<meta name="robots" content="index,archive,noydir,noodp" />
	
	<!-- css -->
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url); ?>" />

	<!-- favicon e iconos -->
	<link rel="icon" href="<?php bloginfo(template_directory); ?>/favicon.ico" />
	<link rel="icon" href="<?php bloginfo(template_directory); ?>/favicon.png" />
	<!-- 32x32 -->
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo(template_directory); ?>/images/favicon-32x32.png" />
	<!-- 57x57 -->
	<link rel="apple-touch-icon-precomposed" href="<?php bloginfo(template_directory); ?>/images/favicon-57x57.png" />
	<!-- 72x72 -->
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo(template_directory); ?>/images/favicon-72x72.png" />
	<!-- 114x114 -->
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo(template_directory); ?>/images/favicon-114x114.png" />
</head>

<body>