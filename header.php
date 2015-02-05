<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
?><!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- Always force latest IE rendering engine (even in intranet) -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">

	<meta name="description" content="<?php bloginfo('description'); ?>" />


	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png?v=3" />

</head>
<body id="top">
<div class="navbar-wrapper clear-fix">
	<nav class="navbar navbar-default navbar-fixed-top navbar-scroll" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
				        aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" rel="home" href="#" title="Permac logo">
					<img style="max-width:180px; margin-top: -7px;" src="<?php echo get_template_directory_uri(); ?>/img/logo_large.jpg">
				</a>
			</div>

			<?php wp_nav_menu( array( 'sort_column'     => 'menu_order',
			                          'menu_class'      => 'nav navbar-nav navbar-right',
			                          'menu_id'         => '',
			                          'container_id'    => 'navbar',
			                          'container_class' => 'navbar-collapse collapse'
			) ); ?>
		</div>
	</nav>
</div>
