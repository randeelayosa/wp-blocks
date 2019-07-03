<?php

/*
Plugin Name: Randee Dynamic Blocks
*/

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
        'randee-dynamic',
        plugins_url( 'randee-dynamic-block.js', __FILE__ ),
        array( 'wp-blocks', 'wp-element', 'wp-data' )
    );

    register_block_type( 'randee/randee-dynamic', array(
        'editor_script' => 'randee_dynamic',
        'render_callback' => 'randee_dynamic_render_callback'
    ) );

}
add_action( 'init', 'randee_dynamic' );
