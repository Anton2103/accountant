<?php

namespace Inc;

use Service\Singleton;

class Shortcodes
{
    use Singleton;

    /**
     * Init general commands and hooks
     */
    public static function init()
    {
        Shortcodes::instance();
    }


    /**
     * Shortcodes constructor. Theme default options
     */
    private function __construct()
    {

    }


}