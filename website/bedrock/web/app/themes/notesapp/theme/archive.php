<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NotesApp
 */

get_header();
?>

	<section id="primary">
		<main id="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
			</header><!-- .page-header -->

			<div class="flex flex-col gap-4">
			<?php
			// Start the Loop.

			while ( have_posts() ) :
				the_post();
				$post_type = get_post_type();
				if (file_exists(dirname(__FILE__) . "/template-parts/content/content-" . $post_type . ".php")) {
					get_template_part( 'template-parts/content/content', $post_type );
				} else {
					get_template_part( 'template-parts/content/content', 'excerpt' );
				}

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			notesapp_the_posts_navigation();

		else :

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</div>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
