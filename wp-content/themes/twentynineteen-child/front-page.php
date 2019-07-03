<section id="primary" class="content-area">
	<main id="main" class="site-main">
	<?php
	/*
		Template Name: Main
	 */

	get_header();
	?>

	<h1><?php the_title(); ?></h1>
	<p><?php the_field('home_page_header_description');?></p>
	<img src="<?php the_field('home_page_header_image');?>" alt="" />

		<?php
		// check if the repeater field has rows of data
		if( have_rows('home_page_button_links') ):
		 	// loop through the rows of data
		    while ( have_rows('home_page_button_links') ) : the_row();?>
		        <a target="_blan" href="<?php the_sub_field('button_url');?>"><button type="button"><?php the_sub_field('button_text');?></button></a>
		    <?php endwhile;

		else :

		    // no rows found

		endif;

		?>

		<?php

	$images = get_field('home_page_gallery');
	$size = 'full'; // (thumbnail, medium, large, full or custom size)

	if( $images ): ?>
	    <ul class="gallery">
	        <?php foreach( $images as $image ): ?>
	            <li>
	            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
	            </li>
	        <?php endforeach; ?>
	    </ul>
	<?php endif; ?>


		</main><!-- #main -->
	</section><!-- #primary -->

<?php
wp_footer();
