
<?php
/**
 * Plugin Name: Randee
 * Author: Randee
 * Version: 1.0.0
 */

function randee() {
  wp_enqueue_script(
    'randee-block',
    plugin_dir_url(__FILE__) . 'randee-block.js',
    array(
      'wp-blocks',
      'wp-element',
      'wp-editor'
    ),
    filemtime( plugin_dir_path( __FILE__ ) . 'randee-block.js' )
  );

  wp_register_style(
       'randee-block',
       plugins_url( 'randee-block.css', __FILE__ ),
       array(  ),
       filemtime( plugin_dir_path( __FILE__ ) . 'randee-block.css' )
   );

   wp_register_style(
        'randee-block',
        plugins_url( 'style.css', __FILE__ ),
        array( ),
        filemtime( plugin_dir_path( __FILE__ ) . 'style.css' )
    );

  register_block_type( 'randee-block/randee-block', array(
    'style' => 'randee-block',
    'editor_style' => 'randee-block',
    'editor_script' => 'randee-block',
  ) );
}

// add_action('enqueue_block_editor_assets', 'randee');
add_action('init', 'randee');


function randee_dynamic_render_callback( $attributes, $content ) {
    $recent_posts = wp_get_recent_posts( array(
        'numberposts' => 1,
        'post_status' => 'publish',
    ) );
    if ( count( $recent_posts ) === 0 ) {
        return 'No posts';
    }
    $post = $recent_posts[ 0 ];
    $post_id = $post['ID'];
    return sprintf(
        '<a class="wp-block-my-plugin-latest-post" href="%1$s">%2$s</a>',
        esc_url( get_permalink( $post_id ) ),
        esc_html( get_the_title( $post_id ) )
    );
}

function randee_dynamic() {
    wp_register_script(
        'randee-block',
        plugins_url( 'randee-block.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-data' )
    );

    register_block_type( 'randee/randee_dynamic', array(
        'editor_script' => 'randee_block',
        'render_callback' => 'randee_dynamic_render_callback'
    ) );

}
add_action( 'init', 'randee_dynamic' );
