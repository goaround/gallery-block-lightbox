<?php
/**
 * Plugin Name:  Gutenberg Gallery Lightbox
 * Plugin URI:
 * Description:  Adds a Lightbox to the Gutenberg Gallery Block.
 * Author:       Johannes Kinast <johannes@travel-dealz.de>
 * Author URI:   https://go-around.de
 * Version:     1.0.0
 */


add_action( 'wp_enqueue_scripts', 'gutenberg_gallery_lightbox_register' );
function gutenberg_gallery_lightbox_register () {
	wp_register_script( 'gutenberg-gallery-lightbox', plugin_dir_url( __FILE__ ) . '/dist/baguetteBox.min.js', [], '1.11.0', true );
	wp_add_inline_script( 'gutenberg-gallery-lightbox', 'var options={captions:function(t){var e=t.parentElement.getElementsByTagName("figcaption")[0];return!!e&&e.textContent}};baguetteBox.run(".wp-block-gallery",options);' );
	wp_register_style( 'gutenberg-gallery-lightbox-css', plugin_dir_url( __FILE__ ) . '/dist/baguetteBox.min.css', [], '1.11.0' );
}

add_action( 'wp_enqueue_scripts', 'gutenberg_gallery_lightbox_enqueue' );
function gutenberg_gallery_lightbox_enqueue() {
	if ( has_block( 'gallery' ) ) {
		wp_enqueue_script( 'gutenberg-gallery-lightbox' );
		wp_enqueue_style( 'gutenberg-gallery-lightbox-css' );
	}
}