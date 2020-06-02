# Gallery Block Lightbox

This WordPress Plugin adds a simple & lightweight Lightbox to the standard WordPress Image Gallery Block. It detects if a post contains a Gallery Block and then loads & initializea [baguetteBox.js](https://github.com/feimosi/baguetteBox.js), a pure JavaScript Lightbox script without any dependencies and a modern minimal look.

There is no lock in effect. It does not add a new Block Editor/Gutenberg Block and relies solo on the standard WordPress Gallery Block. You can deactivate this plugin at any time and your Gallery Blocks will work as they've done before. Just without the lightbox.

Just **one important thing to remember**: You always have to select *Link to* → *Media File* for all of your Galleries to work properly. If you choose *None* or *Attachment Page* it will not work.

## Features

Here are the features of baguetteBox.js:

- Written in pure JavaScript
- No dependencies (e.g. jQuery)
- Image captions support
- Responsive
- Supports swipe gestures
- Around 13 KB, 7 KB gzipped

## Installation

1. Upload the folder `gallery-block-lightbox` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Add a Gallery Block to your Post and set *Link to* → *Media File*
1. Check your Gallery with Lightbox on the front end by clicking on an image

## Frequently Asked Questions

### When I click on a image, nothing happens

Check if you used the build in Gallery Block and if *Link to* is set to *Media File* in the *Block* sidebar.

### Does it work for singe images?

No, it only works with the standard Gallery Block.

### Can I deactivate the Lightbox for a Gallery?

Set *Media File* to *None*.

## Screenshots

1. Simple and modern minimal Lightbox for your Gallery Block
![Lightbox for the Gallery Block](https://github.com/goaround/gallery-block-lightbox/blob/master/.wordpress-org/screenshot-1.png)
1. Set *Link to* to *Media File* on your Gallery Block
![Set Link to to Media File](https://github.com/goaround/gallery-block-lightbox/blob/master/.wordpress-org/screenshot-2.png)

## Changelog

### 1.0.0

First release


