# Lightbox for Gallery & Image Block

- Stable tag: trunk
- Requires at least: 5.4
- Tested up to: 6.1
- Requires PHP: 5.3
- License: GPLv2 or later
- License URI: http://www.gnu.org/licenses/gpl-2.0.html
- Tags: gallery, image, lightbox, block, block editor, gutenberg
- Contributors: goaroundagain
- Donate link:

Adds a simple & lightweight Lightbox to the standard WordPress Gallery & Image Block. No lock in and no dependencies.

## Description

This WordPress Plugin adds a simple & lightweight Lightbox to the standard WordPress Gallery & Image Block. It detects if a post contains a Gallery or Image Block and then loads & initialize [baguetteBox.js](https://github.com/feimosi/baguetteBox.js), a pure JavaScript Lightbox script without any dependencies and a modern minimal look.

There is no lock in effect. It does not add a new Block Editor/Gutenberg Block and relies solo on the standard WordPress Gallery and Image Block. You can deactivate this plugin at any time and your Gallery and Image Blocks will work as they've done before. Just without the lightbox.

Just **one important thing to remember**: You always have to select *Link to* → *Media File* for all of your Galleries & Images to work properly. If you choose *None* or *Attachment Page* it will not work. But that's fine if you don't want the Lightbox for a specific Image or Gallery.

### Features

Here are the features of baguetteBox.js:

- Written in pure JavaScript
- No dependencies (e.g. jQuery)
- Image captions support
- Responsive
- Supports swipe gestures
- Around 13 KB, 7 KB gzipped

### Works with

- Gallery Block (Default Block)
- Image Block (Default Block)
- Media and Text Block (Default Block)
- Gallery (Default Classic Editor Gallery)
- CoBlocks Gallery Collage / Masonry / Offset / Stacked
- Meow Gallery (+ Gallery Block)
- GenerateBlocks Image (Set `Enable Dynamic Data` → `Link source` to `Single image`)

Don't forget to select Link to → Media File for all of your Galleries & Images to work properly.

**Notice**: At the moment, just Blocks inside a post are supported. Not Blocks in a Widget. You can make it work but have to enqueue the necessary style & script yourself. See *FAQ* --> *How to enqueue the necessary assets (script & style) for blocks outside of posts or for block types that are not supported by default?*

## Installation

1. Upload the folder `gallery-block-lightbox` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add a Gallery or Image Block to your Post and set *Link to* → *Media File*
1. Check your Gallery or Image with Lightbox on the front end by clicking on an image

## Frequently Asked Questions

### When I click on an image, nothing happens

Check if you used the built in Gallery Block and if *Link to* is set to *Media File* in the *Block* sidebar. On an Image Block choose *Add Link* at the *Toolbar*.

### Does it work for single images?

Yes! Just set the Link at the *Toolbar* to *Media File*

### Can I deactivate the Lightbox for a single Image or Gallery?

Set *Media File* to *None* or remove the Link.

### Is there a way to set the default Link to option to Media File?

Since WordPress 5.6 you can now set the default behavior for *Link to*. Go to `yourblog.com/wp-admin/options.php` and search for `image_default_link_type`. Set the value to `file` and hit save. This will apply to all new Image & Gallery Blocks.

Or you can add the follow snipped (WordPress 5.7+ / PHP 7.4+) to your functions.php:
```
add_filter( 'option_image_default_link_type', fn () => 'file' );
```

### How can I add my own Block? / Can I change the CSS selector?

You can change the CSS selector to a gallery (or galleries) containing `<a>` tags used by [baguetteBox.js](https://github.com/feimosi/baguetteBox.js#api) with the `baguettebox_selector` filter:
```
add_filter( 'baguettebox_selector', function( $selector ) { return $selector . ',.my-gallery'; } )
```
You can override the full selector by just returing your selector e.g. to show all images in your post in one lightbox (not per Gallery/Image Block):
```
add_filter( 'baguettebox_selector', function() { return '.entry-content'; } )
```

### How to enqueue the necessary assets (script & style) for blocks outside of posts or for block types that are not supported by default?

If you use a Gallery or Image Block outside a post e.g. inside a Widget and want to apply the Lightbox, you need to ensure that the required baguettebox assets (script & style) are queued using the baguettebox_enqueue_assets filter.

If the Widget is on every page or the majority of pages, you can just enqueue the baguettebox assets everywhere. Just add the following snippet to `functions.php`:
```
add_filter( 'baguettebox_enqueue_assets', '__return_true' );
```
If your Widget is just at the front page, use `is_front_page()`:
```
add_filter( 'baguettebox_enqueue_assets', function( $enqueue_assets ) { return is_front_page(); } );
```
If you want to use the Gallery & Image Block Lightbox plugin with a block type that is not supported by default, you can make use of the `has_block()` function. For instance, in the case of the Kadence Blocks Advanced Gallery, use:
```
add_filter( 'baguettebox_enqueue_assets', function ( $enqueue_assets ) {
	return $enqueue_assets || has_block( 'kadence/advancedgallery' );
} );
```
Of course, in the previous example you also have to add the appropriate baguettebox selector, i.e.
```
add_filter( 'baguettebox_selector', function( $selector ) {
	return $selector . ',.wp-block-kadence-advancedgallery';
} );
```

## Screenshots

1. Simple, modern and minimalistic Lightbox for your Gallery Block<br>![Lightbox for the Gallery Block](https://github.com/goaround/gallery-block-lightbox/blob/master/.wordpress-org/screenshot-1.png)
1. Set *Link to* to *Media File* on your Gallery Block<br>![Set Link to to Media File](https://github.com/goaround/gallery-block-lightbox/blob/master/.wordpress-org/screenshot-2.png)

If you would like to have this as a default behaviour, go to `yourblog.com/wp-admin/options.php` and search for `image_default_link_type`. Set the value to `file` and hit save. This will apply to all new Image & Gallery Blocks.

## Changelog

### 1.13

- Support GenerateBlocks Image

### 1.12

- Support Meow Gallery (+ Gallery Block)

### 1.11

- Add filter baguettebox_enqueue_assets to control enqueing of baguettebox assets.

### 1.10.1

- Fix Image in Media & Text Block

### 1.10.0

- Add two Filter baguettebox_selector for the baguetteBox.js CSS selector and baguettebox_filter for the baguetteBox.js file type RegExp filter

### 1.9.0

- Support new Gallery Block format (will be released with WordPress 5.9 in December 2021) https://make.wordpress.org/core/2021/08/20/gallery-block-refactor-dev-note/

### 1.8.5

- Fix Caption for the single Image Block

### 1.8.4

- Add Caption Support for the Classic Editor Gallery

### 1.8.3

- Fix Regex Filter

### 1.8.2

- Add support for file links with query parameter at the end

### 1.8.1

- Fix image link filter

### 1.8.0

- Add support for .avif, .heif/.heic, .tif

### 1.7.0

- Add support for Media and Text Block

### 1.6.0

- Add support for CoBlocks Gallery Collage / Masonry / Offset / Stacked

### 1.5.0

- Add support for Classic Editor Gallery

### 1.4.0

- Add support for .svg images

### 1.3.1

- Remove trailing slash from register_script/style

### 1.3.0

- Support for the default Image Block

### 1.2.0

- Support HTML for the Caption

### 1.0.0

First release
