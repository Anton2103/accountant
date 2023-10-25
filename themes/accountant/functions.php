<?php

use Inc\General;
use Inc\Shortcodes;
use Service\Gutenberg;
use Service\TaxonomyCreator;
use Service\PostTypeCreator;
use Entity\YourBlog;
use Entity\Faq;
use Inc\ImagesSettings;


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

define('VERSION', $version ?? '0.0.6');

define('ASSETS_VERSION', '1.0.0');

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
    Faq::init(__('FAQ', 'accountant'), __('FAQs', 'accountant'));
},-999);

// Init
TaxonomyCreator::addToInit(); // Taxonomies need to be init before the PostTypes for the correct url structure
PostTypeCreator::addToInit();
