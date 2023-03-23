<?php
namespace Entity;

use Service\PostTypeCreator;

class YourBlog extends PostType
{
    public static $MACHINE_NAME = 'your_blog';


    public static $METAFIELDS = ['your_blog_address_field'];

    public $post_address_field;

    /**
     * @param $singularName
     * @param $pluralName
     */
    public static function init($singularName, $pluralName)
    {
        PostTypeCreator::addPostType(static::$MACHINE_NAME , $singularName, $pluralName);

        PostTypeCreator::setArgs(array(
            'menu_icon'      => 'dashicons-welcome-write-blog',
            'supports'      => ['title','editor','author'],
            'show_in_rest'  => true,
        ),static::$MACHINE_NAME);
        PostTypeCreator::setLabels([],static::$MACHINE_NAME);

    }
}

