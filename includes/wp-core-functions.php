<?php
remove_action('wp_head', 'wp_generator');

add_theme_support( 'title-tag' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'post-thumbnails' );

function deregister_wp_embed(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'deregister_wp_embed' );