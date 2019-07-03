<section id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php
		/*
			Template Name: Sample Page
		 */

		get_header();
		?>
		<h1><?php the_title(); ?></h1>
		<p>This is an example page. It's different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>
		<blockquote class="wp-block-quote">
		<p>Hi there! I'm a bike messenger by day, aspiring actor by night, and this is my website. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin' caught in the rain.)</p>
		</blockquote>
		<p>...or something like this:</p>
		<blockquote class="wp-block-quote">
		<p>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</p>
		</blockquote>
		<p>As a new WordPress user, you should go to <a href="http://localhost/wordpress/wp-admin/">your dashboard</a> to delete this page and create new pages for your content. Have fun!</p>

		<p><?php the_field('survey');?></p>
		<p><?php the_field('test');?></p>

		<?php
			$field = get_field_object('survey');
			$value = $field['value'];
			$label = $field['choices'][ $value ];
		?>

		<p>Portland: <span class="survey-<?php echo $value; ?>"><?php echo $label; ?></span></p>

		<p><?php the_field('location');?></p>
		<?php
			function my_acf_init() {
				acf_update_setting('google_api_key', 'AIzaSyArQ14C_D7hv9OX3pv3YJZ3PLI9x8AtWHI');
			}
			add_action('acf/init', 'my_acf_init');
		?>
	</main><!-- #main -->
</section><!-- #primary -->

<?php
wp_footer();
