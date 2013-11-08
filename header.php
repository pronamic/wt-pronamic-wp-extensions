<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<title><?php wp_title( '' ); ?></title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
    
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<a class="sr-only" href="#content">Skip to main content</a>

		<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".pwe-navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" class="navbar-brand">
						<?php bloginfo( 'name' ); ?>
					</a>
				</div>

				<nav class="collapse navbar-collapse pwe-navbar-collapse" role="navigation">
					<?php

					wp_nav_menu( array(
						'theme_location' => 'header-navbar',
						'menu_class'     => 'nav navbar-nav',
						'fallback_cb'    => '',
					) );

					?>

					<?php

					wp_nav_menu( array(
						'theme_location' => 'header-navbar-right',
						'menu_class'     => 'nav navbar-nav navbar-right',
						'fallback_cb'    => '',
					) );

					?>
				</nav>
			</div>
		</header>

		<div class="jumbotron">
			<div class="container">
				<h1><?php pwe_title(); ?></h1>
			</div>
	    </div>

		<div class="container">
