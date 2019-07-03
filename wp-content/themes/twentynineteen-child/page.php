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

	<section class="content-area">
		<main id="main" class="site-main">
			<h1>anything</h1>

			<div class="grid-container">
				<div class="grid-x">
					<div class="cell small-6 large-4">
						<span>Cell</span>
					</div>
					<div class="cell small-6 large-8">
						<span>Cell</span>
					</div>
				</div>
			</div>

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

			get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
wp_footer();
