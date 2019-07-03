<section id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
		/*
			Template Name: Services Template
		 */

		get_header();
		?>
		<h1><?php the_title(); ?></h1>

		<?php
			// check if the flexible content field has rows of data
			if( have_rows('service_type') ):

			     // loop through the rows of data
			    while ( have_rows('service_type') ) : the_row(); ?>
						<div class="cool-container">
			        <?php if( get_row_layout() == 'service_info' ): ?>
								<div class="cool-text">
				        	<h2><?php the_sub_field('service_text'); ?> </h2>
								</div>
								<div class="cool-image">
				        	<img src="<?php the_sub_field('service_photo'); ?>">
								</div>

			       <?php endif;

			    endwhile;

			else :

			    // no layouts found

			endif; ?>

	</main>
</section>

<?php
wp_footer();
