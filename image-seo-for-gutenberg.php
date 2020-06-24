<?php
/**
 * Plugin Name: Image SEO for Gutenberg
 * Description: Do SEO for the post, pages and custom post type content images for the Gutenberg images.
 * Plugin URI: https://github.com/maheshwaghmare/image-seo-for-gutenberg/
 * Author: Mahesh M. Waghmare
 * Author URI: https://maheshwaghmare.com/
 * Version: 1.0.0
 * License: GPL2
 * Text Domain: image-seo-for-gutenberg
 *
 * @package Image SEO for Gutenberg
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Set constants.
define( 'IMAGE_SEO_FOR_GUTENBERG_VER', '1.0.0' );
define( 'IMAGE_SEO_FOR_GUTENBERG_FILE', __FILE__ );
define( 'IMAGE_SEO_FOR_GUTENBERG_BASE', plugin_basename( IMAGE_SEO_FOR_GUTENBERG_FILE ) );
define( 'IMAGE_SEO_FOR_GUTENBERG_DIR', plugin_dir_path( IMAGE_SEO_FOR_GUTENBERG_FILE ) );
define( 'IMAGE_SEO_FOR_GUTENBERG_URI', plugins_url( '/', IMAGE_SEO_FOR_GUTENBERG_FILE ) );

require_once IMAGE_SEO_FOR_GUTENBERG_DIR . 'src/init.php';