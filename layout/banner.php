<div class="main-header__image">
	<!-- polyfill para hacer las imagenes responsive -->
	<picture>
		<source srcset="<?php bloginfo(template_directory); ?>/images/logo_600.jpg" media="(min-width: 1000px)">
		<source srcset="<?php bloginfo(template_directory); ?>/images/logo_480.jpeg" media="(min-width: 800px)">
		<img srcset="<?php bloginfo(template_directory); ?>/images/logo_320.jpeg" alt="Logo Silvia Mascaros">
	</picture>
</div>

<div class="main-header__title">
	<!-- Importamos el nombre del site-->
	<h2 class="h1 banner-name"><?php bloginfo('name'); ?></h2>
	<!-- Importamos el slogan del site-->
	<h1 class= "h5 banner-description"><?php bloginfo('description'); ?></h1>
</div>