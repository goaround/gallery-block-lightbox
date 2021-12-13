<?php
/**
 * Plugin Name:  Lightbox for Gallery & Image Block
 * Plugin URI:
 * Description:  Adds a Lightbox to the Block Editor (Gutenberg) Gallery & Image Block.
 * Author:       Johannes Kinast <johannes@travel-dealz.de>
 * Author URI:   https://go-around.de
 * Version:     1.10.1
 */
namespace Gallery_Block_Lightbox;

function register_assets() {
	wp_register_style( 'baguettebox-css', plugin_dir_url( __FILE__ ) . 'dist/baguetteBox.min.css', [], '1.11.1' );
	wp_register_script( 'baguettebox', plugin_dir_url( __FILE__ ) . 'dist/baguetteBox.min.js', [], '1.11.1', true );

	/**
     * Filters the CSS selector of baguetteBox.js
     *
     * @since 1.10.0
     *
     * @param string  $value  The CSS selector to a gallery (or galleries) containing a tags
     */
	$baguettebox_selector = apply_filters('baguettebox_selector', '.wp-block-gallery,:not(.wp-block-gallery)>.wp-block-image,.wp-block-media-text__media,.gallery,.wp-block-coblocks-gallery-masonry,.wp-block-coblocks-gallery-stacked,.wp-block-coblocks-gallery-collage,.wp-block-coblocks-gallery-offset,.wp-block-coblocks-gallery-stacked' );

	/**
     * Filters the image files filter of baguetteBox.js
     *
     * @since 1.10.0
     *
     * @param string  $value  The RegExp Pattern to match image files. Applied to the a.href attribute
     */
	$baguettebox_filter = apply_filters( 'baguettebox_filter',  '/.+\.(gif|jpe?g|png|webp|svg|avif|heif|heic|tif?f|)($|\?)/i' );

	wp_add_inline_script( 'baguettebox', 'window.addEventListener("load", function() {baguetteBox.run("' . $baguettebox_selector . '",{captions:function(t){var e=t.parentElement.classList.contains("wp-block-image")||t.parentElement.classList.contains("wp-block-media-text__media")?t.parentElement.querySelector("figcaption"):t.parentElement.parentElement.querySelector("figcaption,dd");return!!e&&e.innerHTML},filter:' . $baguettebox_filter . '});});' );

}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\register_assets' );

function enqueue_assets() {
	if ( has_block( 'core/gallery' ) || has_block( 'core/image' ) || has_block( 'core/media-text' ) || get_post_gallery() || has_block('coblocks/gallery-masonry') || has_block('coblocks/gallery-stacked') || has_block('coblocks/gallery-collage') || has_block('coblocks/gallery-offset') || has_block('coblocks/gallery-stacked') ) {
		wp_enqueue_script( 'baguettebox' );
		wp_enqueue_style( 'baguettebox-css' );
	}
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
