<?php

use Inc\General;
use Inc\Shortcodes;
use Service\Gutenberg;
use Service\TaxonomyCreator;
use Service\PostTypeCreator;
use Entity\YourBlog;

################################################################################
# Constants
################################################################################

$theme = wp_get_theme();
$textdomain = $theme->get('TextDomain');
$version = $theme->get('Version');

define('THEMEURL', get_stylesheet_directory_uri());
define('THEMEDIR', __DIR__);

define('TEXTDOMAIN', $textdomain);

define('ASSETSURL', THEMEURL . '/assets');
define('ASSETSDIR', THEMEDIR . '/assets');

define('INCDIR', THEMEDIR . DIRECTORY_SEPARATOR . 'Inc');
define('VENDORDIR', THEMEDIR . DIRECTORY_SEPARATOR . 'vendor');

define('ADMINDIR', THEMEDIR . DIRECTORY_SEPARATOR . 'Admin');
define('ADMINURI', THEMEURL . '/Admin');

define('VERSION', $version ?? '0.0.1');

define('ASSETS_VERSION', '0.0.1');

################################################################################
# Load the translations from the child theme if present
################################################################################

add_action('after_setup_theme', function () {
    load_theme_textdomain('accountant', get_stylesheet_directory() . '/languages');
});


################################################################################
# Includes
################################################################################

require_once VENDORDIR . '/autoload.php';

################################################################################
# Init
################################################################################

General::init();
Shortcodes::init();
Gutenberg::init();

################################################################################
# New Post Types
################################################################################

add_action('init', function() {
    YourBlog::init(__('Your Blog','accountant'),__('Your Blogs','accountant'));

},-999);

// Init
TaxonomyCreator::addToInit(); // Taxonomies need to be init before the PostTypes for the correct url structure
PostTypeCreator::addToInit();

