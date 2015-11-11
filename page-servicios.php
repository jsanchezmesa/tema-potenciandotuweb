<?php
/*
Template Name: Servicios
*/

get_header();

?>

<section class="section-main-home" id="main">

<div class="home-title">
	<h1>Mejora tu presencia en Internet con nuestra ayuda</h1>
</div>

<div class="banners">
	<div class="banner-page" name="responsive">
		<div class="home-image">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/responsive.png" alt="Diseño responsive" title="Diseño responsive" width="800" height="571" >
		</div>
		<div class="home-text">
			<h2>Diseño web</h2>
			<h3>
				<ul>
					<li>Creación del diseño de tu web desde cero y completamente personalizado.</li>
					<li>Modificación de tu web ya creada para adaptarla a los patrones de diseño actuales.</li>
					<li>Todos los diseños son "responsive" para que se vean de forma adecuada independientemente del dispositivo donde se visualice.</li>
				</ul>
			</h3>
		</div>
	</div>

	<div class="banner-page" name="html5">
		<div class="home-image">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/html5-css3.png" alt="Las últimas tecnologías" title="Las últimas tecnologías" width="800" height="571" >
		</div>
		<div class="home-text">
			<h2>Uso de las últimas tecnologías</h2>
			<h3>
				<ul>
					<li>Utilización de las más modernas tecnologías existentes.</li>
					<li>Haz que tu página se vea en todo tipo de dispositivo sustituyendo Flash por HTML5.</li>
					<li>Usa esquinas redondeadas, sombras, etc. gracias a CSS3.</li>
					<li>Uso de Javascript y jQuery para conseguir sorprendentes efectos como menús desplegables.</li>
				</ul>
			</h3>
		</div>
	</div>

	<div class="banner-page" name="wordpress">
		<div class="home-image">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/wordpress.png" alt="WordPress" title="Las últimas tecnologías" width="800" height="600" >
		</div>
		<div class="home-text">
			<h2>Uso de WordPress</h2>
			<h3>
				<ul>
					<li>Uso de la plataforma WordPress para construir tu web ahorrándote mucho dinero. Esta tecnología no se limita a blogs.</li>
					<li>Posibilidad de elegir un tema ya existente o si lo prefieres te lo construimos a medida para ti.</li>
					<li>La plataforma WordPress te permite administrar el contenido de tu web por ti mismo.</li>
					<li>WordPress es usado por millones de webs en todo el mundo, por lo que es una plataforma probada en rendimiento y seguridad.</li>
				</ul>
			</h3>
		</div>
	</div>

</div>

</section>

<?php get_footer(); ?>