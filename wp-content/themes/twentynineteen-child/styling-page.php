<div class="option-container">
	<?php
	/*
		Template Name: Styling Page
	 */

	get_header();
	?>
	<h1 class="option-header"><?php the_title(); ?></h1>

	<div class="option-group">
		<?php

		// check if the repeater field has rows of data
		if( have_rows('options') ):

		 	// loop through the rows of data
		    while ( have_rows('options') ) : the_row(); ?>

				<div class="all-options">
					<div>
						<h2 class="option-text">
			        <?php the_sub_field('option_text'); ?>
						</h2>
					</div>

					<div>
						<p class="option-description">
			        <?php the_sub_field('option_description'); ?>
						</p>
					</div>
				</div>

			<?php
		    endwhile;

		else :

		    // no rows found

		endif;

		?>
	</div>
</div>

<?php
wp_footer();
