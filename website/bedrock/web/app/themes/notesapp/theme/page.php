<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NotesApp
 */

get_header();
?>

<section id="primary">
	<main id="main">

		<?php

		/* Start the Loop */
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content/content', 'page');

			// If comments are open, or we have at least one comment, load
			// the comment template.
			if (comments_open() || get_comments_number()) {
				comments_template();
			}

		endwhile; // End of the loop.

		if (is_front_page()) {
			$query = new WP_Query([
				'post_type' => 'notes',
				'posts_per_page' => 10
			]);

		?><div class="flex flex-col gap-4 mt-4">
				<?php
				while ($query->have_posts()) {
					$query->the_post();

					get_template_part("template-parts/content/content", 'notes');
				}
				?>
			</div><?php
					notesapp_the_notes_navigation();
				}
					?>




	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
