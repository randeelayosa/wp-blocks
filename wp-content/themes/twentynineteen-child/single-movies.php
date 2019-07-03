<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<h1><?php the_title(); ?></h1>

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post(); ?>

				<h3 class="rating"><?php echo the_field('rating');?></h3>

			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
wp_footer();
