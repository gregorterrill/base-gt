<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if not responsive -->

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_url').'?'.filemtime( get_stylesheet_directory() . '/style.css'); ?>" /><!-- force a refresh of the css whenever file is modified -->
	
		<!--[if lt IE 9]><script src="<?php echo get_stylesheet_directory_uri(); ?>/js/utils/html5shiv.js"></script><![endif]-->

		<meta property="og:type" content="website">
		<meta property="og:title" content="<?php bloginfo( 'name' ); ?>">
		<meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-precomposed.png">
		<meta property="og:description" content="<?php bloginfo( 'description' ); ?>">
		<meta property="og:url" content="<?php echo home_url(); ?>">

		<meta name="twitter:card" content="summary">
		<meta name="twitter:url" content="<?php echo home_url(); ?>">
		<meta name="twitter:title" content="<?php bloginfo( 'name' ); ?>">
		<meta name="twitter:description" content="<?php bloginfo( 'description' ); ?>">
		<meta name="twitter:image" content="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon-precomposed.png">

		<?php wp_head(); ?>
	</head>

	<?php $class_name = (is_front_page()) ? 'front' : 'inner'; ?>

	<body <?php body_class( $class_name ); ?>>

	<header class="full">
		<a href="<?php echo home_url(); ?>" class="logo bound">
			<h1>
				<?php echo bloginfo( 'name' ); ?>
			</h1>
		</a>
	</header>

	<nav class="nav-main full" role="navigation">
		<div class="bound">
      <?php
        if (has_nav_menu('primary_navigation')) {
          wp_nav_menu(array('theme_location' => 'primary_navigation'));
        }
      ?>
      	</div>
	</nav>
	
	<div class="main bound">