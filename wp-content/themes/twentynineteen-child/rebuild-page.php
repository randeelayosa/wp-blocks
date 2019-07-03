<?php
	/*
		Template Name: RWest Rebuild Practice Template
	 */

	get_header();
	?>
	<!-- gallery slider hero -->
	<div class="hero">
		<?php

		$images = get_field('hero');

		if( $images ): ?>
	    <div id="slider" class="flexslider">
	      <div class="slides">
	        <?php foreach( $images as $image ): ?>
	          <div>
	            <img src="<?php echo $image['url']; ?>" />
	          </div>
	        <?php endforeach; ?>
	      </div>
	    </div>

		<?php endif; ?>
		
	</div>

	<!-- repeater field of work images -->
	<div class="works-container">
		<div class="works">
			<?php
			if( have_rows('work') ):

					while ( have_rows('work') ) : the_row(); ?>

					<img class="work-images" src="<?php the_sub_field('work_images'); ?>" width="360px" height="360px" />

				<?php
			  endwhile;

			else :

			    // no layouts found

			endif; ?>
		</div>
	</div>

<?php
wp_footer();
