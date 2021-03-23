=== Lightbox for the Default Gallery & Image Block (Simple, Lightweight & No Lock In) ===
Contributors: goaroundagain
Donate link:
Tags: gallery, image, lightbox, block, block editor, gutenberg
Requires at least: 5.4
Tested up to: 5.7
Requires PHP: 5.3
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a simple & lightweight Lightbox to the standard WordPress Gallery & Image Block. No lock in and no dependencies.

== Description ==

This WordPress Plugin adds a simple & lightweight Lightbox to the standard WordPress Image Gallery Block. It detects if a post contains a Gallery Block and then loads & initializea baguetteBox.js, a pure JavaScript Lightbox script without any dependencies and a modern minimal look.

There is no lock in effect. It does not add a new Block Editor/Gutenberg Block and relies solo on the standard WordPress Gallery and Image Block. You can deactivate this plugin at any time and your Gallery and Image Blocks will work as they've done before. Just without the lightbox.

Just one important thing to remember: You always have to select Link to → Media File for all of your Galleries & Images to work properly. If you choose None or Attachment Page it will not work. But that's fine if you don't want the Lightbox for a specific Image or Gallery.

Here are the features of baguetteBox.js:

* Written in pure JavaScript
* No dependencies (e.g. jQuery)
* Image captions support
* Responsive
* Supports swipe gestures
* Around 13 KB, 7 KB gzipped

Works with:

* Gallery Block (Default Block)
* Image Block (Default Block)
* Media and Image Block (Default Block)
* Gallery (Default Classic Editor Gallery)
* CoBlocks Gallery Collage / Masonry / Offset / Stacked

Don't forget to select Link to → Media File for all of your Galleries & Images to work properly.

== Installation ==

1. Upload the folder `gallery-block-lightbox` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add a Gallery or Image Block to your Post and set *Link to* → *Media File*
1. Check your Gallery or Image with Lightbox on the front end by clicking on an image

== Frequently Asked Questions ==

= When I click on an image, nothing happens =

Check if you used the built in Gallery Block and if *Link to* is set to *Media File* in the *Block* sidebar. On an Image Block choose *Add Link* at the *Toolbar*.

If you would like to have this as a default behaviour go to *yourblog.com/wp-admin/options.php* and search for *image_default_link_type*. Set the value to *file* and hit save. This will apply to all new Image & Gallery Blocks.

= Does it work for single images? =

Yes! Just set the Link at the *Toolbar* to *Media File*

= Can I deactivate the Lightbox for a Gallery? =

Set *Media File* to *None* or remove the Link.

== Screenshots ==

1. Simple, modern and minimalistic Lightbox for your Gallery Block
1. Set *Link to* to *Media File* on your Gallery Block

== Changelog ==

Hint: With WordPress 5.6 you can set the default behaviour for *Link to*. Go to *yourblog.com/wp-admin/options.php* and search for *image_default_link_type*. Set the value to *file* and hit save. This will apply to all new Image & Gallery Blocks.

= 1.8.1 =

- Fix image link filter

= 1.8.0 =

- Add support for .avif, .heif/.heic, .tif

= 1.7.0 =

- Add support for Media and Text Block

= 1.6.0 =

- Add support for CoBlocks Gallery Collage / Masonry / Offset / Stacked

= 1.5.0 =

- Add support for Classic Editor Gallery

= 1.4.0 =

- Add support for .svg images

= 1.3.1 =

- Remove trailing slash from register_script/style

= 1.3.0 =

- Support for the default Image Block

= 1.2.0 =

- Support HTML for the Caption

= 1.0.0 =

First release

== Upgrade Notice ==
