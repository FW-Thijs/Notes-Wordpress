<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simpleTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	wp_enqueue_style("style", get_stylesheet_uri());
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="site-branding">
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button><?php esc_html_e('Primary Menu', 'simpletheme'); ?></button>
				<?php
				wp_nav_menu([
						'menu_id' => 'primary-menu',
						"container_class" => "bg-blue-500"
				]);
				?>
			</nav>
		</header>