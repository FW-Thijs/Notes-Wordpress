<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NotesApp
 */

?>

<header id="masthead">


	<nav id="site-navigation" aria-label="<?php esc_attr_e('Main Navigation', 'notesapp'); ?>" class="flex justify-between w-full p-4">
		<div>
			<?php
			if (is_front_page()) :
			?>
				<h1><?php bloginfo('name'); ?></h1>
			<?php
			else :
			?>
				<p><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			<?php
			endif;

			$notesapp_description = get_bloginfo('description', 'display');
			if ($notesapp_description || is_customize_preview()) :
			?>
				<p><?php echo $notesapp_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
					?></p>
			<?php endif; ?>
		</div>

		<div>
			<button id="menu-button" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'notesapp'); ?></button>

			<div class="fixed right-0 hidden w-64 bg-gray-100 p-4 h-full <?= is_admin_bar_showing() ? "top-8" : "top-0" ?>" id="menu">

			<button id="menu-button" aria-controls="primary-menu" aria-expanded="false" class="block py-6">Close Menu</button>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s" aria-label="submenu">%3$s</ul>',
					)
				);
				?>
			</div>
		</div>
	</nav><!-- #site-navigation -->

</header><!-- #masthead -->