<?php

namespace Inc;

use JetBrains\PhpStorm\NoReturn;
use Service\Singleton;

class General
{
    use Singleton;

    /**
     * Init general commands and hooks
     */
    public static function init()
    {
        General::instance();
    }


    /**
     * General constructor. Theme default options
     */
    private function __construct()
    {


        ################################################################################
        # setup theme
        ################################################################################

        add_action('init', [$this, 'registerScripts']);
        add_action('init', [$this, 'registerStyles']);
        add_action('wp_enqueue_scripts', [$this, 'enqueueScripts']);

        ################################################################################
        # Settings
        ################################################################################

        add_action('acf/init', function() {

            // Check function exists.
            if( function_exists('acf_add_options_page') ) {

                // Register options page.
                $option_page = acf_add_options_page(array(
                    'page_title'    => __('Theme General Settings'),
                    'menu_title'    => __('Theme Settings'),
                    'menu_slug'     => 'theme-general-settings',
                    'capability'    => 'edit_posts',
                    'redirect'      => false
                ));
            }
       });

        add_theme_support('align-wide');


//         Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        register_nav_menus(
            array(
                'primary' => esc_html__( 'Primary menu', 'accountant' )
            )
        );

        /*
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
        */
        $logo_width  = 244;
        $logo_height = 37;

        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
            )
        );

    }

    /**
     * register styles for the theme
     */
    public function registerStyles()
    {
        wp_register_style(TEXTDOMAIN . '-style-css', ASSETSURL . '/css/style.css', '', ASSETS_VERSION);
        wp_register_style(TEXTDOMAIN . '-style-md-css', ASSETSURL . '/css/style-md.css', '', ASSETS_VERSION, 'screen and (min-width: 768px)');
        wp_register_style(TEXTDOMAIN . '-style-lg-css', ASSETSURL . '/css/style-lg.css', '', ASSETS_VERSION, 'screen and (min-width: 1024px)');

        wp_register_style(TEXTDOMAIN . '-style-main-css', THEMEURL . '/style.css', '', ASSETS_VERSION);
        wp_register_style(TEXTDOMAIN . '-font-css', ASSETSURL . '/font/font-style.css', '', ASSETS_VERSION);
    }

    /**
     * register js scripts for the theme
     */
    public function registerScripts()
    {
        wp_register_script(TEXTDOMAIN . '-main-js', ASSETSURL . '/js/main.js', ['jquery'], ASSETS_VERSION, true);
    }

    /**
     *  enqueue all styles and scripts
     */
    public function enqueueScripts()
    {
        wp_enqueue_style(TEXTDOMAIN . '-font-css');
        wp_enqueue_style( TEXTDOMAIN . '-style-main-css');
        wp_enqueue_style( TEXTDOMAIN . '-style-css');
        wp_enqueue_style( TEXTDOMAIN . '-style-md-css');
        wp_enqueue_style( TEXTDOMAIN . '-style-lg-css');

        wp_enqueue_script(TEXTDOMAIN . '-main-js');
    }



}
