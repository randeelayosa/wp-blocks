<?php
/**
*cuttom Gutenberg
*/
function custom_block_gutenberg_default_color(){
  add_theme_support(
    'editor-color-pallette',
    array(
      array(
        'name' => 'White',
        'slug' => 'slug',
        'color' => '#ffffff',
      )
    )
  );
  // add_theme_support(
  //   'editor_font_sizes',
  //   array(
  //     array(
  //       'name' => 'Large',
  //       'slug' => 'large',
  //       'size' => 30,
  //     )
  //   )
  // );
}

add_action('init', 'custom_block_gutenberg_default_color');

// function customblockwork_gutenberg_blocks(){
//   wp_register_script( 'custom-cta-js', get_template_directory_uri(), '/build/index.js', array('wp-blocks'));
//
//   register_block_type('customblock/custom-cta', array(
//     'editor_script' => 'custom-cta-js'
//   ));
//
// }
//
// add_action('init', 'customblockwork_gutenberg_blocks');
