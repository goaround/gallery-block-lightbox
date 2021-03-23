<?php
/**
 * Plugin Name:  Lightbox for Gallery & Image Block
 * Plugin URI:
 * Description:  Adds a Lightbox to the Block Editor (Gutenberg) Gallery & Image Block.
 * Author:       Johannes Kinast <johannes@travel-dealz.de>
 * Author URI:   https://go-around.de
 * Version:     1.8.1
 */
namespace Gallery_Block_Lightbox;

function register_assets() {
	wp_register_script( 'baguettebox', plugin_dir_url( __FILE__ ) . 'dist/baguetteBox.min.js', [], '1.11.1', true );
	wp_add_inline_script( 'baguettebox', 'window.addEventListener("load", function() {baguetteBox.run(".wp-block-gallery,.wp-block-image,.wp-block-media-text,.gallery,.wp-block-coblocks-gallery-masonry,.wp-block-coblocks-gallery-stacked,.wp-block-coblocks-gallery-collage,.wp-block-coblocks-gallery-offset,.wp-block-coblocks-gallery-stacked",{captions:function(t){var e=t.parentElement.getElementsByTagName("figcaption")[0];return!!e&&e.innerHTML},filter:/.+\.(gif|jpe?g|png|webp|svg|avif|heif|heic|tif?f|)$/i});});' );
	wp_register_style( 'baguettebox-css', plugin_dir_url( __FILE__ ) . 'dist/baguetteBox.min.css', [], '1.11.1' );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\register_assets' );

function enqueue_assets() {
	if ( has_block( 'core/gallery' ) || has_block( 'core/image' ) || has_block( 'core/media-text' ) || get_post_gallery() || has_block('coblocks/gallery-masonry') || has_block('coblocks/gallery-stacked') || has_block('coblocks/gallery-collage') || has_block('coblocks/gallery-offset') || has_block('coblocks/gallery-stacked') ) {
		wp_enqueue_script( 'baguettebox' );
		wp_enqueue_style( 'baguettebox-css' );
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
