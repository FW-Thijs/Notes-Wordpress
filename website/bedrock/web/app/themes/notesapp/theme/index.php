<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NotesApp
 */

get_header();
?>

<section id="primary">
	<main id="main">

		<!-- <?php
		if (have_posts()) {

			if (is_home() && !is_front_page()) :
		?>
				<header class="entry-header">
					<h1 class="entry-title"><?php single_post_title(); ?></h1>
				</header><!-- .entry-header -->
			<?php
			endif;

			// Load posts loop.
			while (have_posts()) {
				the_post();
				get_template_part('template-parts/content/content');
			}

			// Previous/next page navigation.
			notesapp_the_posts_navigation();
		} else {

			// If no content, include the "No posts found" template.
			get_template_part('template-parts/content/content', 'none');
		}
		if (is_home() && !is_front_page()) :
			echo "<div>";
			$query = new WP_Query([
				'post_type' => "notes",
				'posts_per_page' => 10
			]);
			while ($query->have_posts()) {
				$query->the_post();
			?>
				<div class="entry-content">
					<?php the_title(); ?>
					<?php the_content(); ?>
				</div>
			<?php
			}
			echo "</div>";
		endif;
		?>
	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
