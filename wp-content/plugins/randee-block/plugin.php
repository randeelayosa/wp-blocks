
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
