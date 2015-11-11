<?php
/*
Template Name: Home
*/

get_header();

?>

<section class="section-main-home" id="main">

<div class="home-title">
	<h1>Aprovecha las posibilidades que te ofrece Internet</h1>
</div>

<div class="banners">
	<div class="banner-home">
		<div class="home-image">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/responsive.png" alt="Diseño responsive" title="Diseño responsive" width="800" height="571" >
		</div>
		<div class="home-text">
			<h2>Diseño responsive</h2>
			<h3>Haz que tu vea sea visible y usable en todos los dispositivos independientemente de su tamaño</h3>
			<a href="http://potenciandotuweb.com/paginas-web/#responsive">Más información</a>
		</div>
	</div>

	<div class="banner-home">
		<div class="home-image">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/html5-css3.png" alt="Las últimas tecnologías" title="Las últimas tecnologías" width="800" height="571" >
		</div>
		<div class="home-text">
			<h2>HTML5 y CSS3</h2>
			<h3>Uso de las últimas tecnologías como HTML5 y CSS3 que permiten aplicar funcionalidades increíbles a tu web.</h3>
			<a href="http://potenciandotuweb.com/paginas-web/#html5">Más información</a>
		</div>
	</div>

	<div class="banner-home">
		<div class="home-image">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/wordpress.png" alt="WordPress" title="Las últimas tecnologías" width="800" height="600" >
		</div>
		<div class="home-text">
			<h2>Uso de WordPress</h2>
			<h3>Gracias a WordPress, puedes tener tu web administrable por ti mismo de una forma más económica.</h3>
			<a href="http://potenciandotuweb.com/paginas-web/#wordpress">Más información</a>
		</div>
	</div>

</div>
</section>

<?php get_footer(); ?>