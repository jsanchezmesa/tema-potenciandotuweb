<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

	<!-- Responsive design viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>-->
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- [if lt IE 9]>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/html5.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico">

	<?php wp_head(); ?>
</head>
<body>
	<header class="Header">
		<a href="<?php echo get_option('home'); ?>" class="Header-link">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"
					alt="Logo" title="Logo" width="60" height="60" class="Header-logo">
			<h1 class="Header-title">JSANCHEZMESA</h1>
		</a>

		<?php wp_nav_menu( array(
			'theme_location' => 'main',
			'container' => 'nav',
			'container_class' => 'MainMenu',
			'container_id' => 'MainMenu'
		) ); ?>

		<button class="MainMenu-button is-active icon-showMenu" id="showMenu"></button>
		<button class="MainMenu-button icon-hideMenu" id="hideMenu"></button>

	</header>
	<div class="wrapper" id="wrapper">
