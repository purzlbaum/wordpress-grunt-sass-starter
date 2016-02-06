<?php
/**
 * Add the scripts we need on the site in the way the should be included
 * See: http://wp.smashingmagazine.com/2011/10/12/developers-guide-conflict-free-javascript-css-wordpress/
 *
 * Code from: required+ Foundation (http://themes.required.ch/)
 *
 * @package wordpress-grunt-sass-starter
 * @author Claudio Schwarz
 * @since  wordpress-grunt-sass-starter 0.3.0
 */

/**
 * Register stylesheets
 * @since  wordpress-grunt-sass-starter 0.3.0
 *
 * @return void
 */

function wp_load_stylesheet() {

    /*
     * Registers the minified CSS
     */
    wp_register_style(
        'wp-minified-css', //handle
        get_template_directory_uri() . '/assets/css/default.css',
        null,   // no dependencies
        false //version
    );

    /*
     * Loads our minified CSS
     */
    wp_enqueue_style( 'wp-minified-css' );

}

add_action( 'wp_enqueue_scripts', 'wp_load_stylesheet' );
